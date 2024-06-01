<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Portfolio</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="{{route('web_site')}}">Engr Muhammad Tourat Islam (Oni)</a>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.6/platform.min.js"></script>
<script src="{{asset('public/web_site/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/isotope_layout/isotope_pkgd.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('public/web_site/assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js" integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        var modal = $("#myModal");
        var btns = $(".cta-btn");
        var span = $(".close");
        btns.click(function() {
            modal.css("display", "block");
            var id = $(this).attr('data-id');
        });
        span.click(function() {
            modal.css("display", "none");
        });
        $(window).click(function(event) {
            if (event.target == modal[0]) {
                modal.css("display", "none");
            }
        });
        $('.cta-btn').on('click', function()
        {
            var type = $(this).data('type');
            var price = $(this).data('price');
            var description = $(this).data('description');
            $('#type').val(type);
            if (type == 1)
            {
                $('#package_name').text('Basic');
                $('#description').text(description);
            } else if (type == 2) {
                $('#package_name').text('Standard');
                $('#description').text(description);
            } else if (type == 3) {
                $('#package_name').text('Premium');
                $('#description').text(description);
            }
        });
    });

    /*=============================================================================================================================================================
    *
    * This script is used to download the CV after confirming the user's intention and prompting them to enter a reason for downloading the CV.
    *
    * ============================================================================================================================================================*/
    $(document).ready(function() {
        $('#downloadCV').click(function() {
            // Confirm intention to download
            bootbox.confirm({
                container: 'body',
                centerVertical: true,
                title: "Are you sure!!",
                message: "you want to download my CV?",
                className: 'bootbox-sm largeWidth',
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function(result) {
                    if (result) {
                        // Prompt for reason
                        bootbox.prompt({
                            title: "Please enter your reason",
                            container: 'body',
                            centerVertical: true,
                            closeButton: false,
                            buttons: {
                                confirm: {
                                    label: 'Submit',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: 'Cancel',
                                    className: 'btn-danger'
                                }
                            },
                            callback: function(reason) {
                                if (reason !== null && reason.trim() !== "") {
                                    // Gather device information
                                    var platformInfo = platform;
                                    var deviceData = {
                                        reason: reason,
                                        device_id: platformInfo.ua,
                                        device_type: platformInfo.product || 'unknown',
                                        device_name: platformInfo.name || 'unknown',
                                        device_model: platformInfo.product || 'unknown',
                                        device_os: platformInfo.os.family || 'unknown',
                                        device_os_version: platformInfo.os.version || 'unknown',
                                        device_browser: platformInfo.name || 'unknown',
                                        device_browser_version: platformInfo.version || 'unknown',
                                        device_is_mobile: platformInfo.layout === 'mobile' ? 'true' : 'false',
                                        device_is_tablet: platformInfo.layout === 'tablet' ? 'true' : 'false',
                                        device_is_desktop: platformInfo.layout === 'desktop' ? 'true' : 'false',
                                        device_mobile_number: platformInfo.mobile || 'unknown', // Mobile number
                                    };

                                    // POST reason and device data to server using Fetch API
                                    fetch('{{ route("downloadCV") }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is available
                                        },
                                        body: JSON.stringify(deviceData)
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                window.location.href = data.cvUrl;
                                            } else {
                                                // Server-side error
                                                bootbox.alert("Failed to store the reason. Please try again.");
                                            }
                                        })
                                        .catch(() => {
                                            // Error in fetching
                                            bootbox.alert("An error occurred. Please try again.");
                                        });
                                } else if (reason === "") {
                                    // If no reason entered
                                    bootbox.alert("Please enter a reason to download the CV.");
                                }
                            }
                        });
                    }
                }
            });
        });
    });
</script>
</body>
</html>
