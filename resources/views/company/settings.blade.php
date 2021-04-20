@extends('layouts/contentLayoutMaster')

@section('title', 'Account Settings')

@section('vendor-style')
<!-- vendor css files -->
<link rel='stylesheet' href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel='stylesheet' href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">

@endsection

@section('content')
<!-- account setting page -->
<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column nav-left">
                <!-- general -->
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        id="account-pill-general"
                        data-toggle="pill"
                        href="#account-vertical-general"
                        aria-expanded="true"
                        >
                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">General</span>
                    </a>
                </li>
                <!-- change password -->
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="account-pill-password"
                        data-toggle="pill"
                        href="#account-vertical-password"
                        aria-expanded="false"
                        >
                        <i data-feather="lock" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">Change Password</span>
                    </a>
                </li>
                <!-- information -->
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="account-pill-info"
                        data-toggle="pill"
                        href="#account-vertical-info"
                        aria-expanded="false"
                        >
                        <i data-feather="info" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">Information</span>
                    </a>
                </li>
                <!-- Shift  -->
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="account-pill-shift"
                        data-toggle="pill"
                        href="#account-vertical-shift"
                        aria-expanded="false"
                        >
                        <i data-feather="activity" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">Shifts</span>
                    </a>
                </li>
                <!-- email -->
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="account-pill-email"
                        data-toggle="pill"
                        href="#account-vertical-email"
                        aria-expanded="false"
                        >
                        <i data-feather="mail" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">Email</span>
                    </a>
                </li>
                <!-- notification -->
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="account-pill-notifications"
                        data-toggle="pill"
                        href="#account-vertical-notifications"
                        aria-expanded="false"
                        >
                        <i data-feather="bell" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">Notifications</span>
                    </a>
                </li>
                <!-- Stop subscription -->
                <br>
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-danger" id="confirm-color">Stop subscription</button>
                </li>
            </ul>
        </div>
        <!--/ left menu section -->

        <!-- right content section -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <!-- general tab -->
                        <div
                            role="tabpanel"
                            class="tab-pane active"
                            id="account-vertical-general"
                            aria-labelledby="account-pill-general"
                            aria-expanded="true"
                            >

                            <form class="form-horizontal validate-form mt-2" method="POST" action="{{route('profile.update',Auth::id())}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <!-- header media -->
                                <!-- header media -->
                                <div class="media">
                                    <a href="javascript:void(0);" class="mr-25">
                                        <img src="{{ Auth::user()->avatar }}"
                                             id="account-upload-img"
                                             class="rounded mr-50"
                                             alt="profile image"
                                             height="80"
                                             width="80"
                                        />
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="media-body mt-75 ml-1">
                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                        <input type="file" name="avatar" id="account-upload" hidden accept="image/*" value="{{route('update-avatar',Auth::user()->id)}}" />
                                        <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                        <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                            <!--/ header media -->

                            <!-- form -->

                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-firstname">First Name</label>
                                            <input
                                                id="readonlyInput"
                                                readonly="readonly"
                                                type="text"
                                                class="form-control"
                                                name="firstname"
                                                placeholder="First Name"
                                                value="{{ Auth::user()->firstname }}"
                                                />

                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-lastname">Last Name</label>
                                            <input
                                                id="readonlyInput"
                                                readonly="readonly"
                                                type="text"
                                                class="form-control"
                                                name="lastname"
                                                placeholder="Last Name"
                                                value="{{ Auth::user()->lastname }}"
                                                />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-e-mail">E-mail</label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                name="email"
                                                placeholder="Email"
                                                value="{{ Auth::user()->email }}"
                                                />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-mobile">Mobile</label>
                                            <input
                                                type="number"
                                                id="account-phone"
                                                class="form-control prefix-mask"
                                                name="phone"
                                                placeholder="Mobile"
                                                value="{{ Auth::user()->phone }}"
                                                />

                                        </div>
                                    </div>
                                    <div class="col-12 mt-75">
                                        <div class="alert alert-warning mb-50" role="alert">
                                            <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4>
                                            <div class="alert-body">
                                                <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                        <!--/ general tab -->

                        <!-- change password -->
                        <div
                            class="tab-pane fade"
                            id="account-vertical-password"
                            role="tabpanel"
                            aria-labelledby="account-pill-password"
                            aria-expanded="false"
                        >
                            <!-- form -->
                            <form class="validate-form form-horizontal" method="POST" action="{{route('update-login',Auth::id())}}">
                                @csrf

                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-old-password">Old Password</label>
                                            <div class="input-group form-password-toggle input-group-merge">

                                                <input
                                                    type="password"
                                                    name="old_password"
                                                    value=""
                                                    id="account-old-password"
                                                    placeholder="{{__('app.leave_blank')}}"
                                                    class="form-control" autocomplete="off">

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                @endif

                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-new-password">{{__('app.password')}}</label>
                                            <div class="input-group form-password-toggle input-group-merge">

                                                <input
                                                    type="password"
                                                    name="password"
                                                    value=""
                                                    id="account-new-password"
                                                    placeholder="{{__('app.leave_blank')}}"
                                                    class="form-control" autocomplete="off">

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                @endif
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-retype-new-password">{{__('app.confirm_password')}}</label>
                                            <div class="input-group form-password-toggle input-group-merge">

                                                <input type="password"
                                                       name="password_confirmation"
                                                       value=""
                                                       id="account-retype-new-password"
                                                       placeholder="{{__('app.leave_blank')}}"
                                                       class="form-control"
                                                       autocomplete="off">

                                                @if ($errors->has('password_confirmation'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif


                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                        <!--/ change password -->

                        <!-- information -->
                        <div
                            class="tab-pane fade"
                            id="account-vertical-info"
                            role="tabpanel"
                            aria-labelledby="account-pill-info"
                            aria-expanded="false"
                            >
                            <!-- form -->


                            <form class="validate-form" method="POST" action="{{route('user-information',Auth::id())}}"  name="informationForm">
                                @csrf

                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="company_name">Company</label>

                                            <input id="company_name"
                                                   type="text"
                                                   placeholder="Company Name"
                                                   class="form-control @error('username') is-invalid @enderror"
                                                   name="username"
                                                   value="{{ Auth::user()->username }}"
                                                   required autocomplete="username"
                                                   autofocus>

                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror

                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="immatricule">Immatricule</label>
                                            <input
                                                id="immatricule"
                                                type="text"
                                                class="form-control"
                                                name="immatricule"
                                                placeholder="Immatricule"
                                                value="{{ Auth::user()->immatricule }}"
                                                />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input
                                                id="address"
                                                type="text"
                                                class="form-control"
                                                name="address"
                                                placeholder="Address"
                                                value="{{ Auth::user()->address }}"
                                                />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="postcode">Postcode</label>
                                            <input
                                                id="postcode"
                                                type="text"
                                                class="form-control"
                                                name="postcode"
                                                placeholder="75000"
                                                value="{{ Auth::user()->postcode }}"
                                                />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input
                                                id="city"
                                                type="text"
                                                class="form-control"
                                                name="city"
                                                placeholder="City"
                                                value="{{ Auth::user()->city }}"
                                                />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-coutry">Country</label>
                                            <select class="select2 form-control form-control-lg" name="country">
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
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-phone">Phone</label>
                                            <input
                                                type="number"
                                                class="form-control prefix-mask"
                                                id="account-phone"
                                                placeholder="Phone number"
                                                value="{{ Auth::user()->phone }}"
                                                name="phone"
                                                />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-1 mr-1">Save changes</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                        <!--/ information -->



                        <!-- Shifts -->
                        <div
                            class="tab-pane fade"
                            id="account-vertical-shift"
                            role="tabpanel"
                            aria-labelledby="account-pill-shift"
                            aria-expanded="false"
                            >
                            <!-- form -->
                            <form class="validate-form">
                                <div class="row">
                                    <!-- Shifts header -->
                                    <div class="col-12">
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="activity" class="font-medium-3"></i>
                                            <h4 class="mb-0 ml-75">Shifts</h4>
                                        </div>
                                    </div>
                                </div>
                            </form>        <!-- Invoice repeater -->

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <form action="#" class="invoice-repeater">
                                        <div data-repeater-list="invoice">
                                            <div data-repeater-item id="shiftdetailsbox">
                                                @foreach($shiftdata as $shfdata)
                                                <div class="row d-flex align-items-end" id="shiftrow{{$shfdata->id}}">
                                                    <div class="col-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="shiftname">Shift Name</label>
                                                            <input type="text" class="form-control" id="shiftname" aria-describedby="shiftname" value="{{$shfdata->name}}" placeholder="Shift Name" name="shiftname"/>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="{{$shfdata->id}}" name="shift_id">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="fp-time-start">Time start</label>
                                                            <input type="text" id="time_start" name="time_start" class="form-control flatpickr-time text-left" value="{{$shfdata->start_time}}" placeholder="HH:MM" />
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="fp-time-end">Time end</label>
                                                            <input type="text" id="time_end" name="time_end" class="form-control flatpickr-time text-left" value="{{$shfdata->end_time}}" placeholder="HH:MM" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="form-group">
                                                        <button class="btn btn-outline-danger text-nowrap px-1" onclick="removeshift(this)" data-id="{{$shfdata->id}}" data-repeater-delete type="button">
                                                                <i data-feather='trash-2'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr id="shifthr{{$shfdata->id}}" />
                                                @endforeach
                                                <div class="row d-flex align-items-end" id="shiftrow0">
                                                    <div class="col-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="shiftname">Shift Name</label>
                                                            <input type="text" class="form-control" id="shiftname" aria-describedby="shiftname" placeholder="Shift Name" name="shiftname"/>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="0" name="shift_id">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="fp-time-start">Time start</label>
                                                            <input type="text" id="time_start" name="time_start" class="form-control flatpickr-time text-left" placeholder="HH:MM" />
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="fp-time-end">Time end</label>
                                                            <input type="text" id="time_end" name="time_end" class="form-control flatpickr-time text-left" placeholder="HH:MM" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-outline-danger text-nowrap px-1" onclick="removeshift(this)" data-id="0" type="button">
                                                                <i data-feather='trash-2'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr id="shifthr0" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn btn-icon btn-dark" type="button" id="addnewshiftbtn">
                                                    <i data-feather="plus" class="mr-25"></i>
                                                    <span>Add New</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- /Invoice repeater -->
                            <div class="col-12">
                                <!-- submit and cancel button -->
                                <!--<button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>-->
                                <a href="javascript:void(0);" onclick="submitShiftData();" class="btn btn-primary mr-1 mt-1">Save changes</a>
                                <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                            </div>

                            <!--/ form -->
                        </div>
                        <!--/ payment -->

                        <div
                            class="tab-pane fade"
                            id="account-vertical-email"
                            role="tabpanel"
                            aria-labelledby="account-pill-email"
                            aria-expanded="false"
                            >
                            <!-- form -->
                            <form class="validate-form">
                                <div class="row">
                                    <!-- outgoing mail header -->
                                    <div class="col-12">
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="upload" class="font-medium-3"></i>
                                            <h4 class="mb-0 ml-75">Outgoing mail</h4>
                                        </div>
                                    </div>
                                    <!-- hostname input -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="email_hostname">Hostname</label>
                                            <input
                                                type="text"
                                                id="email_hostname"
                                                class="form-control"
                                                placeholder="Hostname"
                                                value=""
                                                />
                                        </div>
                                    </div>
                                    <!-- username input -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="email_username">Username</label>
                                            <input type="text" id="email_username" class="form-control" placeholder="Username" />
                                        </div>
                                    </div>
                                    <!-- port input -->
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="smtp_port">Port</label>
                                            <select class="form-control" id="smtp_port">
                                                <option>587</option>
                                                <option>25</option>
                                                <option>465</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- encryption input -->
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="smtp_encryption">Encryption</label>
                                            <select class="form-control" id="smtp_encryption">
                                                <option>STARTTLS</option>
                                                <option>SSL/TLS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- password input -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="email_password">Password</label>
                                            <input type="text" id="email_password" class="form-control" placeholder="*******" />
                                        </div>
                                    </div>
                                    <!-- instagram link input -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="from_email">From email</label>
                                            <input type="text" id="from_email" class="form-control" placeholder="From email" />
                                        </div>
                                    </div>
                                    <!-- Quora link input -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="from_name">From name</label>
                                            <input type="text" id="from_name" class="form-control" placeholder="From name" />
                                        </div>
                                    </div>

                                    <!-- divider -->
                                    <div class="col-12">
                                        <hr class="my-2" />
                                    </div>

                                    <div class="col-12 mt-1">
                                        <!-- profile connection header -->
                                        <div class="d-flex align-items-center mb-3">
                                            <i data-feather="download" class="font-medium-3"></i>
                                            <h4 class="mb-0 ml-75">Incoming mail</h4>
                                        </div>

                                        <div class="row">
                                            <!-- twitter link input -->
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label class="d-block mb-1">Type</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="imap" name="imap" class="custom-control-input" required />
                                                        <label class="custom-control-label" for="imap">IMAP</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="pop" name="pop" class="custom-control-input" required />
                                                        <label class="custom-control-label" for="pop">POP</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- port input -->
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="imap_port">Port</label>
                                                    <select class="form-control" id="imap_port">
                                                        <option>143</option>
                                                        <option>993</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- encryption input -->
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="imap_encryption">Encryption</label>
                                                    <select class="form-control" id="imap_encryption">
                                                        <option>STARTTLS</option>
                                                        <option>SSL/TLS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- submit and cancel button -->
                                            <button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>

                        <!-- notifications -->
                        <div
                            class="tab-pane fade"
                            id="account-vertical-notifications"
                            role="tabpanel"
                            aria-labelledby="account-pill-notifications"
                            aria-expanded="false"
                            >
                            <div class="row">
                                <h6 class="section-label mx-1 mb-2">Activity</h6>
                                <div class="col-12 mb-2">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch1" />
                                        <label class="custom-control-label" for="accountSwitch1">
                                            Email me when someone comments onmy article
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch2" />
                                        <label class="custom-control-label" for="accountSwitch2">
                                            Email me when someone answers on my form
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="accountSwitch3" />
                                        <label class="custom-control-label" for="accountSwitch3">Email me hen someone follows me</label>
                                    </div>
                                </div>
                                <h6 class="section-label mx-1 mt-2">Application</h6>
                                <div class="col-12 mt-1 mb-2">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch4" />
                                        <label class="custom-control-label" for="accountSwitch4">News and announcements</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch6" />
                                        <label class="custom-control-label" for="accountSwitch6">Weekly product updates</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-75">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="accountSwitch5" />
                                        <label class="custom-control-label" for="accountSwitch5">Weekly blog digest</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                    <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <!--/ notifications -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ right content section -->
    </div>



    <script>
        document.forms['informationForm'].elements['country'].value="{{Auth::user()->country}}";
    </script>
</section>
<!-- / account setting page -->
@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
{{-- select2 min js --}}
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
{{--  jQuery Validation JS --}}
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/repeater/jquery.repeater.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script>
    $(document).ready(function (){

        var accountUploadImg = $('#account-upload-img'),
            accountUploadBtn = $('#account-upload');
        var shiftIds = new Array();
        // Update user photo on click of button
        if (accountUploadBtn) {
            accountUploadBtn.on('change', function (e) {
                var reader = new FileReader(),
                    files = e.target.files;
                reader.onload = function () {
                    if (accountUploadImg) {
                        accountUploadImg.attr('src', reader.result);
                    }
                };
                reader.readAsDataURL(files[0]);
            });
        }
    })
</script>
{{--<script src="{{ asset(mix('js/scripts/pages/page-account-settings.js')) }}"></script>--}}
<script src="{{ asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>
@endsection
