<div class="leftbar">
    <div class="sidebar">

        <div class="logobar">
            <a href="{{ route('admin.dashboard') }}" class="logo logo-large">
                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo">
            </a>
            <a href="{{ route('admin.dashboard') }}" class="logo logo-small">
                <img src="{{ asset('assets/images/favicon.png') }}"" class="img-fluid" alt="logo">
            </a>
        </div>

        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-line"></i>
                        <span>Widgets</span>
                    </a>
                </li>                                          
            </ul>
        </div>
    </div>
</div>