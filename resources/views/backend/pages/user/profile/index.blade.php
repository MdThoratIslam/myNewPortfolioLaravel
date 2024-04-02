@extends('backend.master')
@section('title', 'User Profile')
@section('content')
    <div class="content"><!-- Card Profile -->
        <div class="card card-default card-profile">
            <div class="card-header-bg" style="background-image:url('assets/img/user/user-bg-01.jpg')"></div>
            <div class="card-body card-profile-body">
                <div class="profile-avata">
                    <img class="rounded-circle" src="{{asset( auth()->user()->user_photo_path) }}" alt="Avata Image" width="80">
                    <span class="h5 d-block mt-3 mb-2">{{auth()->user()->name}}</span>
                    <span class="d-block">{{auth()->user()->email}}</span>
                </div>
            </div>
            <div class="card-footer card-profile-footer">
                <ul class="nav nav-border-top justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('users.details') ? 'active' : ''}}" href="{{ route('users.details') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('users.setting') ? 'active' : ''}}" href="{{route('users.setting')}}">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        @yield('profile-content')
    </div>
@endsection
