<?php

namespace Vendor\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Vendor\Repositories\application\ApplicationInterface;
use App\Http\Controllers\Controller;
use Files\Repositories\FileInterface;
use Illuminate\Support\Facades\Auth;
use Vendor\Models\Application;
use Vendor\Models\Booking;

class ApplicationController extends Controller
{
    protected $application, $file;
    public function __construct(ApplicationInterface $application, FileInterface $file)
    {
        $this->application = $application;
        $this->file = $file;
    }

    public function application()
    {
        try {
            return view('Vendor::frontend.vendor.application');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function applicationStore(Request $request)
    {
        // try {
            // dd($request->all());

            if ($request->uploadfiles) {
                foreach($request->uploadfiles as $uploadfile){
                    $application = new Application();
                    $application->booking_id = $request->booking_id;
                    $uploaded = $this->file->storeFile($uploadfile);
                    $application->file_id = $uploaded->id;
                    $application->save();
                }

                Toastr::success("Successfully Saved");
                return view('Vendor::frontend.vendor.application');

            }
            Toastr::error("Something went wrong");
            return redirect()->back();
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    public function proceedToPayment($id){
        try {
            $booking = Booking::where('id', $id)->with(['venues', 'applications'])->withSum('venues','price')->first();

            return view('Vendor::frontend.vendor.payment', compact('booking'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


}
