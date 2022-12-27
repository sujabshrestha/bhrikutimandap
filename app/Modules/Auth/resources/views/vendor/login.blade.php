<!DOCTYPE html lang>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.vendor.style')
    </head>
    <body>
         <!-- sidenav overlay -->
         <div class = "page-sidenav-overlay"></div>
         <!-- sidenav overlay -->
        <div class = "page-wrapper">
            <header>
                <nav class = "page-navbar d-flex align-items-center">
                    <div class = "container">
                        <div class = "page-navbar-content px-3 d-flex align-items-center justify-content-between">
                            <div class = "brand-and-toggler d-flex align-items-center justify-content-between">
                                <a href = "#" class = "page-navbar-brand">
                                    <img src = "{{ asset('frontendfiles/assets/images/logo.svg') }} " alt = "site logo">
                                </a>

                                <button type = "button" class = "page-navbar-toggler d-lg-none">
                                    <img src = "{{ asset('frontendfiles/assets/images/menu.png') }}" alt = "menu icon">
                                </button>
                            </div>

                            <div class = "page-navbar-collapse">
                                <div class = "d-flex align-items-center justify-content-end">
                                    <button type = "button" class = "page-navbar-close-btn d-lg-none">
                                        <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "cancel icon">
                                    </button>
                                </div>

                                <ul class = "page-navbar-nav d-flex align-items-center">
                                    <li class = "page-nav-item">
                                        <a href = "index.html" class = "page-nav-link text-sm">Home</a>
                                    </li>
                                    <li class = "page-nav-item">
                                        <a href = "gallery.html" class = "page-nav-link text-sm">Gallery</a>
                                    </li>
                                    <li class = "page-nav-item">
                                        <a href = "about.html" class = "page-nav-link text-sm">About</a>
                                    </li>
                                </ul>
                            </div>

                            <div class = "page-navbar-btns d-flex">
                                <!-- <button type = "button" class = "navbar-btn btn-white btn-sm">
                                    <span class = "btn-text">SignUp</span>
                                </button> -->
                                <button type = "button" class = "navbar-btn btn-primary btn-sm ms-2">
                                    <span class = "btn-text">Sign Up</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <main class = "page-login">
                <section class = "sc-form login-form position-relative" style="background-image: url('{{ asset('frontendfiles/assets/images/login-banner.png') }}')">
                    <div class = "container">
                        <div class = "sc-form-content row align-items-center h-100">
                            <div class = "col-left d-flex flex-column justify-content-center px-4 px-md-3">
                                <div class = "sc-form-title">
                                    <p class = "text-primary-v1 fw-6 fs-xx-lg mb-0">Welcome</p>
                                    <h1 class = "text-primary-v1 fw-6">To Venue Booking System. </h1>
                                </div>
                                <p class = "text mb-0">Login to Book venue for your upcoming events</p>

                                <form>
                                    <div class = "form-element">
                                        <label for = "" class = "form-label">Email or Phone Number</label>
                                        <input type = "text" class = "form-control" placeholder="bhrikuti@example.com" name = "">
                                    </div>
                                    <div class = "form-element password-element">
                                        <label for = "" class = "form-label">Password</label>
                                        <input type = "password" class = "form-control password" placeholder="Enter Password" name = "">
                                        <span class = "eye-icon">
                                            <i class="fa-solid fa-eye-slash"></i>
                                        </span>
                                    </div>
                                    <div class = "form-elemen d-flex align-items-center justify-content-between">
                                        <div>
                                            <input class = "form-check-input" type = "checkbox" value = "" id = "remember_me">
                                            <label class = "form-check-label ps-2 text" for = "remember_me">Remember Me</label>
                                        </div>
                                        <a href = "#" class = "text-primary text">Forgot your password?</a>
                                    </div>
                                    <button type = "submit" class = "btn btn-primary">
                                        <span class = "btn-text">Login</span>
                                    </button>
                                    <p class = "text-jet text form-text">Don't have an account? <a href = "register.html" class = "text-primary">Create here</a></p>

                                    <p class = "text-copyright text-center mb-0 mt-5">Copyright by Samaj Kalyan Parisad Sachibalaya, Bhrikutimandap-Kathmandu</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>



        @include('layouts.vendor.script')
    </body>
</html>
