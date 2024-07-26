@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <!-- Frist box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-secondary rounded-circle mr-3">
                            <i class="mdi mdi-account-plus-outline"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">{{$totalDays}}</span>
                            <p>Total Holidays</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-success rounded-circle mr-3">
                            <i class="mdi mdi-table-edit"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">350</span>
                            <p>Order Placed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-primary rounded-circle mr-3">
                            <i class="mdi mdi-content-save-edit-outline"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">1360</span>
                            <p>Total Sales</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fourth box -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5 justify-content-between">
                        <div class="icon-md bg-info rounded-circle mr-3">
                            <i class="mdi mdi-bell"></i>
                        </div>
                        <div class="text-right">
                            <span class="h2 d-block">$8930</span>
                            <p>Monthly Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <!-- Current Users  -->
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Current Users</h2>
                        <span>Realtime</span>
                    </div>
                    <div class="card-body">
                        <div id="barchartlg2"></div>
                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="#" class="text-uppercase">Current Users Overview</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card card-default">
{{--                    <div class="card-header">--}}
{{--                        <h2>Current Users</h2>--}}
{{--                        <span>Full Calender</span>--}}
{{--                    </div>--}}
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="{{route('fullcalender')}}" class="text-uppercase">Current Users Overview</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
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
                    firstDay: 5, // Ensures the calendar week starts on Friday
                    businessHours: {
                        daysOfWeek: [ 0,1,2,3,4,6],
                    },

                    timeZone: 'UTC',
                    themeSystem: 'bootstrap5',
                    //height: 560,
                    dayMaxEvents: true,

                    weekdays: true,
                    weekends: true,
                    weekNumbers: false,
                    weekNumberCalculation: 'ISO',

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
                                end         :  moment('{{ $appointment->end }}').add(1, 'day').format('YYYY-MM-DD'),
                                // Add 1 day to end date
                                @endif
                                display     : 'background',
                                color       : '#8B0000',
                                textColor   : 'lightyellow',
                            },
                            @endforeach
                        ],
                    // eventClick: function(info)
                    // {
                    //     $('#eventId').val(info.event.id);
                    //     $('#update_title').val(info.event.title);
                    //     $('#update_start_date').val(moment(info.event.start).format('YYYY-MM-DD'));
                    //     if(info.event.end) {
                    //         $('#update_end_date').val(moment(info.event.end).format('YYYY-MM-DD'));
                    //     }
                    //     //$('#update_description').val(info.event.extendedProps.description);
                    //     $('#update_description').text(info.event.extendedProps.description); // Show description
                    //     $('#editModal').modal();
                    // }
                });
            // and now friday background color is red and text color is yellow and other days are default color

            calendar.render();
            // how to add event
        });

    </script>
@endsection
