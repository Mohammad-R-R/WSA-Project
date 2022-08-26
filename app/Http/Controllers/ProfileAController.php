<?php

namespace App\Http\Controllers;

use Auth;

use App\Models\ProfileA;
use App\Http\Requests\StoreProfileARequest;
use App\Http\Requests\UpdateProfileARequest;
// use App\Http\Controllers\Request;
use Illuminate\Http\Request;

class ProfileAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

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
     * @param  \App\Http\Requests\StoreProfileARequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileARequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfileA  $profileA
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileA $profileA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileA  $profileA
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileA $profileA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileARequest  $request
     * @param  \App\Models\ProfileA  $profileA
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateProfileARequest $request, ProfileA $profileA)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileA  $profileA
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileA $profileA)
    {
        //
    }
}
