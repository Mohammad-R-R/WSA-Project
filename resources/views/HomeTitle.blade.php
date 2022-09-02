@extends('layout.admin')

@section('body')

<div class="content-wrapper" style="min-height: 2172px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>title</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
             
              <li class="breadcrumb-item active">Home Title</li>
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
            <!-- jquery validation -->
            <div class="card card-primary">
              @if (session()->has('title'))
              <div class= "alert alert-success"> {{session()->get('title')}}</div>
          @endif
              <div class="card-header">
                                <h3 class="card-title">Title</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="POST" action="HtitleP" novalidate="novalidate" enctype="multipart/form-data">
                
                @csrf
            

    
                   <div class="card-body">
                    <div class="form-group">
                     <label for="title">Title</label>
                     <input type="text" name="title" value="{{$data->title}}" class="form-control @error('title') is-invalid
                         
                     @enderror">

                     @error('title')
                     <small style="color: brown">Error: this field is empty</small>                         
                     @enderror
                      </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">small Descrpition</label>
                    <input type="text" name="desc" value="{{$data->desc}}" class="form-control @error('desc') is-invalid
                        
                    @enderror " id="" placeholder="link">

                    @error('desc')
                     <small style="color: brown">Error: this field is empty</small>                         
                     @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Background</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="background" value="{{$data->background}}" class="custom-file-input  @error('background') is-invalid
                        
                        @enderror" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    @error('background')
                    <small style="color: brown">Error: this field is empty</small>                         
                    @enderror
                  </div>
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
@endsection