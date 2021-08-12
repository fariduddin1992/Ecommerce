@extends('admin.admin_layouts')
@section('admin_content')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <a class="breadcrumb-item" href="index.html">Tables</a>
      <span class="breadcrumb-item active">Data Table</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Data Table</h5>
        <p>DataTables is a plug-in for the jQuery Javascript library.</p>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
          <h6>
              Category List
            <a href="#" class="btn btn-sm btn-warning" style="float: right" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
          
        <div class="table-wrapper">
           
              
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Id</th>
                        <th class="wd-15p">Category name</th>
                        <th class="wd-20p">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-info">Edit</a>
                                <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                            </td>
                          </tr>
                        @endforeach 
                    </tbody>
                  </table>
           
        
        </div><!-- table-wrapper -->
      </div><!-- card -->

    </div><!-- sl-pagebody -->

  </div><!-- sl-mainpanel -->
  <!-- LARGE MODAL -->
 <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Category</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="modal-body pd-20">
                <div class="">
                    <div class="row">
                    <div class="col-lg">
                        <input class="form-control" name="category_name" placeholder="Category Name" type="text">
                    </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card -->
            </div><!-- modal-body -->
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20">Save changes</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection


 