<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@if (config('app.name')) {{ config('app.name') }} | 404 @endif </title>
    <meta content="" name="Md Thorat Islam" />
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{asset('backend')}}/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link id="main-css-href" rel="stylesheet" href="{{asset('backend')}}/css/style.css" />
    <link href="{{asset('backend')}}/images/favicon.png" rel="shortcut icon" />
    <script src="{{asset('backend')}}/plugins/nprogress/nprogress.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');

        body {
            background-color: #111111;
        }
        .page-404 {
            margin-top: 90px;
            padding: 40px;
            font-size: 95px;
            font-family: 'Monoton', cursive;
            text-align: center;
            text-transform: uppercase;
            text-shadow: 0 0 80px red,0 0 30px FireBrick,0 0 6px DarkRed;
            color: red;
        }
        .page-404 p{
            margin:5px;
            font-size: 2.98rem; !important;
        }
        #error:hover {
            text-shadow: 0 0 200px #ffffff,0 0 80px #008000,0 0 6px #0000ff;
        }
        #code:hover {
            text-shadow: 0 0 100px red,0 0 40px FireBrick,0 0 8px DarkRed;
        }
        #error {
            color: #fff;
            text-shadow: 0 0 80px #ffffff,0 0 30px #008000,0 0 6px #0000ff;
        }
        #error span {
            animation: upper 6s linear infinite;
        }
        #code span:nth-of-type(2) {
            animation: lower 9s linear infinite;
        }
        #code span:nth-of-type(1) {
            text-shadow: none;
            opacity:.4;
        }
        @keyframes upper {
            0%,19.999%,22%,62.999%,64%, 64.999%,70%,100% {
                opacity:.99;
                text-shadow: 0 0 80px #ffffff,0 0 30px #008000,0 0 6px #0000ff;
            }
            20%,21.999%,63%,63.999%,65%,69.999% {
                opacity:0.4;
                text-shadow: none;
            }
        }
        @keyframes lower {
            0%,12%,18.999%,23%,31.999%,37%,44.999%,46%,49.999%,51%,58.999%,61%,68.999%,71%,85.999%,96%,100% {
                opacity:0.99;
                text-shadow: 0 0 80px red,0 0 30px FireBrick,0 0 6px DarkRed;
            }
            19%,22.99%,32%,36.999%,45%,45.999%,50%,50.99%,59%,60.999%,69%,70.999%,86%,95.999% {
                opacity:0.4;
                text-shadow: none;
            }
        }

    </style>
</head>
<body class="bg-light-gray" id="body">
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="d-flex flex-column justify-content-between">
        <div class="row justify-content-center mt-5">
            <div class="text-center page-404">
                    <p>E <span>r</span>ror</p>
                    <p id="code">4<span>0</span><span>4</span></p>
                <a id="error" href="{{route('web_site')}}" class="btn btn-primary btn-pill">
                    <span>Back&nbsp;&nbsp;to&nbsp;&nbsp;</span><span>Home</span></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
