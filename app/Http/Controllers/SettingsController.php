<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use App\Permission;
use App\Shift;

class SettingsController extends Controller
{
    private $user;

  /**
     * Show the application Settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ($this->isAdmin()) {
            return $this->adminSettings();
        }

        if ($this->isStaff()) {
          return $this->staffSettings();
      }

        return $this->defaultSettings();
    }

  /**
   * return admin users to admin Settings
   * @return [type] [description]
   */
  private function adminSettings()
  {
      $users = User::count();
      $roles = Role::count();
      {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Account Settings"]];
        return view('admin.settings', ['breadcrumbs' => $breadcrumbs]);
      }
    }

  /**
   * return admin users to staff Settings
   * @return [type] [description]
   */
  private function staffSettings()
  {
      $users = User::count();
      $roles = Role::count();
      {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Account Settings"]];
        return view('staff.settings', ['breadcrumbs' => $breadcrumbs]);
      }
    }


  /**
     * Function directs users to default Settings
     * @return view default user Settings
     */
    private function defaultSettings()
    {
        {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Account Settings"]];
        $shiftData = $this->getShiftDetails();

        return view('company.settings', ['breadcrumbs' => $breadcrumbs,'shiftdata'=>$shiftData]);
        }
    }

    public function getShifts() {
        //$shiftArr = array("Shift 1", "Shift 2", "Shift 3", "Shift 4");
        $shiftData = $this->getShiftDetails();
        foreach($shiftData as $data){
            $shiftArr[] = $data->name;
        }
        return $shiftArr;
    }

    public function getShiftDetails(){
        $user_id = Auth::id();
        $shiftArr = Shift::where('user_id', $user_id)->get();
        return $shiftArr;
    }

    /**
     * Check if Authenticated user is admin
     * @return boolean [description]
     */
    private function isAdmin()
    {
        return (auth()->user()->roles->first()['name'] == 'admin')? true : false;
    }

    /**
     * Check if Authenticated user is admin
     * @return boolean [description]
     */
    private function isStaff()
    {
        return (auth()->user()->roles->first()['name'] == 'staff')? true : false;
    }


}
