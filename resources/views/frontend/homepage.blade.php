@extends('frontend.layouts.app', ['title' => 'Welcome to Epostu'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="Welcome to Epostu">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Welcome to Epostu">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Welcome to Epostu">	
<meta property="og:description" content="Welcome to Epostu}">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Welcome to Epostu" /> 
<meta name="twitter:title" content="Welcome to Epostu" />
<meta name="twitter:description" content="Welcome to Epostu" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/homepage-banner.webp') }}" style="background-image: url('{{ asset('assets/images/homepage-banner.webp') }}');">
        <div class="container pt-19 pt-md-18 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-sm-12 col-xxl-12 text-center text-sm-start" data-cues="slideInDown" data-group="page-title" data-interval="-200" data-delay="500">
                    <h2 class="display-1 text-white mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">
                        Reliable, cloud-based email hosting designed <br /> for 
                        <span class="underline-2 underline-gradient-2">
                            <span class="typer text-white" 
                            data-delay="100" 
                            data-words="Your Business, Seamless Communication!, Competitive Pricing!, Seamless Collaboration!, Reliable Support!"></span><span class="cursor text-primary" data-owner="typer"></span>
                        </span>
                    </h2>
                    <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">
                        Comprehensive Email Hosting Solution that provides reliable, cloud-based email services for seamless communication. It features high availability with auto-scaling, multi-device synchronization via Outlook Connector and ActiveSync, and disaster recovery tools. The mobile-friendly webmail interface ensures easy accessibility across all devices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="wrapper bg-light">
        <div class="container py-15 py-md-17">
            <div class="row text-center">
                <div class="col-md-10 col-lg-9 col-xxl-8 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Epostu - Email Hosting Solution</h2>
                    <h3 class="display-3 ls-sm mb-9 px-xl-11">The features we offer is specifically designed to meet your needs.</h3>
                </div>
            </div>

            <div class="row gx-lg-8 gx-xl-12 gy-8">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/padlock.svg') }}" class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Secure Hosting</h4>
                            <p class="mb-0">Provides high availability and stability for email services, ensuring your communications are consistently reliable and accessible without interruptions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/shield.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Outlook & ActiveSync</h4>
                            <p class="mb-0">Seamlessly integrates with Outlook and supports ActiveSync for mobile devices, allowing users to access their email from anywhere with ease and efficiency.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/networking.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Seamless Device Control</h4>
                            <p class="mb-0">Easily manage and secure mobile devices with features like remote lock, wipe, and customizable policies.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/email-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Email Encryption</h4>
                            <p class="mb-0">Encrypts email content to secure sensitive information during transmission, protecting against unauthorized access and ensuring safe communication between parties.</p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-md text-pink me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Platform Sync</h4>
                            <p class="mb-0">Offers synchronization across desktop, mobile, and webmail platforms, delivering a consistent user experience regardless of the device being used to access email..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/chat-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">In-build Threat Detection</h4>
                            <p class="mb-0">Employs advanced technology to effectively detect and block spam, phishing attempts, and other malicious emails before they reach your inbox, ensuring security.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/networking-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Bulletproof Email Security</h4>
                            <p class="mb-0">Protect your communications with tools like DMARC, DKIM, SPF, encryption, spam filtering, and AI spam detection.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/analytics.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Unbreakable Uptime</h4>
                            <p class="mb-0">Ensure uninterrupted service with robust multi-server clustering and built-in protection against outages.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/video-camera.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Real-Time Protection</h4>
                            <p class="mb-0">Provides immediate and ongoing protection against malware, viruses, and other digital threats, ensuring that your email communication remains secure at all times.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benifits of choosing us -->
    <!-- <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100" data-image-src="{{ asset('assets/images/home-page-choosing.webp') }}">
            <div class="divider text-gray divider-v-end d-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
                    <g />
                    <g>
                    <g>
                        <polygon fill="currentColor" points="48 0 0 0 48 1200 54 1200 54 0 48 0" />
                    </g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 ms-auto">
                    <div class="pt-13 pb-15 pb-md-17 py-lg-16 ps-lg-15 pe-xxl-16">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Benefits of Choosing Us</h2>
                        <h3 class="display-3 ls-sm mb-7">Here are the 3 working steps on success.</h3>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <img src="{{ asset('assets/images/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
                            </div>
                            <div>
                            <h4 class="fs-20 ls-sm">Cost Savings</h4>
                            <p class="mb-0">Our affordable SaaS plans minimize operational costs and improve budgeting.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <img src="{{ asset('assets/images/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                            </div>
                            <div>
                            <h4 class="fs-20 ls-sm">Enhanced Security</h4>
                            <p class="mb-0">Industry-leading spam protection ensures your data remains safe and secure.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/images/icons/lineal/pie-chart-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1" alt="" />
                            </div>
                            <div>
                                <h4 class="fs-20 ls-sm">Improved Productivity</h4>
                                <p class="mb-0">Easy-to-use tools allow access anywhere, boosting collaboration and efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="wrapper  bg-white">
        <div class="container pt-15">
            <div class="card bg-soft-primary rounded-4 mb-15 mb-md-17">
                <div class="card-body py-14 px-lg-0">
                    <div class="row text-center">
                        <div class="col-lg-8 offset-lg-2">
                            <h2 class="fs-16 text-uppercase text-primary mb-3">Our Clients</h2>
                            <h3 class="display-4 mb-10 px-xxl-10">Don't take our word for it. See what customers are saying about us.</h3>
                        </div>
                    </div>

                    <div class="row gx-lg-8 gx-xl-12 align-items-center">
                        <div class="col-lg-5 ms-auto col-xl-4 d-none d-lg-flex">
                            <div class="img-mask">
                                <img src="{{ asset('assets/images/cm.webp') }}" alt="Client Testimonial" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6 col-xxl-5 me-auto">
                            <div class="swiper-container dots-start dots-closer mb-6" data-margin="30" data-dots="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-0">
                                                <p>"epostu's seamless setup and reliability transformed our communication.”</p>
                                                <div class="blockquote-details">
                                                <div class="info ps-0">
                                                    <h5 class="mb-1">John Doe</h5>
                                                    <p class="mb-0">CEO of XYZ Corp</p>
                                                </div>
                                                </div>
                                            </blockquote>
                                        </div>

                                        <div class="swiper-slide">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-0">
                                                <p>"epostu's seamless setup and reliability transformed our communication.”</p>
                                                <div class="blockquote-details">
                                                <div class="info ps-0">
                                                    <h5 class="mb-1">John Doe</h5>
                                                    <p class="mb-0">CEO of XYZ Corp</p>
                                                </div>
                                                </div>
                                            </blockquote>
                                        </div>

                                        <div class="swiper-slide">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-0">
                                                <p>Wepostu's seamless setup and reliability transformed our communication.”</p>
                                                <div class="blockquote-details">
                                                <div class="info ps-0">
                                                    <h5 class="mb-1">John Doe</h5>
                                                    <p class="mb-0">CEO of XYZ Corp</p>
                                                </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
@endsection

@push('scripts')
    <script>

    </script>
@endpush
