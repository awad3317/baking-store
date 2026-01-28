<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $recipes = [
            [
                'category_id' => 1,
                'title' => 'كيكة الشوكولاتة الغنية',
                'slug' => 'rich-chocolate-cake', // يجب أن يكون فريداً
                'description' => 'وصفة كيكة شوكولاتة هشة وطرية مع صوص الشوكولاتة الساخن.',
                'image' => 'https://images.unsplash.com/photo-1590080875515-8a3a8dc5735e?auto=format&fit=crop&q=80&w=600',
                'is_recipe_of_the_week' => true, // سنجعل هذه وصفة الأسبوع
                'video_url' => 'https://www.youtube.com/watch?v=example1',
                'difficulty' => 'easy',
                'prep_time' => 45,
                'servings' => 8,
                'chef_name' => 'الشيف منال',
                'ingredients_text' => "- 2 كوب دقيق\n- 1 كوب سكر\n- نصف كوب كاكاو\n- 3 بيضات",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'title' => 'معكرونة بالبشاميل والموزاريلا',
                'slug' => 'pasta-bechamel',
                'description' => 'طبق المعكرونة الكلاسيكي بلمسة إيطالية وجبنة الموزاريلا السائلة.',
                'image' => 'recipes/pasta.jpg',
                'is_recipe_of_the_week' => false,
                'video_url' => null,
                'difficulty' => 'medium',
                'prep_time' => 60,
                'servings' => 6,
                'chef_name' => 'الشيف بوراك',
                'ingredients_text' => "- 500 جرام معكرونة\n- لحم مفروم\n- حليب\n- دقيق وزبدة للبشاميل",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 3,
                'title' => 'ستيك ريب آي مع الروزماري',
                'slug' => 'rib-eye-steak',
                'description' => 'طريقة تحضير الستيك الفاخر في المنزل بنفس جودة المطاعم.',
                'image' => 'recipes/steak.jpg',
                'is_recipe_of_the_week' => false,
                'video_url' => 'https://www.youtube.com/watch?v=example3',
                'difficulty' => 'hard',
                'prep_time' => 30,
                'servings' => 2,
                'chef_name' => 'غوردون رامزي',
                'ingredients_text' => "- شريحة ريب آي\n- روزماري طازج\n- ثوم\n- زبدة\n- ملح وفلفل أسود",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('recipes')->insert($recipes);
    }
}