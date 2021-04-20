$(function () {
    'use strict';

    var dtUserTable = $('.roles-list-table'),
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
        commonPath = assetPath + 'role/';
    }

    // Users List datatable
    if (dtUserTable.length) {
        dtUserTable.DataTable({
            processing: true,
            serverSide: true,
            ajax:
                {
                    url: '/role/role_listajax',
                    type: 'GET',
                },
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'avatar'},
                {data: 'action'},
            ],
            columnDefs: [
                // {
                //     // Due Date
                //     targets: 2,
                //     render: function (data, type, full, meta) {
                //         var $dueDate = new Date(full['created_at']);
                //         // Creates full output for row
                //         var $rowOutput =
                //             '<span class="d-none">' +
                //             moment($dueDate).format('DD-MM-YYYY H:m') +
                //             '</span>' +
                //             moment($dueDate).format('DD-MM-YYYY H:m');
                //         $dueDate;
                //         return $rowOutput;
                //     }
                // },

                {
                    // Due Date
                    targets: 2,
                    render: function (data, type, full, meta) {
                        var $avatar = full['avatar'];

                        var $output = [];
                        $avatar.forEach(function (data){
                            $output.push('<div class="avatar-group role-avatar-group">' +
                            '<div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="'+ data.fullname +'" class="avatar pull-up">' +
                            '<div class="avatar-content">' +
                            '<img src="'+ data.avatar +'" alt="user-avatar" title="'+ data.fullname +'" height="32" width="32" />' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                            )
                        })
                        return $output;

                        // return $avatar;
                        // Creates full output for ro
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    width: '120px',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return (
                            '<div class="d-flex align-items-center col-actions">' +
                            '<a class="mr-1" href="' +
                            commonPath + full['id'] +
                            '" data-toggle="tooltip" data-placement="top" title="Add Permission">' +
                            feather.icons['shield'].toSvg({class: 'font-medium-2'}) +
                            '</a>' +
                            '<a class="mr-1" Onclick="editStaffDetails('+full['id']+')" data-toggle="tooltip" data-placement="top" title="Edit">' +
                            feather.icons['edit'].toSvg({ class: 'font-medium-2' }) +
                            '</a>' +
                            '<a class="mr-1" onClick=removestaff(' + full['id'] + ');"  data-toggle="tooltip" data-placement="top" title="Delete">' +
                            feather.icons['trash'].toSvg({ class: 'font-medium-2' }) +
                            '</a>' +
                            '</div>'
                        );
                    }
                }
            ],
            order: [[0, 'ASC']],
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
                    text: 'Create Role',
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

    // To initialize tooltip with body container
    $('body').tooltip({
        selector: '[data-toggle="tooltip"]',
        container: 'body'
    });
    $(".delete-record").on('click',function () {
        alert("sdfs");
    });

    $(".add-new").on('click', function (){
        $("#exampleModalLabel").text('Create new role');
        $("#submitBtn").removeClass('d-none');
        $("#updatedBtn").addClass('d-none');

        $(".add-new-user")[0].reset();

    })

});



$(document).ready(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});



function submitRoleData(){
    var name = $("#name").val();
    $.ajax({
        type:'POST',
        url: '/staff_role/add',
        data:{name: name},
        success:function(response){
            if (response.success){
                $("#modals-slide-in").modal('hide');
                Swal.fire(
                    response.success,
                    'You clicked the button!',
                    'success'
                ).then((result) => {
                    window.location.href = '/role';
                })
            }

        }
    });
}




function updateRoleData(){
    var id = $("#roleId").val();
    var name = $("#name").val();

    $.ajax({
        type:'POST',
        url: '/role/update',
        data:{id: id, name: name},
        success:function(response){
            if (response.success){
                $("#modals-slide-in").modal('hide');
                Swal.fire(
                    response.success,
                    'You clicked the button!',
                    'success'
                ).then((result) => {
                    window.location.href = '/role';
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
                    window.location.href = '/role';
                })
            }

        }
    });
}


function editStaffDetails(staffId) {
    $.ajax({
        type: 'GET',
        url: '/role/edit/'+ staffId,
        success: function (response) {
            $("#modals-slide-in").modal('show');

            $("#submitBtn").addClass('d-none');
            $("#updatedBtn").removeClass('d-none');

            var data = response.role;
            $("#name").val(data.name);
            $("#roleId").val(data.id);
            $("#exampleModalLabel").text("Update role");
        }
    });
}


