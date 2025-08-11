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
}
