@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="card card-default border-0 bg-transparent">
            <div class="card-header align-items-center p-0">
                <h2>Calendar</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-event">
                    <i class="mdi mdi-plus mr-1"></i> Add New Event
                </button>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
                <h2>How to use</h2>
            </div>
            <div class="card-body">
                <div class="mb-5">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>

        <!-- Add Event Button  -->
        <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add New Event</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body px-4">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend"><span class="input-group-text py-1"><i class="mdi mdi-calendar-range"></i></span>
                                            </div>
                                            <input type="date" class="form-control date-range-lg" name="start" value="" placeholder="Date" id="start_date"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text py-1">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                            </div>
                                            <input type="date" class="form-control date-range-lg" name="end" value="" placeholder="Date" id="end_date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer border-top-0 px-4 pt-0">
                            <button type="button" class="btn btn-primary btn-pill m-0" id="add-event">Creat Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--        Edit Events--}}
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add New Event</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form >
                            <div class="modal-body px-4">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="update_title" name="title">
                                    <input type="hidden" id="eventId" name="id">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="start_date">Start Date</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text py-1">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                                </div>
                                                <input type="date" class="form-control date-range-lg" name="start" value="" placeholder="Date" id="update_start_date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="end_date">End Date</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text py-1">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                                </div>
                                                <input type="date" class="form-control date-range-lg" name="end" value="" placeholder="Date" id="update_end_date"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="update_description" name="description" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer border-top-0 px-4 pt-0">
                                <button type="button" class="btn btn-primary btn-pill m-0" id="events_update">Update Event</button>
                            </div>
                        </form>
                        <div class="modal-footer border-top-0 px-4 pt-0">
                            <button type="button" class="btn btn-danger btn-pill m-0" id="events_delete">Delete Event</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/js/moment/moment.js')}}"></script>
    <script src="{{asset('public/backend/plugins/fullcalendar/core-4.3.1/main.js')}}"></script>
    <script src="{{asset('public/backend/plugins/fullcalendar/daygrid-4.3.0/main.js')}}"></script>
    <script>
        $(document).ready(function()
        {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl,
                {
                plugins: ['dayGrid'],
                defaultView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                    // i want to start friday and end thursday and friday color is blue
                    firstDay: 5,
                    // firstDay backgroud color is blue
                    businessHours: {
                        daysOfWeek: [ 0,1,2,3,4,6],
                        // startTime: '08:00',
                        // endTime: '18:00',
                    },
                    timeZone: 'UTC',
                    themeSystem: 'bootstrap5',
                    height: 560,
                    dayMaxEvents: true,
                events:
                    [
                        @foreach($events as $appointment)
                    {
                        id          : '{{ $appointment->id }}',
                        title       : '{{ $appointment->title }}',
                        description : '{{ $appointment->description }}',
                        start       : '{{ $appointment->start}}',
                        @if($appointment->end)
                        end         : '{{ $appointment->end }}',
                        @endif
                        display     : 'background',
                        color       : '#491217',
                        textColor   : 'lightyellow',
                    },
                    @endforeach
                ],

                eventClick: function(info)
                {
                    $('#eventId').val(info.event.id);
                    $('#update_title').val(info.event.title);
                    $('#update_start_date').val(moment(info.event.start).format('YYYY-MM-DD'));
                    if(info.event.end) {
                        $('#update_end_date').val(moment(info.event.end).format('YYYY-MM-DD'));
                    }
                    //$('#update_description').val(info.event.extendedProps.description);
                    $('#update_description').text(info.event.extendedProps.description); // Show description
                    $('#editModal').modal();
                }
            });
            calendar.render();
            // how to add event
            $('#add-event').on('click', function()
            {
                var title = $('#title').val();
                var start = $('#start_date').val();
                var end = $('#end_date').val();
                var baseUrl = "{{ url('admin/store-event') }}";
                // Make an AJAX request to store the event
                $.ajax({
                    url: baseUrl,
                    type: 'POST',
                    data: {
                        title: title,
                        start: start,
                        end: end,
                        description: $('#description').val(),
                        _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                    },
                    success: function(response) {
                        // Check if both message and alert-type are defined in the response
                        if (response.message && response['alert-type']) {
                            toastr.success(response.message, response['alert-type']);
                        } else {
                            toastr.error('Invalid response format', 'Error');
                        }
                        $('#modal-add-event').modal('hide');
                        // Add the event to the calendar view
                        calendar.addEvent({
                            id: response.id,
                            title: title,
                            start: start,
                            end: end,
                            description: $('#description').val()
                        });
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText, 'Error');
                    }
                });
            });
            $('#events_update').on('click', function()
            {
                var id = $('#eventId').val();
                var start = $('#update_start_date').val();
                var end = $('#update_end_date').val();
                var baseUrl = "{{ url('admin/update-event') }}";
                // Make an AJAX request to update the event
                $.ajax({
                    // url: '/update-event/',
                    url: '{{ url("/admin/event-update") }}',
                    type: 'POST',
                    data: {
                        id: id,
                        title: $('#update_title').val(),
                        start: start,
                        end: end,
                        description: $('#update_description').val(),
                        _token: '{{ csrf_token() }}' // Include CSRF token for Laravel response.message, response.alert-type
                    },
                    success: function(response) {
                        // Check if both message and alert-type are defined in the response
                        if (response.message && response['alert-type']) {
                            toastr.success(response.message, response['alert-type']);
                        } else {
                            toastr.error('Invalid response format', 'Error');
                        }
                        $('#editModal').modal('hide');
                        // Update the event in the calendar view
                        calendar.getEventById(id).setProp('title', $('#update_title').val());
                        //location.reload();
                    },
                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText, 'Error');
                    }
                });
            });
            // when the delete button is clicked confirm alert box show and when yes then delete the event
            $('#events_delete').on('click', function()
            {
                var eventId = $('#eventId').val();
                if(confirm('Are you sure you want to delete this event?'))
                {
                    $.ajax({
                        url: '{{ url("admin/delete-event") }}' ,
                        type: 'POST',
                        data: {
                            id: eventId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response)
                        {
                            // Check if both message and alert-type are defined in the response
                            if (response.message && response['alert-type']) {
                                toastr.success(response.message, response['alert-type']);
                            } else {
                                toastr.error('Invalid response format', 'Error');
                            }
                            $('#editModal').modal('hide');
                            // remove the event from the calendar view
                            calendar.getEventById(eventId).remove();
                        },
                        error: function(xhr, status, error) {
                            toastr.error(xhr.responseText, 'Error');
                        }
                    });
                }
            });
        });
    </script>
@endsection
