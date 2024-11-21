@extends('frontend.layouts.app', ['title' => 'Contact Us - Get in Touch with ePosTu'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="ePosTu">
 
<meta name="title" content="Contact Us | Reach Out to ePosTu for Reliable Support & Inquiries">
<meta name="author" content="ePosTu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Have questions or need reliable support? Contact ePosTu today for quick assistance. Reach us via email, phone, or our easy-to-use contact form.">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Contact Us | Reach Out to ePosTu for Reliable Support & Inquiries">	
<meta property="og:description" content="Have questions or need reliable support? Contact ePosTu today for quick assistance. Reach us via email, phone, or our easy-to-use contact form.">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="ePosTu" /> 
<meta name="twitter:title" content="Contact Us | Reach Out to ePosTu for Reliable Support & Inquiries" />
<meta name="twitter:description" content="Have questions or need reliable support? Contact ePosTu today for quick assistance. Reach us via email, phone, or our easy-to-use contact form." />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Contact Us - Get in Touch with ePosTu",
        "url": "https://epostu.com/contact",
        "description": "Get in touch with ePosTu for any inquiries. We're here to assist you with cloud-based email hosting and communication services.",
        "mainEntityOfPage": "https://epostu.com/contact",
        "publisher": {
            "@type": "Organization",
            "name": "ePosTu",
            "logo": "https://epostu.com/assets/images/logo.png",
            "url": "https://epostu.com",
            "contactPoint": {
                "@type": "ContactPoint",
                "address": "30 cecil street #14-01 prudential tower, Singapore 049712",
                "contactType": "Customer Support",
                "areaServed": "Worldwide",
                "availableLanguage": "English"
            }
        },
        "image": "https://epostu.com/assets/images/contact.jpg"
    }
</script>
    
@endsection
@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/contact.jpg') }}">
    <div class="container pt-18 pt-md-20 pb-12 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h1 class="display-1 text-white mb-3">Any Queries</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">We will Be Happy to Assist You in Any Way We Can.</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="container py-4 py-md-8">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="row gx-0">
                        <div class="col-lg-12 align-self-stretch">
                            <div class="map map-full rounded-top rounded-lg-start">
                                {!! get_settings('google_map') !!}
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="p-5 p-md-5 p-lg-5">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> 
                                            <i class="uil uil-location-pin-alt"></i> 
                                        </div>
                                    </div>
                                    <div class="align-self-start justify-content-start">
                                        <h5 class="mb-1">{{ get_settings('footer_address') }}</h5>
                                        <address></address>
                                    </div>
                                </div>
                                {{-- <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> 
                                            <i class="uil uil-phone-volume"></i> 
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <p>{{ get_settings('footer_phone_one') }} <br class="d-none d-md-block" />{{ get_settings('footer_phone_two') }}</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0"><a href="mailto:{{ get_settings('email_address') }}" class="link-body">{{ get_settings('email_address') }}</a></p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="container py-4 py-md-0">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
                <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
                <form class="contact-form needs-validation" method="post" action="{{ route('submit.contact.form') }}" novalidate>
                    @csrf
                    <input type="hidden" name="session_id" id="session_id" value="{{ rand(1000000, 100000000) }}">
                    <div class="messages"></div>
                    <div class="row gx-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="first_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                <label for="first_name">First Name *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your first name. </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="last_name" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                <label for="last_name">Last Name *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your last name. </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                <label for="form_email">Email *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please provide a valid email address. </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_phone" type="tel" name="phone" class="form-control" required>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please provide a valid Phone Number. </div>
                                <span id="valid-msg" class="hide"></span>
                                <span id="error-msg" class="hide"></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                <label for="form_message">Message *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your messsage. </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <input type="submit" id="submit" style="display: none;"  class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                            <button class="btn btn-primary mb-3" id="submitting" type="button" disabled>
                                <span class="spinner-border spinner-border-sm pr-4 mr-4" role="status" aria-hidden="true"></span>
                            </button>
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    
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
    <script>
        $(document).ready(function() {

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
            button.addEventListener('click', () => {
                reset();
                if (!input.value.trim()) {
                    showError("Required");
                } else if (iti.isValidNumberPrecise()) {
                    validMsg.classList.remove("hide");
                } else {
                    const errorCode = iti.getValidationError();
                    const msg = errorMap[errorCode] || "Invalid number";
                    showError(msg);
                }
            });

            input.addEventListener('keyup', reset);

            $('#submitting').hide();
            $('#submit').show();

            $('.contact-form input, .contact-form textarea').on('input change', function() {
                const formData = {
                    name: $('#first_name').val(),
                    surname: $('#last_name').val(),
                    email: $('#form_email').val(),
                    phone: $('#form_phone').val(),
                    message: $('#form_message').val(),
                    session_id: $('#session_id').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.ajax({
                    url: '/submit/contact-form',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            console.log("Form data saved to database.");
                        }
                    },
                    error: function(error) {
                        console.log("Error saving form data:", error);
                    }
                });
            });
        });
    </script>
@endpush
