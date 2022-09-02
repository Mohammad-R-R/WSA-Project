@extends('layout.admin')

@section('body')
<div class="content-wrapper" style="min-height: 2172px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Logo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
             
              <li class="breadcrumb-item active">Logo</li>
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
              
              @if (session()->has('logosuccess'))
              <div class= "alert alert-success"> {{session()->get('logosuccess')}}</div>
          @endif
              <div class="card-header">
                                <h3 class="card-title">Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="POST" action="{{route('logoP')}}" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                     <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">select your Logo</label>
                        <div class="input-group">
                          <div class="custom-file"> 
                            <input type="file" name="logoo" class="custom-file-input @error('logoo') is-invalid
                                 
                            @enderror " id="exampleInputFile">
                           
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                    
                        </div>
                        @error('logoo')
                        <small style="color: brown">Error: this field is empty</small>
                                 
                            @enderror
                      </div>

                 
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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