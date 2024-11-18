<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.toaster.js') }}"></script>
@if (!Request::is('contact'))
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>
@endif
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('scripts')
