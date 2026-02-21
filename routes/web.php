<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\HomeController as WebsiteHomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


//website routes

Route::get('/', [WebsiteHomeController::class, 'home'])->name('website.home');



//admin panel routes

Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

    Route::post('/login/submit', [AuthController::class, 'loginSubmit'])->name('login.submit');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/', [HomeController::class, 'home'])->name('home');

        Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');

        Route::get('/category/view/{id}', [CategoryController::class, 'viewCategory'])->name('category.view');

        Route::get('/category/create-form', [CategoryController::class, 'createForm'])->name('category.create.form');

        Route::post('/category/submit', [CategoryController::class, 'storeCategory'])->name('category.store');

        Route::get('/products/list', [ProductController::class, 'list'])->name('products.list');

        Route::get('/product/view/{id}', [ProductController::class, 'viewProduct'])->name('product.view');

        Route::get('/product/form', [ProductController::class, 'create'])->name('product.create');

        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

        Route::get('/product/delete/{p_id}', [ProductController::class, 'delete'])->name('product.delete');
    });
});
