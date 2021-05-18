<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});
Route::view("index","index");
Route::get("home",[ProductController::class,"index"]);
Route::post("login",[UserController::class,"login"]);
Route::get("product",[ProductController::class,"index"]);
Route::get("detail/{id}",[ProductController::class,"detail"]);
Route::get("search",[ProductController::class,"search"]);
Route::post("add_to_cart",[ProductController::class,"addtocart"]);
Route::get("cartlist",[ProductController::class,"cartList"]);
Route::get("removecart/{id}",[ProductController::class,"remove"]);
Route::get("ordernow",[ProductController::class,"orderNow"]);
Route::post("orderplace",[ProductController::class,"orderPlace"]);
Route::get("orders",[ProductController::class,"Orders"]);
Route::view("register","register");
Route::post("registeration",[UserController::class,"Register"]);
Route::post("adminlogin",[UserController::class,"adminLogin"]);
Route::view("admin_area","admin_area");
Route::get("admin_home",[UserController::class,"adminHome"]);
Route::get("usersdata",[UserController::class,"data"]);
Route::get("vieworders",[UserController::class,"ordersdata"]);
Route::get("update/{id}",[UserController::class,"Update"]);
Route::post("upd",[UserController::class,"updatekr"]);
Route::get("adminproduct",[UserController::class,"adminProducts"]);
Route::get("delete/{id}",[UserController::class,"Delete"]);
Route::get("edit/{id}",[UserController::class,"editkro"]);
Route::view('addproduct','addproduct');
Route::post("add",[UserController::class,"addkr"]);
Route::post("edited",[UserController::class,"updatedkr"]);




Route::get('/logout', function () {
	Session::forget('user');
    return redirect('/login');
});

Route::get('/adminlogout', function () {
	Session::forget('user');
    return redirect('/admin_area');
});
