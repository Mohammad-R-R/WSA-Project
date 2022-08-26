@extends('layout.main')


@section('title')
<title>Job Announcement </title>
    
@endsection

@section('body')


<div class="body-about shadow" data-aos="zoom-in">
    <div class="color text-center">
        <div class="center">
            <h1 class="" style="font-weight: 400;">Job application</h1>


        </div>

    </div>
</div>


<div class="why-us " style="padding-top: 3rem;" data-aos="fade-up">
    <div class="hp2">
        <h3 class="mb-4" style="color:#605e7e ; font-size: 1.75rem; font-weight: 500;"> Job application form
            </h2>
        @foreach ($view as $i)
            
       
            <div class=" card pb-5 ps-5 pt-3 shadow mb-2">
                <div class="card-body">
                    <div class="row ">

                        <div class="col-md-6 col-12">
                            <div>
                                <h3>{{$i->title}}</h3>
                                <img class="card-img-top "
                                    src="public/Image/{{$i->photo}}"
                                    alt="">
                            </div>


                        </div>

                        <div class="col-md-6 col-12">
                            <h2>Job Descrption</h2>
                            <p>{{$i->jobDesc}}</p>
                         

                            <div class="apply w-50 m-auto">

                                <a href="Job-Title/{{$i->id}}" class="btn btn-danger">Apply</a>
                                
                            </div>
                        </div>
                    </div>






                </div>



            </div>

            @endforeach







    </div>



</div>
    
@endsection