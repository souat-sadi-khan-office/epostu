<!-- Start Topbar Mobile -->
<div class="topbar-mobile">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="mobile-logobar">
                <a href="{{ route('admin.dashboard') }}" class="mobile-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo">
                </a>
            </div>
            <div class="mobile-togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="topbar-toggle-icon">
                            <a class="topbar-toggle-hamburger" href="javascript:void();">
                                <span class="iconbar">
                                    <i class="ri-more-fill menu-hamburger-horizontal"></i>
                                    <i class="ri-more-2-fill menu-hamburger-vertical"></i>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void();">
                                <span class="iconbar">
                                    <i class="ri-menu-2-line menu-hamburger-collapse"></i>
                                    <i class="ri-close-line menu-hamburger-close"></i>
                                </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="topbar">
    <div class="row align-items-center">
        <div class="col-md-12 align-self-center">
            <div class="togglebar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="menubar">
                            <a class="menu-hamburger" href="javascript:void();">
                                <span class="iconbar">
                                    <i class="ri-menu-2-line menu-hamburger-collapse"></i><i
                                        class="ri-close-line menu-hamburger-close"></i>
                                </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="infobar">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="settingbar">
                            <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                <span class="iconbar"><i class="ri-settings-3-line"></i></span>
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="notifybar">
                            <div class="dropdown">
                                <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="iconbar"><i class="ri-notification-3-line"></i><span
                                            class="live-icon"></span></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                    <div class="notification-dropdown-title">
                                        <h5>Notifications<a href="#">Clear all</a></h5>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-primary"><i
                                                    class="ri-archive-line"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">Product Added</h5>
                                                <p><span class="timing">Today, 08:40 AM</span></p>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-success"><i
                                                    class="ri-price-tag-3-line"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">Sale Started</h5>
                                                <p><span class="timing">Today, 03:45 PM</span></p>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-warning"><i
                                                    class="ri-file-text-line"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">Kelly Reported</h5>
                                                <p><span class="timing">5 June 2020, 02:20 PM</span></p>
                                            </div>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="action-icon badge badge-danger"><i
                                                    class="ri-file-user-line"></i></span>
                                            <div class="media-body">
                                                <h5 class="action-title">John Resigned</h5>
                                                <p><span class="timing">2 June 2020, 11:11 AM</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="notification-dropdown-footer">
                                        <h5><a href="#">See all</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="profilebar">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:;" role="button" id="profilelink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="{{ asset('assets/images/profile.svg') }}"
                                        class="img-fluid" alt="profile"><span class="live-icon">John D</span></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                        <a class="dropdown-item" href="#"><i class="ri-user-6-line"></i>My Profile</a>
                                        <a class="dropdown-item" href="#"><i class="ri-settings-3-line"></i>Settings</a>
                                        <a href="javascript:;" data-url="{{ route('admin.logout') }}" id="logout" class="dropdown-item text-danger"> 
                                            <i class="ri-shut-down-line"></i>
                                            Sign out
                                        </a> 
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
