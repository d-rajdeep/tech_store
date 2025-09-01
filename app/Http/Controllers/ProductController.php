<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function create()
    {
        // fetch categories (order by name is optional)
        $categories = Category::orderBy('name')->get();

        // pass to view
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'price'       => 'required|numeric|min:0',
            'sku'         => 'required|string|max:255|unique:products,sku',
            'category_id' => 'required|exists:categories,id', // ✅ validate category
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $imagePath,
            'price'       => $request->price,
            'sku'         => $request->sku,
            'category_id' => $request->category_id, // ✅ save category
        ]);

        return redirect()->route('admin.product.view')->with('success', 'Product added successfully!');
    }

    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('admin.product.view', compact('products'));
    }

    public function productPublish($id)
    {
        $product = Product::findOrFail($id);
        $product->is_published = !$product->is_published;
        $product->save();

        return redirect()->back()->with('success', 'Product publish status updated successfully!');
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('index', compact('product'));
    }
}
