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
    @if($product->isEmpty())
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td><p> there is no product </p></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    @else
    @foreach($product as $p)
    <tr>
      
      <th scope="row">{{$p->id}}</th>
      
      <td><img src="{{asset('images/'.$p->image)}}" style="width:100px; height:100px;"/></td>
      <td>{{$p->product_name}}</td>
      <td>{{$p->product_quantity}}</td>
      <td>{{$p->size}}</td>
      <td>{{$p->price}}</td>
      <td><a href="{!! action('App\Http\Controllers\AdminController@editproduct',$p->id) !!}" class="btn btn-success mb-2">Edit</a> 
      <form method="post" action="{!! action('App\Http\Controllers\AdminController@destroy', $p->id) !!}" class="pull-left">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
        <div>
        <button type="submit" class="btn btn-warning">Delete</button>
        </div>
        </div>
        </form>
      </td>
    </tr>
    @endforeach
    @endif
  
  </tbody>
</table>
</div>
@endsection