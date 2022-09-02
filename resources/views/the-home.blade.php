@extends('layout.admin')

@section('body')

<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div>

        </div>

      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Home page Editor </h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" method="POST" action="{{route('creatHome')}}" novalidate="novalidate" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Title</label>
                    <input type="text" name="title" class="form-control @error('title')
                        
                    @enderror" id="exampleInputEmail1" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Title Descrptition</label>
                    <textarea name="desc" id="" class="@error('desc')
                        
                    @enderror" cols="30" rows="10"></textarea>
                  </div>


            

                  <div class="form-group">
                    <label for="exampleInputFile">Background image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="background" class="custom-file-input @error('background')
                            
                        @enderror" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">ads Title</label>
                    <input type="text" name="ads-title" class="form-control  @error('ads-title')   
                    @enderror" id="exampleInputEmail1" >
                  </div>

                 

                  <div class="form-group">
                    <label for="exampleInputFile">slide show image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="images" class="custom-file-input @error('images')
                            
                        @enderror" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">slide show image link</label>
                    <input type="text" name="link" class="form-control @error('link')   
                    @enderror" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">prom</label>
                    <input type="text" name="prom" class="form-control @error('prom')   
                    @enderror" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Prom Descrptition</label>
                    <textarea name="prom_desc" id="" class="@error('prom_desc')   
                    @enderror" cols="30" rows="10"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">slide show title</label>
                    <input type="text" name="our" class="form-control @error('our')   
                    @enderror" id="exampleInputEmail1" >
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputFile">team images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="team_images" class="custom-file-input @error('team_images')
                            
                        @enderror" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">position</label>
                    <input type="text" name="position" class="form-control @error('position')   
                    @enderror" id="exampleInputEmail1" >
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Member Descrption</label>
                    <input type="text" name="member_desc" class="form-control @error('member_desc')   
                    @enderror" id="exampleInputEmail1" >
                  </div>


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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    
@endsection