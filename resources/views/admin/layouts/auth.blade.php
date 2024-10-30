<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.partials.head')
</head>
<body class="vertical-layout">
    <div id="containerbar" class="containerbar authenticate-bg">

        @yield('content')

    </div>
    @include('admin.layouts.partials.scripts')
</body>
</html>