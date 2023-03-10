        <div class="modal-dialog modal-xl">
            <div class="modal-content overflow-hidden">
                <div class="booking-modal-header">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Booking</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="booking-modal-top px-3 d-flex flex-column justify-content-center text-center">


                        @if ($booking->payment_status == 'Pending')
                        <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center mb-0">
                            <img src="{{ asset('frontendfiles/assets/images/hourglass.svg')}}" alt="" class="icon">
                            <span class="text-sm text-white">Payment Pending</span>
                        </div>

                        @elseif($booking->payment_status == 'Approved')
                        <div class=" bookings-item-badge-pending d-inline-flex align-items-center justify-content-center align-self-center mb-0">
                            <img src="{{ asset('frontendfiles/assets/images/check-green.svg') }}">
                            <span class="text-sm text-primary">Confirmed</span>
                        </div>

                        @endif

                        <div class="booking-modal-title sc-title">
                            <h3 class="ls-def">Large Exbition Hall & area around it</h3>
                        </div>
                        <div class="booking-modal-date text-sm">2080/ 10 / 13</div>
                    </div>

                    <div class="booking-modal-body px-3">
                        <div class="row mx-2 mx-lg-auto">
                            <div class="col-xl-3 booking-modal-body-l text-center mt-3">Documents</div>
                            <div class="col-xl-9 booking-modal-body-r w-auto mx-auto mt-3 ms-xl-0">
                                <div class="booking-details-wrapper">
                                    <!-- details block -->
                                    <div class="details-block row">
                                        <div class="col-lg-4">
                                            <p class="text mb-0">Application:</p>
                                            <div class="d-flex align-items-center approved my-2">
                                                <img src="{{ asset('frontendfiles/assets/images/check.svg')}}" alt="" class="icon ms-0">
                                                <span class="fs-xx-sm text-primary">Approved</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class='booking-list-group mt-2 mt-lg-0'>
                                                <div class="list-group-item mb-3">
                                                    <div class="list-item-l text-sm">
                                                        <img src="{{ asset('frontendfiles/assets/images/message.svg') }}" alt="" class="list-item-icon">
                                                        <span class="text-xs">???????????? ???????????????????????? ?????????????????? ?????????????????? ??????????????????????????? ?????????????????????</span>
                                                    </div>
                                                    <span class="list-item-r text-xs">???????????? ????????????????????? / ????????? ????????????</span>
                                                </div>

                                                <div class="list-group-item mb-3">
                                                    <div class="list-item-l text-sm">
                                                        <img src="{{ asset('frontendfiles/assets/images/process.svg') }}" alt="" class="list-item-icon">
                                                        <span class="text-xs">???????????? ???????????????????????? ?????????????????? ?????????????????? ???????????????????????????</span>
                                                    </div>
                                                    <span class="list-item-r text-xs"></span>
                                                </div>

                                                <div class="list-group-item">
                                                    <div class="list-item-l text-sm">
                                                        <img src="{{ asset('frontendfiles/assets/images/event.svg')}}" alt="" class="list-item-icon">
                                                        <span class="text-xs">??????????????????????????? ???????????? ????????????????????? ???????????? ??????????????? ??????????????? ????????????</span>
                                                    </div>
                                                    <span class="list-item-r text-xs"></span>
                                                </div>
                                            </div>
                                            <div class="booking-modal-btns mt-3 d-sm-flex">
                                                <button type="button" class="modal-upload-btn d-flex align-items-center my-1">
                                                    <img src="{{ asset('frontendfiles/assets/images/document-upload.svg')}}" alt="" class="icon">
                                                    <span class="text-sm text-white ls-def">Upload New</span>
                                                </button>
                                                <button type="button" class="modal-download-btn d-flex align-items-center my-1">
                                                    <img src="{{ asset('frontendfiles/assets/images/document-download.svg') }}" alt="" class="icon">
                                                    <span class="text-sm text-white ls-def">Download</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of details block -->
                                    <div class="horz-line my-3"></div>
                                    <!-- details block -->
                                    <div class="details-block row">
                                        <div class="col-lg-4">
                                            <p class="text mb-0">Payment: :</p>
                                            <div class="d-flex align-items-center approved my-2">
                                                <img src="{{ asset('frontendfiles/assets/images/hourglass-atom.svg')}}" alt="" class="icon ms-0">
                                                <span class="fs-xx-sm text-tangerine">Payment Pending</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class='booking-list-group mt-2 mt-lg-0'>
                                                <div class="list-group-item mb-3">
                                                    <div class="list-item-l text-sm">
                                                        <img src="{{ asset('frontendfiles/assets/images/message.svg') }}" alt="" class="list-item-icon">
                                                        <span class="text-xs">???????????? ???????????????????????? ?????????????????? ?????????????????? ??????????????????????????? ?????????????????????</span>
                                                    </div>
                                                    <span class="list-item-r text-xs">???????????? ????????????????????? / ????????? ????????????</span>
                                                </div>

                                                <div class="list-group-item mb-3">
                                                    <div class="list-item-l text-sm">
                                                        <img src="{{ asset('frontendfiles/assets/images/process.svg') }}" alt="" class="list-item-icon">
                                                        <span class="text-xs">???????????? ???????????????????????? ?????????????????? ?????????????????? ???????????????????????????</span>
                                                    </div>
                                                    <span class="list-item-r text-xs"></span>
                                                </div>

                                                <div class="list-group-item">
                                                    <div class="list-item-l text-sm">
                                                        <img src="{{ asset('frontendfiles/assets/images/event.svg')}}" alt="" class="list-item-icon">
                                                        <span class="text-xs">??????????????????????????? ???????????? ????????????????????? ???????????? ??????????????? ??????????????? ????????????</span>
                                                    </div>
                                                    <span class="list-item-r text-xs"></span>
                                                </div>
                                            </div>
                                            <div class="booking-modal-btns mt-3 d-sm-flex">
                                                <button type="button" class="modal-upload-btn d-flex align-items-center my-1">
                                                    <img src="{{ asset('frontendfiles/assets/images/document-upload.svg')}}" alt="" class="icon">
                                                    <span class="text-sm text-white ls-def">Upload New</span>
                                                </button>
                                                <button type="button" class="modal-download-btn d-flex align-items-center my-1">
                                                    <img src="{{ asset('frontendfiles/assets/images/document-download.svg') }}" alt="" class="icon">
                                                    <span class="text-sm text-white ls-def">Download</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of details block -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="booking-modal-bottom mt-4">
                        <div class="btns-list d-flex">
                            <button type="button" class="btns-list-item bottom-cancel-btn">
                                <span class="text-sm text-white ls-def">Cancel Booking</span>
                                <img src="{{ asset('frontendfiles/assets/images/cancel.svg')}}" alt="" class="icon">
                            </button>

                            <a href="#" class="btns-list-item bottom-postpone-btn">
                                <span class="text-sm text-white ls-def">Postpone event</span>
                                <img src="{{ asset('frontendfiles/assets/images/calendar-edit.svg')}}" alt="" class="icon">
                            </a>

                            <a href="#" class="btns-list-item bottom-update-btn">
                                <span class="text-sm text-white ls-def">Request update</span>
                                <img src="{{ asset('frontendfiles/assets/images/info-circle-2.svg')}}" alt="" class="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
