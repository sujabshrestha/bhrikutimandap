<?php

namespace Vendor\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ApplicationApprovalController extends Controller
{

    public function approvalLists(){
        try{

            // return view('Vendor::backend.approvalLists')
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }


}
