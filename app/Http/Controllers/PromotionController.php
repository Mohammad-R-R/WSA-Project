<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use App\Http\Requests\StorepromotionRequest;
use App\Http\Requests\UpdatepromotionRequest;
use Illuminate\Http\Request;


class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d=promotion::All();

        return view('prom',compact('d'));
    }

    public function promP(Request $request)

    {
        $validate = $request->validate([
            'title'=>'required',
            'desc'=>'required',
           
        ]);

        $title=$request->input('title');
        $desc=$request->input('desc');
        $data= promotion::updateOrCreate([
            'id'=>1,
        ],
        [
            'title'=>$title,
            'desc'=>$desc,
            
           
        ]);

        // $data=array('title'=>$title,'desc'=>$desc);
        // promotion::create($data);


       return back();
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
     * @param  \App\Http\Requests\StorepromotionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepromotionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(promotion $promotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepromotionRequest  $request
     * @param  \App\Models\promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepromotionRequest $request, promotion $promotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(promotion $promotion)
    {
        //
    }
}
