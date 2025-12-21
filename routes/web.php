<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home']);

Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');

Route::get('/category/create-form',[CategoryController::class,'createForm'])->name('category.create.form');