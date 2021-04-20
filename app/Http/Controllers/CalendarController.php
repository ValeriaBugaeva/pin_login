<?php

namespace App\Http\Controllers;

use App\Calender;
use App\Location;
use App\Role;
use App\Staff;
use App\Todo;
use App\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($this->isStaff()) {
            return $this->usersStaff($request);
        }

        return $this->calendarApp($request);
    }


    public function staffSearch(Request $request){

        $name = $request->all();

        if($name !=null) {

            $term = $name['id'];
            $user_id = Auth::id();

            $users = User::where('user_id', '=', $user_id)->where('staff_id', '=', "$term" )->select('staff_id')->first();

            $userTaskData =  Calender::where('user_id', '=', $user_id)->orderby('id', 'ASC')->get();

            $userTask = [];
            foreach ($userTaskData as $val){
                $gostUser = explode(",", $val->guests);
                foreach ($gostUser as $key){
                    if ($key == $users->staff_id){
                        $userTask[] =  Calender::where('id', '=', $val->id)->orderby('id', 'ASC')->get();
                    }
                }
            }

            $data = array();
            foreach ($userTask as $taskKey => $task) {
                foreach ($task as $taskVal){
                    $data[] = array(
                        'id'=> $taskVal->id,
                        'user_id'=> $taskVal->user_id,
                        'title'=> $taskVal->title,
                        'start'=> $taskVal->start,
                        'end'=> $taskVal->end,
                        'startStr'=> $taskVal->startStr,
                        'endStr'=> $taskVal->endStr,
                        'display'=> $taskVal->display,
                        'extendedProps'=> [
                            'location' => $taskVal->location,
                            'guests' => explode(",", $taskVal->guests),
                            'todos' => explode(",", $taskVal->todos),
                            'calendar' => $taskVal->calendar,
                            'description' => $taskVal->description,
                        ],
                        'url'=> $taskVal->url,
                        'allDay'=> $taskVal->allDay,
                    );
                }
            }

            $jsonResponse = [
                'events' => $data,
            ];
            return response()->json($data);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $responseStatus = 0;
        $message = 'fail';
        $error = array();
        try {
            $postData = $request->all()['eventData'];
            $error = $this->validateTaskDetails($postData);
//            echo "<pre>";print_r($error);die;

            if (count($error) > 0) {
                throw new Exception('Validation Error');
            }

            $this->addCalenderDetails($postData);

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

    /**
     * Store a newly created calendar details.
     *
     */

    public function addCalenderDetails($postData) {
        $user_id = Auth::id();
        $attributes = new Calender();
        $attributes->user_id = $user_id;
        $attributes->title = $postData['title'];

        $startDate = date_create($postData['start']);
        $attributes->start = date_format($startDate,"Y-m-d h:i");

        $endDate =  date_create($postData['end']);
        $attributes->end =  date_format($endDate, 'Y-m-d h:i');

        $attributes->startStr = $postData['startStr'];
        $attributes->endStr = $postData['endStr'];
        $attributes->display = $postData['display'];


        if (isset($postData['extendedProps']['location'])) {
            $attributes->location = $postData['extendedProps']['location'];
        }

        if (isset($postData['extendedProps']['guests'])) {
            $attributes->guests = implode(",", $postData['extendedProps']['guests']);
        }

        if (isset($postData['extendedProps']['todos'])) {
            $attributes->todos = implode(",", $postData['extendedProps']['todos']);
        }

        if (isset($postData['extendedProps']['calendar'])) {
            $attributes->calendar = $postData['extendedProps']['calendar'];
        }

        if (isset($postData['extendedProps']['description'])) {
            $attributes->description = $postData['extendedProps']['description'];
        }

        if (isset($postData['url'])){
            $attributes->url = $postData['url'];
        }else{
            $attributes->url = '';
        }

        if (isset($postData['allDay'])){
            $attributes->allDay = $postData['allDay'];
        }

        $currentTime = date("Y-m-d h:i:s");

        $attributes->created_at = $currentTime;
        $attributes->updated_at = $currentTime;

        $attributes->save();

    }


    /**
     * Display the specified resource.
     *
     */
    public function getCalenderTask()
    {
        $user_id = Auth::id();
        $getTaskData =  Calender::where('user_id', $user_id)->orderby('id', 'ASC')->get();

        $data = array();

        foreach ($getTaskData as $taskKey => $taskVal) {

            $data[] = array(
                'id'=> $taskVal->id,
                'user_id'=> $taskVal->user_id,
                'title'=> $taskVal->title,
                'start'=> $taskVal->start,
                'end'=> $taskVal->end,
                'startStr'=> $taskVal->startStr,
                'endStr'=> $taskVal->endStr,
                'display'=> $taskVal->display,
                'extendedProps'=> [
                    'location' => $taskVal->location,
                    'guests' => explode(",", $taskVal->guests),
                    'todos' => explode(",", $taskVal->todos),
                    'calendar' => $taskVal->calendar,
                    'description' => $taskVal->description,
                ],
                'url'=> $taskVal->url,
                'allDay'=> $taskVal->allDay,
            );
        }

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function calendarUpdate(Request $request)
    {
        $responseStatus = 0;
        $message = 'fail';
        $error = array();
        try {
          $postData = $request->all()['eventData'];
            $error = $this->validateTaskDetails($postData);
//            echo "<pre>";print_r($error);die;

            if (count($error) > 0) {
                throw new Exception('Validation Error');
            }

            $this->updateCalenderDetails($postData);

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


    public function updateCalenderDetails($postData) {

        $user_id = Auth::id();
        $id = $postData['id'];
        $title = $postData['title'];

        $startDate = date_create($postData['start']);
        $start = date_format($startDate,"Y-m-d h:i");

        $endDate =  date_create($postData['end']);
        $end =  date_format($endDate, 'Y-m-d h:i');

        $startStr = $postData['start'];
        $endStr = $postData['end'];

        $display = $postData['display'];

        if (isset($postData['extendedProps']['location'])) {
            $location = $postData['extendedProps']['location'];
        }

        if (isset($postData['extendedProps']['guests'])) {
            $guests = implode(",", $postData['extendedProps']['guests']);
        }

        if (isset($postData['extendedProps']['todos'])) {
            $todos = implode(",", $postData['extendedProps']['todos']);
        }

        if (isset($postData['extendedProps']['calendar'])) {
            $calendar = $postData['extendedProps']['calendar'];
        }

        if (isset($postData['extendedProps']['description'])) {
            $description = $postData['extendedProps']['description'];
        }

        if (isset($postData['url'])){
            $url = $postData['url'];
        }else{
            $url = '';
        }

        $allDay = $postData['allDay'];

        $currentTime = date("Y-m-d h:i:s");

        $taskId = Calender::where('id', $id)->update([
            'user_id' => $user_id,
            'title' => $title,
            'start' => $start,
            'end' => $end,
            'startStr' => $startStr,
            'endStr' => $endStr,
            'display' => $display,
            'location' => $location,
            'guests' => $guests,
            'todos' => $todos,
            'calendar' => $calendar,
            'description' => $description,
            'url' => $url,
            'allDay' => $allDay,
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function calenderDelete(Request $request)
    {

        $id = $request->all()['eventId'];

        $calendarEvent = Calender::where('id', '=' , $id)->first();

        $calendarEvent->delete();

        $jsonResponse = [
            'status' => 'Success',
        ];

        return response()->json($jsonResponse);

    }

    /**
     * Calendar event validation
     *
     */
    function validateTaskDetails($postData) {
        $error = $tagArr = array();
        if (empty(trim($postData['title']))) {
            $error['title_errormessage'] = 'Please enter title';
        }
        if (empty(trim($postData['start']))) {
            $error['start_errormessage'] = 'Please select start date';
        }
        if (empty(trim($postData['end']))) {
            $error['end_errormessage'] = 'Please select end date';
        }
        return $error;
    }


    /**
     * User created staff list
     *
     */

    public function calendarApp(Request $request){

        $pageConfigs = [
            'pageHeader' => false
        ];

        $user_id = Auth::id();

        $todos = DB::table('todo')
                ->join('users', 'users.id', '=', 'todo.user_id')
                ->where('users.id', '=', $user_id)
                ->where('todo.user_id', '=', $user_id)
                ->select('todo.id', 'todo.title', 'users.avatar')
                ->get()->toArray();



        $staffList = DB::table('staff')
                        ->join('users', 'users.staff_id', '=', 'staff.id')
                        ->where('users.user_id',$user_id)
                        ->select('staff.id','staff.name','staff.user_id', 'users.avatar')
                        ->get()->toArray();

        $staffAssocArr = array();
        for ($s = 0; $s < count($staffList); $s++) {
            $words = explode(" ", $staffList[$s]->name);
            $acronym = "";
            foreach ($words as $w) {
                $acronym .= $w[0];
            }
            $staffAssocArr[$staffList[$s]->id] = strtoupper($acronym);
            $staffList[$s]->stfName = strtoupper($acronym);
        }


        $getTaskData =  Calender::where('user_id', $user_id)->orderby('id', 'ASC')->get();

        $data = array();

        foreach ($getTaskData as $taskKey => $taskVal) {

            $data[] = array(
                'id'=> $taskVal->id,
                'user_id'=> $taskVal->user_id,
                'title'=> $taskVal->title,
                'start'=> $taskVal->start,
                'end'=> $taskVal->end,
                'startStr'=> $taskVal->startStr,
                'endStr'=> $taskVal->endStr,
                'display'=> $taskVal->display,
                'extendedProps'=> [
                    'location' => $taskVal->location,
                    'guests' => explode(",", $taskVal->guests),
                    'todos' => explode(",", $taskVal->todos),
                    'calendar' => $taskVal->calendar,
                    'description' => $taskVal->description,
                ],
                'url'=> $taskVal->url,
                'allDay'=> $taskVal->allDay,
            );
        }

        return view('calendar.calendar', compact('pageConfigs', 'staffList', 'data', 'todos'));
    }


    public function usersStaff(Request $request)
    {
        $users = User::count();
        $roles = Role::count();

        $pageConfigs = [
            'pageHeader' => false
        ];

        $staff_id = Auth::user()->staff_id;

        $staffList = DB::table('staff')
                    ->join('users', 'users.staff_id', '=', 'staff.id')
                    ->where('users.staff_id',$staff_id)
                    ->select('staff.id','staff.name','staff.user_id', 'users.avatar')
                    ->get()->toArray();

        $user_id = Auth::id();
        $users = User::where('id', '=', $user_id)->select('user_id', 'staff_id')->first();
        $userTaskData =  Calender::where('user_id', '=', $users->user_id)->orderby('id', 'ASC')->get();

        $userTask = [];
        foreach ($userTaskData as $val){
            $gostUser = explode(",", $val->guests);
            foreach ($gostUser as $key){
                if ($key == $users->staff_id){
                    $userTask[] =  Calender::where('id', '=', $val->id)->orWhere('user_id', '=', $user_id)->orderby('id', 'ASC')->get();
                }
            }
        }

        $data = array();
        foreach ($userTask as $taskKey => $task) {
            foreach ($task as $taskVal){
                $data[] = array(
                    'id'=> $taskVal->id,
                    'user_id'=> $taskVal->user_id,
                    'title'=> $taskVal->title,
                    'start'=> $taskVal->start,
                    'end'=> $taskVal->end,
                    'startStr'=> $taskVal->startStr,
                    'endStr'=> $taskVal->endStr,
                    'display'=> $taskVal->display,
                    'extendedProps'=> [
                        'location' => $taskVal->location,
                        'guests' => explode(",", $taskVal->guests),
                        'todos' => explode(",", $taskVal->todos),
                        'calendar' => $taskVal->calendar,
                        'description' => $taskVal->description,
                    ],
                    'url'=> $taskVal->url,
                    'allDay'=> $taskVal->allDay,
                );
            }
        }

        return view('calendar.calendar', compact('pageConfigs', 'staffList', 'data'));

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
