<?php

namespace App\Http\Controllers;

use App\Models\TheHome;
use App\Http\Requests\StoreTheHomeRequest;
use App\Http\Requests\UpdateTheHomeRequest;
use Illuminate\Http\Request;


class TheHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
      return view('the-home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHome(Request $request)
    {
        $validate = $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'background'=>'required',
            'ads-title'=>'required',
            'link'=>'required',
            'prom'=>'required',
            'prom_desc'=>'required',
            'our'=>'required',
            'team_images'=>'required',
            'position'=>'required',
            'member_desc'=>'required',

        ]);

        $title=$request->input('title');
        $desc=$request->input('desc');
        $ads=$request->input('ads-title');
        $link=$request->input('link');
        $our=$request->input('our');
         $position=$request->input('position');
         $member_desc=$request->input('member_desc');
         $prom=$request->input('prom');
         $prom_desc=$request->input('prom_desc');
         

        
        // dd($request);

        if($request->file('background')){
            echo "sdfsdfdsf";
            
            $temp1= $request->file('background');
            $background= date('YmdHi').$temp1->getClientOriginalName();
            $temp1-> move(public_path('public/Image'), $background);
            $data['background']= $background;
            echo $background;
            
        }

        if($request->file('images')){
            $temp2= $request->file('images');
            $images= date('YmdHi').$temp2->getClientOriginalName();
            $temp2-> move(public_path('public/Image'), $images);
            $data['images']= $images;
            
            echo $images;
            
        }

        if($request->file('team_images')){
            $temp3= $request->file('team_images');
            $team_images= date('YmdHi').$temp3->getClientOriginalName();
            $temp3-> move(public_path('public/Image'), $team_images);
            $data['team_images']= $team_images;
            // dd($team_images);
        }

        $data=array('title'=>$title,'background'=>$background,'desc'=>$desc,'images'=>$images,'ads-title'=>$ads,'team_images'=>$team_images,'link'=>$link,'prom'=>$prom,'prom_desc'=>$prom_desc,'our'=>$our,'position'=>$position,'member_desc'=>$member_desc);

        TheHome::create($data);

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTheHomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTheHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TheHome  $theHome
     * @return \Illuminate\Http\Response
     */
    public function show(TheHome $theHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TheHome  $theHome
     * @return \Illuminate\Http\Response
     */
    public function edit(TheHome $theHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTheHomeRequest  $request
     * @param  \App\Models\TheHome  $theHome
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTheHomeRequest $request, TheHome $theHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TheHome  $theHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(TheHome $theHome)
    {
        //
    }
}
