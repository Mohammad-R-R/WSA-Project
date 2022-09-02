<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Http\Requests\StoreLogoRequest;
use App\Http\Requests\UpdateLogoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logo()
    {
        return view('logo');
    }

     public function logoP(Request $request)
    {

        $validate = $request->validate([
            'logoo'=>'required|mimes:jpeg,jpg,png,gif',
          
           
        ]);
           
        if($request->file('logoo')){
            $file= $request->file('logoo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['logoo']= $filename;

         
            
        }
      
        // dd($validate);
        
    
        // $data=  Auth::User();
    

        Cache::forget('logo');
        $data= Logo::updateOrCreate([
            'id'=>'1',
        ],
        [
            'logo'=>$filename,
          
            
           
        ]);
                // dd($data);
        return back()->with(['logosuccess'=>'success']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLogoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLogoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLogoRequest  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLogoRequest $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
