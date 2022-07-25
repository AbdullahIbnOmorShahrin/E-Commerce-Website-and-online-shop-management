<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\email;
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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});


Route::view("/login","login");
Route::view("/register","register");

Route::post("/login",[usercontroller::class,'login']);
//Route::GET("/login",[usercontroller::class,'login']);
//Route::post("register",[usercontroller::class,'register']);
Route::get("/",[productcontroller::class,'index']);
Route::get("detail/{id}",[productcontroller::class,'detail']);
Route::get("search",[productcontroller::class,'search']);
Route::post("add_to_cart",[productcontroller::class,'addToCart']);
Route::get("cartlist",[productcontroller::class,'cartList']);
Route::get("removecart/{id}",[productcontroller::class,'removeCart']);
Route::get("ordernow",[productcontroller::class,'orderNow']);
Route::post("orderplace",[productcontroller::class,'orderPlace']);
Route::get("myorders",[productcontroller::class,'myOrders']);
Route::get('/pdf/myorderlist/convert',[PDFController::class,'pdfOrderGenerate'])->name('orderlist.pdf');
Route::post('/emailsend',[email::class,'test']);
Route::view("/setmail","setmail");

