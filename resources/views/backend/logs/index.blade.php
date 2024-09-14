@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Log Viewer</h3>
            <h6 class="op-7 mb-2">View and manage your logs</h6>
        </div>
{{--        <div class="ms-md-auto py-2 py-md-0">--}}
{{--            <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>--}}
{{--            <a href="#" class="btn btn-primary btn-round">Add Customer</a>--}}
{{--        </div>--}}
    </div>
    <iframe src="{{ route('log.viewer.frame') }}" width="100%" height="600px" frameborder="0"></iframe>
@endsection