@php
    $configData = Helper::applClasses();
@endphp
@extends('layouts.fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">
            <!-- Brand logo-->
            <a class="brand-logo" href="javascript:void(0);">
                <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28"><defs><lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%"><stop stop-color="#000000" offset="0%"></stop><stop stop-color="#FFFFFF" offset="100%"></stop></lineargradient><lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%"><stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop><stop stop-color="#FFFFFF" offset="100%"></stop></lineargradient></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Artboard" transform="translate(-400.000000, -178.000000)"><g id="Group" transform="translate(400.000000, 178.000000)"><path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path><path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path><polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon><polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon><polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon></g></g></g></svg>
                <h2 class="brand-text text-primary ml-1">SolutionWeb.io</h2>
            </a>
            <!-- /Brand logo-->
            <!-- Left Text-->
            <div class="container-fluid">
                <div class="row">
                    <div class="d-none d-lg-flex col align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                            @if($configData['theme'] === 'dark')
                                <img class="img-fluid" src="{{asset('images/pages/register-v2-dark.svg')}}" alt="Register V2" />
                            @else
                                <img class="img-fluid" src="{{asset('images/pages/register-v2.svg')}}" alt="Register V2" />
                            @endif
                        </div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Register-->
                    <div class="d-flex col align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            <h2 class="card-title font-weight-bold mb-1">Adventure starts here 🚀</h2>
                            <p class="card-text mb-2">Make your app management easy and fun!</p>

                            <form class="auth-register-form mt-2" action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="form-label" for="company_name">Company name</label>
                                    <input id="company_name" type="text" placeholder="Company Name" class="form-control @error('username') is-invalid @enderror" name="username"
                                           value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col">
                                            <label class="form-label" for="first_name">First name</label>
                                            <input id="first_name" type="text" placeholder="First Name" class="form-control @error('firstname') is-invalid @enderror"
                                                   name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                            @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                            @enderror

                                        </div>

                                        <div class="col">
                                            <label class="form-label" for="last_name">Last name</label>
                                            <input id="last_name" type="text" placeholder="Last Name" class="form-control @error('lastname') is-invalid @enderror"
                                                   name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                            @error('lastname')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col">
                                            <label class="form-label" for="email">Email</label>
                                            <input id="email" type="email" placeholder="{{ __('app.email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label class="form-label" for="phone">Phone number</label>

                                            <input id="phone" type="number" placeholder="{{ __('app.phone') }}" class="form-control @error('phone') is-invalid @enderror"
                                                   name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="form-label" for="register-password">Password</label>

                                    <div class="input-group input-group-merge form-password-toggle">

                                        <input class="form-control @error('password') is-invalid @enderror form-control-merge" id="register-password"
                                               type="password" name="password" placeholder="{{ __('app.password') }}" aria-describedby="register-password" required autocomplete="new-password" />

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <div class="input-group-append">
                                        <span class="input-group-text cursor-pointer">
                                          <i data-feather="eye"></i>
                                        </span>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="form-label" for="password-confirm">Confirm Password</label>


                                    <div class="input-group input-group-merge form-password-toggle">

                                        <input id="password-confirm" type="password"
                                        placeholder="{{ __('app.confirm_password') }}" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

                                        <div class="input-group-append">
                                        <span class="input-group-text cursor-pointer">
                                          <i data-feather="eye"></i>
                                        </span>
                                        </div>

                                    </div>
                                </div>

                                <!-- Password-Confirmation -->
                                @if(setting('captcha'))
                                    <div class="form-group has-feedback">
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block text-danger" role="alert">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                @endif


                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input " type="checkbox" id="agreeTerms" name="terms" value="1">
                                        <label for="agreeTerms" class="custom-control-label">
                                            {{ __('app.i_agree_to_the') }} <a href="#">{{ __('app.terms') }}</a>
                                        </label>
                                    </div>

                                    @if ($errors->has('terms'))
                                        <span class="help-block text-danger" role="alert">
                                            <span>{{ $errors->first('terms') }}</span>
                                        </span>
                                    @endif
                                </div>

                                <button class="btn btn-primary btn-block" tabindex="8" type="submit">Sign up</button>
                            </form>

                            <p class="text-center mt-2">
                                <span>Already have an account?</span>
                                <a href="{{url('login')}}"><span>&nbsp;Sign in instead</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Register-->
        </div>
    </div>
@endsection

@section('vendor-script')
    <script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection

@section('page-script')
    <script src="{{asset('js/scripts/pages/page-auth-register.js')}}"></script>
@endsection
