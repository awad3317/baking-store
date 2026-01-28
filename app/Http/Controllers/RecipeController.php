<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('category')->latest()->paginate(9);
        return view('web.recipes.index', compact('recipes'));
    }

    public function show($slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->with(['steps', 'bundle.products', 'reviews', 'category'])
            ->firstOrFail();

        return view('web.recipes.show', compact('recipe'));
    }
}
