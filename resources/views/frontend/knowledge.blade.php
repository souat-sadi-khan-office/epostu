@extends('frontend.layouts.app', ['title' => $blog->site_title])
@section('meta')
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta property="og:site_name" content="Epostu">
 
<meta name="title" content="{{ $blog->meta_title }}">
<meta name="author" content="Epostu : {{ route('home') }} : {{ get_settings('email_address') }}">
<meta name="keywords" content="{{ $blog->meta_keyword }}" />
<meta name="description" content="{{ $blog->site_title }}">	

<!-- For Open Graph -->
<meta property="og:url" content="{{ url()->current() }}">	
<meta property="og:type" content="article">
<meta property="og:title" content="{{ $blog->meta_title }}">	
<meta property="og:description" content="{{ $blog->meta_descriptoin }}">	
<meta property="og:image" content="{{ $blog->thumb_image ? asset($blog->site_title) : asset('assets/images/b4.jpg') }}">	

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="Epostu" /> 
<meta name="twitter:title" content="{{ $blog->meta_title }}" />
<meta name="twitter:description" content="{{ $blog->meta_description }}" />	
<meta name="twitter:site" content="{{ route('home') }}" />		
<meta name="twitter:image" content="{{ $blog->thumb_image ? asset($blog->site_title) : asset('assets/images/b4.jpg') }}">
@endsection

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="{{ route('support') }}" class="hover" rel="category">Knowledge Base</a>
                        </div>
                        <h1 class="display-1 mb-4">{{ $blog->name }}</h1>
                        <ul class="post-meta mb-5">
                            <li class="post-date">
                                <i class="uil uil-calendar-alt"></i><span>{{ date('d F, Y', strtotime($blog->created_at)) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card">
                            <figure class="card-img-top">
                                <img title="{{ $blog->name }} Picture" src="{{ $blog->main_image ? asset($blog->main_image) : asset('assets/images/b1.jpg') }}" alt="{{ $blog->name }}" />
                            </figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content">
                                            {!! $blog->details !!}
                                        </div>
                                        <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                            <div class="mb-0 mb-md-2">
                                                <div class="dropdown share-dropdown btn-group">
                                                    <button
                                                        class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="uil uil-share-alt"></i> Share 
                                                    </button>
                                                    @props(['url' => url()->current(), $blog->name])
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="https://twitter.com/share?url={{ urlencode($url) }}&text={{ urlencode($blog->name) }}" target="_blank">
                                                            <i class="uil uil-twitter"></i> Twitter
                                                        </a>
                                                        <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
                                                            <i class="uil uil-facebook-f"></i> Facebook
                                                        </a>
                                                        <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?url={{ urlencode($url) }}&title={{ urlencode($blog->name) }}" target="_blank">
                                                            <i class="uil uil-linkedin"></i> LinkedIn
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <hr style="margin: 1rem;" />
                                <h3 class="mb-6">You Might Also Like</h3>
                                <div class="swiper-container blog grid-view" data-margin="30" data-dots="true"
                                    data-items-md="2" data-items-xs="1">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            @foreach ($relatedBlogs as $related_blog)
                                                <div class="swiper-slide">
                                                    <article>
                                                        <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                                            <a href="{{ route('knowledge', $related_blog->slug) }}">
                                                                <img title="{{ $related_blog->name }} Picture" src="{{ $related_blog->thumb_image ? asset($related_blog->thumb_image) : asset('assets/images/b4.jpg') }}" alt="{{ $related_blog->name }}" />
                                                            </a>
                                                            <figcaption>
                                                                <h5 class="from-top mb-0">Read More</h5>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="post-header">
                                                            <div class="post-category text-line">
                                                                <a href="{{ route('knowledge', $related_blog->slug) }}" class="hover" rel="category">{{ $related_blog->tag }}</a>
                                                            </div>
                                                            <h2 class="post-title h3 mt-1 mb-3">
                                                                <a class="link-dark" href="{{ route('knowledge', $related_blog->slug) }}">{{ $related_blog->name }}</a>
                                                            </h2>
                                                        </div>

                                                        <div class="post-footer">
                                                            <ul class="post-meta mb-0">
                                                                <li class="post-date"><i
                                                                        class="uil uil-calendar-alt"></i><span>{{ date('d F, Y', strtotime($related_blog->created_at)) }}</span></li>
                                                            </ul>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection