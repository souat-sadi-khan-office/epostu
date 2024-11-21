@if (Request::is('become-partner') || Request::is('find-partner') || Request::is('about-us') || Request::is('/') || Request::is('product/epostu') || Request::is('product/truspam') || Request::is('event-registration*') || Request::is('contact'))
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent position-absolute {{ env('APP_ENV') != 'maintenance' ? 'navbar-dark' : '' }}">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a title="Visit Our Home Page" href="{{ route('home') }}">
                        @if (Request::is('product/truspam'))
                            <img title="ePosTu Logo Dark" class="logo-dark" src="{{ asset('assets/images/truspan-logo-dark.png') }}" srcset="{{ asset('assets/images/truspan-logo-dark.png') }} 2x" alt="Dark Logo" />
                            <img title="ePosTu Logo White" class="logo-light" src="{{ asset('assets/images/truspan-logo-white.png') }}" srcset="{{ asset('assets/images/truspan-logo-white.png') }} 2x" alt="TrusPan White Logo" />
                        @else   
                            <img title="TruSpan Logo Dark" class="logo-dark" src="{{ asset('assets/images/dark-logo.png') }}" srcset="{{ asset('assets/images/dark-logo.png') }} 2x" alt="Dark Logo" />
                            <img title="TrusPan Logo Dark" class="logo-light" src="{{ asset('assets/images/white-logo.png') }}" srcset="{{ asset('assets/images/white-logo.png') }} 2x" alt="White Logo" />
                        @endif
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">EposTu</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a title="Visit Our Home Page" class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a title="Visit Our About Page" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('about') }}">
                                        About
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a title="Visit ePosTu Pricing Page" class="nav-link {{ Request::is('products') ? 'active' : '' }}" href="{{ route('product', 'epostu') }}">
                                        Pricing
                                    </a>
                                </li>

                                {{-- <li class="nav-item dropdown">
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
                                                TruSpam
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                                
                                <li class="nav-item">
                                    <a title="Visit Our Contact Page" class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                                        Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a title="Collect your gift from DigiTech ASEAN Thailand & AI Connect 2024" class="nav-link {{ Request::is('event-registration') ? 'active' : '' }}" href="{{ route('event.registration') }}">
                                        <i id="gift-box-icon" class="uil uil-gift"></i>
                                        Event Registration
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a title="Find a Partner for your needs" class="nav-link {{ Request::is('find-partner') ? 'active' : '' }}" href="{{ route('find.partner') }}">
                                        Find a Partner
                                    </a>
                                </li>
                                <li class="nav-item become-partner-mobile">
                                    <a title="Become a valuable Partner" class="nav-link {{ Request::is('become-partner') ? 'active' : '' }}" href="{{ route('become.partner') }}">
                                        Become a Partner
                                    </a>
                                </li>
                            </ul>
                        </ul>

                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a title="Mail us your thought" href="mailto:first.last@email.com" class="link-inverse">{{ get_settings('email_address') }}</a>
                                <br /> {{ get_settings('footer_phone_one') }} <br />
                                <nav class="nav social social-white mt-4">
                                    @if (get_settings('facebook_link'))
                                        <a title="Visit our facebook page" href="{{ get_settings('facebook_link') }}" target="_blank">
                                            <i class="uil uil-facebook-f"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('twitter_link'))
                                        <a title="Visit our twitter account"  href="{{ get_settings('twitter_link') }}" target="_blank">
                                            <i class="uil uil-twitter"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('linkedin_link'))
                                        <a title="Visit our LinkedIn Profile"  href="{{ get_settings('linkedin_link') }}" target="_blank">
                                            <i class="uil uil-linkedin"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('instagram_link'))
                                        <a title="Visit our Instagram page"  href="{{ get_settings('instagram_link') }}" target="_blank">
                                            <i class="uil uil-instagram"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('youtube_link'))
                                        <a title="Visit our YouTube Channel"  href="{{ get_settings('youtube_link') }}" target="_blank">
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
                            <a title="Become a valuable Partner" href="{{ route('become.partner') }}" class="btn btn-sm btn-white rounded-pill">Become a Partner</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@else    
    <header class="wrapper">
        <nav class="navbar navbar-expand-lg center-logo transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a title="Visit Our Home Page" href="{{ route('home') }}">
                        <img title="ePosTu Logo Dark" style="width: 100px;" src="{{ asset('assets/images/dark-logo.png') }}" srcset="{{ asset('assets/images/dark-logo.png') }}" alt="System Logo" />
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
                                <a title="Visit Our Home Page" class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a title="Visit Our About Page" class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('about') }}">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a title="Checkout ePosTu Pricing Plans"  class="nav-link {{ Request::is('products') ? 'active' : '' }}" href="{{ route('product', 'epostu') }}">
                                    Pricing
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown">
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
                                            TruSpam
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                           
                            <li class="nav-item">
                                <a title="Visit Our Contact Page" class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item">
                                <a title="Collect your gift from DigiTech ASEAN Thailand & AI Connect 2024" class="nav-link {{ Request::is('event-registration') ? 'active' : '' }}" href="{{ route('event.registration') }}">
                                    <i id="gift-box-icon" class="uil uil-gift"></i>
                                    Event Registration
                                </a>
                            </li>
                            <li class="nav-item">
                                <a title="Find a Partner for your needs" class="nav-link {{ Request::is('find-partner') ? 'active' : '' }}" href="{{ route('find.partner') }}">
                                    Find a Partner
                                </a>
                            </li>
                            <li class="nav-item become-partner-mobile">
                                <a title="Become a valuable partner" class="nav-link {{ Request::is('become-partner') ? 'active' : '' }}" href="{{ route('become.partner') }}">
                                    Become a Partner
                                </a>
                            </li>
                        </ul>
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a title="Write us your thought" href="mailto:first.last@email.com" class="link-inverse">{{ get_settings('email_address') }}</a>
                                <br /> {{ get_settings('footer_phone_one') }} <br />
                                <nav class="nav social social-white mt-4">
                                    @if (get_settings('facebook_link'))
                                        <a title="Visit our facebook page" href="{{ get_settings('facebook_link') }}" target="_blank">
                                            <i class="uil uil-facebook-f"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('twitter_link'))
                                        <a title="Visit our twitter account"  href="{{ get_settings('twitter_link') }}" target="_blank">
                                            <i class="uil uil-twitter"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('linkedin_link'))
                                        <a title="Visit our LinkedIn Profile"  href="{{ get_settings('linkedin_link') }}" target="_blank">
                                            <i class="uil uil-linkedin"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('instagram_link'))
                                        <a title="Visit our Instagram page"  href="{{ get_settings('instagram_link') }}" target="_blank">
                                            <i class="uil uil-instagram"></i>
                                        </a>
                                    @endif
                                    @if (get_settings('youtube_link'))
                                        <a title="Visit our YouTube Channel"  href="{{ get_settings('youtube_link') }}" target="_blank">
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
                            <a title="Become a valuable Partner" href="{{ route('become.partner') }}" class="btn btn-sm btn-primary rounded-pill">Become a Partner</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endif