<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ isset($title) ? $title : 'Epostu' }}</title>

<link rel="canonical" href="{{ url()->current() }}" />

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/css/navy.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('assets/css/parsley.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/toaster.css') }}">

@yield('meta')