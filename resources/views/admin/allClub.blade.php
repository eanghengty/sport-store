@extends('admin.index')
@section('content')
<div class="container">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col"> club profile</th>
      <th scope="col">Primary Name</th>
      <th scope="col">Alternative Name</th>
      
    </tr>
  </thead>
  <tbody>
    
    @foreach($club as $c)
    <tr>
      
      <th scope="row">{{$c->id}}</th>
      
      <td><img src="{{asset('images/Clubs/'.$c->image)}}" style="width:100px; height:100px;"/></td>
      <td>{{$c->kh_name}}</td>
      <td>{{$c->en_name}}</td>
      
   
      <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    </tr>
    @endforeach
    
  
  </tbody>
</table>
</div>
@endsection