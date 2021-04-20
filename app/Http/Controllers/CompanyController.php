<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Role;
use App\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\StaffRole;
use Exception;
use App\Staff;
use App\User;
use Auth;
use DataTables;
use App\Location;
use URL;

class CompanyController extends Controller
{
    public function staff_list(){
        $roles = StaffRole::where('user_id', Auth::user()->id)->orderby('name', 'ASC')->get();
        $locations = Location::where('user_id', Auth::user()->id)->orderby('name', 'ASC')->get();
        return view('company.staff.index',['roles' => $roles, 'locations' => $locations]);
    }


    public function staff_listajax(Request $request)
    {

        if ($request->ajax()) {

            $data = Staff::with('users')->where('user_id', '=', Auth::id())->orderby('name', 'ASC')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('company.staff.index',);
    }


    public function role_listajax(Request $request){

        $auth_id = Auth::id();

        if ($request->ajax()) {

            $roles = StaffRole::where('user_id', '=', $auth_id)->orderBy('id', 'ASC')->get();

            $data = array();

            foreach ($roles as $role){
                $arrayData = [];
                $arrayData['avatar'] = DB::table('staff')
                            ->join('users','users.staff_id', '=', 'staff.id')
                            ->where('users.user_id', '=', $auth_id)
                            ->where('staff.user_id', '=', $auth_id)
                            ->where('staff.position', '=', $role->name)
                            ->select('users.avatar', 'users.fullname')
                            ->get();
                $arrayData['id'] = $role->id;
                $arrayData['name'] = $role->name;
                $data[] = $arrayData;
            }

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view("roles.index");
    }

    public function edit($id)
    {

        $role = StaffRole::find($id);

        return response()->json([
            'role' => $role
        ]);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $postData =  $request->all();

        $staffrole = StaffRole::find($postData['id']);
        $staffrole->name =  $request->name;
        $staffrole->user_id =  Auth::user()->id;
        if($staffrole->save())
        {
            $staffroles = StaffRole::where('user_id', Auth::user()->id)->orderby('id', 'DESC')->get();
            $option = "";
            foreach($staffroles as $sr)
            {
                $option .= '<option value="'.$sr->name.'">'.ucwords($sr->name).'</option>';
            }
            return request()->json(200,['success' => 'Data has been successfully.', 'results' => $option]);
        }
        else{
            return request()->json(427,['error' => ['unable to save staff role']]);
        }

    }

    public function staff_add(Request $request)
    {
        $staff = new Staff;
        $staff->name = $request->firstname." ".$request->lastname;
        $staff->user_id = Auth::id();
        $staff->role_id = 3;
        $staff->position = $request->position;
        $staff->location_id = $request->location_id;
        $staff->status = 'Active';

        if($staff->save()){
            $staff_new_id = $staff->id;

            $user = new User;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;
            $user->fullname = $request->firstname." ".$request->lastname;

            $user->firstname = $request->firstname;
            $user->lastname =  $request->lastname;

            $user->username = strtolower($request->firstname.$request->lastname);
            $user->user_id = Auth::user()->id;
            $user->staff_id = $staff_new_id;
            $user->role_id = 3;
            $user->avatar = URL::to('/')."/uploads/avatar/avatar.png";
            $user->status = 'active';
            $user->save();

            if ($user) {
                $user->assignRole('staff');
                // Logging activity for created role
                activity()->performedOn($user)->withProperties(['name'=>($request->username)?$request->username:$request->email,'by'=>Auth::user()->username])->causedBy(Auth::user())->log('User was created');

                return redirect()->back()->with('success', 'User Created Successfully');
            } else {
                return redirect()->back()->with('error', 'An error occured check form!');
            }
        }
    }


    public function staff_role_add(Request $request)
    {
        $staffrole = new StaffRole();
        $staffrole->name =  $request->name;
        $staffrole->user_id =  Auth::user()->id;
        if($staffrole->save())
        {
            $staffroles = StaffRole::where('user_id', Auth::user()->id)->orderby('id', 'DESC')->get();
            $option = "";
            foreach($staffroles as $sr)
            {
                $option .= '<option value="'.$sr->name.'">'.ucwords($sr->name).'</option>';
            }
            return request()->json(200,['success' => 'Data has been successfully.', 'results' => $option]);
        }
        else{
            return request()->json(427,['error' => ['unable to save staff role']]);
        }
    }


    public function staff_view(Request $request) {
        $roles = StaffRole::where('user_id', Auth::user()->id)->orderby('name', 'ASC')->get();

        $staffdetails = Staff::with('users')->where('id', $request['id'])->get()->first();
        $pageConfigs = ['pageHeader' => false];
        $contracts = $this->getContractType();
        $shifts = $this->getShifts();
        $locations = $this->getAllLocation();
        $companies = $this->getAllCompany();
        return view('company.staff.view', ['pageConfigs' => $pageConfigs, 'staffdetails' => $staffdetails,
            'shifts' => $shifts, 'contracts' => $contracts, 'locations' => $locations, 'companies' => $companies,
            'roles' => $roles]);
    }

    public function getShifts() {
        $shiftData = Shift::where('user_id', Auth::user()->id)->orderby('name', 'ASC')->get();
        return $shiftData;
    }


    public function getAllLocation() {
        $locations = Location::where('user_id', Auth::user()->id)->orderby('name', 'ASC')->get();
        //echo "<pre>";print_r($getLocation);die;
        return $locations;
    }


    // Content type
    public function getContractType() {
        $contractArr = array("CDD", "CDI", "Saisonnier", "Apprentissage", "Extra", "Interim", "Stagiaire");
        return $contractArr;
    }

    public function getAllCompany() {
        $getCompany = Companies::get();
        //echo "<pre>";print_r($getCompany);die;
        return $getCompany;
    }

    // updated
    public function addStaff(Request $request) {

        $postData = $request->all();

        $staffId = $postData['staffId'];

        $data = Staff::find($staffId);
        $data->user_id = Auth::id();
        $data->gender = $postData['gender'];
        $data->name = $postData['firstname'] . ' '. $postData['lastname'];
        $data->role_id = $postData['role_id'];
        $data->placebirth = $postData['placebirth'];

        if (isset($postData['nationality'])){
            $data->nationality = $postData['nationality'];
        }

        $data->nin = $postData['nin'];
        $data->address = $postData['address'];
        $data->postcode = $postData['postcode'];
        $data->city = $postData['city'];
        $data->qualification = $postData['qualification'];
        $data->qualification_action = $postData['qualification_action'];
        $data->contract_type = $postData['contract_type'];
        $data->hiring_date = $postData['hiring_date'];
        $data->location_id = $postData['location_id'];
        $data->position = $postData['position'];

        if (isset($postData['current_plan'])){
            $data->current_plan = $postData['current_plan'];
        }

        $data->monthly_salary = $postData['monthly_salary'];
        $data->hourly_salary = $postData['hourly_salary'];
        $data->overtime_salary = $postData['overtime_salary'];
        $data->weekly_working_time = $postData['weekly_working_time'];
        $data->daily_breaks_time = $postData['daily_breaks_time'];
        $data->holidays_per_year = $postData['holidays_per_year'];
        $data->shift = $postData['shift'];
        $data->updated_at = date("Y-m-d h:i:s");

        $result = $data->save();

        if (isset($result)){

            $att = User::where('staff_id', $staffId)->select('id')->first();

            $userdata = User::find($att->id);
            $userdata->fullname = $postData['firstname'] . ' '. $postData['lastname'];
            $userdata->username = $postData['username'];
            $userdata->email = $postData['email'];
            $userdata->firstname = $postData['firstname'];
            $userdata->lastname = $postData['lastname'];
            $userdata->phone = $postData['phone'];
            $userdata->role_id = $postData['role_id'];
            $userdata->birthday = $postData['dob'];
            $userdata->address = $postData['address'];

            if (isset($postData['nationality'])){
                $userdata->country = $postData['nationality'];
            }

            $userdata->updated_at = date("Y-m-d h:i:s");
            $userdata->save();
        }
        return redirect('/staff')->with('status', 'New staff update successfully.');
    }


    // Data Validation
    function validateStaffDetails($postData, $eUpdate) {
        $error = array();
        if (empty(trim($postData['username']))) {
            $error['errormessage'] = 'Please enter username';
        }
        if (empty(trim($postData['firstname'])) && empty($error)) {
            $error['errormessage'] = 'Please enter firstname';
        }
        if (empty(trim($postData['lastname'])) && empty($error)) {
            $error['errormessage'] = 'Please enter lastname';
        }
        if (empty(trim($postData['email'])) && empty($error)) {
            $error['errormessage'] = 'Please enter email';
        }else{
            if($eUpdate > 0){
                $checkEmail = User::where('email', $postData['email'])->where('user_id',"!=", $postData['staffId'])->get()->toArray();
            }else{
                $checkEmail = User::where('email', $postData['email'])->get()->toArray();
            }
        }
        return $error;
    }









}
