<?php

namespace App\Http\Controllers\Activitylog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;
use App\User;
use Auth;
use DataTables;

class ActivitylogController extends Controller
{
    public function __construct()
    {
        if (setting('email_verification')) {
            $this->middleware(['verified']);
        }

        $this->middleware(['auth','web','2fa']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $user_id = Auth::id();
//
//        $users = User::where('user_id', '=', $user_id)->where('last_login_at', '!=', null)->select('id')->get();
//
//        $data = array();
//        foreach ($users as $value){
//            $data[] = Activity::where('causer_id', '=', $value->id)->orderByDesc('created_at')->first();
//        }
//
//        return $data;
//        foreach ($data as $val){
//         return $val['properties']['name'];
//        }


        if ($this->isAdmin()) {
            return $this->adminLog();
        }
        return $this->userLog();
    }

    /**
     * If user has admin role it fetches all logs
     * @return [type] [description]
     */
    private function adminLog()
    {
        $activities = Activity::orderByDesc('created_at')->get();
        return view('activitylog.adminLog', [
        'activities' => $activities,
      ]);
    }



    public function admin_activity_log(Request $request){


        if ($request->ajax()) {

            if ($this->isAdmin()){
                $data = Activity::orderByDesc('created_at')->get();

                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }elseif ($this->userLog()){

                $user_id = Auth::id();

                $users = User::where('user_id', '=', $user_id)->where('last_login_at', '!=', null)->select('id')->get();

                $data = array();
                foreach ($users as $value){
                    $data[] = Activity::where('causer_id', '=', $value->id)->orderByDesc('created_at')->first();
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


        }

        return view("activitylog.adminLog");
    }




    /**
     * Authenthicated user logs only
     * @return [type] [description]
     */
    private function userLog()
    {
        $activities = auth()->user()->actions->sortByDesc('created_at');

        return view('activitylog.userLog', [
            'activities' => $activities,
        ]);
    }

    /**
     * Check if Authenticated user is admin
     * @return boolean [description]
     */
    private function isAdmin()
    {
        return (auth()->user()->roles->first()['name'] == 'admin')? true : false;
    }
}
