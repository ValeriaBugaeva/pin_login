@extends('layouts/contentLayoutMaster')

@section('title', 'User View')

@section('vendor-style')
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
@endsection
<style>
#errorMessage {
    color: red;
}
</style>
@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}"> 
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <!-- <link rel="stylesheet" type="text/css" href="../../../css/base/pages/documents.css"> -->

  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="../../../company/modal-staff.css">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection

@section('content')
<section class="app-user-view">
  <!-- User Card & Plan Starts -->
  <div class="row">
    <!-- User Card starts-->
    <div class="col-xl-9 col-lg-8 col-md-7">
      <div class="card user-card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
              <div class="user-avatar-section">
                <div class="d-flex justify-content-start">
                  <img class="img-fluid rounded"src="{{asset('images/avatars/7.png')}}" height="104" width="104" alt="User avatar"/>
                  <div class="d-flex flex-column ml-1">
                    <div class="user-info mb-1">
                      <h4 class="mb-0">{{ $staffdetails->name }} </h4>
                      <span class="card-text">{{ $staffdetails->email }}</span>
                    </div>
                    <div class="d-flex flex-wrap">
                      <!--<a href="/staff/<?php echo $staffdetails->id;?>/edit" class="btn btn-primary">Edit</a>-->
                      <button type="button" class="btn btn-primary waves-effect waves-float waves-light" data-toggle="modal" data-target="#large">Edit</button>
                      <button type="button" class="btn btn-outline-danger ml-1" id="confirm-color">STOP</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center user-total-numbers">
                <div class="d-flex align-items-center mr-2">
                  <div class="color-box bg-light-primary">
                    <i data-feather="dollar-sign" class="text-primary"></i>
                  </div>
                  <div class="ml-1">
                    <h5 class="mb-0">{{ $staffdetails->monthly_salary }}€</h5>
                    <small>Monthly Salary</small>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="color-box bg-light-success">
                    <i data-feather="clock" class="text-success"></i>
                  </div>
                  <div class="ml-1">
                    <h5 class="mb-0">{{ $staffdetails->weekly_working_time }}h</h5>
                    <small>Wage Rate per week</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
              <div class="user-info-wrapper">
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="map-pin" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Location</span>
                  </div>
                  <p class="card-text mb-0">{{ $staffdetails->locationName  }}</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="user" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Position</span>
                  </div>
                  <p class="card-text mb-0">{{ $staffdetails->position }}</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="clipboard" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Contrat</span>
                  </div>
                  <p class="card-text mb-0">{{ $staffdetails->contract_type  }}</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="calendar" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">DOB</span>
                  </div>
                  <p class="card-text mb-0">{{ $staffdetails->dob }}</p>
                </div>
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="award" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Bonus</span>
                  </div>
                  <p class="card-text mb-0">N/A</p>
                </div>
              </div>
              <div class="row">
                <div class="col-auto">
                    <div class="demo-inline-spacing">
                      <div class="custom-control custom-control-success custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" />
                          <label class="custom-control-label" for="customSwitch1">It's a Manager Role</label>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card Ends-->

    <!-- Stats Horizontal Card -->
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="card plan-card border-primary">
        <div class="card-header">
          <div>
            <h2 class="font-weight-bolder mb-0">{{ $staffdetails->weekly_working_time  }}h</h2>
            <p class="card-text">Working hour</p>
          </div>
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content">
              <i data-feather="clock" class="font-medium-5"></i>
            </div>
          </div>
        </div>
        </div>
        <div class="card plan-card border-primary">
        <div class="card-header">
          <div>
            <h2 class="font-weight-bolder mb-0">{{ $staffdetails->daily_breaks_time  }}</h2>
            <p class="card-text">Break Time</p>
          </div>
          <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content">
              <i data-feather="bell" class="font-medium-5"></i>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  <!-- User Card & Plan Ends -->
    <!-- Bio staff -->
    <div class="row">
    <div class="col-12">
      <!-- <div class="card"> -->
<!-- Basic Horizontal form layout section start -->
<section class="modern-vertical-wizard">
  <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
    <div class="bs-stepper-header">
      <div class="step" data-target="#account-details-vertical-modern">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="file-text" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Account Details</span>
            <span class="bs-stepper-subtitle">Setup Account Details</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#personal-info-vertical-modern">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="user" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Personal Info</span>
            <span class="bs-stepper-subtitle">Add Birth day and Address Info</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#address-step-vertical-modern">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="clipboard" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Wage</span>
            <span class="bs-stepper-subtitle">Contract & Qualification</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#social-links-vertical-modern">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="dollar-sign" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Salary</span>
            <span class="bs-stepper-subtitle">Salary & Rate</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <div id="account-details-vertical-modern" class="content">
        <div class="content-header">
          <h5 class="mb-0">Account Details</h5>
          <small class="text-muted">Enter The Employee Details</small>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="gender">Gender</label>
            <select class="form-control"  id="gender" name="gender">
                <option value="FEMALE" for="female">Female</option>
                <option value="MALE" selected="selected" for="male">Male</option>
            </select>     
            </div>
            <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Username" value="@eleanor.aguilar" name="username" id="username"/>
            </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="firstname">First Name</label>
            <input type="text" id="firstname" value="Eleanor" required name="firstname"  class="form-control" placeholder="First Name"/>
            </div>
            <div class="form-group col-md-6">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" value="Aguilar" required name="lastname"  class="form-control" placeholder="Last Name"/>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" placeholder="Email" value="eleanor.aguilar@gmail.com" name="email" id="email"/>
            </div>
            <div class="form-group col-md-6">
            <label for="mobile">Mobile</label>
            <input id="phone" type="text" class="form-control" value="&#43;6595895857" name="phone"/>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
          </button>
        </div>
      </div>
      <div id="personal-info-vertical-modern" class="content">
        <div class="content-header">
          <h5 class="mb-0">Personal Info</h5>
          <small>Enter Your Personal Info.</small>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="birth">Birth date</label>
          <input id="dob" type="text" class="form-control date-mask" required name="dob" placeholder="DD-MM-YYYY" value="25-12-1990"/>
            </div>
            <div class="form-group col-md-6">
            <label for="placebirth">Place Birth</label>
            <input id="placebirth" type="text" class="form-control" value="New York" required name="placebirth" placeholder="Country"/>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="Nationality">Nationality</label>
            <input id="nationality" type="text" class="form-control" required name="nationality" value="United States" placeholder="Country"/>
            </div>
            <div class="form-group col-md-6">
          <label for="nin">National Insurance Number</label>
            <input type="text" id="nin" value="1806543908765" name="nin"  class="form-control" placeholder="National Insurance Number"/>
            </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="address">Address</label>
            <input id="address" type="text" class="form-control" value="A-65, Belvedere Streets" required name="address" placeholder="Address"/>
          </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
        <label for="postcode">Postcode</label>
        <input id="postcode" type="text" class="form-control" value="597626" required name="postcode" placeholder="75000"/>
            </div>
            <div class="form-group col-md-6">
            <label for="city">City</label>
            <input id="city" type="text" class="form-control" required name="city" value="London" placeholder="City"/>
            </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
          </button>
        </div>
      </div>
      <div id="address-step-vertical-modern" class="content">
        <div class="content-header">
          <h5 class="mb-0">Wage</h5>
          <small>Contract & Qualification</small>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="contracttype">Contract Type</label>
          <select class="form-control" id="contract_type" required name="contract_type">
                <option>CDD</option>
                <option>Saisonnier</option>
                <option>Apprentissage</option>
                <option>Extra</option>
                <option>Intérim</option>
                <option>Stagiaire</option>
                  </select>
            </div>
            <div class="form-group col-md-6">
            <label for="hiringdate">Hiring Date</label>
            <input id="hiring_date" type="text" class="form-control flatpickr-basic" required name="hiring_date" value="25-12-2020" placeholder="DD-MM-YYYY"/>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="team">Location</label>
          <input type="text" class="form-control" value="Google" placeholder="Location" id="location_id" name="location_id"/>
            </div>
            <div class="form-group col-md-6">
            <label for="position">Position</label>
          <input type="text" class="form-control" value="Manager" placeholder="Position" id="position" name="position"/>
          </div>
        </div>
        <div class="row">
        <div class="form-group col-md-12">
        <label for="qualification">Qualification</label>
        <div class="input-group">
                  <div class="input-group-prepend">
                    <button
                      type="button"
                      class="btn btn-outline-primary dropdown-toggle"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      Action
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);">Niveau 1 (Employé)</a>
                      <a class="dropdown-item" href="javascript:void(0);">Niveau 2 (Employé)</a>
                      <a class="dropdown-item" href="javascript:void(0);">Niveau 3 (Employé)</a>
                      <a class="dropdown-item" href="javascript:void(0);">Niveau 4 (Agent de maîtrise ou cadre)</a>
                      <a class="dropdown-item" href="javascript:void(0);">Niveau 5 (Cadre)</a>
                      <div role="separator" class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void(0);">Autre qualification</a>
                    </div>
                  </div>
                  <select class="form-control" id="qualification">
                        <option></option>
                        <option value="1">Échelon 1</option>
                        <option value="2">Échelon 2</option>
                        <option value="3">Échelon 3</option>
                        <option value="4">Échelon 4</option>
                        <option value="5">Échelon 5</option>
                        <option value="6">Échelon 6</option>
                        <option value="7">Échelon 7</option>
                        <option value="8">Échelon 8</option>
                        <option value="9">Échelon 9</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
          </button>
        </div>
      </div>
      <div id="social-links-vertical-modern" class="content">
        <div class="content-header">
          <h5 class="mb-0">Salary</h5>
          <small>Salary & Rate</small>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="monthly_salary">Monthly Salary</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text">€</span>
                    </div>
                  <input type="text" class="form-control" placeholder="1500" id="monthly_salary" value="2500" name="monthly_salary" aria-label="Amount (to the nearest euro)" />
                    <div class="input-group-append">
                     <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
            <label for="hourly_salary">Hourly Salary</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text">€</span>
                    </div>
                  <input type="text" class="form-control" placeholder="15" id="hourly_salary" value="15" name="hourly_salary" aria-label="Amount (to the nearest euro)" />
                    <div class="input-group-append">
                     <span class="input-group-text">per hour</span>
                    </div>
                </div>
            </div>
            </div>
        <div class="row">
          <div class="form-group col-md-6">
          <label for="overtime_salary">Overtime Salary</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text">€</span>
                    </div>
                  <input type="text" class="form-control" placeholder="15" id="overtime_salary" value="15" name="overtime_salary" aria-label="Amount (to the nearest euro)" />
                    <div class="input-group-append">
                     <span class="input-group-text">per hour</span>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
            <label for="shift">Shift</label>
          <select class="form-control" id="shift">
                <option>Shift 1</option>
                <option>Shift 2</option>
                <option>Shift 3</option>
                <option>Shift 4</option>
                  </select>
          </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="weekly_working_time">Weekly working time</label>
            <div class="input-group input-group-lg">
                <input type="number" class="touchspin-color" value="35" data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info" id="weekly_working_time" name="weekly_working_time"/>
              </div>
            </div>
            <div class="form-group col-md-4">
        <label for="holiday">Daily Breaks time</label>
            <div class="input-group input-group-lg">
                <input type="number" class="touchspin-color" value="4" data-bts-button-down-class="btn btn-warning" data-bts-button-up-class="btn btn-warning" id="daily_breaks_time" name="daily_breaks_time"/>
              </div>
            </div>
            <div class="form-group col-md-4">
            <label for="breaks-time">Holidays per year</label>
            <div class="input-group input-group-lg">
                <input type="number" class="touchspin-color" value="1" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-danger" id="holidays_per_year" name="holidays_per_year"/>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-success btn-submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</section>
            </div>
          </div>
        <!-- </div> -->
    <!-- Tabs with Icon ends -->

  <!-- User Invoice Starts-->
  <div class="row invoice-list-wrapper">
    <div class="col-12">
      <div class="card">
        <div class="card-datatable table-responsive">
          <table class="invoice-list-table table">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th class="text-truncate">Date</th>
                <th><i data-feather="trending-up"></i></th>
                <!--<th>Client</th>
                <th>Total</th>-->
                <th>Time In</th>
                <th>Time Out</th>
                <th><i data-feather="trending-up"></i></th>
                <!--<th>Invoice Status</th>-->
                <th>Status</th>
                <th class="cell-fit">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /User Invoice Ends-->

  <!-- {{ csrf_field() }} -->

  
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/extensions/moment.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/buttons.bootstrap4.min.js'))}}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-user-view.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js')) }}"></script>
@endsection
<script>
$(document).ready(function(){
    $.ajaxSetup({
       headers:{
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
    });
    $('.dropdown-menu a').click(function(){
    $('.btn-outline-primary.dropdown-toggle').text($(this).text());
  });
});
function submitStaffData(){
   $(".accounterrormessage,.personalerrormessage,.contracterrormessage,.salaryerrormessage").text(""); 
   var staffId = $("#staffId").val(); 
   var gender = $("#gender").val(); 
   var userName = $("#username").val(); 
   var firstName = $("#firstname").val(); 
   var lastName = $("#lastname").val(); 
   var email = $("#email").val(); 
   var mobile = $("#phone").val(); 
   var password = "";
   var role = "Admin";
   var staffDetailsArr = new Object();
   staffDetailsArr['staffId'] = staffId;
   staffDetailsArr['gender'] = gender;
   staffDetailsArr['username'] = userName;
   staffDetailsArr['firstname'] = firstName;
   staffDetailsArr['lastname'] = lastName;
   staffDetailsArr['email'] = email;
   staffDetailsArr['mobile'] = mobile;
   staffDetailsArr['password'] = password;
   staffDetailsArr['role'] = role;
   
   var dob = $("#dob").val();
   var placebirth = $("#placebirth").val();
   var nationality = $("#nationality").val();
   var nin = $("#nin").val();
   var address = $("#address").val();
   var postcode = $("#postcode").val();
   var city = $("#city").val();
   staffDetailsArr['dob'] = dob;
   staffDetailsArr['placebirth'] = placebirth;
   staffDetailsArr['nationality'] = nationality;
   staffDetailsArr['nin'] = nin;
   staffDetailsArr['address'] = address;
   staffDetailsArr['postcode'] = postcode;
   staffDetailsArr['city'] = city;
   
   var contractType = $("#contract_type").val();
   var hiringDate = $("#hiring_date").val();
   var locationId = $("#location_id").val();
   var position = $("#position").val();
   var qualification = $("#qualification").val();
   var companyId = 1;
   var currentPlan = "Basic";
   var status = "Pending";
   staffDetailsArr['contract_type'] = contractType;
   staffDetailsArr['hiring_date'] = hiringDate;
   staffDetailsArr['location_id'] = locationId;
   staffDetailsArr['position'] = position;
   staffDetailsArr['qualification'] = qualification;
   staffDetailsArr['companies_id'] = companyId;
   staffDetailsArr['current_plan'] = currentPlan;
   staffDetailsArr['status'] = status;
   
   var monthlySalary = $("#monthly_salary").val();
   var hourlySalary = $("#hourly_salary").val();
   var overtimeSalary = $("#overtime_salary").val();
   var shift = $("#shift").val();
   var weeklyWorkingTime = $("#weekly_working_time").val();
   var dailyBreaksTime = $("#daily_breaks_time").val();
   var holidaysPerYear = $("#holidays_per_year").val();
   staffDetailsArr['monthly_salary'] = monthlySalary;
   staffDetailsArr['hourly_salary'] = hourlySalary;
   staffDetailsArr['overtime_salary'] = overtimeSalary;
   staffDetailsArr['shift'] = shift;
   staffDetailsArr['weekly_working_time'] = weeklyWorkingTime;
   staffDetailsArr['daily_breaks_time'] = dailyBreaksTime;
   staffDetailsArr['holidays_per_year'] = holidaysPerYear;
   $.ajax({
        type:'POST',
        url:'{{ url("staff/add_staff") }}',
        data:{staffDetailsArr},
        success:function(response){
         if(response.status == 1) {
                //alert('Staff details updated successfully.');
                window.location.href = "/staff/"+staffId; 
            } else {
                if(response.error.errormessage) {
                    $(".accounterrormessage,.personalerrormessage,.contracterrormessage,.salaryerrormessage").text(response.error.errormessage);
                }
            }
        }
    });
}
</script>