@extends('backend.master')

@section('title', 'Modules')

@section('content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row  pb-4 page-header">
        <div>
            <h3 class="fw-bold mb-3">Modules</h3>
        </div>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="{{route('dashboard')}}"><i class="icon-home"></i></a>
            </li>
            <li class="separator">
                <i class="icon-chevron-right"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('modules.index')}}">Modules</a>
            </li>
        </ul>
        </ul>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
            <button class="btn btn-primary btn-round ms-auto"data-bs-toggle="modal" data-bs-target="#addRowModal" id="addRowButton">
                <i class="fa fa-plus"></i>Add Row
            </button>
        </div>
        <!-- Modal for Adding/Editing a Module -->
        <div class="modal fade" id="addEditModuleModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold" id="modalTitle">New</span>
                            <span class="fw-light">Module</span>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="small">Create or edit a module using this form, make sure you fill them all</p>
                        <form id="moduleForm" method="POST">
                            @csrf
                            <input type="hidden" id="moduleId" name="moduleId" value="">
                            <div class="row">
                                <div class="col-md-6 pe-0">
                                    <div class="form-group form-group-default">
                                        <label for="editModule">Name</label>
                                        <input id="editModule" name="name" type="text" class="form-control" placeholder="Module Name" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label for="addIcon">Icon</label>
                                        <input id="addIcon" name="icon" type="text" class="form-control" placeholder="Icon name" required />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="addDescription">Description</label>
                                        <input id="addDescription" name="description" type="text" class="form-control" placeholder="Description" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label for="addRouteName">Route Name</label>
                                        <input id="addRouteName" name="route" type="text" class="form-control" placeholder="Route name" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label for="addRouteType">Select Route Type</label>
                                        <select class="form-select" id="addRouteType" name="route_type" required>
                                            <option value="null" selected disabled>Select Route Type</option>
                                            @foreach(routeType() as $key => $routeType)
                                                <option value="{{ $key }}">{{ $routeType }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label for="addpriority">Select Priority</label>
                                        <select class="form-select" id="addpriority" name="priority" required>
                                            <option value="null" selected disabled>Select Priority</option>
                                            @foreach(priority() as $key => $priority)
                                                <option value="{{ $key }}">{{ $priority }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" id="saveModuleButton" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="card">
                            <div class="card-body">
                                <div id="datatable-controls" class="d-flex align-items-center w-100">
                                </div>
                                <table id="module-table" class="display table table-striped table-hover" style="width:100%;">
                                    <thead class="text-center">
                                        <tr>
                                            <th>SL No</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Icon</th>
                                            <th>Route</th>
                                            <th>Route Type</th>
                                            <th>Priority</th>
                                            <th style="width: 80px">Actions</th>
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
        /*$(document).ready(function() {
            var table = $('#module-table').DataTable({processing: true, serverSide: true,
                ajax: {url: '{{ route('modules.data') }}',type: 'GET'},
                columns: [
                    {
                        data: 'sl_no',
                        name: 'Sl No',
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'icon',
                        name: 'icon',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'route',
                        name: 'route'
                    },
                    {
                        data: 'route_type',
                        name: 'route_type'
                    },
                    {
                        data: 'priority',
                        name: 'priority'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                lengthMenu: [
                    [5, 10, 20, 50, -1],
                    [5, 10, 20, 50, "All"]
                ],
                pageLength: 10,
                order: [[5, "asc"]],
                language: {search: "_INPUT_",searchPlaceholder: "Search modules..."},
                dom: '<"d-flex justify-content-between"<"d-flex w-100 align-items-center"l><"d-flex align-items-center ml-auto"f>>rtip',
                drawCallback: function() {
                    var api = this.api();
                    $(api.table().container()).find('.dataTables_paginate').appendTo('.card-footer')
                        .addClass('float-end');
                },
                initComplete: function() {
                    $('#datatable-controls').append($('.dataTables_length')).append($('.dataTables_filter'));
                    $('#datatable-controls').find('.dataTables_length').addClass('me-auto');
                    $('.dataTables_length label').css('width', '100%');
                    $('.dataTables_length select').addClass('w-100');
                    $('.dataTables_filter').addClass('ml-auto');
                    $('.dataTables_filter input').addClass('form-control').css('width', 'auto');
                }
            });

            $('#module-table').on('click', '.delete-button', function() {
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
                    callback: function(result) {
                        if (result) {
                            $('#delete-form-' + moduleId).submit();
                        }
                    }
                });
            });
        });*/
        $(document).ready(function () {
            var table = $('#module-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('modules.data') }}',
                columns: [
                    {data: 'sl_no', name: 'sl_no'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'icon', name: 'icon', orderable: false, searchable: false},
                    {data: 'route', name: 'route'},
                    {data: 'route_type', name: 'route_type'},
                    {data: 'priority', name: 'priority'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[5, 'asc']],
                pageLength: 10,
            });

            // Open modal for adding a new module
            // Open modal for adding a new module
            $('#addRowButton').click(function (e) {
                e.preventDefault();
                $('#modalTitle').text('New Module');
                $('#saveModuleButton').text('Add');
                $('#moduleForm').attr('action', '{{ route('modules.store') }}'); // Set form action for create
                $('#moduleForm')[0].reset(); // Clear form fields
                $('#moduleId').val(''); // Clear hidden field for module ID
                $('#addEditModuleModal').modal('show'); // Show the modal
            });
            // Open modal for editing an existing module
            $('#module-table').on('click', '.edit-button', function ()
            {
                var moduleId = $(this).data('module-id');
                // Fetch module data via AJAX
                $.ajax({
                    url: '{{ url("admin/modules") }}/' + moduleId, // Fetch specific module data
                    method: 'GET',
                    success: function (data) {
                        // Populate the form with the module data
                        $('#modalTitle').text('Edit Module');
                        $('#saveModuleButton').text('Update');
                        $('#moduleForm').attr('action', '{{ url("admin/modules") }}/' + moduleId);
                        $('#moduleId').val(data.id); // Set module ID
                        $('#editModule').val(data.name);
                        $('#addIcon').val(data.icon);
                        $('#addDescription').val(data.description);
                        $('#addRouteName').val(data.route);
                        $('#addRouteType').val(data.route_type);
                        $('#addpriority').val(data.priority);
                        $('#addEditModuleModal').modal('show'); // Show the modal with populated data
                    },
                    error: function (error) {
                        console.error('Error fetching module data:', error);
                    }
                });
            });

            // Save or update module via AJAX form submission
            $('#moduleForm').submit(function (e) {
                e.preventDefault();
                var form = $(this).serialize(); // Serialize form data
                var method = $('#moduleId').val() ? 'PUT' : 'POST'; // Determine if we are updating or creating
                var url = $('#moduleForm').attr('action');

                if (method === 'PUT') {
                    url += '?_method=PUT'; // Laravel method override for PUT
                }

                $.ajax({
                    type: 'POST', // Always use POST for form submission
                    url: url,
                    data: form,
                    success: function (response) {
                        $('#addEditModuleModal').modal('hide'); // Close modal
                        table.ajax.reload(null, true); // Reload DataTable

                        // Success notification
                        $.notify({
                            icon: 'icon-check',
                            title: 'Success!',
                            message: 'Module saved successfully!',
                        }, {
                            type: 'success',
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            delay: 5000,
                            timer: 1000,
                            allow_dismiss: true,
                            newest_on_top: true,
                            animate: {
                                enter: 'animated fadeIn',
                                exit: 'animated fadeOut'
                            }
                        });
                    },
                    error: function (response) {
                        // Error notification
                        $.notify({
                            icon: 'icon-exclamation',
                            title: 'Error!',
                            message: response.responseJSON.message,
                        }, {
                            type: 'danger',
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            delay: 5000,
                            timer: 1000,
                            allow_dismiss: true,
                            newest_on_top: true,
                            animate: {
                                enter: 'animated fadeIn',
                                exit: 'animated fadeOut'
                            }
                        });
                    }
                });
            });

            // Handle delete
            $('#module-table').on('click', '.delete-button', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
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
                            className: 'btn-secondary'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            $.ajax({
                                type: 'DELETE',
                                url: form.attr('action'),
                                data: form.serialize(),
                                success: function () {
                                    table.ajax.reload(null, false); // Reload DataTable

                                    // Success notification
                                    $.notify({
                                        icon: 'icon-check',
                                        title: 'Success!',
                                        message: 'Module deleted successfully!',
                                    }, {
                                        type: 'success',
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        },
                                        delay: 5000,
                                        timer: 1000,
                                        allow_dismiss: true,
                                        newest_on_top: true,
                                        animate: {
                                            enter: 'animated fadeIn',
                                            exit: 'animated fadeOut'
                                        }
                                    });
                                },
                                error: function () {
                                    // Error notification
                                    $.notify({
                                        icon: 'icon-exclamation',
                                        title: 'Error!',
                                        message: 'Failed to delete the module.',
                                    }, {
                                        type: 'danger',
                                        placement: {
                                            from: "top",
                                            align: "right"
                                        },
                                        delay: 5000,
                                        timer: 1000,
                                        allow_dismiss: true,
                                        newest_on_top: true,
                                        animate: {
                                            enter: 'animated fadeIn',
                                            exit: 'animated fadeOut'
                                        }
                                    });
                                }
                            });
                        }
                    }
                });
            });
        });
    
    
    </script>
@endsection
