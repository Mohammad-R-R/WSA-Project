@extends('layout.main')


@section('title')
<title>Job Detail </title>
    
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
    <div class="hp">
        <h3 class="mb-4" style="color:#605e7e ; font-size: 1.75rem; font-weight: 500;"> Job application form
            </h3>
            @if (session()->has('joo'))
                    
            <div class= "alert alert-success">
                
              {{session()->get('joo')}} 
               
               </div>
            @endif
            <div class=" card pb-5 ps-5 pt-3 shadow">
                <div class="form ">
                    <form action="{{route('application')}}" method="post">
                        @csrf
                        <div class="subject">
                           
                            <input type="text" name="forID" hidden value="{{$id->id}}" class="subject" placeholder="subject">
                        </div>
                        <div class="subject">

                            <input type="text" name="subject" class=" form-control subject @error('subject') is-invalid
                                
                            @enderror" placeholder="subject">
                        </div>
                        <div class="email">

                            <input type="email" name="email" class="form-control @error('email') is-invalid
                                
                            @enderror" placeholder="Email address">
                        </div>

                        <div class="position">
                                <div> <input type="text" name="position" class=" form-control position @error('position') is-invalid
                                
                                    @enderror" placeholder="position"></div>
                           
                       
                        </div>

                        <div class="phone">

                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid
                                
                            @enderror" placeholder="Phone number">
                        </div>

                        <div class="year">

                            <input type="number" name="year" class="form-control @error('year') is-invalid
                                
                            @enderror" placeholder="years of experince ">
                        </div>

                        <div class="name">

                            <input type="text" name="name" class="form-control @error('name') is-invalid
                                
                            @enderror" placeholder=" Name">
                        </div>

                        <div class="content">

                            <textarea class="form-control @error('content') is-invalid
                                
                            @enderror" name="content" id="con" cols="30" rows="10"
                                placeholder=" why should we hire you  "></textarea>
                        </div>
                        <div class="btn w-100 border-0">
                            <button type="submit"
                                style=" height: 40px ; background-color: #ec296b; border: none; color: white ;  border-radius: 5px; "
                                class=""> Send a message</button>
                        </div>
                </div>
            </div>


            </form>
    </div>
</div>
    
@endsection