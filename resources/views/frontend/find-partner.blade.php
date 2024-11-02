@extends('frontend.layouts.app', ['title' => 'Find Partner'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="Find Partner">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Find Partner">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Find Partner">	
<meta property="og:description" content="Find Partner}">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Find Partner" /> 
<meta name="twitter:title" content="Find Partner" />
<meta name="twitter:description" content="Find Partner" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')
    {{-- <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-20 pt-md-14 pb-md-15 text-center">
            <div class="row">
                <div class="col-xl-5 mx-auto mb-6">
                    <h1 class="display-1 mb-3">Find Partner</h1>
                    <p class="lead mb-0">Find Partner that fits you the best.</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset('assets/images/find-partner.webp') }}" style="background-image: url('{{ asset('assets/images/find-partner.webp') }}');">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">Find Partner</h1>
                    <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">Find Partner that fits you the best.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="wrapper bg-light">
        <div class="container py-15 py-md-17">
            <div class="row gx-lg-8 gx-xl-12 gy-8">
                @if (count($models) > 0)
                    @foreach ($models as $model)
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="h4 mb-0">{{ $model->company_name }}</h2>
                                </div>
                                <div class="card-body">
                                    <ul class="partner-list" style="list-style: none;padding-left:0px;font-size: 18px">
                                        <li class="mb-3">
                                            <i class="uil uil-user"></i>
                                            &nbsp;&nbsp;&nbsp;
                                            {{ $model->first_name . ' '. $model->last_name }}
                                        </li>
                                        <li class="mb-3">
                                            <i class="uil uil-envelope"></i>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="mailto:{{ $model->email }}" target="_blank">{{ $model->email }}</a>
                                        </li>
                                        <li class="mb-3">
                                            <i class="uil uil-calling"></i>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="tel:{{ $model->phone }}">{{ $model->phone }}</a>
                                        </li>
                                        <li class="mb-3">
                                            <i class="uil uil-location-point"></i>
                                            &nbsp;&nbsp;&nbsp;
                                            {{ $model->contact_person }}
                                        </li>
                                        <li class="mb-3">
                                            <i class="uil uil-globe"></i>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="https://google.com" target="_blank">google.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else  
                    <div class="col-md-12 text-center text-muted">
                        <h4 class="h2">Nothing to show.</h4>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
