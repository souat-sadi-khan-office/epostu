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
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 support-container">
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
                        <p class="mb-0">Business-Hours support only, regular troubleshooting</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/icons/lineal/web.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        <h3 class="counter">Silver</h3>
                        <p class="mb-0">7*24 phone support, regular troubleshooting reviews</p>
                    </div>

                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        <h3 class="counter">Gold</h3>
                        <p class="mb-0">7*24 phone support, includes data migration task</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-gray">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <h2 class="display-4 mb-3 text-center">Pricing FAQ</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
        <div class="row">
            <div class="col-lg-12 mb-0">
                <div id="accordion-1" class="accordion-wrapper">
                    <div class="row">
                        @if (count($faqs))
                            @foreach ($faqs as $key => $faq)
                                <div class="col-md-6">
                                    <div class="card accordion-item">
                                        <div class="card-header" id="accordion-heading-{{ $key }}">
                                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-{{ $key }}" aria-expanded="false" aria-controls="accordion-collapse-{{ $key }}">{{ $faq->question }}?</button>
                                        </div>
                                        <div id="accordion-collapse-{{ $key }}" class="collapse" aria-labelledby="accordion-heading-{{ $key }}" data-bs-target="#accordion-1">
                                            <div class="card-body">
                                                <p>{{ nl2br($faq->answer) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <article class="item post col-md-4">
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                            <a href="{{ route('knowledge', $blog->slug) }}"> 
                                                <img src="{{ $blog->thumb_image ? asset($blog->thumb_image) : asset('assets/images/b6.jpg') }}" alt="Knowledge three" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="{{ route('knowledge', $blog->slug) }}" class="hover" rel="category">{{ $blog->tag }}</a>
                                                </div>
                                                <h2 class="post-title h3 mt-1 mb-3">
                                                    <a class="link-dark" href="{{ route('knowledge', $blog->slug) }}">{{ $blog->name }}</a>
                                                </h2>
                                            </div>
                                            <div class="post-content">
                                                <p>{{ $blog->short_details }}</p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <span>{{ date('d F, Y', strtotime($blog->created_at)) }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        @else   
                            <div class="col-md-12 text-center text-muted">
                                <h4 class="h2">Nothing to show.</h4>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- <nav class="d-flex" aria-label="pagination">
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
                </nav> --}}
            </div>
            
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script>

    </script>
@endpush
