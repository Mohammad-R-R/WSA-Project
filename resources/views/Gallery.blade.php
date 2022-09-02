@extends('layout.main')

{{-- <h1>ds;,vlsmdcms;dcm;sam;c </h1> --}}
@section('title')
<title>Gallery</title>
    
@endsection




@section('body')

<div class="body-about shadow" data-aos="zoom-in">
  <div class="color text-center">
      <div class="center">
          <h1 class="" style="font-weight: 400;">Gallery</h1>
          <div class="gtxt">
              <a class="text-decoration-none  gtxt" href="#bannerr"> Banner Gallery</a>/ <a
                  class="text-decoration-none  gtxt" href="#machineee">Machine Gallery</a>
          </div>

      </div>

  </div>
</div>

<div class="why-us " style="padding-top: 3rem;" data-aos="fade-up">
  <div class="hp">
      <div class="display-6" id="bannerr">
          <h2>Banners Gallery</h2>
      </div>
      <h1 class="mb-4 " style="color:#605e7e ;"> </h1>
      <div class="card w-100 shadow">
          <div class="card-body">
              <div class="row">

                @foreach ($data as $item)
                    
                

                  <div class="col-md-4 col-12 mb-1 ">
                      <a href="detail/{{$item->id}}">
                          <img class="card-img-top zoom-out"
                              src="public/Image/{{$item->image}}" alt="nothin">

                      </a>
                  </div>

                  @endforeach

               

                
              </div>

          </div>
      </div>



  </div>

  <div class="hp pt-5">
      <div class="display-6" id="machineee">
          <h2>Machines Gallery</h2>
      </div>
      <h1 class="mb-4 " style="color:#605e7e ;"> </h1>
      <div class="card w-100 shadow">
          <div class="card-body">
              <div class="row">

                @foreach ($Machinedata as $i)
                    
                

                  <div class="col-12 col-md-4 mb-1">
                      <a href="MDetail/{{$i->id}}">
                          <img class="card-img-top zoom-out"
                              src="public/Image/{{$i->image}}"  alt="">

                      </a>
                  </div>
                  @endforeach

                 
              </div>

          </div>
      </div>



  </div>
</div>

@endsection