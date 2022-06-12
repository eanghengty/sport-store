@extends('layouts.main')
@section('content')
        <div class="loginaccount-page">
            <div class="loginaccount">
           
            <div class="logincontainer">
           <div class="loginrow">
               <div class="logincol-2">
                   <img src="{{asset('images/Banner-reg.png')}}" alt="Banner"></img>
               </div>
               <div class="logincol-2">
                   <div class="loginform-container">
                       <div class="loginform-btn">
                            <span onclick="log()"> ចូលគណនី </span>
                            <span onClick="reg()"> បង្កើតគណនី </span>
                            <hr id="line"/>
                       </div>

                       <form id="Logform" action="{{route('loginstore')}}" method="POST">
                        @csrf
                           <input class="logininput" type="text" placeholder="គណនី" name="email"/>
                           <input class="logininput" type="password" placeholder="លេខសម្ងាត់" name="password"/>
                           <button type="submit" class="loginbtn-login">ចូលគណនី</button>
                           <a class="logina" href="{{route('homepage')}}">ភ្លេចលេខសម្ងាត់</a>
                       </form>

                       <form id="Regform"  method="POST" action="{{route('signupstore')}}">
                        @csrf
                        <input class="logininput" type="text" placeholder="ឈ្មោះគណនី" name="name"/>
                        <input class="logininput" type="text" placeholder="គណនី" name="email"/>
                        <input class="logininput" type="password" placeholder="លេខសម្ងាត់" name="password"/>
                        <button type="submit" class="loginbtn-reg">បង្កើតគណនី</button>
                        </form>

                   </div>
               </div>
           </div>
       </div>
    </div>
        </div>


        <!-- <div>
            <form id="Logform" action="{{route('loginstore')}}" method="POST">
               @csrf 
                
                   <input class="logininput" type="text" placeholder="គណនី" name="email"/>
                   
                   <small>@error('email'){{$message}}@enderror</small>
                   
                   <input class="logininput" type="password" placeholder="លេខសម្ងាត់" name="password"/>
                   <small>@error('password'){{$message}}@enderror</small>
                   <button type="submit" class="loginbtn-login">ចូលគណនី</button>
                   <a class="logina" href="{{route('loginstore')}}">ភ្លេចលេខសម្ងាត់</a>
                   
                   
               </form>
        </div> -->
@endsection
