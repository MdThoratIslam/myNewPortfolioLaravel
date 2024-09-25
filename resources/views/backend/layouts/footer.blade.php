
<!--   Core JS Files   -->
<script src="{{asset('public/backend/v2/assets/js/core/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('public/backend/v2/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('public/backend/v2/assets/js/core/bootstrap.min.js')}}"></script>

{{--<!-- jQuery Scrollbar -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

{{--<!-- Chart JS -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/chart.js/chart.min.js')}}"></script>

{{--<!-- jQuery Sparkline -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

{{--<!-- Chart Circle -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

{{--<!-- Datatables -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/datatables/datatables.min.js')}}"></script>

{{--<!-- Bootstrap Notify -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

{{--<!-- jQuery Vector Maps -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
<script src="{{asset('public/backend/v2/assets/js/plugin/jsvectormap/world.js')}}"></script>

{{--<!-- Sweet Alert -->--}}
<script src="{{asset('public/backend/v2/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

{{--<!-- Kaiadmin JS -->--}}
<script src="{{asset('public/backend/v2/assets/js/kaiadmin.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.34/moment-timezone-with-data.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
{{--<!-- Kaiadmin DEMO methods, don't include it in your project! -->--}}
<script src="{{asset('public/backend/v2/assets/js/setting-demo.js')}}"></script>
<script src="{{asset('public/backend/v2/assets/js/demo.js')}}"></script>
<script>
    
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    var message = "{!! Session::get('message') !!}";
    var notifyType;

    switch(type)
    {
        case 'info':
            notifyType = 'info';
            break;

        case 'warning':
            notifyType = 'warning';
            break;

        case 'success':
            notifyType = 'success';
            break;

        case 'error':
            notifyType = 'danger';  // Note: 'danger' is often used instead of 'error' in notify
            break;
    }

    $.notify({
        icon: 'icon-check', // Use appropriate icon if available
        title: 'Notification', // You can customize the title
        message: message,
    },{
        type: notifyType,
        placement: {
            from: "top",   // You can adjust the placement
            align: "right"
        },
        delay: 5000, // Same as timeOut in toastr
        timer: 1000, // Same as extendedTimeOut in toastr
        allow_dismiss: true,
        newest_on_top: true,
        animate: {
            enter: 'animated fadeIn', // Customize animation classes
            exit: 'animated fadeOut'
        }
    });
    @endif
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
</script>
@yield('script')
</body>
</html>