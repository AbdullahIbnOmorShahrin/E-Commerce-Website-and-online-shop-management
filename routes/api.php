<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiproductcontroller;
use App\Http\Controllers\mailapi;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//product
Route::post('/product/list',[apiproductcontroller::class,'productlist']);
Route::post('/product/create',[apiproductcontroller::class,'productCreate']);
Route::post('/product/edit',[apiproductcontroller::class,'productEdit']);
Route::post('/product/delete',[apiproductcontroller::class,'productDelete']);

//cart
Route::get('/cartlist',[apiproductcontroller::class,'cartList']);
Route::post('/cart/create',[apiproductcontroller::class,'cartListCreate']);
Route::post('/cart/edit',[apiproductcontroller::class,'CartListEdit']);
Route::post('/cart/delete',[apiproductcontroller::class,'CartListDelete']);

//order
Route::get('/orderlist',[apiproductcontroller::class,'orderList']);
Route::post('/order/create',[apiproductcontroller::class,'orderCreate']);
Route::post('/order/edit',[apiproductcontroller::class,'OrderEdit']);
Route::post('/order/delete',[apiproductcontroller::class,'OrderDelete']);

//review
Route::post('/reviewlist',[apiproductcontroller::class,'reviewlist']);
Route::post('/review/create',[apiproductcontroller::class,'reviewCreate']);
Route::post('/review/edit',[apiproductcontroller::class,'reviewEdit']);
Route::post('/review/delete',[apiproductcontroller::class,'reviewDelete']);

//bnpl
Route::post('/bnpllist',[apiproductcontroller::class,'bnpllist']);
Route::post('/bnpl/create',[apiproductcontroller::class,'bnplCreate']);
Route::post('/bnpl/edit',[apiproductcontroller::class,'bnplEdit']);
Route::post('/bnpl/delete',[apiproductcontroller::class,'bnplDelete']);




Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
