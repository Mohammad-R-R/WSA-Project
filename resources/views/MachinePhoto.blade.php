@extends('layout.admin')


@section('body')

<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Machine Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Machine Form</li>
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
              @if (session()->has('doneM'))
                    
              <div class= "alert alert-success">
                  
                  {{session()->get('doneM')}} 
                 
                 </div>
              @endif
              <div class="card-header">
                <h3 class="card-title">Machine Form </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('Pmachine')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  @error('type')
                  @error('size')
                  <div class="error"> <h1 style="color: brown;">there's an empty feilds</h1> </div>
                  @enderror
                      
                  @enderror
              
                  <div class="form-group">
                    <label for="exampleInputPassword1">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid
                       
                    @enderror" name="type" id="exampleInputPassword1" placeholder="type">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Size</label>
                    <input type="text" class="form-control @error('size') is-invalid
                        
                    @enderror" name="size" id="exampleInputPassword1" placeholder="size">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Color</label>
                    <input type="text" class="form-control  @error('color') is-invalid
                        
                    @enderror" name="color" id="exampleInputPassword1" placeholder="color">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Descrption</label>
                  <textarea name="desc" class="@error('desc') is-invalid
                      
                  @enderror" id="" cols="50" rows="10"></textarea>
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="machine" class="custom-file-input @error('machine')
                            
                        @enderror" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
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