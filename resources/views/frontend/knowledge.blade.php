@extends('frontend.layouts.app')
@section('title', 'Knowledge Base | Epostu')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="{{ route('support') }}" class="hover" rel="category">Knowledge</a>
                        </div>
                        <h1 class="display-1 mb-4">Knowledge Base Header</h1>
                        <ul class="post-meta mb-5">
                            <li class="post-date">
                                <i class="uil uil-calendar-alt"></i><span>5 Jul 2022</span>
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
                                <img src="{{ asset('assets/images/b1.jpg') }}" alt="Knowledge Main Header" />
                            </figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content">
                                            <h2 class="h1 mb-4">Cras mattis consectetur purus fermentum</h2>
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet
                                                fermentum. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit
                                                tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum.</p>
                                            <p>Donec sed odio dui consectetur adipiscing elit. Etiam adipiscing tincidunt
                                                elit, eu convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor.
                                                Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at
                                                sapien. Aenean tortor libero, condimentum ac laoreet vitae, varius tempor
                                                nisi. Duis non arcu vel lectus urna mollis ornare vel eu leo.</p>
                                            
                                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis
                                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Maecenas
                                                faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.
                                                Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.
                                                Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus
                                                magna.</p>
                                            <blockquote class="fs-lg my-8">
                                                <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi
                                                    erat porttitor ligula lacinia odio sem nec elit purus.</p>
                                                <footer class="blockquote-footer">Very important person</footer>
                                            </blockquote>
                                            <h3 class="h2 mb-4">Sit Vulputate Bibendum Purus</h3>
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed
                                                consectetur. Cras mattis consectetur purus sit amet fermentum. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id
                                                ligula porta felis euismod semper.</p>
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                fermentum massa justo sit amet risus. Donec sed odio dui. Cras justo odio,
                                                dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus
                                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                                risus. Sed posuere consectetur est at lobortis. Donec id elit non mi porta
                                                gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Cum sociis
                                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                        </div>
                                        <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                            <div class="mb-0 mb-md-2">
                                                <div class="dropdown share-dropdown btn-group">
                                                    <button
                                                        class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="uil uil-share-alt"></i> Share </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="uil uil-twitter"></i>Twitter</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="uil uil-facebook-f"></i>Facebook</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="uil uil-linkedin"></i>Linkedin</a>
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
                                            <div class="swiper-slide">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                                        <a href="{{ route('knowledge', 'nee') }}">
                                                            <img src="{{ asset('assets/images/b4.jpg') }}" alt="Know one" />
                                                        </a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="{{ route('knowledge', 'nee') }}" class="hover" rel="category">Coding</a>
                                                        </div>
                                                        <h2 class="post-title h3 mt-1 mb-3">
                                                            <a class="link-dark" href="{{ route('knowledge', 'nee') }}">Ligula tristique quis risus</a>
                                                        </h2>
                                                    </div>

                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i
                                                                    class="uil uil-calendar-alt"></i><span>14 Apr
                                                                    {{ date('Y') }}</span></li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="swiper-slide">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                                        <a href="{{ route('knowledge', 'two') }}">
                                                            <img src="{{ asset('assets/images/b5.jpg') }}" alt="Knowledge two" />
                                                        </a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="{{ route('knowledge', 'two') }}" class="hover" rel="category">Workspace</a>
                                                        </div>
                                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                href="{{ route('knowledge', 'two') }}">Nullam id dolor elit id nibh</a>
                                                        </h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i
                                                                    class="uil uil-calendar-alt"></i><span>29 Mar
                                                                    2022</span></li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>

                                            <div class="swiper-slide">
                                                <article>
                                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                                        <a href="{{ route('knowledge', 'two') }}">
                                                            <img src="{{ asset('assets/images/b6.jpg') }}" alt="" />
                                                        </a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-header">
                                                        <div class="post-category text-line">
                                                            <a href="{{ route('knowledge', 'two') }}" class="hover" rel="category">Meeting</a>
                                                        </div>
                                                        <h2 class="post-title h3 mt-1 mb-3">
                                                            <a class="link-dark" href="{{ route('knowledge', 'two') }}">Ultricies fusce porta elit</a></h2>
                                                    </div>
                                                    <div class="post-footer">
                                                        <ul class="post-meta mb-0">
                                                            <li class="post-date"><i
                                                                    class="uil uil-calendar-alt"></i><span>26 Feb
                                                                    2022</span></li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>

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

@push('scripts')
    <script>

    </script>
@endpush
