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
       
            <li class="breadcrumb-item active">DataTables For the banners </li>
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
              <h3 class="card-title">Banners Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
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
                  <td class="dtr-control sorting_1">{{$item->desc}}</td>
                  <td class="dtr-control sorting_1">
                    <div > <a class="btn btn-danger" href="/bannerDelete/{{$item->id}}"> Delete</a></div>
                  </td>

                  
                  @endforeach

                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">type</th><th rowspan="1" colspan="1">size</th><th rowspan="1" colspan="1">Color</th>
                  <th rowspan="1" colspan="1">Descrption</th>
                  <th rowspan="1" colspan="1">Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class="row"><div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
              Showing 1 to 10 of 57 entries
            </div>
          </div>
          <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous">
                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
              </li>
              <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
              </li>
              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
              </li><li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
              </li>
              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
              </li>
              <li class="paginate_button page-item next" id="example1_next">
                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
              </li>
            </ul>
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