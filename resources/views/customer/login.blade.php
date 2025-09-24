@extends('layouts.app')
@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Customer Login</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('index') }}"><i class="lni lni-home"></i> Home</a></li>
                    <li>Customer Login</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Account Login Area -->
<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form class="card login-form" method="POST" action="{{ route('customer.login') }}">
                    @csrf
                    <div class="card-body">
                        <div class="title">
                            <h3>Login Now</h3>
                        </div>

                        <div class="form-group input-group">
                            <label for="reg-email">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror"
                                   type="email"
                                   name="email"
                                   id="reg-email"
                                   value="{{ old('email') }}"
                                   required>
                            @error('email')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <label for="reg-pass">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror"
                                   type="password"
                                   name="password"
                                   id="reg-pass"
                                   required>
                            @error('password')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex flex-wrap justify-content-between bottom-content">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input width-auto" name="remember">
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <a class="lost-pass" href="#">Forgot password?</a>
                        </div>

                        <div class="button">
                            <button class="btn" type="submit">Login</button>
                        </div>

                        <p class="outer-link">
                            Don't have an account? <a href="{{ route('customer.register') }}">Register here</a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- End Account Login Area -->
@endsection
