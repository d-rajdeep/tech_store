<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use app\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::where('is_published', true)->latest()->get();
        return view('index', compact('products'));
    }

    public function shop()
    {
        // products for the grid (only published example)
        $products = Product::with('category')
            ->where('is_published', true)   // optional
            ->latest()
            ->paginate(12);

        // categories for sidebar (with product counts)
        $categories = Category::withCount('products')->orderBy('name')->get();
        return view('shop', compact('products', 'categories'));
    }


    public function about()
    {
        return view('about');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function product_details()
    {
        return view('product-details');
    }

    public function product_categorie()
    {
        return view('admin.product-categorie');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('user.register');
    }

    //Admin Dashboard
    public function add_product()
    {
        return view('admin.add-product');
    }
    public function products()
    {
        return view('admin.products');
    }
    public function customers()
    {
        return view('admin.customers');
    }
    public function customer_details()
    {
        return view('admin.customer-details');
    }
    public function orders()
    {
        return view('admin.orders');
    }
    public function order_details()
    {
        return view('admin.order-details');
    }
};
