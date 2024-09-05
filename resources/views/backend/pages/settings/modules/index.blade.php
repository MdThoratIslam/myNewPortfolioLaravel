@extends('backend.master')

@section('title', 'Visitor')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-server"></i> Visitor</h1>
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
                            <!-- Optionally add header content here -->
                        </div>
                        <div class="card-body">
                            <div id="datatable-controls" class="d-flex align-items-center w-100">
                                <!-- Controls will be appended here -->
                            </div>
                            <table id="modulesTable" class="table table-hover table-bordered" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Icon</th>
                                    <th>Route</th>
                                    <th>Route Type</th>
                                    <th>Priority</th>
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
            var table = $('#modulesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("modules.data") }}',
                    type: 'GET'
                },
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'description', name: 'description' },
                    { data: 'icon', name: 'icon', orderable: false, searchable: false },
                    { data: 'route', name: 'route' },
                    { data: 'route_type', name: 'route_type' },
                    { data: 'priority', name: 'priority' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                lengthMenu: [[5, 10, 20, 50, -1], [5, 10, 20, 50, "All"]],
                pageLength: 5,
                order: [[5, "asc"]],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search modules..."
                },
                dom: '<"d-flex justify-content-between"<"d-flex w-100 align-items-center"l><"d-flex align-items-center ml-auto"f>>rtip',
                drawCallback: function () {
                    var api = this.api();
                    $(api.table().container()).find('.dataTables_paginate').appendTo('.card-footer').addClass('float-end');
                },
                initComplete: function () {
                    $('#datatable-controls').append($('.dataTables_length')).append($('.dataTables_filter'));
                    $('#datatable-controls').find('.dataTables_length').addClass('me-auto');
                    $('.dataTables_length label').css('width', '100%');
                    $('.dataTables_length select').addClass('w-100');
                    $('.dataTables_filter').addClass('ml-auto');
                    $('.dataTables_filter input').addClass('form-control').css('width', 'auto');
                }
            });

            $('#modulesTable').on('click', '.delete-button', function () {
                var moduleId = $(this).data('module-id');
                bootbox.confirm({
                    message: "Are you sure you want to delete this module?",
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-danger'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-success'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            $('#delete-form-' + moduleId).submit();
                        }
                    }
                });
            });
        });
    </script>
@endsection
