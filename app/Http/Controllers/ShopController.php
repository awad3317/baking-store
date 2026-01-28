<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['category', 'images']);

        // Filter by Category
        if ($request->has('category')) {
            $category = Category::where('slug', $request->category)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        // Pagination
        $products = $query->latest()->paginate(12)->withQueryString();

        // Categories for Sidebar
        $categories = Category::withCount('products')->get();

        return view('shop', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->with(['images', 'category', 'reviews'])
            ->firstOrFail();

        return view('product-details', compact('product'));
    }
}
