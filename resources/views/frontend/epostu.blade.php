@extends('frontend.layouts.app', ['title' => 'Affordable Pricing for Premium Mail Services - ePosTu'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="ePosTu">
 
<meta name="title" content="Pricing | Discover the Best Plans for Cloud Based Mail Services - ePosTu">
<meta name="author" content="ePosTu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Explore the best pricing options for reliable email services with ePosTu. Choose the perfect plan for secure, efficient communication today.">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Pricing | Discover the Best Plans for Cloud Based Mail Services - ePosTu">	
<meta property="og:description" content="Explore the best pricing options for reliable email services with ePosTu. Choose the perfect plan for secure, efficient communication today.">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="ePosTu" /> 
<meta name="twitter:title" content="Pricing | Discover the Best Plans for Cloud Based Mail Services - ePosTu" />
<meta name="twitter:description" content="Explore the best pricing options for reliable email services with ePosTu. Choose the perfect plan for secure, efficient communication today." />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Pricing - ePosTu",
        "url": "https://epostu.com/product/epostu",
        "description": "Explore ePosTu's flexible pricing plans for reliable cloud-based email hosting. Choose from our Basic plan for $1/month and Pro plan for $2/month per user.",
        "mainEntityOfPage": "https://epostu.com/product/epostu",
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
        "image": "https://epostu.com/assets/images/pricing.jpg",
        "offers": [
            {
                "@type": "Offer",
                "name": "Basic Plan",
                "priceCurrency": "USD",
                "price": "1.00",
                "url": "https://epostu.com/checkout/epostu/basic",
                "eligibleRegion": "Worldwide"
            },
            {
                "@type": "Offer",
                "name": "Pro Plan",
                "priceCurrency": "USD",
                "price": "2",
                "url": "https://epostu.com/checkout/epostu/corporate",
                "eligibleRegion": "Worldwide"
            }
        ]
    }
</script>
    
@endsection
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/pricing.jpg') }}">
    <div class="container pt-18 pt-md-20 pb-12 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h1 class="display-1 text-white mb-3">Flexible Plans for Every Need</h1>
                <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Choose from a range of pricing plans designed to fit businesses of all sizes. Get access to powerful features, from advanced security and device management to seamless email and collaboration tools, with transparent pricing and no hidden fees..</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-soft-primary">
    <div class="container pt-14 pt-md-11 pb-18 pt-md-1 pb-md-22 text-center">
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
                {{-- <div class="pricing-switcher-wrapper switcher">
                    <p class="mb-0 pe-3">Monthly</p>
                    <div class="pricing-switchers">
                        <div class="pricing-switcher pricing-switcher-active"></div>
                        <div class="pricing-switcher"></div>
                        <div class="switcher-button bg-primary"></div>
                    </div>
                    <p class="mb-0 ps-3">Yearly</p>
                </div> --}}
                <div class="row gy-6 mt-3 mt-md-5">
                    {{-- <div class="col-md-12 ">
                        <div class="pricing card text-center table-responsive">
                            <table class="table table-striped text-successtable-border border-light">
                                <thead class="border-light">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">
                                            <img title="Basic Plan Image" src="{{ asset('assets/images/icons/lineal/shopping-basket.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Basic Plan Image" />
                                            <h4 class="card-title">{{ get_settings('basic_plan_name') }}</h4>
                                        </th>
                                        <th scope="col">
                                            <img title="Pro Plan Image" src="{{ asset('assets/images/icons/lineal/briefcase-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Pro Plan Image" />
                                            <h4 class="card-title">{{ get_settings('corporate_plan_name') }}</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">HDD Storage</th>
                                        <td>700 MB</td>
                                        <td>1,5 GB</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Web Server</th>
                                        <td><i class="fas fa-check"></i></td>
                                        <td><i class="fas fa-check"></i></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Database</th>
                                        <td>
                                            <i class="uil text-success uil-check-circle"></i>
                                        </td>
                                        <td>Optional</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">DNS</th>
                                        <td><i class="fas fa-check"></i></td>
                                        <td><i class="fas fa-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Backups</th>
                                        <td><i class="fas fa-check"></i></td>
                                        <td><i class="fas fa-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tech Support</th>
                                        <td>15$/incident</td>
                                        <td>24/7 included</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="fw-bold">Free</td>
                                        <td class="fw-bold"><a href>Contact us</a></td>
                                    </tr>
                                    <tr>
                                        <th class=""></th>
                                        <th class=""><button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Sign-up</button></th>
                                        <th class=""><button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Buy Now</button></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-lg-6">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img title="Basic Plan Icon" src="{{ asset('assets/images/icons/lineal/shopping-basket.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Basic Plan Name Image" />
                                <h4 class="card-title">{{ get_settings('basic_plan_name') }}</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('basic_plan_price_monthly') }}</span> 
                                        <span class="price-duration">mo</span>
                                    </div>
                                    <div class="price price-hide price-hidden">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('basic_plan_price_yearly') }}</span> 
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
                                    <li>&nbsp;</li>
                                </ul>
                                <a title="Buy Basic Plan" href="{{ route('checkout', ['product' => 'epostu', 'model' => 'basic']) }}" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-6 col-lg-4 popular">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img title="Premium Plan Icon" src="{{ asset('assets/images/icons/lineal/home.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Premium Plan Name Image" />
                                <h4 class="card-title">{{ get_settings('premimum_plan_name') }}</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('premium_plan_price_monthly') }}</span> 
                                        <span class="price-duration">mo</span>
                                    </div>
                                    <div class="price price-hide price-hidden">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('premium_plan_price_yearly') }}</span> 
                                        <span class="price-duration">yr</span>
                                    </div>
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
                                <a title="Buy Premium Plan" href="{{ route('checkout', ['product' => 'epostu', 'model' => 'premium']) }}" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-6 offset-md-3 col-lg-6 offset-lg-0">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img title="Pro Plan Picture" src="{{ asset('assets/images/icons/lineal/briefcase-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Corporate Plan Name Image" />
                                <h4 class="card-title">{{ get_settings('corporate_plan_name') }}</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('corporate_plan_pricing_monthly') }}</span> 
                                        <span class="price-duration">mo</span>
                                    </div>
                                    <div class="price price-hide price-hidden">
                                        <span class="price-currency">$</span>
                                        <span class="price-value">{{ get_settings('corporate_plan_pricing_yearly') }}</span> 
                                        <span class="price-duration">yr</span>
                                    </div>
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
                                <a title="Buy Pro Plan" href="{{ route('checkout', ['product' => 'epostu', 'model' => 'corporate']) }}" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img title="Add Ons Picture" src="{{ asset('assets/images/icons/lineal/gift.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Add Ons Image" />
                                <h4 class="card-title">Add Ons</h4>

                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                    <li>
                                        <i class="uil uil-check"></i>
                                        <span>
                                            $ 0.50 per 10 GB
                                        </span>
                                    </li>
                                    <li>
                                        <i class="uil uil-check"></i>
                                        <span>
                                            $ 0.50 Security Gateway Addon
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
{{-- 
<section class="wrapper bg-gray">
    <div class="container pt-10 pb-10 py-md-16">
        <h2 class="display-4 mb-3 text-center">Pricing FAQ</h2>
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
</section> --}}

@endsection