<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        @if (config('app.name'))
            {{ config('app.name') }} | Dashboard
        @endif
        @yield('title')
    </title>
    <meta content="" name="Md Thorat Islam" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{asset('backend')}}/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('backend')}}/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{asset('backend')}}/plugins/toaster/toastr.min.css" rel="stylesheet" />
    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{asset('backend')}}/css/style.css" />
    <link href="{{asset('backend')}}/images/favicon.png" rel="shortcut icon" />
    <script src="{{asset('backend')}}/plugins/nprogress/nprogress.js"></script>
</head>
<body class="navbar-fixed sidebar-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
<div id="toaster"></div>
