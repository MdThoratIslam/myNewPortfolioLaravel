function toggleEdit()
{
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
            '<button type="button" id="saveBtn" onclick="saveChanges()" class="btn btn-outline-success">Save</button>' +
            '</td>' +
            '<td colspan="4" class="text-left">' +
            '<button type="button" id="closeBtn" onclick="closeEdit()" class="btn btn-outline-info">Close</button>' +
            '</td>'+
            '</tr>'
        );
    }
}
function saveChanges()
{
    // Get the updated data
    var userId = $('#personalDetailsTable').data('user-id');
    var newData =
        {
            name                    : $('#txtName').val(),
            phone                   : $('#nbrPhone').val(),
            email                   : $('#txtEmail').val(),

            txtFatherName           : $('#txtFatherName').val(),
            txtMotherName           : $('#txtMotherName').val(),
            txtDateofBirth          : $('#txtDateofBirth').val(),

            cbo_religion            : $('#cbo_religion').val(),
            cbo_marital_status      : $('#cbo_marital_status').val(),
            cbo_gender              : $('#cbo_gender').val(),

            cbo_blood_group_id      : $('#cbo_blood_group_id').val(),
            cbo_place_of_birth      : $('#cbo_place_of_birth').val(),
            nbr_birth_certificate   : $('#nbr_birth_certificate').val(),

            cbo_nationality_id      : $('#cbo_nationality_id').val(),
            passport                : $('#txtPassportNo').val(),
            nid                     : $('#nbr_nid').val(),

            cbo_user_type           : $('#cbo_user_type').val(),
        };

    // Get the updated
    var photoImage              = $('#user_photo_path').prop('files')[0] || null;
    var signImage               = $('#user_sign_path').prop('files')[0] || null;

    var formData                = new FormData();

    formData.append('photoImage',           photoImage);
    formData.append('signImage',            signImage);

    formData.append('name',                 newData.name);
    formData.append('phone',                newData.phone);
    formData.append('email',                newData.email);

    formData.append('father_name',          newData.txtFatherName);
    formData.append('mother_name',          newData.txtMotherName);
    formData.append('date_of_birth',        newData.txtDateofBirth);

    formData.append('marital_status_id',    newData.cbo_marital_status);
    formData.append('religion_id',          newData.cbo_religion);
    formData.append('gender_id',            newData.cbo_gender);

    formData.append('blood_group_id',       newData.cbo_blood_group_id);
    formData.append('place_of_birth',       newData.cbo_place_of_birth);
    formData.append('birth_certificate',    newData.nbr_birth_certificate);

    formData.append('nationality_id',       newData.cbo_nationality_id);
    formData.append('passport',             newData.passport);
    formData.append('nid',                  newData.nid);

    formData.append('user_type',            newData.cbo_user_type);

    var urlContainer = document.getElementById('personalDetailsform');
    var url = urlContainer.dataset.url; // Get the URL from data-url attribute
    url = url.replace(':id', userId);
    $.ajax({
        // url: '/protfolio/admin/users-list/' + userId,
        url: url,
        type: 'POST',
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function(response)
        {
            var type = response.alert_type;
            var message = response.message;
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
            switch(type)
            {
                case 'info':
                    toastr.info(message);
                    break;

                case 'warning':
                    toastr.warning(message);
                    break;

                case 'success':
                    toastr.success(message);
                    setTimeout(function()
                    {
                        closeEdit();
                        window.location.href = "users-setting";
                    }, 5000); // 5 seconds delay
                    break;

                case 'error':
                    toastr.error(message);
                    break;
            }
            closeEdit();
            window.location.href = "users-setting";
        },
        error: function(xhr, status, error)
        {
            var errorMessage = xhr.status + ': ' + xhr.statusText;
            toastr.error(errorMessage);
        }
    });
}
$('#user_photo_path').on('change', function()
{
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#user_photo').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
    } else {
        $('#user_photo').attr('src', $('#user_photo').data('default'));
    }
});
$('#user_sign_path').on('change', function()
{
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#signImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
    } else {
        $('#signImage').attr('src', $('#signImage').data('default'));
    }
});
function closeEdit() {
    $('#personalDetailsTable input, #personalDetailsTable select').prop('disabled', true);
    // $('#saveBtn, #closeBtn').remove();
    $('#personalDetailsTable tbody tr:last').remove();
}
