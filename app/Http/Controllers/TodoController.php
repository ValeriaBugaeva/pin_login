<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Staff;
use App\Todo;
use App\User;
use App\Role;
use App\Permission;
use Auth;


class TodoController extends Controller
{
    private $user;

    /**
     * Show the application Settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($this->isStaff()) {
            return $this->todoStaff($request);
        }
        return $this->todoApp($request);
    }



    // ToDo App
    public function todoApp(Request $request) {

        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'todo-application',
        ];

        $status = $request->get('status');
        $tag = $request->get('tag');
        //$companies_id = Auth::id();
        $user_id = Auth::id();
        // $companyStaffList = Staff::where('user_id', $user_id)->get();
        $companyStaffList = DB::table('staff')
                        ->join('users', 'users.staff_id', '=', 'staff.id')
                        ->where('users.user_id',$user_id)
                        ->select('staff.id','staff.name','staff.user_id', 'users.avatar')
                        ->get()->toArray();

        $locations = Location::where('user_id', Auth::user()->id)->orderby('name', 'ASC')->get();

        $staffAssocArr = array();
        for ($s = 0; $s < count($companyStaffList); $s++) {
            $words = explode(" ", $companyStaffList[$s]->name);
            $acronym = "";
            foreach ($words as $w) {
                $acronym .= $w[0];
            }
            $staffAssocArr[$companyStaffList[$s]->id] = strtoupper($acronym);
            $companyStaffList[$s]->stfName = strtoupper($acronym);
        }

        //echo "<pre>";print_r($staffAssocArr);die;
        if ($status) {
            $getTaskData = Todo::where('user_id', $user_id)->where('status', $status)->orderby('id', 'ASC')->get();
        } else if ($tag) {
            $getTaskData = Todo::where('user_id', $user_id)->whereRaw('FIND_IN_SET("' . $tag . '",tag)')
                            ->orderby('id', 'ASC')->get();
        } else {
            $getTaskData = Todo::where('user_id', $user_id)->orderby('id', 'ASC')->get();
        }

        $avatar = array();

        foreach ($getTaskData as $taskKey => $taskVal) {
            $staffName = "?";
            if (isset($staffAssocArr[$taskVal->assignee])) {
                $staffName = $staffAssocArr[$taskVal->assignee];
            }
            $taskVal->tag = explode(",", $taskVal->tag);
            $taskVal->assignee = explode(",", $taskVal->assignee);
            $taskVal->staffName = $staffName;

            foreach ($taskVal->assignee as $userId){
                $avatar[] = User::where('staff_id', '=', $userId)->select('avatar')->get();
            }

//            echo "<pre>";print_r($getTaskData->staffName);die;
        }

//        return $avatar;


//        echo "<pre>";print_r($getTaskData);die;
        return view('todo.todo', ['pageConfigs' => $pageConfigs, 'staffList' => $companyStaffList, 'tasklist' => $getTaskData, 'locations' => $locations]);
    }

    public function todoStaff(Request $request)
    {
        $users = User::count();
        $roles = Role::count();
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'todo-application',
        ];

        $status = $request->get('status');
        $tag = $request->get('tag');

        $staff_id = Auth::user()->staff_id;

        $StaffList = DB::table('staff')
                        ->join('users', 'users.staff_id', '=', 'staff.id')
                        ->where('users.staff_id',$staff_id)
                        ->where('staff.id',$staff_id)
                        ->select('staff.id','staff.name','staff.user_id', 'users.avatar')
                        ->get()->toArray();

        $staffAvator = Auth::user()->avatar;


        $staffAssocArr = array();
        for ($s = 0; $s < count($StaffList); $s++) {
            $words = explode(" ", $StaffList[$s]->name);
            $acronym = "";
            foreach ($words as $w) {
                $acronym .= $w[0];
            }
            $staffAssocArr[$StaffList[$s]->id] = strtoupper($acronym);
            $StaffList[$s]->stfName = strtoupper($acronym);
        }


        if($status){
            $getTaskData = Todo::with('users')->where('assignee', 'like', "%$staff_id%")->where('status',$status)->get();
        }else if($tag){

            $getTaskData = Todo::with('users')->where('assignee', 'like', "%$staff_id%")->whereRaw('FIND_IN_SET("'.$tag.'",tag)')->get();
        }else{

            $getTaskData = Todo::with('users')->where('assignee', 'like', "%$staff_id%")->orderby('id', 'ASC')->get();
        }

        foreach ($getTaskData as $taskKey => $taskVal) {
            $staffName = "?";

            if (isset($staffAssocArr[$taskVal->assignee])) {
                $staffName = $staffAssocArr[$taskVal->assignee];
            }
            $taskVal->tag = explode(",", $taskVal->tag);
            $taskVal->assignee = explode(",", $taskVal->assignee);
            $taskVal->staffName = $staffName;
//            echo "<pre>";print_r($getTaskData->staffName);die;
        }
//        echo "<pre>";print_r($getTaskData);die;

        return view('todo.todo', ['pageConfigs' => $pageConfigs, 'staffList' => $StaffList, 'tasklist' => $getTaskData, 'staffAvator' => $staffAvator]);
    }


    public function addTask(Request $request) {

        $responseStatus = 0;
        $message = 'fail';
        $error = array();
        try {
            $postData = $request->all()['taskDetailsArr'];
//            echo '<pre>';print_r($postData);die;
            $taskId = $postData['taskId'];
            $eUpdate = 0;
            if ($taskId > 0) {
                $eUpdate = 1;
            }

            $error = $this->validateTaskDetails($postData, $eUpdate);
            //echo "<pre>";print_r($error);die;
            if (count($error) > 0) {
                throw new Exception('Validation Error');
            }
            $this->addUpdateTaskDetails($taskId, $postData);
            $responseStatus = 1;
            $message = 'Success';
        } catch (Exception $e) {
            $message = $e->getMessage();
        }
        $jsonResponse = [
            'status' => $responseStatus,
            'message' => $message,
            'error' => $error,
        ];
        return response()->json($jsonResponse);
    }



    public function addUpdateTaskDetails($taskId, $postData) {
        if ($taskId > 0) {
            //echo "<pre>Edit Task==".$taskId."===<br>";print_r($postData);die;
        } else {
            //echo "<pre>Add Task==".$taskId."===<br>";print_r($postData);die;
        }

        $user_id = Auth::id();

        $todos = new Todo();

        $title = $postData['title'];

        $due_date = $postData['due_date'];
        $tag = implode(",", $postData['tag']);

        if (Auth::user()->role_id != 3){
            $assignee = implode(",", $postData['assignee']);
        }

        $description = $postData['description'];
        $currentTime = date("Y-m-d h:i:s");
        if ($taskId > 0) {

            $data = array();

            $data['user_id'] = $user_id;
            $data['title'] = $title;

            if (Auth::user()->role_id == 3) {
                $data['assignee'] = Auth::user()->staff_id;
            }else{
                $data['assignee'] = $assignee;
            }
            $data['due_date'] = $due_date;
            $data['tag'] = $tag;
            $data['description'] = $description;
            $data['updated_at'] = $currentTime;

            DB::table('todo')
                ->where('id', $taskId)
                ->update($data);

        } else {
            $todos->user_id = $user_id;
            $todos->title = $title;

            if (Auth::user()->role_id == 3) {
                $todos->assignee = Auth::user()->staff_id;
            }else{
                $todos->assignee = $assignee;
            }

            $todos->due_date = $due_date;
            $todos->tag = $tag;
            $todos->description = $description;
            $todos->status = "";
            $todos->created_at = $currentTime;
            $todos->updated_at = $currentTime;
            $todos->save();

        }
    }

    function validateTaskDetails($postData, $eUpdate) {
        $error = $tagArr = array();
        $assign = $assigneeArr = array();
        if (empty(trim($postData['title']))) {
            $error['title_errormessage'] = 'Please enter title';
        }
        if (isset($postData['assignee'])) {
            $assigneeArr = $postData['assignee'];
        }

        if (count($assigneeArr) <= 0) {
            $assign['assignee_errormessage'] = 'Please select at least on assignee';
        }

        if (empty(trim($postData['due_date']))) {
            $error['due_date_errormessage'] = 'Please select task due date';
        }
        if (isset($postData['tag'])) {
            $tagArr = $postData['tag'];
        }
        if (count($tagArr) <= 0) {
            $error['tag_errormessage'] = 'Please select at least on tag';
        }
        if (empty(trim($postData['description']))) {
            $error['description_errormessage'] = 'Please enter description';
        }
        return $error;
    }

    public function getTaskDetails(Request $request) {
        $postData = $request->all();
        //echo "<pre>";print_r($postData);die;
        $user_id = Auth::id();

        $companyStaffList = Staff::where('user_id', $user_id)->get();

        $staffAssocArr = array();
        for ($s = 0; $s < count($companyStaffList); $s++) {
            $staffAssocArr[$companyStaffList[$s]['id']] = $companyStaffList[$s]['name'];
        }

        $taskId = $postData['taskId'];

        $taskdetails = Todo::where('id', $taskId)->get()->toArray();
        if (count($taskdetails) > 0) {
            $staffName = $staffShortName = "?";
            $acronym = "";

            if (isset($staffAssocArr[$taskdetails[0]['assignee']])) {
                $staffName = $staffAssocArr[$taskdetails[0]['assignee']];
                $words = explode(" ", $staffName);
                foreach ($words as $w) {
                    $acronym .= $w[0];
                }
            }

            $taskdetails[0]['staffName'] = $staffName;
            $taskdetails[0]['stfName'] = $acronym;
            $taskdetails[0]['tag'] = explode(",", $taskdetails[0]['tag']);
            $taskdetails[0]['assignee'] = explode(",", $taskdetails[0]['assignee']);
        }
        //echo "<pre>";print_r($taskdetails);die;
        return response()->json($taskdetails);
    }

    public function updateTaskStatus(Request $request) {
        $postData = $request->all()['taskStatusArr'];
        //echo "<pre>";print_r($postData);die;
        $taskId = $postData['taskId'];
        $taskStatus = "";
        if(isset($postData['status']) && $postData['status'] != ""){
            $taskStatus = $postData['status'];
        }
        $currentTime = date("Y-m-d h:i:s");
        $returnArr = array("status" => 0, "message" => "Error while update task status");
        if ($taskId > 0) {
            if($taskStatus == ""){
                Todo::where('id', $taskId)->update(['status' => '', 'updated_at' => $currentTime]);
            }else{
                Todo::where('id', $taskId)->update(['status' => $taskStatus, 'updated_at' => $currentTime]);
            }
            $returnArr = array("status" => 1, "message" => "Task " . strtolower($taskStatus) . " successfully");
        }
        return response()->json($returnArr);
    }

    /**
     * Check if Authenticated user is admin
     * @return boolean [description]
     */
    private function isStaff()
    {
        return (auth()->user()->roles->first()['name'] == 'staff') ? true : false;
    }


}
