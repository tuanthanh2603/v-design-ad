<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/danh-sach-dich-vu', [ServiceController::class, 'index']);
Route::get('/dich-vu/{serviceSlug}', [ServiceController::class, 'showBySlug']);
Route::get('/danh-muc/{categorySlug}', [ServiceController::class, 'showByCategorySlug']);
Route::get('/du-an/{projectSlug}', [ProjectController::class, 'showBySlug']);

// Dự án
// Dịch vụ
// Sản phẩm
Route::get('/admin', function(){
    return view('login');
});
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::prefix('admin')->middleware('checkRole:admin')->group(function () {
    Route::get('/', [AdminController::class, 'showDashboard']);
    Route::get('/dich-vu', [AdminController::class, 'showService']);
    Route::get('/san-pham', [AdminController::class, 'showProduct']);
    Route::get('/tai-khoan', [AdminController::class, 'showAccount']);
    Route::get('/khach-hang', [AdminController::class, 'showCustomer']);
    Route::get('/danh-muc', [AdminController::class, 'showCategory']);
    Route::get('/tin-tuc', [AdminController::class, 'showNews']);
});
