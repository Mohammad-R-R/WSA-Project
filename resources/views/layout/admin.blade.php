<html lang="en" style="height: auto;">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style">
</style>
<style lang="en" type="text/css" id="dark-mode-native-style">
</style>
<style lang="en" type="text/css" id="dark-mode-native-sheet">
</style>
<head>
  <link rel="stylesheet" href="{{asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href=" {{asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}} ">
  <link rel="stylesheet" href="{{asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('../../dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

</head>
<body class="sidebar-mini" style="height: auto" data-new-gr-c-s-check-loaded="14.1075.0" data-gr-ext-installed="">







  <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
  <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
  <style lang="en" type="text/css" id="dark-mode-custom-style">
  </style><style lang="en" type="text/css" id="dark-mode-native-style">
  </style><style lang="en" type="text/css" id="dark-mode-native-sheet">
  </style>

  
  
  
  
  
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <style lang="en" type="text/css" id="dark-mode-custom-style">
    </style>
    <style lang="en" type="text/css" id="dark-mode-native-style">
    </style>

    <style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
    
    
    
    
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> User Profile</title>
    
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    
    
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
         

        

         


          
        
          <li class="nav-item d-none d-sm-inline-block">

            {{-- <form action="{{route('Logout')}}" method="post">
              <button class="" type="submit">Logout</button>
            </form>
             --}}
          </li>
        </ul>
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
    
    
          <!-- Notifications Dropdown Menu -->
        
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        {{-- <a href="{../../index3.html}" class="brand-link">
          <img src="{{asset('')}}../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a> --}}
    
        <!-- Sidebar -->
        <div class="sidebar">
          {{-- <h1 style="color: aliceblue">WSA</h1> --}}
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ url('public/Image/'.Auth::user()->image) }}"class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="{{route('admin')}}" class="d-block">{{Auth::user()->name}}</a>
            </div>
          </div>
  
          
    
          <!-- SidebarSearch Form -->
          {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
          </div> --}}
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

              

              <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                  
                  <p>
                    Home 
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li >
                    {{-- <a href="{{route('The-Home')}}" class="nav-link">Home </a> --}}
                    <a href="{{route('Htitle')}}" class="nav-link">Change Title and Background  </a>
                    <a href="{{route('slideshow')}}" class="nav-link">Slide show photos </a>
                    <a href="{{route('slideshowtable')}}" class="nav-link">Slide show Table </a>
                    
                  </li>
                  
                </ul>
              </li>
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Profile
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li>  <a href="{{route('admin')}}" class="nav-link">Profile</a></li>
                  
                  
                </ul>
              </li>

              <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                 
                  <p>
                    Gallery
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  
                  <li >
                    
                    <a href="{{route('add-banner')}}" class="nav-link">add banner </a>
                  </li>
                  <li >
                    <a href="{{route('bannersca')}}" class="nav-link">banner scaaduchle </a>
                  </li>
                  <li >
                    <a href="{{route('machineView')}}" class="nav-link">add Machine </a>
                  </li>
                  <li >
                    <a href="{{route('machinesca')}}" class="nav-link">Machine scaaduchle </a>
                  </li>
                  
                </ul>
              </li>


              <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
               
                  <p>
                    Contact
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li >
                    <a href="{{route('conad')}}" class="nav-link">Contact </a>
                  </li>
                  
                </ul>
              </li>



              <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                  
                  <p>
                    About us 
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li >
                    <a href="{{route('about')}}" class="nav-link">About us </a>
                  </li>
                  
                </ul>
              </li>


              <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                  
                  <p>
                    Job Announcement
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  <li >
                    <a href="{{route('jobinfo')}}" class="nav-link">add a Job Announcement</a>
                  </li>

                  <li >
                    <a href="{{route('jobtable')}}" class="nav-link">Job Show</a>
                  </li>
                  
                </ul>
              </li>


              <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                 
                  <p>
                    Settings
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                  
                  <li >
                    
                    <a href="{{route('logo')}}" class="nav-link">Add Logo </a>
                  </li>
                  <li >
                    <a href="{{route('meta')}}" class="nav-link">Change metas </a>
                  </li>
                  <li >
                    <a href="{{route('footer')}}" class="nav-link">change footer </a>
                  </li>
                  {{-- <li >
                    <a href="{{route('machineView')}}" class="nav-link">add Machine </a>
                  </li> --}}
                  
                </ul>
              </li>

              
              <li class="nmav-ite ">
                @auth
                  
                <li class="nav-item ">
                  <a class="nav-link "  onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                      Logout
                  </a>    
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                      {{ csrf_field() }}
                  </form>
                </li>
                @endauth()
        
              </li>
              
           
              
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
   @yield('body')
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">

        </div>
      </strong> All rights reserved.
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark" style="display: none;">
        <!-- Control sidebar content goes here -->
      <!-- /.control-sidebar -->
    <div id="sidebar-overlay"></div></div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="{{asset('../../plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('../../dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('../../dist/js/demo.js')}}"></script>

<script src="{{asset('../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('../../plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('../../plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('../../plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('../../plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('../../plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('../../plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('../../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
  $('#myTable').DataTable();
} );</script>
    </body>
    </html>