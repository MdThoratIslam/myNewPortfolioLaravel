@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Visitors</p>
                                    <h4 class="card-title">{{$totalVisitor}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                >
                                    <i class="icon-calendar"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Total Event Days</p>
                                    <h4 class="card-title">{{$totalDays}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                        class="icon-big text-center icon-success bubble-shadow-small"
                                >
                                    <i class="fas fa-luggage-cart"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Sales</p>
                                    <h4 class="card-title">$ 1,345</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div
                                        class="icon-big text-center icon-secondary bubble-shadow-small"
                                >
                                    <i class="far fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Order</p>
                                    <h4 class="card-title">576</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card card-default">
{{--                    <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">--}}
{{--                        <h2>How to use</h2>--}}
{{--                    </div>--}}
                    <div class="card-body">
                        <div class="mb-5">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        
        
    </div>

@endsection
@section('script')
    <script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/js/moment/moment.js')}}"></script>
    <script src="{{asset('public/backend/plugins/fullcalendar/core-4.3.1/main.js')}}"></script>
    <script src="{{asset('public/backend/plugins/fullcalendar/daygrid-4.3.0/main.js')}}"></script>
    <script>
        $(document).ready(function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid'],
                defaultView: 'dayGridMonth',
                headerToolbar: {
                    left: 'customPrev,customNext today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                customButtons: {
                    customPrev: {
                        text: 'Prev',
                        icon: 'fas fa-chevron-left', // FontAwesome icon for previous
                        click: function () {
                            calendar.prev(); // Move to previous month
                        }
                    },
                    customNext: {
                        text: 'Next',
                        icon: 'fas fa-chevron-right', // FontAwesome icon for next
                        click: function () {
                            calendar.next(); // Move to next month
                        }
                    }
                },
                firstDay: 5, // Ensures the calendar week starts on Friday
                businessHours: {
                    daysOfWeek: [0, 1, 2, 3, 4, 6],
                },
                timeZone: 'UTC',
                themeSystem: 'bootstrap5',
                height: 560,
                dayMaxEvents: true,
                weekdays: true,
                weekends: true,
                weekNumbers: true,
                weekNumberCalculation: 'ISO',

                events: [
                        @foreach($events as $appointment)
                    {
                        id: '{{ $appointment->id }}',
                        title: '{{ $appointment->title }}',
                        description: '{{ $appointment->description }}',
                        start: '{{ $appointment->start }}',
                        @if($appointment->end)
                        end: moment('{{ $appointment->end }}').add(1, 'day').format('YYYY-MM-DD'), // Add 1 day to end date
                        @endif
                        display: 'background',
                        color: '#edbb99 ',
                        textColor: 'lightyellow',
                    },
                    @endforeach
                ],
                eventClick: function (info) {
                    $('#eventId').val(info.event.id);
                    $('#update_title').val(info.event.title);
                    $('#update_start_date').val(moment(info.event.start).format('YYYY-MM-DD'));
                    if (info.event.end) {
                        $('#update_end_date').val(moment(info.event.end).format('YYYY-MM-DD'));
                    }
                    $('#update_description').text(info.event.extendedProps.description);
                    $('#editModal').modal();
                }
            });

            calendar.render();

            // Add event functionality
            $('#add-event').on('click', function () {
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
                    success: function (response) {
                        toastr.success(response.message, response['alert-type']);
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
                    error: function (xhr, status, error) {
                        toastr.error(xhr.responseText, 'Error');
                    }
                });
            });
        });
    </script>
@endsection

