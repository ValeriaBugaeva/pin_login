<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Shift;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Image;
use URL;
use Auth;
use PragmaRX\Countries\Package\Countries;
use App\Google2fa as TwoFactor;
use Google2FA;
use Hash;

class ProfileController extends Controller
{
    protected $country;

    public function __construct(Countries $country)
    {
        if (setting('email_verification')) {
            $this->middleware(['verified']);
        }
        $this->middleware(['auth','web','2fa']);
        $this->countries = $country->all()->sortBy('name.common')->pluck('name.common');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 2){
            return $this->defaultSettings();
        }else{

            if (!setting('2fa')) {
                $user = auth()->user();
                $role = $user->roles->first();
                $activies = auth()->user()->actions->sortByDesc('created_at')->take(6)->all();
                $countries = $this->countries;

                return view('users.profile.index', [
                    'user' => $user,
                    'role' => $role,
                    'activities' => $activies,
                    'countries' => $countries,
                ]);
            }

            return $this->activeTwoFactor();
        }



    }

    private function defaultSettings()
    {
        {
            $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Account Settings"]];
            $shiftData = $this->getShiftDetails();

            return view('company.settings', ['breadcrumbs' => $breadcrumbs,'shiftdata'=>$shiftData]);
        }
    }



    public function getShiftDetails(){
        $user_id = Auth::id();
        $shiftArr = Shift::where('user_id', $user_id)->get();
        return $shiftArr;
    }

    private function activeTwoFactor()
    {
        $generated = '';

        if (!empty(auth()->user()->google2fa)) {
            $generated = $this->generateCode();
        }

        $user = auth()->user();
        $role = $user->roles->first();
        $activies = auth()->user()->actions->sortByDesc('created_at')->take(6)->all();
        $countries = $this->countries;

        return view('users.profile.index', [
        'user' => $user,
        'role' => $role,
        'activities' => $activies,
        'countries' => $countries,
        'generated' => $generated,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->role_id == 2){

            $this->userProfileUpdate($request, $id);
            return redirect()->back()->with('success', 'Account details Updated Successfully');

        }else{
            $user = User::find($id);

            $this->validate($request, [
                'fullname' => 'required|regex:/^[A-Za-z0-9_.,() ]+$/|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
                'username' => 'required|regex:([a-zA-Z0-9_@]+)|max:50|unique:users,username,'.$user->id,
            ],[
                'fullname.regex' => 'Invalid Entry! The fullname only letter and numbers are allowed',
            ]);

            $user->fullname = $request->fullname;
            $user->username = $request->username;
            $user->email = $request->email;

            // Updated avatar
            $avatarImg = $request->avatar;

            if (isset($avatarImg)){
                $avatar = $this->updateAvatar($avatarImg);
            }else{
                $avatar = $user->avatar;
            }

            $user->avatar = $avatar;
            $user->save();

            // App Name

            if (Auth::user()->role_id == 1){
                $this->appNameUpdate($request);
            }

            /*
            |Logging profile update action
            */
            activity()
                ->performedOn($user)
                ->withProperties(['name'=>$user->username,'by'=>Auth::user()->username])
                ->causedBy(Auth::user())
                ->log('Updated profile');

            return redirect()->back()->with('success', 'Account details Updated Successfully');
        }


    }




    // User Profile Update
    public function userProfileUpdate($request, $id){

        $user = User::find($id);

        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'phone' => 'required',
        ]);

        $user->firstname = $request->firstname;
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->phone = $request->phone;

        // Updated avatar
        $avatarImg = $request->avatar;

        if (isset($avatarImg)){
            $avatar = $this->updateAvatar($avatarImg);
        }else{
            $avatar = $user->avatar;
        }

        $user->avatar = $avatar;
        $user->save();

    }



    // User Profile Update
    public function updateProfileInformation(Request $request, $id){
        $user = User::find($id);

        $this->validate($request, [
            'username' => 'required|string|max:255|unique:users,username,'.$user->id,
            'phone' => 'required',
        ]);

        $user->username = $request->username;
        $user->immatricule = $request->immatricule;
        $user->address = $request->address;
        $user->postcode = $request->postcode;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->phone = $request->phone;

        $user->save();

        activity()
            ->performedOn($user)
            ->withProperties(['name'=>$user->username,'by'=>Auth::user()->username])
            ->causedBy(Auth::user())
            ->log('Updated profile');

        return redirect()->back()->with('success', 'Account details Updated Successfully');
    }



    /**
     * update avatar image
     * @param  Request $request
     * @param  string  $id      user id
     * @return string
     */
    public function updateAvatar($avatarImg)
    {
        $image = $avatarImg;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);

        $imagename = time().'.'.'png';
        $imagepath = public_path("uploads/avatar/").$imagename;
        $imageurl = URL::to('/uploads/avatar/')."/".$imagename;

        $file = Image::make($image)->resize(200, 200)->save($imagepath);

        return $imageurl;

    }


    public function appNameUpdate($request)
    {
        $this->validate($request,[
            'app_name' => 'required|min:4|regex:/^[A-Za-z0-9_.,()]+$/',
        ],[
            'app_name.regex' => 'Invalid Entry! The app name only letters and numbers are allowed',
        ]);

        $data = ['app_name'=> $request->app_name];

       $this->updateSettings($data);
    }

    private function updateSettings($input)
    {
        foreach ($input as $key => $value) {
            setting([$key => $value])->save();
        }

    }

    /**
     * Update login details
     * @param  Request $request
     * @param  string  $id    user id
     * @return string
     */
    public function updateLogin(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
          'password' => 'nullable|string|min:8|confirmed',
          'password_confirmation' => 'same:password',
      ],[
        'regex' => 'Invalid Entry! The username only letter and numbers are allowed',
      ]);

        if (!is_null($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        /*
        |Logging profile update action
        */

        activity()
        ->performedOn($user)
        ->withProperties(['name'=>$user->username,'by'=>Auth::user()->username])
        ->causedBy(Auth::user())
        ->log('Updated profile');
        return redirect()->back()->with('success', 'Login details Updated Successfully');
    }

    // ++++++++++++++++++++++++++++++PROFILE AUTHENTICATION SETTINGS++++++++++++++++++++++++++++++++//
    // TWO FACTOR AUTHENTICATION//

    private function generateCode()
    {
        $google2fa = app('pragmarx.google2fa');
        $generated = $google2fa->getQRCodeInline(
            config('app.name'),
            auth()->user()->fullname,
            auth()->user()->google2fa->google2fa_secret
        );
        return $generated;
    }
    /**
     * Generate QRCode Two Factor Authentication
     * @return string
     */
    public function activate()
    {
        $user = Auth::user();
        $google2fa = app('pragmarx.google2fa');

        $google2fa = $google2fa->generateSecretKey();
        TwoFactor::create([
               'user_id' => $user->id,
               'google2fa_enable' => 0,
               'google2fa_secret' => $google2fa
        ]);

        return redirect()->back()->with('success', '2-Factor Activated');
    }

    /**
    * Enable Two Factor Authentication
    * @param string $request
    * @return string
    */
    public function enable(Request $request)
    {
        $this->validate($request, [
              'code' => 'required',
          ]);

        $user = Auth::user();
        $google2fa = app('pragmarx.google2fa');
        $verified = $google2fa->verifyKey($user->google2fa->google2fa_secret, $request->code);

        if ($verified) {
            $user->google2fa->google2fa_enable = 1;
            $user->google2fa->save();
            return redirect()->back()->with('success', '2-Factor Enabled');
        }

        return redirect()->back()->with('fail', 'Verification Code is Invalid');
    }

    /**
    * Disable active Two Factor Authentication
    * @param string $request
    * @return string
    */
    public function disable(Request $request)
    {
        $this->validate($request, [
                'code' => 'required',
                'password' => 'required',
          ]);

        $user = Auth::user();
        $google2fa = app('pragmarx.google2fa');

        if (Hash::check($request->password, $user->password)) {
            $verified = $google2fa->verifyKey($user->google2fa->google2fa_secret, $request->code);

            if ($verified) {
                $user->google2fa->delete();
                return redirect()->back()->with('success', '2-Factor Disabled');
            }

            return redirect()->back()->with('fail', 'Verification Code is Invalid');
        } else {
            return redirect()->back()->with('fail', 'Invalid Password! Check Password and try again');
        }
    }

    public function verify()
    {
        return redirect(URL()->previous());
    }

    /**
    * Disable active Two Factor Authentication
    * @param string $request
    * @return string
    */
    public function instruction()
    {
        return view('google2fa.instruction');
    }

    // TWO FACTOR AUTHENTICATION//
}
