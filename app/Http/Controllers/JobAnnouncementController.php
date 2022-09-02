<?php

namespace App\Http\Controllers;

use App\Models\JobAnnouncement;
use App\Models\JobDescrption;
use App\Models\Logo;
use App\Http\Requests\StoreJobAnnouncementRequest;
use App\Http\Requests\UpdateJobAnnouncementRequest;
use Illuminate\Http\Request;

class JobAnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Job()
    {

   

        return view('Job');
    }


    public function jobinfo( )
    {
        return view('adminJob');
    }

    
    public function jobinfoP(Request $request )
    {
        $validate = $request->validate([
            'jobPhoto'=>'required|mimes:webp,jpeg,jpg,png,gif',
            'desc'=>'required',
            'title'=>'required'
            
        ]);
        
        $imge=$request->file('jobPhoto');
        $jobDesc=$request->input('desc');
        $title=$request->input('title');
      

        
        
        if($request->file('jobPhoto')){
            $file= $request->file('jobPhoto');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['jobPhoto']= $filename;
            
        }
       
        $data=array('jobDesc'=>$jobDesc,'title'=>$title,'photo'=>$filename);
        // dd($data);
        JobAnnouncement::create($data);
     

        return back()->with(['job'=>"Created seccessfully"]);
        // return view('adminJob');
    }

    public function jobView()
    {
        $view= JobAnnouncement::All();
        $logo= Logo::All();
        
         return view('job',compact('view','logo'));
    }

    public function jobtable()
    {           $view= JobAnnouncement::All();
        // $count=JobDescrption::where('job_announcements_id',$id)->count();
        return view('jobtable',compact('view'));
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
     * @param  \App\Http\Requests\StoreJobAnnouncementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobAnnouncementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobAnnouncement  $jobAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function show(JobAnnouncement $jobAnnouncement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobAnnouncement  $jobAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function edit(JobAnnouncement $jobAnnouncement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobAnnouncementRequest  $request
     * @param  \App\Models\JobAnnouncement  $jobAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobAnnouncementRequest $request, JobAnnouncement $jobAnnouncement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobAnnouncement  $jobAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobAnnouncement $jobAnnouncement)
    {
        //
    }
}
