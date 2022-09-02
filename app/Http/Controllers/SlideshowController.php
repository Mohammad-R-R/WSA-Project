<?php

namespace App\Http\Controllers;

use App\Models\slideshow;
use App\Http\Requests\StoreslideshowRequest;
use App\Http\Requests\UpdateslideshowRequest;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\promotion;
use App\Models\Logo;
use Illuminate\Support\Facades\Hash;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('slideshow');
        }


        public function slideshowP(Request $request)

        {
            $link=$request->link;
            // dd($link);
            $validate=$request->validate([
                'image'=>'required|mimes:webp,jpeg,jpg,png,gif',
                'link'=>'required',
                
            ]);
      
            // dd($request->file('image'));
            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/Image'), $filename);
                $data['image']= $filename;
                
            }

            $data=array('image'=>$filename,'image_link'=>$link);
            // dd($data);
            slideshow::create($data);




            return back()->with(['mes'=>'sucsess']);
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $x=slideshow::All();
        $title=title::first();
        $prom=promotion::first();
        $logo=Logo::All();

    //     $user2 = Hash::make(123456);
    //   dd($user2);
   


    return view('Home2',compact('x','title','prom','logo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreslideshowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function slideshowtable()
    {
        $show=slideshow::All();

        return view('slideShowTable',compact('show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    // public function show(slideshow $slideshow)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function edit(slideshow $slideshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateslideshowRequest  $request
     * @param  \App\Models\slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateslideshowRequest $request, slideshow $slideshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = slideshow::findOrFail($id);
       
        
        $user->delete();
   
        return back();
    }
}
