<?php

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ManageCategoryController;
use App\Http\Controllers\Admin\ManageContactController;
use App\Http\Controllers\Admin\ManagePostController;
use App\Http\Controllers\Admin\ManageProjectController;
use App\Http\Controllers\Admin\ManageServiceController;
use App\Http\Controllers\Admin\ManageTopicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SearchController;
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
// Route::get('/danh-sach-dich-vu', [ServiceController::class, 'index']);
// Route::get('/du-an', [ProjectController::class, 'index']);
Route::get('/dich-vu/{serviceSlug}', [ServiceController::class, 'showBySlug']);
Route::get('/danh-muc/{categorySlug}', [ProjectController::class, 'showByCategorySlug']);
// Route::get('/du-an/{projectSlug}', [ProjectController::class, 'showBySlug']);
// Dự án
Route::prefix('du-an')->group(function() {
    Route::get('/search', [ProjectController::class, 'search']);
    Route::get('/', [ProjectController::class, 'index']);
    Route::get('/{projectSlug}', [ProjectController::class,'showProjectDetailBySlug']);
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
    Route::post('/sendMessage', [ContactController::class, 'sendMessage'])->name('contact.sendMessage'); // post [name, phone, message, status, date]
});

Route::get('/search', [SearchController::class, 'searchByKeyword'])->name('search.by.keyword');
Route::get('/gioi-thieu', [HomeController::class, 'showIntroduce']);
Route::get('/xu-huong-thiet-ke', [HomeController::class, 'showNews']);
Route::get('/bai-viet/{newSlug}', [PostController::class, 'showPostDetailBySlug']);

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
        Route::post('/multi/upload', [ImageController::class, 'multiUpload'])->name('image.multiUpload');
    });
    Route::prefix('categories')->group(function () {
        Route::get('', [ManageCategoryController::class, 'index'])->name('admin.categories.index');
        Route::post('/create', [ManageCategoryController::class, 'create'])->name('admin.categories.create');
        Route::get('/edit/{id}', [ManageCategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/edit/{id}', [ManageCategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/destroy', [ManageCategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });
    Route::prefix('projects')->group(function () {
        Route::get('', [ManageProjectController::class, 'index']);
        Route::post('/create', [ManageProjectController::class, 'create'])->name('admin.projects.create');
        Route::get('/edit/{id}', [ManageProjectController::class, 'edit'])->name('admin.projects.edit');
        Route::post('/edit/{id}', [ManageProjectController::class, 'update']);
        Route::delete('/destroy', [ManageProjectController::class, 'destroy'])->name('admin.projects.destroy');
    });
    Route::prefix('services')->group(function () {
        Route::get('', [ManageServiceController::class, 'index'])->name('admin.services.index');
        Route::post('/create', [ManageServiceController::class, 'create'])->name('admin.services.create');
        Route::get('/edit/{id}', [ManageServiceController::class, 'edit'])->name('admin.services.edit');
        Route::post('/edit/{id}', [ManageServiceController::class, 'update'])->name('admin.services.update');
        Route::delete('/destroy', [ManageServiceController::class, 'destroy'])->name('admin.services.destroy');
    });
    Route::prefix('contacts')->group(function () {
        Route::get('', [ManageContactController::class, 'index']);
        Route::post('/create', [ManageContactController::class, 'create'])->name('admin.contacts.create');
        Route::get('/edit/{id}', [ManageContactController::class, 'edit'])->name('admin.contacts.edit');
        Route::post('/edit/{id}', [ManageContactController::class, 'update']);
        Route::put('/update-status/{id}', [ManageContactController::class, 'updateStatus'])->name('admin.contacts.updateStatus');
        Route::delete('/destroy', [ManageContactController::class, 'destroy'])->name('admin.contacts.destroy');
    });
    Route::prefix('topics')->group(function () {
        Route::get('', [ManageTopicController::class, 'index'])->name('admin.topics.index');
        Route::post('/create', [ManageTopicController::class, 'create'])->name('admin.topics.create');
        Route::get('/edit/{id}', [ManageTopicController::class, 'edit'])->name('admin.topics.edit');
        Route::post('/edit/{id}', [ManageTopicController::class, 'update'])->name('admin.topics.update');
        Route::delete('/destroy', [ManageTopicController::class, 'destroy'])->name('admin.topics.destroy');
    });
    Route::prefix('posts')->group(function () {
        Route::get('', [ManagePostController::class, 'index']);
        Route::post('/create', [ManagePostController::class, 'create'])->name('admin.posts.create');
        Route::get('/edit/{id}', [ManagePostController::class, 'edit'])->name('admin.posts.edit');
        Route::post('/edit/{id}', [ManagePostController::class, 'update']);
        Route::delete('/destroy', [ManagePostController::class, 'destroy'])->name('admin.posts.destroy');
    });
});
