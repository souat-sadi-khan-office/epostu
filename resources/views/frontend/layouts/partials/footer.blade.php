@if (!Request::is('contact'))
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-16">
            <div class="row mb-8">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fs-16 text-uppercase text-primary mb-3">Stay Informed</h2>
                    {{-- <h3 class="display-4 mb-0">Get the latest updates and tips straight to your inbox. Subscribe to our newsletter today.</h3> --}}
                    <h3 class="display-4 mb-0">Subscribe to our newsletter today.</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <form action="{{ route('submit.newsletter.form') }}" method="POST" id="newsletter_form">
                        <div class="form-floating input-group">
                            <input type="email" name="email" required class="form-control border-0" placeholder="Enter Email Address" id="analyze" data-parsley-errors-container="#newsletter-email-error">
                            <label for="analyze">Enter Email Address</label>
                            <button class="btn btn-success" id="newsletter_submit" style="display: none;" type="submit">Submit</button>
                            <button class="btn btn-success" id="newsletter_submitting" type="button" disabled>
                                <span class="spinner-border spinner-border-sm pr-4 mr-4" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                    <span id="newsletter-email-error"></span>
                </div>
            </div>
        </div>
        <figure>
            <img src="{{ asset('assets/images/clouds.png') }}" alt="Footer Background">
        </figure>
    </section>
@endif

@if (Request::is('contact'))
<footer>
    <div class="container pt-8 pt-md-10 pb-7">
        <div class="text-center">
            <p class="mb-3 mb-lg-3">© {{ date('Y') }} Epostu. All rights reserved.</p>
            <nav class="nav d-flex justify-content-center social social-muted mb-0">
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
</footer>
@else   
<footer>
    <div class="container pt-8 pt-md-10 pb-7">
        <div class="d-md-flex align-items-center justify-content-between">
            <p class="mb-2 mb-lg-0">© {{ date('Y') }} Epostu. All rights reserved.</p>
            <nav class="nav social social-muted mb-0 text-md-end">
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
</footer>
{{-- <footer class="bg-white">
    <div class="container pt-8 pt-md-10 pb-7">
        <div class="row gx-lg-0 gy-6">
            <div class="col-lg-4">
                <div class="widget">
                    <img class="mb-4" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo.png') }}" alt="Footer loto">
                    <p class="lead mb-0">{{ get_settings('footer_content') }}</p>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-2">
                <div class="widget">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> 
                                <i class="uil uil-phone-volume"></i> 
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p class="mb-0">{{ get_settings('footer_phone_one') }} <br>{{ get_settings('footer_phone_two') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div class="align-self-start justify-content-start">
                            <h5 class="mb-1">Address</h5>
                            <address>{{ get_settings('footer_address') }}</address>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-13 mt-md-14 mb-7">
        <div class="d-md-flex align-items-center justify-content-between">
            <p class="mb-2 mb-lg-0">© {{ date('Y') }} Epostu. All rights reserved.</p>
            <nav class="nav social social-muted mb-0 text-md-end">
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
</footer> --}}
@endif

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
  
<div class="modal fade" id="event-registration-banner" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content text-center">
            <div class="modal-body" style="padding: 0px;">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            <img src="{{ asset('assets/images/popup-banner.png') }}" srcset="{{ asset('assets/images/popup-banner.png') }} 2x" alt="Register & Collec Your Gift" />
                        </figure>
                    </div>
                </div>
                <div class="newsletter-wrapper">
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <a href="{{ route('event.registration') }}" class="btn btn-expand btn-dark rounded-pill">
                                <i class="uil uil-arrow-right"></i>
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
