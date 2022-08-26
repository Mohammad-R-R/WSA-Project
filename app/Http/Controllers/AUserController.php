<?php

namespace App\Http\Controllers;

use App\Models\AUser;
use App\Http\Requests\StoreAUserRequest;
use App\Http\Requests\UpdateAUserRequest;

class AUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //     $arr = [1,2,3,4,5,10,23];
    //     // echo $_POST['uname'];
        
    //     // dd($arr);
    //     return view('user',compact('arr'));
    // }

    public function home()
    {

     

        return view('Home2');
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
     * @param  \App\Http\Requests\StoreAUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AUser  $aUser
     * @return \Illuminate\Http\Response
     */
    public function show(AUser $aUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AUser  $aUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AUser $aUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAUserRequest  $request
     * @param  \App\Models\AUser  $aUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAUserRequest $request, AUser $aUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AUser  $aUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AUser $aUser)
    {
        //
    }
}
