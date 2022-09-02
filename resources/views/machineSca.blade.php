@extends('layout.admin')

@section('body')
<div class="content-wrapper" style="min-height: 666880px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
         
              <li class="breadcrumb-item active">DataTables For the machine </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->
  
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">machine Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class=" dt-bootstrap4">
                  <div class="row">
                  <div class="col-sm-12">
  
                    
                  <table id="myTable" class="table table-bordered table-striped  dtr-inline" >
                  <thead>
                  <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Type: activate to sort column descending">Type</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="size: activate to sort column ascending">size</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Colors: activate to sort column ascending">Colors</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Descrption : activate to sort column ascending">Descrption</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Delte : activate to sort column ascending">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
  
                    @foreach ($data as $item)
                        
                   
                 
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">{{$item->type}}</td>
                    <td class="dtr-control sorting_1">{{$item->color}}</td>
                    <td class="dtr-control sorting_1">{{$item->size}}</td>
                    <td class="dtr-control sorting_1"> <div style="width: 90%;overflow: scroll;">{{$item->desc}}</div></td>
                    <td class="dtr-control sorting_1">
                      <div > <a class="btn btn-danger" href="{{route('machineDelete',$item->id)}}">  Delete</a> <a style="margin: 2px" class="btn btn-primary" href="{{route('editmachine',$item->id)}}"> Edit</a> </div>  
                     
                    </td>
                  </tr>
                    
                    @endforeach
  
                  
                </tbody>
                  <tfoot>
                  <tr><th rowspan="1" colspan="1">type</th><th rowspan="1" colspan="1">size</th><th rowspan="1" colspan="1">Color</th>
                    <th rowspan="1" colspan="1">Descrption</th>
                    <th rowspan="1" colspan="1">Delete</th>
                  </tr>
                  </tfoot>
                </table>
  
  
        
              </div>
            </div>
    
        </div>
      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection