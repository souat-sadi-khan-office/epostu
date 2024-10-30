<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.partials.head')
</head>
<body class="vertical-layout">
    @include('admin.layouts.partials.info-bar')
    @include('admin.layouts.partials.sidebar')

    <div id="containerbar">
        <div class="rightbar">
            @include('admin.layouts.partials.topbar')
            
            @yield('content')
            
            @include('admin.layouts.partials.footer')
        </div>
    </div>

    @include('admin.layouts.partials.scripts')
</body>
</html>