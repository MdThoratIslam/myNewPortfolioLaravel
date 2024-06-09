<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@if (config('app.name')){{ config('app.name') }}&nbsp;::&nbsp;@endif{{ $title ?? 'Md Thorat Islam' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .largeWidth {
            margin: 0 auto;
            width: 90%;
        }
        .pricing-plans {
            gap: 32px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            width: 100%;
            padding: 64px;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: "Open Sans", sans-serif;

            place-items: center;
            min-height: 100vh;
            /*background-color: #171717;*/
        }
        .pricing-card {
            --col: #262626;
            position: relative;
            min-width: 360px;
            padding: 32px;
            padding-bottom: 96px;
            border-radius: 4px;
            border: 1px solid #262626;
            /*background-color: #26262620;*/
            box-shadow: 0 0 32px transparent;
            text-align: center;
        }
        .pricing-card.basic {
            --col: #3dd5f3;
        }

        .pricing-card.standard {
            --col: #059669;
        }

        .pricing-card.premium {
            --col: #c026d3;
        }

        .pricing-card:hover
        {

            transform: translateY(-16px) scale(1.02);
            transition: all 0.5s ease;
            background-color: lightyellow; /* Light Gray */
            border-color: var(--col);
            /*box-shadow: 0 0 32px rgba(150, 95, 0, 0.1);*/
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .pricing-card:hover .features >li> .xmark {
            text-decoration: line-through;
        }


        .pricing-card > *:not(:last-child) {
            margin-bottom: 32px;
        }

        .pricing-card .heading h4 {
            padding-bottom: 12px;
            color: var(--col);
            font-size: 24px;
            font-weight: normal;
        }

        .pricing-card .heading p {
            color: #171a1d;
            font-size: 14px;
            font-weight: lighter;
        }

        .pricing-card .price {
            position: relative;
            color: var(--col);
            font-size: 60px;
            font-weight: bold;
        }

        .pricing-card .price sub {
            position: absolute;
            bottom: 14px;
            color: #a3a3a3;
            font-size: 14px;
            font-weight: lighter;
        }

        .pricing-card .features li {
            padding-bottom: 16px;
            color: #171a1d;
            font-size: 16px;
            font-weight: lighter;
            text-align: left;
        }

        .pricing-card .features li i,
        .pricing-card .features li strong {
            color: #171a1d;
            font-size: 16px;
            text-align: left;
        }

        .pricing-card .features li strong {
            padding-left: 24px;
        }

        .pricing-card .cta-btn {
            position: absolute;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            padding: 12px;
            border-radius: 4px;
            border: 1px solid var(--col);
            background-color: var(--col);
            color: #171a1d;
            font-size: 20px;
            font-weight: bold;
        }

        .pricing-card .cta-btn:active {
            background-color: transparent;
            color: var(--col);
            transition: all 0.3s ease;
        }

        /* CSS for the pricing modal */
        /* CSS for the modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 9999; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black background with opacity */
        }

        /* Modal content */
        .modal-content {
            background-color: #fefefe;
            margin: auto; /* Center horizontally */
            padding: 20px;
            border: 1px solid #888;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            width: 80%; /* Set default width */
            max-width: 80%; /* Adjust the maximum width as needed */
            min-width: 280px; /* Set minimum width */
            max-height: 80%; /* Adjust maximum height */
            overflow-y: auto; /* Enable vertical scroll if needed */
        }
        .modal-header{
            text-align: center !important;
            display: block;
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Responsive layout */
        @media screen and (max-width: 768px) {
            .modal-content {
                width: 90%; /* Adjust width for smaller screens */
                max-width: 90%; /* Adjust maximum width for smaller screens */
            }
        }

        /* Responsive layout for tablets */
        @media screen and (max-width: 1024px) {
            .modal-content {
                width: 70%; /* Adjust width for tablets */
                max-width: 70%; /* Adjust maximum width for tablets */
            }
        }

        /* Responsive layout for smaller laptops and desktops */
        @media screen and (min-width: 1025px) and (max-width: 1440px) {
            .modal-content {
                width: 50%; /* Adjust width for smaller laptops and desktops */
                max-width: 50%; /* Adjust maximum width for smaller laptops and desktops */
            }
        }

        /* Responsive layout for larger desktops */
        @media screen and (min-width: 1441px) {
            .modal-content {
                width: 40%; /* Adjust width for larger desktops */
                max-width: 40%; /* Adjust maximum width for larger desktops */
            }
        }

        /*end*/


        #hero {
            background: url('{{asset('public/web_site/assets/img/my_cover.jpg')}}') top center no-repeat;
            width: 100%;
            height: 90vh;
            background-size: cover;
            padding: 0 15px;
            display: flex;
            justify-content: center;">
        }

        /* Responsive styles */
        @media only screen and (max-width: 768px) and (min-width: 576px) {
            #hero {
                background: url('{{asset('public/web_site/assets/img/my_cover.jpg')}}') top center no-repeat;
                align-items: center;
                background-size: cover; /* Make the background image cover the entire background area */
                height: 80vh; /* Example height adjustment for smaller screens */
            }
        }

        @media only screen and (max-width: 768px) and (min-width: 576px) {
            #hero {
                height: 100vh; /* Example height adjustment for larger screens */
                background-size: cover; /* Make the background image cover the entire background area */
            }
        }
    </style>
    <!-- =======================================================
    * Template Name: Lonely
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
    ======================================================== -->
</head>

<body>
