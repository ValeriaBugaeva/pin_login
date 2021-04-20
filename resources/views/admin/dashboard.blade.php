
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap.min.css')) }}">
@endsection
@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
    <link rel="stylesheet" href="{{asset(mix('css/base/pages/app-chat-list.css'))}}">
@endsection

@section('content')
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row match-height">
            <!-- Greetings Card starts -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card card-congratulations">
                    <div class="card-body text-center">
                        <img
                            src="{{asset('images/elements/decore-left.png')}}"
                            class="congratulations-img-left"
                            alt="card-img-left"
                        />
                        <img
                            src="{{asset('images/elements/decore-right.png')}}"
                            class="congratulations-img-right"
                            alt="card-img-right"
                        />
                        <div class="avatar avatar-xl bg-primary shadow">
                            <div class="avatar-content">
                                <i data-feather="award" class="font-large-1"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="mb-1 text-white">Congratulations John,</h1>
                            <p class="card-text m-auto w-75">
                                You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Greetings Card ends -->

            <!-- Subscribers Chart Card starts -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header flex-column align-items-start pb-0">
                        <div class="avatar bg-light-primary p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="users" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder mt-1">92.6k</h2>
                        <p class="card-text">Subscribers Gained</p>
                    </div>
                    <div id="gained-chart"></div>
                </div>
            </div>
            <!-- Subscribers Chart Card ends -->

            <!-- Orders Chart Card starts -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header flex-column align-items-start pb-0">
                        <div class="avatar bg-light-warning p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="package" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder mt-1">38.4K</h2>
                        <p class="card-text">Orders Received</p>
                    </div>
                    <div id="order-chart"></div>
                </div>
            </div>
            <!-- Orders Chart Card ends -->
        </div>

        <div class="row match-height">
            <!-- Avg Sessions Chart Card starts -->
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row pb-50">
                            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0">
                                <div class="mb-1 mb-sm-0">
                                    <h2 class="font-weight-bolder mb-25">2.7K</h2>
                                    <p class="card-text font-weight-bold mb-2">Avg Sessions</p>
                                    <div class="font-medium-2">
                                        <span class="text-success mr-25">+5.2%</span>
                                        <span>vs last 7 days</span>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">View Details</button>
                            </div>
                            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column text-right order-sm-2 order-1">
                                <div class="dropdown chart-dropdown">
                                    <button
                                        class="btn btn-sm border-0 dropdown-toggle p-50"
                                        type="button"
                                        id="dropdownItem5"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Last 7 Days
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                                <div id="avg-sessions-chart"></div>
                            </div>
                        </div>
                        <hr />
                        <div class="row avg-sessions pt-50">
                            <div class="col-6 mb-2">
                                <p class="mb-50">Goal: $100000</p>
                                <div class="progress progress-bar-primary" style="height: 6px">
                                    <div
                                        class="progress-bar"
                                        role="progressbar"
                                        aria-valuenow="50"
                                        aria-valuemin="50"
                                        aria-valuemax="100"
                                        style="width: 50%"
                                    ></div>
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <p class="mb-50">Users: 100K</p>
                                <div class="progress progress-bar-warning" style="height: 6px">
                                    <div
                                        class="progress-bar"
                                        role="progressbar"
                                        aria-valuenow="60"
                                        aria-valuemin="60"
                                        aria-valuemax="100"
                                        style="width: 60%"
                                    ></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <p class="mb-50">Retention: 90%</p>
                                <div class="progress progress-bar-danger" style="height: 6px">
                                    <div
                                        class="progress-bar"
                                        role="progressbar"
                                        aria-valuenow="70"
                                        aria-valuemin="70"
                                        aria-valuemax="100"
                                        style="width: 70%"
                                    ></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <p class="mb-50">Duration: 1yr</p>
                                <div class="progress progress-bar-success" style="height: 6px">
                                    <div
                                        class="progress-bar"
                                        role="progressbar"
                                        aria-valuenow="90"
                                        aria-valuemin="90"
                                        aria-valuemax="100"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Avg Sessions Chart Card ends -->

            <!-- Support Tracker Chart Card starts -->
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h4 class="card-title">Support Tracker</h4>
                        <div class="dropdown chart-dropdown">
                            <button
                                class="btn btn-sm border-0 dropdown-toggle p-50"
                                type="button"
                                id="dropdownItem4"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                Last 7 Days
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                <h1 class="font-large-2 font-weight-bolder mt-2 mb-0">163</h1>
                                <p class="card-text">Tickets</p>
                            </div>
                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                <div id="support-trackers-chart"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <div class="text-center">
                                <p class="card-text mb-50">New Tickets</p>
                                <span class="font-large-1 font-weight-bold">29</span>
                            </div>
                            <div class="text-center">
                                <p class="card-text mb-50">Open Tickets</p>
                                <span class="font-large-1 font-weight-bold">63</span>
                            </div>
                            <div class="text-center">
                                <p class="card-text mb-50">Response Time</p>
                                <span class="font-large-1 font-weight-bold">1d</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Support Tracker Chart Card ends -->
        </div>

        <div class="row match-height">
            <!-- Developer Meetup Card -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card card-developer-meetup">
                    <div class="meetup-img-wrapper rounded-top text-center">
                        <img src="{{asset('images/illustration/email.svg')}}" alt="Meeting Pic" height="170" />
                    </div>
                    <div class="card-body">
                        <div class="meetup-header d-flex align-items-center">
                            <div class="meetup-day">
                                <h6 class="mb-0">THU</h6>
                                <h3 class="mb-0">24</h3>
                            </div>
                            <div class="my-auto">
                                <h4 class="card-title mb-25">Developer Meetup</h4>
                                <p class="card-text mb-0">Meet world popular developers</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="avatar bg-light-primary rounded mr-1">
                                <div class="avatar-content">
                                    <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-0">Sat, May 25, 2020</h6>
                                <small>10:AM to 6:PM</small>
                            </div>
                        </div>
                        <div class="media mt-2">
                            <div class="avatar bg-light-primary rounded mr-1">
                                <div class="avatar-content">
                                    <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-0">Central Park</h6>
                                <small>Manhattan, New york City</small>
                            </div>
                        </div>
                        <div class="avatar-group">
                            <div
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-placement="bottom"
                                data-original-title="Billy Hopkins"
                                class="avatar pull-up"
                            >
                                <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" alt="Avatar" width="33" height="33" />
                            </div>
                            <div
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-placement="bottom"
                                data-original-title="Amy Carson"
                                class="avatar pull-up"
                            >
                                <img src="{{asset('images/portrait/small/avatar-s-6.jpg')}}" alt="Avatar" width="33" height="33" />
                            </div>
                            <div
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-placement="bottom"
                                data-original-title="Brandon Miles"
                                class="avatar pull-up"
                            >
                                <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="Avatar" width="33" height="33" />
                            </div>
                            <div
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-placement="bottom"
                                data-original-title="Daisy Weber"
                                class="avatar pull-up"
                            >
                                <img
                                    src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                                    alt="Avatar"
                                    width="33"
                                    height="33"
                                />
                            </div>
                            <div
                                data-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-placement="bottom"
                                data-original-title="Jenny Looper"
                                class="avatar pull-up"
                            >
                                <img
                                    src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                                    alt="Avatar"
                                    width="33"
                                    height="33"
                                />
                            </div>
                            <h6 class="align-self-center cursor-pointer ml-50 mb-0">+42</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Developer Meetup Card -->
            <!-- Timeline Card -->
            <div class="col-lg-4 col-12">
                <div class="card card-user-timeline">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <i data-feather="list" class="user-timeline-title-icon"></i>
                            <h4 class="card-title">User Timeline</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="timeline ml-50 mb-0">
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>12 Invoices have been paid</h6>
                                    <p>Invoices are paid to the company</p>
                                    <div class="media align-items-center">
                                        <img class="mr-1" src="{{asset('images/icons/json.png')}}" alt="data.json" height="23" />
                                        <h6 class="media-body mb-0">data.json</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>Client Meeting</h6>
                                    <p>Project meeting with Carl</p>
                                    <div class="media align-items-center">
                                        <div class="avatar mr-50">
                                            <img
                                                src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                                                alt="Avatar"
                                                width="38"
                                                height="38"
                                            />
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Carl Roy (Client)</h6>
                                            <p class="mb-0">CEO of Infibeam</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>Create a new project</h6>
                                    <p>Add files to new design folder</p>
                                    <div class="avatar-group">
                                        <div
                                            data-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-placement="bottom"
                                            data-original-title="Billy Hopkins"
                                            class="avatar pull-up"
                                        >
                                            <img
                                                src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                                                alt="Avatar"
                                                width="33"
                                                height="33"
                                            />
                                        </div>
                                        <div
                                            data-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-placement="bottom"
                                            data-original-title="Amy Carson"
                                            class="avatar pull-up"
                                        >
                                            <img
                                                src="{{asset('images/portrait/small/avatar-s-6.jpg')}}"
                                                alt="Avatar"
                                                width="33"
                                                height="33"
                                            />
                                        </div>
                                        <div
                                            data-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-placement="bottom"
                                            data-original-title="Brandon Miles"
                                            class="avatar pull-up"
                                        >
                                            <img
                                                src="{{asset('images/portrait/small/avatar-s-8.jpg')}}"
                                                alt="Avatar"
                                                width="33"
                                                height="33"
                                            />
                                        </div>
                                        <div
                                            data-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-placement="bottom"
                                            data-original-title="Daisy Weber"
                                            class="avatar pull-up"
                                        >
                                            <img
                                                src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                                                alt="Avatar"
                                                width="33"
                                                height="33"
                                            />
                                        </div>
                                        <div
                                            data-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-placement="bottom"
                                            data-original-title="Jenny Looper"
                                            class="avatar pull-up"
                                        >
                                            <img
                                                src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                                                alt="Avatar"
                                                width="33"
                                                height="33"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                <div class="timeline-event">
                                    <h6>Update project for client</h6>
                                    <p class="mb-0">Update files as per new design</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Timeline Card -->
            <!-- Chat Card -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card chat-widget">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="avatar mr-2">
                                <img src="{{asset('images/portrait/small/avatar-s-20.jpg')}}" alt="Avatar" width="34" height="34" />
                                <span class="avatar-status-online"></span>
                            </div>
                            <h5 class="mb-0">Carrie Hawkins</h5>
                        </div>
                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                    </div>
                    <!-- User Chat messages -->
                    <section class="chat-app-window">
                        <div class="user-chats">
                            <div class="chats">
                                <div class="chat">
                                    <div class="chat-avatar">
                <span class="avatar box-shadow-1 cursor-pointer">
                  <img
                      src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
                      alt="avatar"
                      height="36"
                      width="36"
                  />
                </span>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>How can we help? We're here for you! 😄</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                <span class="avatar box-shadow-1 cursor-pointer">
                  <img
                      src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                      alt="avatar"
                      height="36"
                      width="36"
                  />
                </span>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Hey John, I am looking for the best admin template.</p>
                                            <p>Could you please help me to find it out? 🤔</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>It should be Bootstrap 4 compatible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                <span class="avatar box-shadow-1 cursor-pointer">
                  <img
                      src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
                      alt="avatar"
                      height="36"
                      width="36"
                  />
                </span>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Absolutely!</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>Vuexy admin is the responsive bootstrap 4 admin template.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                <span class="avatar box-shadow-1 cursor-pointer">
                  <img
                      src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                      alt="avatar"
                      height="36"
                      width="36"
                  />
                </span>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Looks clean and fresh UI. 😃</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>It's perfect for my next project.</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>How can I purchase it?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                <span class="avatar box-shadow-1 cursor-pointer">
                  <img
                      src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
                      alt="avatar"
                      height="36"
                      width="36"
                  />
                </span>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Thanks, from ThemeForest.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                <span class="avatar box-shadow-1 cursor-pointer">
                  <img
                      src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                      alt="avatar"
                      height="36"
                      width="36"
                  />
                </span>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>I will purchase it for sure. 👍</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>Thanks.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                <span class="avatar box-shadow-1 cursor-pointer">
                  <img
                      src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
                      alt="avatar"
                      height="36"
                      width="36"
                  />
                </span>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Great, Feel free to get in touch on</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Submit Chat form -->
                        <form class="chat-app-form" action="javascript:void(0);" onsubmit="enterChat();">
                            <div class="input-group input-group-merge mr-50 w-75 form-send-message">
                                <div class="input-group-prepend">
              <span class="input-group-text">
                <label for="attach-doc" class="attachment-icon mb-0">
                  <i data-feather="image" class="cursor-pointer lighten-2 text-secondary"></i>
                  <input type="file" id="attach-doc" hidden /> </label
                ></span>
                                </div>
                                <input type="text" class="form-control message" placeholder="Type your message" />
                            </div>
                            <button type="button" class="btn btn-primary send" onclick="enterChat();">
                                <i data-feather="send" class="d-lg-none"></i>
                                <span class="d-none text-nowrap d-lg-block">Send</span>
                            </button>
                        </form>
                        <!--/ Submit Chat form -->
                    </section>
                    <!-- User Chat messages -->
                </div>
            </div>
            <!--/ Chat Card -->
        </div>

        <!-- List DataTable -->
        <div class="row">
            <div class="col-12">
                <div class="card invoice-list-wrapper">
                    <div class="card-datatable table-responsive">
                        <table class="invoice-list-table table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th><i data-feather="trending-up"></i></th>
                                <th>Client</th>
                                <th>Total</th>
                                <th class="text-truncate">Issued Date</th>
                                <th>Balance</th>
                                <th>Invoice Status</th>
                                <th class="cell-fit">Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ List DataTable -->
    </section>
    <!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/cards/card-advance.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>
@endsection
