<?php

namespace Vendor\Http\Controllers;

use App\GlobalServices\ResponseService;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Files\Repositories\FileInterface;
use Venue\Repositories\VenueInterface;
use Illuminate\Http\Request;


class VendorBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $file, $venue, $response;
    public function __construct(FileInterface $file, ResponseService $response, VenueInterface $venue)
    {
        $this->file = $file;
        $this->response = $response;
        $this->venue = $venue;
    }

    public function bookingFilter(Request $request){

    }

    public function bookingStore(Request $request){
        dd('hello');
    }


    



}
