<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Review;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        // 2. جلب جميع التصنيفات الموجودة لربط المنتجات بها
        $categoryIds = Category::pluck('id')->toArray();

        // 3. مصفوفة المنتجات (البيانات التي طلبتها)
        $products = [
            [
                'image' => 'https://images.unsplash.com/photo-1590080875515-8a3a8dc5735e?auto=format&fit=crop&q=80&w=600', // استبدلت الروابط بأخرى تعمل للتجربة
                'title' => 'مجموعة قوالب السيليكون',
                'description' => 'سيليكون غذائي ممتاز عالي الجودة، يتحمل درجات الحرارة العالية والبرودة، مثالي للكيك والموس.',
                'price' => '55.00',
                'badge' => 'الأكثر مبيعاً',
                'currency_id'=>1
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1615837136007-701de6015cfb?auto=format&fit=crop&q=80&w=600',
                'title' => 'رقائق الذهب الصالحة للأكل',
                'description' => 'ذهب عيار 24 قيراط للتزيين الفاخر، يضيف لمسة من الأناقة والرفاهية لحلوياتك.',
                'price' => '82.00',
                'badge' => 'الأكثر مبيعاً',
                'currency_id'=>2
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476d?auto=format&fit=crop&q=80&w=600',
                'title' => 'حبيبات الشوكولاتة البلجيكية (داكنة)',
                'description' => '54.5% مواد صلبة كاكاو، تذوب بانسيابية ومثالية للغاناش والخبز.',
                'price' => 68.00,
                'sale_price'=> 60.00,
                'currency_id'=>3
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1590080875515-8a3a8dc5735e?auto=format&fit=crop&q=80&w=600',
                'title' => 'طقم أقماع تزيين احترافي',
                'description' => '24 قطعة ستانلس ستيل متنوعة الأشكال لتزيين الكريمة باحترافية.',
                'price' => 120.00,
                'sale_price'=> 100.00,
                'currency_id' =>1
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1579372786151-6a9a67417a6e?auto=format&fit=crop&q=80&w=600',
                'title' => 'علب ماكرون فاخرة',
                'description' => 'عبوة 12 قطعة، وردي فاتح مع نافذة شفافة لعرض الحلويات بشكل جذاب.',
                'price' => '45.00',
                'currency_id'=>2
            ],
        ];

        // 4. الحلقة (Loop) لإنشاء المنتجات
        foreach ($products as $item) {
            
            // تنظيف السعر: حذف " ر.س" وتحويله لرقم (55.00)
            $cleanPrice = floatval(str_replace([' ر.س', ','], '', $item['price']));

            // إنشاء المنتج
            $product = Product::create([
                'category_id' => $categoryIds[array_rand($categoryIds)], // اختيار تصنيف عشوائي
                'currency_id' => $item['currency_id'],
                'title' => $item['title'],
                'slug' => Str::slug($item['title']) . '-' . Str::random(4),
                'description' => $item['description'], // يمكنك إضافة الـ badge هنا إذا أردت
                'image' => $item['image'], // الصورة الرئيسية
                'price' => $cleanPrice,
                'sale_price' => $cleanPrice - 10,
                'stock' => rand(10, 50),
            ]);

            // إضافة الصورة الرئيسية للمعرض أيضاً (ضروري للسلايدر)
            // ProductImage::create([
            //     'product_id' => $product->id,
            //     'image_path' => $item['image']
            // ]);

            // إضافة صور إضافية وهمية للمعرض (اختياري)
            // ProductImage::factory()->count(2)->create([
            //     'product_id' => $product->id
            // ]);

            // إضافة تقييمات وهمية لتبدو المنتجات حية
            // Review::factory()->count(rand(2, 5))->create([
            //     'reviewable_id' => $product->id,
            //     'reviewable_type' => Product::class,
            //     'is_approved' => true,
            // ]);
        }
    }
}