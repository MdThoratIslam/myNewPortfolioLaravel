@extends('backend.pages.user.profile.index')
@section('profile-content')
    <div class="row">
        <div class="col-xl-2">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Settings</h2>
                </div>
                <div class="card-body pt-0">
                    <ul class="nav nav-settings">
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('users.setting') ? 'active' : ''}}" href="{{route('users.setting')}}">
                                <i class="mdi mdi-account-outline mr-1"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('academic-dtails') ? 'active' : ''}}" href="{{route('academic-dtails')}}">
                                <i class="mdi mdi-settings-outline mr-1"></i> Academic Dtails
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-planing-settings.html">
                                <i class="mdi mdi-currency-usd mr-1"></i> Planing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-billing.html">
                                <i class="mdi mdi-set-top-box mr-1"></i> Billing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-notify-settings.html">
                                <i class="mdi mdi-bell-outline mr-1"></i> Notifications
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-10">
            @yield('profile-setting-content')
            <div class="card card-default">
                <div class="card-header">
                    <h2>Social Networks</h2>
                </div>
                <div class="card-body">
                    <div class="media media-sm">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="d-flex mb-5">
                                        <button type="button" class="btn btn-icon facebook mr-2">
                                            <i class="mdi mdi-facebook"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Facebook username">
                                    </div>

                                    <div class="d-flex mb-5">
                                        <button type="button" class="btn btn-icon google-plus mr-2">
                                            <i class="mdi mdi-google-plus"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Google plus username">
                                    </div>

                                    <div class="d-flex mb-5">
                                        <button type="button" class="btn btn-icon vimeo mr-2">
                                            <i class="mdi mdi-vimeo"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Vimeo username">
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="d-flex mb-5">
                                        <button type="button" class="btn btn-icon twitter mr-2">
                                            <i class="mdi mdi-twitter"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Twitter username">
                                    </div>

                                    <div class="d-flex mb-5">
                                        <button type="button" class="btn btn-icon linkedin mr-2">
                                            <i class="mdi mdi-linkedin"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Linkedin username">
                                    </div>

                                    <div class="d-flex mb-5">
                                        <button type="button" class="btn btn-icon pinterest mr-2">
                                            <i class="mdi mdi-pinterest"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Pinterest username">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
