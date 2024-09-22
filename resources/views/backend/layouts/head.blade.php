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
    <link rel="icon" href="{{asset('public/backend/v2/assets/img/paper-plane.png')}}" type="image/x-icon"/>
    
    
    <!-- Fonts and icons -->
    <script src="{{asset('public/backend/v2/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{asset('public/backend/v2/assets/css/fonts.min.css')}}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('public/backend/v2/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/backend/v2/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/backend/v2/assets/css/kaiadmin.min.css')}}" />
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">--}}
    {{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('public/backend/v2/assets/css/demo.css')}}" />
    <style>
        /* Customize FullCalendar toolbar button styles */
        .fc-toolbar .fc-button {
            background-color: #007bff; /* Change to the desired color */
            color: #fff; /* Set text color */
            border-color: #007bff; /* Change border color */
        }


        .fc-toolbar .fc-button:hover {
            background-color: #0056b3; /* Darker shade for hover state */
            border-color: #0056b3; /* Darker border for hover state */
        }

        /* Optional: Make the buttons rounded */
        .fc-toolbar .fc-button {
            border-radius: 4px; /* Adjust border-radius for rounded effect */
        }
        .pagination {
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        .pagination .page-link {
            font-size: 16px;
            padding: 0.5rem 0.75rem;
            margin: 0 0.25rem;
        }

        .pagination .page-item {
            display: inline-block;
        }

        .pagination .page-link:hover {
            background-color: #f1f1f1;
            border-color: #dee2e6;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        .pagination .page-link svg {
            width: 16px; /* This controls the arrow size */
            height: 16px;
        }
    </style>
</head>
<body>
