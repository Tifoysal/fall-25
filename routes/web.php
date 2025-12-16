<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home']);


Route::get('/tour-post',[HomeController::class,'tourPost']);

Route::get('/about-us',[HomeController::class,'aboutUs']);
