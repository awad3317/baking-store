<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'stars' => 5,
                'text' => '"أفضل متجر لمستلزمات الحلويات! الجودة ممتازة والتوصيل سريع جداً. القوالب ساعدتني كثيراً في مشروعي الخاص."',
                'name' => 'سارة الأحمد',
                'role' => 'صانعة كيك',
                'color' => 'dusty-rose',
                'active' => true,
            ],
            [
                'stars' => 4.5,
                'text' => '"الشكولاتة البلجيكية طعمها لا يقاوم، وتغليف المنتجات رائع ويحافظ عليها. شكراً لكم على هذا الاهتمام بالتفاصيل."',
                'name' => 'خالد محمد',
                'role' => 'شيف حلويات',
                'color' => 'primary',
                'active' => true,
            ],
            [
                'stars' => 5,
                'text' => '"تعامل راقي وخدمة عملاء متميزة. المنتجات نادرة وما ألقاها في أي مكان ثاني بنفس الجودة والسعر."',
                'name' => 'مريم العلي',
                'role' => 'هاوية طبخ',
                'color' => 'warm-brown',
                'active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
