<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('frontend.layouts.partials.head')
    </head>
    <body>
        <div class="content-wrapper">
            @include('frontend.layouts.partials.header')

            @yield('content')

        </div>
        @include('frontend.layouts.partials.footer')
        @include('frontend.layouts.partials.scripts')
    </body>
</html>