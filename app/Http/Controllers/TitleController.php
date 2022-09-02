<?php

namespace App\Http\Controllers;

use App\Models\title;
use App\Http\Requests\StoretitleRequest;
use App\Http\Requests\UpdatetitleRequest;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Htitle()
    {
        $data = title::first();


        // return view('aboutAdmin',compact('data'));
        return view ('HomeTitle',compact('data'));
    }

        public function HtitleP(Request $request)
    { 
            $title=$request->title;
            $desc=$request->desc;
        $validate=$request->validate([
            'title'=>'required',
            'background'=>'required|mimes:webp,jpeg,jpg,png,gif',
            'desc'=>'required'
            
        ]);

        if($request->file('background')){
            $file= $request->file('background');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['background']= $filename;
            
        }
        // $data=array('title'=>$title,'desc'=>$desc,'background'=>$filename);
        // dd($data);
        // dd($desc, $title);
        $data= title::updateOrCreate([
            'id'=>1,
        ],
        [
            'title'=>$title,
            'desc'=>$desc,
            'background'=>$filename,
           
        ]);
        // title::create($data);
        // dd($data);

                // $show=title::All();
        return back()->with(['title'=>'form updated seccessfully']);
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
     * @param  \App\Http\Requests\StoretitleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretitleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(title $title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetitleRequest  $request
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetitleRequest $request, title $title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(title $title)
    {
        //
    }
}
