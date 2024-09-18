@extends('backend.master')

@section('title', 'Visitor')

@section('content')

    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Modules</h3>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                {{-- <a href="#" class="btn btn-primary btn-round">Add Customer</a> --}}
                <button class="btn btn-primary btn-round ms-auto"data-bs-toggle="modal" data-bs-target="#addRowModal">
                    <i class="fa fa-plus"></i>Add Row
                </button>
            </div>
            <!-- Modal -->
            <!-- Modal -->
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title">
                                <span class="fw-mediumbold"> New</span>
                                <span class="fw-light"> Row </span>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="small">Create a new row using this form, make sure you fill them all</p>
                            <form action="{{route('modules.store')}}" method="POST">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input id="addName" type="text" class="form-control" placeholder="fill name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 pe-0">
                                        <div class="form-group form-group-default">
                                            <label>Position</label>
                                            <input id="addPosition" type="text" class="form-control" placeholder="fill position" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Office</label>
                                            <input id="addOffice" type="text" class="form-control" placeholder="fill office" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                                <table id="add-row" class="display table table-striped table-hover" style="width:100%;">
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
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#add-row').DataTable({processing: true, serverSide: true,
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
                pageLength: 5,
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

            $('#add-row').on('click', '.delete-button', function() {
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
        });
    </script>
@endsection
