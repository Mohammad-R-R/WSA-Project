<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Logo;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        return view('home');
    }
    // public function logout()
    // {

    //     session_destroy();

    //     return redirect()->route('admin');
        
    
    // }

    public function home()
    {

       $logo= Logo::All();




        return view('home2',compact('logo'));
    }


    public function update(Request $request)
    {

       


        $validate = $request->validate([
            'oldpassword'=>'required',
            'password'=>'required',
            'name'=>'required',
            
        ]);
       $user = Auth::user();
       $pass=$user->password;
       $oldpass= hash::make( $request->oldpassword);
       $user->update(['name'=>$request->name,
       
       'email'=>$request->email,
       

   

       
    ]);
    if(Hash::check(request('oldpassword'), $user->password) ){
       
        $user->update(['password'=>Hash::make($request->password)]);
    }else{

        return back()->with(['error'=>'old password wrong ']);
    }

    

    $user->save();

        return back()->with(['message'=>'success!']);

    
    }

    public function contact()
    {
        
        return view('contactAdmin');
    }

}
