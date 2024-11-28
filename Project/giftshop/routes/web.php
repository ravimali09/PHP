<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminnController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
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
    /*------- Website ------*/
Route::get('/', function () {
    return view('website.index');
});
Route::get('/index', function () {
    return view('website.index');
});
Route::get('/contacts', function () {
    return view('website.contact');
});
Route::get('/shop', function () {
    return view('website.shop');
});
Route::get('/testimonial', function () {
    return view('website.testimonial');
});
Route::get('/why', function () {
    return view('website.why');
});

Route::get('/user_login',[CustomerController::class,'login']);
Route::post('/user_auth',[CustomerController::class,'user_auth']);
Route::get('/user_logout',[CustomerController::class,'user_logout']);

Route::get('/profile',[CustomerController::class,'profile']);


Route::get('/user_signup',[CustomerController::class,'create']);
Route::post('/user_signup',[CustomerController::class,'store']);
Route::get('/edituser/{id}',[CustomerController::class,'edituser']);
Route::post('/update/{id}',[CustomerController::class,'update']);


  /* ------- Admin -------*/


Route::get('/contact',[ContactController::class,'create']);
Route::get('/manage_contact',[ContactController::class,'show']);
Route::post('/contacts',[ContactController::class,'store']);
Route::post('/delete_contact/{$id}',[ContactController::class,'destroy']);


  
Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::get('/manage_customer', function () {
    return view('admin.manage_customer');
});


Route::get('/cart',[CartController::class,'show']);
Route::get('/delete_cart/{id}',[CartController::class,'destroy']);


Route::get('/add_product',[ProductController::class,'create']);
Route::post('/add_product',[ProductController::class,'store']);
Route::get('/manage_product',[ProductController::class,'show']);
Route::get('/delete_product/{id}',[ProductController::class,'destroy']);


Route::get('/admin_login',[AdminnController::class,'create']);
Route::post('/admin_auth',[AdminnController::class,'login']);

Route::get('/admin_logout',[AdminnController::class,'admin_logout']);



Route::get('/manage_customer',[CustomerController::class,'show']);
Route::get('/delete_customer/{id}',[CustomerController::class,'destroy']);

