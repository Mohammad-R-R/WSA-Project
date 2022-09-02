@extends('layout.admin')

@section('body')

<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Footer Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Footer Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                  @if (session()->has('footer'))
                    
              <div class= "alert alert-success">
                  
                  {{session()->get('footer')}} 
                 
                 </div>
              @endif
              <div class="card-header">
                <h3 class="card-title">Footer Form </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('footerP')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                
              
                  <div class="form-group">
                    <label for="exampleInputPassword1">About us</label>
                    <input type="text" value="{{$footer->desc}}" class="form-control @error('desc') is-invalid
                       
                    @enderror" name="desc"  id="exampleInputPassword1" placeholder="About us">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" value="{{$footer->address}}" class="form-control @error('address') is-invalid
                        
                    @enderror" name="address" id="exampleInputPassword1" placeholder="Address">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" value="{{$footer->email}}" class="form-control  @error('email') is-invalid
                        
                    @enderror" name="email" id="exampleInputPassword1" placeholder="Email">
                  </div>


                  
                 
                  
                </div>
              

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
              </form>
            </div>
           

          </div>
     
        </div>
        
     
      </div>
    </section>
    
  </div>

  
    
@endsection