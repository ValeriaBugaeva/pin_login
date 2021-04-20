/*=========================================================================================
    File Name: app-todo.js
    Description: app-todo
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

'use strict';

$(function () {
  var taskTitle,
    flatPickr = $('.task-due-date'),
    newTaskModal = $('.sidebar-todo-modal'),
    newTaskForm = $('#form-modal-todo'),
    favoriteStar = $('.todo-item-favorite'),
    modalTitle = $('.modal-title'),
    addBtn = $('.add-todo-item'),
    addTaskBtn = $('.add-task button'),
    updateTodoItem = $('.update-todo-item'),
    updateBtns = $('.update-btn'),
    taskDesc = $('#task-desc'),
    taskAssignSelect = $('#task-assigned'),
    taskTag = $('#task-tag'),
    overlay = $('.body-content-overlay'),
    menuToggle = $('.menu-toggle'),
    sidebarToggle = $('.sidebar-toggle'),
    sidebarLeft = $('.sidebar-left'),
    sidebarMenuList = $('.sidebar-menu-list'),
    todoFilter = $('#todo-search'),
    sortAsc = $('.sort-asc'),
    sortDesc = $('.sort-desc'),
    todoTaskList = $('.todo-task-list'),
    todoTaskListWrapper = $('.todo-task-list-wrapper'),
    listItemFilter = $('.list-group-filters'),
    listItemLabels = $('.list-group-labels'),
    noResults = $('.no-results'),
    checkboxId = 100;

  var assetPath = '../../../app-assets/';
  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
  }

  // if it is not touch device
  if (!$.app.menu.is_touch_device()) {
    if (sidebarMenuList.length > 0) {
      var sidebarListScrollbar = new PerfectScrollbar(sidebarMenuList[0], {
        theme: 'dark'
      });
    }
    if (todoTaskListWrapper.length > 0) {
      var taskListScrollbar = new PerfectScrollbar(todoTaskListWrapper[0], {
        theme: 'dark'
      });
    }
  }
  // if it is a touch device
  else {
    sidebarMenuList.css('overflow', 'scroll');
    todoTaskListWrapper.css('overflow', 'scroll');
  }

  // Add class active on click of sidebar filters list
  if (listItemFilter.length) {
    listItemFilter.find('a').on('click', function () {
      if (listItemFilter.find('a').hasClass('active')) {
        listItemFilter.find('a').removeClass('active');
      }
      $(this).addClass('active');
    });
  }
  // Add class active on click of sidebar Label list
  if (listItemLabels.length) {
    listItemLabels.find('a').on('click', function () {
      if (listItemLabels.find('a').hasClass('active')) {
        listItemLabels.find('a').removeClass('active');
      }
      $(this).addClass('active');
    });
  }

  // Init D'n'D
  var dndContainer = document.getElementById('todo-task-list');
  if (typeof dndContainer !== undefined && dndContainer !== null) {
    dragula([dndContainer], {
      moves: function (el, container, handle) {
        return handle.classList.contains('drag-icon');
      }
    });
  }

  // Main menu toggle should hide app menu
  if (menuToggle.length) {
    menuToggle.on('click', function (e) {
      sidebarLeft.removeClass('show');
      overlay.removeClass('show');
    });
  }

  // Todo sidebar toggle
  if (sidebarToggle.length) {
    sidebarToggle.on('click', function (e) {
      e.stopPropagation();
      sidebarLeft.toggleClass('show');
      overlay.addClass('show');
    });
  }

  // On Overlay Click
  if (overlay.length) {
    overlay.on('click', function (e) {
      sidebarLeft.removeClass('show');
      overlay.removeClass('show');
      $(newTaskModal).modal('hide');
    });
  }

  // Assign task
    function assignTask(option) {
        if (!option.id) {
            return option.text;
        }
        var $person =
            "<div class='d-flex flex-wrap align-items-center'>" +
            "<div class='avatar avatar-sm my-0 mr-50'>" +
            '</div>' +
            option.text +
            '</div>';

        return $person;
    }

    // Task Assign Select2
    if (taskAssignSelect.length) {
        taskAssignSelect.wrap('<div class="position-relative"></div>');
        taskAssignSelect.select2({
            placeholder: 'Search for Staffs',
            dropdownParent: taskAssignSelect.parent(),
            templateResult: assignTask,
            templateSelection: assignTask,
            escapeMarkup: function (es) {
                return es;
            }
        });
    }

  // Task Tags
  if (taskTag.length) {
    taskTag.wrap('<div class="position-relative"></div>');
    taskTag.select2({
      placeholder: 'Select tag'
    });
  }

  // Favorite star click
  if (favoriteStar.length) {
    $(favoriteStar).on('click', function () {
      $(this).toggleClass('text-warning');
    });
  }

  // Flat Picker
  if (flatPickr.length) {
    flatPickr.flatpickr({
      dateFormat: 'd-m-Y',
      defaultDate: 'today',
      onReady: function (selectedDates, dateStr, instance) {
        if (instance.isMobile) {
          $(instance.mobileInput).attr('step', null);
        }
      }
    });
  }

  // Todo Description Editor
  if (taskDesc.length) {
    var todoDescEditor = new Quill('#task-desc', {
      bounds: '#task-desc',
      modules: {
        formula: true,
        syntax: true,
        toolbar: '.desc-toolbar'
      },
      placeholder: 'Write Your Description',
      theme: 'snow'
    });
  }

  // On add new item button click, clear sidebar-right field fields
  if (addTaskBtn.length) {
    addTaskBtn.on('click', function (e) {
      addBtn.removeClass('d-none');
      updateBtns.addClass('d-none');
      modalTitle.text('Add Task');
      // newTaskModal.modal('show');
      sidebarLeft.removeClass('show');
      overlay.removeClass('show');
      newTaskModal.find('.new-todo-item-title').val('');
      var quill_editor = taskDesc.find('.ql-editor');
      quill_editor[0].innerHTML = '';
    });
  }

  // Add New ToDo List Item

  // To add new todo form
  if (newTaskForm.length) {
    newTaskForm.validate({
      ignore: '.ql-container *', // ? ignoring quill editor icon click, that was creating console error
      rules: {
        todoTitleAdd: {
          required: true
        },
        'task-assigned': {
          required: true
        },
        'task-due-date': {
          required: true
        }
      }
    });

    newTaskForm.on('submit', function (e) {
      e.preventDefault();
      var isValid = newTaskForm.valid();
      if (isValid) {
        checkboxId++;
        var assignedTo = $('#task-assigned').val(),
          todoBadge = '',
          membersImg = {
            'Phill Buffer': assetPath + 'images/portrait/small/avatar-s-3.jpg',
            'Chandler Bing': assetPath + 'images/portrait/small/avatar-s-1.jpg',
            'Ross Geller': assetPath + 'images/portrait/small/avatar-s-4.jpg',
            'Monica Geller': assetPath + 'images/portrait/small/avatar-s-6.jpg',
            'Joey Tribbiani': assetPath + 'images/portrait/small/avatar-s-2.jpg',
            'Rachel Green': assetPath + 'images/portrait/small/avatar-s-11.jpg'
          };

        var todoTitle = $('.sidebar-todo-modal .new-todo-item-title').val();
        var date = $('.sidebar-todo-modal .task-due-date').val(),
          selectedDate = new Date(date),
          month = new Intl.DateTimeFormat('en', { month: 'short' }).format(selectedDate),
          day = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(selectedDate),
          todoDate = month + ' ' + day;

        // Badge calculation loop
        var selected = $('.task-tag').val();
        var selectedAss = $('.task-assigned').val();
        var badgeColor = {
          Team: 'primary',
          Low: 'success',
          Medium: 'warning',
          High: 'danger',
          Update: 'info'
        };

        $.each(selected, function (index, value) {
          todoBadge += '<div class="badge badge-pill badge-light-' + badgeColor[value] + ' mr-50">' + value + '</div>';
        });

        $.each(selectedAss, function (index, value) {
          todoBadge += '<div class="badge badge-pill badge-light-' + badgeColor[value] + ' mr-50">' + value + '</div>';
        });

        // HTML Output
        if (todoTitle != '') {
          $(todoTaskList).prepend(
            '<li class="todo-item">' +
              '<div class="todo-title-wrapper">' +
              '<div class="todo-title-area">' +
              feather.icons['more-vertical'].toSvg({ class: 'drag-icon' }) +
              '<div class="title-wrapper">' +
              '<div class="custom-control custom-checkbox">' +
              '<input type="checkbox" class="custom-control-input" id="customCheck' +
              checkboxId +
              '" />' +
              '<label class="custom-control-label" for="customCheck' +
              checkboxId +
              '"></label>' +
              '</div>' +
              '<span class="todo-title">' +
              todoTitle +
              '</span>' +
              '</div>' +
              '</div>' +
              '<div class="todo-item-action">' +
              '<div class="badge-wrapper mr-1">' +
              todoBadge +
              '</div>' +
              '<small class="text-nowrap text-muted mr-1">' +
              todoDate +
              '</small>' +
              '<div class="avatar">' +
              '<img src="' +
              membersImg[assignedTo] +
              '" alt="' +
              assignedTo +
              '" height="28" width="28">' +
              '</div>' +
              '</div>' +
              '</div>' +
              '</li>'
          );
        }
        toastr['success']('Data Saved', '💾 Task Action!', {
          closeButton: true,
          tapToDismiss: false
        });
        $(newTaskModal).modal('hide');
        overlay.removeClass('show');
      }
    });
  }

  // Task checkbox change
  todoTaskListWrapper.on('change', '.custom-checkbox', function (event) {
    var $this = $(this).find('input');
    if ($this.prop('checked')) {
      $this.closest('.todo-item').addClass('completed');
      toastr['success']('Task Completed', 'Congratulations!! 🎉', {
        closeButton: true,
        tapToDismiss: false
      });
    } else {
      $this.closest('.todo-item').removeClass('completed');
    }
  });
  todoTaskListWrapper.on('click', '.custom-checkbox', function (event) {
    event.stopPropagation();
  });

  // To open todo list item modal on click of item
  $(document).on('click', '.todo-task-list-wrapper .todo-item', function (e) {
    newTaskModal.modal('show');
    addBtn.addClass('d-none');
    updateBtns.removeClass('d-none');
    taskTag.val('').trigger('change');
    taskAssignSelect.val('').trigger('change');
    //var quill_editor = $('#task-desc .ql-editor'); // ? Dummy data as not connected with API or anything else
    //quill_editor[0].innerHTML ='Chocolate cake topping bonbon jujubes donut sweet wafer. Marzipan gingerbread powder brownie bear claw. Chocolate bonbon sesame snaps jelly caramels oat cake.';
    taskTitle = $(this).find('.todo-title');
    var $title = $(this).find('.todo-title').html();
    newTaskForm.find('.new-todo-item-title').val($title);
    var taskId = $(this).find('.todo-id').html();
    // apply all variable values to fields
    $.ajax({
        type:'POST',
        url:'gettaskdetails',
        data:{taskId},
        success:function(response){
            var quill_editor = $('#task-desc .ql-editor'); // ? Dummy data as not connected with API or anything else
            quill_editor[0].innerHTML = response[0].description;
            if (response[0].status == "Completed") {
                $('.modal-title').html(
                  '<button type="button" class="btn btn-sm btn-outline-success complete-todo-item waves-effect waves-float waves-light" data-dismiss="modal">Completed</button>'
                );
            } else {
                $('.modal-title').html(
                  '<a href="javascript:void(0);" data-status="Completed" data-id='+response[0].id+' onclick="updateTaskStatus(this);" class="btn btn-sm btn-outline-secondary complete-todo-item waves-effect waves-float waves-light">Mark Complete</a>'
                );
            }
            $("#taskId").val(response[0].id);
            $("#deletebutton,#importantstatus").attr("data-id",response[0].id);
            $("#importantstatus").attr('onclick',"updateTaskStatus(this);");
            //$("#importantstatus").attr('data-status',"Important");
            $("#todoTitleAdd").val(response[0].title);

            var userId = response[0].user_id;
            var authId = $("#authId").val();

            if (userId == authId){
                $("#actionButton").removeClass('d-none');
            }else {
                $("#actionButton").addClass('d-none');
            }


            $("#task-tag").val(response[0].tag);
            $('select#task-tag').val(response[0].tag)
            $('#task-tag').val(response[0].tag).trigger('change');

            $("#task-assigned").val(response[0].assignee);
            $('select#task-assigned').val(response[0].assignee)
            $('#task-assigned').val(response[0].assignee).trigger('change');

            var stfHtml = '<div class="avatar bg-light-warning"><div class="avatar-content">'+response[0].stfName+'</div></div>&nbsp;&nbsp;'+response[0].staffName;
            //$("#select2-task-assigned-container").text(response[0].staffName);
            $("#select2-task-assigned-container").html(stfHtml);
            //$("#task-desc").text(response[0].description);
            if (response[0].status == "Important") {
                $("#importantstatus").addClass("text-warning");
                $("#importantstatus").attr('data-status',"Important");
            }else{
                $("#importantstatus").removeClass("text-warning");
                $("#importantstatus").attr('data-status',"Important");
            }
            $("#task-due-date").val(response[0].due_date);
        }
    });
  });

  // Updating Data Values to Fields
  if (updateTodoItem.length) {
    updateTodoItem.on('click', function (e) {
      var isValid = newTaskForm.valid();
      e.preventDefault();
      if (isValid) {
        var $edit_title = newTaskForm.find('.new-todo-item-title').val();
        $(taskTitle).text($edit_title);

        toastr['success']('Data Saved', '💾 Task Action!', {
          closeButton: true,
          tapToDismiss: false
        });
        $(newTaskModal).modal('hide');
      }
    });
  }

  // Sort Ascending
  if (sortAsc.length) {
    sortAsc.on('click', function () {
      todoTaskListWrapper
        .find('li')
        .sort(function (a, b) {
          return $(b).find('.todo-title').text().toUpperCase() < $(a).find('.todo-title').text().toUpperCase() ? 1 : -1;
        })
        .appendTo(todoTaskList);
    });
  }
  // Sort Descending
  if (sortDesc.length) {
    sortDesc.on('click', function () {
      todoTaskListWrapper
        .find('li')
        .sort(function (a, b) {
          return $(b).find('.todo-title').text().toUpperCase() > $(a).find('.todo-title').text().toUpperCase() ? 1 : -1;
        })
        .appendTo(todoTaskList);
    });
  }

  // Filter task
  if (todoFilter.length) {
    todoFilter.on('keyup', function () {
      var value = $(this).val().toLowerCase();
      if (value !== '') {
        $('.todo-item').filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
        var tbl_row = $('.todo-item:visible').length; //here tbl_test is table name

        //Check if table has row or not
        if (tbl_row == 0) {
          if (!$(noResults).hasClass('show')) {
            $(noResults).addClass('show');
          }
        } else {
          $(noResults).removeClass('show');
        }
      } else {
        // If filter box is empty
        $('.todo-item').show();
        if ($(noResults).hasClass('show')) {
          $(noResults).removeClass('show');
        }
      }
    });
  }

  // For chat sidebar on small screen
  if ($(window).width() > 992) {
    if (overlay.hasClass('show')) {
      overlay.removeClass('show');
    }
  }
});

$(window).on('resize', function () {
  // remove show classes from sidebar and overlay if size is > 992
  if ($(window).width() > 992) {
    if ($('.body-content-overlay').hasClass('show')) {
      $('.sidebar-left').removeClass('show');
      $('.body-content-overlay').removeClass('show');
      $('.sidebar-todo-modal').modal('hide');
    }
  }
});

$(document).ready(function(){
    $.ajaxSetup({
       headers:{
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
    });
});



function submitTaskData(){
   var taskId = $("#taskId").val();
   var title = $("#todoTitleAdd").val();
   var assignee = $("#task-assigned").val();
   var due_date = $("#task-due-date").val();
   var tag = $("#task-tag").val();
   //var description = $("#task-desc").text();
   var description = $("#task-desc").find('.ql-editor').html();
   var taskDetailsArr = new Object();
   taskDetailsArr['taskId'] = taskId;
   taskDetailsArr['title'] = title;
   taskDetailsArr['assignee'] = assignee;
   taskDetailsArr['due_date'] = due_date;
   taskDetailsArr['tag'] = tag;
   taskDetailsArr['description'] = description;
   $(".title_errormessage,.assignee_errormessage,.assignee_errormessage,.tag_errormessage,.description_errormessage").text('');
   $.ajax({
        type:'POST',
        url:'/add_task',
        data:{taskDetailsArr},
        success:function(response){
         if(response.status == 1) {
                // if(taskId > 0){
                //     alert('Task details updated successfully.');
                // }else{
                //     alert('Task added successfully.');
                // }
                window.location.href = "/todo";
            } else {
                if(response.error.title_errormessage) {
                    $(".title_errormessage").text(response.error.title_errormessage);
                }
                if(response.error.assignee_errormessage) {
                    $(".assignee_errormessage").text(response.error.assignee_errormessage);
                }
                if(response.error.assignee_errormessage) {
                    $(".assignee_errormessage").text(response.error.assignee_errormessage);
                }
                if(response.error.tag_errormessage) {
                    $(".tag_errormessage").text(response.error.tag_errormessage);
                }
                if(response.error.description_errormessage) {
                    $(".description_errormessage").text(response.error.description_errormessage);
                }
            }
        }
    });
}



function updateTaskStatus(elem){
    var taskId = $(elem).attr("data-id");
    var updateStatus = $(elem).attr("data-status");
    var taskStatusArr = new Object();
    taskStatusArr['taskId'] = taskId;
    taskStatusArr['status'] = updateStatus;
    $.ajax({
        type:'POST',
        url:'updatetaskstatus',
        data:{taskStatusArr},
        success:function(response){
            //alert(response.message);
            if(response.status > 0){
                window.location.href = "/todo";
            }
        }
    });
}

function getTaskList(elem){
    var filterId = $(elem).attr("data-id");
    var filterName = $(elem).attr("data-name");
    //alert(filterId+"=="+filterName);
    var taskStatusArr = new Object();
    taskStatusArr['filterId'] = filterId;
    taskStatusArr['filterName'] = filterName;
    $.ajax({
        type:'POST',
        url:'todo',
        data:{taskStatusArr},
        success:function(response){
            alert(response.length);

        }
    });
}
