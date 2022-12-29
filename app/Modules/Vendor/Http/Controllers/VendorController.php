<?php

namespace Vendor\Http\Controllers;

use App\GlobalServices\ResponseService;
use Venue\Models\Venue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use CMS\Models\Gallery;
use Files\Repositories\FileInterface;
use Illuminate\Support\Facades\Auth;
use User\Models\Organization;
use User\Models\User;
use Vendor\Models\Booking;
use Venue\Repositories\VenueInterface;

class VendorController extends Controller
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

    public function home(){
        try {
            $venues = Venue::get();
            // dd($venues);
            return view('Vendor::frontend.vendor.home',compact('venues'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function about(){
        try {
            return view('Vendor::frontend.others.about');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function gallery(){
        try {
            $gallery = Gallery::latest()->get();
            return view('Vendor::frontend.others.gallery', compact('gallery'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function rules(){
        try {
            return view('Vendor::frontend.others.rules');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function myAccount(){
        try {
            $user = User::where('id',Auth::id())->with('organization')->first();
            return view('Vendor::frontend.userProfile.myAccount',compact('user'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function myBooking(){
        try {
            $bookings = Booking::where('vendor_id',Auth::id())->with('venues')->get();
            return view('Vendor::frontend.userProfile.myBooking',compact('bookings'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function myBookingDetails($id){
        try {
            $booking = Booking::where('id',$id)->with('venues')->first();
            if ($booking) {
                $data = [
                    'view' => view('Vendor::frontend.userProfile.myBookingDetails', compact('booking'))->render()
                ];
                return $this->response->responseSuccess($data, "Success", 200);
            }
            return $this->response->responseError("Booking Not Found.");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    public function profileUpdate(Request $request){
        // dd($request->all());
        $user = User::where('id',Auth::id())->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->description = $request->description;
        if($user->update()){
            Organization::updateOrCreate([
                    'user_id' => $user->id
                ],
                [   
                    'organization_name' => $request->organization_name, 
                    'organization_phone_no' => $request->organization_phone_no,
                    'organization_email' => $request->organization_email,
                    'organization_website' => $request->organization_website,
                    'organization_address' => $request->organization_address,
                    'organization_pan_no' => $request->organization_pan_no,

                ]);
            Toastr::success('User Profile Successfully Updated');
            return redirect()->route('vendor.myAccount');
        }





       
    }





}
