<?php

namespace App\Http\Controllers;
use App\Models\PRODUCT;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('Allitempage');
    }
    public function item(){
        $items=PRODUCT::all();
        return view('Homepage',compact('items'));
    }
    public function showproduct($id){
        $product = PRODUCT::whereId($id)->firstOrFail();
        return view('productdetail', compact('product'));
    }
    
}
