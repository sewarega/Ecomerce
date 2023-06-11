<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/Logout', function () {
    Session::forget('user');
    return redirect('login');
});
 Route::view('/register','register');
 Route::post("/login",[UserController::class,'login']);
 Route::post("/register",[UserController::class,'register']);
 Route::get("/",[productController::class,'index']);
 Route::get("/detail/{id}",[productController::class,'detail']);
 Route::get("search",[productController::class,'search']);
 Route::post("add_to_cart",[productController::class,'addToCart']);
 Route::get("cartlist",[productController::class,'cartList']);
 Route::get("removecart/{id}",[productController::class,'removeCart']);
 Route::get("ordernow",[productController::class,'orderNow']);
 Route::post("orderplace",[productController::class,'orderPlace']);
 Route::get("myorders",[productController::class,'myOrders']);
 Route::get("allorders",[productController::class,'AllOrders']);
 Route::get('/products',[productController::class, 'ApiController@getProducts']);
 