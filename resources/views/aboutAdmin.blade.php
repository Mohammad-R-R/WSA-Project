@extends('layout.admin')

@section('body')


<div class="content-wrapper" style="min-height: 1629px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        {{-- <script> alert(jQuery.fn.jquery); console.log(jQuery.fn.jquery)</script> --}}

        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>WSA Description</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            @if (session()->has('about'))
                    
            <div class= "alert alert-success">
                
                {{session()->get('about')}} 
               
               </div>
            @endif
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form action="{{route('aboutP')}}" method="post">
                @csrf
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" name="dec" class="form-control @error('dec')
                    
                @enderror" rows="10" placeholder="write you decrption" > {{$data->desc}} </textarea>
              </div>

              <button type="submit" class="btn btn-info"> save </button>
            </form>
              
              
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      
    </section>
    <!-- /.content -->
  </div>
    
@endsection