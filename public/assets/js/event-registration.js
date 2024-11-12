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
                        window.location.href=data.goto;
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

    function validateCorporateEmail() {
        const emailField = document.getElementById("form_email");
        const email = emailField.value;
        const personalDomains = [
            "gmail.com",
            "yahoo.com",
            "outlook.com",
            "hotmail.com",
            "aol.com",
            "icloud.com",
            "protonmail.com",
            "zoho.com",
            "gmx.com"
        ];
    
        // Extract the domain from the email
        const emailDomain = email.split("@")[1];
    
        if (personalDomains.includes(emailDomain)) {
            emailField.setCustomValidity("Please use a corporate email address.");
        } else {
            emailField.setCustomValidity("");
        }
    
        emailField.reportValidity();
    }
    
    // Example usage: Add an event listener to your email field
    document.getElementById("form_email").addEventListener("input", validateCorporateEmail);
    
})