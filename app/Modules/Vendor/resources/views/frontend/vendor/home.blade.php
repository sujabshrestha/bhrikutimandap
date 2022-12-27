@extends('layouts.vendor.master')

@section('title', 'Venue Index')

@section('breadcrumb', 'Venue Index')
@push('styles')
    <link href="{{ asset('backendfiles/plugins/file-upload/file-upload-with-preview.min.css') }} " rel="stylesheet"
        type="text/css" />
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <main class = "page-index">
        <div class = "container">
            <section class = "sc-booking-selection px-3">
                <form>
                    <div class = "booking-selection-content d-lg-flex justify-content-lg-center">
                        <div class = "booking-selection-item d-flex align-items-center">
                            <div class = "input-group">
                                <div class = "input-group-text">
                                    <img src = "{{ asset('frontendFiles/assets/images/icons/calendar-search.svg')}}">
                                </div>
                                <input type = "text" class = "form-control check-in-datepicker" placeholder="Check-In" name = "">
                            </div>
                        </div>

                        <div class = "booking-selection-item d-flex align-items-center">
                            <div class = "input-group">
                                <div class = "input-group-text">
                                    <img src = "{{ asset('frontendFiles/assets/images/icons/calendar-search.svg')}}">
                                </div>
                                <input type = "text" class = "form-control check-out-datepicker" placeholder="Check-Out" name = "">
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
                                <!-- booking available -->
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center p-0 m-0">
                                            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td class = "text-start">
                                        <span class = "avail-text-lg text-color">Large Exbition Hall & area around it</span>
                                    </td>
                                    <td>
                                        <div class = "d-flex flex-column">
                                            <span class = "text-green avail-text">Available</span>
                                            <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "status-pills status-pills-green">
                                            <div class = "pills-dot"></div>
                                            <span class = "pills-text">Available</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class = "avail-text-lg text-color">Rs. 2,50,000 per day</span>
                                    </td>
                                    <td>
                                        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
                                    </td>
                                </tr>
                                <!-- end of booking available -->

                                <!-- booking not available -->
                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center p-0 m-0">
                                            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td class = "text-start">
                                        <span class = "avail-text-lg text-color">Large Ground</span>
                                    </td>
                                    <td>
                                        <div class = "d-flex flex-column">
                                            <span class = "text-red avail-text">Not Available</span>
                                            <span class = "text-color avail-text mt-2">Before 30 Jan</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "status-pills status-pills-red">
                                            <div class = "pills-dot"></div>
                                            <span class = "pills-text">Booked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class = "avail-text-lg text-color">Rs. 75,000 per day</span>
                                    </td>
                                    <td>
                                        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
                                    </td>
                                </tr>
                                <!-- end of booking not available -->

                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center p-0 m-0">
                                            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td class = "text-start">
                                        <span class = "avail-text-lg text-color">Garden</span>
                                    </td>
                                    <td>
                                        <div class = "d-flex flex-column">
                                            <span class = "text-green avail-text">Available</span>
                                            <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "status-pills status-pills-green">
                                            <div class = "pills-dot"></div>
                                            <span class = "pills-text">Available</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class = "avail-text-lg text-color">Rs. 75,000 per day</span>
                                    </td>
                                    <td>
                                        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center p-0 m-0">
                                            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td class = "text-start">
                                        <span class = "avail-text-lg text-color">Ground adjacent to Main gate</span>
                                    </td>
                                    <td>
                                        <div class = "d-flex flex-column">
                                            <span class = "text-green avail-text">Available</span>
                                            <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "status-pills status-pills-green">
                                            <div class = "pills-dot"></div>
                                            <span class = "pills-text">Available</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class = "avail-text-lg text-color">Rs. 30,000 per day</span>
                                    </td>
                                    <td>
                                        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center p-0 m-0">
                                            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td class = "text-start">
                                        <span class = "avail-text-lg text-color">Ground behind exibition hall</span>
                                    </td>
                                    <td>
                                        <div class = "d-flex flex-column">
                                            <span class = "text-red avail-text">Not Available</span>
                                            <span class = "text-color avail-text mt-2">Before 30 Jan</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "status-pills status-pills-red">
                                            <div class = "pills-dot"></div>
                                            <span class = "pills-text">Booked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class = "avail-text-lg text-color">Rs. 12,500 per day</span>
                                    </td>
                                    <td>
                                        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check d-flex align-items-center p-0 m-0">
                                            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td class = "text-start">
                                        <span class = "avail-text-lg text-color">Ticket counter</span>
                                    </td>
                                    <td>
                                        <div class = "d-flex flex-column">
                                            <span class = "text-green avail-text">Available</span>
                                            <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "status-pills status-pills-green">
                                            <div class = "pills-dot"></div>
                                            <span class = "pills-text">Available</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class = "avail-text-lg text-color">Rs. 5,000 per day</span>
                                    </td>
                                    <td>
                                        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class = "d-flex justify-content-end mt-4">
                        <a href = "#" class = "btn btn-green"><span class = "btn-text">Book Now</span></a>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <!--  END CONTENT AREA  -->
@endsection

@push('scripts')


@endpush
