<?php

namespace Vendor\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Vendor\Repositories\application\ApplicationInterface;
use App\Http\Controllers\Controller;
use Files\Repositories\FileInterface;
use Illuminate\Support\Facades\Auth;
use Vendor\Models\Application;

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
        try {
            // dd($request->all());


            if ($request->uploadfiles) {
                foreach($request->uploadfiles as $uploadfile){
                    $application = new Application();
                    $application->vendor_id == Auth::id();

                    $uploaded = $this->file->storeFile($request->uploadfile);
                    $application->file_id = $$uploaded->id;
                    $application->save();
                }

                Toastr::success("Successfully Saved");


            }
            Toastr::error("Something went wrong");
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }
}
