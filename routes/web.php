<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerAuthController;



Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('admin.product.show');

// frontend product details
Route::get('/product/{id}', [ProductController::class, 'frontendShow'])->name('product.show');


Route::get('/shop', [PageController::class, 'shop'])->name('shop');


Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/product-details', [PageController::class, 'product_details'])->name('product-details');

// Route::get('/cart', [PageController::class, 'cart'])->name('cart');

// Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::group(["prefix" => "admin"], function () {
    Route::match(['get', 'post'], 'login', [PageController::class, 'login'])->name('admin.login');
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});


Route::get('/user/register', [PageController::class, 'register'])->name('user.register');

Route::get('/register', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');


// Login routes
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected dashboard route
// Route::middleware('auth')->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });




//Admin Dashboard page
Route::get('/admin/dashboard/add-product', [PageController::class, 'add_product'])->name('admin.add-product');
Route::get('/admin/dashboard/products', [PageController::class, 'products'])->name('admin.products');
Route::get('/admin/product-categorie', [PageController::class, 'product_categorie'])->name('product-categorie');
Route::get('/admin/dashboard/customers', [PageController::class, 'customers'])->name('admin.customers');
Route::get('/admin/dashboard/customer-details', [PageController::class, 'customer_details'])->name('admin.customer-details');
Route::get('/admin/dashboard/orders', [PageController::class, 'orders'])->name('admin.orders');
Route::get('/admin/dashboard/order-details', [PageController::class, 'order_details'])->name('admin.order-details');

// Product
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/product', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('/admin/product/view', [ProductController::class, 'index'])->name('admin.product.view');

Route::post('/admin/product/{id}/product-publish', [ProductController::class, 'productPublish'])->name('products.productPublish');



// Category
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/categories/view', [CategoryController::class, 'index'])->name('admin.categories.view');

// cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Checkout
// Route::get('/checkout', function () {
//     $cart = session()->get('cart', []);
//     return view('checkout', compact('cart'));
// })->name('checkout.index');

// Orders
Route::get('/admin/orders/view', [OrderController::class, 'index'])->name('admin.orders.view');
Route::get('/admin/orders/view-details', [OrderController::class, 'view'])->name('admin.orders.view-details');

Route::post('/checkout/place-order', [OrderController::class, 'store'])->name('checkout.store');
Route::get('/order-success/{id}', [OrderController::class, 'success'])->name('orders.success');

// Customer Auth //
// Customer Register
Route::get('/customer/register', [CustomerAuthController::class, 'showRegister'])->name('customer.register');
Route::post('/customer/register', [CustomerAuthController::class, 'register'])->name('customer.register.post');

// Customer Login
Route::get('/customer/login', [CustomerAuthController::class, 'showLogin'])->name('customer.login');
Route::post('/customer/login', [CustomerAuthController::class, 'login'])->name('customer.login.post');

// Protected Customer Routes
Route::middleware('auth:customer')->prefix('customer')->group(function () {
    Route::get('/dashboard', fn() => view('customer.dashboard'))->name('customer.dashboard');
    Route::get('/checkout', fn() => view('checkout', ['cart' => session()->get('cart', [])]))->name('customer.checkout');
    Route::get('/orders', fn() => view('customer.orders'))->name('customer.orders');
    Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');
});

Route::middleware('auth:customer')->prefix('customer')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('customer.orders');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('customer.orders.show');
    Route::post('/orders/{id}/cancel', [OrderController::class, 'cancel'])->name('customer.orders.cancel');
});


// Route::post('/customer/login', [CustomerAuthController::class, 'login'])->name('customer.login.post');

// Route::post('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

// Protected
// Route::middleware(['auth:customer'])->group(function () {
//     Route::get('/customer/dashboard', fn() => view('customer.dashboard'))->name('customer.dashboard');
// Route::get('/checkout', fn() => view('checkout', ['cart' => session()->get('cart', [])]))->name('checkout.index');

// // Example: Customer Orders Page
// Route::get('/customer/orders', function () {
//     return view('customer.orders');
// })->name('customer.orders');
// });
