@extends('layouts/contentLayoutMaster')


@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/animate/animate.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="../../../company/modal-staff.css">
  <link rel="stylesheet" href="{{asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css'))}}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}">
@endsection

@section('content')
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large">
              Edit Staff
              </button>
              <!-- Modal -->
              <div
                class="modal fade text-left"
                id="large"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myModalLabel17"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel17">Edit Staff</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <section class="vertical-wizard">
  <div class="bs-stepper vertical vertical-wizard-example">
    <div class="bs-stepper-header">
      <div class="step" data-target="#account-details-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Account Details</span>
            <span class="bs-stepper-subtitle">Setup Account Details</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#personal-info-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">2</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Personal Info</span>
            <span class="bs-stepper-subtitle">Add Birth day and Address Info</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#wage-step-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Wage</span>
            <span class="bs-stepper-subtitle">Contract & Qualification</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#salary-links-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Salary</span>
            <span class="bs-stepper-subtitle">Salary & Rate</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <div id="account-details-vertical" class="content">
        <div class="content-header">
          <h5 class="mb-0">Account Details</h5>
          <small class="text-muted">Enter The Employee Details.</small>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
        <label class="d-block mb-1">Gender</label>
        <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="gender" name="gender" class="custom-control-input" />
                    <label class="custom-control-label" for="male">Male</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="gender" name="gender" class="custom-control-input" checked />
                    <label class="custom-control-label" for="female">Female</label>
                  </div>
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
        <div class="modal-footer d-flex justify-content-between">
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
      <div id="personal-info-vertical" class="content">
        <div class="content-header">
          <h5 class="mb-0">Personal Info</h5>
          <small>Enter The Personal Info.</small>
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
        <div class="modal-footer d-flex justify-content-between">
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
      <div id="wage-step-vertical" class="content">
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
        <div class="modal-footer d-flex justify-content-between">
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
      <div id="salary-links-vertical" class="content">
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
        <div class="modal-footer d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button type="button" class="btn btn-success" id="type-success">Submit</button>
        </div>
      </div>
</section>
<!-- Modal Sizes end -->
<!-- Vertical Wizard -->

<!-- /Vertical Wizard -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/components/components-modals.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-user-edit.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/components/components-navs.js')) }}"></script>  
@endsection