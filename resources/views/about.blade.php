@extends('layout.main')

@section('title')
<title>About Us </title>
    
@endsection
@section('css')
  <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
    
@endsection



@section('body')
<div class="body-about shadow" data-aos="zoom-in">
  <div class="color text-center">
    <div class="center">
      <h1 class="" style="font-weight: 400;">About Us</h1>


    </div>

  </div>
</div>


<div class="why-us " style="padding-top: 3rem;" data-aos="fade-up">
  <div class="hp">
    <h1 class="mb-4 " style="color:#605e7e ;"> Why WSA ? </h1>

    <p>{{$data[0]->desc}}</p>

    

  </div>
</div>

</div>
@endsection