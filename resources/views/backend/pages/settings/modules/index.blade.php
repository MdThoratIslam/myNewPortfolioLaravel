{{--@extends('backend.master')--}}

{{--@section('title', 'Modules')--}}

{{--@section('content')--}}
{{--    <div class="content">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-12 col-md-6">--}}
{{--                <div class="card card-default">--}}
{{--                    <div class="card-header p-2">--}}
{{--                        <div class="card-title">--}}
{{--                            <strong class="d-flex float-left">Modules List</strong>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <table id="modulesTable" class="table table-hover" style="width:100%;">--}}
{{--                            <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Name</th>--}}
{{--                                    <th>Description</th>--}}
{{--                                    <th>Icon</th>--}}
{{--                                    <th>Route</th>--}}
{{--                                    <th>Route Type</th>--}}
{{--                                    <th>Priority</th>--}}
{{--                                    <th style="width: 220px">Action</th>--}}
{{--                                </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($modules_arr as $module)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $module['name'] }}</td>--}}
{{--                                    <td>{{ $module['description'] }}</td>--}}
{{--                                    <td><span><i class="{{$module['icon']}}"></i></span></td>--}}
{{--                                    <td>{{ $module['route'] }}</td>--}}
{{--                                    <td>{{ routeType($module['route_type']) }}</td>--}}
{{--                                    <td>{{ $module['priority'] }}</td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('modules.show', $module['id']) }}" class="btn btn-success--}}
{{--                                        btn-sm">--}}
{{--                                            <i class="mdi mdi-eye"></i>--}}
{{--                                        </a>--}}
{{--                                        ||--}}
{{--                                        <a href="{{ route('modules.edit', $module['id']) }}" class="btn btn-info btn-sm">--}}
{{--                                            <i class="mdi mdi-table-edit"></i>--}}
{{--                                        </a>--}}
{{--                                        ||--}}
{{--                                        <button class="btn btn-danger btn-sm delete-button" data-module-id="{{ $module['id'] }}">--}}
{{--                                            <i class="mdi mdi-trash-can"></i>--}}
{{--                                        </button>--}}
{{--                                        <form id="delete-form-{{ $module['id'] }}" action="{{ route('modules.destroy', $module['id']) }}" method="POST" style="display:none;">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('script')--}}
{{--    <script>--}}
{{--        $(document).ready(function()--}}
{{--        {--}}
{{--            $('#modulesTable').DataTable({--}}
{{--                info: true,--}}
{{--                lengthChange: true,--}}
{{--                lengthMenu: [--}}
{{--                    [10, 20, 30, 40, -1],--}}
{{--                    [10, 20, 30, 40, "All"]--}}
{{--                ],--}}
{{--                scrollX: true,--}}
{{--                order: [[5, "asc"]],--}}
{{--                language: {--}}
{{--                    search: "_INPUT_",--}}
{{--                    searchPlaceholder: "Search modules...",--}}
{{--                },--}}
{{--                initComplete: function(settings, json) {--}}
{{--                    var lengthWrapper = $('<div class="dataTables_length d-flex align-items-center me-2"></div>');--}}
{{--                    var select = $('select[name="modulesTable_length"]').addClass('form-control');--}}
{{--                    lengthWrapper.append(select);--}}
{{--                    $('#modulesTable_wrapper').prepend(lengthWrapper);--}}

{{--                    var searchWrapper = $('.dataTables_filter');--}}
{{--                    searchWrapper.addClass('d-flex justify-content-end align-items-center mb-2');--}}
{{--                    searchWrapper.find('input').addClass('form-control');--}}
{{--                }--}}
{{--            });--}}

{{--            $('.delete-button').on('click', function() {--}}
{{--                var moduleId = $(this).data('module-id');--}}
{{--                bootbox.confirm({--}}
{{--                    message: "Are you sure you want to delete this module?",--}}
{{--                    buttons: {--}}
{{--                        confirm: {--}}
{{--                            label: 'Yes',--}}
{{--                            className: 'btn-danger'--}}
{{--                        },--}}
{{--                        cancel: {--}}
{{--                            label: 'No',--}}
{{--                            className: 'btn-success'--}}
{{--                        }--}}
{{--                    },--}}
{{--                    callback: function(result) {--}}
{{--                        if (result) {--}}
{{--                            $('#delete-form-' + moduleId).submit();--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
@extends('backend.master')

@section('title', 'Modules')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card card-default">
                    <div class="card-header p-2">
                        <div class="card-title">
                            <strong class="d-flex float-left">Modules List</strong>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="modulesTable" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th style="width: 20%">Icon</th>
                                <th>Route</th>
                                <th>Route Type</th>
                                <th>Priority</th>
                                <th style="width: 5%">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
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
                lengthMenu: [[5, 10, 20, 30, 40, -1], [5, 10, 20, 30, 40, "All"]],
                pageLength: 5, // Default number of records per page
                order: [[5, "asc"]],
                language: {search: "_INPUT_", searchPlaceholder: "Search modules...",},
                initComplete: function(settings, json)
                {
                    var lengthWrapper   = $('<div class="dataTables_length d-flex align-items-center me-2"></div>');
                    var select          = $('select[name="modulesTable_length"]').addClass('form-control');
                    lengthWrapper.append(select);
                    $('#modulesTable_wrapper').prepend(lengthWrapper);

                    var searchWrapper   = $('.dataTables_filter');
                    searchWrapper.addClass('d-flex justify-content-end align-items-center mb-2');
                    searchWrapper.find('input').addClass('form-control');
                }
            });

            $('#modulesTable').on('click', '.delete-button', function() {
                var moduleId = $(this).data('module-id');
                bootbox.confirm({
                    message             : "Are you sure you want to delete this module?",
                    buttons             : {
                        confirm         : {
                            label       : 'Yes',
                            className   : 'btn-danger'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-success'
                        }
                    },
                    callback: function(result) {
                        if (result) {
                            $('#delete-form-' + moduleId).submit();
                        }
                    }
                });
            });
        });
    </script>
@endsection
