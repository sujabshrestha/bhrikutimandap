@extends('layouts.vendor.master')
@section('content')
    <main class="page-register">
        <section class="sc-form register-form position-relative"  style="background-image: url('{{ asset('frontendfiles/assets/images/login-banner.png') }}')">
            <div class="container">
                <div class="sc-form-content row align-items-center">
                    <div class="col-left d-flex flex-column justify-content-center px-4 px-md-3">
                        <div class="sc-form-title mt-5">
                            <p class="text-primary-v1 fw-6 fs-xx-lg mb-0">Forgot Password</p>
                            <h1 class="text-primary-v1 fw-6">To Venue Booking System. </h1>
                        </div>

                        <form method="POST" action="{{ route('vendor.forgetPasswordSubmit') }}">
                            @csrf
                            <div class="form-element password-element">
                                <label for="" class="form-label">Email or Phone Number</label>
                                <input type="text" name="email" class="form-control" placeholder="loginbhrikuti@example.com" name="">
                                @if ($errors->has('email'))
                                    <span style="color: red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="btn-text">Get Reset Link</span>
                            </button>

                            <p class="text-copyright text-center mb-0 mt-5">Copyright by Samaj Kalyan Parisad Sachibalaya,
                                Bhrikutimandap-Kathmandu</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
