@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="page-header">
        <h3 class="fw-bold mb-3">Dahboard</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="{{route('dashboard')}}"><i class="icon-home"></i></a>
            </li>
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
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Log Level</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginatedLogs as $log)
                                        @if ($log['level'] == 'INFO')
                                            <tr>
                                                <td>
                                                    <span>{{ $log['date'] }}</span>
                                                </td>
                                                <td><span class="text-{{$log['level_class']}}">{{ $log['level']
                                            }}</span></td>
                                                <td><span>{{ $log['text'] }}</span></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Pagination links -->
                            {{ $paginatedLogs->links() }}
{{--                            <iframe src="{{ route('log.viewer.frame') }}" width="100%" height="600px" frameborder="0"></iframe>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection