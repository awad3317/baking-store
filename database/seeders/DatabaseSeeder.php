<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Recipe;
use App\Models\RecipeStep;
use App\Models\Bundle;
use App\Models\Review;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
            AdminUserSeeder::class, // 1. المستخدمين (الأدمن)
            SettingsSeeder::class,  // 2. إعدادات الموقع
            CurrencySeeder::class,  // 3. العملات
            CategorySeeder::class,  // 4. التصنيفات
            ProductSeeder::class,   // 5. المنتجات (تعتمد على ما سبق)
            RecipeSeeder::class,
            TestimonialSeeder::class,
        ]);
       

    }

       
}