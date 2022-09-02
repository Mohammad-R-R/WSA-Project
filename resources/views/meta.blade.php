@extends('layout.admin')

@section('body')

<div class="content-wrapper" style="min-height: 2172px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Meta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
             
              <li class="breadcrumb-item active">Home Meta</li>
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
              @if (session()->has('meta'))
                    
              <div class= "alert alert-success">
                  
                  {{session()->get('meta')}} 
                 
                 </div>
              @endif
              <div class="card-header">
                                <h3 class="card-title">Meta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('metaP')}}" novalidate="novalidate" enctype="multipart/form-data">
                
              @csrf

    
                   <div class="card-body">
                    <div class="form-group">
                     <label for="title">Title</label>
                     <input type="text" name="description" placeholder="description" value="{{$meta->description}}" class="form-control @error('description') is-invalid
                         
                     @enderror">

                     @error('description') 
                         <small style="color: brown">Error: this field is empty</small>
                     @enderror
                      </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">keywords</label>
                    <input type="text" name="keywords" value="{{$meta->keywords}}"  class="form-control @error('keywords') is-invalid
                        
                    @enderror  " id="" placeholder="keywords">
                    <small> <span style="color: brown;font:bold">note:</span> after every keyword put ',' </small>
                    @error('keywords') 
                    <small style="color: brown">Error: this field is empty</small>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="title">author</label>
                    <input type="text" name="author"  value="{{$meta->author}}"  class="form-control @error('author') is-invalid
                        
                    @enderror " placeholder="author">
                         @error('author') 
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