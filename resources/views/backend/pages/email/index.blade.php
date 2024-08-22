@extends('backend.oldmaster')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="email-wrapper rounded border bg-white">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-xl-3 col-xxl-2">
                    <div class="email-left-column email-options p-4 p-xl-5">
                        <a href="{{route('mail.compose')}}" class="btn btn-block btn-primary btn-pill mb-4 mb-xl-5">Compose</a>
                        <ul class="pb-2">
                            <li class="d-block active mb-4">
                                <a href="#">
                                    <i class="mdi mdi-download mr-2"></i> Inbox</a>
                                <span class="badge badge-secondary">20</span>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-star-outline mr-2"></i> Favorite</a>
                                <span class="badge badge-secondary">56</span>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-playlist-edit mr-2"></i> Drafts</a>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-open-in-new mr-2"></i> Sent Mail</a>
                            </li>
                            <li class="d-block mb-4">
                                <a href="#">
                                    <i class="mdi mdi-trash-can-outline mr-2"></i> Trash</a>
                            </li>
                        </ul>
                        <p class="text-dark font-weight-medium">Labels</p>
                        <ul>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-primary mr-3"></i>Work</a>
                            </li>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-warning mr-3"></i>Private</a>
                            </li>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-danger mr-3"></i>Family</a>
                            </li>
                            <li class="mt-4">
                                <a href="#">
                                    <i class="mdi mdi-checkbox-blank-circle-outline text-success mr-3"></i>Friends</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9 col-xxl-10">
                    @yield('email_content')
                </div>
            </div>
        </div>
    </div>
@endsection
