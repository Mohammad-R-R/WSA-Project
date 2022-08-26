@extends('layout.main')

@section('title')
<title>Details </title>
    
@endsection

@section('body')
<div class="why-us " style="padding-top: 3rem;" data-aos="fade-up">
    <div class="hp">
      <li class="nav-item">
        <a class="nav-link active" href="">Gallery</a>
      </li>
      {{-- <h1>{{$banner->image}}</h1> --}}
      <img src= "{{asset('public/Image/'.$machine->image)}}" class="card-img-top" height="400px" alt="">

      <div class="machine-detals">
        <h3 class="mb-4 pt-5" style="color:#605e7e ;"> machine details </h3>
        <label for="type" class="bold"> type:{{$machine->type}} </label> <br>
        <label for="type" class="bold"> size: {{$machine->size}} </label> <br>
        <label for="type" class="bold"> colors:  {{$machine->color}} </label> <br>
        <label for="type"> <a class="text-decoration-none " href="contact.html">order Now !</a> </label> <br>
      </div>

      <div class="display-6 pb-2 pt-2">
        <h4> Descrption</h4>
      </div>
      <p>{{$machine->desc}}</p>

      

    </div>
  </div>



                  
@endsection