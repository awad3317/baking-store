<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Featured Recipe (Recipe of the Week or Latest)
        $featuredRecipe = Recipe::with('category')
            ->where('is_recipe_of_the_week', true)
            ->latest()
            ->first();

        if (!$featuredRecipe) {
            $featuredRecipe = Recipe::with('category')->latest()->first();
        }

        // 2. Categories (Limit 6)
        $categories = Category::take(6)->get();

        // 3. Latest Products (Limit 8)
        $products = Product::with(['category','currency'])->latest()->take(5)->get();

        return view('home', compact('featuredRecipe', 'categories', 'products'));
    }
}
