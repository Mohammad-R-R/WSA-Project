@extends('layout.main')


@section('title')
<title>Home </title>
    
@endsection



@section('body')

<div class="bodyy shadow" style="background: url('public/Image/{{$title->background}}') center center fixed no-repeat;" data-aos="zoom-in">
    <div class="color text-center">
      <div class="center">
        <h3 class="display-6  ">{{$title->title}}</h3>
        <p class="rexa">{{$title->desc}}</p>
       

      </div>

    </div>
  </div>

<div class="slide mt-0 pt-5 pb-5 " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
    <h3 class="text-head pb-5 display-6">Digital ADS</h3>
    <div class="container ">

      <div class="DigitalADS">
        @foreach ($x as $xx)
            
        
        <div>
          <div class="card mx-2">
            <div class="card-body">
              <a href="{{$xx->image_link}}" target=”_blank” >
              <img src= "{{asset('public/Image/'.$xx->image)}}" class="d-block w-100 photo" alt="...">
              </a>
            

            </div>
          </div>
        </div>
        @endforeach
       

      </div>
    </div>



  </div>
  <div class="cutter" id="team">
    <h2 class="display-5 mt-5 ">{{$prom->title}} </h2>
    <h2 class="w-75 m-auto  display-6" style="font-size:larger ; ">{{$prom->desc}}</h2>
     
  </div>
  {{-- <div class="Testimonial position-relative" >
    <div class="colored">
      <div class="our-team text-center">
        <h2 class="display-6" style="color: azure;">Our Team</h2>
      </div>
      <div id="carouselExampleDark" class="carousel carousel-dark slide2 " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="active"
            aria-current="true" aria-label="Slide 2"></button>

        </div>
        <div class="carousel-inner" >
          <div class="carousel-item active" data-bs-interval="1000">
            <div class="">
              <div class="card-body staff">


                <img class="rounded-circle imgg"
                  src="https://i1.sndcdn.com/avatars-vCLFdHHkjjPkBLXv-LiEiHQ-t500x500.jpg" alt="...">

                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-white" >First slide label</h5>
                  <p class="text-white" >Some representative placeholder content for the first slide.</p>
                </div>

              </div>
            </div>
          </div>

          <div class="carousel-item " data-bs-interval="20000">
            <div class="">
              <div class="card-body staff">


                <img class="rounded-circle imgg"
                  src="https://1vw4gb3u6ymm1ev2sp2nlcxf-wpengine.netdna-ssl.com/wp-content/uploads/shutterstock_149962697-946x658.jpg"
                  alt="...">

                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-white">CEO</h5>
                  <p   class="text-white">Some representative placeholder content for the first slide.</p>
                </div>

              </div>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </div> --}}
@endsection