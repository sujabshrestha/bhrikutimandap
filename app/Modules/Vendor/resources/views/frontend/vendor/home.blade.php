@extends('layouts.vendor.master')

@section('title', 'Home')

@section('breadcrumb', 'Home')
@push('styles')
    <link href="{{ asset('backendfiles/plugins/file-upload/file-upload-with-preview.min.css') }} " rel="stylesheet"
        type="text/css" />
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <main class = "page-index">
        <div class = "container">
            <section class = "sc-booking-selection px-3">
                <form id="submit-form" action="{{ route('vendor.bookingFilter') }}">
                    <div class = "booking-selection-content d-lg-flex justify-content-lg-center">
                        <div class = "booking-selection-item d-flex align-items-center">
                            <div class = "input-group">
                                <div class = "input-group-text">
                                    <img src = "{{ asset('frontendFiles/assets/images/icons/calendar-search.svg')}}">
                                </div>
                                <input type = "text" class = "form-control check-in-datepicker" placeholder="Check-In" name = "from_date">
                            </div>
                        </div>

                        <div class = "booking-selection-item d-flex align-items-center">
                            <div class = "input-group">
                                <div class = "input-group-text">
                                    <img src = "{{ asset('frontendFiles/assets/images/icons/calendar-search.svg')}}">
                                </div>
                                <input type = "text" class = "form-control check-out-datepicker" placeholder="Check-Out" name = "to_date">
                            </div>
                        </div>

                        
                        <div class = "booking-selection-item">
                            <button type = "submit" class = "btn btn-charcoal text-capitalize book-now-btn"><span class = "btn-text">Filter</span></button>
                        </div>
                    </div>
                </form>
            </section>

            <section class = "sc-avail px-3 overflow-hidden">
                <div class = "sc-avail-content mb-5">
                    <div class = "sc-title">
                        <h3>Availability list</h3>
                    </div>
                    <div class = "avail-data">
                        <table class = "table">
                            <thead>
                                <tr>
                                    <th class = "avail-text-lg">Check</th>
                                    <th class = "text-start avail-text-lg">Venue</th>
                                    <th class = "avail-text-lg">Time</th>
                                    <th class = "avail-text-lg">Status</th>
                                    <th class = "avail-text-lg">Cost</th>
                                    <th class = "avail-text-lg">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{ route('vendor.bookingStore')}}" method="POST">
                                    @csrf
                                    @include('Vendor::frontend.vendor.appendVenueList')
                                <form>
                            </tbody>
                        </table>
                    </div>
                    <div class = "d-flex justify-content-end mt-4">
                        <button type="submit" class = "btn btn-green"><span class = "btn-text">Book Now</span></button>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <!--  END CONTENT AREA  -->
@endsection

@push('scripts')


@endpush
