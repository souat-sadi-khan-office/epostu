@extends('frontend.layouts.app', ['title' => 'Become a Partner'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="Become a Partner | Epostu">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Become a Partner Meta Description">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Become a Partner | Epostu">	
<meta property="og:description" content="Become a Partner | Epostu}">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Epostu" /> 
<meta name="twitter:title" content="Become a Partner| Epostu" />
<meta name="twitter:description" content="Become a Partner | Epostu" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/become-partner.webp') }}" style="background-image: url('{{ asset('assets/images/become-partner.webp') }}');">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">Become a Partner</h1>
                    <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">A company turning ideas into beautiful things.</p>
                </div>
            </div>
        </div>
    </section>
    
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
                            <img src="{{ asset('assets/images/icons/lineal/tools.svg') }}" class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">High Availability</h4>
                            <p class="mb-0">Epostu ensures constant uptime with redundant servers and advanced infrastructure, so your email services remain accessible and stable around the clock..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/cloud-computing-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Seamless Integration</h4>
                            <p class="mb-0">With support for Outlook Connector and ActiveSync, Epostu integrates smoothly with Outlook and mobile devices, delivering consistent access and efficient communication.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('assets/images/icons/lineal/shield-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Data Protection</h4>
                            <p class="mb-0">Epostu safeguards your data with automated backups, ensuring your emails and critical information are secure, recoverable, and protected from data loss events.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benifits of choosing us -->
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100" data-image-src="{{ asset('assets/images/partnership.webp') }}">
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
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Benefits of Partnership    </h2>
                        <h3 class="display-5 ls-sm mb-7">Empower your business with exclusive resources and dedicated support.</h3>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <img src="{{ asset('assets/images/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
                            </div>
                            <div>
                            <h4 class="fs-20 ls-sm">Unlock Partnership Benefits</h4>
                            <p class="mb-0">Gain access to exclusive resources, training, and support.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <img src="{{ asset('assets/images/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                            </div>
                            <div>
                            <h4 class="fs-20 ls-sm">Grow Your Business Together</h4>
                            <p class="mb-0">Leverage joint marketing initiatives for maximum reach and impact.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-5">
                            <div>
                                <img src="{{ asset('assets/images/icons/lineal/pie-chart-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1" alt="" />
                            </div>
                            <div>
                                <h4 class="fs-20 ls-sm">Priority Technical Assistance</h4>
                                <p class="mb-0">Receive dedicated support from our expert technical team for success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light angled upper-end">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
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
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/partner.js') }}"></script>
@endpush
