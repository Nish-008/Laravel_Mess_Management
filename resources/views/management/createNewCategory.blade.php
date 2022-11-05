@extends ('layouts.app')
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-2">
        <div class="list-group">
  <a href="/management/category" class="list-group-item list-group-item-action active">
    Category
  </a>
  <a href="#" class="list-group-item list-group-item-action">Menu</a>
  <a href="#" class="list-group-item list-group-item-action">Table</a>
  <a href="#" class="list-group-item list-group-item-action">User</a>
</div>
        </div>
        <div class="col-10">
      <div class="card">
        <div class="card-header">
      <h6>Create New Category</h6>
      <form action="">
        <label for="">New category</label>
        <input type="text" class='form-control'>
        <input type="submit" class='btn btn-danger'>
      </form>
    
        </div>
        <div class="card-body">

        </div>
        <div class="card-footer">

        </div>
      </div>
        </div>
    </div>
</div>
@endsection