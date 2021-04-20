$(function () {
    'use strict';

    // Close select2 on modal open
    var applyChangesBtn = $('.btn-apply-changes'),

        select2 = $('.roleto'),
        btnAddNewItem = $('.btn-add-new '),
        adminDetails = {};


    // Close select2 on modal open
    $(document).on('click', '.add-new-customer', function () {
        var name = $(".select2-search__field").val();
        if(name == "")
        {
            $(".select2-search__field").css("border","1px solid red");
            return false;
        }

        $.ajax({
            url: staff_role_add_url,
            data: {
                "_token": csrf_token,
                "name": name
            },
            type:'POST',
            dataType: "JSON",
            success(response){
                if(response.success)
                {
                    window.location.href = '/role';
                }
            }
        })
    });

    // Select2
    if (select2.length) {
        select2.select2({
            placeholder: 'Create New Role',
            dropdownParent: $('.new-role')
        });


        select2.on('select2:open', function () {
            if (!$(document).find('.add-new-customer').length) {
                $(document)
                    .find('.select2-results__options')
                    .before(
                        '<div class="add-new-customer btn btn-flat-success cursor-pointer rounded-0 text-left mb-50 p-50 w-100" data-toggle="modal" data-target="#add-new-customer-sidebar">' +
                        feather.icons['plus'].toSvg({ class: 'font-medium-1 mr-50' }) +
                        '<span class="align-middle">Add New Role</span></div>'
                    );
            }
        });
    }
});
