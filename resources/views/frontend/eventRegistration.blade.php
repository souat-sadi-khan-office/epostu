@extends('frontend.layouts.app', ['title' => 'Event Registration | ePostU'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="Become a Partner | Epostu">
<meta name="author" content="Event Registration : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Event Registration">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Event Registration | Epostu">	
<meta property="og:description" content="Event Registration | Epostu}">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Epostu" /> 
<meta name="twitter:title" content="Event Registration" />
<meta name="twitter:description" content="Event Registration | Epostu" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/event-registration-banner.webp') }}" style="background-image: url('{{ asset('assets/images/event-registration-banner.webp') }}');">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">Event Regsitration</h1>
                    <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Book your seat before it finished.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light angled upper-end">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h2 class="display-4 mb-3 text-center">Book Your Seat</h2>
                    <p class="lead text-center mb-10">Book your event seat effortlessly with modern registration systems, ensuring a smooth experience and instant confirmation, giving you peace of mind and convenience.</p>
                    <form class="partner-form needs-validation" method="post" action="{{ route('submit.event.registration.form') }}" novalidate id="partner-form">
                        @csrf
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                    <label for="form_name">First Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your first name. </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                    <label for="form_lastname">Last Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your last name. </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required>
                                    <label for="form_email">Email *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your email. </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Phone" required>
                                    <label for="form_phone">Phone *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your phone. </div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <input type="submit" id="submit" style="display: none;"  class="btn btn-primary rounded-pill btn-send mb-3" value="Book My Seat">
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

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/event-registration.js') }}"></script>
@endpush
