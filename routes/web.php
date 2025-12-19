<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home']);

Route::get('/tour-post',[HomeController::class,'tourPost'])->name('tour.post');

Route::get('/tour-join',[HomeController::class,'tourJoin'])->name('tour.join');