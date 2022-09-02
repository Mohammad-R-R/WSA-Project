<?php

namespace App\Http\Controllers;

use App\Models\meta;
use App\Http\Requests\StoremetaRequest;
use App\Http\Requests\UpdatemetaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function meta()
    {

        $meta=meta::first();

       return view('meta',compact('meta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function metaP(Request $request)
    {
        $validate = $request->validate([
            'description'=>'required',
            'keywords'=>'required',
            'author'=>'required'
          
           
        ]);
        $description= $request->input('description');
        $keywords= $request->input('keywords');
        $author = $request->input('author');

        Cache::forget('meta');

        meta::updateOrCreate([
            'id'=>'1',],
            [
            'description'=>$description,
            'keywords'=>$keywords,
            'author'=>$author
        ]);
           

        return back()->with(['meta'=>'success']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremetaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show(meta $meta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit(meta $meta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemetaRequest  $request
     * @param  \App\Models\meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemetaRequest $request, meta $meta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(meta $meta)
    {
        //
    }
}
