

@extends('layout.admin')

@section('body')

<div class="content-wrapper" style="min-height: 2850px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">
                @auth
                  
                <li class="nav-item border-start me-1 px-2">
                  <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                      Logout
                  </a>    
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
                @endauth()</li>
              {{-- <li class="breadcrumb-item"><form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit">logout</button>
              </form></li> --}}
         
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ url('public/Image/'.Auth::user()->image) }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  
                  
                  
                </ul>

                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="imagea">
                      <label><h4>Add image</h4></label>
                      <input type="file" class="form-control" required name="image">
                    </div>
                    <button type="submit">upload photo</button>
                
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>

          <div class="col-md-8">
          <div class="card card-primary">

            @if (session()->has('message'))
                <div class= "alert alert-success"> {{session()->get('message')}}</div>
            @endif
          
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('profile.update')}}"  method="post">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{Auth::user()->email}}" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputEmail1"  placeholder="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">name</label>
                  <input type="text" class="form-control "  name="name" id="exampleInputPassword1" value="{{Auth::user()->name}}" placeholder="Password">
                </div>
             
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
@endsection





