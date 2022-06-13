@extends('admin.index')
@section('content')
<div class="container w-100  d-flex justify-content-center" >
<form class="d-flex flex-column justify-content-center p-3 border border-warning w-75" enctype="multipart/form-data" method="post" action="{{route('addproductstore')}}">
  @csrf
    <p class="display-4">Add - Product</p>
  <div class="form-group row ">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Product Name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Product quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Quantity" name="quantity">
    </div>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload product image</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Color</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Color" name="color">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Price" name="price">
    </div>
  </div>
  <div class="form-group row w-25 my-o mx-auto">
  <select class="custom-select" name="size">
  <option selected>Size</option>
  <option value="S">S</option>
  <option value="X">X</option>
  <option value="XL">XL</option>
</select>
</div>
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Description" name="description">
    </div>
  </div>
  <div class="form-group row w-25 my-o mx-auto">
  <select class="custom-select" name="type">
  <option selected>Type of Product</option>
  <option value="shirt">Shirt</option>
  <option value="hat">Hat</option>
  <option value="bag">Bag</option>
</select>
</div>
    
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
  </div>
  </div>
  
</form>
</div>

@endsection

