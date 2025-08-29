<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


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

//Admin Dashboard page
Route::get('/admin/dashboard/add-product',[PageController::class, 'add_product'])->name('admin.add-product');
Route::get('/admin/dashboard/products',[PageController::class, 'products'])->name('admin.products');
Route::get('/admin/product-categorie', [PageController::class,'product_categorie'])->name('product-categorie');
Route::get('/admin/dashboard/customers',[PageController::class, 'customers'])->name('admin.customers');
Route::get('/admin/dashboard/customer-details',[PageController::class, 'customer_details'])->name('admin.customer-details');
Route::get('/admin/dashboard/orders',[PageController::class, 'orders'])->name('admin.orders');
Route::get('/admin/dashboard/order-details',[PageController::class, 'order_details'])->name('admin.order-details');

// Product
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('/admin/product/view', [ProductController::class, 'index'])->name('admin.product.view');


// Category
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/categories/view', [CategoryController::class, 'index'])->name('admin.categories.view');

