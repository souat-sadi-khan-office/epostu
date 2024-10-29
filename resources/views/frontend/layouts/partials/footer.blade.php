<section class="wrapper bg-soft-primary">
    <div class="container py-14 py-md-16">
        <div class="row mb-8">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fs-16 text-uppercase text-primary mb-3">Stay Informed</h2>
                <h3 class="display-4 mb-0">Get the latest updates and tips straight to your inbox. Subscribe to our newsletter today.</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 mx-auto">
                <form action="#">
                    <div class="form-floating input-group">
                        <input type="url" class="form-control border-0" placeholder="Enter Email Address" id="analyze">
                        <label for="analyze">Enter Email Address</label>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <figure>
        <img src="{{ asset('assets/images/clouds.png') }}" alt="Footer Background">
    </figure>
</section>

<footer class="bg-white">
    <div class="container pt-8 pt-md-10 pb-7">
        <div class="row gx-lg-0 gy-6">
            <div class="col-lg-4">
                <div class="widget">
                    <img class="mb-4" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo.png') }}" alt="Footer loto">
                    <p class="lead mb-0">We are trusted by over 5000+ clients. Join them by using our services and grow your business.</p>
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
                            <p class="mb-0">00 (123) 456 78 90 <br>00 (987) 654 32 10</p>
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
                            <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-13 mt-md-14 mb-7">
        <div class="d-md-flex align-items-center justify-content-between">
            <p class="mb-2 mb-lg-0">© {{ date('Y') }} Epostu. All rights reserved.</p>
            <nav class="nav social social-muted mb-0 text-md-end">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
        </div>
    </div>
</footer>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>