@extends('admin.index')
@section('content')
<div class="container w-100  d-flex justify-content-center" >
<form class="d-flex flex-column justify-content-center p-3 border border-warning w-75" enctype="multipart/form-data" method="post" action="{{route('addcategorystore')}}">
  @csrf
    <p class="display-4">Add - Category</p>
  <div class="form-group row ">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Cateogry name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="category name" name="name">
    </div>
  </div>

    
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Cateogry</button>
    </div>
  </div>
  </div>
  
</form>
</div>

@endsection

