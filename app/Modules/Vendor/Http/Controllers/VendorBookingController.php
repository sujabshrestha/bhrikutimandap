<?php

namespace Vendor\Http\Controllers;


use App\GlobalServices\ResponseService;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Files\Repositories\FileInterface;
use Venue\Repositories\VenueInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vendor\Models\Booking;
use Venue\Models\Venue;

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
        // dd($request->all());

        $fromDate = $request->from_date;
        $toDate = $request->to_date;
        $venues = Venue::with('bookings')->get();
        $bookedVenues = Venue::whereHas('bookings',function($q) use ($fromDate,$toDate){
                            $q->where('from_date',  '<', $fromDate)
                            ->where('to_date', '>', $toDate);
                        })->with('bookings')->get();
        // dd($venues,$booked_venues);
        // $venues = Venue::whereHas('bookings',function($q) use ($fromDate,$toDate){
        //                 $q->where('from_date',  '<', $fromDate)
        //                 ->where('to_date', '>', $toDate);
        //             })->get();



        $data = [
            'view' => view('Vendor::frontend.vendor.appendVenueList', compact('venues','bookedVenues'))->render()
        ];
        return $this->response->responseSuccess($data,"Successfully Filtered", 200);
    }

    public function bookingStore(Request $request){
        try{
            // dd($request->all());
            $booking = new Booking();
            $booking->vendor_id = Auth::id();
            $booking->status = "Pending";
            $booking->payment_status = "Pending";
            $booking->from_date = Carbon::now();
            $booking->to_date = Carbon::now()->addDays(3);
            if($booking->save()){
                $booking->venues()->attach($request->venue);
                Toastr::success('Successfully Applied');
                return view('Vendor::frontend.vendor.application', compact('booking'));
            }
            Toastr::error("Something Weng Wrong. Please Try Again.");
            return redirect()->back();
        }catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }






}
