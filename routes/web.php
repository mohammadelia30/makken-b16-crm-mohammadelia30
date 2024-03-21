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
Route::prefix('users')->group(function () {
    // Users Get Route
    Route::get('/create', [UserController::class, 'createPage'])->name('usercreatepage');
    Route::get('/index', [UserController::class, 'index'])->name('userslist');
    Route::get('/edit/{id}', [UserController::class, 'editPage'])->name('usereditpage');
    // User Post Route
    Route::post('/creat', [UserController::class, 'create'])->name('usercreate');
    Route::post('/edit/{id}', [UserController::class, 'edit'])->name('useredit');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('userdelete');
});
Route::prefix('products')->group(function () {
    // Product Get Route
    Route::get('/create', [ProductController::class, 'createPage'])->name('productcretepage');
    Route::get('/index', [ProductController::class, 'index'])->name('productslist');
    Route::get('/edit/{id}', [ProductController::class, 'editPage'])->name('producteditpage');
    // Product Post Route
    Route::post('/create', [ProductController::class, 'create'])->name('productcreate');
    Route::post('/edit/{id}', [ProductController::class, 'edit'])->name('prouctedit');
    Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('productdelete');
});
Route::prefix('orders')->group(function () {
    // Order Get Route
    Route::get('/create', [OrderController::class, 'createPage'])->name('ordercreatepage');
    Route::get('/index', [OrderController::class, 'index'])->name('orderslist');
    Route::get('/edit/{id}', [OrderController::class, 'editPage'])->name('ordereditpage');
    // Order Post Route
    Route::post('/create', [OrderController::class, 'create'])->name('ordercreate');
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
    Route::get('/cats/index', [CateguryController::class, 'index'])->name('categureslist');
    Route::get('/cat/create', [CateguryController::class, 'createPage'])->name('categutycreatepage');
    Route::get('/cat/edit/{id}', [CateguryController::class, 'editPage'])->name('categuryeditpage');
    // Categury Post Route
    Route::post('/cat/create', [CateguryController::class, 'create'])->name('categurycreate');
    Route::post('/cat/edit/{id}', [CateguryController::class, 'edit'])->name('categuryedit');
    Route::delete('/cat/delete/{id}', [CateguryController::class, 'delete'])->name('categurydelete');
});
