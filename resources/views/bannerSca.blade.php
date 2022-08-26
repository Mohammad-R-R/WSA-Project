@extends('layout.admin')


@section('body')
    
<div class="content-wrapper" style="min-height: 1302.4px;">
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
                          <th>type</th>
                          <th>size</th>
                          <th>colors</th>
                          <th >Descrption</th>
                          <th> edit/delete</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($data as $i)
                            
                        
                        <tr>
                          <td>{{$i->type}}</td>
                          <td>{{$i->size}}</td>
                          <td>{{$i->color}}</td>
                          <td>{{$i->desc}}</td>
                          <td><a href="/bannerDelete/{{$i->id}}" class="btn btn-danger">Delete</a>  
                            <a href="/bannerEdit/{{$i->id}}" class="btn btn-info">Edit</a></td>


                          
                
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
         
                </div>
           
              </div>
       
            </div>
         
          </div>
        </div>
        </section>
        </div>
        
      </div>
                       
                 
@endsection