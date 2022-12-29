@extends('layouts.vendor.master')

@section('title', 'My Bookings')

@section('breadcrumb', 'My Bookings')
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
                          <button class="nav-link active d-flex align-items-center" id="bookings-tab" data-bs-toggle="tab" data-bs-target="#bookings" type="button" role="tab" aria-controls="bookings" aria-selected="false">
                            <span class = "tab-icon">
                                <img src = "{{ asset('frontendfiles/assets/images/shop.svg') }}" alt = 'icon'>
                            </span>
                            <span class = "text-sm text-jet">My Bookings</span>
                        </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="bookingTabContent">
                       

                        <!-- MY BOOKINGS -->
                        <div class="tab-pane fade show active" id="bookings" role="tabpanel" aria-labelledby="bookings-tab">
                            <div class = "tab-pane-content mb-5">
                                <h3 class="text-lg mb-4">Current Bookings</h3>
                                <div class="bookings-list row">
                                    @if (isset($bookings) && count($bookings) > 0 )
                                        @foreach ($bookings as $booking)
                                        <div class="col-md-6 col-xl-4 mb-4">
                                            <div class="bookings-item px-0 h-100">
                                                <div class="bookings-item-top d-flex flex-column">
                                                    <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center">
                                                        <img src = "{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt = "" class = "icon">
                                                        @if ($booking->payment_status == 'Pending')
                                                            <span class="text-sm text-white">Payment Pending</span>
                                                        @elseif($booking->payment_status == 'Approved')
                                                            <span class="text-sm text-primary">Confirmed</span>
                                                        @endif
                                                    </div>
                                                    {{-- @dd($booking->venues) --}}
                                                    @if ($booking->venues->count() > 0)
                                                        <p class="bookings-item-title text">
                                                            @foreach ($booking->venues as $venue )
                                                                @if(!($loop->last))
                                                                    {{ $venue->title }},
                                                                @endif

                                                                @if($loop->last)
                                                                    and {{ $venue->title }}
                                                                @endif
                                                            @endforeach
                                                        </p>
                                                    @endif
                                                    <div class="bookings-item-time text-royal-blue text">{{ $booking->from_date->format('Y/m/d') }} - {{ $booking->from_date->format('Y/m/d') }}</div>
                                                    <div class="info-item d-flex align-items-center">
                                                        <span class = "text">Application:</span>
                                                        @if ($booking->status == 'Pending')
                                                            <div class="d-flex align-items-center pending my-1">
                                                                <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon">
                                                                <span class="fs-xx-sm  text-warning">Pending</span>
                                                            </div>
                                                        @elseif($booking->status == 'Approved')
                                                            <div class="d-flex align-items-center approved my-1">
                                                                <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                <span class="fs-xx-sm  text-primary">Approved</span>
                                                            </div>
                                                         @endif
                                                    </div>
                                                    <div class="info-item d-flex align-items-center">
                                                        <span class = "text">Payment:</span>
                                                        @if ($booking->payment_status == 'Pending')
                                                            <div class="d-flex align-items-center pending my-1">
                                                                <img src = "{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt = "" class = "icon">
                                                                <span class="fs-xx-sm  text-warning">Pending</span>
                                                            </div>
                                                        @elseif($booking->payment_status == 'Approved')
                                                            <div class="d-flex align-items-center approved my-1">
                                                                <img src = "{{asset('frontendfiles/assets/images/check.svg')}}" alt = "" class = "icon">
                                                                <span class="fs-xx-sm  text-primary">Approved</span>
                                                            </div>
                                                        @endif
                                                       
                                                    </div>
                                                </div>
                                                <div class = "bookings-item-bottom d-flex">
                                                    <a href = "#" class = "bookings-item-btn btn-cancel d-flex align-items-center justify-content-center">
                                                        <img src = "{{ asset('frontendfiles/assets/images/cancel.svg') }}" alt = "" class = "icon">
                                                        <span class = "text-white text-sm">Cancel Booking</span>
                                                    </a>
                                                    <a type="button" class = "bookings-item-btn btn-details d-flex align-items-center justify-content-center bookingDetails"
                                                        data-id =" {{ $booking->id }}">
                                                        <span class = "text-white text-sm">Check Details</span>
                                                        <img src = "{{ asset('frontendfiles/assets/images/arrow-right.svg')}}" alt = "" class = "icon">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                              
                                </div>
                            </div>
                            {{-- <div class="modal fade globalModal" id="globalModal" tabindex="-1" role="dialog" aria-hidden="true">

                            </div> --}}
                            <div class="modal fade bookingDetailsModal" id="bookingDetailsModal" tabindex="-1" aria-labelledby="bookingDetailsModal" aria-hidden="true">
                            
                            </div>

                            {{-- <div class = "tab-pane-content mb-5">
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
                            </div> --}}
                        </div>
                        <!-- END OF MY BOOKINGS -->
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection

@push('scripts')

<script>
    $(document).on('click','.bookingDetails',function($e){
        $e.preventDefault();
        var id = $(this).data('id');
        var route = "{{ route('vendor.myBookingDetails',':id')}}";
        route = route.replace(':id',id);
        $.ajax({
            type: 'GET',
            url: route,
            beforeSend: function(data) {
                loader();
            },
            success: function(data) {
                $(".bookingDetailsModal").html(data.data.view);
                $(".bookingDetailsModal").modal('show');
                $.unblockUI();
            },
            error: function(err) {
                alert('Something Went Wrong.');
                currentevent.attr('disabled', false);
            },
            complete: function() {
                $.unblockUI();
            }
        });

    })
</script>
    
@endpush