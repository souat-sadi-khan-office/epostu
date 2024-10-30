@extends('admin.layouts.auth', ['title' => 'Login'])

@section('content')
    <div class="container">
        <div class="auth-box login-box">
            <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="auth-box-right">
                        <div class="card">
                            <div class="card-body">
                                <form id="content_form" method="POST" action="{{ route('admin.login.post') }}">
                                    @csrf
                                    <div class="form-head">
                                        <a href="{{ route('home') }}" class="logo">
                                            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="System logo">
                                        </a>
                                    </div>                                        
                                    <h4 class="text-primary my-4">Log in !</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                    </div>
                                                            
                                    <button type="submit" id="submit" class="btn btn-success btn-lg btn-block font-18">
                                        Log in
                                    </button>
                                    <button class="btn btn-warning btn-lg btn-block" style="display: none;" id="submitting" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/pages/login.js') }}"></script>
@endpush