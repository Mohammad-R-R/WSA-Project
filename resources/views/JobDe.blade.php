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
            </h2>
            <div class=" card pb-5 ps-5 pt-3 shadow">
                <div class="form ">
                    <form action="{{route('application')}}" method="post">
                        @csrf
                        <div class="subject">
                           
                            <input type="text" name="forID" hidden value="{{$id->id}}" class="subject" placeholder="subject">
                        </div>
                        <div class="subject">

                            <input type="text" name="subject" class="subject" placeholder="subject">
                        </div>
                        <div class="email">

                            <input type="email" name="email" class="email" placeholder="Email address">
                        </div>

                        <div class="position">

                            <input type="text" name="position" class="position" placeholder="position">
                        </div>

                        <div class="phone">

                            <input type="tel" name="phone" class="phone" placeholder="Phone number">
                        </div>

                        <div class="year">

                            <input type="number" name="year" class="year" placeholder="years of experince ">
                        </div>

                        <div class="name">

                            <input type="text" name="name" class="name" placeholder=" Name">
                        </div>

                        <div class="content">

                            <textarea class="textarea" name="content" id="con" cols="30" rows="10"
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