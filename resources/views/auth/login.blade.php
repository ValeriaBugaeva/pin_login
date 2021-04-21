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

    {{-- <script src="{{ asset('js/core/collectedforms.js') }}"></script>
    <script src="{{ asset('js/core/conversation-embed.js') }}"></script>
    <script src="{{ asset('js/core/analytics.js') }}"></script> --}}


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
    <style data-jss="" data-meta="MuiButtonBase">
        .MuiButtonBase-root {
            color: inherit;
            border: 0;
            cursor: pointer;
            margin: 0;
            display: inline-flex;
            outline: 0;
            padding: 0;
            position: relative;
            align-items: center;
            user-select: none;
            border-radius: 0;
            vertical-align: middle;
            -moz-appearance: none;
            justify-content: center;
            text-decoration: none;
            background-color: transparent;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiButtonBase-root::-moz-focus-inner {
            border-style: none;
        }

        .MuiButtonBase-root.Mui-disabled {
            cursor: default;
            pointer-events: none;
        }

        @media print {
            .MuiButtonBase-root {
                -webkit-print-color-adjust: exact;
            }
        }

    </style>
    <style data-jss="" data-meta="MuiSvgIcon">
        .MuiSvgIcon-root {
            fill: currentColor;
            width: 1em;
            height: 1em;
            display: inline-block;
            font-size: 1.5rem;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            flex-shrink: 0;
            user-select: none;
        }

        .MuiSvgIcon-colorPrimary {
            color: #7f56ac;
        }

        .MuiSvgIcon-colorSecondary {
            color: #7f56ac;
        }

        .MuiSvgIcon-colorAction {
            color: rgba(0, 0, 0, 0.54);
        }

        .MuiSvgIcon-colorError {
            color: #d0021b;
        }

        .MuiSvgIcon-colorDisabled {
            color: rgba(0, 0, 0, 0.26);
        }

        .MuiSvgIcon-fontSizeInherit {
            font-size: inherit;
        }

        .MuiSvgIcon-fontSizeSmall {
            font-size: 1.25rem;
        }

        .MuiSvgIcon-fontSizeLarge {
            font-size: 2.1875rem;
        }

    </style>
    <style data-jss="" data-meta="MuiGrid">
        .MuiGrid-container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
        }

        .MuiGrid-item {
            margin: 0;
            box-sizing: border-box;
        }

        .MuiGrid-zeroMinWidth {
            min-width: 0;
        }

        .MuiGrid-direction-xs-column {
            flex-direction: column;
        }

        .MuiGrid-direction-xs-column-reverse {
            flex-direction: column-reverse;
        }

        .MuiGrid-direction-xs-row-reverse {
            flex-direction: row-reverse;
        }

        .MuiGrid-wrap-xs-nowrap {
            flex-wrap: nowrap;
        }

        .MuiGrid-wrap-xs-wrap-reverse {
            flex-wrap: wrap-reverse;
        }

        .MuiGrid-align-items-xs-center {
            align-items: center;
        }

        .MuiGrid-align-items-xs-flex-start {
            align-items: flex-start;
        }

        .MuiGrid-align-items-xs-flex-end {
            align-items: flex-end;
        }

        .MuiGrid-align-items-xs-baseline {
            align-items: baseline;
        }

        .MuiGrid-align-content-xs-center {
            align-content: center;
        }

        .MuiGrid-align-content-xs-flex-start {
            align-content: flex-start;
        }

        .MuiGrid-align-content-xs-flex-end {
            align-content: flex-end;
        }

        .MuiGrid-align-content-xs-space-between {
            align-content: space-between;
        }

        .MuiGrid-align-content-xs-space-around {
            align-content: space-around;
        }

        .MuiGrid-justify-xs-center {
            justify-content: center;
        }

        .MuiGrid-justify-xs-flex-end {
            justify-content: flex-end;
        }

        .MuiGrid-justify-xs-space-between {
            justify-content: space-between;
        }

        .MuiGrid-justify-xs-space-around {
            justify-content: space-around;
        }

        .MuiGrid-justify-xs-space-evenly {
            justify-content: space-evenly;
        }

        .MuiGrid-spacing-xs-1 {
            width: calc(100% + 8px);
            margin: -4px;
        }

        .MuiGrid-spacing-xs-1>.MuiGrid-item {
            padding: 4px;
        }

        .MuiGrid-spacing-xs-2 {
            width: calc(100% + 16px);
            margin: -8px;
        }

        .MuiGrid-spacing-xs-2>.MuiGrid-item {
            padding: 8px;
        }

        .MuiGrid-spacing-xs-3 {
            width: calc(100% + 24px);
            margin: -12px;
        }

        .MuiGrid-spacing-xs-3>.MuiGrid-item {
            padding: 12px;
        }

        .MuiGrid-spacing-xs-4 {
            width: calc(100% + 32px);
            margin: -16px;
        }

        .MuiGrid-spacing-xs-4>.MuiGrid-item {
            padding: 16px;
        }

        .MuiGrid-spacing-xs-5 {
            width: calc(100% + 40px);
            margin: -20px;
        }

        .MuiGrid-spacing-xs-5>.MuiGrid-item {
            padding: 20px;
        }

        .MuiGrid-spacing-xs-6 {
            width: calc(100% + 48px);
            margin: -24px;
        }

        .MuiGrid-spacing-xs-6>.MuiGrid-item {
            padding: 24px;
        }

        .MuiGrid-spacing-xs-7 {
            width: calc(100% + 56px);
            margin: -28px;
        }

        .MuiGrid-spacing-xs-7>.MuiGrid-item {
            padding: 28px;
        }

        .MuiGrid-spacing-xs-8 {
            width: calc(100% + 64px);
            margin: -32px;
        }

        .MuiGrid-spacing-xs-8>.MuiGrid-item {
            padding: 32px;
        }

        .MuiGrid-spacing-xs-9 {
            width: calc(100% + 72px);
            margin: -36px;
        }

        .MuiGrid-spacing-xs-9>.MuiGrid-item {
            padding: 36px;
        }

        .MuiGrid-spacing-xs-10 {
            width: calc(100% + 80px);
            margin: -40px;
        }

        .MuiGrid-spacing-xs-10>.MuiGrid-item {
            padding: 40px;
        }

        .MuiGrid-grid-xs-auto {
            flex-grow: 0;
            max-width: none;
            flex-basis: auto;
        }

        .MuiGrid-grid-xs-true {
            flex-grow: 1;
            max-width: 100%;
            flex-basis: 0;
        }

        .MuiGrid-grid-xs-1 {
            flex-grow: 0;
            max-width: 8.333333%;
            flex-basis: 8.333333%;
        }

        .MuiGrid-grid-xs-2 {
            flex-grow: 0;
            max-width: 16.666667%;
            flex-basis: 16.666667%;
        }

        .MuiGrid-grid-xs-3 {
            flex-grow: 0;
            max-width: 25%;
            flex-basis: 25%;
        }

        .MuiGrid-grid-xs-4 {
            flex-grow: 0;
            max-width: 33.333333%;
            flex-basis: 33.333333%;
        }

        .MuiGrid-grid-xs-5 {
            flex-grow: 0;
            max-width: 41.666667%;
            flex-basis: 41.666667%;
        }

        .MuiGrid-grid-xs-6 {
            flex-grow: 0;
            max-width: 50%;
            flex-basis: 50%;
        }

        .MuiGrid-grid-xs-7 {
            flex-grow: 0;
            max-width: 58.333333%;
            flex-basis: 58.333333%;
        }

        .MuiGrid-grid-xs-8 {
            flex-grow: 0;
            max-width: 66.666667%;
            flex-basis: 66.666667%;
        }

        .MuiGrid-grid-xs-9 {
            flex-grow: 0;
            max-width: 75%;
            flex-basis: 75%;
        }

        .MuiGrid-grid-xs-10 {
            flex-grow: 0;
            max-width: 83.333333%;
            flex-basis: 83.333333%;
        }

        .MuiGrid-grid-xs-11 {
            flex-grow: 0;
            max-width: 91.666667%;
            flex-basis: 91.666667%;
        }

        .MuiGrid-grid-xs-12 {
            flex-grow: 0;
            max-width: 100%;
            flex-basis: 100%;
        }

        @media (min-width:600px) {
            .MuiGrid-grid-sm-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-sm-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-sm-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-sm-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-sm-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-sm-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-sm-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-sm-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-sm-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-sm-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-sm-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-sm-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-sm-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-sm-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }

        @media (min-width:960px) {
            .MuiGrid-grid-md-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-md-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-md-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-md-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-md-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-md-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-md-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-md-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-md-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-md-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-md-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-md-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-md-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-md-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }

        @media (min-width:1280px) {
            .MuiGrid-grid-lg-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-lg-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-lg-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-lg-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-lg-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-lg-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-lg-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-lg-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-lg-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-lg-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-lg-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-lg-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-lg-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-lg-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }

        @media (min-width:1920px) {
            .MuiGrid-grid-xl-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-xl-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-xl-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-xl-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-xl-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-xl-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-xl-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-xl-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-xl-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-xl-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-xl-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-xl-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-xl-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-xl-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }

    </style>
    <style data-jss="" data-meta="MuiFab">
        .MuiFab-root {
            color: rgba(0, 0, 0, 0.87);
            width: 56px;
            height: 56px;
            padding: 0;
            font-size: 0.875rem;
            min-width: 0;
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            min-height: 36px;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-family: 'Roboto', sans-serif !important;
            font-weight: 500;
            line-height: 1.75;
            border-radius: 50%;
            letter-spacing: 0.02857em;
            text-transform: uppercase;
            background-color: #e0e0e0;
        }

        .MuiFab-root:active {
            box-shadow: 0px 7px 8px -4px rgba(0, 0, 0, 0.2), 0px 12px 17px 2px rgba(0, 0, 0, 0.14), 0px 5px 22px 4px rgba(0, 0, 0, 0.12);
        }

        .MuiFab-root:hover {
            text-decoration: none;
            background-color: #d5d5d5;
        }

        .MuiFab-root.Mui-focusVisible {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiFab-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
            box-shadow: none;
            background-color: rgba(0, 0, 0, 0.12);
        }

        @media (hover: none) {
            .MuiFab-root:hover {
                background-color: #e0e0e0;
            }
        }

        .MuiFab-root:hover.Mui-disabled {
            background-color: rgba(0, 0, 0, 0.12);
        }

        .MuiFab-label {
            width: 100%;
            display: inherit;
            align-items: inherit;
            justify-content: inherit;
        }

        .MuiFab-primary {
            color: #fff;
            background-color: #7f56ac;
        }

        .MuiFab-primary:hover {
            background-color: rgb(88, 60, 120);
        }

        @media (hover: none) {
            .MuiFab-primary:hover {
                background-color: #7f56ac;
            }
        }

        .MuiFab-secondary {
            color: #fff;
            background-color: #7f56ac;
        }

        .MuiFab-secondary:hover {
            background-color: rgb(88, 60, 120);
        }

        @media (hover: none) {
            .MuiFab-secondary:hover {
                background-color: #7f56ac;
            }
        }

        .MuiFab-extended {
            width: auto;
            height: 48px;
            padding: 0 16px;
            min-width: 48px;
            min-height: auto;
            border-radius: 24px;
        }

        .MuiFab-extended.MuiFab-sizeSmall {
            width: auto;
            height: 34px;
            padding: 0 8px;
            min-width: 34px;
            border-radius: 17px;
        }

        .MuiFab-extended.MuiFab-sizeMedium {
            width: auto;
            height: 40px;
            padding: 0 16px;
            min-width: 40px;
            border-radius: 20px;
        }

        .MuiFab-colorInherit {
            color: inherit;
        }

        .MuiFab-sizeSmall {
            width: 32px;
            height: 32px;
            min-height: 32px;
        }

        .MuiFab-sizeMedium {
            width: 48px;
            height: 48px;
        }

    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss1 {
            color: #a677d9;
            background: #fff;
        }

        .jss1:hover {
            background-color: #f5f6fd;
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

    <link rel="stylesheet" type="text/css" href="{{ asset("fontawesome/css/all.min.css") }}">
@endsection

@section('content')
    <div id="roott">
        <main class="auth-layout-container">
            <section class="auth-layout-left">
                <div class="layout-section top-section">
                    <div class="clock-container"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                            </path>
                            <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                        </svg><span class="clock-time">20:39</span></div>
                </div>
                <div class="layout-section middle-section"><img alt="Logo company" class="group-logo"
                        src="{{ asset('images/pages/group-logo.png') }}">
                    <h1 class="group-name"></h1>
                </div>
                <div class="layout-section bottom-section"><img alt="Voila logo" class="voila-logo"
                        src="{{ asset('images/pages/voila-logo.png') }}"><button class="btn btn-logout">Logout</button>
                </div>
            </section>
            <section class="auth-layout-right" style="background-color: #e2e5f7;">
                <div class="nip-container">
                    <h1 class="nip-title">Enter your pin or your phone number</h1>
                    <div class="nip-form">
                        <div class="nip"></div>
                        <form>
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2">
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="1"><span class="MuiFab-label"
                                            onClick="btnClick(1)">1</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="2" onClick="btnClick(2)"><span
                                            class="MuiFab-label">2</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="3" onClick="btnClick(3)"><span
                                            class="MuiFab-label">3</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="4" onClick="btnClick(4)"><span
                                            class="MuiFab-label">4</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="5" onClick="btnClick(5)"><span
                                            class="MuiFab-label">5</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="6" onClick="btnClick(6)"><span
                                            class="MuiFab-label">6</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="7" onClick="btnClick(7)"><span
                                            class="MuiFab-label">7</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="8" onClick="btnClick(8)"><span
                                            class="MuiFab-label">8</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" name="9" onClick="btnClick(9)"><span
                                            class="MuiFab-label">9</span></button>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" onClick="btnClick(-1)"><span class="MuiFab-label"><svg
                                                class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M22 3H7c-.69 0-1.23.35-1.59.88L0 12l5.41 8.11c.36.53.9.89 1.59.89h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-3 12.59L17.59 17 14 13.41 10.41 17 9 15.59 12.59 12 9 8.41 10.41 7 14 10.59 17.59 7 19 8.41 15.41 12 19 15.59z">
                                                </path>
                                            </svg></span></button></div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4"><button
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium"
                                        tabindex="0" type="button" onClick="btnClick(0)"><span
                                            class="MuiFab-label">0</span></button></div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4" onClick="btnClick(100)"><button
                                        id="btnEnter"
                                        class="MuiButtonBase-root MuiFab-root jss1 number-button MuiFab-sizeMedium Mui-disabled"
                                        tabindex="0" type="button" name="100" disabled=""><span class="MuiFab-label"><svg
                                                class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                            </svg></span></button></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div style="position: absolute; right: 0; bottom: 0;" class="p-2">
                     <i class="fas fa-comment-alt fa-3x" style="color: #33475b;"></i>
                </div>

               

            </section>
        </main>
    </div>
@endsection

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
    {{-- <script src="http://js.hs-scripts.com/4114376.js"></script> --}}
    <script src="{{ asset(mix('js/scripts/pages/page-auth-login.js')) }}"></script>
    {{-- <script src="{{ asset('js/core/runtime.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/core/polyfills.js') }}"></script>
    <script src="{{ asset('js/core/scripts.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/core/main.js') }}"></script> --}}
    {{-- <script type="text/javascript">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(
                    c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "242477749718108");
        fbq("track", "PageView");

    </script> --}}

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

    <script type="text/javascript">
        function btnClick(number) {
            sum = $('.nip').text();
            if (number == -1) {
                if (sum.length > 0) {
                    sum = sum.substring(0, sum.length - 1);
                }
                $('.nip').text(sum);
            } else if (number == 100) {
                if (sum.length == 0) return;
                $.ajax({
                    type: 'POST',
                    url: '/checkPIN',
                    data: {
                        pin: sum
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        if (data == "ok") {
                            window.location.href = "/showDashboard";
                        } else {

                        }
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            } else {
                sum = sum + number;
                $('.nip').text(sum);
            }
            if (sum.length > 0) {
                $('#btnEnter').removeClass("Mui-disabled");
            } else {
                $('#btnEnter').addClass("Mui-disabled");
            }
        }

    </script>
@endsection
