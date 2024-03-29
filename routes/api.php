<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('products',ProductController::class);

Route::post("register",[AuthController::class, "register"]);
Route::post("login",[AuthController::class, "login"]);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post("logout",[AuthController::class, "logout"]);
    Route::resource('products', ProductController::class);
});