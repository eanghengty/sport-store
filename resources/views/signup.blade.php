@extends('layouts.main')
@section('content')
<div>
    <form id="Logform" action="{{route('signupstore')}}" method="POST">
       @csrf 
        
           <input class="logininput" type="text" placeholder="ឈ្មោះគណនី" name="name"/>
           
           <small>@error('name'){{$message}}@enderror</small>
           <input class="logininput" type="text" placeholder="គណនី" name="email"/>
           <small>@error('email'){{$message}}@enderror</small>
           <input class="logininput" type="password" placeholder="លេខសម្ងាត់" name="password"/>
           <small>@error('password'){{$message}}@enderror</small>
           <button type="submit" class="loginbtn-login">បង្កើតគណនី</button>
           <a class="logina" href="{{route('loginstore')}}">មានគណនីរួចហើយ</a>
           
           
       </form>
</div>
@endsection