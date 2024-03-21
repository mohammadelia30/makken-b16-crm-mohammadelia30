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
Route::prefix('users')->controller(UserController::class)->group(function () {
    // Users Get Route
    Route::get('/create', 'createPage')->name('usercreatepage');
    Route::get('/index', 'index')->name('userslist');
    Route::get('/edit/{id}', 'editPage')->name('usereditpage');
    // User Post Route
    Route::post('/creat', 'create')->name('usercreate');
    Route::post('/edit/{id}', 'edit')->name('useredit');
    Route::delete('/delete/{id}', 'delete')->name('userdelete');
});
Route::prefix('products')->controller(ProductController::class)->group(function () {
    // Product Get Route
    Route::get('/create', 'createPage')->name('productcretepage');
    Route::get('/index', 'index')->name('productslist');
    Route::get('/edit/{id}', 'editPage')->name('producteditpage');
    // Product Post Route
    Route::post('/create', 'create')->name('productcreate');
    Route::post('/edit/{id}', 'edit')->name('prouctedit');
    Route::delete('/delete/{id}', 'delete')->name('productdelete');
});
Route::prefix('orders')->controller(OrderController::class)->group(function () {
    // Order Get Route
    Route::get('/create', 'createPage')->name('ordercreatepage');
    Route::get('/index', 'index')->name('orderslist');
    Route::get('/edit/{id}', 'editPage')->name('ordereditpage');
    // Order Post Route
    Route::post('/create','create')->name('ordercreate');
    Route::post('/edit/{id}', [OrderController::class, 'edit'])->name('orderedit');
    Route::delete('/delete/{id}', [OrderController::class, 'delete'])->name('orderdelete');
});
Route::prefix('posts')->group(function () {
    // Posts Get Route
    Route::get('/index', [PostController::class, 'index'])->name('postslist');
    Route::get('/create', [PostController::class, 'createPage'])->name('postcreatepage');
    Route::get('/edit/{id}', [PostController::class, 'editPage'])->name('posteditpage');
    // Posts Post Route
    Route::post('/edit/{id}', [PostController::class, 'edit'])->name('postedit');
    Route::post('/create', [PostController::class, 'create'])->name('postcreate');
    Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('postdelete');
});
Route::prefix('cats')->group(function () {
    // Categury Get Route
    Route::get('/index', [CateguryController::class, 'index'])->name('categureslist');
    Route::get('/create', [CateguryController::class, 'createPage'])->name('categutycreatepage');
    Route::get('/edit/{id}', [CateguryController::class, 'editPage'])->name('categuryeditpage');
    // Categury Post Route
    Route::post('/create', [CateguryController::class, 'create'])->name('categurycreate');
    Route::post('/edit/{id}', [CateguryController::class, 'edit'])->name('categuryedit');
    Route::delete('/delete/{id}', [CateguryController::class, 'delete'])->name('categurydelete');
});
