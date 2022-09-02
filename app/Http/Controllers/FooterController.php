<?php namespace App\Http\Controllers;

use App\Models\footer;
use App\Http\Requests\StoreAUserRequest;
use App\Http\Requests\UpdateAUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;




class FooterController extends Controller
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

        $footer=footer::first();

     

        return view('footer',compact('footer'));
    }

  
    public function footerP(Request $request)
    {
        $validate = $request->validate([
          
            'desc'=>'required',
            'address'=>'required',
            'email'=>'required'
        ]);
        Cache::forget('footer');

        $data= footer::updateOrCreate([
            'id'=>1,
        ],[
            'desc'=>$request->desc,
            'address'=>$request->address,
            'email'=>$request->email,
        ]);

        // dd($data);
       
        return back()->with(['footer'=>'updated seccessfully']);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function f()
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
