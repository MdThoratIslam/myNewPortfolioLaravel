@extends('backend.master')
@section('title', 'Visitor')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fas fa-server"></i> Visitor</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center p-2">
                        </div>
                        <div class="card-body">
                            <div id="datatable-controls" class="d-flex align-items-center w-100">
                                <!-- Controls will be appended here -->
                            </div>
                            <table id="visitorsTable" class="table table-hover table-bordered" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>IP</th>
                                    <th>Server</th>
                                    <th>Software</th>
                                    <th>URI</th>
                                    <th>Port</th>
                                    <th>Method</th>
                                    <th>Time</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var table = $('#visitorsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("visitors.data") }}',
                    type: 'GET'
                },
                columns: [
                    { data: 'ip_address',               name: 'ip_address' },
                    { data: 'server_name',              name: 'server_name' },
                    { data: 'server_software',          name: 'server_software' },
                    { data: 'server_request_uri',       name: 'server_request_uri' },
                    { data: 'server_port',              name: 'server_port' },
                    { data: 'server_request_method',    name: 'server_request_method' },
                    { data: 'server_request_time',      name: 'server_request_time' ,
                        "render": function (data)
                        {
                            return moment.unix(data).format('h:mm:ss A');
                        }
                    },
                    { data: 'created_at',               name: 'created_at' },
                    { data: 'action',                   name: 'action', orderable: false, searchable: false }
                ],
                lengthMenu: [[5, 10, 20, 50, -1], [5, 10, 20, 50, "All"]],
                pageLength: 10,
                order: [[7, "desc"]],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search visitors..."
                },
                dom: '<"d-flex justify-content-between"<"d-flex w-100 align-items-center"l><"d-flex align-items-center ml-auto"f>>rtip',
                drawCallback: function () {
                    var api = this.api();
                    $(api.table().container()).find('.dataTables_paginate').appendTo('.card-footer').addClass('float-end');
                },
                initComplete: function () {
                    // Move the length menu and search input to the card header
                    $('#datatable-controls').append($('.dataTables_length')).append($('.dataTables_filter'));
                    // Style adjustments for proper alignment
                    $('#datatable-controls').find('.dataTables_length').addClass('me-auto');
                    $('.dataTables_length label').css('width', '100%');
                    $('.dataTables_length select').addClass('w-100'); // Ensures dropdown doesn't stretch
                    $('.dataTables_filter').addClass('ml-auto');
                    $('.dataTables_filter input').addClass('form-control').css('width', 'auto');
                }
            });
        });
    </script>
@endsection
