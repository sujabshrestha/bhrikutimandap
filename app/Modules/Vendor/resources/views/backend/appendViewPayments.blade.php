<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Booking Details [ <span class="text-primary"> {{ Carbon\Carbon::parse($booking->from_date)->format('dS M Y') }} - {{ Carbon\Carbon::parse($booking->end_date)->format('dS M Y') }} </span> ] </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <div class="card mb-2">
                <div class="card-header p-0 m-0" style="padding:5px 0px 0px 19px !important;">
                    <h4>Venues List</h4>
                </div>
                <div class="card-body row " style="border: none !important;">
                    <ul >
                    @if (!is_null($booking->venues))
                      @foreach ($booking->venues as $venue)
                      <li >{{ $venue->title }} [ <span class="text-danger">{{  $venue->price }}</span> ]</li>

                      {{-- <img src="{{ url('/').getOrginalUrl($payment->image_id) }}" style="height: 200px;" alt=""> --}}
                      @endforeach
                    @endif
                  </div>
                </ul>
            </div>

            <div class="card">
                <div class="card-header p-0 m-0" style="padding:5px 0px 0px 19px !important;">
                    <h4>Payment Slips</h4>
                </div>
                <div class="card-body row ">

                    @if (!is_null($booking->payments))
                      @foreach ($booking->payments as $payment)
                      <img src="{{ url('/').getOrginalUrl($payment->image_id) }}" style="height: 200px;" alt="">
                      @endforeach
                    @endif
                  </div>
            </div>


        </div>
    </div>

</div>
</div>



<script>
    var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>
