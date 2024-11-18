@extends('frontend.layouts.app', ['title' => 'Contact Us | Epostu'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="Contact Us | Epostu">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Contact Us Meta Description">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Contact Us | Epostu">	
<meta property="og:description" content="Contact Us | Epostu}">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Epostu" /> 
<meta name="twitter:title" content="Contact Us| Epostu" />
<meta name="twitter:description" content="Contact Us | Epostu" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/contact.jpg') }}">
    <div class="container pt-18 pt-md-20 pb-12 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h1 class="display-1 text-white mb-3">Get in Touch with Us</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">We’re here to help! Reach out for any inquiries, support, or feedback. Our team is ready to assist you with prompt and reliable service, ensuring you get the answers and assistance you need.</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="container py-14 py-md-8">
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
                                        <h5 class="mb-1">Address</h5>
                                        <address>{{ get_settings('footer_address') }}</address>
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
    <div class="container py-14 py-md-0">
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
                                <input id="form_phone" type="text" name="phone" class="form-control" placeholder="+123456789" required>
                                <label for="form_phone">Phone *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please provide a valid Phone Number. </div>
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
    <script>
        $(document).ready(function() {

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
