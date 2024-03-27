<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('users')->controller(UserController::class)->as('users.')->group(function () {
    Route::get('index/{id?}','index')->name('index');
    Route::post('create', 'create')->name('create');
    Route::put('{id}', 'edit')->name('edit');
    Route::delete('delete/{id}', 'delete')->name('delete');
});
Route::prefix('products')->controller(ProductController::class)->as('product.')->group(function () {
    Route::get('index/{id?}','index')->name('index');
    Route::post('create', 'create')->name('create');
    Route::put('{id}', 'edit')->name('edit');
    Route::delete('delete/{id}', 'delete')->name('delete');
});
Route::prefix('orders')->controller(OrderController::class)->as('orders.')->group(function () {
    Route::get('index/{id?}', 'index')->name('index');
    Route::post('create', 'create')->name('create');
    Route::post('{id}', 'edit')->name('edit');
    Route::delete('delete/{id}', 'delete')->name('delete');
});
