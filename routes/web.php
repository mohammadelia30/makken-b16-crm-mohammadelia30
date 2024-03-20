<?php

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
    Route::get('/login',function(){
        return view('login.login');
    })->name('loginpage');
    Route::get('/register',function(){
        return view('login.register');
    })->name('registerpage');
});
Route::prefix('users')->group( function () {
    // Users Get Route
    Route::get('/create',[UserController::class,'createPage'])->name('usercreatepage');
    Route::get('/index', [UserController::class,'index'])->name('userslist');
    Route::get('/edit/{id}',[UserController::class,'editPage'])->name('usereditpage');
    // User Post Route
    Route::post('/creat', [UserController::class,'create'])->name('usercreate');
    Route::post('/edit/{id}', [UserController::class,'edit'])->name('useredit');
    Route::delete('/delete/{id}',[UserController::class,'delete'])->name('userdelete');
});
Route::prefix('products')->group(function () {
    // Product Get Route
    Route::get('/create', [ProductController::class,'createPage'])->name('productcretepage');
    Route::get('/index', [ProductController::class,'index'])->name('productslist');
    Route::get('/edit/{id}',[ProductController::class,'editPage'])->name('producteditpage');
    // Product Post Route
    Route::post('/create',[ProductController::class,'create'])->name('productcreate');
    Route::post('/edit/{id}',[ProductController::class,'edit'])->name('prouctedit');
    Route::delete('/delete/{id}',[ProductController::class,'delete'])->name('productdelete');
});
// Order Get Route
Route::get('/order/create', function () {
    return view('orders.create');
});
Route::get('/orders/index', function () {
    $orders = DB::table('orders')->get();
    return view('orders.index',['orders'=> $orders]);
});
Route::get('/order/edit/{id}', function ($id) {
    $order = DB::table('orders')->where('id',$id)->first();
    return view('orders.edit',['order'=> $order]);
});
// Order Post Route
Route::post('/order/create', function (Request $request) {
    DB::table('orders')->insert([
        'sname'=> $request->sname,
        'gname'=> $request->gname,
        'code'=> $request->code,
        'date'=> $request->date,
        'time'=> $request->time,
        'comment'=> $request->comment
    ]);
    return redirect('/orders/index');
});
Route::post('/order/edit/{id}', function (Request $request,$id) {
    DB::table('orders')->where('id',$id)->update([
        'sname'=> $request->sname,
        'gname'=> $request->gname,
        'code'=> $request->code,
        'date'=> $request->date,
        'time'=> $request->time,
        'comment'=> $request->comment
    ]);
    return redirect('/orders/index');
});
Route::delete('/order/delete/{id}', function ($id) {
    DB::table('orders')->where('id',$id)->delete();
    return redirect('/orders/index');
});
// Posts Get Route
Route::get('/posts/index', function () {
    $posts = DB::table('posts')->get();
    return view('posts.index',['posts' => $posts]);
});
Route::get('/post/create', function () {
    return view('posts.create');
});
Route::get('/post/edit/{id}', function ($id) {
    $post = DB::table('posts')->where('id',$id)->first();
    return view('posts.edit',['post' => $post]);
});
// Posts Post Route
Route::post('/post/edit/{id}',function(Request $request ,$id){
    DB::table('posts')->where('id',$id)->update([
        'title' => $request -> title,
        'auther' => $request -> auther,
        'categury_id' => $request ->categury_id,
        'content' => $request -> content
    ]);
    return redirect('/posts/index');
});
Route::post('/post/create', function(Request $request){
    DB::table('posts')->insert([
        'title' => $request -> title,
        'auther' => $request -> auther,
        'categury_id' => $request -> categury_id,
        'content' => $request -> content
    ]);
    return redirect('/posts/index');
});
Route::delete('/post/delete/{id}', function($id){
    DB::table('posts')->where('id',$id)->delete();
    return redirect('/posts/index');
});
// Categury Get Route
Route::get('/cats/index', function(){
    $cats = DB::table('categury')->get();
    return view('categury.index',['cats'=> $cats]);
});
Route::get('/cat/create', function(){
    return view('categury.create');
});
Route::get('/cat/edit/{id}', function($id){
    $cat = DB::table('categury')->where('id',$id)->first();
    return view('categury.edit',['cat'=> $cat]);
});
// Categury Post Route
Route::post('/cat/create', function(Request $request){
    DB::table('categury')->insert([
        'title'=> $request -> title
    ]);
    return redirect('/cats/index');
});
Route::post('/cat/edit/{id}', function(Request $request, $id){
    DB::table('categury')->where('id', $id)->update([
        'title'=> $request -> title
    ]);
    return redirect('/cats/index');
});
Route::delete('/cat/delete/{id}', function($id){
    DB::table('categury')->where('id',$id)->delete();
    return redirect('/cats/index');
});
