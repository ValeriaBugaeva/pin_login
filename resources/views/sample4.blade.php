@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','File Manager')
@section('vendor-style')
  <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/vendors/css/extensions/jstree.min.css')}}">
@endsection
{{-- page styles --}}
@section('page-style')
  <link rel="stylesheet" type="text/css" href="{{ asset(mix('css/base/plugins/extensions/ext-component-tree.css')) }}">
  <link rel="stylesheet" type="text/css" href="{{ asset(mix('/css/base/pages/document.css')) }}">
  {{-- <link rel="stylesheet" type="text/css" href="../../../css/base/pages/document.css"> --}}
@endsection


@section('content')
<!-- overlay container -->
{{-- <div class="body-content-overlay"></div> --}}

<!-- file manager app content starts -->
<div class="file-manager-main-content">
  <!-- search area start -->
  <div class="file-manager-content-header d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <div class="sidebar-toggle d-block d-xl-none float-left align-middle ml-1">
        <i data-feather="menu" class="font-medium-5"></i>
      </div>
      <div class="input-group input-group-merge shadow-none m-0 flex-grow-1">
        <div class="input-group-prepend">
          <span class="input-group-text border-0">
            <i data-feather="search"></i>
          </span>
        </div>
        <input type="text" class="form-control files-filter border-0 bg-transparent" placeholder="Search" />
      </div>
    </div>
    <div class="d-flex align-items-center">
      <div class="file-actions">
        <i data-feather="arrow-down-circle" class="font-medium-2 cursor-pointer d-sm-inline-block d-none mr-50"></i>
        <i data-feather="trash" class="font-medium-2 cursor-pointer d-sm-inline-block d-none mr-50"></i>
      </div>
      <div class="btn-group btn-group-toggle view-toggle ml-50" data-toggle="buttons">
        <label class="btn btn-outline-primary p-50 btn-sm active">
          <input type="radio" name="view-btn-radio" data-view="grid" checked />
          <i data-feather="grid"></i>
        </label>
        <label class="btn btn-outline-primary p-50 btn-sm">
          <input type="radio" name="view-btn-radio" data-view="list" />
          <i data-feather="list"></i>
        </label>
      </div>
    </div>
  </div>
  <!-- search area ends here -->

  <div class="file-manager-content-body">
    <!-- Files Container Starts -->
    <div class="view-container">
      <h6 class="files-section-title mt-2 mb-75">Files</h6>
      <div class="card file-manager-item file">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck7" />
          <label class="custom-control-label" for="customCheck7"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-right">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <img src="{{ asset('images/icons/jpg.png') }}" alt="file-icon" height="35" />
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Profile.jpg</p>
            <p class="card-text file-size mb-0">12.6mb</p>
            <p class="card-text file-date">23 may 2019</p>
          </div>
          <small class="file-accessed text-muted">Last accessed: 3 hours ago</small>
        </div>
      </div>
      <div class="card file-manager-item file">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck8" />
          <label class="custom-control-label" for="customCheck8"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-right">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <img src="{{ asset('images/icons/doc.png') }}" alt="file-icon" height="35" />
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">account.doc</p>
            <p class="card-text file-size mb-0">82kb</p>
            <p class="card-text file-date">25 may 2019</p>
          </div>
          <small class="file-accessed text-muted">Last accessed: 23 minutes ago</small>
        </div>
      </div>
      <div class="card file-manager-item file">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck9" />
          <label class="custom-control-label" for="customCheck9"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-right">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <img src="{{ asset('images/icons/txt.png') }}" alt="file-icon" height="35" />
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">notes.txt</p>
            <p class="card-text file-size mb-0">54kb</p>
            <p class="card-text file-date">01 may 2019</p>
          </div>
          <small class="file-accessed text-muted">Last accessed: 43 minutes ago</small>
        </div>
      </div>
      <div class="card file-manager-item file">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck10" />
          <label class="custom-control-label" for="customCheck10"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-right">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <img src="{{ asset('images/icons/json.png') }}" alt="file-icon" height="35" />
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">users.json</p>
            <p class="card-text file-size mb-0">200kb</p>
            <p class="card-text file-date">12 may 2019</p>
          </div>
          <small class="file-accessed text-muted">Last accessed: 1 hour ago</small>
        </div>
      </div>
      <div class="d-none flex-grow-1 align-items-center no-result mb-3">
        <i data-feather="alert-circle" class="mr-50"></i>
        No Results
      </div>
    </div>
    <!-- /Files Container Ends -->
  </div>
</div>
<!-- file manager app content ends -->



<!-- File Info Sidebar Starts-->
{{-- <div class="modal modal-slide-in fade show" id="app-file-manager-info-sidebar">
  <div class="modal-dialog sidebar-lg">
    <div class="modal-content p-0">
      <div class="modal-header d-flex align-items-center justify-content-between mb-1 p-2">
        <h5 class="modal-title">menu.js</h5>
        <div>
          <i data-feather="trash" class="cursor-pointer mr-50" data-dismiss="modal"></i>
          <i data-feather="x" class="cursor-pointer" data-dismiss="modal"></i>
        </div>
      </div>
      <div class="modal-body flex-grow-1 pb-sm-0 pb-1">
        <ul class="nav nav-tabs tabs-line" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              data-toggle="tab"
              href="#details-tab"
              role="tab"
              aria-controls="details-tab"
              aria-selected="true"
            >
              <i data-feather="file"></i>
              <span class="align-middle ml-25">Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-toggle="tab"
              href="#activity-tab"
              role="tab"
              aria-controls="activity-tab"
              aria-selected="true"
            >
              <i data-feather="activity"></i>
              <span class="align-middle ml-25">Activity</span>
            </a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="details-tab" role="tabpanel" aria-labelledby="details-tab">
            <div class="d-flex flex-column justify-content-center align-items-center py-5">
              <img src="{{ asset('images/icons/js.png') }}" alt="file-icon" height="64" />
              <p class="mb-0 mt-1">54kb</p>
            </div>
            <h6 class="file-manager-title my-2">Settings</h6>
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center mb-1">
                <span>File Sharing</span>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="sharing" />
                  <label class="custom-control-label" for="sharing"></label>
                </div>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-1">
                <span>Synchronization</span>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="sync" />
                  <label class="custom-control-label" for="sync"></label>
                </div>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-1">
                <span>Backup</span>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="backup" />
                  <label class="custom-control-label" for="backup"></label>
                </div>
              </li>
            </ul>
            <hr class="my-2" />
            <h6 class="file-manager-title my-2">Info</h6>
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center">
                <p>Type</p>
                <p class="font-weight-bold">JS</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Size</p>
                <p class="font-weight-bold">54kb</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Location</p>
                <p class="font-weight-bold">Files > Documents</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Owner</p>
                <p class="font-weight-bold">Sheldon Cooper</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Modified</p>
                <p class="font-weight-bold">12th Aug, 2020</p>
              </li>

              <li class="d-flex justify-content-between align-items-center">
                <p>Created</p>
                <p class="font-weight-bold">01 Oct, 2019</p>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="activity-tab" role="tabpanel" aria-labelledby="activity-tab">
            <h6 class="file-manager-title my-2">Today</h6>
            <div class="media align-items-center mb-2">
              <div class="avatar avatar-sm mr-50">
                <img src="{{ asset('images/avatars/5-small.png') }}" alt="avatar" width="28" />
              </div>
              <div class="media-body">
                <p class="mb-0">
                  <span class="font-weight-bold">Mae</span>
                  shared the file with
                  <span class="font-weight-bold">Howard</span>
                </p>
              </div>
            </div>
            <div class="media align-items-center">
              <div class="avatar avatar-sm bg-light-primary mr-50">
                <span class="avatar-content">SC</span>
              </div>
              <div class="media-body">
                <p class="mb-0">
                  <span class="font-weight-bold">Sheldon</span>
                  updated the file
                </p>
              </div>
            </div>
            <h6 class="file-manager-title mt-3 mb-2">Yesterday</h6>
            <div class="media align-items-center mb-2">
              <div class="avatar avatar-sm bg-light-success mr-50">
                <span class="avatar-content">LH</span>
              </div>
              <div class="media-body">
                <p class="mb-0">
                  <span class="font-weight-bold">Leonard</span>
                  renamed this file to
                  <span class="font-weight-bold">menu.js</span>
                </p>
              </div>
            </div>
            <div class="media align-items-center">
              <div class="avatar avatar-sm mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" width="28" />
              </div>
              <div class="media-body">
                <p class="mb-0">
                  <span class="font-weight-bold">You</span>
                  shared this file with Leonard
                </p>
              </div>
            </div>
            <h6 class="file-manager-title mt-3 mb-2">3 days ago</h6>
            <div class="media">
              <div class="avatar avatar-sm mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" width="28" />
              </div>
              <div class="media-body">
                <p class="mb-50">
                  <span class="font-weight-bold">You</span>
                  uploaded this file
                </p>
                <img src="{{ asset('images/icons/js.png') }}" alt="Avatar" class="mr-50" height="24" />
                <span class="font-weight-bold">app.js</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- File Info Sidebar Ends -->

<!-- File Dropdown Starts-->
{{-- <div class="dropdown-menu dropdown-menu-right file-dropdown">
  <a class="dropdown-item" href="javascript:void(0);">
    <i data-feather="download" class="align-middle mr-50"></i>
    <span class="align-middle">Download</span>
  </a>
  <a class="dropdown-item" href="javascript:void(0);">
    <i data-feather="user-plus" class="align-middle mr-50"></i>
    <span class="align-middle">Share</span>
  </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="javascript:void(0);">
    <i data-feather="edit" class="align-middle mr-50"></i>
    <span class="align-middle">Rename</span>
  </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="javascript:void(0);">
    <i data-feather="trash" class="align-middle mr-50"></i>
    <span class="align-middle">Delete</span>
  </a>
</div> --}}
<!-- /File Dropdown Ends -->


@endsection
@section('vendor-script')
<script src="{{asset('vendors/js/extensions/jstree.min.js')}}"></script>
@endsection
{{-- page styles --}}
@section('page-script')
<script src="{{asset('js/scripts/pages/app-file-manager.js')}}"></script>
@endsection
