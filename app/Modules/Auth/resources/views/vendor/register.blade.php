@extends('layouts.vendor.master')
@section('title', 'Register')
@section('content')
<main class = "page-register">
    <section class = "sc-form register-form position-relative " style="background-image: url('{{ asset('frontendfiles/assets/images/login-banner.png') }}')">
        <div class = "container">
            <div class = "sc-form-content row align-items-center">
                <div class = "col-left d-flex flex-column justify-content-center px-4 px-md-3">
                    <div class = "sc-form-title mt-5">
                        <p class = "text-primary-v1 fw-6 fs-xx-lg mb-0">Register</p>
                        <h1 class = "text-primary-v1 fw-6">To Venue Booking System. </h1>
                    </div>

                    <form method="POST" action="{{ route('vendor.registersubmit') }}">
                        @csrf
                        <div class = "form-element">
                            <label for = "" class = "form-label">Full Name</label>
                            <input type = "text" name="name" value="{{ old('name') ?? '' }}" required class = "form-control" placeholder="Enter your full name" name = "">
                            @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class = "form-element password-element">
                            <label for = "" class = "form-label">Email</label>
                            <input type = "email" name="email" value="{{ old('email') ?? "" }}" class = "form-control" placeholder="loginbhrikuti@example.com" name = "">
                            @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class = "form-element password-element">
                            <label for = "" class = "form-label">Password</label>
                            <input type = "password" name="password" class = "form-control password" placeholder="Enter Password" name = "">
                            <span class = "eye-icon">
                                <i class="fa-solid fa-eye-slash"></i>
                            </span>

                            @if ($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <div class = "form-element confirm-password-element">
                            <label for = "" class = "form-label">Confirm Password</label>
                            <input type = "password" name="password_confirm" class = "form-control password" placeholder="Confirm Password" name = "">
                            <span class = "eye-icon">
                                <i class="fa-solid fa-eye-slash"></i>
                            </span>

                            @if ($errors->has('password_confirm'))
                            <small class="text-danger">{{ $errors->first('password_confirm') }}</small>
                            @endif
                        </div>

                        <button type = "submit" class = "btn btn-primary">
                            <span class = "btn-text">Create Account</span>
                        </button>
                        <p class = "text-jet text form-text">Have an account? <a href = "{{ route('vendor.login') }}" class = "text-primary">Login</a></p>

                        <p class = "text-copyright text-center mb-0 mt-5">Copyright by Samaj Kalyan Parisad Sachibalaya, Bhrikutimandap-Kathmandu</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
