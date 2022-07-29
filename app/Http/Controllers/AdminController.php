<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USER;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Session\Store;
use App\Http\Controllers;
use App\Models\PRODUCT;
use App\Models\CLUB;
use App\Models\CATEGORY;
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

    public function editproduct($id){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
           
            $product = PRODUCT::whereId($id)->firstOrFail();
            return view('admin.editproduct', compact('product'));
            
            
        }
    }
  
    public function addproductview(Request $request){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
           
            
            return view('admin.addProduct');
        }
        else{
            return redirect()->intended('/');
        }
    }
    public function addproductstore(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'name'=>'required',
            'price'=>'required',
            'size'=>'required',
            'color'=>'required',
            'type'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
            
            
            // $test=$request->file('image')->guessExtension();
            // dd($test);
            $newImageName=time().'-'.$request->name.'.'.$request->image->extension();

            
             $request->image->move(public_path('images'),$newImageName);
              
            $product = PRODUCT::create([
                'id'=>$request->input('id'),
                'product_name'=>$request->input('name'),
                'product_quantity'=>$request->input('quantity'),
                'image'=>$newImageName,
                'size'=>$request->input('size'),
                'color'=>$request->input('color'),
                'price'=>$request->input('price'),
                'description'=>$request->input('description'),
                'type_of_product'=>$request->input('type')
            ]);
          
            
            


            

            $all = PRODUCT::all();
          

            return view('admin.allProduct',['product'=>$all]);
        }
        
    }

    public function updateproduct($id, Request $request){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
        $newImageName=time().'-'.$request->name.'.'.$request->image->extension();
            
            
        $request->image->move(public_path('images'),$newImageName);
        $product = PRODUCT::whereId($id)->firstOrFail();
        $product->product_name=$request->get('name');
        $product->product_quantity=$request->get('quantity');
        $product->image=$newImageName;
        $product->size=$request->get('size');
        $product->color=$request->get('color');
        $product->price=$request->get('price');
        $product->description=$request->get('description');
        $product->type_of_product=$request->get('type');
        
        $product->save();
        return redirect(action('App\Http\Controllers\AdminController\AdminController@editproduct',$product->id))->with('status', 'The product '.$id.' has been updated!');
        }
    }

    public function destroy($id)
    {
    $product = Product::whereId($id)->firstOrFail();
    $product->delete();
    return redirect('/allproduct')->with('status', 'The ticket '.$id.' has been deleted!');
    }



    public function allproduct(){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
            $product=PRODUCT::all();
           
            return view('admin.allProduct',['product'=>$product]);
        }
        else{
            return redirect()->intended('/');
        }
    }
    public function allAccount(){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
                
            return view('admin.allProduct');
        }
        else{
            return redirect()->intended('/');
        }
    }


    public function addclubstore(Request $request){
        $request->validate([
                 
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'kh_name'=>'required',
            'en_name'=>'required',
           
        ]);
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
           
            
            // $test=$request->file('image')->guessExtension();
            // dd($test);
            $newImageName=time().'-'.$request->name.'.'.$request->image->extension();

            
             $request->image->move(public_path('images/clubs'),$newImageName);
              
            $club = CLUB::create([
                'id'=>$request->input('id'),
                'en_name'=>$request->input('en_name'),
                'kh_name'=>$request->input('kh_name'),
                 'image'=>$newImageName,
               
            ]);
          
            
            


            

            $all = CLUB::all();
          

            return view('admin.allClub',['club'=>$all]);
        }
        
    }
    public function allclub(){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
            $club=CLUB::all();
           
            return view('admin.allClub',['club'=>$club]);
        }
        else{
            return redirect()->intended('/');
        }
    }
    public function addclubview(Request $request){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
           
            
            return view('admin.addClub');
        }
        else{
            return redirect()->intended('/');
        }
    }



    public function addcategorystore(Request $request){
        $request->validate([
                 
                
            'name'=>'required',
          
           
        ]);
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
            
            
            // $test=$request->file('image')->guessExtension();
            // dd($test);
           
              
            $category = CATEGORY::create([
                'id'=>$request->input('id'),
                'name'=>$request->input('name'),
                
               
            ]);
          
            
            


            

            $all = CATEGORY::all();
          

            return view('admin.allCategory',['category'=>$all]);
        }
        
    }
    public function allcategory(){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
            $category=CATEGORY::all();
           
            return view('admin.allCategory',['category'=>$category]);
        }
        else{
            return redirect()->intended('/');
        }
    }
    public function addcategoryview(Request $request){
        if($role = DB::table('users')->where('email',session()->get('email'))->value('role') === 'admin'){
           
            
            return view('admin.addCategory');
        }
        else{
            return redirect()->intended('/');
        }
    }
}
