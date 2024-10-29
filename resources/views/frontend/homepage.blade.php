@extends('frontend.layouts.app')
@section('title', 'Epostu')

@section('content')
    <!-- hero section -->
    <section class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray" data-image-src="{{ asset('assets/images/home-page-hero-background.jpg') }}">
        <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
            <div class="row">
                <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title" data-interval="-200" data-delay="500">
                    <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">
                        Secure, Reliable, and Scalable Email Solutions for 
                        <span class="underline-3 style-3 yellow">
                            Every Business
                        </span>
                    </h2>
                    <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">
                        Experience seamless communication with epostu and safeguard your inbox with truspam.
                    </p>
                    <div>
                        <a href="#" class="btn btn-lg btn-primary rounded">
                            Learn More
                        </a>
                    </div>
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
                            <img src="{{ asset('assets/images/icons/lineal/telephone-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
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
                            <img src="{{ asset('assets/images/icons/lineal/cloud-computing-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Easy Restoration</h4>
                            <p class="mb-0">Provides a user-friendly interface for easy data restoration, allowing users to quickly recover lost files and minimize downtime in case of data loss.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/cloud-computing-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Built-in Backup</h4>
                            <p class="mb-0">Regularly scheduled backups protect against accidental data loss, ensuring that important emails and documents are safe and recoverable in case of emergencies.</p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/analytics.svg') }}" class="svg-inject icon-svg icon-svg-md text-pink me-5" alt="" />
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
                            <h4 class="fs-20 ls-sm">AI Threat Detection</h4>
                            <p class="mb-0">Employs advanced AI technology to effectively detect and block spam, phishing attempts, and other malicious emails before they reach your inbox, ensuring security.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
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
                            <img src="{{ asset('assets/images/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">DLP Policies</h4>
                            <p class="mb-0">Implements comprehensive Data Loss Prevention policies that help to safeguard against unauthorized data sharing, keeping sensitive information secure and private.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
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
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100" data-image-src="{{ asset('assets/images/bg38.jpg') }}">
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
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets/images/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                            </div>
                            <div>
                            <h4 class="fs-20 ls-sm">Enhanced Security</h4>
                            <p class="mb-0">Industry-leading spam protection ensures your data remains safe and secure.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-5">
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
    </section>

    <section class="wrapper  bg-white">
        <div class="container pt-15">
            <div class="card bg-soft-primary rounded-4 mb-15 mb-md-17">
                <div class="card-body py-14 px-lg-0">
                    <div class="row text-center">
                        <div class="col-lg-8 offset-lg-2">
                            <h2 class="fs-16 text-uppercase text-primary mb-3">Happy Customers</h2>
                            <h3 class="display-4 mb-10 px-xxl-10">Don't take our word for it. See what customers are saying about us.</h3>
                        </div>
                    </div>

                    <div class="row gx-lg-8 gx-xl-12 align-items-center">
                        <div class="col-lg-5 ms-auto col-xl-4 d-none d-lg-flex">
                            <div class="img-mask">
                                <img src="{{ asset('assets/images/about28.jpg') }}" alt="Client Testimonial" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6 col-xxl-5 me-auto">
                            <div class="swiper-container dots-start dots-closer mb-6" data-margin="30" data-dots="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-0">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur nulla dapibus curabitur blandit faucibus.”</p>
                                                <div class="blockquote-details">
                                                <div class="info ps-0">
                                                    <h5 class="mb-1">Coriss Ambady</h5>
                                                    <p class="mb-0">Financial Analyst</p>
                                                </div>
                                                </div>
                                            </blockquote>
                                        </div>

                                        <div class="swiper-slide">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-0">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur nulla dapibus curabitur blandit faucibus.”</p>
                                                <div class="blockquote-details">
                                                <div class="info ps-0">
                                                    <h5 class="mb-1">Cory Zamora</h5>
                                                    <p class="mb-0">Marketing Specialist</p>
                                                </div>
                                                </div>
                                            </blockquote>
                                        </div>

                                        <div class="swiper-slide">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-0">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur nulla dapibus curabitur blandit faucibus.”</p>
                                                <div class="blockquote-details">
                                                <div class="info ps-0">
                                                    <h5 class="mb-1">Nikolas Brooten</h5>
                                                    <p class="mb-0">Sales Manager</p>
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
    </section>
    
@endsection

@push('scripts')
    <script>

    </script>
@endpush
