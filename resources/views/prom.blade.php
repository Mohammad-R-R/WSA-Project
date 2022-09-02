@extends('layout.admin')

@section('body')
<div class="content-wrapper" style="min-height: 2172px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>promotion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
             
              <li class="breadcrumb-item active">promotion</li>
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
              <div class="card-header">
                                <h3 class="card-title">promotion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="promP" novalidate="novalidate" enctype="multipart/form-data">
                
                <input type="hidden" name="_token" value="VeAClKPgMOxqUdDwA70Cy0LljivlC7JUFcF6FTFB">            

    
                   <div class="card-body">
                    <div class="form-group">
                     <label for="title"> promotion Title</label>
                     <input type="text" name="title" value='{{$d[0]->title}}' class="form-control @error('title') is-invalid
                         
                     @enderror ">
                      </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">promotion Descrpition</label>
                    <input type="text" name="desc"   value='{{$d[0]->desc}}' class="form-control @error('desc') is-invalid
                        
                    @enderror " id="">
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