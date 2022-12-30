<?php

namespace Vendor\Http\Controllers;

use App\GlobalServices\ResponseService;
use Venue\Models\Venue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use CMS\Models\Gallery;
use Files\Repositories\FileInterface;
use Venue\Repositories\VenueInterface;
use Yajra\DataTables\Facades\DataTables;

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
            return view('Vendor::frontend.userProfile.myAccount');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function myBooking(){
        try {
            return view('Vendor::frontend.userProfile.myBooking');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



    public function markNotificationRead(){
        try {
            auth()->user()->unreadNotifications->markAsRead();
            return $this->response->responseSuccessMsg("Successfully Marked as read");
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }





}
