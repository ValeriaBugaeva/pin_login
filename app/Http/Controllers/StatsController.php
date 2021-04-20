<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\StaffRole;
use Exception;
use App\Staff;
use Auth;


class StatsController extends Controller
{
    public function index(Request $request) {
        $roles = StaffRole::where('user_id', Auth::user()->id)->orderby('name', 'ASC')->get();

        $staffdetails = Staff::with('users')->where('id', $request['id'])->get()->first();
        $pageConfigs = ['pageHeader' => false];
        return view('company.staff.stats', ['pageConfigs' => $pageConfigs]);
    }

    
}
