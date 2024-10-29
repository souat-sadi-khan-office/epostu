@extends('frontend.layouts.app')
@section('title', 'About Us | Epostu')

@section('content')

<section class="wrapper bg-gray">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-4">Hello! We are <br> epostu and truspan!</h1>
                <p class="lead fs-lg mb-0">A company turning ideas into beautiful things.</p>
            </div>
        </div>
    </div>
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;">
        <img src="{{ asset('assets/images/about-page-bg.jpg') }}" alt="About Page Banner" />
    </figure>
</section>

<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow">
                            <img src="{{ asset('assets/images/about2.jpg') }}" srcset="{{ asset('assets/images/about2.jpg') }} 2x" alt="About Image One">
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow">
                            <img src="{{ asset('assets/images/about3.jpg') }}" srcset="{{ asset('assets/images/about3.jpg') }} 2x" alt="About Image Two">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('assets/images/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="Who we are" />
                <h2 class="display-4 mb-3">Our Mission & Vision</h2>
                <p class="lead fs-lg">At epostu and truspam, we strive to empower businesses through secure and scalable email solutions that enhance productivity and ensure data integrity.</p>
                <p class="mb-6">We believe in the transformative power of effective communication and aim to provide our clients with the tools necessary for success. Our commitment to innovation and excellence drives us to deliver top-tier services that meet the evolving needs of modern businesses.</p>
                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Empowering businesses with secure and efficient email solutions.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fostering productivity through user-friendly tools and support.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Ensuring data integrity with advanced security measures.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Committed to continuous improvement and innovation.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                <img src="{{ asset('assets/images/icons/lineal/list.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="Our Journey" />
                <h2 class="display-4 mb-4 px-lg-14">Here are 3 steps to organize our business journey.</h2>
            </div>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="card me-lg-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                                    <span class="number">01</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">Collect Ideas</h4>
                                <p class="mb-0">We gather innovative ideas tailored to meet diverse business needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ms-lg-13 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                                    <span class="number">02</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">Data Analysis</h4>
                                <p class="mb-0">Our team conducts thorough data analysis to drive informed decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mx-lg-6 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                                    <span class="number">03</span>
                                </span>
                            </div>
                            <div>
                                <h4 class="mb-1">Finalize Product</h4>
                                <p class="mb-0">We finalize products that meet the highest standards of quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="display-6 mb-3">Our Journey</h2>
                <p class="lead fs-lg pe-lg-5">With years of experience delivering SaaS-based solutions, our platform integrates the latest cloud-based technologies to support small, medium, and large enterprises worldwide.</p>
                <p>We have a rich history of providing innovative solutions that empower businesses to thrive in the digital landscape. Our commitment to excellence ensures that we continually adapt to meet the evolving needs of our clients.</p>
                <p class="mb-6">From concept to execution, our journey is driven by a passion for innovation and a dedication to customer satisfaction. We pride ourselves on our ability to deliver tailored solutions that drive growth and enhance productivity.</p>
                <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
            </div>
        </div>
    </div>
</section>
    
@endsection

@push('scripts')
    <script>

    </script>
@endpush
