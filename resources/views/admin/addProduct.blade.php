@extends('admin.index')
@section('content')
<div class="container w-100  d-flex justify-content-center" >
<form class="d-flex flex-column justify-content-center p-3 border border-warning w-75">
    <p class="display-4">Add - Product</p>
  <div class="form-group row ">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product name</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Product Name" name="productname">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Product quantity</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Quantity" name="productquantity">
    </div>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload product image</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Color</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Color" name="color">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Price" name="price">
    </div>
  </div>
  <div class="form-group row w-25 my-o mx-auto">
  <select class="custom-select" name="size">
  <option selected>Size</option>
  <option value="1">S</option>
  <option value="2">X</option>
  <option value="3">XL</option>
</select>
</div>
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Description" name="Description">
    </div>
  </div>
  <div class="form-group row w-25 my-o mx-auto">
  <select class="custom-select" name="size">
  <option selected>Type of Product</option>
  <option value="1">S</option>
  <option value="2">X</option>
  <option value="3">XL</option>
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

