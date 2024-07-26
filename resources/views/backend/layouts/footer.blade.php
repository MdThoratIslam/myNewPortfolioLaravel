<footer class="footer mt-auto" >
    <div class="copyright bg-white">
        <p>Copyright
            &copy; <span id="copy-year"></span>,
{{--            Copyright Mono Dashboard Bootstrap Template by--}}

            <a class="text-primary" href="" target="_blank" >Md Thorat Islam</a>.
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        // var date = new Date().getDate();
        // months is full name show
         var month = d.toLocaleString('default', { month: 'long' });
        var date = d.getDate()+"-"+ month +"-"+ d.getFullYear();
        document.getElementById("copy-year").innerHTML = date;
    </script>
</footer>
</div>
</div>
<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/simplebar/simplebar.min.js')}}"></script>

{{--<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>--}}

<script src="{{asset('public/backend/plugins/apexcharts/apexcharts.js')}}"></script>
<script src="{{asset('public/backend/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('public/backend/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>

<script src="{{asset('public/backend/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{asset('public/backend/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('public/backend/js/mono.js')}}"></script>
<script src="{{asset('public/backend/js/chart.js')}}"></script>
<script src="{{asset('public/backend/js/map.js')}}"></script>
<script src="{{asset('public/backend/js/custom.js')}}"></script>

{{--<script src="{{asset('public/backend/js/calendar.js')}}"></script>--}}
<!--  -->
<script src="{{asset('public/backend/js/pusherJavaScripLibraryV8.2.0.js')}}"></script>
{{--<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>--}}
<script>

</script>
<script src="{{ asset('public/backend/js/edit_personal_details.js') }}"></script>
<script>
    NProgress.done();
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton"       : true,
            "newestOnTop"       : true,
            "progressBar"       : true,
            "positionClass"     : "toast-top-right",
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
    jQuery(document).ready(function() {
        jQuery('input[name="dateRange"]').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
            jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
        });
        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
            jQuery(this).val('');
        });
    });

    // =================== If web site contact form is submitted successfully then show toastr message by Pusher========
    $(document).ready(function() {
        var $contentContainer = $('#all');
        var $emailCountElements = $('.email-count');
        var currentCount = 0;

        if ($emailCountElements.length > 0) {
            var match = $emailCountElements.first().text().match(/\d+/);
            if (match) {
                currentCount = parseInt(match[0], 10);
            }
        }

        // Enable Pusher logging for debugging (disable in production)
        Pusher.logToConsole = true;

        // Initialize Pusher
        var pusher = new Pusher('e3601fec7e647f163555', {
            cluster: 'ap1',
            encrypted: true
        });

        // Subscribe to a Pusher channel
        var channel = pusher.subscribe('channel-portfolio');

        // Bind a function to handle the 'status-liked' event
        channel.bind('status-liked', function(data) {
            toastr.success('Notification: ' + data.data.message);
            currentCount++;

            $emailCountElements.text(`(${currentCount})`);

            // Dynamically create the media element for the notification
            var mediaHtml = `
                <div class="media media-sm p-4 mb-0">
                    <div class="media-sm-wrapper">
                        <a href="user-profile.html"><img src="${data.data.imageUrl}" alt="User Image" style="width: 50px; height: 50px;"></a>
                    </div>
                    <div class="media-body">
                        <a href="user-profile.html">
                            <span class="title mb-0">${data.data.title}</span>
                            <span class="discribe">${data.data.description}</span>
                            <span class="time"><time>${data.data.timeAgo}</time></span>
                        </a>
                    </div>
                </div>
            `;

            $contentContainer.append(mediaHtml);
            console.log('Data received and added to the DOM:', data);
        });
    });
    //==================================================================================================================
</script>
@yield('script')
</body>
</html>
