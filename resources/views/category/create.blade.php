@include('welcome')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <form method="post" action="{{route('category_store')}}"> 
         @csrf
         <div class="row mb-2">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" required>
                    <small id="emailHelp" class="form-text text-muted">This is your main category</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
         </div><!-- /.row -->
        </form>  
      </div><!-- /.container-fluid -->
    </div>

</div>

</div>
</body>
</html>