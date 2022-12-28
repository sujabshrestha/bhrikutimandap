@extends('layouts.vendor.master')

@section('title', 'Login')

@section('content')
    <main class="page-login">
        <section class="sc-form login-form position-relative"
            style="background-image: url('{{ asset('frontendfiles/assets/images/login-banner.png') }}')">
            <div class="container">
                <div class="sc-form-content row align-items-center h-100">
                    <div class="col-left d-flex flex-column justify-content-center px-4 px-md-3">
                        <div class="sc-form-title">
                            <p class="text-primary-v1 fw-6 fs-xx-lg mb-0">Welcome</p>
                            <h1 class="text-primary-v1 fw-6">To Venue Booking System. </h1>
                        </div>
                        <p class="text mb-0">Login to Book venue for your upcoming events</p>

                        <form method="POST" action="{{ route('vendor.loginSubmit') }}">
                            @csrf
                            <div class="form-element">
                                <label for="" class="form-label">Email or Phone Number</label>
                                <input type="text" name="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="bhrikuti@example.com" name="">
                                @if ($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-element password-element">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control password"
                                    placeholder="Enter Password" name="">
                                <span class="eye-icon">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </span>
                                @if ($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <div class="form-elemen d-flex align-items-center justify-content-between">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="remember_me">
                                    <label class="form-check-label ps-2 text" for="remember_me">Remember Me</label>
                                </div>
                                <a href="{{ route('vendor.forgetPassword') }}" class="text-primary text">Forgot your password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="btn-text">Login</span>
                            </button>
                            <p class="text-jet text form-text">Don't have an account? <a
                                    href="{{ route('vendor.register') }}" class="text-primary">Create here</a></p>

                            <p class="text-copyright text-center mb-0 mt-5">Copyright by Samaj Kalyan Parisad
                                Sachibalaya, Bhrikutimandap-Kathmandu</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
