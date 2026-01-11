<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home']);

Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');

Route::get('/category/create-form',[CategoryController::class,'createForm'])->name('category.create.form');

Route::post('/category/submit',[CategoryController::class,'storeCategory'])->name('category.store');

Route::get('/products/list',[ProductController::class,'list'])->name('products.list');

Route::get('/product/form',[ProductController::class,'create'])->name('product.create');

Route::post('/product/store',[ProductController::class,'store'])->name('product.store');