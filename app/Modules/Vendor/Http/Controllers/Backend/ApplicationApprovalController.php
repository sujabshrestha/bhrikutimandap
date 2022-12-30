<?php

namespace Vendor\Http\Controllers\Backend;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ApplicationVerifiedNotification;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use User\Models\User;
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
        // try{

            if($request->ajax()){


                $booking = Booking::where('id', $id)->first();
                if($booking){
                    $user = User::where('id', $booking->vendor_id)->first();
                    $booking->status = $request->status;
                    if($booking->update()){

                        $details= [
                            'booking_id' => $booking->id,
                            'status' => $booking->status,
                            'from_date' => $booking->from_date,
                            'end_date' => $booking->end_date,
                          ];

                        Notification::send($user, new ApplicationVerifiedNotification($details));
                         return $this->response->responseSuccessMsg("Successfully updated");
                    }
                    return $this->response->responseError("Something went wrong");
                }
            }

        // }catch(\Exception $e){
        //     $this->response->responseError($e->getMessage());
        // }
    }



    public function changePaymentStatus($id, Request $request){
        // try{

            if($request->ajax()){


                $booking = Booking::where('id', $id)->first();
                if($booking){
                    $user = User::where('id', $booking->vendor_id)->first();
                    $booking->payment_status = $request->payment_status;
                    if($booking->update()){

                        $details= [
                            'booking_id' => $booking->id,
                            'status' => $booking->status,
                            'from_date' => $booking->from_date,
                            'end_date' => $booking->end_date,
                          ];

                        Notification::send($user, new ApplicationVerifiedNotification($details));
                         return $this->response->responseSuccessMsg("Successfully updated");
                    }
                    return $this->response->responseError("Something went wrong");
                }
            }

        // }catch(\Exception $e){
        //     $this->response->responseError($e->getMessage());
        // }
    }


    public function view($id, Request $request){
        try{


            $booking =Booking::where('id', $id)->with(['venues', 'applications', 'payments'])->first();
            $data = [
                'view' => view('Vendor::backend.appendViewPayments', compact('booking'))->render()
            ];
            return $this->response->responseSuccess($data, "Success", 200);

        }catch(\Exception $e){
            $this->response->responseError($e->getMessage());
        }
    }






}
