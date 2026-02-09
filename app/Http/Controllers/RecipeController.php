<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipesData = Recipe::with('category')->latest()->get();
        $recipes = $recipesData->map(function ($recipe) {
            return [
                'id' => $recipe->id,
                'title' => $recipe->title,
                // إذا كانت الصورة رابط خارجي نستخدمه، وإذا كانت ملف محلي نضيف asset
                'image' => str_starts_with($recipe->image, 'http') ? $recipe->image : asset('storage/' . $recipe->image),
                
                // هام: في الداتابيس الصعوبة 'hard'، لكن في الفرونت إند الكود يتوقع 'pro'
                // نقوم بالتحويل هنا لكي تعمل الأيقونات والألوان بشكل صحيح
                'difficulty' => $recipe->difficulty === 'hard' ? 'pro' : $recipe->difficulty,
                
                'time' => $recipe->prep_time,
                'servings' => $recipe->servings . ' أشخاص', // تنسيق النص
                
                // نرسل الـ slug الخاص بالتصنيف (مثل cakes, tarts) لكي يعمل الفلتر
                'category' => $recipe->category ? $recipe->category->slug : 'other',
                
                'description' => $recipe->description,
            ];
        });

        // جلب التصنيفات من قاعدة البيانات
        $categories = Category::select('slug', 'name')->get();

        return view('web.recipes.index', compact('recipes', 'categories'));
    }

    public function show($slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->with(['steps', 'bundle.products', 'reviews', 'category'])
            ->firstOrFail();

        return view('web.recipes.show', compact('recipe'));
    }
}
