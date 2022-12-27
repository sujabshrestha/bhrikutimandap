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

    public function index(Request $request)
    {
        try {
        return view('Vendor::frontend.vendor.home');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            // dd("hdkjshakjdsa");
            $data = [
                'view' => view('Venue::backend.venue.create')->render()
            ];

            return $this->response->responseSuccess($data, "Success", 200);
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
        if ($request->ajax()) {
            $venue = new Venue();
            $venue->title = $request->title;
            $venue->price = $request->price;
            $venue->description = $request->description;
            if ($request->image) {
                $uploaded = $this->file->storeFile($request->image);
                $venue->image_id = $uploaded->id;
            }
            if ($venue->save()) {
                return $this->response->responseSuccessMsg("Successfully Stored", 200);
            }
            return $this->response->responseError("Something went wrong");
        }
        // } catch (\Exception $e) {
        //     return $this->response->responseError($e->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        try {
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $venue = Venue::where('id', $id)->first();
            if ($venue) {
                $data = [
                    'image' => url('/').getOrginalUrl($venue->image_id),
                    'view' => view('Venue::backend.venue.edit', compact('venue'))->render()
                ];

                return $this->response->responseSuccess($data, "Success", 200);
            }

            return $this->response->responseError("Something went wrong");
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if ($request->ajax()) {
                $venue =  Venue::where('id', $id)->first();
                $venue->title = $request->title;
                $venue->price = $request->price;
                $venue->status = $request->status;
                $venue->description = $request->description;
                if ($request->image) {
                    if(checkFileExists($venue->image_id)){
                        $this->file->delete($venue->image_id);
                    }
                    $uploaded = $this->file->storeFile($request->image);
                    $venue->image_id = $uploaded->id;
                }
                if ($venue->update()) {
                    return $this->response->responseSuccessMsg("Successfully Stored", 200);
                }
                return $this->response->responseError("Something went wrong");
            }
        } catch (\Exception $e) {
            return $this->response->responseError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $venue =  Venue::where('id', $id)->first();
            if($venue){
                if(checkFileExists($venue->image_id)){
                    $this->file->delete($venue->image_id);
                }
                $venue->delete();
                return $this->response->responseSuccessMsg("Successfully Deleted", 200);
            }
            return $this->response->responseError("Something went wrong", 200);
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }
}
