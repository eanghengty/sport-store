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
Route::get('/login',[App\Http\Controllers\UserController::class, 'loginindex'])->name('login');
Route::post('/login',[App\Http\Controllers\UserController::class, 'loginstore'])->name('loginstore');
Route::post('/',[App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/addproduct',[App\Http\Controllers\AdminController::class, 'addproductview'])->name('addproductview');
Route::post('/addproduct',[App\Http\Controllers\AdminController::class, 'addproductstore'])->name('addproductstore');
Route::get('/allproduct',[App\Http\Controllers\AdminController::class, 'allproduct'])->name('allproduct');

Route::get('/addclub',[App\Http\Controllers\AdminController::class, 'addclubview'])->name('addclubview');
Route::post('/addclub',[App\Http\Controllers\AdminController::class, 'addclubstore'])->name('addclubstore');
Route::get('/allclub',[App\Http\Controllers\AdminController::class, 'allclub'])->name('allclub');

Route::get('/addcategory',[App\Http\Controllers\AdminController::class, 'addcategoryview'])->name('addcategoryview');
Route::post('/addcategory',[App\Http\Controllers\AdminController::class, 'addcategorystore'])->name('addcategorystore');
Route::get('/allcategory',[App\Http\Controllers\AdminController::class, 'allcategory'])->name('allcategory');

Route::get('/product',[App\Http\Controllers\ProductController::class, 'index'])->name('allitempage');
Route::get('/product/{$id}/edit',[App\Http\Controllers\AdminController::class, 'editproduct'])->name('editproduct');

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


