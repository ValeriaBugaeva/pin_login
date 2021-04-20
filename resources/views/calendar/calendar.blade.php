@extends('layouts/contentLayoutMaster')

@section('title', 'App Calender')

@section('vendor-style')
  <!-- Vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/calendars/fullcalendar.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-calendar.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection
@section('content')
<!-- Full calendar start -->
<section>
  <div class="app-calendar overflow-hidden border">
    <div class="row no-gutters">

      <!-- Sidebar -->
      <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column" id="app-calendar-sidebar">
        <div class="sidebar-wrapper">

            <div class="card-body d-flex justify-content-center">
            <button
              class="btn btn-primary btn-toggle-sidebar btn-block"
              data-toggle="modal"
              data-target="#add-new-sidebar"
            >
              <span class="align-middle">Add Event</span>
            </button>
          </div>

          @if(Auth::user()->role_id !== 3)

            <div class="card-body justify-content-center selectCross">

                <div class="form-group position-relative">
                    <select class="select2 form-control" id="task-assigned" name="task-assigned">
                        <option data-avatar="" value="">Search for Staffs</option>
                        @foreach($staffList as $sl)
                            <option data-avatar="{{$sl->avatar}}" value="{{$sl->id}}">{{$sl->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
          <div class="card-body pb-0">
            <h5 class="section-label mb-1">
              <span class="align-middle">Filter</span>
            </h5>

              <div class="custom-control custom-checkbox mb-1">
              <input type="checkbox" class="custom-control-input select-all" id="select-all" checked />
              <label class="custom-control-label" for="select-all">View All</label>
            </div>

            <div class="calendar-events-filter">
              <div class="custom-control custom-control-danger custom-checkbox mb-1">
                <input
                  type="checkbox"
                  class="custom-control-input input-filter"
                  id="personal"
                  data-value="personal"
                  checked
                />
                <label class="custom-control-label" for="personal">Personal</label>
              </div>
              <div class="custom-control custom-control-primary custom-checkbox mb-1">
                <input
                  type="checkbox"
                  class="custom-control-input input-filter"
                  id="business"
                  data-value="business"
                  checked
                />
                <label class="custom-control-label" for="business">Business</label>
              </div>
              <div class="custom-control custom-control-warning custom-checkbox mb-1">
                <input
                  type="checkbox"
                  class="custom-control-input input-filter"
                  id="family"
                  data-value="family"
                  checked
                />
                <label class="custom-control-label" for="family">Family</label>
              </div>
              <div class="custom-control custom-control-success custom-checkbox mb-1">
                <input
                  type="checkbox"
                  class="custom-control-input input-filter"
                  id="holiday"
                  data-value="holiday"
                  checked
                />
                <label class="custom-control-label" for="holiday">Holiday</label>
              </div>

              <div class="custom-control custom-control-info custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input input-filter" id="etc" data-value="etc" checked />
                <label class="custom-control-label" for="etc">ETC</label>
              </div>

                <div class="custom-control custom-control-warning custom-checkbox">
                <input type="checkbox" class="custom-control-input input-filter" id="todo" data-value="todo" checked />
                <label class="custom-control-label" for="todo">ToDo</label>
              </div>

            </div>
          </div>

        </div>

        <div class="mt-auto">
          <img src="{{ asset('images/pages/calendar-illustration.png') }}"
            alt="Calendar illustration"
            class="img-fluid"/>
        </div>
      </div>
      <!-- /Sidebar -->

      <!-- Calendar -->
      <div class="col position-relative">
        <div class="card shadow-none border-0 mb-0 rounded-0">
          <div class="card-body pb-0">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
      <!-- /Calendar -->
      <div class="body-content-overlay"></div>
    </div>
  </div>

  <!-- Calendar Add/Update/Delete event modal-->
  <div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
    <div class="modal-dialog sidebar-lg">
      <div class="modal-content p-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title">Add Event</h5>
        </div>
        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">

          <form class="event-form needs-validation" data-ajax="false" novalidate>

              <div class="form-group">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Event Title" required />
              </div>

            <div class="form-group">
              <label for="select-label" class="form-label">Label</label>
              <select class="select2 select-label form-control w-100" id="select-label" name="select-label">
                <option data-label="primary" value="Business" selected>Business</option>
                <option data-label="danger" value="Personal">Personal</option>
                <option data-label="warning" value="Family">Family</option>
                <option data-label="success" value="Holiday">Holiday</option>
                <option data-label="info" value="ETC">ETC</option>
                <option data-label="info" value="TODO">ToDo</option>
              </select>
            </div>

            <div class="form-group position-relative">
              <label for="start-date" class="form-label">Start Date</label>
              <input type="text" class="form-control" id="start-date" name="start-date" placeholder="Start Date" />
            </div>

            <div class="form-group position-relative">
              <label for="end-date" class="form-label">End Date</label>
              <input type="text" class="form-control" id="end-date" name="end-date" placeholder="End Date" />
            </div>
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input allDay-switch" id="customSwitch3" />
                <label class="custom-control-label" for="customSwitch3">All Day</label>
              </div>
            </div>

            <div class="form-group">
              <label for="event-url" class="form-label">Event URL</label>
              <input type="url" class="form-control" name="url" id="event-url" placeholder="https://www.google.com" />
            </div>

              @if(Auth::user()->role_id !== 3)

                <div class="form-group select2-primary">
                      <label for="event-guests" class="form-label">Add Guests</label>
                      <select class="select2 select-add-guests form-control w-100" id="event-guests" multiple>

                          @foreach($staffList as $sl)
                              <option data-avatar="{{$sl->avatar}}" value="{{$sl->id}}">{{$sl->name}}</option>
                          @endforeach

                      </select>
                </div>
              @endif

              <div class="form-group">
                  <label for="event-location" class="form-label">Location</label>
                  <input type="text" class="form-control" id="event-location" placeholder="Enter Location" />
              </div>


              @if(Auth::user()->role_id !== 3)
                  <div class="form-group select2-primary">
                      <label for="event-todos" class="form-label">Add ToDo</label>
                      <select class="select2 select-add-todos form-control w-100" id="event-todos" multiple>

                          @foreach($todos as $sl)
                              <option value="{{$sl->title}}">{{$sl->title}}</option>
                          @endforeach

                      </select>
                  </div>
              @endif



            <div class="form-group">
              <label class="form-label">Description</label>
              <textarea name="event-description-editor" id="event-description-editor" class="form-control"></textarea>
            </div>

              <input type="hidden" id="eventUserId" value="{{ Auth::id() }}">

            <div class="form-group d-flex">
              <button type="submit" class="btn btn-primary add-event-btn mr-1" >Add</button>
              <button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary update-event-btn d-none mr-1">Update</button>

              <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button>

            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <!--/ Calendar Add/Update/Delete event modal-->

    <div class="modal fade dtr-bs-modal show" role="dialog" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="eventTitle"></h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <table class="table">

                        <tr data-dt-row="99" data-dt-column="3">
                            <td>Label:</td>
                            <td>
                                <span id="eventDetLabel"></span>
                            </td>
                        </tr>

                        <tr data-dt-row="99" data-dt-column="4">
                            <td>Start Date:</td>
                            <td id="eventStartDate"></td>
                        </tr>

                        <tr data-dt-row="99" data-dt-column="5">
                            <td>End Date:</td>
                            <td id="eventEndDate"></td>
                        </tr>

                        <tr data-dt-row="99" data-dt-column="6">
                            <td>Event Url:</td>
                            <td id="eventDetailsUrl"></td>
                        </tr>

                        <tr data-dt-row="99" data-dt-column="7">
                            <td>Location:</td>
                            <td id="eventDetailsLocation"></td>
                        </tr>

                        <tr data-dt-row="99" data-dt-column="7">
                            <td>Todo:</td>
                            <td id="eventToDoTitle"></td>
                        </tr>

                        <tr data-dt-row="99" data-dt-column="7">
                            <td>Description:</td>
                            <td id="eventDescription"></td>
                        </tr>



                        <tr data-dt-row="99" data-dt-column="8" id="hideRow">
                            <td>Actions:</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a class="pr-1 dropdown-toggle hide-arrow text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:;" class="dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 mr-50">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>Details
                                        </a>

                                        <a href="javascript:;" class="dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive font-small-4 mr-50">
                                                <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                                <rect x="1" y="3" width="22" height="5"></rect>
                                                <line x1="10" y1="12" x2="14" y2="12"></line>
                                            </svg>Archive</a><a href="javascript:;" class="dropdown-item delete-record"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>Delete</a></div></div>

                                    <a href="javascript:;" class="item-edit" id="editEvent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>





</section>

<style>
    .pac-container{
        z-index: 9999999!important;
    }
    span#eventDetLabel {
        padding: 3px;
        border-radius: 2px;
    }

    .selectCross .select2-container--default .select2-selection--single .select2-selection__clear {
        font-size: 35px;
        margin-right: -18px;
        color: #ddd;
    }
    .selectCross .select2-container--default .select2-selection--single .select2-selection__arrow {
        display: none;
    }
</style>

<script type="text/javascript">
    var events = {!! json_encode($data) !!};

    let map;
    function initialize() {

        var input = document.getElementById('event-location');
        console.log(input.length);
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();

            $("#event-location").val(place.formatted_address);

        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- Full calendar end -->
@endsection

@section('vendor-script')
  <!-- Vendor js files -->
  <script src="{{ asset(mix('vendors/js/calendar/fullcalendar.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/app-calendar-events.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-calendar.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script>
@endsection
