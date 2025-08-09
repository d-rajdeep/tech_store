<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/shop', [PageController::class, 'shop'])->name('shop');

Route::get('/about', [PageController::class, 'about'])->name('about');


Route::get('/product-details', [PageController::class, 'product_details'])->name('product-details');
