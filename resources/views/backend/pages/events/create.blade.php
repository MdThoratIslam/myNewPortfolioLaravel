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
@endsection