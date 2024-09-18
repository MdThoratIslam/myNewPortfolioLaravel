@extends('backend.master')

@section('title', 'Events')

@section('content')
    
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Events</h3>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addEventModal">
                    <i class="fa fa-plus"></i> Add Event
                </button>
            </div>
        </div>
        <!-- Events Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="card">
                            <div class="card-body">
                                <table id="events-table" class="display table table-striped table-hover" style="width:100%;">
                                    <thead class="text-center">
                                    <tr>
                                        <th width="10%">SL No</th>
                                        <th width="16%">Title</th>
                                        <th width="20%">Description</th>
                                        <th width="10%">Status</th>
                                        <th width="12%">Start Date</th>
                                        <th width="12%">End Date</th>
                                        <th width="16%">Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
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
            $('#events-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('events.index') }}",
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'title', name: 'title'},
                    {data: 'description', name: 'description'},
                    {data: 'status_active', name: 'status_active', render: function(data) {return data ? 'Active' : 'Inactive';}},
                    
                    {data: 'start', name: 'start'},
                    
                    {data: 'end', name: 'end'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
                order: [[0, 'desc']],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search events..."
                }
            });

            $('#events-table').on('click', '.delete-button', function() {
                var eventId = $(this).data('event-id');
                bootbox.confirm({
                    message: "Are you sure you want to delete this event?",
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
                            // Submit delete form or use AJAX for delete
                        }
                    }
                });
            });
        });
    </script>
@endsection
