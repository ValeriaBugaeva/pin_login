$(function () {
    'use strict';

    var dtUserTable = $('.staff-list-table'),
        newUserSidebar = $('.new-user-modal'),
        newUserForm = $('.add-new-user'),
        statusObj = {
            'Pending': {title: 'Pending', class: 'badge-light-warning'},
            'Active': {title: 'Active', class: 'badge-light-success'},
            'Inactive': {title: 'Inactive', class: 'badge-light-secondary'}
        };

    var assetPath = '../../../app-assets/',
        userView = 'app-user-view.html',
        userEdit = 'app-user-edit.html';
    var commonPath = assetPath;
    if ($('body').attr('data-framework') === 'laravel') {
        assetPath = $('body').attr('data-asset-path');
        userView = assetPath + 'staff/view/';
        userEdit = assetPath + 'staff/edit/';
        commonPath = assetPath + 'staff/';
    }

    // Users List datatable
    if (dtUserTable.length) {
        dtUserTable.DataTable({
            processing: true,
            serverSide: true,

            ajax:
                {
                    url: '/subscription/ajax_plan',
                    type: 'GET',
                },

            columns: [
                /* {data: 'fullname'}, */
                {data: 'plan_name'},
                {data: 'plan_interval'},
                {data: 'plan_intervalCount'},
                {data: 'plan_amount'},
                {data: 'trial_period_days'},
                {data: 'action'},
            ],
            columnDefs: [
                {
                    // User full name and username
                    targets: 0,
                    responsivePriority: 4,
                    render: function (data, type, full, meta) {
                        var $name = full['plan_name'];
                        return $name;
                    }
                },

                {
                    // User full name and username
                    targets: 3,
                    responsivePriority: 4,
                    render: function (data, type, full, meta) {
                        var $amount = full['plan_amount'];

                    return '$' + ($amount / 100) ;
                    }
                },
                {
                    // User full name and username
                    targets: 4,
                    responsivePriority: 4,
                    render: function (data, type, full, meta) {
                        var $trial_period_days = full['trial_period_days'];

                        if ($trial_period_days < 1){
                            return 0;
                        }else if($trial_period_days > 1){
                            return $trial_period_days + ' days'
                        } else{
                            return $trial_period_days + ' day'
                        }
                    }
                },

                /* {
                    // User Role
                    targets: 3,
                    render: function (data, type, full, meta) {
                        var $role = full['role'];
                        var roleBadgeObj = {
                            Subscriber: feather.icons['user'].toSvg({class: 'font-medium-3 text-primary mr-50'}),
                            Author: feather.icons['settings'].toSvg({class: 'font-medium-3 text-warning mr-50'}),
                            Maintainer: feather.icons['database'].toSvg({class: 'font-medium-3 text-success mr-50'}),
                            Editor: feather.icons['edit-2'].toSvg({class: 'font-medium-3 text-info mr-50'}),
                            Admin: feather.icons['slack'].toSvg({class: 'font-medium-3 text-danger mr-50'})
                        };
                        return "<span class='text-truncate align-middle'>" + roleBadgeObj[$role] + $role + '</span>';
                    }
                }, */
                {
                    // User Status
                    // targets: 4,
                    // render: function (data, type, full, meta) {
                    //     var $status = full['status'];
                    //     return (
                    //         '<span class="badge badge-pill ' +
                    //         statusObj[$status].class +
                    //         '" text-capitalized>' +
                    //         statusObj[$status].title +
                    //         '</span>'
                    //     );
                    // }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return (
                            '<div class="btn-group">' +
                            '<a class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({class: 'font-small-4'}) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-right">' +
                            '<a Onclick="editStaffDetails('+full['id']+')" href="javascript:void(0);" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Edit</a>' +
                            '<a href="javascript:;" onClick=removestaff(' + full['id'] + '); class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Delete</a></div>' +
                            '</div>' +
                            '</div>'
                        );
                    }
                }
            ],
            order: [[2, 'desc']],
            dom:
                '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
                '<"col-lg-12 col-xl-6" l>' +
                '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
                '>t' +
                '<"d-flex justify-content-between mx-2 row mb-1"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            language: {
                sLengthMenu: 'Show _MENU_',
                search: 'Search',
                searchPlaceholder: 'Search..'
            },
            // Buttons with Dropdown
            buttons: [
                {
                    text: 'Create Plan',
                    className: 'add-new btn btn-primary mt-50',
                    attr: {
                        'data-toggle': 'modal',
                        'data-target': '#modals-slide-in'
                    },
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            // For responsive popup
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return 'Details of ' + data['name'];
                        }
                    }),
                    type: 'column',
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table',
                        columnDefs: [
                            {
                                targets: 2,
                                visible: false
                            },
                            {
                                targets: 3,
                                visible: false
                            }
                        ]
                    })
                }
            },
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
        });
    }

    // Check Validity
    function checkValidity(el) {
        if (el.validate().checkForm()) {
            submitBtn.attr('disabled', false);
        } else {
            submitBtn.attr('disabled', true);
        }
    }

    // Form Validation
    if (newUserForm.length) {
        newUserForm.validate({
            errorClass: 'error',
            rules: {
                'firstname': {
                    required: true
                },
                'lastname': {
                    required: true
                },
                'qualification': {
                    required: true
                }
            }
        });

        newUserForm.on('submit', function (e) {
            var isValid = newUserForm.valid();
            //e.preventDefault();
            if (isValid) {
                //newUserSidebar.modal('hide');
                return true;
            }
        });
    }

    // To initialize tooltip with body container
    $('body').tooltip({
        selector: '[data-toggle="tooltip"]',
        container: 'body'
    });

    $(".add-new").on('click', function (){
        $("#exampleModalLabel").text('Create new role');
        $("#submitBtn").removeClass('d-none');
        $("#updatedBtn").addClass('d-none');
        $(".add-new-user")[0].reset();
        $("#plan_description").val('');

        $("#plan_amount").attr('disabled', false);
        $("#plan_interval").attr('disabled', false);
        $("#plan_intervalCount").attr('disabled', false);
        var checkbox = $("#plan_trial_period").val();
        if (checkbox === ''){
            $( "#trial_check" ).prop( "checked", false );
            var trial_check_input = document.getElementById('plan_trial_period');
            trial_check_input.style.display = 'none';
            $("#plan_trial_period").attr('disabled', false);
        }

    })
});

$(document).ready(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});


function submitSubscriptionData(){
    var plan_name = $("#plan_name").val();
    var plan_description = $("#plan_description").val();
    var plan_amount = $("#plan_amount").val();
    var plan_interval = $("#plan_interval").val();
    var plan_intervalCount = $("#plan_intervalCount").val();
    var plan_trial_period = $("#plan_trial_period").val();

    $.ajax({
        type:'POST',
        url: '/subscription/plan/create',
        data:{plan_name: plan_name, plan_description: plan_description, plan_amount: plan_amount,
            plan_interval: plan_interval, plan_intervalCount: plan_intervalCount, plan_trial_period:plan_trial_period },
        success:function(response){
            if (response.success){
                $("#modals-slide-in").modal('hide');
                Swal.fire(
                    response.success,
                    'You clicked the button!',
                    'success'
                ).then((result) => {
                    window.location.href = '/subscription/plan';
                })
            }

        }
    });
}




function removestaff(staffId) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ml-1'
        },
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {

            $.ajax({
                type: 'POST',
                url: '/stripe/plan/delete/'+ staffId,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    }).then((result) => {
                        window.location.href = "/subscription/plan";
                    });

                }
            });

        }
    });



}


function editStaffDetails(planId){
    $.ajax({
        type: 'GET',
        url: '/stripe/plan/edit/'+ planId,
        success: function (response) {
            if (response.plan){
                $("#modals-slide-in").modal('show');

                $("#submitBtn").addClass('d-none');
                $("#updatedBtn").removeClass('d-none');

                $("#old_id").val(response.plan.id);
                $("#plan_id").val(response.plan.plan_id);
                $("#plan_name").val(response.plan.plan_name);
                var description = $(response.plan.plan_description).text();
                $("textarea#plan_description").text(description);

                $("#plan_interval").val(response.plan.plan_interval);
                $("#plan_interval").attr('disabled', true);

                var amount = response.plan.plan_amount;

                $("#plan_amount").val(amount / 100);
                $("#plan_amount").attr('disabled', true);

                $("#plan_intervalCount").val(response.plan.plan_intervalCount);
                $("#plan_intervalCount").attr('disabled', true);

                $("#plan_trial_period").val(response.plan.trial_period_days);
                $("#plan_trial_period").attr('disabled', true);

                var checkbox = response.plan.trial_period_days;

                if (checkbox !== null){
                    $("#trial_check").attr('checked', 'checked');
                    var trial_check_input = document.getElementById('plan_trial_period');
                    trial_check_input.style.display = '';

                    $("#plan_trial_period").attr('disabled', true);
                }
                $("#exampleModalLabel").text("Update subscription plan");

            }


        }
    });
}




function updateSubscriptionbData(){

    var id = $("#old_id").val();
    var plan_id = $("#plan_id").val();
    var plan_name = $("#plan_name").val();
    var plan_description = $("#plan_description").val();
    var plan_amount = $("#plan_amount").val();
    var plan_interval = $("#plan_interval").val();
    var plan_intervalCount = $("#plan_intervalCount").val();
    var plan_trial_period = $("#plan_trial_period").val();

    $.ajax({
        type:'POST',
        url: '/stripe/plan/edit/' + id + '/' + plan_id,
        data:{id: id, plan_name: plan_name, plan_description: plan_description, plan_amount: plan_amount,
            plan_interval: plan_interval, plan_intervalCount: plan_intervalCount, plan_trial_period:plan_trial_period },
        success:function(response){
            if (response.success){
                $("#modals-slide-in").modal('hide');
                Swal.fire(
                    response.success,
                    'You clicked the button!',
                    'success'
                ).then((result) => {
                     window.location.href = "/subscription/plan";
                })
            }
        },
        error: function (reject){
            $("#modals-slide-in").modal('hide');

            if( reject.status === 422 ) {
                var errors = $.parseJSON(reject.responseText);
                Swal.fire(
                    errors.message,
                    'You clicked the button!',
                    'warning'
                ).then((result) => {
                    window.location.href = "/subscription/plan";
                })
            }

        }
    });
}
