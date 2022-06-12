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
class AdminController extends Controller
{
    public function index(Request $request){
       
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
                
            return view('admin.dashboard');
        }
        else{
            return redirect()->intended('/');
        }
    }
    public function addproduct(){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
                
            return view('admin.addProduct');
        }
        else{
            return redirect()->intended('/');
        }
    }
    public function allproduct(){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
                
            return view('admin.allProduct');
        }
        else{
            return redirect()->intended('/');
        }
    }
}
