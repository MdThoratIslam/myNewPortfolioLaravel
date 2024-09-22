@extends('backend.master')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Dashboard</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="{{ route('dashboard') }}"><i class="icon-home"></i></a>
            </li>
        </ul>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center p-2">
                            <!-- Header content here if needed -->
                        </div>
                        <div class="card-body">
                            <table id="logs-table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 15%">Date</th>
                                    <th style="width: 10%">Level</th>
                                    <th style="width: 75%; word-break: break-all;">Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#logs-table').DataTable({
                processing: true,     // Show a processing indicator
                serverSide: true,     // Use server-side processing
                ajax: "{{ route('log.viewer') }}",  // AJAX route to fetch data
                columns: [
                    { data: 'date', name: 'date' , render: function(data) {
                        return moment(data).format('DD-MM-YYYY hh:mm:ss A');
                    }},  // Date column
                    { data: 'level', name: 'level' },  // Log level column
                    { data: 'message', name: 'message' } , // Message column
                    {
                        data: null,
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return '<button class="btn btn-danger delete-log" data-date="' + row.date + '">Delete</button>';
                        }
                    }
                ],
                columnDefs: [
                    { targets: [1], className: 'text-center' }  // Center align date and level columns
                ],
                order: [[0, 'desc']],  // Sort by date descending
                autoWidth: false,
                responsive: true,
                paging: true,
                searching: true,
                info: true,
                lengthChange: true,
                lengthMenu: [10, 25, 50, 100],
                pageLength: 10,
                orderCellsTop: true,
            });
            $('#logs-table').on('click', '.delete-log', function()
            {
                var logDate = $(this).data('date');
                alert(logDate);
                if (confirm('Are you sure you want to delete this log file?'))
                {
                    $.ajax({
                        url: '/logs/' + logDate,
                        type: 'POST',
                        success: function(response)
                        {
                            alert(response.success || response.error);
                            $('#logs-table').DataTable().ajax.reload();
                        },
                        error: function(xhr)
                        {
                            alert('Error: ' + xhr.responseJSON.error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
