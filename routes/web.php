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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return View('login');
});

Route::post("/login", [UserController::class, "login"]); 

Route::get("/register", function() {
    return View("register");
});

Route::get("/about", function() {
    return View("about");
});
Route::get("/contact",function() {
    return View("contact");
});
Route::get("/",[ProductController::class,"index"]);
Route::get("/detail/{id}", [ProductController::class,"detail"]);

Route::get("/products",[ProductController::class,"product"]);
