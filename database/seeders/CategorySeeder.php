<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
           'القوالب', 'الكريمات والحشوات', 'أدوات', 'فن الطعام', 'التغليف','حلويات باردة','معجنات','كيك','تزيين','تارت'
        ];

        foreach ($categories as $catName) {
            Category::firstOrCreate(
                ['slug' => Str::slug($catName)],
                [
                    'name' => $catName,
                ]
            );
        }
    }
}