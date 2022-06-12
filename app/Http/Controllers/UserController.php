<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USER;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Session\Store;
use App\Http\Controllers;
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
            'email'=>'required|unique:users,email'

        ]);

        $user = new USER;
        $user->name=$request->name;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        // $user->role='admin';
        
        // if(DB::table('users')->where('email',$user['email'])){

        // return redirect('/login')->with('error','email and name already in use by other user.');
        
        // }else{
        $save = $user->save();
        $name = DB::table('users')->where('email',$user['email'])->value('name');
        
        
        if($save){
            return redirect()->intended('/login');
        }
        else{
            return view('login');
        }
    // }
    }
 
    public function loginstore(Request $request){
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string',
            
        ]);

        $credentials=$request->only('email','password');
        $name = DB::table('users')->where('email',$credentials['email'])->value('name');
        $data=$request->input();
        
        if(Auth::attempt($credentials)){
            
            $request->session()->put('email', $data['email'],$name);
            $request->session()->put('name',$name);
            // dd($request);
            if($role = DB::table('users')->where('email',$data['email'])->value('role') === 'admin'){
                
                return redirect('admin');
            }
            else{
                return redirect()->intended('/');
            }
            
            
            
        }

        return redirect('login')->with('error','invalid input!');
    }
    public function logout(){

        if(session()->has('email') && session()->has('name')){
            session()->pull('email');
            session()->pull('name');
            // dd(session());
        }
        Auth::logout();
            return redirect('login');
        
        
        
    }
}
