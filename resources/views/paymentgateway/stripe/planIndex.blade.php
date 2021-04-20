@extends('layouts/contentLayoutMaster')

@section('title', 'Subscription Plans')

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

        <!-- list section start -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="staff-list-table table">
                    <thead class="thead-light">
                    <tr>
                        <th>Plan Name</th>
                        <th>Plan frequency</th>
                        <th>Plan Interval</th>
                        <th>Amount</th>
                        <th>Trial Period</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                </table>
            </div>


            <!-- Modal to add new user starts-->
            <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                <div class="modal-dialog">

                    <form class="form-horizontal add-new-user modal-content pt-0" id="add-edit-subscription" novalidate onsubmit="return false">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>

                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">{{__('app.create_plan')}}</h5>
                        </div>

                        <div class="modal-body flex-grow-1">

                            <div class="form-group">
                                <label for="plan_name" class="control-label">{{__('app.plan_name')}}</label>
                                <input type="text" name="plan_name" class="form-control" id="plan_name" placeholder="{{__('app.plan_name')}}">
                                <input type="hidden" name="old_id" id="old_id">
                                <input type="hidden" name="plan_id" id="plan_id">

                                @if ($errors->has('plan_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_name') }}</strong>
                                    </span>
                                @endif
                            </div>



                            <div class="form-group ">
                                <label for="plan_description" class="control-label">{{__('app.plan_description')}}</label>
                                <textarea name="plan_description" id="plan_description" class="form-control textarea-resize-none"
                                          placeholder="{{__('app.plan_description')}}"></textarea>

                                @if ($errors->has('plan_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_description') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group ">
                                    <label for="plan_amount" class="control-label">{{__('app.amount')}}</label>
                                    <input type="text" name="plan_amount" class="form-control" id="plan_amount" placeholder="{{__('app.amount')}}">

                                    @if ($errors->has('plan_amount'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('plan_amount') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group ">
                                <label for="plan_interval" class="control-label">{{__('app.plan_interval')}}</label>
                                <select class="form-control" name="plan_interval" id="plan_interval">
                                    <option value="{{__('app.year')}}">{{__('app.yearly')}}</option>
                                    <option value="{{__('app.month')}}" selected>{{__('app.monthly')}}</option>
                                    <option value="{{__('app.week')}}">{{__('app.weekly')}}</option>
                                    <option value="{{__('app.day')}}">{{__('app.daily')}}</option>
                                </select>

                                @if ($errors->has('plan_interval'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_interval') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group ">
                                <label for="plan_intervalCount" class="control-label">{{__('app.plan_interval_count')}}</label>
                                <input type="number" name="plan_intervalCount" class="form-control" id="plan_intervalCount" placeholder="{{__('app.plan_interval_count')}}">

                                @if ($errors->has('plan_intervalCount'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_interval') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group ">
                                <label for="plan_trial_period" class="control-label mr-2">{{__('app.add_trial_period')}}</label>
                                <input type="checkbox" name="trial_check" id="trial_check">
                                <input type="text" name="plan_trial_period" class="form-control" id="plan_trial_period" placeholder="{{__('app.trial_period')}}">

                                @if ($errors->has('plan_trial_period'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('plan_trial_period') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary mr-1 data-submit" id="submitBtn" onclick="submitSubscriptionData();">Submit</button>
                            <button type="submit" class="btn btn-primary mr-1 data-updated" id="updatedBtn" onclick="updateSubscriptionbData();">Update</button>
                            <button type="reset" class="btn btn-outline-danger" id="cancelBtn" data-dismiss="modal">Cancel</button>
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
    <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
@endsection

@section('page-script')
    {{-- Page js files --}}

    <script>
        (function(){
            "use strict";

            window.onload = function(){
                var trial_check = document.getElementById('trial_check');
                var trial_check_input = document.getElementById('plan_trial_period');
                trial_check_input.style.display = 'none';
                trial_check.addEventListener('change',function(){
                    if(this.checked){
                        trial_check_input.style.display = '';
                    }else{
                        trial_check_input.style.display = 'none';
                    }
                })
            }
        })()
    </script>

    <script src="../../../company/subscription_plan.js?time=<?php echo time(); ?>"></script>
@endsection
