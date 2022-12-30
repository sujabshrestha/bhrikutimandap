@extends('layouts.vendor.master')

@section('title', 'Home')

@section('breadcrumb', 'Home')
@push('styles')
    <link href="{{ asset('backendfiles/plugins/file-upload/file-upload-with-preview.min.css') }} " rel="stylesheet"
        type="text/css" />
        <style>
            .datepicker-days .disabled{
                color: #d4cece !important;
            }
        </style>
@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <main class = "page-index">
        <div class = "container">
            <section class = "sc-booking-selection px-3">
                <form id="filter-form" action="{{ route('vendor.bookingFilter') }}">
                    <div class = "booking-selection-content d-lg-flex justify-content-lg-center">
                        <div class = "booking-selection-item d-flex align-items-center">
                            <div class = "input-group">
                                <div class = "input-group-text">
                                    <img src = "{{ asset('frontendFiles/assets/images/icons/calendar-search.svg')}}">
                                </div>
                                <input type = "text"  class = "form-control check-in-datepicker" placeholder="Check-In" name = "from_date">
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
                   
                    <div class="venueListTable">
                    
                    </div>

                </div>
            </section>
        </div>
    </main>


    <!--  END CONTENT AREA  -->
@endsection

@push('scripts')
   


<script>
    var now = "{{ Carbon\Carbon::now()->addMonth()->format("m/d/Y") }}";
    $('.check-in-datepicker').datepicker('setStartDate',now);
   
    $('.check-in-datepicker').change(function(){
        var date = $('.check-in-datepicker').val();
        $('.check-out-datepicker').datepicker('setStartDate',date);
    }); 


    $(document).on('submit', '#filter-form', function(e) {

        e.preventDefault();
        var currentevent = $(this);
        currentevent.attr('disabled');
        var form = new FormData($('#filter-form')[0]);
        var params = $('#filter-form').serializeArray();
        var route = $(this).attr('action');
        console.log(route);
        $.each(params, function(i, val) {
            form.append(val.name, val.value)
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: route,
            contentType: false,
            processData: false,
            data: form,
            beforeSend: function(data) {
                loader();
            },
            success: function(data) {

                toastr.success(data.message);
                // $('#global-table').DataTable().ajax.reload();
                // $('#summernote-editor').summernote('code', '');
                // $('#filter-form').trigger("reset");
                // $('#globalModal').modal('hide');
                $('.venueListTable').html(data.data.view);
                currentevent.attr('disabled', false);

            },
            error: function(err) {
                if (err.status == 422) {
                    $.each(err.responseJSON.errors, function(i, error) {
                        var el = $(document).find('[name="' + i + '"]');
                        el.after($('<span style="color: red;">' + error[0] + '</span>')
                            .fadeOut(4000));
                    });
                }

                currentevent.attr('disabled', false);
            },
            complete: function() {
                $.unblockUI();
            }
        });

        });
</script>


@endpush
