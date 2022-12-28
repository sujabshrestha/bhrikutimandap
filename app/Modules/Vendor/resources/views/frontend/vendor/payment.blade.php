@extends('layouts.vendor.master')

@section('title', 'Application')

@section('breadcrumb', 'Application')
@push('styles')
    <link href="{{ asset('backendfiles/plugins/file-upload/file-upload-with-preview.min.css') }} " rel="stylesheet"
        type="text/css" />
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <main class = "page-upload pb-5">
        <div class = "container">
            <div class = "row mx-0">
                <section class = "sc-upload-slip col-xl-6 px-3 mt-5 pt-xl-5">
                    <div class = "success-content">
                        <p class="text-lg text-center text-green success-text mb-3">Congratulations your request for booking has been approved !!!</p>
                        <div class = "upload-slip-block">
                            <p class = "text fw-6">Please pay agreed amount to following details and attach payment Slip.</p>
                            <div class = "row">
                                <div class = "col-xl-7">
                                    <ul>
                                        <li class = "text my-2">Amount to be paid: Rs. 2,50,000 </li>
                                        <li class = "text my-2">Account Name: Samaj Kalyan Parisad</li>
                                        <li class = "text my-2">Account Number: 1234532147720742</li>
                                        <li class = "text my-2">Bank Name: NMB Bank Nepal Ltd.</li>
                                        <li class = "text my-2">Branch: Putalisadak, Kathmandu</li>
                                    </ul>
                                </div>
                                <div class = "col-xl-5 mt-4 mt-xl-0">
                                    <div class = "qr-img">
                                        <img src = "assets/images/qr-code.png" alt = "">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class = "sc-upload px-3 overflow-hidden col-xl-6 ms-xl-auto">
                    <div class="success-content">
                        <p class="text-lg text-center max-w-wrapper mb-4">Upload your payment slip here.
                        </p>
                        <div class="success-body px-4">
                            <div class="upload-img mb-4">
                                <img src = "assets/images/upload-image.png" alt = "">
                            </div>
                            
                            <p class="text text-center mb-2">Drag and drop files to upload</p>
                            <p class = "text-lg fw-6 text-center mb-2">OR</p>
                            <p class="upload-file-name text text-center">No file selected !</p>

                            <div class="btns d-flex justify-content-center">
                                <button type = "button" class = "btn btn-green-sm" id = "upload-btn">
                                    <span class="btn-text">Browse</span>
                                </button>
                                <input type = "file" class = "visually-hidden" id = "upload-input">
                            </div>
                        </div>

                        <p class = "text-lg fw-6 text-center mb-4 mt-4">Or</p>

                        <p class = "text text-start">Pay via:</p>
                        <div class = "payment-methods d-flex align-items-center justify-content-center flex-wrap">
                            <a href = "#" class = "payment-method-item mx-3 my-2">
                                <img src = "assets/images/ips-connect.png">
                            </a>
                        </div>

                        <div class = "d-flex align-items-center justify-content-end">
                            <button type = "submit" class = "btn btn-primary submit-btn">Submit</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!--  END CONTENT AREA  -->
@endsection

@push('scripts')


@endpush
