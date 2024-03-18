<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@if (config('app.name')){{ config('app.name') }} |@endif{{ $title ?? 'Md Thorat Islam' }}</title>
    <meta content="" name="Md Thorat Islam">
    <meta content="" name="Md Thorat Islam">
    <!-- Favicons -->
    <link href="{{asset('web_site/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('web_site/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('web_site/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('web_site/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('web_site/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('web_site/assets/vendor/glightbox/css/glightbox.min.cs')}}s" rel="stylesheet">
    <link href="{{asset('web_site/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('web_site/assets/css/style.css')}}" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Lonely
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
    ======================================================== -->
</head>

<body>
