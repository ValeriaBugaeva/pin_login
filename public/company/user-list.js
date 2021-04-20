$(function () {
    'use strict';

    var dtUserTable = $('.user-list-table'),
        statusObj = {
            'pending': {title: 'Pending', class: 'badge-light-warning'},
            'active': {title: 'Active', class: 'badge-light-success'},
            'inactive': {title: 'Inactive', class: 'badge-light-secondary'}
        };

    var assetPath = '../../../app-assets/';
    var commonPath = assetPath;

    // Users List datatable
    if (dtUserTable.length) {
        dtUserTable.DataTable({
            processing: true,
            serverSide: true,
            ajax:
                {
                    url: '/user/show',
                    type: 'GET',
                },
            columns: [
                /* {data: 'fullname'}, */
                {data: 'avatar', name: 'avatar'},
                {data: 'stripe_subscriptionId', name: 'stripe_subscriptionId'},
                {data: 'stripe_subscriptionId', name: 'stripe_subscriptionId'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action'},
            ],


            columnDefs: [
                {
                    // User full name and username
                    targets: 0,
                    responsivePriority: 4,
                    render: function (data, type, full, meta) {
                        if (full['username'] === 'admin'){
                            var $name = full['fullname'],
                                $uname = full['username'],
                                $image = full['avatar'];
                        }else {
                            var $name = full['fullname'],
                                $uname = full['username'],
                                $image = full['avatar'];
                        }
                        if ($image) {
                            // For Avatar image
                            var $output =
                                '<img src="' + $image + '"  alt="Avatar" height="32" width="32">';
                        } else {
                            // For Avatar badge
                            var stateNum = Math.floor(Math.random() * 6) + 1;
                            var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
                            var $state = states[stateNum],
                                $name = full['username'],
                                $initials = $name.match(/\b\w/g) || [];
                            $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                            $output = '<span class="avatar-content">' + $initials + '</span>';
                        }
                        var colorClass = $image === '' ? ' bg-light-' + $state + ' ' : '';
                        // Creates full output for row
                        var $row_output =
                            '<div class="d-flex justify-content-left align-items-center">' +
                            '<div class="avatar-wrapper">' +
                            '<div class="avatar ' +
                            colorClass +
                            ' mr-1">' +
                            $output +
                            '</div>' +
                            '</div>' +
                            '<div class="d-flex flex-column">' +
                            '<a href="' +
                            commonPath + full['id'] +
                            '" class="user_name text-truncate"><span class="font-weight-bold">' +
                            $name +
                            '</span></a>' +
                            '<small class="emp_post text-muted">@' +
                            $uname +
                            '</small>' +
                            '</div>' +
                            '</div>';
                        return $row_output;
                    }
                },

                {
                    // User Status
                    targets: 3,
                    render: function (data, type, full, meta) {
                        var $status = full['status'];
                        return (
                            '<span class="badge badge-pill ' +
                            statusObj[$status].class +
                            '" text-capitalized>' +
                            statusObj[$status].title +
                            '</span>'
                        );
                    }
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
                            '<a href="/impersonate/take/' + full['id'] +
                            '" class="dropdown-item">' +
                            feather.icons['eye'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Log as</a>'+

                            '<a onclick="editStaffDetails('+ full['id']+')" href="javascript:;" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Edit</a>'+

                            '<a href="javascript:;" onClick=removeUser(' + full['id'] + '); class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({class: 'font-small-4 mr-50'}) +
                            'Delete</a></div>' +
                            '</div>' +
                            '</div>'
                        );
                    }
                },

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
                    text: 'Add New Staff',
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

            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
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

            initComplete: function () {
                // Adding role filter once table initialized
                this.api()
                    .columns(1)
                    .every(function () {
                        var column = this;
                        var select = $(
                            '<select id="UserRole" class="form-control text-capitalize mb-md-0 mb-2"><option value=""> Select Role </option></select>'
                        )
                            .appendTo('.user_role')
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                            });
                    });
                // Adding plan filter once table initialized
                this.api()
                    .columns(1)
                    .every(function () {
                        var column = this;
                        var select = $(
                            '<select id="UserPlan" class="form-control text-capitalize mb-md-0 mb-2"><option value=""> Select Plan </option></select>'
                        )
                            .appendTo('.user_plan')
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                            });
                    });
                // Adding status filter once table initialized
                this.api()
                    .columns(3)
                    .every(function () {
                        var column = this;
                        var select = $(
                            '<select id="FilterTransaction" class="form-control text-capitalize mb-md-0 mb-2xx"><option value=""> Select Status </option></select>'
                        )
                            .appendTo('.user_status')
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append(
                                    '<option value="' +
                                    statusObj[d].title +
                                    '" class="text-capitalize">' +
                                    statusObj[d].title +
                                    '</option>'
                                );
                            });
                    });
            },

        });
    };

});

function editStaffDetails(staffId){
    $.ajax({
        type: 'GET',
        url: '/user/edit/'+staffId,
        data: {staffId},
        success: function (response) {
            window.location.href = "/user/edit/"+staffId;
        }
    });
}

function removeUser(staffId){
    $.ajax({
        type: 'GET',
        url: '/user/delete/'+staffId,
        data: {staffId},
        success: function (response) {
            alert('User removed successfully.');
            window.location.href = "/user";
        }
    });
}
