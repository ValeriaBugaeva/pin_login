/**
 * App Calendar
 */

/**
 * ! If both start and end dates are same Full calendar will nullify the end date value.
 * ! Full calendar will end the event on a day before at 12:00:00AM thus, event won't extend to the end date.
 * ! We are getting events from a separate file named app-calendar-events.js. You can add or remove events from there.
 **/

'use-strict';

// RTL Support
var direction = 'ltr',
    assetPath = '../../../app-assets/';
if ($('html').data('textdirection') == 'rtl') {
    direction = 'rtl';
}

if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
}

$(document).on('click', '.fc-sidebarToggle-button', function (e) {
    $('.app-calendar-sidebar, .body-content-overlay').addClass('show');
});

$(document).on('click', '.body-content-overlay', function (e) {
    $('.app-calendar-sidebar, .body-content-overlay').removeClass('show');
});


$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar'),
        eventToUpdate,
        sidebar = $('.event-sidebar'),
        calendarsColor = {
            Business: 'primary',
            Holiday: 'success',
            Personal: 'danger',
            Family: 'warning',
            ETC: 'info',
            TODO: 'warning'
        },

        eventForm = $('.event-form'),
        addEventBtn = $('.add-event-btn'),
        cancelBtn = $('.btn-cancel'),
        updateEventBtn = $('.update-event-btn'),
        toggleSidebarBtn = $('.btn-toggle-sidebar'),
        eventTitle = $('#title'),
        eventLabel = $('#select-label'),
        startDate = $('#start-date'),
        endDate = $('#end-date'),
        eventUrl = $('#event-url'),
        eventGuests = $('#event-guests'),
        eventTodos = $('#event-todos'),
        eventLocation = $('#event-location'),
        allDaySwitch = $('.allDay-switch'),
        selectAll = $('.select-all'),
        calEventFilter = $('.calendar-events-filter'),
        filterInput = $('.input-filter'),
        btnDeleteEvent = $('.btn-delete-event'),
        eventDetails = $(".dtr-bs-modal"),
        detailsTitle = $("#eventTitle"),
        eventId = $("#eventId"),
        eventDetLabel = $("#eventDetLabel"),
        eventStartDate = $("#eventStartDate"),
        eventEndDate = $("#eventEndDate"),
        eventDetailsUrl = $("#eventDetailsUrl"),
        eventDetailsLocation = $("#eventDetailsLocation"),
        eventDescription = $("#eventDescription"),
        editEvent = $("#editEvent"),
        eventToDoTitle = $("#eventToDoTitle"),
        eventUserId = $("#eventUserId"),
        taskAssignSelect = $('#task-assigned'),
        calendarEditor = $('#event-description-editor');


    // --------------------------------------------
    // On add new item, clear sidebar-right field fields
    // --------------------------------------------
    $('.add-event button').on('click', function (e) {
        $('.event-sidebar').addClass('show');
        $('.sidebar-left').removeClass('show');
        $('.app-calendar .body-content-overlay').addClass('show');
    });

    // Label  select
    if (eventLabel.length) {
        function renderBullets(option) {
            if (!option.id) {
                return option.text;
            }
            var $bullet =
                "<span class='bullet bullet-" +
                $(option.element).data('label') +
                " bullet-sm mr-50'> " +
                '</span>' +
                option.text;

            return $bullet;
        }

        eventLabel.wrap('<div class="position-relative"></div>').select2({
            placeholder: 'Select value',
            dropdownParent: eventLabel.parent(),
            templateResult: renderBullets,
            templateSelection: renderBullets,
            minimumResultsForSearch: -1,
            escapeMarkup: function (es) {
                return es;
            }
        });
    }

    // Guests select
    if (eventGuests.length) {
        function renderGuestAvatar(option) {
            if (!option.id) {
                return option.text;
            }

            var $avatar =
                "<div class='d-flex flex-wrap align-items-center'>" +
                "<div class='avatar avatar-sm my-0 mr-50'>" +
                "<span class='avatar-content'>" +
                "<img src='" +
                $(option.element).data('avatar') +
                "' alt='avatar' />" +
                '</span>' +
                '</div>' +
                option.text +
                '</div>';

            return $avatar;
        }

        eventGuests.wrap('<div class="position-relative"></div>').select2({
            placeholder: 'Select value',
            dropdownParent: eventGuests.parent(),
            closeOnSelect: false,
            templateResult: renderGuestAvatar,
            templateSelection: renderGuestAvatar,
            escapeMarkup: function (es) {
                return es;
            }
        });
    }


    // Todos select
    if (eventTodos.length) {
        function renderGuestAvatar(option) {
            if (!option.id) {
                return option.text;
            }

            var $avatar =
                "<div class='d-flex flex-wrap align-items-center'>" +
                option.text +
                '</div>';

            return $avatar;
        }

        eventTodos.wrap('<div class="position-relative"></div>').select2({
            placeholder: 'Select value',
            dropdownParent: eventTodos.parent(),
            closeOnSelect: false,
            templateResult: renderGuestAvatar,
            templateSelection: renderGuestAvatar,
            escapeMarkup: function (es) {
                return es;
            }
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
            "<span class='avatar-content'>" +
            "<img src='" +
            $(option.element).data('avatar') +
            "' alt='avatar' />" +
            '</span>' +
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
            allowClear: true,
            templateResult: assignTask,
            templateSelection: assignTask,
            escapeMarkup: function (es) {
                return es;
            }
        });
    }




    // Start date picker
    if (startDate.length) {
        var start = startDate.flatpickr({
            enableTime: true,
            dateFormat: "d-m-Y H:i",
            altFormat: 'd-m-YTH:i:S',
            onReady: function (selectedDates, dateStr, instance) {
                if (instance.isMobile) {
                    $(instance.mobileInput).attr('step', null);
                }
            }
        });
    }

    // End date picker
    if (endDate.length) {
        var end = endDate.flatpickr({
            enableTime: true,
            dateFormat: "d-m-Y H:i",
            altFormat: 'd-m-YTH:i:S',
            onReady: function (selectedDates, dateStr, instance) {
                if (instance.isMobile) {
                    $(instance.mobileInput).attr('step', null);
                }
            }
        });
    }


    // Event click function
    function eventClick(info) {
        eventToUpdate = info.event;
        if (eventToUpdate.url) {
            info.jsEvent.preventDefault();
            window.open(eventToUpdate.url, '_blank');
        }

        // Event details modal view
        eventDetails.modal('show');
        detailsTitle.text(eventToUpdate.title);

        eventDetLabel.text(eventToUpdate.extendedProps.calendar);

        const colorName = calendarsColor[eventToUpdate._def.extendedProps.calendar];

        if (colorName.length) {
            eventDetLabel.addClass('bg-light-' + colorName);
        }

        var formatStartDate = moment(eventToUpdate.startStr).format('DD-MM-YYYY h:mm');
        var formatEndDate = moment(eventToUpdate.endStr).format('DD-MM-YYYY h:mm');

        eventStartDate.text(formatStartDate);
        eventEndDate.text(formatEndDate);

        if (eventToUpdate.url === '') {
            eventDetailsUrl.text('Not provided');
        } else {
            eventDetailsUrl.text(eventToUpdate.url);
        }

        eventDetailsLocation.text(eventToUpdate.extendedProps.location);
        eventDescription.text(eventToUpdate.extendedProps.description);


        if (eventToUpdate.extendedProps.todos[0] === "") {
            eventToDoTitle.text('Not provided');
        } else {
            eventToDoTitle.text(eventToUpdate.extendedProps.todos);
        }


        var staffId = eventUserId.val();
        var userId = eventToUpdate.extendedProps.user_id;

        if (staffId != userId){
            $("#hideRow").addClass('d-none');
        }

        if (editEvent.length) {
            editEvent.click(function () {
                eventDetails.modal('hide');
                sidebar.modal('show');
            });
        }


        addEventBtn.addClass('d-none');
        cancelBtn.addClass('d-none');
        updateEventBtn.removeClass('d-none');
        btnDeleteEvent.removeClass('d-none');
        eventTitle.val(eventToUpdate.title);
        eventUrl.val(eventToUpdate.url);

        start.setDate(eventToUpdate.start, true, 'd-m-Y');
        eventToUpdate.allDay === true ? allDaySwitch.prop('checked', true) : allDaySwitch.prop('checked', false);

        eventToUpdate.end !== null
            ? end.setDate(eventToUpdate.end, true, 'd-m-Y')
            : end.setDate(eventToUpdate.start, true, 'd-m-Y');

        sidebar.find(eventLabel).val(eventToUpdate.extendedProps.calendar).trigger('change');
        eventToUpdate.extendedProps.location !== undefined ? eventLocation.val(eventToUpdate.extendedProps.location) : null;

        eventToUpdate.extendedProps.guests !== undefined
            ? eventGuests.val(eventToUpdate.extendedProps.guests).trigger('change')
            : null;

        eventToUpdate.extendedProps.todos !== undefined
            ? eventTodos.val(eventToUpdate.extendedProps.todos).trigger('change')
            : null;

        eventToUpdate.extendedProps.guests !== undefined
            ? calendarEditor.val(eventToUpdate.extendedProps.description)
            : null;

        //  Delete Event
        btnDeleteEvent.on('click', function () {
            var eventId = eventToUpdate.id;
            var staffId = eventUserId.val();
            var userId = eventToUpdate.extendedProps.user_id;

            if (staffId == userId){
                $.ajax({
                    type: 'POST',
                    url: '/calender-delete',
                    data: {eventId},
                    success: function (response) {
                        eventToUpdate.remove();
                        // removeEvent(eventToUpdate.id);
                        sidebar.modal('hide');
                        $('.event-sidebar').removeClass('show');
                        $('.app-calendar .body-content-overlay').removeClass('show');
                    }
                })
            }else {
                alert('You are not allowed to delete this event');
            }

        });
    }

    // Modify sidebar toggler
    function modifyToggler() {
        $('.fc-sidebarToggle-button')
            .empty()
            .append(feather.icons['menu'].toSvg({class: 'ficon'}));
    }

    // Selected Checkboxes
    function selectedCalendars() {
        var selected = [];
        $('.calendar-events-filter input:checked').each(function () {
            selected.push($(this).attr('data-value'));
        });
        return selected;
    }

    // --------------------------------------------------------------------------------------------------
    // AXIOS: fetchEvents
    // * This will be called by fullCalendar to fetch events. Also this can be used to refetch events.
    // --------------------------------------------------------------------------------------------------
    function fetchEvents(info, successCallback) {
        // Fetch Events from API endpoint reference

        //  $.ajax(
        //   {
        //       url: '/getCalenderTask',
        //       type: 'GET',
        //       success: function (result) {
        //
        //       // Get requested calendars as Array
        //       var calendars = selectedCalendars();
        //
        //       var filterArray = result.filter(function (item){
        //           return calendars.includes(item.extendedProps.calendar);
        //       })
        //
        //       return filterArray;
        //     },
        //     error: function (error) {
        //       console.log(error);
        //     }
        //   }
        // );

        var calendars = selectedCalendars();
        // We are reading event object from app-calendar-events.js file directly by including that file above app-calendar file.
        // You should make an API call, look into above commented API call for reference
        selectedEvents = events.filter(function (event) {
            // console.log(event.extendedProps.calendar.toLowerCase());
            return calendars.includes(event.extendedProps.calendar.toLowerCase());
        });
        // if (selectedEvents.length > 0) {
        successCallback(selectedEvents);
        // }
    };

    // Calendar plugins
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: fetchEvents,
        editable: true,
        dragScroll: true,
        dayMaxEvents: 2,
        eventResizableFromStart: true,
        customButtons: {
            sidebarToggle: {
                text: 'Sidebar'
            }
        },
        headerToolbar: {
            start: 'sidebarToggle, prev,next, title',
            end: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        direction: direction,
        initialDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        eventClassNames: function ({event: calendarEvent}) {
            const colorName = calendarsColor[calendarEvent._def.extendedProps.calendar];

            return [
                // Background Color
                'bg-light-' + colorName
            ];
        },
        dateClick: function (info) {
            var date = moment(info.date).format('DD-MM-YYYY');
            resetValues();
            sidebar.modal('show');
            addEventBtn.removeClass('d-none');
            updateEventBtn.addClass('d-none');
            btnDeleteEvent.addClass('d-none');
            startDate.val(date);
            endDate.val(date);
        },
        eventClick: function (info) {
            eventClick(info);
        },
        datesSet: function () {
            modifyToggler();
        },
        viewDidMount: function () {
            modifyToggler();
        }
    });

    // Render calendar
    calendar.render();
    // Modify sidebar toggler
    modifyToggler();
    // updateEventClass();

    // Validate add new and update form
    if (eventForm.length) {
        eventForm.validate({
            submitHandler: function (form, event) {
                event.preventDefault();
                if (eventForm.valid()) {
                    sidebar.modal('hide');
                }
            },
            title: {
                required: true
            },
            'start-date': {
                required: true
            },
            'end-date': {
                required: true
            }
        });
    }

    // Sidebar Toggle Btn
    if (toggleSidebarBtn.length) {
        toggleSidebarBtn.on('click', function () {
            cancelBtn.removeClass('d-none');
        });
    }

    // ------------------------------------------------
    // addEvent
    // ------------------------------------------------
    function addEvent(eventData) {
        $.ajax({
            type: 'POST',
            url: '/calender-add',
            data: {eventData},
            success: function (response) {
                window.location.href = "/calendar";
                // console.log(response);
            }
        })
        calendar.addEvent(eventData);
        calendar.refetchEvents();
    }

    // ------------------------------------------------
    // updateEvent
    // ------------------------------------------------
    function updateEvent(eventData) {

        var propsToUpdate = ['id', 'title', 'url'];
        var extendedPropsToUpdate = ['calendar', 'guests', 'location', 'description'];

        updateEventInCalendar(eventData, propsToUpdate, extendedPropsToUpdate);

        $.ajax({
            type: 'POST',
            url: '/calender-update',
            data: {eventData},
            success: function (response) {
                window.location.href = "/calendar";
            }
        })
    }

    // ------------------------------------------------
    // removeEvent
    // ------------------------------------------------
    function removeEvent(eventId) {
        removeEventInCalendar(eventId);
    }

    // ------------------------------------------------
    // (UI) updateEventInCalendar
    // ------------------------------------------------
    const updateEventInCalendar = (updatedEventData, propsToUpdate, extendedPropsToUpdate) => {
        const existingEvent = calendar.getEventById(updatedEventData.id);

        // --- Set event properties except date related ----- //
        // ? Docs: https://fullcalendar.io/docs/Event-setProp
        // dateRelatedProps => ['start', 'end', 'allDay']
        // eslint-disable-next-line no-plusplus
        for (var index = 0; index < propsToUpdate.length; index++) {
            var propName = propsToUpdate[index];
            existingEvent.setProp(propName, updatedEventData[propName]);
        }

        // --- Set date related props ----- //
        // ? Docs: https://fullcalendar.io/docs/Event-setDates
        existingEvent.setDates(updatedEventData.start, updatedEventData.end, {allDay: updatedEventData.allDay});

        // --- Set event's extendedProps ----- //
        // ? Docs: https://fullcalendar.io/docs/Event-setExtendedProp
        // eslint-disable-next-line no-plusplus
        for (var index = 0; index < extendedPropsToUpdate.length; index++) {
            var propName = extendedPropsToUpdate[index];
            existingEvent.setExtendedProp(propName, updatedEventData.extendedProps[propName]);
        }
    };

    // ------------------------------------------------
    // (UI) removeEventInCalendar
    // ------------------------------------------------
    function removeEventInCalendar(eventId) {
        calendar.getEventById(eventId).remove();
    }

    // Add new event
    $(addEventBtn).on('click', function () {
        if (eventForm.valid()) {
            var newEvent = {
                id: calendar.getEvents().length + 1,
                title: eventTitle.val(),
                start: startDate.val(),
                end: endDate.val(),
                startStr: startDate.val(),
                endStr: endDate.val(),
                display: 'block',
                extendedProps: {
                    location: eventLocation.val(),
                    guests: eventGuests.val(),
                    todos: eventTodos.val(),
                    calendar: eventLabel.val(),
                    description: calendarEditor.val()
                }
            };
            if (eventUrl.val().length) {
                newEvent.url = eventUrl.val();
            }
            if (allDaySwitch.prop('checked')) {
                newEvent.allDay = true;
            }
            addEvent(newEvent);
        }
    });

    // Update new event
    updateEventBtn.on('click', function () {
        if (eventForm.valid()) {
            var eventData = {
                id: eventToUpdate.id,
                title: sidebar.find(eventTitle).val(),
                start: sidebar.find(startDate).val(),
                end: sidebar.find(endDate).val(),
                url: eventUrl.val(),
                extendedProps: {
                    location: eventLocation.val(),
                    guests: eventGuests.val(),
                    todos: eventTodos.val(),
                    calendar: eventLabel.val(),
                    description: calendarEditor.val()
                },
                display: 'block',
                allDay: allDaySwitch.prop('checked') ? true : false
            };

            updateEvent(eventData);
            sidebar.modal('hide');
        }
    });

    // Reset sidebar input values
    function resetValues() {
        endDate.val('');
        eventUrl.val('');
        startDate.val('');
        eventTitle.val('');
        eventLocation.val('');
        allDaySwitch.prop('checked', false);
        eventGuests.val('').trigger('change');
        eventTodos.val('').trigger('change');
        calendarEditor.val('');
    }

    // When modal hides reset input values
    sidebar.on('hidden.bs.modal', function () {
        resetValues();
    });

    // Hide left sidebar if the right sidebar is open
    $('.btn-toggle-sidebar').on('click', function () {
        btnDeleteEvent.addClass('d-none');
        updateEventBtn.addClass('d-none');
        addEventBtn.removeClass('d-none');
        $('.app-calendar-sidebar, .body-content-overlay').removeClass('show');
    });

    // Select all & filter functionality
    if (selectAll.length) {
        selectAll.on('change', function () {
            var $this = $(this);

            if ($this.prop('checked')) {
                calEventFilter.find('input').prop('checked', true);
            } else {
                calEventFilter.find('input').prop('checked', false);
            }
            calendar.refetchEvents();
        });
    }

    if (filterInput.length) {
        filterInput.on('change', function () {
            $('.input-filter:checked').length < calEventFilter.find('input').length
                ? selectAll.prop('checked', false)
                : selectAll.prop('checked', true);
            calendar.refetchEvents();
        });
    }



    if (taskAssignSelect.length) {
        taskAssignSelect.change(function (){
            var id = $(this).val();

            if (id.length > 0){
                $.ajax({
                    type: 'GET',
                    url: '/staff-search',
                    data: {id},
                    success: function (response) {
                        events = response;
                        calendar.refetchEvents();
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            } else {
                window.location.href = "/calendar";
            }


        })
    }

});
