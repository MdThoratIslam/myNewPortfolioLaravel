@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card card-default">
                    <div class="card-header p-2">
                        <div  class="card-title ">
{{--                            <strong>Total Visitor:&nbsp;</strong>{{$totalVisitor}}--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="visitorsTable" class="table table-hover table-product" style="width:100%; ">
                            <thead>
                                <tr>
                                    <th>IP</th>
                                    <th>Server</th>
                                    <th>Software</th>
                                    <th>URI</th>
                                    <th>Port</th>
                                    <th>Method</th>
                                    <th>Time</th>
                                    <th>Created At</th> <!-- Updated to match the data field name -->
                                    <th>Actions</th> <!-- Updated to indicate actions -->
                                </tr>
                            </thead>

                        </table>
                    </div>
{{--                    <div class="card-footer p-3">--}}
{{--                        <p class="text-danger float-left">Latest Visit at:--}}
{{--                            @if(!empty($latestVisitor->created_at))--}}
{{--                            {{\Carbon\Carbon::parse($latestVisitor->created_at)->format('l, H:i:s a')}},--}}
{{--                            <span class="text-right">{{\Carbon\Carbon::parse($latestVisitor->created_at)->format('d-M-Y')}}</span>--}}
{{--                            @endif--}}
{{--                        </p>--}}
{{--                        <p class="text-danger float-right">First Visit at:--}}
{{--                            @if(!empty($oldVisitor->created_at))--}}
{{--                            {{\Carbon\Carbon::parse($oldVisitor->created_at)->format('l, H:i:s a')}},<span class="text-right">{{\Carbon\Carbon::parse($oldVisitor->created_at)->format('d-M-Y')}}</span>--}}
{{--                            @endif--}}
{{--                        </p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        /*======== 14. DATA TABLE ========*/
        // var visitorsTable = $("#productsTable");
        // if (visitorsTable.length != 0) {
        //     visitorsTable.DataTable({
        //         info: true,
        //         lengthChange: true,
        //         class:'form-control',
        //         lengthMenu: [
        //             [5,10, 20, 30, -1],
        //             [5,10, 20, 30, "All"],
        //         ],
        //         scrollX: true,
        //         order: [[1, "desc"]],
        //         columnDefs: [
        //             {
        //                 orderable: false,
        //                 targets: [5, 0, 6, -1],
        //                 color: 'red',
        //             },
        //         ],
        //         language: {
        //             search: "_INPUT_",
        //             searchPlaceholder: "Search...",
        //         }
        //     });
        // }
        // var visitorsTable = $("#productsTable");
        // if (visitorsTable.length != 0) {
        //     visitorsTable.DataTable({
        //         info: true,
        //         lengthChange: true,
        //         lengthMenu: [
        //             [5, 10, 20, 30, -1],
        //             [5, 10, 20, 30, "All"]
        //         ],
        //         scrollX: true,
        //         order: [[1, "desc"]],
        //         columnDefs: [
        //             {
        //                 orderable: false,
        //                 targets: [0, 5, 6, -1]
        //             }
        //         ],
        //         language: {
        //             search: "_INPUT_",
        //             searchPlaceholder: "Search...",
        //         },
        //         initComplete: function(settings, json) {
        //             // Wrap the length menu elements with Bootstrap classes
        //             var lengthWrapper = $('<div class="dataTables_length d-flex align-items-center me-2"></div>');
        //             // var label = $('<label for="productsTable_length" class="me-2">Show entries: </label>');
        //             var select = $('select[name="productsTable_length"]').addClass('form-control');
        //
        //             // lengthWrapper.append(label).append(select);
        //             lengthWrapper.append(select);
        //             $('#productsTable_wrapper').prepend(lengthWrapper);
        //
        //             // Adjust the position of the search field
        //             var searchWrapper = $('.dataTables_filter');
        //             searchWrapper.addClass('d-flex justify-content-end align-items-center mb-2');
        //             searchWrapper.find('input').addClass('form-control form-control');
        //         }
        //     });
        // }

        $(document).ready(function() {
            var table = $('#visitorsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("visitors.data") }}',
                    type: 'GET'
                },
                columns: [
                    { data: 'ip_address', name: 'ip_address' },
                    { data: 'server_name', name: 'server_name' },
                    { data: 'server_software', name: 'server_software' },
                    { data: 'server_request_uri', name: 'server_request_uri' },
                    { data: 'server_port', name: 'server_port' },
                    { data: 'server_request_method', name: 'server_request_method' },
                    { data: 'server_request_time', name: 'server_request_time' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                lengthMenu: [[5, 10, 20, 30, 40, -1], [5, 10, 20, 30, 40, "All"]],
                pageLength: 5,
                order: [[7, "desc"]],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search visitors...",
                },
                initComplete: function(settings, json) {
                    var lengthWrapper = $('<div class="dataTables_length d-flex align-items-center me-2"></div>');
                    var select = $('select[name="visitorsTable_length"]').addClass('form-control');
                    lengthWrapper.append(select);
                    $('#visitorsTable_wrapper').prepend(lengthWrapper);

                    var searchWrapper = $('.dataTables_filter');
                    searchWrapper.addClass('d-flex justify-content-end align-items-center mb-2');
                    searchWrapper.find('input').addClass('form-control');
                }
            });
        });

    </script>
@endsection
