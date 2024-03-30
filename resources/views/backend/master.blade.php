@include('backend.layouts.head')
   @include('backend.layouts.left_side_nav')
    @include('backend.layouts.top_navbar')
        <div class="content-wrapper">
            @yield('content')
        </div>
    @include('backend.layouts.footer')


<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/simplebar/simplebar.min.js')}}"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
<script src="{{asset('public/backend/plugins/apexcharts/apexcharts.js')}}"></script>
<script src="{{asset('public/backend/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('public/backend/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script>
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
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{asset('public/backend/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('public/backend/js/mono.js')}}"></script>
<script src="{{asset('public/backend/js/chart.js')}}"></script>
<script src="{{asset('public/backend/js/map.js')}}"></script>
<script src="{{asset('public/backend/js/custom.js')}}"></script>
<script src="{{asset('public/backend/plugins/fullcalendar/core-4.3.1/main.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/fullcalendar/daygrid-4.3.0/main.min.js')}}"></script>
{{--<script src="{{asset('public/backend/js/calendar.js')}}"></script>--}}
<!--  -->
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
    function toggleEdit() {
        $('#personalDetailsTable input, #personalDetailsTable select').prop('disabled', function (_, attr) {
            return !attr;
        });

        // Show or hide save and close buttons in the last row
        var lastRow = $('#personalDetailsTable tbody tr:last');
        if ($('#saveBtn').length) {
            $('#saveBtn, #closeBtn').toggle();
        } else {
            lastRow.after(
                '<tr>' +
                    '<td class="text-right">' +
                        '<button id="saveBtn" onclick="saveChanges()" class="btn btn-outline-success">Save</button>' +
                    '</td>' +
                    '<td colspan="4" class="text-left">' +
                        '<button id="closeBtn" onclick="closeEdit()" class="btn btn-outline-info">Close</button>' +
                    '</td>'+
                '</tr>'
            );
        }
    }

    function saveChanges() {
        // Get the updated data
        var newData =
            {
                name    : $('#txtName').val(),
                phone   : $('#nbrPhone').val(),
                email   : $('#txtEmail').val(),
            };

        // Implement saving changes logic here
        console.log('Changes saved!');
        console.log('New data:', newData);

        // Get the updated image
        var newImage = $('#imageInput').prop('files')[0]; // Assuming 'imageInput' is the ID of the input for the image

        // Implement logic to upload the image, for example using FormData and AJAX
        var formData = new FormData();
        formData.append('image', newImage);
        alert(formData);
        // Example AJAX call:
        /*
        $.ajax({
            url: 'upload_image.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Image uploaded successfully.');
            },
            error: function(xhr, status, error) {
                console.error('Error uploading image:', error);
            }
        });
        */
    }

    function closeEdit() {
        $('#personalDetailsTable input, #personalDetailsTable select').prop('disabled', true);
        // $('#saveBtn, #closeBtn').remove();
        $('#personalDetailsTable tbody tr:last').remove();
    }
</script>
</body>
</html>
