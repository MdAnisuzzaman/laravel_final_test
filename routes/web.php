<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/productshow',[HomeController::class,'product'])->name('productshow');
Route::get('/show/{id}',[HomeController::class,'show'])->name('show');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function ()
 {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    // category route

    Route::get('/category',[CategoryController::class,'index'])->name('category.index');

    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');

    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    // Product route

    Route::get('/product',[ProductController::class,'index'])->name('product.index');

    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');

    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');

    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');





    



 });
