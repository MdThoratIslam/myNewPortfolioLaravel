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
<script src="{{asset('public/web_site/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/isotope_layout/isotope_pkgd.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('public/web_site/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('public/web_site/assets/js/main.js')}}"></script>

<script>
    $(document).ready(function() {
        // Get the modal
        var modal = $("#myModal");

        // Get the button that opens the modal
        var btns = $(".cta-btn");

        // Get the <span> element that closes the modal
        var span = $(".close");

        // When the user clicks the button, open the modal
        btns.click(function() {
            modal.css("display", "block");
            var id = $(this).attr('data-id');
            // You can use the 'id' here as needed
        });

        // When the user clicks on <span> (x), close the modal
        span.click(function() {
            modal.css("display", "none");
        });

        // When the user clicks anywhere outside of the modal, close it
        $(window).click(function(event) {
            if (event.target == modal[0]) {
                modal.css("display", "none");
            }
        });

        // Set value for input with id 'type' when a button is clicked
        $('.cta-btn').on('click', function()
        {
            var type = $(this).data('type');
            var price = $(this).data('price');
            var description = $(this).data('description');
            $('#type').val(type);
            if (type == 1)
            {
                // $('#service').html('<option selected value="1">Basic</option>');
                $('#package_name').text('Basic');
                $('#description').text(description);
            } else if (type == 2) {
                // $('#service').html('<option selected value="2">Standard</option>');
                $('#package_name').text('Standard');
                $('#description').text(description);

            } else if (type == 3) {
                // $('#service').html('<option selected value="3">Premium</option>');
                $('#package_name').text('Premium');
                $('#description').text(description);
            }
        });
    });
</script>
</body>
</html>
