<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionController;
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

//Route::get('/', [OrderController::class, 'index']);
//Route::get('/tentang', [OrderController::class, 'tentang']);
//
//Route::get('/order', [OrderController::class, 'index']);
//Route::get('order/{order_no}', [OrderController::class, 'detail']);

Route::view('/', 'welcome');

Route::resource('order', OrderController::class);

Route::get('/login', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'login']);
Route::get('/logout', [SessionController::class, 'logout']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/create', [SessionController::class, 'create']);

Route::get('serve', [ServeController::class, 'index']);
Route::get('listorder', [ServeController::class, 'listServe']);
Route::post('serve-order', [ServeController::class, 'serveOrder']);

Route::get('/serve/close/{id}', [ServeController::class, 'close']);
Route::get('/serve/cancle/{id}', [ServeController::class, 'cancle']);
Route::get('/serve/approve/{id}', [ServeController::class, 'approve']);


Route::prefix('service')->group(function () {
    Route::get('', [ServiceController::class, 'getData']);
    Route::get('add', [ServiceController::class, 'add']);
    Route::post('create', [ServiceController::class, 'create']);
    Route::get('edit/{id}', [ServiceController::class, 'edit']);
    Route::get('detail/{id}', [ServiceController::class, 'getDetail']);
    Route::put('edit/{id}', [ServiceController::class, 'update']);
    Route::delete('delete/{id}', [ServiceController::class, 'delete']);
});
