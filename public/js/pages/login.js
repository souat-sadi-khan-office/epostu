var _componentValidation = function() {
    $('#content_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('body').addClass('special-card');
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    $('#content_form').on('submit', function(e) {
        e.preventDefault();
        
        $('#submit').hide();
        $('#submitting').show();

        var submit_url = $('#content_form').attr('action');
        var formData = new FormData($("#content_form")[0]);
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
                    toastr.error(data.message);
                } else {
                    toastr.success(data.message);

                    setTimeout(function(){
                        window.location.href = data.goto;
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
                        p_notify(value);
                        i++;
                    });
                } else{
                    p_notify(jsonValue.message);
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
    _componentValidation();
})