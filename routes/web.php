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
Route::get('/signup',[App\Http\Controllers\UserController::class, 'signupindex']);
Route::post('/signup',[App\Http\Controllers\UserController::class, 'signupstore'])->name('signupstore');
Route::get('/login',[App\Http\Controllers\UserController::class, 'loginindex']);
Route::post('/login',[App\Http\Controllers\UserController::class, 'loginstore'])->name('loginstore');
Route::post('/',[App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/addproduct',[App\Http\Controllers\AdminController::class, 'addproduct'])->name('addproduct');
Route::get('/allproduct',[App\Http\Controllers\AdminController::class, 'allproduct'])->name('all    product');
Route::get('/product',[App\Http\Controllers\ProductController::class, 'index'])->name('allitempage');

Route::get('/',function(){
    return view('Homepage');
})->name('homepage');
Route::get('/allitem',function(){
    return view('page');
});
Route::get('/itemdetail',function(){
    return view('Itemdetailpage');
});

Route::get('/addToCart',function(){
    return view('addToCart');
});
// Route::get('/admin',function(){
//     return view('admin.index');
// });


