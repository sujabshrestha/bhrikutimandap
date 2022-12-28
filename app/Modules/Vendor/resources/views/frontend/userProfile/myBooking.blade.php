@extends('layouts.vendor.master')

@section('title', 'My Account')

@section('breadcrumb', 'My Account')
@push('styles')

@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <main class = "page-bookings pb-5">
        <div class = "container">
            <section class = "sc-bookings px-3">
                <div class="boookings-content">
                    <ul class="nav nav-tabs" id="bookingTab" role="tablist">
                        <li class="nav-item nav-item-active" role="presentation">
                          <button class="nav-link active d-flex align-items-center" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="true">
                            <span class = "tab-icon">
                                <img src = "{{ asset('frontendfiles/assets/images/user.svg')}}" alt = 'shop icon'>
                            </span>
                            <span class = "text-sm text-jet">My Account</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link d-flex align-items-center" id="bookings-tab" data-bs-toggle="tab" data-bs-target="#bookings" type="button" role="tab" aria-controls="bookings" aria-selected="false">
                            <span class = "tab-icon">
                                <img src = "{{ asset('frontendfiles/assets/images/shop.svg') }}" alt = 'icon'>
                            </span>
                            <span class = "text-sm text-jet">My Bookings</span>
                        </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="bookingTabContent">
                        <!-- MY ACCOUNT -->
                        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <div class = "tab-pane-content">
                                <div class = "row content-row">
                                    <!-- left column -->
                                    <div class="col-lg-5 content-col-l">
                                        <div class = "acc-intro">
                                            <div class = "acc-intro-img">
                                                <img src = "{{ asset('frontendfiles/assets/images/profile-image.png')}}" alt = "" class = "img-cover">
                                                <a href = "{{ route('vendor.myAccount')}}" class = "acc-edit-btn d-flex align-items-center bg-white">
                                                    <img src = "{{ asset('frontendfiles/assets/images/user-edit.svg')}}" class = "icon">
                                                    <span class = "text-sm ms-1">Edit Profile</span>
                                                </a>
                                            </div>

                                            <div class="acc-intro-block border-bottom">
                                                <p class = "text">Sujab Shrestha</p>
                                                <ul>
                                                    <li class = "text-sm my-2">Sujabshrestha12@gmail.com</li>
                                                    <li class = "text-sm my-2">+977-9842184939</li>
                                                </ul>
                                            </div>

                                            <div class="acc-intro-block">
                                                <p class = "text-silver mb-2 text-sm">Organization: </p>
                                                <p class = "text mb-1">Samaj Kalyan Parisad</p>
                                                <ul>
                                                    <li class = "text-sm my-2">01-5364732, 9842184939</li>
                                                    <li class = "text-sm my-2">Samajkalyan@gmail.com</li>
                                                    <li class = "text-sm my-2">Samajkalyanparisad.com.np</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class = "acc-info">
                                            <h4 class = "text mb-3">Information:</h4>
                                            <p class = "text-sm">Lorem ipsum dolor sit amet consectetur. Vitae tristique aliquet tempus in aliquet id. Risus lacus at magna congue vulputate. Arcu egestas sed placerat odio nullam consectetur scelerisque tellus. Libero risus volutpat vel est aliquam. Purus vestibulum in urna nunc. Sagittis interdum faucibus ut mattis facilisi facilisis nec odio. Tincidunt malesuada odio integer fermentum eu nunc ac molestie. Mattis egestas nibh etiam pellentesque egestas id. Commodo blandit proin viverra sociis maecenas ullamcorper aliquam. Posuere diam auctor sit purus congue quam enim aliquet. Arcu pulvinar nec at nisl eu tellus a donec.</p>
                                        </div>
                                    </div>
                                    <!-- end of left column -->

                                    <!-- right column -->
                                    <div class = "col-lg-7 content-col-r mt-5 mt-lg-0">
                                        <div class = "mb-5">
                                            <div class = "d-flex align-items-center justify-content-between">
                                                <h3 class="text-lg mb-4">Current Bookings</h3>
                                                <a href = "#" class = "text-sm">
                                                    <span class = "text-primary me-1">Show All</span>
                                                    <i class = "fas fa-chevron-right text-primary"></i>
                                                </a>
                                            </div>
                                            <div class="bookings-list row">
                                                <!-- bookings item  -->
                                                <div class = "col-md-6 mb-4">
                                                    <div class="bookings-item px-0 h-100">
                                                        <div class="bookings-item-top d-flex flex-column">
                                                            <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center">
                                                                <img src = "{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt = "" class = "icon">
                                                                <span class="text-sm text-white">Payment Pending</span>
                                                            </div>
                                                            <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                            <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Application:</span>
                                                                <div class="d-flex align-items-center approved my-1">
                                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                                </div>
                                                            </div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Payment:</span>
                                                                <div class = "d-flex align-items-center pending">

                                                                    <img src = "{{  asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = "bookings-item-bottom d-flex">
                                                            <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                                <img src = "{{  asset('frontendfiles/assets/images/cancel.svg')}}" alt = "" class = "icon">
                                                                <span class = "text-white text-sm">Cancel Booking</span>
                                                            </a>
                                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                                <span class = "text-white text-sm">Check Details</span>
                                                                <img src = "{{  asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end of bookings item -->
                                                <!-- bookings item  -->
                                                <div class = "col-md-6 mb-4">
                                                    <div class="bookings-item px-0 h-100">
                                                        <div class="bookings-item-top d-flex flex-column">
                                                            <div class=" bookings-item-badge-confirmed d-inline-flex align-items-center justify-content-center align-self-center">
                                                                <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                <span class="text-sm text-primary">Confirmed</span>
                                                            </div>
                                                            <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                            <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Application:</span>
                                                                <div class="d-flex align-items-center approved my-1">
                                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                                </div>
                                                            </div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Payment:</span>
                                                                <div class = "d-flex align-items-center pending">
                                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = "bookings-item-bottom d-flex">
                                                            <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                                <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "" class = "icon">
                                                                <span class = "text-white text-sm">Cancel Booking</span>
                                                            </a>
                                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                                <span class = "text-white text-sm">Check Details</span>
                                                                <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end of bookings item -->
                                            </div>
                                        </div>
    
                                        <div class = "tab-pane-content mb-5">
                                            <div class = "d-flex align-items-center justify-content-between">
                                                <h3 class="text-lg mb-4">Past Bookings</h3>
                                                <a href = "#" class = "text-sm">
                                                    <span class = "text-primary me-1">Show All</span>
                                                    <i class = "fas fa-chevron-right text-primary"></i>
                                                </a>
                                            </div>
                                            <div class="bookings-list row">
                                                <!-- bookings item  -->
                                                <div class="col-md-6 mb-4">
                                                    <div class="bookings-item past-bookings-item px-0 h-100">
                                                        <div class="bookings-item-top d-flex flex-column">
                                                            <div class=" bookings-item-badge-completed d-inline-flex align-items-center justify-content-center align-self-center">
                                                                <img src = "assets/images/clock-check.svg" alt = "" class = "icon">
                                                                <span class="text-sm text-white">Completed 1 year ago</span>
                                                            </div>
                                                            <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                            <div class="bookings-item-time text-royal-blue text">2079/ 10 / 14</div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Application:</span>
                                                                <div class="d-flex align-items-center approved my-1">
                                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                                </div>
                                                            </div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Payment:</span>
                                                                <div class = "d-flex align-items-center approved">
                                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = "bookings-item-bottom d-flex">
                                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                                <span class = "text-white text-sm">Check Details</span>
                                                                <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- end of bookings item -->
                                                <!-- bookings item  -->
                                                <div class = "col-md-6 mb-4">
                                                    <div class="bookings-item past-bookings-item px-0 h-100">
                                                        <div class="bookings-item-top d-flex flex-column">
                                                            <div class=" bookings-item-badge-completed d-inline-flex align-items-center justify-content-center align-self-center">
                                                                <img src = "assets/images/clock-check.svg" alt = "" class = "icon">
                                                                <span class="text-sm text-white">Completed 1 year ago</span>
                                                            </div>
                                                            <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                            <div class="bookings-item-time text-royal-blue text">2079/ 10 / 14</div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Application:</span>
                                                                <div class="d-flex align-items-center approved my-1">
                                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                                </div>
                                                            </div>
                                                            <div class="info-item d-flex align-items-center">
                                                                <span class = "text">Payment:</span>
                                                                <div class = "d-flex align-items-center approved">
                                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = "bookings-item-bottom d-flex">
                                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                                <span class = "text-white text-sm">Check Details</span>
                                                                <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end of bookings item -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of right column -->
                                </div>
                            </div>
                        </div>
                        <!-- END OF MY ACCOUNT -->

                        <!-- MY BOOKINGS -->
                        <div class="tab-pane fade" id="bookings" role="tabpanel" aria-labelledby="bookings-tab">
                            <div class = "tab-pane-content mb-5">
                                <h3 class="text-lg mb-4">Current Bookings</h3>
                                <div class="bookings-list row">
                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt = "" class = "icon">
                                                    <span class="text-sm text-white">Payment Pending</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center pending">
                                                        <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "" class = "icon">
                                                    <span class = "text-white text-sm">Cancel Booking</span>
                                                </a>
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->

                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt = "" class = "icon">
                                                    <span class="text-sm text-white">Payment Pending</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center pending">
                                                        <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "" class = "icon">
                                                    <span class = "text-white text-sm">Cancel Booking</span>
                                                </a>
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->

                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-confirmed d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class="text-sm text-primary">Confirmed</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center pending">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "" class = "icon">
                                                    <span class = "text-white text-sm">Cancel Booking</span>
                                                </a>
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->

                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-confirmed d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class="text-sm text-primary">Confirmed</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center approved">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "" class = "icon">
                                                    <span class = "text-white text-sm">Cancel Booking</span>
                                                </a>
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->

                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt = "" class = "icon">
                                                    <span class="text-sm text-white">Payment Pending</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center pending">
                                                        <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                    <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "" class = "icon">
                                                    <span class = "text-white text-sm">Cancel Booking</span>
                                                </a>
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->
                                </div>
                            </div>

                            <div class = "tab-pane-content mb-5">
                                <div class = "">
                                    <h3 class="text-lg mb-4">Past Bookings</h3>
                                </div>
                                <div class="bookings-list row">
                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item past-bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-completed d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "assets/images/clock-check.svg" alt = "" class = "icon">
                                                    <span class="text-sm text-white">Completed 1 year ago</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2079/ 10 / 14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center approved">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->

                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item past-bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-completed d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "assets/images/clock-check.svg" alt = "" class = "icon">
                                                    <span class="text-sm text-white">Completed 1 year ago</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2079/ 10 / 14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center approved">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->

                                    <!-- bookings item  -->
                                    <div class="col-md-6 col-xl-4 mb-4">
                                        <div class="bookings-item past-bookings-item px-0 h-100">
                                            <div class="bookings-item-top d-flex flex-column">
                                                <div class=" bookings-item-badge-completed d-inline-flex align-items-center justify-content-center align-self-center">
                                                    <img src = "assets/images/clock-check.svg" alt = "" class = "icon">
                                                    <span class="text-sm text-white">Completed 1 year ago</span>
                                                </div>
                                                <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                                <div class="bookings-item-time text-royal-blue text">2079/ 10 / 14</div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Application:</span>
                                                    <div class="d-flex align-items-center approved my-1">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                                <div class="info-item d-flex align-items-center">
                                                    <span class = "text">Payment:</span>
                                                    <div class = "d-flex align-items-center approved">
                                                        <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                        <span class = "fs-xx-sm text-primary">Approved</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "bookings-item-bottom d-flex">
                                                <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                    <span class = "text-white text-sm">Check Details</span>
                                                    <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of bookings item -->
                                </div>
                            </div>
                        </div>
                        <!-- END OF MY BOOKINGS -->
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection