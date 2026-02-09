<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        // 1. خريطة لربط الاسم العربي (الموجود عندك) بالـ Slug الإنجليزي (المطلوب للفلترة)
        $categoryMap = [
            'حلويات باردة' => 'cold_desserts',
            'معجنات'       => 'pastries',
            'كيك'          => 'cakes',
            'تزيين'        => 'decoration',
            'تارت'         => 'tarts',
        ];

        $catIds = [];

        foreach ($categoryMap as $arabicName => $englishSlug) {
            // نبحث عن التصنيف بالاسم العربي
            $category = DB::table('categories')->where('name', $arabicName)->first();

            if ($category) {
                // إذا وجدناه، نحدث الـ Slug ليناسب الفلاتر في الفرونت اند
                DB::table('categories')->where('id', $category->id)->update(['slug' => $englishSlug]);
                $catIds[$englishSlug] = $category->id;
            } else {
                // إذا لم يكن موجوداً (احتياطاً)، ننشئه
                $id = DB::table('categories')->insertGetId([
                    'name' => $arabicName,
                    'slug' => $englishSlug,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                $catIds[$englishSlug] = $id;
            }
        }

        // 2. إدخال الوصفات
        $recipes = [
            [
                'category_id' => $catIds['cold_desserts'],
                'title' => 'تشيز كيك الفراولة البارد',
                'slug' => 'strawberry-cheesecake-cold',
                'description' => 'وصفة كلاسيكية بقوام كريمي ناعم وطبقة بسكويت مقرمشة، مزينة بصلصة الفراولة الطازجة.',
                'image' => 'https://images.unsplash.com/photo-1508737027454-e6454ef45afd?auto=format&fit=crop&w=800&q=80',
                'is_recipe_of_the_week' => true,
                'video_url' => null,
                'difficulty' => 'medium',
                'prep_time' => 45,
                'servings' => 8,
                'chef_name' => 'الشيف منال',
                'ingredients_text' => "- 2 كوب بسكويت مطحون\n- 100غ زبدة\n- 500غ جبن كريمي\n- كوب كريمة خفق\n- فراولة طازجة",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => $catIds['pastries'],
                'title' => 'الماكرون الفرنسي المثالي',
                'slug' => 'perfect-french-macaron',
                'description' => 'تعلمي أسرار الماكرون الناجح، من الميرانج المتماسك إلى الحشوة الغنية (الغناش).',
                'image' => 'https://images.unsplash.com/photo-1569864358642-9d1684040f43?auto=format&fit=crop&w=800&q=80',
                'is_recipe_of_the_week' => false,
                'video_url' => null,
                'difficulty' => 'hard',
                'prep_time' => 90,
                'servings' => 24,
                'chef_name' => 'الشيف بيير',
                'ingredients_text' => "- بياض بيض\n- دقيق لوز ناعم\n- سكر بودرة\n- ألوان طعام جل",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => $catIds['cakes'],
                'title' => 'ترافل الشوكولاتة الداكنة',
                'slug' => 'dark-chocolate-truffles',
                'description' => 'حلوى فاخرة وسريعة التحضير باستخدام حبيبات الشوكولاتة البلجيكية عالية الجودة.',
                'image' => 'https://images.unsplash.com/photo-1548848221-0c2e497ed557?auto=format&fit=crop&w=800&q=80',
                'is_recipe_of_the_week' => false,
                'video_url' => null,
                'difficulty' => 'easy',
                'prep_time' => 30,
                'servings' => 15,
                'chef_name' => 'الشيف سارة',
                'ingredients_text' => "- شوكولاتة داكنة 70%\n- كريمة خفق\n- كاكاو بودرة للتغطية",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => $catIds['cakes'],
                'title' => 'كيك الموس الهندسي',
                'slug' => 'geometric-mousse-cake',
                'description' => 'استخدمي قوالب السيليكون الحديثة لصنع كيكة موس فانيليا مذهلة بشكل هندسي.',
                'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80',
                'is_recipe_of_the_week' => true,
                'video_url' => null,
                'difficulty' => 'medium',
                'prep_time' => 180,
                'servings' => 10,
                'chef_name' => 'الشيف أحمد',
                'ingredients_text' => "- جيلاتين\n- كريمة خفق\n- فانيليا طبيعية\n- قالب سيليكون هندسي",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => $catIds['decoration'],
                'title' => 'تزيين الحلويات بالذهب',
                'slug' => 'gold-leaf-decoration',
                'description' => 'طريقة التعامل مع رقائق الذهب عيار 24 الصالحة للأكل لإضافة لمسة فخامة لمنتجاتك.',
                'image' => 'https://images.unsplash.com/photo-1621303837174-89787a7d4729?auto=format&fit=crop&w=800&q=80',
                'is_recipe_of_the_week' => false,
                'video_url' => null,
                'difficulty' => 'hard',
                'prep_time' => 15,
                'servings' => 1,
                'chef_name' => 'سويت سبلايز تيم',
                'ingredients_text' => "- رقائق ذهب قابلة للأكل\n- ملقط دقيق\n- فرشاة ناعمة",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => $catIds['decoration'],
                'title' => 'دليل استخدام أقماع التزيين',
                'slug' => 'piping-tips-guide',
                'description' => 'تعرفي على أشكال الأقماع المختلفة وكيفية صنع ورود وكشكشة مثالية بالكريمة.',
                'image' => 'https://images.unsplash.com/photo-1588195538326-c5f1f9fa478f?auto=format&fit=crop&w=800&q=80',
                'is_recipe_of_the_week' => false,
                'video_url' => null,
                'difficulty' => 'easy',
                'prep_time' => 60,
                'servings' => 1,
                'chef_name' => 'الشيف منال',
                'ingredients_text' => "- كريمة زبدة متماسكة\n- مجموعة أقماع روسية\n- أكياس حلواني",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('recipes')->insert($recipes);
    }
}