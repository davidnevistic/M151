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

Route::get('/products', [\App\Http\Controller\ProductController::class, "products"]);

Route::get('/product{id}', [\App\Http\Controller\ProductController::class, "product"]);

Route::get('/register', [\App\Http\Controller\UserController::class, "products"]);
