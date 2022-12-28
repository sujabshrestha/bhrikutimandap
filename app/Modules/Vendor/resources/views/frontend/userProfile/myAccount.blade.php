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
                            <img src = "{{ asset('frontendfiles/assets/images/user.svg')}}" alt = 'user icon'>
                        </span>
                        <span class = "text-sm text-jet">My Account</span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link d-flex align-items-center" id="bookings-tab" data-bs-toggle="tab" data-bs-target="#bookings" type="button" role="tab" aria-controls="bookings" aria-selected="false">
                        <span class = "tab-icon">
                            <img src = "{{ asset('frontendfiles/assets/images/shop.svg')}}" alt = 'shop icon'>
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
                                            <img src = "{{ asset('frontendfiles/assets/images/profile-image.png')}}" alt = "" class = "img-cover" id = "profile-img-view">
                                            <button type = "button" class = "profile-img-btn d-flex align-items-center bg-white">
                                                <img src = "{{ asset('frontendfiles/assets/images/gallery-export.svg')}}" alt = 'icon' class="icon">
                                                <span class = "text-sm ms-1">Change Picture</span>
                                            </button>
                                            <input type = "file" class = "" accept = "image/*" id = "profile-img-input">
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
                                        <form class = "profile-form">
                                            <div class = "form-block mb-4">
                                                <h3 class = "text-lg form-block-title">Personal Profile:</h3>
                                                <div class = "row form-elem-row">
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Name</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Email</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                </div>

                                                <div class = "row form-elem-row">
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Phone No.</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Address</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for = "" class = "form-label">Description</label>
                                                    <textarea rows = "5" class = "form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class = "form-block">
                                                <h3 class = "text-lg form-block-title">Organization Profile:</h3>
                                                <div class = "row form-elem-row">
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Organization Name</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Organization Phone No.</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                </div>

                                                <div class = "row form-elem-row">
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Organization Email</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Organization website</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                </div>

                                                <div class = "row form-elem-row">
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Organization Address</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                    <div class = "col-xl-6">
                                                        <label for = "" class = "form-label">Organization PAN No.</label>
                                                        <input type = "text" class = "form-control"> 
                                                    </div>
                                                </div>

                                                <div class = "mt-2 d-flex justify-content-end">
                                                    <button type = "submit" class = "btn btn-primary submit-btn">
                                                        <span class = "btn-text">Update Profile</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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
                                                <img src = "{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt = 'icon'  class = "icon">
                                                <span class="text-sm text-white">Payment Pending</span>
                                            </div>
                                            <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                            <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Application:</span>
                                                <div class="d-flex align-items-center approved my-1">
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = 'icon'  class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Payment:</span>
                                                <div class = "d-flex align-items-center pending">
                                                    <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = 'icon'  class = "icon">
                                                    <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                            
                                                <img src = "{{ asset('frontendfiles/assets/images/cancel.svg')}}" alt = 'icon'  class = "icon">

                                                <span class = "text-white text-sm">Cancel Booking</span>
                                            </a>
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#bookingDetailsModal">
                                                <span class = "text-white text-sm">Check Details</span>
                                             <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = 'icon'  class = "icon">
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
                                                <img src = "{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt = 'icon'  class = "icon">

                                                <span class="text-sm text-white">Payment Pending</span>
                                            </div>
                                            <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                            <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Application:</span>
                                                <div class="d-flex align-items-center approved my-1">
                                                 <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = 'icon'  class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Payment:</span>
                                                <div class = "d-flex align-items-center pending">
                                                 <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = 'icon'  class = "icon">
                                                    <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                <img src = "{{ asset('frontendfiles/assets/images/cancel.svg')}}" alt = ' icon'  class = "icon">

                                                <span class = "text-white text-sm">Cancel Booking</span>
                                            </a>
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                <span class = "text-white text-sm">Check Details</span>
                                                <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = ' icon'  class = "icon">
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
                                               
                                                 <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = 'icon' class = "icon">

                                                <span class="text-sm text-primary">Confirmed</span>
                                            </div>
                                            <p class="bookings-item-title text">Large Exbition Hall & area around it</p>
                                            <div class="bookings-item-time text-royal-blue text">2080/10/14</div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Application:</span>
                                                <div class="d-flex align-items-center approved my-1">
                                                <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = 'icon'  class = "icon">

                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Payment:</span>
                                                <div class = "d-flex align-items-center approved">
                                                <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = 'shop icon'  class = "icon">

                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                <img src = "{{ asset('frontendfiles/assets/images/cancel.svg')}}" alt = "" class = "icon">
                                                <span class = "text-white text-sm">Cancel Booking</span>
                                            </a>
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                <span class = "text-white text-sm">Check Details</span>
                                                <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg') }}" alt = "" class = "icon">
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
                                                <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                <span class="text-sm text-primary">Confirmed</span>
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
                                                <div class = "d-flex align-items-center approved">
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                <img src = "{{ asset('frontendfiles/assets/images/cancel.svg')}}" alt = "" class = "icon">
                                                <span class = "text-white text-sm">Cancel Booking</span>
                                            </a>
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                <span class = "text-white text-sm">Check Details</span>
                                                <img src = "assets/images/arrow-right.svg" alt = "" class = "icon">
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
                                                <img src = "assets/images/hourglass.svg" alt = "" class = "icon">
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
                                                    <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                <img src = "{{ asset('frontendfiles/assets/images/cancel.svg')}}" alt = "" class = "icon">
                                                <span class = "text-white text-sm">Cancel Booking</span>
                                            </a>
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center">
                                                <span class = "text-white text-sm">Check Details</span>
                                                <img src = "assets/images/arrow-right.svg" alt = "" class = "icon">
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
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Payment:</span>
                                                <div class = "d-flex align-items-center approved">
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                <span class = "text-white text-sm">Check Details</span>
                                                <img src = "assets/images/arrow-right.svg" alt = "" class = "icon">
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
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Payment:</span>
                                                <div class = "d-flex align-items-center approved">
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                <span class = "text-white text-sm">Check Details</span>
                                                <img src = "assets/images/arrow-right.svg" alt = "" class = "icon">
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
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                            <div class="info-item d-flex align-items-center">
                                                <span class = "text">Payment:</span>
                                                <div class = "d-flex align-items-center approved">
                                                    <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                    <span class = "fs-xx-sm text-primary">Approved</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "bookings-item-bottom d-flex">
                                            <a href = "#" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center w-100">
                                                <span class = "text-white text-sm">Check Details</span>
                                                <img src = "assets/images/arrow-right.svg" alt = "" class = "icon">
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

    <!-- Modal -->
    <div class="modal fade" id="bookingDetailsModal" tabindex="-1" aria-labelledby="bookingDetailsModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content overflow-hidden">
                <div class = "booking-modal-header">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="booking-modal-top px-3 d-flex flex-column justify-content-center text-center">
                        <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center mb-0">
                            <img src = "assets/images/hourglass.svg" alt = "" class = "icon">
                            <span class="text-sm text-white">Payment Pending</span>
                        </div>
                        <div class="booking-modal-title sc-title">
                            <h3 class = "ls-def">Large Exbition Hall & area around it</h3>
                        </div>
                        <div class="booking-modal-date text-sm">2080/ 10 / 13</div>
                    </div>

                    <div class = "booking-modal-body px-3">
                        <div class = "row mx-2 mx-lg-auto">
                            <div class = "col-xl-3 booking-modal-body-l text-center mt-3">Documents</div>
                            <div class = "col-xl-9 booking-modal-body-r w-auto mx-auto mt-3 ms-xl-0">
                                <div class = "booking-details-wrapper">
                                    <!-- details block -->
                                    <div class = "details-block row">
                                        <div class = "col-lg-4">
                                            <p class = "text mb-0">Application:</p>
                                            <div class="d-flex align-items-center approved my-2">
                                                <img src = "{{ asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon ms-0">
                                                <span class = "fs-xx-sm text-primary">Approved</span>
                                            </div>
                                        </div>
                                        <div class = "col-lg-8">
                                            <div class = 'booking-list-group mt-2 mt-lg-0'>
                                                <div class="list-group-item mb-3">
                                                    <div class = "list-item-l text-sm">
                                                        <img src = "{{ asset('frontendfiles/assets/images/message.svg') }}" alt = "" class = "list-item-icon">
                                                        <span class = "text-xs">सेवा सम्बन्धि गुनासो सुन्ने जिम्मेवार अधिकारी</span>
                                                    </div>
                                                    <span class = "list-item-r text-xs">ववडा अध्यक्ष / वडा सचिव</span>
                                                </div>

                                                <div class="list-group-item mb-3">
                                                    <div class = "list-item-l text-sm">
                                                        <img src = "{{ asset('frontendfiles/assets/images/process.svg') }}" alt = "" class = "list-item-icon">
                                                        <span class = "text-xs">सेवा सम्बन्धि गुनासो सुन्ने प्रक्रिया</span>
                                                    </div>
                                                    <span class = "list-item-r text-xs"></span>
                                                </div>

                                                <div class="list-group-item">
                                                    <div class = "list-item-l text-sm">
                                                        <img src = "{{ asset('frontendfiles/assets/images/event.svg')}}" alt = "" class = "list-item-icon">
                                                        <span class = "text-xs">सम्बन्धित सेवा प्राप्त गर्न भर्नु पर्ने फारम</span>
                                                    </div>
                                                    <span class = "list-item-r text-xs"></span>
                                                </div>
                                            </div>
                                            <div class = "booking-modal-btns mt-3 d-sm-flex">
                                                <button type = "button" class = "modal-upload-btn d-flex align-items-center my-1">
                                                    <img src = "{{ asset('frontendfiles/assets/images/document-upload.svg')}}" alt = "" class = "icon">
                                                    <span class = "text-sm text-white ls-def">Upload New</span>
                                                </button>
                                                <button type = "button" class = "modal-download-btn d-flex align-items-center my-1">
                                                    <img src = "{{ asset('frontendfiles/assets/images/document-download.svg') }}" alt = "" class = "icon">
                                                    <span class = "text-sm text-white ls-def">Download</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of details block -->
                                    <div class = "horz-line my-3"></div>
                                    <!-- details block -->
                                    <div class = "details-block row">
                                        <div class = "col-lg-4">
                                            <p class = "text mb-0">Payment: :</p>
                                            <div class="d-flex align-items-center approved my-2">
                                                <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon ms-0">
                                                <span class = "fs-xx-sm text-tangerine">Payment Pending</span>
                                            </div>
                                        </div>
                                        <div class = "col-lg-8">
                                            <div class = 'booking-list-group mt-2 mt-lg-0'>
                                                <div class="list-group-item mb-3">
                                                    <div class = "list-item-l text-sm">
                                                        <img src = "{{ asset('frontendfiles/assets/images/message.svg') }}" alt = "" class = "list-item-icon">
                                                        <span class = "text-xs">सेवा सम्बन्धि गुनासो सुन्ने जिम्मेवार अधिकारी</span>
                                                    </div>
                                                    <span class = "list-item-r text-xs">ववडा अध्यक्ष / वडा सचिव</span>
                                                </div>

                                                <div class="list-group-item mb-3">
                                                    <div class = "list-item-l text-sm">
                                                        <img src = "{{ asset('frontendfiles/assets/images/process.svg') }}" alt = "" class = "list-item-icon">
                                                        <span class = "text-xs">सेवा सम्बन्धि गुनासो सुन्ने प्रक्रिया</span>
                                                    </div>
                                                    <span class = "list-item-r text-xs"></span>
                                                </div>

                                                <div class="list-group-item">
                                                    <div class = "list-item-l text-sm">
                                                        <img src = "{{ asset('frontendfiles/assets/images/event.svg')}}" alt = "" class = "list-item-icon">
                                                        <span class = "text-xs">सम्बन्धित सेवा प्राप्त गर्न भर्नु पर्ने फारम</span>
                                                    </div>
                                                    <span class = "list-item-r text-xs"></span>
                                                </div>
                                            </div>
                                            <div class = "booking-modal-btns mt-3 d-sm-flex">
                                                <button type = "button" class = "modal-upload-btn d-flex align-items-center my-1">
                                                    <img src = "{{ asset('frontendfiles/assets/images/document-upload.svg')}}" alt = "" class = "icon">
                                                    <span class = "text-sm text-white ls-def">Upload New</span>
                                                </button>
                                                <button type = "button" class = "modal-download-btn d-flex align-items-center my-1">
                                                    <img src = "{{ asset('frontendfiles/assets/images/document-download.svg') }}" alt = "" class = "icon">
                                                    <span class = "text-sm text-white ls-def">Download</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of details block -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "booking-modal-bottom mt-4">
                        <div class = "btns-list d-flex">
                            <button type = "button" class = "btns-list-item bottom-cancel-btn">
                                <span class = "text-sm text-white ls-def">Cancel Booking</span>
                                <img src = "{{ asset('frontendfiles/assets/images/cancel.svg')}}" alt = "" class = "icon">
                            </button>

                            <a href = "#" class = "btns-list-item bottom-postpone-btn">
                                <span class = "text-sm text-white ls-def">Postpone event</span>
                                <img src = "{{ asset('frontendfiles/assets/images/calendar-edit.svg')}}" alt = "" class = "icon">
                            </a>

                            <a href = "#" class = "btns-list-item bottom-update-btn">
                                <span class = "text-sm text-white ls-def">Request update</span>
                                <img src = "{{ asset('frontendfiles/assets/images/info-circle-2.svg')}}" alt = "" class = "icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection