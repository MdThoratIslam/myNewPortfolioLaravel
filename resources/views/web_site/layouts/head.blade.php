<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@if (config('app.name')){{ config('app.name') }}&nbsp;|&nbsp;@endif{{ $title ?? 'Md Thorat Islam' }}</title>
    <meta content="" name="Md Thorat Islam">
    <meta content="" name="Md Thorat Islam">
    <!-- Favicons -->
    <link href="{{asset('public/web_site/assets/img/paper-plane.png')}}" rel="icon">
    <link href="{{asset('public/web_site/assets/img/paper-plane.png')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('public/web_site/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/web_site/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('public/web_site/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/web_site/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/web_site/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('public/web_site/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/web_site/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />

    <style>
        .pricing-table {
            background: #fff;
            box-shadow: 0px 1px 10px -6px rgba(0, 0, 0, .15);
            padding: 2rem;
            border-radius: 4px;
            transition: .3s;
        }

        .pricing-table:hover {
            box-shadow: 0px 1px 10px -4px rgba(0, 0, 0, .15);
        }

        .pricing-table .pricing-label {
            border-radius: 2px;
            padding: .25rem .5rem;
            margin-bottom: 1rem;
            display: inline-block;
            font-size: 12px;
            font-weight: 500;
        }

        .pricing-table h2 {
            color: #3b3b3b;
            font-size: 24px;
            font-weight: 500;
        }

        .pricing-table h5 {
            color: #B3B3B3;
            font-size: 14px;
            font-weight: 400;
        }

        .pricing-table .pricing-features {
            margin-top: 2rem;
        }

        .pricing-table .pricing-features .feature {
            font-size: 14px;
            margin: .5rem 0;
            color: #B3B3B3;
        }

        .pricing-table .pricing-features .feature span {
            display: inline-block;
            float: right;
            color: #3b3b3b;
            font-weight: 500;
        }

        .pricing-table 	.price-tag {
            margin-top: 2rem;
            text-align: center;
            font-weight: 500;
        }

        .pricing-table .price-tag .symbol {
            font-size: 24px;
        }

        .pricing-table .price-tag .amount {
            letter-spacing: -2px;
            font-size: 64px;
        }

        .pricing-table .price-tag .after {
            color: #3b3b3b;
            font-weight: 500;
        }

        .pricing-table .price-button {
            display: block;
            color: #fff;
            margin-top: 2rem;
            padding: .75rem;
            border-radius: 2px;
            text-align: center;
            font-weight: 500;
            transition: .3s;
        }

        .pricing-table .price-button:hover {
            text-decoration: none;
        }

        .purple .pricing-label {
            background: #cad2ff;
            color: #627afe;
        }

        .purple .price-tag {
            color: #627afe;
        }

        .purple .price-button {
            background: #627afe;
        }

        .purple .price-button:hover {
            background: #546dfe;
        }

        .turquoise .pricing-label {
            background: #b9edee;
            color: #44cdd2;
        }

        .turquoise .price-tag {
            color: #44cdd2;
        }

        .turquoise .price-button {
            background: #44cdd2;
        }

        .turquoise .price-button:hover {
            background: #2dbcc4;
        }

        .red .pricing-label {
            background: #ffc4c4;
            color: #ff5e5e;
        }

        .red .price-tag {
            color: #ff5e5e;
        }

        .red .price-button {
            background: #ff5e5e;
        }

        .red .price-button:hover {
            background: #f23c3c;
        }
    </style>
    <!-- =======================================================
    * Template Name: Lonely
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
    ======================================================== -->
</head>

<body>
