@extends('layout.admin')

@section('body')

<div class="content-wrapper" style="min-height: 1302.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact info</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact info</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">contact</h3>
          
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>stuats</th>
                    <th>message</th>
                    <th>phone number</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($data as $d)
                        
                 
                  <tr>
                    <td>
                        {{$d->email}}
                    </td>
                    <td> {{$d->name}}</td>
                    <td>
                        {{$d->stauts}}
                    </td>
                    <td>
                        <textarea   cols="35" rows="5" readonly> {{$d->message}}</textarea>
                        {{-- {{$d->message}} --}}
                    </td>

                    <td>
                        {{$d->phoneNum}}
                    </td>

                    <td>
                        <a href="/contactAdmin/{{$d->id}}">delete</a>
                    </td>
                  </tr>
                  @endforeach
                
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

@endsection