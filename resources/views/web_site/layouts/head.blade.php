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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

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
            background-color: #171717;
        }

        .pricing-card {
            --col: #e4e4e7;
            position: relative;
            min-width: 360px;
            padding: 32px;
            padding-bottom: 96px;
            border-radius: 4px;
            border: 1px solid #262626;
            background-color: #26262620;
            box-shadow: 0 0 32px transparent;
            text-align: center;
        }

        .pricing-card.basic {
            --col: #0891b2;
        }

        .pricing-card.standard {
            --col: #059669;
        }

        .pricing-card.premium {
            --col: #c026d3;
        }

        .pricing-card:hover {
            border-color: var(--col);
            background-color: #26262680;
            box-shadow: 0 0 32px #171717;
            transform: translateY(-16px) scale(1.02);
            transition: all 0.5s ease;
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
            color: #a3a3a3;
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
            color: #a3a3a3;
            font-size: 16px;
            font-weight: lighter;
            text-align: left;
        }

        .pricing-card .features li i,
        .pricing-card .features li strong {
            color: #e4e4e7;
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
            color: #e4e4e7;
            font-size: 20px;
            font-weight: bold;
        }

        .pricing-card .cta-btn:active {
            background-color: transparent;
            color: var(--col);
            transition: all 0.3s ease;
        }
        /* Default styles */
        #hero {
            /*flex-direction: column;*/ /* Adjusted to vertically center content */
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
