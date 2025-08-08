<?php

use App\Http\Controllers\Admin\checkoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CheckoutController as ClientCheckoutController;
use App\Http\Controllers\lab\Lab2;
use App\Http\Controllers\lab\TinController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



// Route::get('/', [TinController::class, 'index']);
// Route::get('/', [TinController::class, 'index'])->name('home');

// Nhóm route cho Admin
Route::name('admin')->prefix('admin')->group(function () {
	Route::name('value:')->prefix('prefix:')->group(function () {
		Route::get('/')->name('name: dashboard');
		Route::get('/category')->name('name: category');
		Route::get('/product')->name('name: product');
		Route::get('/order')->name('name: order');
		Route::get('/post')->name('name: post');
		Route::get('/card')->name('name: card');
		Route::get('/checkout', [checkoutController::class, 'checkout'])->name('admin.checkout');
	});
})->middleware(CheckAdmin::class);

// Nhóm route cho Client
Route::name('client')->prefix('client')->group(function () {

	Route::get('/')->name('name: home');
	Route::get('/dashboard')->name('name: dashboard');
	Route::get('/category')->name('name: category');
	Route::get('/product')->name('name: product');
	Route::get('/order')->name('name: order');
	Route::get('/post')->name('name: post');
	Route::get('/card')->name('name: card');
	Route::get('/checkout', [ClientCheckoutController::class, 'checkout'])->name('checkout');
	Route::get('/blog')->name('name: blog');
})->middleware('middleware:auth');


Route::get('/', function () {
	return view('welcome');
});
