@extends('staff/layout/contentLayoutMaster')

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
              <!-- header media -->
              <div class="media">
                <a href="javascript:void(0);" class="mr-25">
                  <img
                    src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
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
                  <input type="file" id="account-upload" hidden accept="image/*" />
                  <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                  <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                </div>
                <!--/ upload and reset button -->
              </div>
              <!--/ header media -->

              <!-- form -->
              <form class="validate-form mt-2">
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
                        value=""
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
                        value=""
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
                        value=""
                      />
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="account-mobile">Mobile</label>
                      <input
                        type="number"
                        id="account-phone"
                        class="form-control"
                        name="contact"
                        placeholder="Mobile"
                        value=""
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
              <form class="validate-form">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="account-old-password">Old Password</label>
                      <div class="input-group form-password-toggle input-group-merge">
                        <input
                          type="password"
                          class="form-control"
                          id="account-old-password"
                          name="password"
                          placeholder="Old Password"
                        />
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
                      <label for="account-new-password">New Password</label>
                      <div class="input-group form-password-toggle input-group-merge">
                        <input
                          type="password"
                          id="account-new-password"
                          name="new-password"
                          class="form-control"
                          placeholder="New Password"
                        />
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
                      <label for="account-retype-new-password">Retype New Password</label>
                      <div class="input-group form-password-toggle input-group-merge">
                        <input
                          type="password"
                          class="form-control"
                          id="account-retype-new-password"
                          name="confirm-new-password"
                          placeholder="New Password"
                        />
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
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="birth">Birth date</label>
                      <input
                        id="readonlyInput"
                        readonly="readonly"
                        type="text"
                        class="form-control birthdate-picker"
                        placeholder="DD-MM-YYYY"
                        name="dob"
                        value="25-12-1990"
                      />
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="placebirth">Place Birth</label>
                      <input
                        id="readonlyInput"
                        readonly="readonly"
                        type="text"
                        class="form-control"
                        name="placebirth"
                        placeholder="Country"
                        value="New York"
                      />
                    </div>
                  </div>



                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <label for="Nationality">Nationality</label>
                      <input
                        id="readonlyInput"
                        readonly="readonly"
                        type="text"
                        class="form-control"
                        name="nationality"
                        placeholder="Country"
                        value="United States"
                      />
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <label for="nin">National Insurance Number</label>
                    <input
                      type="text"
                      id="nin"
                      name="nin"
                      class="form-control"
                      placeholder="National Insurance Number"
                      value=""
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
                        value=""
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
                        value=""
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
                        value=""
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
  <script src="{{ asset(mix('js/scripts/pages/page-account-settings.js')) }}"></script>
@endsection
