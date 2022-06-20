@extends('admin.index')
@section('content')
<div class="container">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Image</th>
      <th scope="col">client Name</th>
      <th scope="col">client email</th>
      <th scope="col">client role</th>
      <th scope="col">{{session('name')}}</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($product as $p)
    <tr>
      
      <th scope="row">{{$p->id}}</th>
      
      <td><img src="{{asset('images/'.$p->image)}}" style="width:100px; height:100px;"/></td>
      <td>{{$p->product_name}}</td>
      <td>{{$p->product_quantity}}</td>
      <td>{{$p->size}}</td>
      <td>{{$p->price}}</td>
      <td><a href="{{route('editproduct')}}">Edit</a> | <a href="#">Delete</a></td>
    </tr>
    @endforeach
    
  
  </tbody>
</table>
</div>
@endsection