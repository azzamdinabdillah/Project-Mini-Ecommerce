<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\main_controller;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [main_controller::class, 'index']);
Route::get('/allProduct', [main_controller::class, 'allProduct']);
Route::get('/store/{id}', [main_controller::class, 'store']);
Route::get('/detailProduk/{id}', [main_controller::class, 'detail']);
Route::get('/categories/{judul}/{idCategory}', [main_controller::class, 'categoriesDetails']);

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::get('/registration', [AuthController::class, 'registration'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {    
    Route::get('/chart', [main_controller::class, 'chart']);
    Route::get('/chart/checkOut', [main_controller::class, 'checkOut']);
});

// require __DIR__.'/auth.php';
