<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
    public function logout()
    {

        session_destroy();

        return redirect()->route('admin');
        
    
    }

    public function home()
    {



        return view('home2');
    }


    public function update(Request $request)
    {
       $user = Auth::user();
       $user->update(['name'=>$request->name,
       
       'email'=>$request->email,

       'password'=>Hash::make($request->password)
    ]);

    $user->save();

        return back()->with(['message'=>'success!']);

    
    }

    public function contact()
    {
        
        return view('contactAdmin');
    }

}
