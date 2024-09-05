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
    <meta content="Md Thorat Islam" name="author" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/v1/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/v1/js/plugins/toaster/toastr.min.css')}}">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
@yield('auth_content')
<script src="{{asset('public/backend/v1/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/backend/v1/js/popper.min.js')}}"></script>
<script src="{{asset('public/backend/v1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/backend/v1/js/main.js')}}"></script>
{{--<script src="{{asset('public/backend/v1/js/plugins/pace.min.js')}}"></script>--}}
<script src="{{asset('public/backend/v1/js/plugins/toaster/toastr.min.js')}}"></script>

<script>
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });

    // Toastr notification configuration
    toastr.options = {
        "closeButton"           : true,
        "newestOnTop"           : true,
        "progressBar"           : true,
        "positionClass"         : "toast-top-center",
        "preventDuplicates"     : false,
        "showDuration"          : "900",
        "hideDuration"          : "1000",
        "timeOut"               : "5000",
        "extendedTimeOut"       : "1000",
        "showEasing"            : "swing",
        "hideEasing"            : "linear",
        "className"             : "custom-toastr", // Set your custom CSS class here
        "showMethod"            : "fadeIn",
        "hideMethod"            : "fadeOut"
    };

    // Display notifications based on session data
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type) {
        case 'info':
            toastr.info("{!! Session::get('message') !!}");
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

    $(document).ready(function() {
        var emailInput;

        $("#email").on("change", function() {
            emailInput = $(this).val();
        });

        $(".btn-auth").on("click", function(e) {
            if (!validateEmail(emailInput)) {
                toastr.error("Please provide a valid email");
            }
        });

        function validateEmail(email) {
            var pattern = /^([\w-.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            return $.trim(email).match(pattern) ? true : false;
        }
    });
</script>
</body>
</html>
