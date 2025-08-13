<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function shop(){
        return view('shop');
    }

    public function about(){
        return view('about');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function product_details(){
        return view('product-details');
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('admin.login');
    }

    public function register(){
        return view('user.register');
    }

    //Admin Dashboard
    public function add_product(){
        return view('admin.add-product');
    }
    public function products(){
        return view('admin.products');
    }
    public function customers(){
        return view('admin.customers');
    }
    public function customer_details(){
        return view('admin.customer-details');
    }
    public function orders(){
        return view('admin.orders');
    }
    public function order_details(){
        return view('admin.order-details');
    }
}
