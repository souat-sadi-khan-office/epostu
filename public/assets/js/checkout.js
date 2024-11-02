var _checkOUtValidation = function() {
    $('#checkout_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('body').addClass('special-card');
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    $('#checkout_form').on('submit', function(e) {
        e.preventDefault();
        
        $('#submit').hide();
        $('#submitting').show();

        var submit_url = $('#checkout_form').attr('action');
        var formData = new FormData($("#checkout_form")[0]);
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
                    if (data.validator) {
                        for (const [key, messages] of Object.entries(data.message)) {
                            messages.forEach(message => {
                                toastr.error(message);
                            });
                        }
                    } else {
                        toastr.error(data.message);
                    }

                    if (data.errors) {
                        for (const [key, message] of Object.entries(data.errors)) {
                            toastr.error(message);
                        }
                    }
                } else {
                    toastr.success(data.message);

                    if(data.goto) {
                        setTimeout(() => {
                            window.location.href=data.goto;
                        }, 2500);
                    }

                    $("#checkout_form")[0].reset();
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
    _checkOUtValidation();

    $('#submit').show();
    $('#submitting').hide();
})