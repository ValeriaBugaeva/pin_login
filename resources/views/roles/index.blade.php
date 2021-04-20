@extends('layouts/contentLayoutMaster')

@section('title','Role')

@section('vendor-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css')) }}">

    <link rel="stylesheet" href="{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/forms/select/select2.min.css')}}">

@endsection

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}">
    <link rel="stylesheet" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection

@section('content')
    <style>
        #errorMessage {
            color: red;
        }
    </style>
    <!-- users list start -->
    <section class="staff-list">
        <!-- list section start -->

        <div class="card">


            <div class="card-datatable table-responsive pt-0">
                <table class="roles-list-table table">
                    <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Staff members</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                </table>
            </div>


            <!-- Modal to add new user starts-->
            <div class="modal new-user-modal fade" id="modals-slide-in">
                <div class="modal-dialog modal-dialog-centered">

                    <form class="add-new-user modal-content pt-0" id="add-new-role" novalidate onsubmit="return false">

                        <div class="modal-header mb-1 text-center">
                            <h5 class="modal-title " id="exampleModalLabel"></h5>
                        </div>

                        <div class="modal-body flex-grow-1">

                            <div class="form-group mb-2">
                                <label for="user-role">User Role</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Create new role" required>
                                <input type="hidden" id="roleId" name="id">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mr-1 data-submit" id="submitBtn" onclick="submitRoleData();">Submit</button>
                                <button type="submit" class="btn btn-primary mr-1 data-updated" id="updatedBtn" onclick="updateRoleData();">Update</button>
                                <button type="reset" class="btn btn-outline-danger" id="cancelBtn" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal to add new user Ends-->

        </div>
        <!-- list section end -->
    </section>
    <!-- users list ends -->

    <style>
        .role-avatar-group{
            display: contents !important;
        }
    </style>

@endsection

@section('vendor-script')
    {{-- Vendor js files --}}
    <script src="{{asset(mix('vendors/js/extensions/moment.min.js'))}}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap4.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
@endsection

@section('page-script')

    {{-- Page js files --}}
    <script src="../../../company/user-roles.js?time=<?php echo time(); ?>"></script>
@endsection
