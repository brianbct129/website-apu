<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\VouchersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/edit', [ProductController::class, 'update']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::get('/category/edit', [CategoryController::class, 'update']);

Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/orders/edit', [OrdersController::class, 'update']);


Route::get('/vouchers', [VouchersController::class, 'index']);
Route::get('/vouchers/create', [VouchersController::class, 'create']);
Route::get('/vouchers/edit', [VouchersController::class, 'update']);