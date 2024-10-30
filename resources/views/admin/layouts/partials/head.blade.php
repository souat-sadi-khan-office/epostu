<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ isset($title) ? $title : 'Admin Panel' }} | Epostu</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/switchery.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/parsley.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/toaster.css') }}" rel="stylesheet" type="text/css">

@stack('styles')