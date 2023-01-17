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
use Illuminate\Support\Facades\Storage;
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

    public function home()
    {
        // try {
        $venues = Venue::get();
        // $booked_venues = Venue::whereHas('bookings')->with('bookings')->get();
        // dd($venues,$booked_venues);
        return view('Vendor::frontend.vendor.home', compact('venues'));
        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }

    public function about()
    {
        try {
            return view('Vendor::frontend.others.about');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function termsAndCondition(){
        try {
            return view('Auth::vendor.termsAndCondition');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function gallery()
    {
        try {
            $gallery = Gallery::latest()->get();
            return view('Vendor::frontend.others.gallery', compact('gallery'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function rules()
    {
        try {
            return view('Vendor::frontend.others.rules');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function myAccount()
    {
        try {
            $user = User::where('id', Auth::id())->with('organization')->first();
            return view('Vendor::frontend.userProfile.myAccount', compact('user'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function myBooking()
    {
        try {
            $bookings = Booking::where('vendor_id', Auth::id())->with('venues')->latest()->get();
            return view('Vendor::frontend.userProfile.myBooking', compact('bookings'));
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function myBookingDetails($id)
    {
        try {
            $booking = Booking::where('id', $id)->with('venues')->first();
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

    public function profileUpdate(Request $request)
    {
        try {
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->description = $request->description;
            if ($user->update()) {
                Organization::updateOrCreate(
                    [
                        'user_id' => $user->id
                    ],
                    [
                        'organization_name' => $request->organization_name,
                        'organization_phone_no' => $request->organization_phone_no,
                        'organization_email' => $request->organization_email,
                        'organization_website' => $request->organization_website,
                        'organization_address' => $request->organization_address,
                        'organization_pan_no' => $request->organization_pan_no,

                    ]
                );
                Toastr::success('User Profile Successfully Updated');
                return redirect()->route('vendor.myAccount');
            }
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


    public function markNotificationRead()
    {
        try {
            auth()->user()->unreadNotifications->markAsRead();
            return $this->response->responseSuccessMsg("Successfully Marked as read");
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }




    public function downloadZip(Request $request, $id)
    {
        // if($request->has('download')) {

        $booking = Booking::where('id', $id)->with('applications')->first();
        $public_dir = public_path();
        $zipFileName = 'download.zip';
        $zip = new \ZipArchive;
        if ($zip->open($public_dir . '/' . $zipFileName, \ZipArchive::CREATE) === TRUE) {
            // Add File in ZipArchive

            foreach ($booking->applications as $application) {
                if (Storage::exists(getFilePath($application->file_id))) {
                    $zip->addFile(public_path('storage' . DIRECTORY_SEPARATOR . getFilePath($application->file_id)), getFilePath($application->file_id));
                }
                // $zip->addFile($public_dir . '/' . $invoice_file, $invoice_file);
            }
            $zip->close();
        }
        // Set Header
        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );
        $filetopath = $public_dir . '/' . $zipFileName;
        // Create Download Response
        if (file_exists($filetopath)) {
            ob_end_clean();
            return response()->download($filetopath, $zipFileName, $headers);
        }
        // }
    }
}
