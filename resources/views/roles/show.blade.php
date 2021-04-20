@extends('layouts/contentLayoutMaster')

@section('title', 'Permisssions')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <div class="table-responsive border rounded mt-1">
                    <h6 class="py-1 mx-1 mb-0 font-medium-2">
                        <i data-feather="lock" class="font-medium-3 mr-25"></i>
                        <span class="align-middle">Permission</span>
                    </h6>
                    <table class="table table-striped table-borderless">
                        <thead class="thead-light">
                        <tr>
                            <th>Menu</th>
                            <th>Read</th>
                            <th>Write</th>
                            <th>Create</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Staffs</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="staff-read" checked />
                                    <label class="custom-control-label" for="staff-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="staff-write" />
                                    <label class="custom-control-label" for="staff-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="staff-create" />
                                    <label class="custom-control-label" for="staff-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="staff-delete" />
                                    <label class="custom-control-label" for="staff-delete"></label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Locations</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="location-read" />
                                    <label class="custom-control-label" for="location-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="location-write" checked />
                                    <label class="custom-control-label" for="location-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="location-create" />
                                    <label class="custom-control-label" for="location-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="location-delete" />
                                    <label class="custom-control-label" for="location-delete"></label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Calendar</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="calendar-read" checked />
                                    <label class="custom-control-label" for="calendar-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="calendar-write" />
                                    <label class="custom-control-label" for="calendar-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="calendar-create" checked />
                                    <label class="custom-control-label" for="calendar-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="calendar-delete" />
                                    <label class="custom-control-label" for="calendar-delete"></label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Todo</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="todo-read" />
                                    <label class="custom-control-label" for="todo-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="todo-write" />
                                    <label class="custom-control-label" for="todo-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="todo-create" />
                                    <label class="custom-control-label" for="todo-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="todo-delete" />
                                    <label class="custom-control-label" for="todo-delete"></label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>File Manager</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="file-read" />
                                    <label class="custom-control-label" for="file-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="file-create" />
                                    <label class="custom-control-label" for="file-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="file-write" />
                                    <label class="custom-control-label" for="file-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="file-delete" checked />
                                    <label class="custom-control-label" for="file-delete"></label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Invoice</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoice-read" />
                                    <label class="custom-control-label" for="invoice-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoice-create" />
                                    <label class="custom-control-label" for="invoice-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoice-write" />
                                    <label class="custom-control-label" for="invoice-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invoice-delete" checked />
                                    <label class="custom-control-label" for="invoice-delete"></label>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>Roles & Permission</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="role-read" />
                                    <label class="custom-control-label" for="role-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="role-create" />
                                    <label class="custom-control-label" for="role-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="role-write" />
                                    <label class="custom-control-label" for="role-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="role-delete" checked />
                                    <label class="custom-control-label" for="role-delete"></label>
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td>Activity Log</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="activity-read" />
                                    <label class="custom-control-label" for="activity-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="activity-create" />
                                    <label class="custom-control-label" for="activity-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="activity-write" />
                                    <label class="custom-control-label" for="activity-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="activity-delete" checked />
                                    <label class="custom-control-label" for="activity-delete"></label>
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td>Shop</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shop-read" />
                                    <label class="custom-control-label" for="shop-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shop-create" />
                                    <label class="custom-control-label" for="shop-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shop-write" />
                                    <label class="custom-control-label" for="shop-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shop-delete" checked />
                                    <label class="custom-control-label" for="shop-delete"></label>
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td>Account Settings</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="settings-read" />
                                    <label class="custom-control-label" for="settings-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="settings-create" />
                                    <label class="custom-control-label" for="settings-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="settings-write" />
                                    <label class="custom-control-label" for="settings-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="settings-delete" checked />
                                    <label class="custom-control-label" for="settings-delete"></label>
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td>Raise Support</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="support-read" />
                                    <label class="custom-control-label" for="support-read"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="support-create" />
                                    <label class="custom-control-label" for="support-create"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="support-write" />
                                    <label class="custom-control-label" for="support-write"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="support-delete" checked />
                                    <label class="custom-control-label" for="support-delete"></label>
                                </div>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                <a href="{{ url('/role') }}" type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</a>
{{--                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>--}}
            </div>
        </div>
    </div>

@endsection
