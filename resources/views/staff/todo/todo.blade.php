
@extends('staff/layout/contentLayoutMaster')

@section('title', 'To-Do')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/katex.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/dragula.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-quill-editor.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-todo.css')) }}">
@endsection
@include('staff/todo/todo-sidebar')
@section('content')
<style>
#errorMessage {
    color: red;
}
</style>
<div class="body-content-overlay"></div>
<div class="todo-app-list">
  <!-- Todo search starts -->
  <div class="app-fixed-search d-flex align-items-center">
    <div class="sidebar-toggle d-block d-lg-none ml-1">
      <i data-feather="menu" class="font-medium-5"></i>
    </div>
    <div class="d-flex align-content-center justify-content-between w-100">
      <div class="input-group input-group-merge">
        <div class="input-group-prepend">
          <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
        </div>
        <input
          type="text"
          class="form-control"
          id="todo-search"
          placeholder="Search task"
          aria-label="Search..."
          aria-describedby="todo-search"
        />
      </div>
    </div>
    <div class="dropdown">
      <a
        href="javascript:void(0);"
        class="dropdown-toggle hide-arrow mr-1"
        id="todoActions"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <i data-feather="more-vertical" class="font-medium-2 text-body"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoActions">
        <a class="dropdown-item sort-asc" href="javascript:void(0)">Sort A - Z</a>
        <a class="dropdown-item sort-desc" href="javascript:void(0)">Sort Z - A</a>
        <a class="dropdown-item" href="javascript:void(0)">Sort Assignee</a>
        <a class="dropdown-item" href="javascript:void(0)">Sort Due Date</a>
        <a class="dropdown-item" href="javascript:void(0)">Sort Today</a>
        <a class="dropdown-item" href="javascript:void(0)">Sort 1 Week</a>
        <a class="dropdown-item" href="javascript:void(0)">Sort 1 Month</a>
      </div>
    </div>
  </div>
  <!-- Todo search ends -->

  <!-- Todo List starts -->
  <div class="todo-task-list-wrapper list-group">
    <ul class="todo-task-list media-list" id="todo-task-list">
      @foreach($tasklist as $task)
        @php
        $checked="";
        $updateStatusName = "Completed";
        @endphp
        @if($task->status == "Completed")
            @php
             $checked="checked";
             $updateStatusName = "Important";
             @endphp
        @endif
      <li class="todo-item">
        <div class="todo-title-wrapper">
          <div class="todo-title-area">
            <i data-feather="more-vertical" class="drag-icon"></i>
            <div class="title-wrapper">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" data-status="{{$updateStatusName}}" data-id="{{$task->id}}" onclick="updateTaskStatus(this);" class="custom-control-input" id="customCheck{{$task->id}}" {{$checked}} />
                <label class="custom-control-label" for="customCheck1"></label>
              </div>
              <span style="display:none;" class="todo-id">{{$task->id}}</span>
              <span class="todo-title">{{$task->title}}</span>
            </div>
          </div>
          <div class="todo-item-action">
            @foreach($task->tag as $tag)
            @php
            $classname="primary";
            if($tag == "Update")
            $classname="info";
            elseif($tag == "Medium")
            $classname="warning";
            elseif($tag == "High")
            $classname="danger";
            elseif($tag == "Low")
            $classname="success";
            @endphp
            <div class="badge-wrapper mr-1">
              <div class="badge badge-pill badge-light-{{$classname}}">{{$tag}}</div>
            </div>
            @endforeach
            <small class="text-nowrap text-muted mr-1">{{$task->due_date}}</small>
            <!--<div class="avatar">
              <img
                src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}"
                alt="user-avatar"
                height="32"
                width="32"
              />
            </div>-->
            <div class="avatar bg-light-warning">
              <div class="avatar-content">{{$task->staffName}}</div>
            </div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
    <div class="no-results">
      <h5>No Items Found</h5>
    </div>
  </div>
  <!-- Todo List ends -->
</div>

<!-- Right Sidebar starts -->
<div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
  <div class="modal-dialog sidebar-lg">
    <div class="modal-content p-0">
      <form id="form-modal-todo" class="todo-modal needs-validation" novalidate onsubmit="return false">
        <div class="modal-header align-items-center mb-1">
          <h5 class="modal-title">Add Task</h5>
          <div class="todo-item-action d-flex align-items-center justify-content-between ml-auto">
            <span id="importantstatus" class="todo-item-favorite cursor-pointer mr-75 text-warning"
              ><i data-feather="star" class="font-medium-2"></i
            ></span>
            <button
              type="button"
              class="close font-large-1 font-weight-normal py-0"
              data-dismiss="modal"
              aria-label="Close"
            >
              ×
            </button>
          </div>
        </div>
        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
          <div class="action-tags">
            <div class="form-group">
              <label for="todoTitleAdd" class="form-label">Title</label>
              <input type="text" id="todoTitleAdd" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Title" />
              <span id="errorMessage" class="title_errormessage"></span> 
            </div>
            <input type="hidden" id="taskId" name="taskId" value="0">
            <div class="form-group position-relative">
              <label for="task-assigned" class="form-label d-block">Assignee</label>
                <select class="select2 form-control" id="task-assigned" name="task-assigned">
                    @foreach($staffList as $staff)
                        <option data-txt= "{{$staff->stfName}}" value="{{$staff->id}}" selected>{{$staff->name}}</option>
                    @endforeach
                </select>
                <span id="errorMessage" class="assignee_errormessage"></span>
            </div>
            <div class="form-group">
              <label for="task-due-date" class="form-label">Due Date</label>
              <input type="text" class="form-control task-due-date" id="task-due-date" name="task-due-date" />
              <span id="errorMessage" class="due_date_errormessage"></span>
            </div>
            <div class="form-group">
              <label for="task-tag" class="form-label d-block">Tag</label>
              <select class="form-control task-tag" id="task-tag" name="task-tag" multiple="multiple">
                <option value="Team">Team</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
                <option value="Update">Update</option>
              </select>
              <span id="errorMessage" class="tag_errormessage"></span>
            </div>
            <div class="form-group">
              <label class="form-label">Description</label>
              <div id="task-desc" class="border-bottom-0" data-placeholder="Write Your Description"></div>
              <div class="d-flex justify-content-end desc-toolbar border-top-0">
                <span class="ql-formats mr-0">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-align"></button>
                  <button class="ql-link"></button>
                </span>
              </div>
              <span id="errorMessage" class="description_errormessage"></span>
            </div>
          </div>
          <div class="form-group my-1">
            <a href="javascript:void(0);" onclick="submitTaskData();" class="btn btn-primary d-none add-todo-item mr-1">Add</a>
            <!--<button type="submit" class="btn btn-primary d-none add-todo-item mr-1">Add</button>-->
            <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-dismiss="modal">
              Cancel
            </button>
            <a href="javascript:void(0);" onclick="submitTaskData();" class="btn btn-primary d-none update-btn update-todo-item mr-1">Update</a>
            <!--<button type="button" class="btn btn-primary d-none update-btn update-todo-item mr-1">Update</button>-->
            <a href="javascript:void(0);" data-status="Deleted" id="deletebutton" onclick="updateTaskStatus(this);" class="btn btn-outline-danger update-btn d-none">Delete</a>
            <!--<button type="button" class="btn btn-outline-danger update-btn d-none" data-dismiss="modal">Delete</button>-->
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Right Sidebar ends -->

@endsection

@section('vendor-script')
<!-- vendor js files -->
  <script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/dragula.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset('js/scripts/pages/app-todo-staff.js') }}"></script>
@endsection
