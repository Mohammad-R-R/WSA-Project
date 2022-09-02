
@extends('layout.main')


@section('title')
<title>Contact </title>
    


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
                @if (session()->has('message'))
                    
                <div class= "alert alert-success">
                    
                    {{session()->get('message')}} 
                   
                   </div>
                @endif

        <h3 class="mb-4" style="color:#605e7e ; font-size: 1.75rem; font-weight: 500;"> Contact form </h2>
            <div class=" card pb-5 ps-5 pt-3 shadow">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                <div class="form ">
                    <div class="email">

                        <input type="email" name="email" class="form-control @error('email') is-invalid
                            
                        @enderror" placeholder="Email address">
                        @error('email')
                        <div><p style="color:brown">empty field</p></div>
                    @enderror
                    </div>



                    <div class="password">

                        <input type="text" name="name" class="form-control @error('name') is-invalid
                            
                        @enderror" placeholder="Name ">

                        @error('name')
                            <div><p style="color:brown">empty field</p></div>
                        @enderror
                    </div>
                    <div class="phone">

                        <input type="number" name="phoneNum" class="form-control @error('phoneNum') is-invalid
                            
                        @enderror" placeholder="phonenumber ">
                        
                        @error('phoneNum')
                            <div><p style="color:brown">empty field</p></div>
                        @enderror
                    </div>

                    <div class="sutats">

                        <input type="text" name="stauts" class="form-control @error('stauts') is-invalid
                            
                        @enderror" placeholder="stauts ">
                            @error('stauts')
                            <div><p style="color:brown">empty field</p></div>
                        @enderror
                    </div>

                    <div class="content">

                        <textarea class="form-control @error('message') is-invalid
                            
                        @enderror"  id="con" cols="30" name="message" rows="10"
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
            
               
               
                </div>
        </div>
    </div>
</div>
</div>
    

<script> 

    var map = L.map('map').setView([32.100048, 35.049135], 13);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([32.100048,  35.049135]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();
                
                </script>
@endsection