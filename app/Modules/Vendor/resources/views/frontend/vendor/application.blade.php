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
            <section class="sc-upload px-3 overflow-hidden">
                <div class="success-content">
                    <p class="text-lg text-center max-w-wrapper mb-4">Please upload an application (Nibedhan) along with
                        details about the required venue and date in a A4 size paper with companies letter head and
                        authorized signature.
                    </p>

                    <form action="{{ route('vendor.application.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="booking_id" value="{{ $booking->id ?? null }}">

                        <div class="success-body px-4 upload-highlight">
                            <div class="upload-img mb-4" onchange="handleFiles(this.files)">
                                <img src="assets/images/upload-image.png" alt="">
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

                        <div class="d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>

    <!--  END CONTENT AREA  -->
@endsection

@push('scripts')
@endpush
