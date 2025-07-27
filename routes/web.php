<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\lab\Lab2;
use App\Http\Controllers\lab\TinController;
use Illuminate\Support\Facades\DB;

// Route::get('demo1', [HomeController::class, 'index'])->name('test-demo1');
// Route::get('/Home', [HomeController::class, 'test']);

// Route::get('/blog', [BlogController::class, 'index']);
// Route::get('/Dashboard', [DashboardController::class, 'index']);

// Route::get('/xemnhieu', [Lab2::class, 'xemNhieu']);
// Route::get('/tinmoi', [Lab2::class, 'tinMoi']);
// Route::get('/chuyen-muc/{id}', [Lab2::class, 'tinTheoChuyenMuc']);
// Route::get('/chi-tiet-tin/{id}', [Lab2::class, 'chiTietTin']);
// //

// Route::get('demo', function () {
// 	return view('welcome');
// });


Route::get('/', [TinController::class, 'index']);
// Route::get('/chi-tiet-san-pham/{id}', [TinController::class, 'chitiet']);
// Route::get('/tin-trong-loai/{id}', [TinController::class, 'tintrongloai']);
// ===== ADMIN ROUTES =====
// Route::prefix('admin')->group(function () {
// 	Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
// 	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
// 	Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index']);
// 	Route::get('/post', [App\Http\Controllers\Admin\PostController::class, 'index']);
// 	Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index']);
// 	Route::get('/card', [App\Http\Controllers\Admin\CardController::class, 'index']);
// 	Route::get('/checkout', [App\Http\Controllers\Admin\CheckoutController::class, 'index']);
// });

// // ===== CLIENT ROUTES =====
// Route::prefix('client')->group(function () {
// 	Route::get('/category', [App\Http\Controllers\Client\CategoryController::class, 'index']);
// 	Route::get('/dashboard', [App\Http\Controllers\Client\DashboardController::class, 'index']);
// 	Route::get('/order', [App\Http\Controllers\Client\OrderController::class, 'index']);
// 	Route::get('/post', [App\Http\Controllers\Client\PostController::class, 'index']);
// 	Route::get('/product', [App\Http\Controllers\Client\ProductController::class, 'index']);
// 	Route::get('/card', [App\Http\Controllers\Client\CartController::class, 'index']);
// 	Route::get('/checkout', [App\Http\Controllers\Client\CheckoutController::class, 'index']);
// });
// --- Admin ---
Route::prefix('admin')->group(function () {
	Route::view('/dashboard', 'admin.dashboard');
	Route::view('/category', 'admin.category');
	Route::view('/product', 'admin.product');
	Route::view('/order', 'admin.order');
	Route::view('/post', 'admin.post');
	Route::view('/card', 'admin.card');
	Route::view('/checkout', 'admin.checkout');
});

// --- Client ---
Route::prefix('client')->group(function () {
	Route::view('/dashboard', 'client.dashboard');
	Route::view('/category', 'client.category');
	Route::view('/product', 'client.product');
	Route::view('/order', 'client.order');
	Route::view('/post', 'client.post');
	Route::view('/card', 'client.card');
	Route::view('/checkout', 'client.checkout');
	Route::view('/login', 'client.login');
	Route::view('/login', 'client.login')->name('login');
});
