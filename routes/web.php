<?php

use App\Http\Controllers\CateguryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::prefix('login')->group(function () {
    // Login Get Route
    Route::get('/login', function () {
        return view('login.login');
    })->name('loginpage');
    Route::get('/register', function () {
        return view('login.register');
    })->name('registerpage');
});
Route::prefix('cats')->controller(CateguryController::class)->group(function () {
    // Categury Get Route
    Route::get('/index', 'index')->name('categureslist');
    Route::get('/create', 'createPage')->name('categutycreatepage');
    Route::get('/edit/{id}', 'editPage')->name('categuryeditpage');
    // Categury Post Route
    Route::post('/create', 'create')->name('categurycreate');
    Route::post('/edit/{id}', 'edit')->name('categuryedit');
    Route::delete('/delete/{id}', 'delete')->name('categurydelete');
});
