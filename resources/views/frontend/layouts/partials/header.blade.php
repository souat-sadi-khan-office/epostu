<header class="wrapper bg-gray">
    <nav class="navbar navbar-expand-lg center-logo transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo.png') }}" alt="System Logo" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Epostu</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('about') }}">
                                About
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('products') ? 'active' : '' }}" data-bs-toggle="dropdown"  href="javascript:;" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('product', 'epostu') }}">
                                        EposTu
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('product', 'truspam') }}">
                                        Truspam
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('support') ? 'active' : '' }}" href="{{ route('support') }}">
                                Support
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('find-partner') ? 'active' : '' }}" href="{{ route('find.partner') }}">
                                Find a Partner
                            </a>
                        </li>
                    </ul>
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">{{ get_settings('email_address') }}</a>
                            <br /> {{ get_settings('footer_phone_one') }} <br />
                            <nav class="nav social social-white mt-4">
                                @if (get_settings('facebook_link'))
                                    <a href="{{ get_settings('facebook_link') }}" target="_blank">
                                        <i class="uil uil-facebook-f"></i>
                                    </a>
                                @endif
                                @if (get_settings('twitter_link'))
                                    <a href="{{ get_settings('twitter_link') }}" target="_blank">
                                        <i class="uil uil-twitter"></i>
                                    </a>
                                @endif
                                @if (get_settings('linkedin_link'))
                                    <a href="{{ get_settings('linkedin_link') }}" target="_blank">
                                        <i class="uil uil-linkedin"></i>
                                    </a>
                                @endif
                                @if (get_settings('instagram_link'))
                                    <a href="{{ get_settings('instagram_link') }}" target="_blank">
                                        <i class="uil uil-instagram"></i>
                                    </a>
                                @endif
                                @if (get_settings('youtube_link'))
                                    <a href="{{ get_settings('youtube_link') }}" target="_blank">
                                        <i class="uil uil-youtube"></i>
                                    </a>
                                @endif
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">
                        <a href="{{ route('become.partner') }}" class="btn btn-sm btn-primary rounded-pill">Become a Partner</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>