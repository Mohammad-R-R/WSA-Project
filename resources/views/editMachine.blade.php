@extends('layout.admin')

@section('body')

<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Machines Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Machines Form</li>
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
              <div class="card-header">
                <h3 class="card-title">Edit Machines form </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="" action="{{route('editmachineP')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <input type="hidden" value="{{$user->id}}" name="id">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Type</label>
                    <input type="text" value="{{$user->type}}" class="form-control @error('type') is-invalid
                        
                    @enderror" name="type" id="exampleInputPassword1" placeholder="type">
                    @error('type')
                    <div class="alert danger " style="color: brown"> empty feiled</div>
                        
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Size</label>
                    <input type="text" value="{{$user->size}}"  class="form-control   @error('type') is-invalid
                        
                    @enderror" name="size" id="exampleInputPassword1" placeholder="size">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Color</label>
                    <input type="text"  value="{{$user->color}}"class="form-control  @error('type') is-invalid
                        
                    @enderror" name="color" id="exampleInputPassword1" placeholder="color">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Descrption</label>
                  <textarea  class="  @error('type') is-invalid
                        
                  @enderror" name="desc" id="" cols="50" rows="10"> {{$user->desc}}</textarea>
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    {{-- <h1>{{$user->image}}</h1> --}}
                    <div class="input-group">
                      <div class="custom-file">
                        
                        <input type="file" name="machine"  class="custom-file-input  @error('machine') is-invalid
                        
                        @enderror" id="exampleInputFile">

                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                      
                 
                    </div>
                    @error('machine')

                    <small style="color: brown;">Error:upload a machine photo</small>
                        
                    @enderror
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