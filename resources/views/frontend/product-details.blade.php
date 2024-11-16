@extends('frontend.layouts.app', ['title' => 'TruSpam'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="TruSpam">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="keywords" content="TruSpam" />
<meta name="description" content="TruSpam">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="TruSpam">	
<meta property="og:description" content="TruSpam">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Epostu" /> 
<meta name="twitter:title" content="Truspan" />
<meta name="twitter:description" content="Truspan" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/truspan-bg.webp') }}">
    <div class="container pt-18 pt-md-20 pb-12 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h1 class="display-1 text-white mb-3">Advanced Email Security Gateway</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">TruSpam is a robust, user-friendly, and secure email hosting solution tailored to meet the needs of modern businesses. With TruSpam, you gain more than just an email host; it’s an all-encompassing platform designed for efficient communication, privacy, and productivity. Here’s why TruSpam is the ideal choice for managing business email needs.</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-14 pb-12 pt-md-16 pb-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7 order-lg-2">
                <div class="row gx-md-5 gy-5">
                    <div class="col-md-5 offset-md-1 align-self-end">
                        <div class="card bg-pale-yellow">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/icons/lineal/email-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="TruSpam Services" />
                                <h4>Reliable Uptime</h4>
                                <p class="mb-0">Guaranteed 99.9% uptime, ensuring you’re always connected with minimal downtime.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-end">
                        <div class="card bg-pale-red">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/icons/lineal/shield.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="Enhanced Security Picture" />
                                <h4>Enhanced Security</h4>
                                <p class="mb-0">Advanced security protocols, including spam filtering, virus scanning, and two-factor authentication, safeguard your communications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card bg-pale-leaf">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/icons/lineal/cloud-computing-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="Easy Integration Picture" />
                                <h4>Easy Integration</h4>
                                <p class="mb-0">Works seamlessly with existing systems, whether you use Microsoft Outlook, Apple Mail, or web-based clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-start">
                        <div class="card bg-pale-primary">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/icons/lineal/analytics.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Collaborative Tools Picture" />
                                <h4>Collaborative Tools</h4>
                                <p class="mb-0">Shared contacts, calendars, and tasks promote team productivity and collaboration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Overview</h2>
                <h3 class="display-4 mb-5">Why Choose TruSpam for Your Business Email Needs.</h3>
                <p>TruSpam offers an advanced, secure, and user-friendly email hosting solution built to serve modern businesses. This comprehensive platform goes beyond traditional email hosting by focusing on efficient communication, privacy, and productivity, making it the perfect choice for managing your business email needs</p>
                <a href="#" class="btn btn-navy rounded-pill mt-3">More Details</a>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-soft-primary">
    <div class="container py-10 pt-md-16 pt-lg-0 pb-md-10">
        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <h2 class="fs-15 text-uppercase text-muted mb-3 pt-md-12">Key Features</h2>
                <h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">Find out everything you need to know about creating a business process model</h3>

                <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9">
                    <div class="col-md-4"> 
                        <img src="{{ asset('assets/images/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="High Availability with Built-in Auto-Scaling" />
                        <h4 class="mb-1">Advanced Email Security</h4>
                        <p>TruSpam prioritizes your email security by incorporating advanced threat detection and filtering mechanisms to guard against phishing, spam, malware, and other email-based attacks. Your business communications remain safe and uninterrupted.</p>
                    </div>
                    <div class="col-md-4"> 
                        <img src="{{ asset('assets/images/icons/lineal/settings-3.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="Multi-Device Sync with Outlook Connector and ActiveSync Pictures" />
                        <h4 class="mb-1">User-Friendly Interface</h4>
                        <p>With a clean and intuitive design, TruSpam ensures a seamless user experience. Both administrators and end-users can effortlessly manage their email settings, organize mail efficiently.</p>
                    </div>

                    <div class="col-md-4"> 
                        <img src="{{ asset('assets/images/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="Backup and Archiving Tools for Disaster Recovery Picture" />
                        <h4 class="mb-1">High Reliability and Uptime</h4>
                        <p>TruSpam guarantees exceptional reliability with enterprise-grade infrastructure, ensuring that your business email remains operational 24/7. Enjoy peace of mind with minimal downtime and high-speed email delivery.</p>
                    </div>

                    <div class="col-md-4"> 
                        <img src="{{ asset('assets/images/icons/lineal/telephone.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Mobile-Friendly Webmail Interface for Accessibility" />
                        <h4 class="mb-1">Mobile-Friendly Webmail Interface for Accessibility</h4>
                        <p>Enjoy a sleek, mobile-optimized webmail interface that makes accessing your email and essential features simple on any device.</p>
                    </div>
                    <div class="col-md-4"> 
                        <img src="{{ asset('assets/images/icons/lineal/price-tag.svg') }}" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="Customizable Subscription Options with Flexible Terms" />
                        <h4 class="mb-1">Comprehensive Privacy Protection</h4>
                        <p>Your data privacy is paramount. TruSpam uses state-of-the-art encryption technologies to secure all email communication, keeping sensitive business information protected from unauthorized access and breaches.</p>
                    </div>

                    <div class="col-md-4"> 
                        <img src="{{ asset('assets/images/icons/lineal/sitemap.svg') }}" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="Find Answers to Common Questions About TruSpam" />
                        <h4 class="mb-1">Find Answers to Common Questions About TruSpam</h4>
                        <p>Get quick answers to frequently asked questions and discover helpful tips about managing your TruSpam email hosting service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-soft-primary">
    <div class="container pt-14 pb-18 pt-md-1 pb-md-22 text-center">
        <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Our Pricing</h2>
                <h3 class="display-4 mb-15 mb-md-6 px-lg-10">We offer great prices, premium products and quality service for your business.</h3>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="pricing-wrapper position-relative mt-n22 mt-md-n24">
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
                <div class="pricing-switcher-wrapper switcher">
                    <p class="mb-0 pe-3">Monthly</p>
                    <div class="pricing-switchers">
                        <div class="pricing-switcher pricing-switcher-active"></div>
                        <div class="pricing-switcher"></div>
                        <div class="switcher-button bg-primary"></div>
                    </div>
                    <p class="mb-0 ps-3">Yearly</p>
                </div>
                <div class="row gy-6 mt-3 mt-md-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/icons/lineal/shopping-basket.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">{{ get_settings('truspan_basic_plan_name') }}</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('truspan_basic_plan_price_monthly') }}</span> 
                                        <span class="price-duration">mo</span>
                                    </div>
                                    <div class="price price-hide price-hidden">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('truspan_basic_plan_price_yearly') }}</span> 
                                        <span class="price-duration">yr</span>
                                    </div>
                                </div>

                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                    @if (count($basic_pricing))
                                        @foreach ($basic_pricing as $basic_price)
                                            <li>
                                                @if ($basic_price->checked == 1)
                                                    <i class="uil uil-check"></i>
                                                @else
                                                    <i class="uil uil-times bullet-soft-red"></i>
                                                @endif
                                                <span>
                                                    {{ $basic_price->name }}
                                                </span>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                                <a href="{{ route('checkout', ['product' => 'truspan', 'model' => 'basic']) }}" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 popular">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/icons/lineal/home.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">{{ get_settings('truspan_premium_plan_name') }}</h4>
                                <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ get_settings('truspan_premium_plan_price_monthly') }}</span> <span class="price-duration">mo</span></div>
                                <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ get_settings('truspan_premium_plan_price_yearly') }}</span> <span class="price-duration">yr</span></div>
                                </div>
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                    @if (count($premium_pricing))
                                        @foreach ($premium_pricing as $premium_price)
                                            <li>
                                                @if ($premium_price->checked == 1)
                                                    <i class="uil uil-check"></i>
                                                @else
                                                    <i class="uil uil-times bullet-soft-red"></i>
                                                @endif
                                                <span>
                                                    {{ $premium_price->name }}
                                                </span>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                                <a href="{{ route('checkout', ['product' => 'truspan', 'model' => 'premium']) }}" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/icons/lineal/briefcase-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">{{ get_settings('truspan_corporate_plan_name') }}</h4>
                                <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">$</span><span class="price-value">{{ get_settings('truspan_corporate_plan_pricing_monthly') }}</span> <span class="price-duration">mo</span></div>
                                <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">{{ get_settings('truspan_corporate_plan_pricing_yearly') }}</span> <span class="price-duration">yr</span></div>
                                </div>
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                    @if (count($corporate_pricing))
                                        @foreach ($corporate_pricing as $corporate_price)
                                            <li>
                                                @if ($corporate_price->checked == 1)
                                                    <i class="uil uil-check"></i>
                                                @else
                                                    <i class="uil uil-times bullet-soft-red"></i>
                                                @endif
                                                <span>
                                                    {{ $corporate_price->name }}
                                                </span>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                                <a href="{{ route('checkout', ['product' => 'truspan', 'model' => 'corporate']) }}" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="wrapper bg-gray">
    <div class="container pt-10 pb-10 py-md-16">
        <h2 class="display-4 mb-3 text-center">Truspan FAQ</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
        <div class="row">
            <div class="col-lg-6 mb-0">
                <div id="accordion-1" class="accordion-wrapper">
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
                        </div>
                        <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                            <div class="card-body">
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
                        </div>
                        <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-3">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
                        </div>
                        <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-4">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Is my credit card information secure?</button>
                        </div>
                        <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div id="accordion-2" class="accordion-wrapper">
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">How do I get my subscription receipt?</button>
                        </div>
                        <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Are there any discounts for people in need?</button>
                        </div>

                        <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-3">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Do you offer a free trial edit?</button>
                        </div>
                        <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                            <div class="card-body">
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-4">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="false" aria-controls="accordion-collapse-2-4">How do I reset my Account password?</button>
                        </div>
                        <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
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
