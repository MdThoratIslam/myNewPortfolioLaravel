<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        @if (config('app.name')){{ config('app.name') }} | @endif @yield('title')
    </title>
    <meta content="" name="Md Thorat Islam" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{asset('public/backend/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('public/backend/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{asset('public/backend/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{asset('public/backend/css/style.css')}}" />
    <link href="{{asset('public/backend/images/paper-plane.png')}}" rel="shortcut icon" />
    <script src="{{asset('public/backend/plugins/nprogress/nprogress.js')}}"></script>
    <link href="{{asset('public/backend/plugins/fullcalendar/core-4.3.1/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/plugins/fullcalendar/daygrid-4.3.0/main.min.css')}}" rel="stylesheet">

</head>
<body class="navbar-fixed sidebar-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
{{--<div id="toaster"></div>--}}
