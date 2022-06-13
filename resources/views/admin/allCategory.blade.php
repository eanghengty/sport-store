@extends('admin.index')
@section('content')
<div class="container">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category Name</th>

      
    </tr>
  </thead>
  <tbody>
    
    @foreach($category as $c)
    <tr>
      
      <th scope="row">{{$c->id}}</th>
      
      
      <td>{{$c->name}}</td>
    
      
   
      <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    </tr>
    @endforeach
    
  
  </tbody>
</table>
</div>
@endsection