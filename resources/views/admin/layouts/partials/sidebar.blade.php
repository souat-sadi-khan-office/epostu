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
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="vertical-header">Data</li>  
                <li>
                    <a href="{{ route('admin.report.partner') }}">
                        <i class="ri-group-line"></i>
                        <span>Partners</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.report.contact-message') }}">
                        <i class="ri-contacts-line"></i>
                        <span>Contact Message</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('admin.report.subscribers') }}">
                        <i class="ri-mail-line"></i>
                        <span>Subscribers</span>
                    </a>
                </li>

                <li class="vertical-header">Content</li>  
                <li>
                    <a href="{{ route('admin.support-faq.index') }}">
                        <i class="ri-question-line"></i>
                        <span>Support FAQ</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.knowledge-base.index') }}">
                        <i class="ri-bubble-chart-line"></i>
                        <span>Knowledge Base</span>
                    </a>
                </li>

                <li class="vertical-header">Configuration</li>  
                <li>
                    <a href="{{ route('admin.settings') }}">
                        <i class="ri-settings-line"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>