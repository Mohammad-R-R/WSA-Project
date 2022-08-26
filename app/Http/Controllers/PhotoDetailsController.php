<?php

namespace App\Http\Controllers;

use App\Models\PhotoDetails;
use App\Http\Requests\StorePhotoDetailsRequest;
use App\Http\Requests\UpdatePhotoDetailsRequest;

class PhotoDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {

   

        return view('details');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhotoDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotoDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhotoDetails  $photoDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoDetails $photoDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhotoDetails  $photoDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoDetails $photoDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotoDetailsRequest  $request
     * @param  \App\Models\PhotoDetails  $photoDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotoDetailsRequest $request, PhotoDetails $photoDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhotoDetails  $photoDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoDetails $photoDetails)
    {
        //
    }
}
