@extends('layouts/contentLayoutMaster')

@section('title', 'Sweet Alerts')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css'))}}">
@endsection

@section('content')

<!-- Types section -->
<section id="types">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Types</h4>
    </div>
    <div class="card-body">
      <p class="card-text mb-0">
      <div class="demo-inline-spacing">
        <button class="btn btn-outline-primary" id="position-top-end">When we save a data</button>
        <button type="button" class="btn btn-outline-primary" id="confirm-color">When we delete a data</button>

      </div>
    </div>
  </div>
</section>
<!--/ Types section -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
@endsection
