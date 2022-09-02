<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\machine;
use App\Http\Requests\StoreGalleryRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateGalleryRequest;
use DB;
use App\Models\Logo;
use Illuminate\Support\Facades\Cache;
// require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Gallery()
    {
        
      

     

        return view('Gallery',compact('logo'));
    }

    public function bannerPhoto()
    {
        // Gallery::create($request->all());
      
        return view('bannerPhoto');
    }

    public function bannerPhotoP(Request $request)

    {

        
    $validate = $request->validate([
        'banner'=>'required|mimes:webp,jpeg,jpg,png,gif',
        'type'=>'required',
        'color'=>'required',
        'size'=>'required',
        'desc'=>'required',
    ]);

  
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
            // $re=Image::make(public_path('public/Image'), $filename)->resize(200,200);
            $data['banner']= $filename;
            
        }
       
        $data=array('type'=>$type,'color'=>$color,'size'=>$size,'desc'=>$desc,'image'=>$filename);
        banner::create($data);
    

        return back()->with(['done'=>'banner has been added successfully ']);
    }

    public function showBanners()
    {

         $data=banner::All();
         $Machinedata=machine::All();
         $logo=Logo::All();
        return view('Gallery',compact('data','Machinedata','logo'));
    }

    public function detail($id)
    {
         
         
         $banner = banner::findOrFail($id);
       
        $logo=Logo::All();
       
        return view('details',compact('banner','logo'));
    
    }

    public function bannerDelete($id)
    { 
        
        $user = banner::findOrFail($id);
       
        
        $user->delete();
   
        return back();


    }

    public function bannerEdit($id)
    { 
        
        $user = banner::findOrFail($id);

      
   
        return view('editBanner',compact('user'));

       

    }

    public function bannerEditP(Request $request)
    { 
        if($request->file('banner')){
            $file= $request->file('banner');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['banner']= $filename;

         
            
        }
        $us= banner::where('id',$request->id)->update(['type'=>$request->type,
         'size'=>$request->size,
         'color'=>$request->color,
         'desc'=>$request->desc,
         'image'=>$filename
         
        
        ]);
      
    //    dd($us);
        
       
   
        return back();


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
        $validate = $request->validate([
            'machine'=>'required|mimes:webp,jpeg,jpg,png,gif',
            'type'=>'required',
            'color'=>'required',
            'size'=>'required',
            'desc'=>'required',
        ]);
    
        $imge=$request->file('machine');
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
     

        return back()->with(['doneM'=>'Machine has been added successfully ']);
    }

    public function  machinesca(){
        $data=machine::All();
        return view('machineSca',compact('data'));
    }

    public function machineDelete($id)
    { 
        
        $user = machine::findOrFail($id);
       
        
        $user->delete();
   
        return back();


    }

    
    public function machineEdit($id)
    { 
        
        $user = machine::findOrFail($id);

      
   
        return view('editMachine',compact('user'));

       

    }

    public function machineEditP(Request $request)
    { 

        $validate = $request->validate([
            'machine'=>'required|mimes:webp,jpeg,jpg,png,gif',
            'type'=>'required',
            'color'=>'required',
            'size'=>'required',
            'desc'=>'required',
        ]);
        if($request->file('machine')){
            $file= $request->file('machine');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['machine']= $filename;

         
            
        }
        // dd($request->machine,$request->size);
        $us= machine::where('id',$request->id)->update(['type'=>$request->type,
         'size'=>$request->size,
         'color'=>$request->color,
         'desc'=>$request->desc,
         'image'=>$request->machine,
         
        
        ]);
      
    //    dd($us);
        
       
   
        return back();


    }

    // public function showMachines()
    // {

    //      $Machinedata=machine::All();
        
    //     return view('Gallery',compact('Machinedata'));
    // }

    public function Mdetail($id)
    {
        $machine  =machine::findOrFail($id);
            $logo=Logo::All();
        return view('machineDetails',compact('machine','logo'));
     
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
