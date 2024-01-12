<?php

use App\Http\Controllers\HomeController;
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

Route ::get('showprofile',[HomeController::class,'showprofile']);