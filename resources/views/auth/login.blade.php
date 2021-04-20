@php
$configData = Helper::applClasses();
@endphp
@extends('layouts/fullLayoutMaster')

@section('title', 'Login Page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">

    <link rel="stylesheet" href="{{ asset('css/base/pages/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-login.css') }}">

    <script src="{{ asset('js/core/collectedforms.js') }}"></script>
    <script src="{{ asset('js/core/conversation-embed.js') }}"></script>
    <script src="{{ asset('js/core/analytics.js') }}"></script>


    <style data-jss="" data-meta="MuiDialog">
        @media print {
            .MuiDialog-root {
                position: absolute !important;
            }
        }

        .MuiDialog-scrollPaper {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .MuiDialog-scrollBody {
            overflow-x: hidden;
            overflow-y: auto;
            text-align: center;
        }

        .MuiDialog-scrollBody:after {
            width: 0;
            height: 100%;
            content: "";
            display: inline-block;
            vertical-align: middle;
        }

        .MuiDialog-container {
            height: 100%;
            outline: 0;
        }

        @media print {
            .MuiDialog-container {
                height: auto;
            }
        }

        .MuiDialog-paper {
            margin: 32px;
            position: relative;
            overflow-y: auto;
        }

        @media print {
            .MuiDialog-paper {
                box-shadow: none;
                overflow-y: visible;
            }
        }

        .MuiDialog-paperScrollPaper {
            display: flex;
            max-height: calc(100% - 64px);
            flex-direction: column;
        }

        .MuiDialog-paperScrollBody {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        .MuiDialog-paperWidthFalse {
            max-width: calc(100% - 64px);
        }

        .MuiDialog-paperWidthXs {
            max-width: 444px;
        }

        @media (max-width:507.95px) {
            .MuiDialog-paperWidthXs.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthSm {
            max-width: 600px;
        }

        @media (max-width:663.95px) {
            .MuiDialog-paperWidthSm.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthMd {
            max-width: 960px;
        }

        @media (max-width:1023.95px) {
            .MuiDialog-paperWidthMd.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthLg {
            max-width: 1280px;
        }

        @media (max-width:1343.95px) {
            .MuiDialog-paperWidthLg.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthXl {
            max-width: 1920px;
        }

        @media (max-width:1983.95px) {
            .MuiDialog-paperWidthXl.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperFullWidth {
            width: calc(100% - 64px);
        }

        .MuiDialog-paperFullScreen {
            width: 100%;
            height: 100%;
            margin: 0;
            max-width: 100%;
            max-height: none;
            border-radius: 0;
        }

        .MuiDialog-paperFullScreen.MuiDialog-paperScrollBody {
            margin: 0;
            max-width: 100%;
        }

    </style>
    <style data-jss="" data-meta="MuiInputBase">
        @-webkit-keyframes mui-auto-fill {}

        @-webkit-keyframes mui-auto-fill-cancel {}

        .MuiInputBase-root {
            color: #372e42;
            cursor: text;
            display: inline-flex;
            position: relative;
            font-size: 1rem;
            box-sizing: border-box;
            align-items: center;
            font-family: 'Roboto', sans-serif !important;
            font-weight: 400;
            line-height: 1.1876em;
            letter-spacing: 0.00938em;
        }

        .MuiInputBase-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
            cursor: default;
        }

        .MuiInputBase-multiline {
            padding: 6px 0 7px;
        }

        .MuiInputBase-multiline.MuiInputBase-marginDense {
            padding-top: 3px;
        }

        .MuiInputBase-fullWidth {
            width: 100%;
        }

        .MuiInputBase-input {
            font: inherit;
            color: currentColor;
            width: 100%;
            border: 0;
            height: 1.1876em;
            margin: 0;
            display: block;
            padding: 6px 0 7px;
            min-width: 0;
            background: none;
            box-sizing: content-box;
            animation-name: mui-auto-fill-cancel;
            letter-spacing: inherit;
            animation-duration: 10ms;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiInputBase-input::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input::-moz-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input:focus {
            outline: 0;
        }

        .MuiInputBase-input:invalid {
            box-shadow: none;
        }

        .MuiInputBase-input::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        .MuiInputBase-input.Mui-disabled {
            opacity: 1;
        }

        .MuiInputBase-input:-webkit-autofill {
            animation-name: mui-auto-fill;
            animation-duration: 5000s;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
            opacity: 0.42;
        }

        .MuiInputBase-inputMarginDense {
            padding-top: 3px;
        }

        .MuiInputBase-inputMultiline {
            height: auto;
            resize: none;
            padding: 0;
        }

        .MuiInputBase-inputTypeSearch {
            -moz-appearance: textfield;
            -webkit-appearance: textfield;
        }

    </style>
    <style data-jss="" data-meta="MuiFilledInput">
        .MuiFilledInput-root {
            position: relative;
            transition: background-color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            background-color: rgba(0, 0, 0, 0.09);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .MuiFilledInput-root:hover {
            background-color: rgba(0, 0, 0, 0.13);
        }

        .MuiFilledInput-root.Mui-focused {
            background-color: rgba(0, 0, 0, 0.09);
        }

        .MuiFilledInput-root.Mui-disabled {
            background-color: rgba(0, 0, 0, 0.12);
        }

        @media (hover: none) {
            .MuiFilledInput-root:hover {
                background-color: rgba(0, 0, 0, 0.09);
            }
        }

        .MuiFilledInput-colorSecondary.MuiFilledInput-underline:after {
            border-bottom-color: #7f56ac;
        }

        .MuiFilledInput-underline:after {
            left: 0;
            right: 0;
            bottom: 0;
            content: "";
            position: absolute;
            transform: scaleX(0);
            transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            border-bottom: 2px solid #7f56ac;
            pointer-events: none;
        }

        .MuiFilledInput-underline.Mui-focused:after {
            transform: scaleX(1);
        }

        .MuiFilledInput-underline.Mui-error:after {
            transform: scaleX(1);
            border-bottom-color: #d0021b;
        }

        .MuiFilledInput-underline:before {
            left: 0;
            right: 0;
            bottom: 0;
            content: "\00a0";
            position: absolute;
            transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            pointer-events: none;
        }

        .MuiFilledInput-underline:hover:before {
            border-bottom: 1px solid #372e42;
        }

        .MuiFilledInput-underline.Mui-disabled:before {
            border-bottom-style: dotted;
        }

        .MuiFilledInput-adornedStart {
            padding-left: 12px;
        }

        .MuiFilledInput-adornedEnd {
            padding-right: 12px;
        }

        .MuiFilledInput-multiline {
            padding: 27px 12px 10px;
        }

        .MuiFilledInput-multiline.MuiFilledInput-marginDense {
            padding-top: 23px;
            padding-bottom: 6px;
        }

        .MuiFilledInput-input {
            padding: 27px 12px 10px;
        }

        .MuiFilledInput-input:-webkit-autofill {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .MuiFilledInput-inputMarginDense {
            padding-top: 23px;
            padding-bottom: 6px;
        }

        .MuiFilledInput-inputHiddenLabel {
            padding-top: 18px;
            padding-bottom: 19px;
        }

        .MuiFilledInput-inputHiddenLabel.MuiFilledInput-inputMarginDense {
            padding-top: 10px;
            padding-bottom: 11px;
        }

        .MuiFilledInput-inputMultiline {
            padding: 0;
        }

        .MuiFilledInput-inputAdornedStart {
            padding-left: 0;
        }

        .MuiFilledInput-inputAdornedEnd {
            padding-right: 0;
        }

    </style>
    <style data-jss="" data-meta="MuiFormLabel">
        .MuiFormLabel-root {
            color: #878da9;
            padding: 0;
            font-size: 1rem;
            font-family: 'Roboto', sans-serif !important;
            font-weight: 400;
            line-height: 1;
            letter-spacing: 0.00938em;
        }

        .MuiFormLabel-root.Mui-focused {
            color: #7f56ac;
        }

        .MuiFormLabel-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
        }

        .MuiFormLabel-root.Mui-error {
            color: #d0021b;
        }

        .MuiFormLabel-colorSecondary.Mui-focused {
            color: #7f56ac;
        }

        .MuiFormLabel-asterisk.Mui-error {
            color: #d0021b;
        }

    </style>
    <style data-jss="" data-meta="MuiInputLabel">
        .MuiInputLabel-root {
            display: block;
            transform-origin: top left;
        }

        .MuiInputLabel-root.Mui-focused {
            color: #878da9;
        }

        .MuiInputLabel-formControl {
            top: 0;
            left: 0;
            position: absolute;
            transform: translate(0, 24px) scale(1);
        }

        .MuiInputLabel-marginDense {
            transform: translate(0, 21px) scale(1);
        }

        .MuiInputLabel-shrink {
            transform: translate(0, 1.5px) scale(0.75);
            transform-origin: top left;
        }

        .MuiInputLabel-animated {
            transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }

        .MuiInputLabel-filled {
            z-index: 1;
            transform: translate(12px, 20px) scale(1);
            pointer-events: none;
        }

        .MuiInputLabel-filled.MuiInputLabel-marginDense {
            transform: translate(12px, 17px) scale(1);
        }

        .MuiInputLabel-filled.MuiInputLabel-shrink {
            transform: translate(12px, 10px) scale(0.75);
        }

        .MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {
            transform: translate(12px, 7px) scale(0.75);
        }

        .MuiInputLabel-outlined {
            z-index: 1;
            transform: translate(14px, 20px) scale(1);
            pointer-events: none;
        }

        .MuiInputLabel-outlined.MuiInputLabel-marginDense {
            transform: translate(14px, 12px) scale(1);
        }

        .MuiInputLabel-outlined.MuiInputLabel-shrink {
            transform: translate(14px, -6px) scale(0.75);
        }

    </style>
    <style data-jss="" data-meta="MuiFormControl">
        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            flex-direction: column;
            vertical-align: top;
        }

        .MuiFormControl-marginNormal {
            margin-top: 16px;
            margin-bottom: 8px;
        }

        .MuiFormControl-marginDense {
            margin-top: 8px;
            margin-bottom: 4px;
        }

        .MuiFormControl-fullWidth {
            width: 100%;
        }

    </style>
    <style type="text/css">
        html.hs-messages-widget-open.hs-messages-mobile,
        html.hs-messages-widget-open.hs-messages-mobile body {
            overflow: hidden !important;
            position: relative !important
        }

        html.hs-messages-widget-open.hs-messages-mobile body {
            height: 100% !important;
            margin: 0 !important
        }

        #hubspot-messages-iframe-container {
            display: initial !important;
            z-index: 2147483647;
            position: fixed !important;
            bottom: 0 !important
        }

        #hubspot-messages-iframe-container.widget-align-left {
            left: 0 !important
        }

        #hubspot-messages-iframe-container.widget-align-right {
            right: 0 !important
        }

        #hubspot-messages-iframe-container.internal {
            z-index: 1016
        }

        #hubspot-messages-iframe-container.internal iframe {
            min-width: 108px
        }

        #hubspot-messages-iframe-container .shadow-container {
            display: initial !important;
            z-index: -1;
            position: absolute;
            width: 0;
            height: 0;
            bottom: 0;
            content: ""
        }

        #hubspot-messages-iframe-container .shadow-container.internal {
            display: none !important
        }

        #hubspot-messages-iframe-container .shadow-container.active {
            width: 400px;
            height: 400px
        }

        #hubspot-messages-iframe-container iframe {
            display: initial !important;
            width: 100% !important;
            height: 100% !important;
            border: none !important;
            position: absolute !important;
            bottom: 0 !important;
            right: 0 !important;
            background: transparent !important
        }

    </style>
@endsection

@section('content')
    {{-- <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">
            <!-- Brand logo-->
            <a class="brand-logo" href="javascript:void(0);">
                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                    <defs>
                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                            <stop stop-color="#000000" offset="0%"></stop>
                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                        </lineargradient>
                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                        </lineargradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                <path class="text-primary" id="Path"
                                    d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                    style="fill: currentColor"></path>
                                <path id="Path1"
                                    d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                    fill="url(#linearGradient-1)" opacity="0.2"></path>
                                <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                    points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                    points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                    points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                            </g>
                        </g>
                    </g>
                </svg>
                <h2 class="brand-text text-primary ml-1">Company</h2>
            </a>
            <!-- /Brand logo-->
            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                    @if ($configData['theme'] === 'dark')
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2-dark.svg') }}" alt="Login V2" />
                    @else
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2.svg') }}" alt="Login V2" />
                    @endif
                </div>
            </div>
            <!-- /Left Text-->
            <!-- Login-->
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h4 class="card-title mb-1">Welcome to Company side! &#x1F44B;</h4>
                    <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

                    <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="login-email" class="form-label">Email</label>

                            <input type="text"
                                class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                id="login-email" name="login" placeholder="{{ __('app.username_or_email') }}"
                                aria-describedby="login-email" tabindex="1" autofocus
                                value="{{ old('username') ?: old('email') }}" />

                            @if ($errors->has('username') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">

                            <div class="d-flex justify-content-between">
                                <label for="login-password">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ url('/password/reset') }}">
                                        <small>Forgot Password?</small>
                                    </a>
                                @endif
                            </div>

                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password"
                                    class="form-control form-control-merge {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    id="login-password" name="password" tabindex="2"
                                    placeholder="{{ __('app.password') }}" aria-describedby="login-password" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group">
                            <div div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3"
                                    name="remember" value="{{ old('remember') }}" />
                                <label class="custom-control-label" for="remember-me">
                                    {{ __('app.remember_me') }}
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" tabindex="4" type="submit">Sign in</button>
                    </form>
                    <p class="text-center mt-2">
                        <span>New on our platform?</span>
                        <a href="{{ url('/register') }}"><span>&nbsp;Create an account</span></a>
                    </p>
                    <div class="divider my-2">
                        <div class="divider-text">or</div>
                    </div>
                    <div class="auth-footer-btn d-flex justify-content-center">
                        <a class="btn btn-facebook" href="javascript:void(0)">
                            <i data-feather="facebook"></i>
                        </a>
                        <a class="btn btn-twitter white" href="javascript:void(0)">
                            <i data-feather="twitter"></i>
                        </a>
                        <a class="btn btn-google" href="javascript:void(0)">
                            <i data-feather="mail"></i>
                        </a>
                        <a class="btn btn-github" href="javascript:void(0)">
                            <i data-feather="github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Login-->
        </div>
    </div> --}}

    <div id="roott">
        <main class="base-layout-container">
            <div class="login-container"><img alt="Voila logo" class="login-logo"
                    src="{{ asset('images/pages/voila-logo.png') }}">
                <h1 class="login-title">Online punch</h1>
                <form class="login-form flex flex-column align-center" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="w-100">
                        <div class="MuiFormControl-root MuiTextField-root textField MuiFormControl-fullWidth"><label
                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-filled"
                                data-shrink="false">Administrator account ID</label>
                            <div
                                class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-fullWidth MuiInputBase-formControl">
                                <input aria-invalid="false" name="login" type="text"
                                    class="MuiInputBase-input MuiFilledInput-input" value="">
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-1">
                        <div class="MuiFormControl-root MuiTextField-root textField MuiFormControl-fullWidth"><label
                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-filled"
                                data-shrink="false">Password</label>
                            <div
                                class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-fullWidth MuiInputBase-formControl">
                                <input aria-invalid="false" name="password" type="password"
                                    class="MuiInputBase-input MuiFilledInput-input" value="">
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper"><button class="btn btn-primary-light w-100" type="submit">Log in</button>
                    </div>
                </form><a class="btn btn-link btn-link-italic login-forgot-password"
                    href="https://console.voila.app/#/password/forgot">Forgot password?</a>
                <div class="flex align-center justify-center login-footer"><button type="button"
                        class="btn btn-link">Français</button>|<a href="https://console.voila.app/"
                        class="btn btn-link">access voilà</a></div>
            </div>
        </main>
    </div>

@endsection

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset(mix('js/scripts/pages/page-auth-login.js')) }}"></script>
    <script src="{{ asset('js/core/runtime.js') }}"></script>
    <script src="{{ asset('js/core/polyfills.js') }}"></script>
    <script src="{{ asset('js/core/scripts.js') }}"></script>
    {{-- <script src="{{ asset('js/core/main.js') }}"></script> --}}
    <script type="text/javascript">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(
                    c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "242477749718108");
        fbq("track", "PageView");

    </script>

    {{-- <script type="text/javascript">
        var _hsp = window._hsp = window._hsp || [];
        _hsp.push(['addEnabledFeatureGates', []]);
        ! function(t, e, r) {
            if (!document.getElementById(t)) {
                var n = document.createElement("script");
                for (var a in n.src = "https://js.hs-banner.com/4114376.js", n.type = "text/javascript", n.id = t, r) r
                    .hasOwnProperty(a) && n.setAttribute(a, r[a]);
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(n, i)
            }
        }("cookieBanner-4114376", 0, {
            "data-cookieconsent": "ignore",
            "data-loader": "hs-scriptloader",
            "data-hsjs-portal": 4114376,
            "data-hsjs-env": "prod",
            "data-hsjs-hublet": "na1"
        });
        ! function(e, t) {
            if (!document.getElementById(e)) {
                var c = document.createElement("script");
                c.src = "https://js.hs-analytics.net/analytics/1618622400000/4114376.js", c.type = "text/javascript", c.id =
                    e;
                var n = document.getElementsByTagName("script")[0];
                n.parentNode.insertBefore(c, n)
            }
        }("hs-analytics");
        ! function(t, e, r) {
            if (!document.getElementById(t)) {
                var n = document.createElement("script");
                for (var a in n.src = "https://js.usemessages.com/conversations-embed.js", n.type = "text/javascript", n
                        .id = t, r) r.hasOwnProperty(a) && n.setAttribute(a, r[a]);
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(n, i)
            }
        }("hubspot-messages-loader", 0, {
            "data-loader": "hs-scriptloader",
            "data-hsjs-portal": 4114376,
            "data-hsjs-env": "prod",
            "data-hsjs-hublet": "na1"
        });
        ! function(t, e, r) {
            if (!document.getElementById(t)) {
                var n = document.createElement("script");
                for (var a in n.src = "https://js.hscollectedforms.net/collectedforms.js", n.type = "text/javascript", n
                        .id = t, r) r.hasOwnProperty(a) && n.setAttribute(a, r[a]);
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(n, i)
            }
        }("CollectedForms-4114376", 0, {
            "crossorigin": "anonymous",
            "data-leadin-portal-id": 4114376,
            "data-leadin-env": "prod",
            "data-loader": "hs-scriptloader",
            "data-hsjs-portal": 4114376,
            "data-hsjs-env": "prod",
            "data-hsjs-hublet": "na1"
        });

    </script> --}}
@endsection
