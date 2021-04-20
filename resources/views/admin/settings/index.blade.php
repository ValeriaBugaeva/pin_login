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
                    <!-- social -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="account-pill-social"
                            data-toggle="pill"
                            href="#account-vertical-social"
                            aria-expanded="false"
                        >
                            <i data-feather="link" class="font-medium-3 mr-1"></i>
                            <span class="font-weight-bold">Stripe</span>
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
                                                <label for="account-username">Username</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="account-username"
                                                    name="username"
                                                    placeholder="Username"
                                                    value="{{ Auth::user()->username }}"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-name">Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="account-name"
                                                    name="fullname"
                                                    placeholder="Name"
                                                    value="{{ Auth::user()->fullname }}"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-e-mail">E-mail</label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="account-e-mail"
                                                    name="email"
                                                    placeholder="Email"
                                                    value="{{ Auth::user()->email }}"
                                                />
                                            </div>
                                        </div>


                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-company">Company</label>
                                                <input type="text"  name="app_name"  class="form-control" id="account-company"
                                                       value="{{setting('app_name')}}" placeholder="{{__('app.app_application_name')}}">
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
                                <form class="validate-form">
                                    <div class="row">
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
                                            <label for="account-note">Note</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="account-note"
                                                    name="note"
                                                    placeholder="Note"
                                                    value="{{ Auth::user()->note }}"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-website">Website</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="website"
                                                    id="account-website"
                                                    placeholder="www.monsite.com"
                                                    value="{{ Auth::user()->website }}"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                            <label for="account-mobile">Phone</label>
                                            <input
                                                type="number"
                                                id="account-phone"
                                                class="form-control prefix-mask"
                                                name="phone"
                                                placeholder="+33612345678"
                                                value="{{ Auth::user()->phone }}"
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

                            <!-- Stripe -->
                            <div
                                class="tab-pane fade"
                                id="account-vertical-social"
                                role="tabpanel"
                                aria-labelledby="account-pill-social"
                                aria-expanded="false"
                            >
                                <!-- form -->



                                <form class="validate-form" action="{{route('settings/stripe-payment/update')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="stripe-key">{{__('app.app_stripe_key')}}</label>
                                                <input id="stripe-key" type="text"  name="stripe_key"  class="form-control" value="{{setting('stripe_key')}}" placeholder="{{__('app.app_stripe_pub_key')}}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="stripe-secret">{{__('app.app_stripe_secret')}}</label>
                                                <input type="text" id="stripe-secret"  name="stripe_secret"  class="form-control" value="{{setting('stripe_secret')}}" placeholder="{{__('app.app_stripe_sec_key')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <div class="custom-control custom-switch custom-switch-success">
                                                    <input type="checkbox" name="stripe_status" class="custom-control-input" id="accountSwitch1" {{ setting('stripe_status')? 'checked':'unchecked' }} />
                                                    <label class="custom-control-label" for="accountSwitch1">
                                                        <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                        <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                    </label>Status
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
                            <!--/ social -->

                            <!-- notifications -->
                            <div
                                class="tab-pane fade"
                                id="account-vertical-notifications"
                                role="tabpanel"
                                aria-labelledby="account-pill-notifications"
                                aria-expanded="false"
                            >
                                <form action="{{route('settings/auth-settings/update')}}" method="POST">
                                    @csrf
                                <div class="row">
                                    <h6 class="section-label mx-1 mb-2">{{__('app.app_two_factor_auth')}}</h6>

                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch custom-switch-success">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch2" name="two_factor_auth"  {{ setting('2fa')? 'checked':'unchecked' }}/>
                                            <label class="custom-control-label" for="accountSwitch2">
                                                {{!setting('2fa')? 'Activate': 'Deactivate'}} {{__('app.app_two_factor_auth_state')}}
                                            </label>
                                        </div>
                                    </div>


                                    <h6 class="section-label mx-1 mb-2">{{__('app.app_captcha')}}</h6>
                                    <div class="col-12 mb-2">

                                        <div class="custom-control custom-switch custom-switch-success">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch3" name="captcha" {{ setting('captcha')? 'checked':'unchecked' }} />
                                            <label class="custom-control-label" for="accountSwitch3">{{!setting('captcha')? 'Activate': 'Deactivate'}}
                                                {{__('app.app_captcha_state')}}</label>
                                        </div>
                                    </div>

                                    <h6 class="section-label mx-1 mb-2">{{__('app.app_email_verification')}}</h6>
                                    <div class="col-12 mb-2">

                                        <div class="custom-control custom-switch custom-switch-success">
                                            <input type="checkbox" class="custom-control-input" name="email_verification" id="accountSwitch4" {{ setting('email_verification')? 'checked':'unchecked' }} />
                                            <label class="custom-control-label" for="accountSwitch4">{{!setting('email_verification')? 'Activate': 'Deactivate'}} {{__('app.app_email_verification_state')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-2 mr-1">{{__('app.app_update_auth')}}</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                    </div>
                                </div>

                                </form>

                            </div>
                            <!--/ notifications -->

                        </div>
                    </div>
                </div>
            </div>
            <!--/ right content section -->
        </div>
    </section>
    <!-- / account setting page -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    {{-- select2 min js --}}
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    {{--  jQuery Validation JS --}}
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
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


{{--    <script src="{{ asset(mix('js/scripts/pages/page-account-settings.js')) }}"></script>--}}

<script src="{{ asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
@endsection
