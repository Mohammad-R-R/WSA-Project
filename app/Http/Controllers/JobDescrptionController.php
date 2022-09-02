<?php

namespace App\Http\Controllers;

use App\Models\JobDescrption;
use App\Models\Logo;
use App\Models\JobAnnouncement;
use App\Http\Requests\StoreJobDescrptionRequest;
use App\Http\Requests\UpdateJobDescrptionRequest;
use Illuminate\Http\Request;

class JobDescrptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function JobDe($id)
    {

        $id=JobAnnouncement::find($id);
        $logo=Logo::All();

        return view('JobDe',compact('id','logo'));
    }


    public function app(Request $request)
    {

        $validate = $request->validate([
            'subject'=>'required',
            'email'=>'required',
            'position'=>'required',
            'year'=>'required',
            'name'=>'required',
            'content'=>'required',
            'phone'=>'required'
            
            
           
        ]);

        $job_announcements_id=$request->input('forID');
        $subject=$request->input('subject');
        $email	=$request->input('email');
        $position=$request->input('position');
        $phoneNum=$request->input('phone');
        $yearsOfExp=$request->input('year');
        $name=$request->input('name');
        $letter=$request->input('content');

        

        
      
       
        $data=array('job_announcements_id'=>$job_announcements_id,'subject'=>$subject,'email'=>$email,'position'=>$position,
        'phoneNum'=>$phoneNum,'yearsOfExp'=>$yearsOfExp,'name'=>$name,'letter'=>$letter
    
    );

    // dd($data);
    JobDescrption::create($data);
     

        return back()->with(["joo"=>"your applecation sent seccessfully"]);
        

        
    }


    public function ViweJobs($id)
    {

        $dd=JobDescrption::where('job_announcements_id',$id)->get();
        $title=JobAnnouncement::find($id);
        // $count=JobDescrption::where('job_announcements_id',$id)->count();
        // dd($count);
       

        return view('tabledesc',compact('dd','title'));
    }


    public function deleteJobs($id)
    {

        $dd=JobDescrption::where('job_announcements_id',$id)->delete();
        $title=JobAnnouncement::find($id)->delete();
      
       

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
     * @param  \App\Http\Requests\StoreJobDescrptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobDescrptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobDescrption  $jobDescrption
     * @return \Illuminate\Http\Response
     */
    public function show(JobDescrption $jobDescrption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobDescrption  $jobDescrption
     * @return \Illuminate\Http\Response
     */
    public function edit(JobDescrption $jobDescrption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobDescrptionRequest  $request
     * @param  \App\Models\JobDescrption  $jobDescrption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobDescrptionRequest $request, JobDescrption $jobDescrption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobDescrption  $jobDescrption
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobDescrption $jobDescrption)
    {
        //
    }
}
