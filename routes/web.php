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
Route::get('/',function(){
    return view('Homepage');
})->name('homepage');
Route::get('/allitem',function(){
    return view('Allitempage');
});
Route::get('/itemdetail',function(){
    return view('Itemdetailpage');
});




