<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}',[HomeController::class,'index'])->name('home.index');

Route::get('/product',function(){
    return view('product');
});

Route::get('/input',function(){
    return view('inputProduct');
});

Route::get('/update',function(){
    return view('updateProduct');
});

Route::get('/order',function(){
    return view('order');
});

Route::get('/orderproduct',function(){
    return view('orderProduct');
});

Route::get('/product',[ProductController::class,'getAllProduct'])->name('product.getallproduct');






