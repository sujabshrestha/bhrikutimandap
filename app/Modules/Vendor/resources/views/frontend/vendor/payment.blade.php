@extends('layouts.vendor.master')

@section('title', 'Application')

@section('breadcrumb', 'Application')
@push('styles')
    <link href="{{ asset('backendfiles/plugins/file-upload/file-upload-with-preview.min.css') }} " rel="stylesheet"
        type="text/css" />
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <main class="page-upload pb-5">
        <div class="container">
            <div class="row mx-0">
                <section class="sc-upload-slip col-xl-6 px-3 mt-5 pt-xl-5">
                    <div class="success-content">
                        <p class="text-lg text-center text-green success-text mb-3">Congratulations your request for booking
                            has been approved !!!</p>
                        <div class="upload-slip-block">
                            <p class="text fw-6">Please pay agreed amount to following details and attach payment Slip.</p>
                            <div class="row">
                                <div class="col-xl-7">

                                    <ul>
                                        <li class="text my-2">Amount to be paid: Rs. {{ $booking->venues_sum_price }} </li>
                                        <li class="text my-2">Account Name:
                                            {{ returnSiteSetting('account_name') ?? 'Samaj Kalyan Parisad' }} </li>
                                        <li class="text my-2">Account Number:
                                            {{ returnSiteSetting('account_number') ?? '1234532147720742' }} </li>
                                        <li class="text my-2">Bank Name:
                                            {{ returnSiteSetting('bank_name') ?? 'NMB Bank Nepal Ltd.' }} </li>
                                        <li class="text my-2">Branch:
                                            {{ returnSiteSetting('branch_name') ?? 'Putalisadak, Kathmandu' }} </li>
                                    </ul>
                                </div>
                                <div class="col-xl-5 mt-4 mt-xl-0">
                                    <div class="qr-img">
                                        <img src="{{ !is_null(returnSiteSetting('branch_name')) ? url('/') . getOrginalUrl(returnSiteSetting('qr_image')) : asset('frontendfiles/assets/images/qr-code.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="sc-upload px-3 overflow-hidden col-xl-6 ms-xl-auto">
                    <form method="POST" action="{{ route('vendor.payment.store', $booking->id) }}" enctype="multipart/form-data">
                        @csrf
                    <div class="success-content">
                        <p class="text-lg text-center max-w-wrapper mb-4">Upload your payment slip here.
                        </p>

                            <div class="success-body px-4 upload-highlight">
                                <div class = "upload-form">
                                    <div class = "upload-form-elem mb-xl-3">
                                        <label for="" class = "form-label mb-2 ps-0">Deposited By:</label>
                                        <div class = "">
                                            <input type = "text" name="deposited_by" class = 'form-control' placeholder="Deposited By">
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-6">
                                            <div class = "upload-form-elem">
                                                <label for="" class = "form-label mb-2 ps-0">Contact No:</label>
                                                <div class = "">
                                                    <input type = "text" name="contact" class = 'form-control' placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "col-md-6">
                                            <div class = "upload-form-elem">
                                                <label for="" class = "form-label mb-2 ps-0">Deposited Amount:</label>
                                                <div>
                                                    <input type = "text" name="deposited_amount" class = 'form-control' placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upload-img mb-4" onchange="handleFiles(this.files)">
                                    <img src="{{ asset('frontendfiles/assets/images/upload-image.png') }} " style="height:  400px !important;" alt="">
                                </div>

                                <p class="text-xl text-center mb-3">Drag and drop files to upload</p>
                                <p class="text-xl text-center mb-4">OR</p>
                                <p class="upload-file-name text text-center">No file selected !</p>

                                <div class="btns d-flex justify-content-center">
                                    <button type="button" class="btn btn-green-sm" id="upload-btn">
                                        <span class="btn-text">Browse</span>
                                    </button>
                                    <input type="file" name="uploadfiles[]" multiple="" class="visually-hidden" id="upload-input">
                                </div>
                            </div>

                        <p class="text-lg fw-6 text-center mb-4 mt-4">Or</p>

                        <p class="text text-start">Pay via:</p>
                        <div class="payment-methods d-flex align-items-center justify-content-center flex-wrap">
                            <a href="#" class="payment-method-item mx-3 my-2">
                                <img src="{{ asset('frontendfiles/assets/images/ips-connect.png') }}">
                            </a>
                        </div>

                        <div class="d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!--  END CONTENT AREA  -->
@endsection

@push('scripts')
@endpush
