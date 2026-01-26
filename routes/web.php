<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd',
            'title' => 'مجموعة قوالب السيليكون',
            'description' => 'سيليكون غذائي ممتاز',
            'price' => '55.00 ر.س',
            'badge' => 'الأكثر مبيعاً',
        ],
        [
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw',
            'title' => 'رقائق الذهب الصالحة للأكل',
            'description' => 'ذهب عيار 24 قيراط',
            'price' => '82.00 ر.س',
            'badge' => 'الأكثر مبيعاً',
        ],
        [
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof',
            'title' => 'حبيبات الشوكولاتة البلجيكية (داكنة)',
            'description' => '54.5% مواد صلبة كاكاو',
            'price' => '68.00 ر.س',
        ],
        [
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y',
            'title' => 'طقم أقماع تزيين احترافي',
            'description' => '24 قطعة ستانلس ستيل',
            'price' => '120.00 ر.س',
        ],
        [
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDii73SFJez4obkgSgJT_6a38v900GUS7JS1pyAAC5LR4uyrWlLV3iOi6vkr6FJfExOKS3Cjc-AY66O872Kl24Wn79Vci7SSy_y0iblaNWkCXlBPH0SfKdtwh_C1MPAMkKOaEoqCm09f8U7C99OSdoh3gbhPZUhwfKt_FzD9VP4u9qtcEI7PepKwNd2Q8bLdTIcR1QvFM7kYlNn66RijKSsnbum97sLR7uRFZJI-Dn6xsalQ98E1CZHBILPVCpHQLYBaSyV0-oX67FK',
            'title' => 'علب ماكرون',
            'description' => 'عبوة 12 قطعة، وردي فاتح',
            'price' => '45.00 ر.س',
        ],
    ];

    return view('home', ['products' => $products]);
})->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/recipes', function () {
    return view('recipes');
})->name('recipes');

