<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/shop', [PageController::class, 'shop'])->name('shop');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/product-details', [PageController::class, 'product_details'])->name('product-details');

Route::get('/cart', [PageController::class, 'cart'])->name('cart');

Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/admin/login', [PageController::class, 'login'])->name('admin.login');

Route::get('/user/register', [PageController::class, 'register'])->name('user.register');

Route::get('/register', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected dashboard route
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});