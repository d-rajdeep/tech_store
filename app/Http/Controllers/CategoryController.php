<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.view')->with('success', 'Category added successfully!');
    }

    public function index()
    {
        // Show newest category first (highest ID at top)
        $categories = Category::orderBy('id', 'desc')->get();

        return view('admin.categories.view', compact('categories'));
    }
}
