<?php

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
// Login Get Route
Route::get('/login/login',function(){
    return view('login.login');
});
Route::get('/login/register',function(){
    return view('login.register');
});
 // Users Get Route
Route::get('/user/create', function () {
    return view('users.create');
});
Route::get('users/index', [UserController::class,'index'])->name('list');
Route::get('/user/edit/{id}', function ($id) {
    $user =DB::table('users')->where('id', $id)->first();
    return view('users.edit',['user'=> $user]);

});
// User Post Route
Route::post('/user/creat', [UserController::class,'create']);
Route::post('/user/edit/{id}', [UserController::class,'edit']) ;
Route::delete('/user/delete/{id}',[UserController::class,'delete']) ;
// Product Get Route
Route::get('/product/create', function () {
    return view('products.create');
});
Route::get('/products/index', function () {
    $products = DB::table('products')->get();
    return view('products.index',['products'=> $products]);
});
Route::get('/product/edit/{id}', function ($id) {
    $product = DB::table('products')->where('id',$id)->first();
    return view('products.edit',['product'=> $product]);
});
// Product Post Route
Route::post('/prosuct/create', function (Request $request) {
    DB::table('products')->insert([
        'name'=> $request->name,
        'price' => $request->price,
        'color'=> $request->color,
        'status' => $request->status,
        'number' => $request->number,
        'comment' => $request->comment
    ]);
    return redirect('/products/index');
});
Route::post('/product/edit/{id}', function (Request $request, $id) {
    DB::table('products')->where('id',$id)->update([
        'name'=> $request->name,
        'price'=> $request->price,
        'color' => $request->color,
        'status'=> $request->status,
        'number'=> $request->number,
        'comment'=> $request->comment
    ]);
    return redirect('/products/index');
});
Route::delete('product/delete/{id}', function ($id) {
    DB::table('products')->where('id',$id)->delete();
    return redirect('/products/index');
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
