@include('welcome')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a class="btn btn-primary" href="{{route('category_create')}}">+ Add New</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Categories list here</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-sm">
                      <thead>
                      <tr>
                        <th>SI</th>
                        <th>Category Name</th>
                        <th>Category Slug</th>
                        <th>Action</th>                        
                      </tr>
                      </thead>
                      <tbody>
                    @foreach ($data as $key=>$row)
                              
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->category_name}}</td>
                        <td>{{$row->category_slug}}</td>
                        <td> 
                            <a href="{{route('category_edit',$row->id)}}" class="btn btn-info btn-sm edit">Edit</a>
                            <a href="{{route('category_delete',$row->id)}}" id="delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>                     
                     </tr>
                    @endforeach  
                      </tbody>                     
                    </table>
                  </div>
            </div>
        </div>
    </div>
   </div>     
 </section>
</div>

</div>
</body>
</html>