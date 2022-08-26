@extends('layout.main')


@section('title')
<title>Home </title>
    
@endsection

@section('body')

<div class="bodyy shadow" data-aos="zoom-in">
    <div class="color text-center">
      <div class="center">
        <h3 class="display-6  ">Find your best Banner</h3>
        <p class="rexa">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae odit expedita tempore fugit
          modi non vel explicabo,</p>
        <p class="rexa"> quaerat consectetur maiores eveniet omnis nemo quae. Totam dolor cupiditate repellat ipsam!
        </p>

      </div>

    </div>
  </div>

<div class="slide mt-0 pt-5 pb-5 " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
    <h3 class="text-head pb-5 display-6">Digital ADS</h3>
    <div class="container ">

      <div class="DigitalADS">
        <div>
          <div class="card mx-2">
            <div class="card-body">
              <a href="{{asset('https://www.rexona.com/my/home.html" target="_blank')}}">
              <img src="{{asset('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/bc3022120811707.60b8f26f3d40b.jpg')}}" class="d-block w-100 photo" alt="...">
              </a>
            

            </div>
          </div>
        </div>
        <div>
          <div class="card  mx-2">
            <div class="card-body">
              <a href="https://www.foodpanda.hu/en/chain/cl3lm/pizza-hut" target="_blank">
              <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/f8f70369627481.5b87cd55b949f.png" class="d-block w-100 photo" alt="...">
            </a>

            </div>
          </div>
        </div>
        <div>
          <div class="card  mx-2">
            <div class="card-body">
         
              <a href="https://www.jordan.kfc.me/en/" target="_blank">
              <img src="https://www.inma.org/files/images/blogs/feature_photos/print_september20_hannah_2020-in-ads-1800.jpg" class="d-block w-100 photo" alt="...">
              </a>
            </div>
          </div>
        </div>

        <div>
          <div class="card mx-2">
            <div class="card-body">
              <a href="https://www.bk.com/ " target="_blank">
              <img src="https://i.insider.com/4f0c8843ecad042f0b000013?width=750&format=jpeg&auto=webp" class="d-block w-100 photo" alt="...">
            </a>

            </div>
          </div>
        </div>

        <div>
          <div class="card mx-2">
            <div class="card-body">
              <a href="https://www.ihouse.ps/" target="_blank">
              <img src="https://ihouse.fra1.digitaloceanspaces.com/images/blogs/Y1gOPkBqS1IqlirwfVFqjIj9VMApAgaljWibhWrw.jpg" class="d-block w-100 photo" alt="...">
            </a>
            </div>
          </div>
        </div>

        <div>
          <div class="card mx-2">
            <div class="card-body">
              <a href="https://www.lg.com/us" target="_blank">
              <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/24a48f21396811.593670ca1a895.jpg" class="d-block w-100 photo" alt="...">
            </a>
            </div>
          </div>
        </div>

        <div>
          <div class="card mx-2">
            <div class="card-body">
              <a href="https://www.coca-cola.com/" target="_blank">
              <img src="https://www.researchgate.net/profile/Dunya-Ijam/publication/338375209/figure/fig1/AS:942278470283264@1601668102624/Coca-Cola-advertisement-in-2010.png" class="d-block w-100 photo" alt="...">
            </a>
            </div>
          </div>
        </div>


      </div>
    </div>



  </div>
  <div class="cutter" id="team">
    <h2 class="display-5 mt-5 ">why you have to do a digital banner </h2>
    <h2 class="w-75 m-auto  display-6" style="font-size:larger ; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores consectetur libero
      placeat fugiat, d
      eserunt facere similique
      ducimus ex nobis! Nesciunt repellat excepturi fuga veritatis illo quo animi, veniam perspiciatis!</h2>
     
  </div>
  <div class="Testimonial position-relative" >
    <div class="colored">
      <div class="our-team text-center">
        <h2 class="display-6">Our Team</h2>
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

  </div>
@endsection