/*
 * Form Checkbox Uniform 
 */

var _componentDropFile = function() {

    $('.dropify').dropify();

};

/*
 * Form Select 2 For Modal 
 */

var _componentSelect2Modal = function() {
    if (!$().select2) {
        console.warn('Warning - select2.min.js is not loaded.');
        return;
    }

    $('.select').select2({
        dropdownAutoWidth: true,
        dropdownParent: $("#modal_remote .modal-content"),
    });

    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        dropdownAutoWidth: true,
        width: 'auto'
    });
};

/*
 * Form Select2
 */
var _componentSelect2Normal = function() {
    if (!$().select2) {
        console.warn('Warning - select2.min.js is not loaded.');
        return;
    }

    $('.select').select2({
        dropdownAutoWidth: true,
    });

    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        dropdownAutoWidth: true,
        width: 'auto'
    });
};

// For Opening Modal
var _componentRemoteModalLoadAfterAjax = function () {
    $(document).on('click', '#content_management', function (e) {
        e.preventDefault();
        $('#modal_remote').modal('toggle');
        var url = $(this).data('url');
        $('.modal-content').html('');
        $('#modal-loader').show();
        $.ajax({
            url: url,
            type: 'Get',
            dataType: 'html'
        })
        .done(function (data) {
            $('.modal-content').html(data);
            _componentSelect2Normal();
            _modalClassFormValidation();
        })
        .fail(function (data) {
            $('.modal-content').html('<span style="color:red; font-weight: bold;"> Something Went Wrong. Please Try again later.......</span>');
            $('#modal-loader').hide();
        });
    });
};

/*
 * Form Validation
 */
var _formValidation = function () {
    if ($('.content_form').length > 0) {
        $('.content_form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
    }

    $('.content_form').on('submit', function (e) {
        e.preventDefault();

        $('#submit').hide();
        $('#submitting').show();

        $(".ajax_error").remove();

        var submit_url = $('.content_form').attr('action');
        var formData = new FormData($(".content_form")[0]);

        if (CKEDITOR.instances['details']) {
            const descriptionData = CKEDITOR.instances['details'].getData();
            formData.append('description', descriptionData);
        }
        
        //Start Ajax
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'JSON',
            success: function (data) {
                console.log(data)
                if (!data.status) {
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
                    
                    // CKEDITOR.instances.editor.setData('');
                    // var preview = document.getElementById("preview");
                    // preview.innerHTML = "";

                    $('.content_form')[0].reset();
                    if (data.goto) {
                        setTimeout(function () {

                            window.location.href = data.goto;
                        }, 500);
                    }

                    if (data.load) {
                        setTimeout(function () {

                            window.location.href = "";
                        }, 500);
                    }

                    if (data.window) {
                        $('.content_form')[0].reset();
                        window.open(data.window, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=auto,left=auto,width=700,height=400");
                        setTimeout(function () {
                            window.location.href = '';
                        }, 1000);
                    }

                    if (data.load) {
                        setTimeout(function () {

                            window.location.href = "";
                        }, 1000);
                    }
                }

                $('#submit').show();
                $('#submitting').hide();
            },
            error: function (data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function (key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length > 0) {
                            $('#' + first_item).parsley().removeError('required', {
                                updateClass: true
                            });
                            $('#' + first_item).parsley().addError('required', {
                                message: value,
                                updateClass: true
                            });
                        }
                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        toastr.error(value);
                        i++;

                    });
                } else {
                    toastr.warning(jsonValue.message);

                }

                $('#submit').show();
                $('#submitting').hide();
            }
        });
    });
};

var _classFormValidation = function() {
    if ($('.ajax_form').length > 0) {
        $('.ajax_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    }
    
    $('.ajax_form').on('submit', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('.ajax_form').attr('action');
        //Start Ajax
        var formData = new FormData($(".ajax_form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
              if(data.status == 'danger'){
                    new PNotify({
                            title: 'Error',
                            text: data.message,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });
                   
                  }
            else {
                new PNotify({
                    title: 'Success',
                    text: data.message,
                    type: 'success',
                    addclass: 'alert alert-styled-left',
                });
                $('#submit').show();
                $('#submiting').hide();
                if (data.goto) {
                   setTimeout(function(){

                     window.location.href=data.goto;
                   },2500);
                }
                if (data.load) {
                  
                    setTimeout(function(){
                        window.location.href='';
                   },2500);
                }
            }
            },
            error: function(data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        $('#' + first_item).parsley().removeError('required', {
                            updateClass: true
                        });
                        $('#' + first_item).parsley().addError('required', {
                            message: value,
                            updateClass: true
                        });
                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        new PNotify({
                            title: 'Error',
                            text: value,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });
                        i++;
                    });
                } else {
                    new PNotify({
                        title: 'Something Wrong!',
                        text: jsonValue.message,
                        type: 'error',
                        addclass: 'alert alert-danger alert-styled-left',
                    });
                }
                _componentSelect2Normal();
                $('#submit').show();
                $('#submiting').hide();
            }
        });
    });
};

/*
 * Form Validation For Modal
 */
var _modalFormValidation = function() {
    if ($('#content_form').length > 0) {
        $('#content_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    }

    $('#content_form').on('submit', function(e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('#content_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#content_form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
                  if(data.status == 'danger'){
                    new PNotify({
                            title: 'Error',
                            text: data.message,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });
                   
                  }
              else{
                new PNotify({
                    title: 'Well Done!',
                    text: data.message,
                    type: 'success',
                    addclass: 'alert alert-styled-left',
                });
                $('#submit').show();
                $('#submiting').hide();
                $('#modal_remote').modal('toggle');
                 if (data.goto) {
                   setTimeout(function(){

                     window.location.href=data.goto;
                   },2500);
                }
                if (typeof(tariq) != "undefined" && tariq !== null) {
                    tariq.ajax.reload(null, false);
                }
            }
            },
            error: function(data) {
                var jsonValue = data.responseJSON;
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i];
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length > 0) {
                            $('#' + first_item).parsley().removeError('required', {
                                updateClass: true
                            });
                            $('#' + first_item).parsley().addError('required', {
                                message: value,
                                updateClass: true
                            });
                        }

                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        new PNotify({
                            width: '30%',
                            title: jsUcfirst(first_item) + ' Error!!',
                            text: value,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });
                        i++;
                    });
                } else {
                    new PNotify({
                        width: '30%',
                        title: 'Something Wrong!',
                        text: jsonValue.message,
                        type: 'error',
                        addclass: 'alert alert-danger alert-styled-left',
                    });
                }
                $('#submit').show();
                $('#submiting').hide();
            }
        });
    });
};

// For Submitting Modal Form
var _modalClassFormValidation = function () {
    if ($('.ajax-form').length > 0) {
        $('.ajax-form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
    }
    $('.ajax-form').on('submit', function (e) {
        e.preventDefault();
        $('#submit').hide();
        $('#submitting').show();
        $(".ajax_error").remove();
        var submit_url = $('.ajax-form').attr('action');
        var formData = new FormData($(".ajax-form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'JSON',
            success: function (data) {
                if (data.status) {

                    console.log(data);

                    toastr.success(data.message);
                    $('#submit').show();
                    $('#submitting').hide();

                    if(!data.stay) {
                        $('#modal_remote').modal('toggle');
                    }

                    if (data.goto) {
                        setTimeout(function () {
                            window.location.href = data.goto;
                        }, 1000);
                    }

                    if (data.load) {
                        setTimeout(function () {
                            window.location.href = "";
                        }, 1000);
                    }
                } else {
                    toastr.error(data.message);
                }
            },
            error: function (data) {
                console.log(data.responseJSON);
                var jsonValue = data.responseJSON;
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function (key, value) {
                        const first_item = Object.keys(errors)[i];
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length > 0) {
                            $('#' + first_item).parsley().removeError('required', {
                                updateClass: true
                            });
                            $('#' + first_item).parsley().addError('required', {
                                message: value,
                                updateClass: true
                            });
                        }

                        toastr.error(value);
                        i++;
                    });
                } else {
                    toastr.error(jsonValue.message);
                }

                $('#submit').show();
                $('#submitting').hide();
            }
        });
    });
};

/*
* For Logout
*/
$(document).ready(function() {
    $(document).on('click', '#logout', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
    
        Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out for this session!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Logout',
            cancelButtonText: 'Cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    method: 'POST',
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'JSON',
                    success: function(data) {
                        toastr.success(data.message);
            
                        setTimeout(function() {
                            window.location.href = data.goto;
                        }, 2000);
                    },
                    error: function(data) {
                        var jsonValue = $.parseJSON(data.responseText);
                        const errors = jsonValue.errors
                        var i = 0;
                        $.each(errors, function(key, value) {
                            toastr.success(value);
                            i++;
                        });
                    }
                });
            }
        });
    });
});

// For delete items
$(document).on('click', '#delete_item', function(e) {
    e.preventDefault();
    var row = $(this).data('id');
    var url = $(this).data('url');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                method: 'Delete',
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'JSON',
                success: function(data) {

                    if (data.status) {

                        toastr.success(data.message);
                        if (data.load) {
                            setTimeout(function() {

                                window.location.href = "";
                            }, 1000);
                        }

                    } else {
                        toastr.warning(data.message);
                    }
                },
                error: function(data) {
                    var jsonValue = $.parseJSON(data.responseText);
                    const errors = jsonValue.errors
                    var i = 0;
                    $.each(errors, function(key, value) {
                        toastr.error(value);
                        i++;
                    });
                }
            });
        }
    });

});

/*
 * For Uppercase Word first Letter
 */
function jsUcFirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function p_notify(msg= 'Something Wrong', type='error', title="Ops!!" ){
    new PNotify({
        title: title,
        text: msg,
        type: type,
        addclass: 'alert alert-styled-left',
    });
}