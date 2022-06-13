@extends('admin.index')
@section('content')
<div class="container w-100  d-flex justify-content-center" >
<form class="d-flex flex-column justify-content-center p-3 border border-warning w-75" enctype="multipart/form-data" method="post" action="{{route('addclubstore')}}">
  @csrf
    <p class="display-4">Add - Product</p>
  <div class="form-group row ">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Club name in Khmer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="English Name" name="en_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Club name in English</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Khmer Name" name="kh_name">
    </div>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload club image</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

    
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Club</button>
    </div>
  </div>
  </div>
  
</form>
</div>

@endsection

