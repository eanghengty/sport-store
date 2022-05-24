<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/addtocart', function () {
    return view('AddtoCart');
});
Route::get('/login',function(){
    return view('Loginpage');
});
Route::get('/homepage',function(){
    return view('Homepage');
});
Route::get('/allitem',function(){
    return view('Allitempage');
});
Route::get('/itemdetail',function(){
    return view('Itemdetailpage');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


