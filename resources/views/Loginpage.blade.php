{{-- import Authtitle from "../includes/Authtitle";
import Header from "../includes/Header";
import './../styles/loginpage.scss'
import banner from './../images/Banner-reg.png';
import { useState } from "react"; --}}
@extends('layouts.main')
@section('content')
        <div class="loginaccount-page">
            <div class="loginaccount">
            {{-- <Header></Header>
            <div>
                <Authtitle></Authtitle>
            </div>
            <div>
                <input type="text" placeholder="ឈ្មោះគណនី" />
            </div>
            <div>
                <input type="password" placeholder="លេខសម្ងាត់" />
            </div>
            <div>
                <button>ចូលគណនី</button>
            </div> --}}
            <div class="logincontainer">
           <div class="loginrow">
               <div class="logincol-2">
                   <img src="{{asset('images/Banner-reg.png')}}" alt="Banner"></img>
               </div>
               <div class="logincol-2">
                   <div class="loginform-container">
                       <div class="loginform-btn">
                            <span> ចូលគណនី </span>
                            <span> បង្កើតគណនី </span>
                            <hr id="line"/>
                       </div>

                       <form id="Logform" >
                           <input class="logininput" type="text" placeholder="ឈ្មោះគណនី"/>
                           <input class="logininput" type="password" placeholder="លេខសម្ងាត់"/>
                           <button type="submit" class="loginbtn-login">ចូលគណនី</button>
                           <a class="logina" href="">ភ្លេចលេខសម្ងាត់</a>
                       </form>

                       <form id="Regform">
                        <input class="logininput" type="text" placeholder="ឈ្មោះគណនី"/>
                        <input class="logininput" type="text" placeholder="លេខទូរស័ព្ទ"/>
                        <input class="logininput" type="password" placeholder="លេខសម្ងាត់"/>
                        <button type="submit" class="loginbtn-reg">បង្កើតគណនី</button>
            
                        </form>

                   </div>
               </div>
           </div>
       </div>
    </div>
        </div>
@endsection
