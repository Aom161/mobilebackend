<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return "Hello CSIT";
});

Route::get('/', function () {
    return "About Page";
});

Route ::get('profile',[HomeController::class,'showprofile']);
Route ::get('products',[ProductController::class,'showproduct']);

