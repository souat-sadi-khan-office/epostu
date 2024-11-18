@extends('frontend.layouts.app', ['title' => 'Checkout | Epostu'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="Epostu">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Epostu Meta Description">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Epostu">	
<meta property="og:description" content="Epostu">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Epostu" /> 
<meta name="twitter:title" content="Epostu" />
<meta name="twitter:description" content="Epostu" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        @if ($product == 'epostu')
                            <a href="{{ route('product', 'epostu') }}">
                                Epostu
                            </a>
                        @else   
                            <a href="{{ route('product', 'truspam') }}">
                                TruSpam
                            </a>
                        @endif
                    </li>
                    <li class="breadcrumb-item active text-muted" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
            <form class="needs-validation" id="checkout_form" method="POST" action="{{ route('proceed.checkout') }}" novalidate>
                <input type="hidden" name="product" value="{{ $product }}">
                <input type="hidden" name="plan" value="{{ $plan }}">
                @csrf
                <div class="row gx-md-8 gx-xl-12 gy-12">
                    <div class="col-lg-8">
                        <h3 class="mb-4">Billing address</h3>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=".50" name="more_storage" id="more_storage">
                                    <label class="form-check-label" for="more_storage"> $ 0.50 per 10 GB </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=".50" name="security_gateway_addon" id="security_gateway_addon">
                                    <label class="form-check-label" for="security_gateway_addon"> $ 0.50 Security Gateway Addon </label>
                                </div>
                            </div>
                            <div style="display: none;" class="col-md-12 form-group">
                                <select name="pricing_plan_id" id="pricing_plan_id" class="form-control">
                                    @if ($product == 'epostu')
                                        @if ($plan == 'basic')
                                            <option value="0">Pricing Plan: Monthly ${{ get_settings('basic_plan_price_monthly') }}</option>
                                            <option value="1">Pricing Plan: Yearly ${{ get_settings('basic_plan_price_yearly') }}</option>
                                        @elseif ($plan == 'premium') 
                                            <option value="0">Pricing Plan: Monthly ${{ get_settings('premium_plan_price_monthly') }}</option>
                                            <option value="1">Pricing Plan: Yearly ${{ get_settings('premium_plan_price_yearly') }}</option>
                                        @else   
                                            <option value="0">Pricing Plan: Monthly ${{ get_settings('corporate_plan_pricing_monthly') }}</option>
                                            <option value="1">Pricing Plan: Yearly ${{ get_settings('corporate_plan_pricing_yearly') }}</option>
                                        @endif
                                    @else    
                                        @if ($plan == 'basic')
                                            <option value="0">Pricing Plan: Monthly ${{ get_settings('truspan_basic_plan_price_monthly') }}</option>
                                            <option value="1">Pricing Plan: Yearly ${{ get_settings('truspan_basic_plan_price_yearly') }}</option>
                                        @elseif ($plan == 'premium') 
                                            <option value="0">Pricing Plan: Monthly ${{ get_settings('truspan_premium_plan_price_monthly') }}</option>
                                            <option value="1">Pricing Plan: Yearly ${{ get_settings('truspan_premium_plan_price_yearly') }}</option>
                                        @else   
                                            <option value="0">Pricing Plan: Monthly ${{ get_settings('truspan_corporate_plan_pricing_monthly') }}</option>
                                            <option value="1">Pricing Plan: Yearly ${{ get_settings('truspan_corporate_plan_pricing_yearly') }}</option>
                                        @endif
                                    @endif
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name" value="" required>
                                    <label for="first_name" class="form-label">First name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name" value="" required>
                                    <label for="last_name" class="form-label">Last name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                                    <label for="email" class="form-label">Email Address</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="you@example.com" required>
                                    <label for="phone" class="form-label">Phone Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                                    <label for="address" class="form-label">Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
                                    <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" required name="country" id="country" placeholder="Country">
                                    <label for="address2" class="form-label">Country</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip Code" required>
                                    <label for="zip" class="form-label">Zip Code</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="mb-4">Order Summary</h3>
                        <div class="shopping-cart mb-7">
                            <div class="shopping-cart-item d-flex justify-content-between mb-4">
                                <div class="d-flex flex-row d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="post-title h6 lh-xs mb-1">
                                            @if ($product == 'epostu')
                                                Epostu - 
                                                @if ($plan == 'basic')
                                                    {{ get_settings('basic_plan_name') }}
                                                @elseif ($plan == 'premium')
                                                    {{ get_settings('premium_plan_name') }}
                                                @else   
                                                    {{ get_settings('corporate_plan_name') }}
                                                @endif
                                            @else    
                                                TruSpam - 
                                                @if ($plan == 'basic')
                                                    {{ get_settings('truspan_basic_plan_name') }}
                                                @elseif ($plan == 'premium')
                                                    {{ get_settings('truspan_premium_plan_name') }}
                                                @else   
                                                    {{ get_settings('truspan_corporate_plan_name') }}
                                                @endif
                                            @endif
                                        </h3>
                                        <div class="pricing-plan small">Montly Pricing Plan</div>
                                    </div>
                                </div>
                                <div class="ms-2 d-flex align-items-center">
                                    <p class="price fs-sm">
                                        <span>
                                            @if ($product == 'epostu')
                                                @if ($plan == 'basic')
                                                    ${{ get_settings('basic_plan_price_monthly') }}
                                                @elseif ($plan == 'premium')
                                                    ${{ get_settings('premium_plan_price_monthly') }}
                                                @else   
                                                    ${{ get_settings('corporate_plan_pricing_monthly') }}
                                                @endif
                                            @else    
                                                @if ($plan == 'basic')
                                                    ${{ get_settings('truspan_basic_plan_price_monthly') }}
                                                @elseif ($plan == 'premium')
                                                    ${{ get_settings('truspan_premium_plan_price_monthly') }}
                                                @else   
                                                    ${{ get_settings('truspan_corporate_plan_pricing_monthly') }}
                                                @endif
                                            @endif
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div id="more_storage_area" style="display: none;" class="shopping-cart-item justify-content-between mb-4">
                                <div class="d-flex flex-row d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="h6 mb-1">
                                            10 GB Storage
                                        </h6>
                                    </div>
                                </div>
                                <div class="ms-2 d-flex align-items-center">
                                    <p class="fs-sm">
                                        $0.50
                                    </p>
                                </div>
                            </div>
                            <div id="security_gateway_addon_area" style="display: none;" class="shopping-cart-item justify-content-between mb-4">
                                <div class="d-flex flex-row d-flex align-items-center">
                                    <div class="w-100">
                                        <h6 class="h6 mb-1">
                                            Security Gateway Addon
                                        </h6>
                                    </div>
                                </div>
                                <div class="ms-2 d-flex align-items-center">
                                    <p class="fs-sm">
                                        $0.50
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-order">
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <strong class="text-dark">Subtotal</strong>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <p class="price">
                                                @if ($product == 'epostu')
                                                    @if ($plan == 'basic')
                                                        ${{ get_settings('basic_plan_price_monthly') }}
                                                    @elseif ($plan == 'premium')
                                                        ${{ get_settings('premium_plan_price_monthly') }}
                                                    @else   
                                                        ${{ get_settings('corporate_plan_pricing_monthly') }}
                                                    @endif
                                                @else    
                                                    @if ($plan == 'basic')
                                                        ${{ get_settings('truspan_basic_plan_price_monthly') }}
                                                    @elseif ($plan == 'premium')
                                                        ${{ get_settings('truspan_premium_plan_price_monthly') }}
                                                    @else   
                                                        ${{ get_settings('truspan_corporate_plan_pricing_monthly') }}
                                                    @endif
                                                @endif
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <strong class="text-dark">Grand Total</strong>
                                        </td>
                                        <td class="pe-0 text-end">
                                            <p class="price text-dark fw-bold">
                                                @if ($product == 'epostu')
                                                    @if ($plan == 'basic')
                                                        ${{ get_settings('basic_plan_price_monthly') }}
                                                    @elseif ($plan == 'premium')
                                                        ${{ get_settings('premium_plan_price_monthly') }}
                                                    @else   
                                                        ${{ get_settings('corporate_plan_pricing_monthly') }}
                                                    @endif
                                                @else    
                                                    @if ($plan == 'basic')
                                                        ${{ get_settings('truspan_basic_plan_price_monthly') }}
                                                    @elseif ($plan == 'premium')
                                                        ${{ get_settings('truspan_premium_plan_price_monthly') }}
                                                    @else   
                                                        ${{ get_settings('truspan_corporate_plan_pricing_monthly') }}
                                                    @endif
                                                @endif
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                        <button type="submit" id="submit" style="display: none;" class="btn btn-primary rounded w-100 mt-4">Place Order</button>
                        <button type="button" id="submitting" disabled class="btn btn-primary rounded w-100 mt-4">
                            <span class="spinner-border spinner-border-sm pr-4 mr-4" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    @if ($product == 'epostu')
        @if ($plan == 'basic')
            <input type="hidden" id="pricing_plan_montly" value="{{ get_settings('basic_plan_price_monthly') }}">
            <input type="hidden" id="pricing_plan_yearly" value="{{ get_settings('basic_plan_price_yearly') }}">
        @elseif ($plan == 'premium')
            <input type="hidden" id="pricing_plan_montly" value="{{ get_settings('premium_plan_price_monthly') }}">
            <input type="hidden" id="pricing_plan_yearly" value="{{ get_settings('premium_plan_price_yearly') }}">
        @else   
            <input type="hidden" id="pricing_plan_montly" value="{{ get_settings('corporate_plan_pricing_monthly') }}">
            <input type="hidden" id="pricing_plan_yearly" value="{{ get_settings('corporate_plan_pricing_yearly') }}">
        @endif
    @else
        @if ($plan == 'basic')
            <input type="hidden" id="pricing_plan_montly" value="{{ get_settings('truspan_basic_plan_price_monthly') }}">
            <input type="hidden" id="pricing_plan_yearly" value="{{ get_settings('truspan_basic_plan_price_yearly') }}">
        @elseif ($plan == 'premium')
            <input type="hidden" id="pricing_plan_montly" value="{{ get_settings('truspan_premium_plan_price_monthly') }}">
            <input type="hidden" id="pricing_plan_yearly" value="{{ get_settings('truspan_premium_plan_price_yearly') }}">
        @else   
            <input type="hidden" id="pricing_plan_montly" value="{{ get_settings('truspan_corporate_plan_pricing_monthly') }}">
            <input type="hidden" id="pricing_plan_yearly" value="{{ get_settings('truspan_corporate_plan_pricing_yearly') }}">
        @endif
    @endif
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/checkout.js') }}"></script>
    <script>
        $(document).on('change', '#pricing_plan_id', function() {
            let val = $(this).val();

            let pricing_plan_montly = $('#pricing_plan_montly').val();
            let pricing_plan_yearly = $('#pricing_plan_yearly').val();

            if(val == 0) {
                $('.pricing-plan').html('Montly Pricing Plna');
                $('.amount').html('$'+pricing_plan_montly);
                $('.price').html('$'+pricing_plan_montly);
            } else {
                $('.pricing-plan').html('Yearly Pricing Plna');
                $('.amount').html('$'+pricing_plan_yearly);
                $('.price').html('$'+pricing_plan_yearly);
            }
        })

        $(document).ready(function() {
            function calculateTotal() {
                let pricing_plan_monthly = parseFloat($('#pricing_plan_montly').val()) || 0;
                let more_storage = $('#more_storage').is(':checked') ? 0.50 : 0;
                let gateway = $('#security_gateway_addon').is(':checked') ? 0.50 : 0;

                if(more_storage > 0) {
                    $('#more_storage_area').show();
                    $('#more_storage_area').addClass('d-flex');
                } else {
                    $('#more_storage_area').hide();
                    $('#more_storage_area').removeClass('d-flex');
                }

                if(gateway > 0) {
                    $('#security_gateway_addon_area').show();
                    $('#security_gateway_addon_area').addClass('d-flex');
                } else {
                    $('#security_gateway_addon_area').hide();
                    $('#security_gateway_addon_area').removeClass('d-flex');
                }

                let total = pricing_plan_monthly + more_storage + gateway;

                $('.amount').html('$' + total.toFixed(2));
                $('.price').html('$' + total.toFixed(2));
            }

            $('#more_storage, #security_gateway_addon').on('change', function() {
                calculateTotal();
            });

            calculateTotal();
        });

    </script>
@endpush
