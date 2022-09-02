@extends('layout.main')

@section('title')
<title>Details </title>
    
@endsection


@section('body')
<div class="why-us " style="padding-top: 3rem;" data-aos="fade-up">
    <div class="hp">
      {{-- <h1>{{$banner->image}}</h1> --}}
      <img src= "{{asset('public/Image/'.$banner->image)}}"
        class="card-img-top" height="400px" alt="">

      <div class="banner-detals">
        <h3 class="mb-4 pt-5" style="color:#605e7e ;"> banner details </h3>
        <label for="type" class="bold"> type:{{$banner->type}} </label> <br>
        <label for="type" class="bold"> size: {{$banner->size}} </label> <br>
        <label for="type" class="bold"> colors:  {{$banner->color}} </label> <br>
        <label for="type"> <a class="text-decoration-none " href="{{route('Contactt')}}">order Now !</a> </label> <br>
      </div>

      <div class="display-6 pb-2 pt-2">
        <h4> Descrption</h4>
      </div>
      <p>{{$banner->desc}}</p>

      

    </div>
  </div>



                  
@endsection