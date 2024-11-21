@extends('frontend.layouts.app', ['title' => 'Event Registration - Join Today! | ePosTu'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="ePosTu">
 
<meta name="title" content="Register for the DigiTech ASEAN Thailand & AI Connect 2024 | Secure Your Spot Now | ePosTu">
<meta name="author" content="ePosTu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Sign up for the event DigiTech ASEAN Thailand & AI Connect 2024 hosted by ePosTu and secure your spot today! Complete the registration form and be part of an exciting event. Don't miss out on this opportunity to win an iPhone 16 or Special Gift.">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Register for the DigiTech ASEAN Thailand & AI Connect 2024 | Secure Your Spot Now | ePosTu">	
<meta property="og:description" content="Sign up for the event DigiTech ASEAN Thailand & AI Connect 2024 hosted by ePosTu and secure your spot today! Complete the registration form and be part of an exciting event. Don't miss out on this opportunity to win an iPhone 16 or Special Gift">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="ePosTu" /> 
<meta name="twitter:title" content="Register for the DigiTech ASEAN Thailand & AI Connect 2024 | Secure Your Spot Now | ePosTu" />
<meta name="twitter:description" content="Sign up for the event DigiTech ASEAN Thailand & AI Connect 2024 hosted by ePosTu and secure your spot today! Complete the registration form and be part of an exciting event. Don't miss out on this opportunity to win an iPhone 16 or Special Gift" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/event-registration.jpg') }}" style="background-image: url('{{ asset('assets/images/event-registration.jpg') }}');">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">Event 
                        <span class="underline-2 underline-gradient-2">
                            <span class="typer text-white" 
                            data-delay="100" 
                            data-words="Registration"></span><span class="cursor text-primary" data-owner="typer"></span>
                        </span>
                    </h1>
                    <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Book your seat before it finished.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light angled upper-end">
        <div class="container py-7 py-md-8">
            <h2 class="display-4 mb-3 text-center">
                Visitor Registration
            </h2>
            <p class="lead text-center mb-10">Thank you for visiting at DigiTech ASEAN Thailand & AI Connect 2024! <br> Please register and collect your gift.</p>
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-5">
                    <figure>
                        <img style="border-radius:10px;" class="w-auto" src="{{ asset('assets/images/event-registratoin-test.jpg') }}" srcset="{{ asset('assets/images/event-registratoin-test.jpg') }} 2x" alt="Event Registration Picture" /></figure>
                </div>
                <div class="col-lg-7" id="targetDiv">
                    
                    <form class="partner-form needs-validation" method="post" action="{{ route('submit.event.registration.form') }}" novalidate id="partner-form">
                        @csrf
                        <div class="messages"></div>

                        <div class="alert alert-success event-alert-success alert-icon" role="alert"></div>
                      
                        <div class="alert alert-danger event-alert-danger alert-icon" role="alert"></div>

                        <div class="row gx-4">
                            

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                    <label for="form_name">Full Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your first name. </div>
                                </div>
                            </div>

                            <!-- <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                    <label for="form_lastname">Last Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your last name. </div>
                                </div>
                            </div> -->

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required>
                                    <label for="form_email">Email *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your corporate email. </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_phone" type="tel" name="phone" class="form-control" >
                                    <span id="valid-msg" class="hide"></span>
                                        <span id="error-msg" class="hide"></span>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <p><b>Data Privacy Terms</b>: <br>By submitting this form, you agree your data will be used for marketing purposes. Your data will not be used for any other purpose.</p>
                            </div>

                            <div class="col-12 text-center">
                                <input type="submit" id="submit" style="display: none;"  class="btn btn-primary rounded-pill btn-send mb-3" value="Submit">
                                <button class="btn btn-primary mb-3" id="submitting" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm pr-4 mr-4" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <input type="hidden" id="phoneNumberVerified" value="false">
@endsection

@push('scripts')
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
    <style>
        .iti { width: 100%; }
        .iti__search-input {
            padding: 5px 10px;
        }
        .hide {
            display: none;
        }

        #error-msg {
            color:#dc3545;
        }
    </style>
    <script src="{{ asset('assets/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('assets/js/event-registration.js') }}"></script>
    <script>
        var _componentPartnerValidation = function() {
            $('.event-alert-success').hide();
            $('.event-alert-danger').hide();

            $('#partner-form').parsley().on('field:validated', function() {
                var ok = $('.parsley-error').length === 0;
                $('.bs-callout-info').toggleClass('hidden', !ok);
                $('body').addClass('special-card');
                $('.bs-callout-warning').toggleClass('hidden', ok);
            });
            $(document).on('submit', '#partner-form', function(e) {
                e.preventDefault();

                $('.event-alert-success').hide();
                $('.event-alert-danger').hide();

                let phoneNumberVerified = $('#phoneNumberVerified').val();
                if(phoneNumberVerified == false) {
                    return false;
                }

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
                            $('.event-alert-danger').show();
                            $('.event-alert-danger').html('<i class="uil uil-times-circle"></i> ' + data.message);

                            // toastr.warning(data.message);
                        } else {
                            $('.event-alert-success').show();
                            $('.event-alert-success').html('<i class="uil uil-check-circle"></i> ' + data.message);

                            // toastr.success(data.message);
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

    $('html, body').animate({
        scrollTop: $('#targetDiv').offset().top - 250
    }, 1000); 

    $('#submit').show();
    $('#submitting').hide();

    const input = document.querySelector("#form_phone");
    const errorMsg = document.querySelector("#error-msg");
    const validMsg = document.querySelector("#valid-msg");
    const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    const button = document.querySelector("#submit");

    const iti = window.intlTelInput(input, {
        initialCountry: "th",
        separateDialCode: true,
        strictMode: true,
        loadUtilsOnInit: "{{ asset('assets/js/utils.js') }}",
    });

    const reset = () => {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    const showError = (msg) => {
        input.classList.add("error");
        errorMsg.innerHTML = msg;
        errorMsg.classList.remove("hide");
    };

    // on click button: validate
    $('#phoneNumberVerified').val("false");
    button.addEventListener('click', () => {
        reset();
        if (!input.value.trim()) {
            showError("Required");
        } else if (iti.isValidNumberPrecise()) {
            validMsg.classList.remove("hide");
            $('#phoneNumberVerified').val("true");
        } else {
            const errorCode = iti.getValidationError();
            const msg = errorMap[errorCode] || "Invalid number";
            showError(msg);
        }
    });

    input.addEventListener('keyup', reset);

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
    _componentPartnerValidation();
    
})
    </script>
@endpush
