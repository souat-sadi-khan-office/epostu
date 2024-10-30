var _componentPartnerValidation = function() {
    $('#partner-form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('body').addClass('special-card');
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    $(document).on('submit', '#partner-form', function(e) {
        e.preventDefault();

        $('#submit').hide();
        $('#submitting').show();

        var submit_url = $('#partner-form').attr('action');
        var formData = new FormData($("#partner-form")[0]);
        formData.append('form_submit', true);

        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, 
            cache: false,
            processData: false,
            dataType: 'JSON',
            success: function(data) {
                if(data.status == false) {
                    toastr.warning(data.message);
                } else {
                    toastr.success(data.message);
                    $("#partner-form")[0].reset();

                    setTimeout(() => {
                        window.location.href="";
                    }, 2000);
                }
                
                $('#submit').show();
                $('#submitting').hide();
            },
            error: function(data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i];
                        const message = errors[first_item][0];
                        if($('#' + first_item).length > 0){
                            $('#' + first_item).parsley().removeError('required', {updateClass: true});
                            $('#' + first_item).parsley().addError('required', {message: value, updateClass: true});
                        }
                        toastr.error(value);
                        i++;
                    });
                } else{
                    toastr.error(jsonValue.message);
                }

                $('#submit').show();
                $('#submitting').hide();
            }
        });
    });
};


// Initialize module
// ------------------------------

$(document).ready(function () {
    _componentPartnerValidation();

    $('#submit').show();
    $('#submitting').hide();

    $('.partner-form input, .partner-form textarea').on('input', function() {
        autosaveForm();
    });

    // Function to autosave data when any field is changed
    function autosaveForm() {
        // Collect form data
        const formData = {
            session_id: $('#session_id').val(),
            name: $('#form_name').val(),
            surname: $('#form_lastname').val(),
            email: $('#form_email').val(),
            phone: $('#form_phone').val(),
            company_name: $('#form_company_name').val(),
            contact_person: $('#form_contact_person').val(),
            message: $('#form_message').val()
        };

        $.ajax({
            url: '/submit/partner-form',
            method: 'POST',
            data: formData,
            success: function(response) {
                console.log('Autosaved successfully:', response.message);
            },
            error: function(xhr) {
                console.log('Autosave failed:', xhr.responseText);
            }
        });
    }
})