@extends('admin.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">General Settings</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">General Settings</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button class="btn btn-primary"><i class="ri-refresh-line mr-2"></i>Refresh</button>
                </div>                        
            </div>
        </div>          
    </div>

    <div class="contentbar">                
        <form action="{{ route('admin.settings.update') }}" method="POST" class="content_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">Content</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="email_address">Email Address</label>
                                    <input type="text" name="email_address" id="email_address" class="form-control" value="{{ get_settings('email_address') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="footer_content">Footer Content</label>
                                    <textarea  name="footer_content" id="footer_content" class="form-control" cols="30" rows="3">{{ get_settings('footer_content') }}</textarea>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="footer_phone_one">Phone Number One</label>
                                    <input type="text" name="footer_phone_one" id="footer_phone_one" class="form-control" value="{{ get_settings('footer_phone_one') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="footer_phone_two">Phone Number Two</label>
                                    <input type="text" name="footer_phone_two" id="footer_phone_two" class="form-control" value="{{ get_settings('footer_phone_two') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="footer_address">Footer Address</label>
                                    <textarea name="footer_address" id="footer_address" class="form-control" cols="30" rows="3">{{ get_settings('footer_address') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">Social Links</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="facebook_link">Facebook</label>
                                    <input type="url" name="facebook_link" id="facebook_link" class="form-control" value="{{ get_settings('facebook_link') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="twitter_link">Twitter</label>
                                    <input type="text" name="twitter_link" id="twitter_link" class="form-control" value="{{ get_settings('twitter_link') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="linkedin_link">LinkedIn</label>
                                    <input type="text" name="linkedin_link" id="linkedin_link" class="form-control" value="{{ get_settings('linkedin_link') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="instagram_link">Instagram</label>
                                    <input type="text" name="instagram_link" id="instagram_link" class="form-control" value="{{ get_settings('instagram_link') }}">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="youtube_link">Youtube</label>
                                    <input type="text" name="youtube_link" id="youtube_link" class="form-control" value="{{ get_settings('youtube_link') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">Google Map</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="google_map">Google Map Embed Code</label>
                                    <textarea name="google_map" id="google_map" cols="30" rows="3" class="form-control">{{ get_settings('google_map') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">Gift Email Template</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="gift_template_subject">Subject</label>
                                    <input type="text" name="gift_template_subject" id="gift_template_subject" class="form-control" value="{{ get_settings('gift_template_subject') }}">
                                </div>
                                <div class="col-md-12 mt-3 form-group">
                                    <label for="gift_template_body">Body</label>
                                    <textarea name="gift_template_body" id="gift_template_body" cols="30" rows="4" class="form-control">{{ get_settings('gift_template_body') }}</textarea>
                                    <small class="text-muted">
                                        Name - [-NAME-] <br>
                                        Email - [-EMAIL-] <br>
                                        Phone - [-PHONE-] <br>
                                        Gift Picture - [-GIFT_PICTURE-] <br>
                                        Gift Item Name - [-GIFT_NAME-]
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    <button type="submit" id="submit" class="btn btn-success btn-block">
                                        <i class="bi bi-send"></i>
                                        Update
                                    </button>
                                    <button class="btn btn-warning btn-block" style="display: none;" id="submitting" type="button"
                                        disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>    
    <script>

        let _initCkEditor = function(editorName, startupFocus = false, editorHeight = false) {
            CKEDITOR.replace(editorName, {
                filebrowserUploadMethod: 'form',
                height: editorHeight ? editorHeight : '',
                startupFocus: startupFocus == 1 ? true : false,
                removePlugins: 'exportpdf',
            });
        }

        _initCkEditor('gift_template_body');

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

            if (typeof CKEDITOR !== 'undefined' && CKEDITOR.instances['gift_template_body']) {
                const descriptionData = CKEDITOR.instances['gift_template_body'].getData();
                formData.append('gift_template_body', descriptionData);
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
    </script>
@endpush