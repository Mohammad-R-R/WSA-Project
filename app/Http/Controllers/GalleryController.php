<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\machine;
use App\Http\Requests\StoreGalleryRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateGalleryRequest;
use DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Gallery()
    {

     

        return view('Gallery');
    }

    public function bannerPhoto()
    {
        // Gallery::create($request->all());
      
        return view('bannerPhoto');
    }

    public function bannerPhotoP(Request $request)
    {

        if($request){
        $imge=$request->file('banner');
        $type=$request->input('type');
        $color=$request->input('color');
        $size=$request->input('size');
        $desc=$request->input('desc');
        // dd($request);

        
        
        if($request->file('banner')){
            $file= $request->file('banner');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['banner']= $filename;
            
        }
       
        $data=array('type'=>$type,'color'=>$color,'size'=>$size,'desc'=>$desc,'image'=>$filename);
        banner::create($data);
    }else{
        return back()->with(['Faild'=>'Faild!']);
    }

        return back();
    }

    public function showBanners()
    {

         $data=banner::All();
         $Machinedata=machine::All();
        return view('Gallery',compact('data','Machinedata'));
    }

    public function detail($id)
    {
        $banner = banner::find($id);
       
        return view('details',compact('banner'));
    
    }

    public function bannerDelete($id)
    { 
        $user = banner::find($id);
        
        $user->delete();
   
        return back();


    }

    public function bannerEdit($id)
    {
        
    }

    public function  bannersca(){
        $data=banner::All();
        return view('bannerSca',compact('data'));
    }

    //**************** */ machinee *************


    public function machinePhoto()
    {

     

        return view('MachinePhoto');
    }

    public function machinePhotoP(Request $request)
    {
        $imge=$request->file('banner');
        $type=$request->input('type');
        $color=$request->input('color');
        $size=$request->input('size');
        $desc=$request->input('desc');

        
        
        if($request->file('machine')){
            $file= $request->file('machine');
            $filename2= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename2);
            $data['machine']= $filename2;
            
        }
       
        $data=array('type'=>$type,'color'=>$color,'size'=>$size,'desc'=>$desc,'image'=>$filename2);
        machine::create($data);
     

        return back();
    }

    // public function showMachines()
    // {

    //      $Machinedata=machine::All();
        
    //     return view('Gallery',compact('Machinedata'));
    // }

    public function Mdetail($id)
    {
        $machine = machine::find($id);
    //    dd($machine);
        return view('machineDetails',compact('machine'));
     
    }








    // ******* end machine ***********

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
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
