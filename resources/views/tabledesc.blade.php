@extends('layout.admin');

@section('body')

<div class="content-wrapper" style="min-height: 1302.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >job title</th>
                      <th >subject</th>
                      <th >email</th>
                      <th>phone</th>
                      
                      <th >position</th>
                      <th >years Of Exp</th>
                      <th >name</th>
                      <th >letter</th>
                    
                      {{-- <th>view</th> --}}
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($dd as $i)
                        
                  
                    <tr>
                      <td>{{$i->id}}</td>
                      <td>{{$i->subject}}</td>
                      <td>{{$i->email}}</td>
                      <td>{{$i->phoneNum}}</td>
                      <td>{{$i->position}}</td>
                      <td>{{$i->yearsOfExp}}</td>
                      <td>{{$i->name}}</td>
                      <td>{{$i->letter}}</td>
                      {{-- <td><a href="/show/jobs/{{$i->id}}" class="btn btn-primary">View applications</a></td> --}}
                      
                 
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
        
        
        
        
        
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
@endsection