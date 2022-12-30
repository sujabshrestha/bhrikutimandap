<header>
    <nav class = "page-navbar d-flex align-items-center">
        <div class = "container">
            <div class = "page-navbar-content px-3 d-flex align-items-center justify-content-between">
                <div class = "brand-and-toggler d-flex align-items-center justify-content-between">
                    <a href = "{{route('vendor.home')}}" class = "page-navbar-brand">
                        <img src = "{{getOrginalUrl(returnSiteSetting('logo')) ?? asset('frontendfiles/assets/images/logo.svg') }} " alt = "site logo">
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
                        @auth

                        <li class = "page-nav-item">
                            <a href = "{{ route('vendor.home') }}" class = "page-nav-link text-sm">Home</a>
                        </li>
                        @endauth
                        <li class = "page-nav-item">
                            <a href = "{{ route('vendor.gallery') }}" class = "page-nav-link text-sm">Gallery</a>
                        </li>
                        <li class = "page-nav-item">
                            <a href = "{{ route('vendor.about') }}" class = "page-nav-link text-sm">About</a>
                        </li>
                    </ul>
                </div>
                @auth
                <div class = "page-navbar-profile d-flex align-items-center">
                    <!-- notification -->
                    <div class = "notification-btn-wrapper position-relative">
                        <button type = "button" class = "navbar-btn" id = "notification-view-btn">
                            <img src = "{{ asset('frontendfiles/assets/images/icons/notification.svg')}}">
                        </button>
                        <div class = "notify-popup">
                            <div class = "notify-popup-wrapper">
                                <div class = "notify-head d-flex align-items-center justify-content-between border-bottom">
                                    <h5 class = "text">
                                    Notifications</h5>
                                    <a href = "#" class = "text-xs text-primary">Mark all as read</a>
                                </div>

                                <div class = "notify-list-group">


                                    {{-- @foreach (vendorBookingApprovals() as $booking)



                                    <div class = "notify-list-item border-bottom">
                                        <div class = "notify-list-item-icon">
                                            <img src = "{{ asset('frontendfiles/assets/images/check-green.svg') }}">
                                        </div>
                                        <div class = "notify-list-item-text text-start">
                                            <p class = "text-sm mb-1">Application {{ $booking->status }}</p>
                                            <p class = "text-xs mb-1 fw-4">Your application for booking of Large exhibition hall for {{ Carbon\Carbon::parse($booking->from_date)->format('dS M') }} to {{ Carbon\Carbon::parse($booking->end_date)->format('dS M') }}  has been {{ $booking->status }}.</p>
                                            <span class = "text-xxs text-silver d-block">{{ $booking->created_at->diffForHumans() }}</span>
                                            @if ($booking->status == "Approved")


                                            <a href = "{{ route('vendor.application.proceedToPayment', $booking->id) }}" class = "btn-outline-primary-xs btn mt-1">
                                                <span class = "btn-text">Proceed to payment</span>
                                                <span class = "ms-2 text-primary text-xs">
                                                    <i class = "fas fa-arrow-right"></i>
                                                </span>
                                            </a>
                                            @else
                                            <a href = "#" class = "btn-outline-primary-xs btn mt-1">
                                                <span class = "btn-text">Waiting for approval</span>
                                                <span class = "ms-2 text-primary text-xs">
                                                    <i class = "fas fa-arrow-right"></i>
                                                </span>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach --}}

                                    <div class = "notify-list-item border-bottom">
                                        <div class = "notify-list-item-icon">
                                            <img src = "{{ asset('frontendfiles/assets/images/check-green.svg') }}">
                                        </div>
                                        <div class = "notify-list-item-text text-start">
                                            <p class = "text-sm mb-1">Payment has been verified</p>
                                            <p class = "text-xs mb-1 fw-4">Your payment for booking of Large exhibition hall for 31st December has been verified.</p>
                                            <span class = "text-xxs text-silver d-block">1 hr ago</span>
                                            <a href = "#" class = "btn-outline-primary-xs btn mt-1">
                                                <span class = "btn-text">Check Details</span>
                                                <span class = "ms-2 text-primary text-xs">
                                                    <i class = "fas fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class = "notify-list-item border-bottom">
                                        <div class = "notify-list-item-icon">
                                            <img src = "{{ asset('frontendfiles/assets/images/check-green.svg') }}">
                                        </div>
                                        <div class = "notify-list-item-text text-start">
                                            <p class = "text-sm mb-1">Payment has been verified</p>
                                            <p class = "text-xs mb-1 fw-4">Your payment for booking of Large exhibition hall for 31st December has been verified.</p>
                                            <span class = "text-xxs text-silver d-block">1 hr ago</span>
                                            <a href = "#" class = "btn-outline-primary-xs btn mt-1">
                                                <span class = "btn-text">Check Details</span>
                                                <span class = "ms-2 text-primary text-xs">
                                                    <i class = "fas fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class = "notify-head d-flex align-items-center justify-content-center justify-content-md-end border-bottom">
                                    <a href = "#" class = "text-xs text-primary">
                                        View All
                                        <span class = "ms-1">
                                            <i class = "fas fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of notification -->

                    <!-- profile -->
                    <div class = "profile-btn-wrapper position-relative">
                        @php  $user = Auth::user(); @endphp
                        <button type = "button" class = "navbar-profile-avatar avatar ms-2 ms-lg-3" id = "profile-view-btn">
                            <img src = "{{  getOrginalUrl($user->image_id) ?? asset('frontendfiles/assets/images/avatar.jpg') }}">
                        </button>
                        <div class = "profile-popup">
                            <div class = "profile-popup-wrapper">
                                <div class = "popup-head border-bottom pb-3">
                                   
                                    <div class = "popup-img mx-auto">
                                        <img src = "{{ getOrginalUrl($user->image_id) ?? asset('frontendfiles/assets/images/avatar.jpg') }}">
                                    </div>
                                    <div class = "ps-2">
                                       
                                        <span class = "text-sm fw-6 my-1 d-inline-block mt-sm-0">{{ $user->name }}</span>
                                        <div class = "d-flex align-items-center  justify-content-sm-start">
                                        <img src = "{{ asset('frontendfiles/assets/images/logged-user.svg') }}" class = "icon">
                                            <span class = "text-xs text-color">{{ $user->phone ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class = "popup-list-group py-1 border-bottom">
                                    <a href = "{{ route('vendor.myAccount')}}" class = "popup-list-item d-flex align-items-center">
                                        <span class = "icon d-block">
                                        <img src = "{{ asset('frontendfiles/assets/images/user.svg') }}">
                                        </span>
                                        <span class = "text-sm text-color">My Account</span>
                                    </a>
                                    <a href = "{{ route('vendor.myBooking')}}" class = "popup-list-item d-flex align-items-center">
                                        <span class = "icon d-block">
                                        <img src = "{{ asset('frontendfiles/assets/images/shop.svg') }}">
                                        </span>
                                        <span class = "text-sm text-color">My Bookings</span>
                                    </a>
                                </div>
                                <div class = "popup-list-group py-1 ">
                                    <a href = "{{ route('vendor.rules') }}" class = "popup-list-item d-flex align-items-center">
                                        <span class = "icon d-block">
                                        <img src = "{{ asset('frontendfiles/assets/images/info-circle.svg') }}">
                                        </span>
                                        <span class = "text-sm text-color">Rules</span>
                                    </a>
                                    <a href = "{{ route('vendor.gallery')}}" class = "popup-list-item d-flex align-items-center">
                                        <span class = "icon d-block">
                                        <img src = "{{ asset('frontendfiles/assets/images/gallery.svg') }}">
                                        </span>
                                        <span class = "text-sm text-color">Gallery</span>
                                    </a>
                                    <a href = "{{ route('vendor.about')}}" class = "popup-list-item d-flex align-items-center">
                                        <span class = "icon d-block">
                                        <img src = "{{ asset('frontendfiles/assets/images/question-mark.svg') }}">
                                        </span>
                                        <span class = "text-sm text-color">About</span>
                                    </a>

                                    <a href = "{{ route('vendor.logout')}}" class = "popup-list-item d-flex align-items-center">
                                        <span class = "icon d-block">
                                        <img src = "{{ asset('frontendfiles/assets/images/question-mark.svg') }}">
                                        </span>
                                        <span class = "text-sm text-color">Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of profile -->
                </div>
                @else
                <div class = "page-navbar-btns d-flex">
                    <!-- <button type = "button" class = "navbar-btn btn-white btn-sm">
                        <span class = "btn-text">SignUp</span>
                    </button> -->
                    @if(Route::is('vendor.login'))
                        <a href="{{ route('vendor.register') }}" class = "navbar-btn btn-primary btn-sm ms-2 d-flex align-items-center justify-content-center">
                            <span class = "text-white">Sign Up</span>
                        </a>
                    @else
                        <a href="{{ route('vendor.login') }}" class = "navbar-btn btn-primary btn-sm ms-2 d-flex align-items-center justify-content-center">
                            <span class = "text-white">Sign In</span>
                        </a>
                    @endif

                </div>
                @endauth


            </div>
        </div>
    </nav>
</header>
