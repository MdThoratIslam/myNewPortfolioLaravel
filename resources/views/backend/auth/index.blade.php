<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        @if (config('app.name'))
            {{ config('app.name') }} |
        @endif
        @yield('title')
    </title>
    <meta content="" name="Md Thorat Islam" />
{{--    <link href="{{asset('public/backend/images/paper-plane.png')}}" rel="icon">--}}
    <link href="{{asset('public/backend/images/paper-plane.png')}}" rel="icon">
    <link href="{{asset('public/backend/images/paper-plane.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{asset('public/backend/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <link id="main-css-href" rel="stylesheet" href="{{asset('public/backend/css/style.css')}}" />
{{--    <link href="{{asset('public/backend/images/favicon.png')}}" rel="shortcut icon" />--}}
    <script src="{{asset('public/backend/plugins/nprogress/nprogress.js')}}"></script>
</head>
<body class="bg-light-gray" id="body" style="background-image: url('{{asset('public/backend/images/bg_gif.gif')}}');
background-size: cover; background-repeat: no-repeat; background-position:right;">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            @yield('auth_content')
        </div>
    </div>
</body>
</html>
