<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Laravel 11 Admin Template</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="vertical-layout">

        <div id="containerbar" class="containerbar authenticate-bg">
            <div class="container">
				@yield('content')
            </div>
        </div>

        <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('backend/js/detect.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/pnotify.min.js') }}"></script>
        <script src="{{ asset('js/parsley.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert.min.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script src="{{ asset('js/main.js') }}"></script>
		@yield('js-script')		
    </body>
</html>