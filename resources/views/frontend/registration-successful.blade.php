@extends('frontend.layouts.app', ['title' => 'Event Registration Successful | Epostu'])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="Event Registration Successful | Epostu">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="description" content="Event Registration Successful">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="Event Registration Successful | Epostu">	
<meta property="og:description" content="Event Registration Successful | Epostu}">	
<meta property="og:image" content="{{ asset('assets/images/logo.png') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Epostu" /> 
<meta name="twitter:title" content="Event Registration Successful | Epostu" />
<meta name="twitter:description" content="Event Registration Successful | Epostu" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
@endsection
@section('content')

<!-- /header -->
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white" data-image-src="{{ asset('assets/images/bg18.png') }}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-1 mb-3">Thank You!</h1>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-7 col-xl-7 col-xxl-7 mx-auto mt-n20">
                <div class="card">
                    <div class="card-body p-5 text-center">
                        <div id="timer">
                            <div id="hours"></div>
                            <div id="minutes"></div>
                            <div id="seconds"></div>
                            <div id="log"></div>
                        </div>
                        <h2 class="mb-3 ">Your Registration is Successful</h2>
                        <p class="lead mb-6 ">Thank you for your registration. Please show this screen at our stall within 2 minutes to collect your gift. Your Registration time is: <b>{{ date('d F, Y h:i:a', strtotime($event->created_at)) }}</b></p>
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>
                                            @if ($event->gift)
                                            {{ $event->gift->name }}
                                        @endif
                                        </h2>
                                    </div>
                                    @if ($event->gift)
                                        <img class="card-img-bottom" src="{{ asset($event->gift->photo) }}" alt="{{ $event->gift->name }}" />
                                    @endif
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
        function countDown() {
            var currDate = new Date().toLocaleString("en-US", { timeZone: "Asia/Bangkok" });
            currDate = new Date(currDate);

            var endTime = new Date(
                currDate.getFullYear(),
                currDate.getMonth(),
                currDate.getDate(),
                {{ date('H', strtotime($event->created_at)) }},
                {{ date('i', strtotime($event->created_at . ' + '. (get_settings('event_notification_time') > 2 ? get_settings('event_notification_time') : 2) .' minutes')) }},
                {{ date('s', strtotime($event->created_at)) }}
            );

            endTime = Date.parse(endTime) / 1000;

            var now = Date.parse(new Date().toLocaleString("en-US", { timeZone: "Asia/Bangkok" })) / 1000;

            var timeLeft = endTime - now;

            if (timeLeft <= 0) {
                window.location.href = "/event-registration";
            }

            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours > 8) {
                hours = 0;
                minutes = 0;
                seconds = 0;
            }

            if (minutes < "10") {
                minutes = "0" + minutes;
            }
            if (seconds < "10") {
                seconds = "0" + seconds;
            }

            $("#hours").html(minutes + ":" + seconds);
        }

        setInterval(function () {
            countDown();
        }, 1000);

    </script>
@endpush
