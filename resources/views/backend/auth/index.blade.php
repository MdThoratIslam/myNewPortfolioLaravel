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
    <link href="{{asset('public/backend/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />

    {{--    <link href="{{asset('public/backend/images/favicon.png')}}" rel="shortcut icon" />--}}
    <script src="{{asset('public/backend/plugins/nprogress/nprogress.js')}}"></script>
</head>
<body class="bg-light-gray" id="body" style="background-image: url('{{asset('public/backend/images/bg.jpeg')}}');
background-size: cover; background-repeat: no-repeat; background-position:center;">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            @yield('auth_content')
        </div>
    </div>
    <script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/plugins/toaster/toastr.min.js')}}"></script>


    <script>
        toastr.options =
            {
                "closeButton"       : true,
                "newestOnTop"       : true,
                "progressBar"       : true,
                "positionClass"     : "toast-top-center",
                "preventDuplicates" : false,
                "showDuration"      : "900",
                "hideDuration"      : "1000",
                "timeOut"           : "5000",
                "extendedTimeOut"   : "1000",
                "showEasing"        : "swing",
                "hideEasing"        : "linear",
                "className"         : "custom-toastr", // Set your custom CSS class here
                "showMethod"        : "fadeIn",
                "hideMethod"        : "fadeOut"
            }
        @if(Session::has('message'))

        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type)
        {
            case 'info':
                toastr.info("{!! Session::get('message') !!} ");
                break;

            case 'warning':
                toastr.warning("{!! Session::get('message') !!}");
                break;

            case 'success':
                toastr.success("{!! Session::get('message') !!}");
                break;

            case 'error':
                toastr.error("{!! Session::get('message') !!}");
                break;
        }
        @endif


        $(document).ready(function (){
            var emailInput;

            $("#email").on("change", function()
            {
                emailInput = $(this).val();
            });

            $(".btn-auth").on("click", function(e) {
                // e.preventDefault();
                if (!validateEmail(emailInput))
                {
                    toastr.error("Please Valied Email");
                }
            });

            function validateEmail(email) {
                var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

                return $.trim(email).match(pattern) ? true : false;
            }

        });
</script>
</body>
</html>
