@extends('frontend.layouts.app')
@section('title', 'Contact Us | Epostu')

@section('content')

<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                <h1 class="display-1 mb-3">Get in Touch</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light angled upper-end">
    <div class="container py-14 py-md-16">
        <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
            <div class="col-lg-7 position-relative">
                <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
                <div class="row gx-md-5 gy-5">
                    <div class="col-md-6">
                        <figure class="rounded mt-md-10 position-relative">
                            <img src="{{ asset('assets/images/g5.jpg') }}" srcset="{{ asset('assets/images/g5.jpg') }} 2x" alt="Contact Image One"></figure>
                    </div>

                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-12 order-md-2">
                                <figure class="rounded">
                                    <img src="{{ asset('assets/images/g6.jpg') }}" srcset="{{ asset('assets/images/g6.jpg') }} 2x" alt="Contact Image Two"></figure>
                            </div>
                            <div class="col-md-10">
                                <div class="card bg-pale-primary text-center counter-wrapper">
                                    <div class="card-body py-11">
                                    <h3 class="counter text-nowrap">5000+</h3>
                                    <p class="mb-0">Satisfied Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Address</h5>
                        <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United Kingdom</address>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Phone</h5>
                        <p>00 (123) 456 78 90</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
                <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
                <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                    <div class="messages"></div>
                    <div class="row gx-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                <label for="form_name">First Name *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your first name. </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                <label for="form_lastname">Last Name *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your last name. </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                <label for="form_email">Email *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please provide a valid email address. </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-select-wrapper mb-4">
                                <select class="form-select" id="form-select" name="department" required>
                                    <option selected disabled value="">Select a department</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Customer Support">Customer Support</option>
                                </select>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please select a department. </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                <label for="form_message">Message *</label>
                                <div class="valid-feedback"> Looks good! </div>
                                <div class="invalid-feedback"> Please enter your messsage. </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1581284760055!2d90.41059587589764!3d23.777382787738883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a53a4d49f3%3A0x78d5e72cabb9544d!2sCorporate%20Projukti%20Limited!5e0!3m2!1sen!2sbd!4v1730199519292!5m2!1sen!2sbd" style="width:100%; height: 500px; border:0" allowfullscreen></iframe>
    </div>
</section>
    
@endsection

@push('scripts')
    <script>

    </script>
@endpush
