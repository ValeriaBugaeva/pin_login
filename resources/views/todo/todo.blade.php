
@extends('layouts/contentLayoutMaster')

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
@include('todo.todo-sidebar')
@section('content')

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

      @foreach($tasklist as $tl )



            @php
                $checked="";
                $updateStatusName = "Completed";
            @endphp

            @if($tl->status == "Completed")
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
                  <input type="checkbox" data-status="{{$updateStatusName}}" data-id="{{$tl->id}}" onclick="updateTaskStatus(this);" class="custom-control-input" id="customCheck{{$tl->id}}" {{$checked}} />
                  <label class="custom-control-label" for="customCheck{{$tl->id}}"></label>
              </div>
              <span style="display:none;" class="todo-id">{{$tl->id}}</span>

                @if($tl->status == "Completed")

              <span class="todo-title " style="color: #ddd">{{$tl->title}}</span>
                @else
                    <span class="todo-title completed">{{$tl->title}}</span>
                @endif


            </div>
          </div>

          <div class="todo-item-action">

            @foreach($tl->tag as $tg)
                  <div class="badge-wrapper mr-1">
                      @if($tg == "Team")
                      <div class="badge badge-pill badge-light-primary">{{$tg}}</div>
                      @elseif($tg == "Update")
                      <div class="badge badge-pill badge-light-info">{{$tg}}</div>
                      @elseif($tg == "Low")
                      <div class="badge badge-pill badge-light-success">{{$tg}}</div>
                      @elseif($tg == "High")
                      <div class="badge badge-pill badge-light-danger">{{$tg}}</div>
                      @elseif($tg == "Medium")
                      <div class="badge badge-pill badge-light-warning">{{$tg}}</div>
                      @endif
                    </div>
              @endforeach
            <small class="text-nowrap text-muted mr-1">{{ date("M d, Y",strtotime($tl->due_date))}}</small>

                @foreach($tl->assignee as $userId)
                    @php
                        $user = \App\User::where('staff_id', '=', $userId)->select('avatar', 'fullname')->first();
                    @endphp

                    <div class="avatar-group">
                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="{{ $user->fullname }}" class="avatar pull-up">
                            <div class="avatar-content">
                                <img src="{{ $user->avatar }}" alt="user-avatar" title="{{ $user->fullname }}" height="32" width="32" />
                            </div>
                        </div>
                    </div>
                @endforeach


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
            <span class="todo-item-favorite cursor-pointer mr-75"
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
                  <input
                    type="text"
                    id="todoTitleAdd"
                    name="todoTitleAdd"
                    class="new-todo-item-title form-control"
                    placeholder="Title"
                  />
                  <input type="hidden" id="taskId" name="taskId" value="0">
                </div>

                  @if(Auth::user()->role_id !== 3)

                  <div class="form-group position-relative">
                      <label for="task-assigned" class="form-label d-block">Assignee</label>
                      <select class="select2 form-control" id="task-assigned" name="task-assigned" multiple>
                      @foreach($staffList as $sl)
                      <option value="{{$sl->id}}">{{$sl->name}}</option>
                      @endforeach
                      </select>
                </div>
                  @endif

                <div class="form-group">
                  <label for="task-due-date" class="form-label">Due Date</label>
                  <input type="text" class="form-control task-due-date" id="task-due-date" name="task-due-date" />
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
                </div>
              </div>

              <input type="hidden" value="{{ Auth::id() }}" id="authId">

          <div class="form-group my-1" id="actionButton">
          <a href="javascript:void(0);" onclick="submitTaskData();" class="btn btn-primary d-none add-todo-item mr-1">Add</a>
          <!-- <button type="submit" class="btn btn-primary d-none add-todo-item mr-1">Add</button> -->

            <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-dismiss="modal">
              Cancel
            </button>

            <a href="javascript:void(0);" onclick="submitTaskData();" class="btn btn-primary d-none update-btn update-todo-item mr-1">Update</a>
            <!-- <button type="button" class="btn btn-primary d-none update-btn update-todo-item mr-1">Update</button> -->

             <a href="javascript:void(0);" data-status="Deleted" id="deletebutton" onclick="updateTaskStatus(this);" class="btn btn-outline-danger update-btn d-none">Delete</a>
            <!-- <button type="button" class="btn btn-outline-danger update-btn d-none" data-dismiss="modal">Delete</button> -->
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
  <script src="{{ asset(mix('js/scripts/pages/app-todo.js')) }}"></script>
@endsection
