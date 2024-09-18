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
@endsection