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
                    <form method="POST" action="{{route('event.store')}}">
                        @csrf
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
                            <button type="submit" class="btn btn-primary btn-pill m-0">Creat Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--        Edit Events--}}
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{route('event.store')}}">
                            <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Event</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-4">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="update_title" name="title">
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
                                                <input type="date" class="form-control date-range-lg" name="update_start_date" value="" placeholder="Date" id="update_start_date"/>
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
                                                <input type="date" class="form-control date-range-lg" name="update_end_date" value="" placeholder="Date" id="end_date"/>
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
                                <button type="submit" class="btn btn-primary btn-pill m-0">Creat Event</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/js/moment/moment.js')}}"></script>
    <script src="{{asset('public/backend/plugins/fullcalendar/core-4.3.1/main.js')}}"></script>
    <script src="{{asset('public/backend/plugins/fullcalendar/daygrid-4.3.0/main.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Initialize FullCalendar and handle event click
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl,
                {
                plugins: ['dayGrid'],
                defaultView: 'dayGridMonth',
                events: [
                        @foreach($events as $appointment)
                    {
                        id          : '{{ $appointment->id }}',
                        title       : '{{ $appointment->title }}',
                        description : '{{ $appointment->description }}',
                        start       : '{{ $appointment->start}}',
                        @if($appointment->end)
                        end         : '{{ $appointment->end }}',
                        @endif
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
            $('#events_update').on('click', function()
            {
                var eventId = $('#eventId').val();
                var start = $('#start').val();
                var end = $('#end_date').val();

                // Make an AJAX request to update the event
                $.ajax({
                    url: '/update-event/' + eventId,
                    type: 'POST',
                    data: {
                        start: start,
                        end: end,
                        // You can include other updated fields here if needed
                        _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                    },
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        $('#editModal').modal('hide');
                        // You may need to update the event on the calendar with the new details
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
