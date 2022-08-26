
@extends('layout.main')


@section('title')
<title>Contact </title>
    
@endsection

@section('body')

<div class="body-about shadow" data-aos="zoom-in">
    <div class="color text-center">
        <div class="center">
            <h1 class="" style="font-weight: 400;">Contact</h1>


        </div>

    </div>
</div>


<div class="why-us " style="padding-top: 3rem;" data-aos="fade-up">
    <div class="hp">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class= "alert alert-success">
                     {{session()->get('message')}} 
                    
                    </div>
        <h3 class="mb-4" style="color:#605e7e ; font-size: 1.75rem; font-weight: 500;"> Contact form </h2>
            <div class=" card pb-5 ps-5 pt-3 shadow">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                <div class="form ">
                    <div class="email">

                        <input type="email" name="email" class="email" placeholder="Email address">
                    </div>



                    <div class="password">

                        <input type="text" name="name" class="text" placeholder="Name ">
                    </div>
                    <div class="phone">

                        <input type="number" name="phoneNum" class="text" placeholder="phonenumber ">
                    </div>

                    <div class="sutats">

                        <input type="text" name="stauts" class="text" placeholder="stauts ">
                    </div>

                    <div class="content">

                        <textarea class="textarea"  id="con" cols="30" name="message" rows="10"
                            placeholder=" Message "></textarea>
                    </div>
                    <div class="btn w-100 border-0">
                        <button type="submit"
                            style=" height: 40px ; background-color: #ec296b; border: none; color: white ;  border-radius: 5px; "
                            class=""> Send a message</button>
                    </div>
                </div>
            </form>
            </div>


        </div>
        <div class="col-12 col-md-6 ">
            <div class="mapp shadow">



                <div id="map"></div>
            
               
                <script
                  src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly')}}"
                  defer
                ></script>
                </div>
        </div>
    </div>
</div>
</div>
    
@endsection