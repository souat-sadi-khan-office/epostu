@extends('frontend.layouts.app')
@section('title', 'Support | Epostu')

@section('content')

<section class="wrapper bg-gray">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                <h1 class="display-1 mb-3">Support Offerings</h1>
                <p class="lead px-lg-5 px-xxl-8">The first step to building a community is relationships. We value our relationships and are committed to responding quickly to your support needs..</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container  py-md-16">
        <div class="row">
            <div class="col-lg-4">
                <h2 class=" display-6 text-uppercase text-primary mb-3">Support Level</h2>
                <h3 class="fs-15 pe-xl-15">We offers different Technical Support Levels, so you can select the one that best fits your Business needs.</h3>
            </div>

            <div class="col-lg-8">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/icons/lineal/shield.svg') }}" class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="" />
                        <h3 class="counter">Standard</h3>
                        <p class="mb-0">Business-Hours support only, respond to troubleshooting regularly</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/icons/lineal/cloud-computing-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        <h3 class="counter">Silver</h3>
                        <p class="mb-0">7*24 phone support, regular troubleshooting check</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        <h3 class="counter">Gold</h3>
                        <p class="mb-0">7*24 phone support included data migration</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-gray">
    <div class="container py-md-16">
        <h2 class="display-4 mb-3 text-center">Pricing FAQ</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
        <div class="row">
            <div class="col-lg-6 mb-0">
                <div id="accordion-1" class="accordion-wrapper">
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
                        </div>
                        <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                            <div class="card-body">
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
                        </div>
                        <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-3">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
                        </div>
                        <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-4">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Is my credit card information secure?</button>
                        </div>
                        <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div id="accordion-2" class="accordion-wrapper">
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">How do I get my subscription receipt?</button>
                        </div>
                        <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Are there any discounts for people in need?</button>
                        </div>

                        <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-3">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Do you offer a free trial edit?</button>
                        </div>
                        <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                            <div class="card-body">
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-4">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="false" aria-controls="accordion-collapse-2-4">How do I reset my Account password?</button>
                        </div>
                        <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <h2 class="display-4 mb-3 text-center">Knowledge Base</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">Access our extensive documentation, covering everything from onboarding to troubleshooting..</p>
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-12 order-lg-2">
                <div class="blog grid grid-view">
                    <div class="row isotope gx-md-8 gy-8 mb-8">
                        <article class="item post col-md-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="{{ route('knowledge', 'one') }}"> 
                                        <img src="{{ asset('assets/images/b4.jpg') }}" alt="Knowledge One" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="{{ route('knowledge', 'one') }}" class="hover" rel="category">Coding</a>
                                        </div>
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href=".{{ route('knowledge', 'one') }}">Ligula tristique quis risus</a></h2>
                                    </div>
                                    <div class="post-content">
                                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus
                                            vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i>
                                            <span>14 Apr {{ date('Y') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <article class="item post col-md-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="{{ route('knowledge', 'one') }}"> 
                                        <img src="{{ asset('assets/images/b5.jpg') }}" alt="Knowlegde two" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="{{ route('knowledge', 'one') }}" class="hover" rel="category">Workspace</a>
                                        </div>
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="{{ route('knowledge', 'one') }}">
                                                Nullam id dolor elit id nibh
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus
                                            vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i>
                                            <span>29 Mar 2022</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <article class="item post col-md-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="{{ route('knowledge', 'one') }}"> 
                                        <img src="{{ asset('assets/images/b6.jpg') }}" alt="Knowledge three" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="{{ route('knowledge', 'one') }}" class="hover" rel="category">Meeting</a>
                                        </div>
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="{{ route('knowledge', 'one') }}">Ultricies fusce porta elit</a>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus
                                            vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i>
                                            <span>26 Feb {{ date('Y') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script>

    </script>
@endpush
