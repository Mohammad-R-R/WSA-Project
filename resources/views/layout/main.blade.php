<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('assets/aos-master/dist/aos.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-5.2.0-dist/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/slick-1.8.1/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/slick-1.8.1/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free-6.1.2-web/css/all.min.css')}}">
  @yield('css')
  <link rel="shortcut icon"
    href="{{asset('assets/images/wsa_logo.jpg')}}">

 @yield('title');
</head>

<body>

  <div class="all ">

    <nav class="navbar navbar-expand-lg  shadow" id="navv">
      <div class="container-fluid ">
        <a class="navbar-brand" href="{{asset('/')}}"><img style="height: 50px;" src="{{asset('assets/images/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{asset('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{asset('AbousUs')}}">Abous Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{asset('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{asset('Gallery')}}">Gallery</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="{{asset('Job')}}">Job announcement</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      @yield('body')

   



    <footer class="footer  ">
      <div class="card  border-0 ">
        <div class="body-card cardyy ">
          <div class="container">
            <div class="row mt-4  p-lg-5 " style="background-color: transparent;">
              <div class="col-12  h-100 col-md-3 ">
                <h4 class="text-white">About us</h4>
                <hr style="background-color:#ec296b ; min-height: 4px; color: #ec296b;" class="w-50 ">
                <p class="text-white ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At nemo dolores culpa.
                  Sit id fugiat esse,
                  consectetur consequuntur nemo dicta cum soluta.
                  Fuga ea facilis vitae amet expedita quibusdam cupiditate.</p>
              </div>

              <div class="col-md-3 col-12  h-100  ">
                <h4 class="text-white">Our servcies</h4>
                <hr style="background-color:#ec296b ; min-height: 4px; color: #ec296b;" class="w-50 ">
                <ul class="list-unstyled  serv">
                  <li> <a class="text-decoration-none  " href="/#team">Our Team</a> </li>
                  <li> <a class="text-decoration-none " href="contact">Contact Us</a></li>
                  <li><a class="text-decoration-none " href="AbousUs">About</a></li>
                  

                </ul>
              </div>


              <div class="     col-md-3 col-12  h-100  ">
                <h4 class="text-white">Contact</h4>
                <hr style="background-color:#ec296b ; min-height: 4px; color: #ec296b;" class="w-50 ">

                <div class="fa-address first" style="display: inline-flex;"> <i class="fa-solid fa-house-user "
                    style="color: #ec296b;">
                  </i>
                  <address class="serv text-white"> al_zawyah-salfeet </address>
                </div>

                <div class="first "> <i class="fa-solid fa-envelope" style="color: #ec296b; padding-right: 10px;"></i>
                  <p class="emo serv text-white">mo.rd@hotmail.com</p>
                </div>





              </div>


      


            </div>

          </div>
        </div>

        <div class="foot" style="background:#373346 ;">
          <hr style="color:#ec296b ; height: 5px;" class="text-muted">
          <p class="text-muted"> Copyright ©<?php echo date('Y') ?>. Designed with <i class="fa-solid fa-heart"
              style="color: #ec296b;"></i> by <span style="color:#ec296b ;">Mohammad Raddad</span></p>
        </div>
    </footer>





    <!-- <script src="assets/plugins/bootstrap-5.2.0-dist/js/bootstrap.js"></script> -->
    <!-- <script src="assets/plugins/slick-1.8.1/slick/slick.js"></script> -->
    <script src="{{asset('assets/js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('assets/plugins/slick-1.8.1/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-5.2.0-dist/js/bootstrap.bundle.js')}}"></script>
    <!-- <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script> -->
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/aos-master/dist/aos.js')}}"></script>
    <script src="{{asset('assets/js/home.js')}}"></script>
</body>

</html>