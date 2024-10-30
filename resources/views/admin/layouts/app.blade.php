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

    
    @if(isset($modal))
        <div id="modal_remote" class="modal fade border-top-success rounded-top-0" data-backdrop="static" role="dialog">
            <div class="modal-dialog modal-{{ $modal }} modal-dialog-centered">
                <div class="modal-content">
                    
                </div>
            </div>
        </div>
    @endif

    @include('admin.layouts.partials.scripts')
</body>
</html>