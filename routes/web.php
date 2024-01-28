<?php

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ManageCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::prefix('du-an')->group(function() {
    Route::get('/', [ProjectController::class, 'showProject']);
});
// Dịch vụ
Route::prefix('dich-vu')->group(function() {
    Route::get('/', [ServiceController::class, 'showService']);
});
// Sản phẩm
Route::prefix('san-pham')->group(function() {
    Route::get('/', [ProductController::class, 'showProduct']);
});
// Liên hệ
Route::prefix('lien-he')->group(function() {
    Route::get('/', [ContactController::class, 'showContact']);
    Route::post('/sendMessage', [ContactController::class, 'sendMessage']); // post [name, phone, message, status, date]
});


Route::get('/gioi-thieu', [HomeController::class, 'showIntroduce']);
Route::get('/xu-huong-thiet-ke', [HomeController::class, 'showNews']);

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::post('/register', [AdminController::class, 'register'])->name('register');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::prefix('admin')->middleware('checkRole:admin')->group(function () {
    Route::get('/', [AdminController::class, 'showDashboard'])->name('showDashboard');
    Route::get('/dich-vu', [AdminController::class, 'showService']);
    Route::get('/san-pham', [AdminController::class, 'showProduct']);
    Route::get('/tai-khoan', [AdminController::class, 'showAccount']);
    Route::get('/khach-hang', [AdminController::class, 'showCustomer']);
    Route::get('/tin-tuc', [AdminController::class, 'showNews']);
    Route::prefix('images')->group(function () {
        Route::post('upload', [ImageController::class, 'upload'])->name('image.upload');
    });
    Route::prefix('categories')->group(function () {
        Route::get('', [ManageCategoryController::class, 'index']);
        Route::post('/create', [ManageCategoryController::class, 'create'])->name('admin.categories.create');
        Route::get('/edit/{id}', [ManageCategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/edit/{id}', [ManageCategoryController::class, 'update']);
        Route::delete('/destroy', [ManageCategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });
});
