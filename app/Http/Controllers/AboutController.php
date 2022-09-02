<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Logo;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AbousUs()
    {
        
     

        return view('about');
    }

    public function AbousUsAdmin()
    {
        
        $data =About::first() ;



        return view('aboutAdmin',compact('data'));
    }

    public function AbousUsUser()
    {
        
        $data =About::first() ;
        $logo=Logo::first();
   

        return view('about',compact('data','logo'));
    }

    // public function AbousUsAdminView()
    // {
    //     $data=  new About();
        
       
  
    //     return view('aboutAdmin',compact('data'));
    // }

    public function AbousUsAdminP(Request $request)
    {
        $validate = $request->validate([
          
            'dec'=>'required'
        ]);

        $data= About::updateOrCreate([
            'id'=>1,
        ],[
            'desc'=>$request->dec,
        ]);

        // dd($data->desc);
       
        return back()->with(['about'=>"updated seccessfully"]);
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
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
