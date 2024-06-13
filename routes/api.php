<?php

use App\Http\Controllers\FactorController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarrantyController;
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
Route::post('login',[UserController::class,'login'])->name('login');
Route::get('login',function(){
    return '401';
});



Route::middleware('auth:sanctum')->prefix('users')->controller(UserController::class)->as('users.')->group(function () {
    Route::get('index','index')->middleware('permission:user index')->name('index');
    Route::post('create', 'create')->middleware('permission:user create')->name('create');
    Route::put('{id}', 'edit')->middleware('permission:user create')->name('edit');
    Route::post('detach/{id}','detach')->name('detach');
    Route::delete('delete/{id}', 'delete')->middleware('permission:user delete')->name('delete');
    Route::post('profile/{id}', 'add_profile')->middleware('permission:profile create')->name('add_profile');
    Route::delete('delete_profile/{id}', 'delete_profile')->middleware('permission:profile delete')->name('delete_profile');
    Route::get('logout/{id}','logout')->name('logout');
});
Route::middleware('auth:sanctum')->prefix('products')->controller(ProductController::class)->as('product.')->group(function () {
    Route::get('index/{id?}','index')->middleware('permission:product index')->name('index');
    Route::post('create', 'create')->middleware('permission:product create')->name('create');
    Route::put('{id}', 'edit')->middleware('permission:product edit')->name('edit');
    Route::delete('delete/{id}', 'delete')->middleware('permission:product delete')->name('delete');
    Route::post('image/{id}', 'add_image')->middleware('permission:product image create')->name('add_image');
    Route::delete('delete_image/{id}', 'delete_image')->middleware('permission:product image delete')->name('delete_image');
});
Route::middleware('auth:sanctum')->prefix('orders')->controller(OrderController::class)->as('orders.')->group(function () {
    Route::get('index/{id?}', 'index')->middleware('permission:order index')->name('index');
    Route::post('create', 'create')->name('create');
    Route::put('{id}', 'edit')->middleware('permission:order edit')->name('edit');
    Route::post('detach/{id}','detach')->name('detach');
    Route::delete('delete/{id}', 'delete')->middleware('permission:order delete')->name('delete');
    Route::post('factor_pdf/{id}','create_factor_pdf')->middleware('permission:order factor pdf create')->name('create_factor_pdf');
    Route::delete('delete_factor_pdf/{id}','delete_factor_pdf')->middleware('permission:order factor pdf delete')->name('delete_factor_pdf');
});
Route::middleware('auth:sanctum')->prefix('factor')->controller(FactorController::class)->as('factor.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:factor index')->name('index');
    Route::post('create','store')->middleware('permission:factor create')->name('create');
    Route::put('{id}','edit')->middleware('permission:factor edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:factor delete')->name('delete');
});
Route::middleware('auth:sanctum')->prefix('lable')->controller(LabelController::class)->as('lable.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:lable index')->name('index');
    Route::post('create','store')->middleware('permission:lable create')->name('create');
    Route::put('{id}','edit')->middleware('permission:lable edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:lable delete')->name('delete');
});
Route::middleware('auth:sanctum')->prefix('message')->controller(MessageController::class)->as('message.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:message index')->name('index');
    Route::post('create','store')->middleware('permission:message create')->name('create');
    Route::put('{id}','edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:message delete')->name('delete');
    Route::post('attach/{id}','attach_media')->middleware('permission:attach media')->name('attach');
    Route::delete('detach/{id}','detach_media')->middleware('permission:detach media')->name('detach');
});
Route::middleware('auth:sanctum')->prefix('note')->controller(MessageController::class)->as('note.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:note index')->name('index');
    Route::post('create','store')->middleware('permission:note create')->name('create');
    Route::put('{id}','edit')->middleware('permission:note edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:note delete')->name('delete');
});
Route::middleware('auth:sanctum')->prefix('task')->controller(TaskController::class)->as('task.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:task index')->name('index');
    Route::post('create','store')->middleware('permission:task create')->name('create');
    Route::put('{id}','edit')->middleware('permission:task edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:task delete')->name('delete');
});
Route::middleware('auth:sanctum')->prefix('team')->controller(TeamController::class)->as('team.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:team index')->name('index');
    Route::post('create','store')->middleware('permission:team create')->name('create');
    Route::put('{id}','edit')->middleware('permission:team edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:team delete')->name('delete');
});
Route::middleware('auth:sanctum')->prefix('ticket')->controller(TicketController::class)->as('ticket.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:ticket index')->name('index');
    Route::post('create','store')->middleware('permission:ticket create')->name('create');
    Route::put('{id}','edit')->middleware('permission:ticket edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:ticket delete')->name('delete');
});
Route::middleware('auth:sanctum')->prefix('warranty')->controller(WarrantyController::class)->as('warranty.')->group(function(){
    Route::get('index/{id?}','index')->middleware('permission:warranty index')->name('index');
    Route::post('create','store')->middleware('permission:warranty create')->name('create');
    Route::put('{id}','edit')->middleware('permission:warranty edit')->name('edit');
    Route::delete('delete/{id}','delete')->middleware('permission:warranty delete')->name('delete');
});
