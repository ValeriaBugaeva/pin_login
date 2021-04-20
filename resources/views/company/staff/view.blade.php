@extends('layouts.contentLayoutMaster')

@section('title', 'User View')

@section('vendor-style')
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">


<!-- Custom  -->
<link rel="stylesheet" type="text/css" href="{{ asset(mix('css/base/plugins/extensions/ext-component-tree.css')) }}">
<link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/vendors/css/extensions/jstree.min.css')}}">


@endsection
<style>
  #errorMessage {
    color: red;
  }

</style>
@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{ asset(mix('/css/base/pages/document.css')) }}">

<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">


<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="../../../company/modal-staff.css">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">

<link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">



<link rel="stylesheet" type="text/css" href="{{ asset(mix('css/base/plugins/extensions/ext-component-tree.css')) }}">




@endsection

@section('content')
<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Warning</h4>
  <div class="alert-body">
    Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
    cupcake cupcake.
  </div>
</div>
{{-- <section class="app-user-view"> --}}
  <!-- User Card & Plan Starts -->

  <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-profile">
        <img src="{{asset('images/banner/banner-12.jpg')}}" class="img-fluid card-img-top" alt="Profile Cover Photo" />

        <div class="card-body">
          <div class="profile-image-wrapper">
            <div class="profile-image">
              <div class="avatar">

                @if(isset( $staffdetails->users->avatar ))
                <img src="{{ $staffdetails->users->avatar }}" alt="Profile Picture" />
                @else
                <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" alt="Profile Picture" />
                @endif

              </div>
            </div>
          </div>

          <h3>{{ $staffdetails->name }}</h3>

          @if(isset($staffdetails->position))
          <h6 class="text-muted">{{ $staffdetails->position }}</h6>
          @endif

          <div class="badge badge-light-primary"> <?php echo date_format($staffdetails->created_at, 'd M, y')?></div>

          <hr class="mb-1" />

          <div class="apply-job-package bg-light-primary rounded user-card">

            <span>
              <sup class="text-body"><small>$</small></sup>
              <h2 class="d-inline mr-25">9,800</h2>
              <sub class="text-body"><small>/ month</small></sub>
            </span>

            <div class="badge badge-pill badge-light-primary user-badge ml-25">Full Time</div>
          </div>

          <button type="button" class="btn btn-primary btn-block mt-1">Apply For This Job</button>

        </div>
      </div>
    </div>
    <!--/ Profile Card -->

    <!-- Transaction Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Transactions</h4>
          <div class="dropdown chart-dropdown">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="transaction-item">
            <div class="media">
              <div class="avatar bg-light-primary rounded">
                <div class="avatar-content">
                  <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Wallet</h6>
                <small>Starbucks</small>
              </div>
            </div>
            <div class="font-weight-bolder text-danger">- $74</div>
          </div>
          <div class="transaction-item">
            <div class="media">
              <div class="avatar bg-light-success rounded">
                <div class="avatar-content">
                  <i data-feather="check" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Bank Transfer</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="font-weight-bolder text-success">+ $480</div>
          </div>
          <div class="transaction-item">
            <div class="media">
              <div class="avatar bg-light-danger rounded">
                <div class="avatar-content">
                  <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Paypal</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="font-weight-bolder text-success">+ $590</div>
          </div>
          <div class="transaction-item">
            <div class="media">
              <div class="avatar bg-light-warning rounded">
                <div class="avatar-content">
                  <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Mastercard</h6>
                <small>Ordered Food</small>
              </div>
            </div>
            <div class="font-weight-bolder text-danger">- $23</div>
          </div>
          <div class="transaction-item">
            <div class="media">
              <div class="avatar bg-light-info rounded">
                <div class="avatar-content">
                  <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Transfer</h6>
                <small>Refund</small>
              </div>
            </div>
            <div class="font-weight-bolder text-success">+ $98</div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Transaction Card -->

    <!-- Goal Overview Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">Goal Overview</h4>
          <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
          <div class="card-body p-0">
            <div id="goal-overview-radial-bar-chart" class="my-2"></div>
            <div class="row border-top text-center mx-0">
              <div class="col-6 border-right py-1">
                <p class="card-text text-muted mb-0">Completed</p>
                <h3 class="font-weight-bolder mb-0">786,617</h3>
              </div>
              <div class="col-6 py-1">
                <p class="card-text text-muted mb-0">In Progress</p>
                <h3 class="font-weight-bolder mb-0">13,561</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Goal Overview Card -->
    </div>
  </div>

  <form method="POST" action="{{ url('/staff/add_staff') }}" name="editStaffForm">
    {{ csrf_field() }}

    <!-- Bio staff -->
    <div class="row">
      <div class="col-12">
        <!-- <div class="card"> -->
        <!-- Basic Horizontal form layout section start -->
        <section class="modern-vertical-wizard">
          <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">



            {{--  {{ csrf_field() }}--}}

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



              <div class="step" data-target="#permission-step-vertical-modern">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-box">
                    <i data-feather="lock" class="font-medium-3"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Permission</span>
                    <span class="bs-stepper-subtitle">Access</span>
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
                    <select class="form-control" id="gender" name="gender">
                      <option value="" selected="selected">Selected Gender</option>
                      <option value="FEMALE" for="female">Female</option>
                      <option value="MALE" for="male">Male</option>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Username"
                      value="{{ $staffdetails->users->username }}" name="username" id="username" />
                    <input type="hidden" id="staff_id" value="{{ $staffdetails->id }}" name="staffId" />
                    <input type="hidden" id="role_id" value="{{ $staffdetails->users->role_id }}" name="role_id" />
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" value="{{ $staffdetails->users->firstname }}" required
                      name="firstname" class="form-control" placeholder="First Name" />
                  </div>

                  <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" value="{{ $staffdetails->users->lastname }}" required
                      name="lastname" class="form-control" placeholder="Last Name" />
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" placeholder="Email"
                      value="{{ $staffdetails->users->email }}" name="email" id="email" />
                  </div>

                  <div class="form-group col-md-6">
                    <label for="phone">Mobile</label>
                    <input id="phone" type="text" class="form-control" value="{{ $staffdetails->users->phone }}"
                      name="phone" />
                  </div>

                </div>


                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-outline-secondary btn-prev" disabled>
                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>

                  <button type="button" class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                    <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                  </button>
                </div>
              </div> <!-- ./Account Details option --->


              <div id="personal-info-vertical-modern" class="content">
                <div class="content-header">
                  <h5 class="mb-0">Personal Info</h5>
                  <small>Enter Your Personal Info.</small>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="dob">Birth date</label>
                    <input id="dob" type="text" class="form-control flatpickr-basic" name="dob"
                      value="{{ $staffdetails->users->birthday }}" placeholder="DD-MM-YYYY" />

                  </div>
                  <div class="form-group col-md-6">
                    <label for="placebirth">Place Birth</label>
                    <input id="placebirth" type="text" class="form-control" value="{{ $staffdetails->placebirth }}"
                      name="placebirth" placeholder="Country" />
                  </div>
                </div>



                <div class="row">
                  <div class="form-group col-md-6 select-nationality">
                    <label for="nationality">Nationality</label>
                    <select class="select2 form-control form-control-lg" id="nationality" name="nationality">
                      <option value="  " selected>Select a country</option>
                      <option value="--">Not Specified</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BA">Bosnia and Herzegowina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="BN">Brunei Darussalam</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CD">Congo, the Democratic Republic of the</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Cote d'Ivoire</option>
                      <option value="HR">Croatia (Hrvatska)</option>
                      <option value="CU">Cuba</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="TP">East Timor</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands (Malvinas)</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="FX">France, Metropolitan</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard and Mc Donald Islands</option>
                      <option value="VA">Holy See (Vatican City State)</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran (Islamic Republic of)</option>
                      <option value="IQ">Iraq</option>
                      <option value="IE">Ireland</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KP">Korea, Democratic People's Republic of</option>
                      <option value="KR">Korea, Republic of</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Lao People's Democratic Republic</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libyan Arab Jamahiriya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macau</option>
                      <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia, Federated States of</option>
                      <option value="MD">Moldova, Republic of</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PW">Palau</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar</option>
                      <option value="RE">Reunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russian Federation</option>
                      <option value="RW">Rwanda</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint LUCIA</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia (Slovak Republic)</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SH">St. Helena</option>
                      <option value="PM">St. Pierre and Miquelon</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syrian Arab Republic</option>
                      <option value="TW">Taiwan, Province of China</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania, United Republic of</option>
                      <option value="TH">Thailand</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Viet Nam</option>
                      <option value="VG">Virgin Islands (British)</option>
                      <option value="VI">Virgin Islands (U.S.)</option>
                      <option value="WF">Wallis and Futuna Islands</option>
                      <option value="EH">Western Sahara</option>
                      <option value="YE">Yemen</option>
                      <option value="YU">Yugoslavia</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="nin">National Insurance Number</label>
                    <input type="text" id="nin" value="{{ $staffdetails->nin }}" name="nin" class="form-control"
                      placeholder="National Insurance Number" />
                  </div>

                </div>



                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="address">Address</label>
                    <input id="address" type="text" class="form-control" value="{{ $staffdetails->address }}"
                      name="address" placeholder="Address" />
                  </div>
                </div>



                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="postcode">Postcode</label>
                    <input id="postcode" type="text" class="form-control" value="{{ $staffdetails->postcode }}"
                      name="postcode" placeholder="75000" />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input id="city" type="text" class="form-control" name="city" value="{{ $staffdetails->city }}"
                      placeholder="City" />
                  </div>
                </div>



                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary btn-prev">
                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button type="button" class="btn btn-primary btn-next">
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
                      @foreach($contracts as $contractVal)
                      <option value="{{$contractVal}}">{{$contractVal}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="hiringdate">Hiring Date</label>
                    <input id="hiring_date" type="text" class="form-control flatpickr-basic" name="hiring_date"
                      value="{{ $staffdetails->hiring_date }}" placeholder="DD-MM-YYYY" />
                  </div>
                </div>



                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="team">Location</label>
                    <select class="form-control" name="location_id" id="location_id">
                      <option value="" selected="selected">Select location</option>
                      @foreach($locations as $locaionVal)
                      <option value="{{$locaionVal->id}}">{{$locaionVal->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="position">Position</label>
                    <div class="new-role">
                      <select class="roleto form-control" id="position" name="position">
                        <option></option>
                        @foreach($roles as $role)
                        <option value="{{ $role->name }}">{{ ucwords($role->name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="qualification_action">Qualification</label>
                    <div class="input-group">
                      <div class="input-group-prepend qualification">
                        <select class="form-control btn btn-outline-primary " id="qualification_action"
                          name="qualification_action">
                          <option value="" selected="selected">Action</option>
                          <option value="1">Niveau 1</option>
                          <option value="2">Niveau 2</option>
                          <option value="3">Niveau 3</option>
                          <option value="4">Niveau 4</option>
                          <option value="5">Niveau 5</option>
                          <option value="6">Niveau 6</option>
                          <option value="7">Niveau 7</option>
                          <option value="8">Niveau 8</option>
                          <option value="9">Niveau 9</option>
                        </select>
                      </div>

                      <select class="form-control" id="qualification" name="qualification">
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
                  <button type="button" class="btn btn-primary btn-prev">
                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button type="button" class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                    <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                  </button>
                </div>
              </div>

              <div id="permission-step-vertical-modern" class="content">
                <div class="content-header">
                  <h5 class="mb-0">Permission</h5>
                  <small>Access</small>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <table class="table table-striped table-borderless">
                      <thead class="thead-light">
                        <tr>
                          <th>Module</th>
                          <th>Read</th>
                          <th>Write</th>
                          <th>Create</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Admin</td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="admin-read" checked />
                              <label class="custom-control-label" for="admin-read"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="admin-write" />
                              <label class="custom-control-label" for="admin-write"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="admin-create" />
                              <label class="custom-control-label" for="admin-create"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="admin-delete" />
                              <label class="custom-control-label" for="admin-delete"></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Staff</td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="staff-read" />
                              <label class="custom-control-label" for="staff-read"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="staff-write" checked />
                              <label class="custom-control-label" for="staff-write"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="staff-create" />
                              <label class="custom-control-label" for="staff-create"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="staff-delete" />
                              <label class="custom-control-label" for="staff-delete"></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Author</td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="author-read" checked />
                              <label class="custom-control-label" for="author-read"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="author-write" />
                              <label class="custom-control-label" for="author-write"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="author-create" checked />
                              <label class="custom-control-label" for="author-create"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="author-delete" />
                              <label class="custom-control-label" for="author-delete"></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Contributor</td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="contributor-read" />
                              <label class="custom-control-label" for="contributor-read"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="contributor-write" />
                              <label class="custom-control-label" for="contributor-write"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="contributor-create" />
                              <label class="custom-control-label" for="contributor-create"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="contributor-delete" />
                              <label class="custom-control-label" for="contributor-delete"></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>User</td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-read" />
                              <label class="custom-control-label" for="user-read"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-create" />
                              <label class="custom-control-label" for="user-create"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-write" />
                              <label class="custom-control-label" for="user-write"></label>
                            </div>
                          </td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-delete" checked />
                              <label class="custom-control-label" for="user-delete"></label>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary btn-prev">
                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button type="button" class="btn btn-primary btn-next">
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
                      <input type="text" class="form-control" placeholder="Salary" id="monthly_salary"
                        value="{{ $staffdetails->monthly_salary }}" name="monthly_salary"
                        aria-label="Amount (to the nearest euro)" />
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
                      <input type="text" class="form-control" placeholder="15" id="hourly_salary"
                        value="{{ $staffdetails->hourly_salary }}" name="hourly_salary"
                        aria-label="Amount (to the nearest euro)" />
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
                      <input type="text" class="form-control" placeholder="15" id="overtime_salary"
                        value="{{ $staffdetails->overtime_salary }}" name="overtime_salary"
                        aria-label="Amount (to the nearest euro)" />
                      <div class="input-group-append">
                        <span class="input-group-text">per hour</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="shift">Shift</label>
                    <select class="form-control" name="shift" id="shift">
                      <option value="">Select shift</option>
                      @foreach($shifts as $shiftVal)
                      <option value="{{$shiftVal->id}}">{{$shiftVal->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="weekly_working_time">Weekly working time</label>

                    <div class="input-group input-group-lg">
                      <input type="number" class="touchspin-color" value="{{ $staffdetails->weekly_working_time }}"
                        data-bts-button-down-class="btn btn-info" data-bts-button-up-class="btn btn-info"
                        id="weekly_working_time" name="weekly_working_time" />
                    </div>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="holiday">Daily Breaks time</label>
                    <div class="input-group input-group-lg">
                      <input type="number" class="touchspin-color" value="{{ $staffdetails->daily_breaks_time }}"
                        data-bts-button-down-class="btn btn-warning" data-bts-button-up-class="btn btn-warning"
                        id="daily_breaks_time" name="daily_breaks_time" />
                    </div>
                  </div>


                  <div class="form-group col-md-4">
                    <label for="breaks-time">Holidays per year</label>
                    <div class="input-group input-group-lg">
                      <input type="number" class="touchspin-color" value="{{ $staffdetails->holidays_per_year }}"
                        data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-danger"
                        id="holidays_per_year" name="holidays_per_year" />


                    </div>
                  </div>

                </div>
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-primary btn-prev">
                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

  </form>

  {{-- start new section --}}
  <div class="file-manager-application">
  <div class="content-area-wrapper">
    <div class="sidebar-left">
      <div class="sidebar">
        
                </div>
    </div>
    <div class="content-right">
    <div class="content-wrapper">
      <div class="content-body">
  <div class="file-manager-main-content">
    <!-- search area start -->
    <div class="file-manager-content-header d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
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
</div>
</div>
</div>
</div>
</div>

{{-- 
</section> --}}
  <!-- </div> -->
  <!-- Tabs with Icon ends -->

  <script>
    document.forms['editStaffForm'].elements['gender'].value="{{$staffdetails->gender}}";
        document.forms['editStaffForm'].elements['nationality'].value="{{$staffdetails->nationality}}";
        document.forms['editStaffForm'].elements['position'].value="{{$staffdetails->position}}";
        document.forms['editStaffForm'].elements['qualification'].value="{{$staffdetails->qualification}}";
        document.forms['editStaffForm'].elements['qualification_action'].value="{{$staffdetails->qualification_action}}";
        document.forms['editStaffForm'].elements['shift'].value="{{$staffdetails->shift}}";
  </script>


  @endsection

  @section('vendor-script')
  <script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>


  <script src="{{asset('vendors/js/extensions/jstree.min.js')}}"></script>
  @endsection

  @section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-user-view.js')) }}"></script>

  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/cards/card-advance.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>

<script src="{{asset('js/scripts/pages/app-file-manager.js')}}"></script>



  <script>
    var staff_role_add_url = "{{route('staff-role-add')}}";
            var csrf_token = "{{ csrf_token() }}";

  </script>

  <script src="../../../company/new-role.js"></script>
  @endsection