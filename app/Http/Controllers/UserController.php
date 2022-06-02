<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USER;
use App\Http\Controllers\Controller;
use Hash;
use Auth;
class UserController extends Controller
{
    public function signupindex(){
        return view('signup');
    }
    public function loginindex(){
        return view('login');
    }
    public function signupstore(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required',
            'email'=>'required'

        ]);

        $user = new USER;
        $user->name=$request->name;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $save = $user->save();

        if($save){
            return view('Homepage');
        }
        else{
            return view('signup');
        }
    }
 
    public function loginstore(Request $request){
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string',
            
        ]);

        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intented('hompage');
        }

        return redirect('login')->with('error','invalid input!');
    }
}
