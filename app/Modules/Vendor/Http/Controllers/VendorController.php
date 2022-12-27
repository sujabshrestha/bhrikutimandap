<?php

namespace Vendor\Http\Controllers;

use App\GlobalServices\ResponseService;
use Venue\Models\Venue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
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

    public function home()
    {
        try {
            return view('Vendor::frontend.vendor.home');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function about()
    {
        try {
            return view('Vendor::frontend.vendor.about');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function gallery()
    {
        try {
            return view('Vendor::frontend.vendor.gallery');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


  
}