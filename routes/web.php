<?php

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\indexcontroller::class, 'index'])->name('index');

Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::get('/', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/where', [App\Http\Controllers\WhereController::class, 'index'])->name('where');

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');