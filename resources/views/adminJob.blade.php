@extends('layout.admin')


@section('body')
<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            
          <div class="col-sm-6">
            <h1>anounnce a job</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('jobtable')}}" class="btn btn-info">jobs table</a></li>
              <li class="breadcrumb-item active">anounnce a job</li>
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
            <div class="card-header">
              @if (session()->has('job'))
                    
              <div class= "alert alert-success">
                  
                  {{session()->get('job')}} 
                 
                 </div>
              @endif
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
          
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('jobinfoP')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control @error('title')
                    
                        
                    @enderror" id="exampleInputEmail1" placeholder="Job Title">

                    @error('title') <p style="color: brown">empty feild</p> @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">job Descrption</label>
                  <textarea name="desc" id="JObdesc" class="@error('desc')
                      
                  @enderror" cols="30" rows="10" placeholder="job descrption"></textarea>
                  @error('desc') <p style="color: brown">empty feild</p> @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="jobPhoto" class="custom-file-input @error('jobPhoto')
                            
                        @enderror" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                     
                      </div>
                     
                    </div>
                    @error('jobPhoto') <p style="color: brown">No photo was selected</p> @enderror
                  </div>
             
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
     

          </div>
      
        </div>
  
      </div>
    </section>

  </div>

    
@endsection