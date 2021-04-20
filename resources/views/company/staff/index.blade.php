@extends('layouts/contentLayoutMaster')

@section('title', 'Staff List')

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
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
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
        <!-- users filter start -->
        <div class="card">
            <h5 class="card-header">Search Filter</h5>
            <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <!-- users filter end -->
        <!-- list section start -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="staff-list-table table">
                    <thead class="thead-light">
                        <tr>
                            <th>USER</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>PLAN</th>
                            <th>STATUS</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>

                </table>
            </div>
            <!-- Modal to add new user starts-->
            <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                <div class="modal-dialog">
                    <form class="add-new-user modal-content pt-0" method="POST" action="{{ route('staff-add') }}">
                        {{ csrf_field() }}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">New Staff</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" required value="{{old('firstname')}}" name="firstname"
                                       class="form-control" placeholder="First Name"/>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" required name="lastname" value="{{old('firstname')}}"
                                       class="form-control" placeholder="Last Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" required value="{{old('email')}}" name="email"
                                       class="form-control" placeholder="Email"/>
                                @if ($errors->has('email'))
                                    <span class="text-danger" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                                @endif
                            </div>
                        <!-- <div class="form-group">
                <label for="username">Username</label>
                <input type="text"  name="username" value="{{old('username')}}" class="form-control" id="username" required class="form-control" placeholder="Username"/>
                @if ($errors->has('username'))
                            <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                  </span>
                  @endif
                            </div> -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                       placeholder="Password"/>
                                @if ($errors->has('password'))
                                    <span class="text-danger" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
                                @endif
                                <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="control-label">Password Confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                       id="password_confirmation" placeholder="Password Confirmation"/>
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger" role="alert">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        <!-- <div class="form-group mb-2">
                        <label for="location_id">Location</label>
                         <select class="select2 form-control" id="location_id" name="location_id">
                         @foreach($locations as $location)
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                         @endforeach
                            </select>
                             </div> -->
                            <div class="form-group mb-2">
                                <label for="user-role">User Role</label>
                                <div class="new-role">
                                    <select class="roleto form-control" name="position">
                                        <option></option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->name }}">{{ ucwords($role->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal to add new user Ends-->
        </div>
        <!-- list section end -->
    </section>
    <!-- users list ends -->
@endsection

@section('vendor-script')
    {{-- Vendor js files --}}
    <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap4.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
    <script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection

@section('page-script')
    {{-- Page js files --}}
    <script>
        var staff_role_add_url = "{{route('staff-role-add')}}";
        var csrf_token = "{{ csrf_token() }}";

    </script>
    <script src="../../../company/staff-list.js?time=<?php echo time(); ?>"></script>
    <script src="../../../company/new-role.js"></script>
@endsection
