@extends('layouts/contentLayoutMaster')

@section('title', 'User Stats')

@section('vendor-style')
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection



@section('content')

    <!-- User Invoice Starts-->
  <div class="row invoice-list-wrapper">
    <div class="col-12">
      <div class="card">
        <div class="card-datatable table-responsive">
          <table class="invoice-list-table table invoice-checkbox">
            <thead>
              <tr>
                <th>
                    <input type="checkbox" class="form-control invoice-checkbox">
                </th>
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
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/app-user-view.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/tables/table-datatables-basic.js')) }}"></script>

@endsection
