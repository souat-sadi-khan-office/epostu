var _componentValidation = function() {
    $('#newsletter_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('body').addClass('special-card');
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    $('#newsletter_form').on('submit', function(e) {
        e.preventDefault();
        
        $('#newsletter_submit').hide();
        $('#newsletter_submitting').show();

        var submit_url = $('#newsletter_form').attr('action');
        var formData = new FormData($("#newsletter_form")[0]);
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

                    $("#newsletter_form")[0].reset();
                }
                
                $('#newsletter_submit').show();
                $('#newsletter_submitting').hide();
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

                $('#newsletter_submit').show();
                $('#newsletter_submitting').hide();
            }
        });
    });
};


// Initialize module
// ------------------------------

$(document).ready(function () {
    _componentValidation();

    $('#newsletter_submit').show();
    $('#newsletter_submitting').hide();
});

document.addEventListener('DOMContentLoaded', function () {
    if (!sessionStorage.getItem('modalShown')) {
        var modal = new bootstrap.Modal(document.getElementById('event-registration-banner'));
        modal.show();
        
        sessionStorage.setItem('modalShown', 'true');
    }
});