@extends('frontend.layouts.app', ['title' => 'Partner with ePosTu - Grow Together'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="ePosTu">
 
<meta name="title" content="Become a Partner | Collaborate & Expand with ePosTu">
<meta name="author" content="ePosTu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Join ePosTu's Partner Program to grow your business with reliable cloud based mail services. Let's collaborate and achieve success together!">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Become a Partner | Collaborate & Expand with ePosTu">	
<meta property="og:description" content="Join ePosTu's Partner Program to grow your business with reliable cloud based mail services. Let's collaborate and achieve success together!">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="ePosTu" /> 
<meta name="twitter:title" content="Become a Partner | Collaborate & Expand with ePosTu" />
<meta name="twitter:description" content="Join ePosTu's Partner Program to grow your business with reliable cloud based mail services. Let's collaborate and achieve success together!" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
    {{-- <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/partnership.png') }}" style="background-image: url('{{ asset('assets/images/partnership.png') }}');">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">Become a Partner</h1>
                    <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">A company turning ideas into beautiful things.</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="wrapper bg-dark">
        <div class="swiper-container swiper-thumbs-container swiper-fullscreen nav-dark" data-margin="0" data-autoplay="false" data-autoplaytime="7000" data-nav="false" data-dots="false" data-items="1" data-thumbs="false">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('assets/images/partnership.png') }}"></div>
                </div>
            </div>
            <div class="swiper-static">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-lg-12 mx-auto mt-n10 text-center">
                            <h1 class="d-none display-1 text-white mb-3">Become a Partner</h1>
                            <p class="display-2 d-none text-white lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">A company turning ideas into beautiful things.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray" data-image-src="{{ asset('assets/images/partnership.jpg') }}">
        <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
          <div class="row">
                <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title" data-interval="-200" data-delay="500">
                    <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">We bring solutions to make life <span class="underline-3 style-3 yellow">easier</span></h2>
                    <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">We are a creative company that focuses on long term relationships with customers.</p>
                    <div><a href="#" class="btn btn-lg btn-primary rounded">Read More</a></div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="wrapper bg-light">
        <div class="container py-15 py-md-17">
            <div class="row text-center">
                <div class="col-md-10 col-lg-9 col-xxl-8 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Partner with Epostu</h2>
                    <h3 class="display-3 ls-sm mb-9 px-xl-11">Collaborate with us and expand your business offerings with our robust email hosting solutions.</h3>
                </div>
            </div>

            <div class="row gx-lg-8 gx-xl-12 gy-8">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img title="High Availability Image" src="{{ asset('assets/images/icons/lineal/tools.svg') }}" class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="High Availability Image" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">High Availability</h4>
                            <p class="mb-0">Ensure your clients experience uninterrupted email services with our advanced, redundant infrastructure</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img title="Seamless Integration" src="{{ asset('assets/images/icons/lineal/cloud-computing-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="Seamless Integration" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Seamless Integration</h4>
                            <p class="mb-0">Effortlessly connect with Outlook and mobile devices using our Outlook Connector and ActiveSync support.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img title="Data Protection Image" src="{{ asset('assets/images/icons/lineal/shield-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="Data Protection Image" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Data Protection</h4>
                            <p class="mb-0">Keep your clients data secure with automated backups, ensuring easy recovery and protection from loss.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Benifits of choosing us -->
    {{-- <section class="wrapper bg-white position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100" data-image-src="{{ asset('assets/images/partner.png') }}">
            
        </div>
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 ms-auto">
                    <div class="pt-7 pb-8 pb-md-8 py-lg-8 ps-lg-7 pe-xxl-8">
                        <h2 class="display-4 mb-3 text-center">Partner With Us</h2>
                        <p class="lead text-center mb-10">Join our network and unlock exclusive benefits for your business.</p>
                        <form class="partner-form needs-validation" method="post" action="{{ route('submit.partner.form') }}" novalidate id="partner-form">
                            @csrf
                            <input type="hidden" name="session_id" id="session_id" value="{{ rand(1000000, 100000000) }}">
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                        <label for="form_name">First Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your first name. </div>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                        <label for="form_lastname">Last Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required>
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your email. </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Phone" required>
                                        <label for="form_phone">Phone *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your phone. </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_company_name" type="text" name="company_name" class="form-control" placeholder="Companty Name" >
                                        <label for="form_company_name">Companty Name </label>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_contact_person" type="text" name="contact_person" class="form-control" placeholder="Contact Person" >
                                        <label for="form_contact_person">Contact Person </label>
                                        <div class="valid-feedback"> Looks good! </div>
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
                                    <input type="submit" id="submit" style="display: none;"  class="btn btn-primary rounded-pill btn-send mb-3" value="Join Our Partner Network">
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
        </div>
    </section> --}}

    <section class="wrapper bg-light">
        <div class="container py-7 py-md-8">
            <h2 class="display-4 mb-3 text-center">Partner With Us</h2>
            <p class="lead text-center mb-10">Join our network and unlock exclusive benefits for your business.</p>
            <div class="row">
                <div class="col-lg-5">
                    <figure>
                        <img title="Partner with Us Banner" class="w-auto" src="{{ asset('assets/images/partner.png') }}" srcset="{{ asset('assets/images/partner.png') }} 2x" alt="Partner With Us Image" />
                    </figure>
                </div>
                <div class="col-lg-7">
                    
                    <form class="partner-form needs-validation" method="post" action="{{ route('submit.partner.form') }}" novalidate id="partner-form">
                        @csrf
                        <input type="hidden" name="session_id" id="session_id" value="{{ rand(1000000, 100000000) }}">
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                    <label for="form_name">First Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your first name. </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                    <label for="form_lastname">Last Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your last name. </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required>
                                    <label for="form_email">Email *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your email. </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Phone" required>
                                    <label for="form_phone">Phone *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your phone. </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_company_name" type="text" name="company_name" class="form-control" placeholder="Companty Name" >
                                    <label for="form_company_name">Companty Name </label>
                                    <div class="valid-feedback"> Looks good! </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_contact_person" type="text" name="contact_person" class="form-control" placeholder="Contact Person" >
                                    <label for="form_contact_person">Contact Person </label>
                                    <div class="valid-feedback"> Looks good! </div>
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
                                <input type="submit" id="submit" style="display: none;"  class="btn btn-primary rounded-pill btn-send mb-3" value="Join Our Partner Network">
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
    <script src="{{ asset('assets/js/partner.js') }}"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
            const swiperSlide = document.querySelector('.swiper-slide.bg-overlay');
            if (window.innerWidth <= 768) { // Check if the screen width is 768px or less
                swiperSlide.style.backgroundImage = "url('{{ asset('assets/images/partnership-mobile.png') }}')";
                swiperSlide.style.backgroundImage += " !important"; // Add !important
            }
        });

    </script>
@endpush
