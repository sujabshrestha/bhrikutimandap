<?php

namespace Vendor\Http\Controllers\Backend;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Vendor\Models\Booking;

class ApplicationApprovalController extends Controller
{

    protected $response;
    public function __construct(ResponseService $response)
    {
        $this->response = $response;
    }


    public function approvalLists(){
        try{
            $bookinglists = Booking::with(['venues', 'applications'])->get();
            return view('Vendor::backend.approvalLists', compact('bookinglists'));
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function changeStatus($id, Request $request){
        try{

            if($request->ajax()){
                $booking = Booking::where('id', $id)->first();
                if($booking){
                    $booking->status = $request->status;
                    if($booking->update()){
                         return $this->response->responseSuccessMsg("Successfully updated");
                    }
                    return $this->response->responseError("Something went wrong");
                }
            }

        }catch(\Exception $e){
            $this->response->responseError($e->getMessage());
        }
    }


}
