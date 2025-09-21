<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

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

    // public function cart()
    // {
    //     return view('cart');
    // }

    // public function checkout()
    // {
    //     return view('checkout');
    // }

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

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.login');
        } else {
            $request->validate([
                'email' => 'required|email|exists:registrations,email',
                'password' => 'required|min:6',
            ]);

            $user = Registration::where('email', $request->email)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                // Auth::login($user, $request->has('remember'));
                return view('admin.dashboard')->with('success', 'Login successful');
            }

            return back()->with('error', 'Invalid credentials');
        }
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
