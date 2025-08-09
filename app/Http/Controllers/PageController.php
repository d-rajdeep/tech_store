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

    public function product_details(){
        return view('product-details');
    }
}
