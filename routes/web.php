<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', function(){
    return view('login');
});
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'showLogin']);
    Route::get('/dashboard', [AdminController::class, 'showDashboard']);
    Route::get('/san-pham', [AdminController::class, 'showProduct']);
    Route::get('/tai-khoan', [AdminController::class, 'showAccount']);
    Route::get('/khach-hang', [AdminController::class, 'showCustomer']);
});
