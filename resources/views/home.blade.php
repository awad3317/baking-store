@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative h-[85vh] min-h-[600px] w-full overflow-hidden">
        <div class="absolute inset-0">
            <div class="h-full w-full bg-cover bg-center animate-ken-burns" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU');"></div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-dusty-rose/90 via-dusty-rose/40 to-gold-accent/40 mix-blend-normal dark:from-[#211116]/90 dark:via-[#211116]/70 dark:to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent"></div>
        <div class="relative z-10 flex h-full max-w-7xl mx-auto flex-col justify-center px-6 md:px-12 pt-16">
            <div class="max-w-2xl text-right">
                <span class="glass-premium mb-4 inline-flex items-center gap-2 rounded-full px-4 py-1.5 text-sm font-bold text-white opacity-0-start animate-fade-up">
                    <span class="h-2 w-2 rounded-full bg-gold-accent animate-pulse"></span>
                    تشكيلة جديدة وحصرية
                </span>
                <h2 class="mb-6 text-5xl font-extrabold leading-tight text-white md:text-7xl lg:text-8xl drop-shadow-md opacity-0-start animate-fade-up delay-100">
                    ارتقِ بإبداعاتك <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-shimmer to-white">الشهية</span>
                </h2>
                <p class="mb-10 text-lg leading-relaxed text-pale-rose md:text-xl font-medium drop-shadow opacity-0-start animate-fade-up delay-200 max-w-lg">
                    قوالب سيليكون احترافية ومكونات فاخرة لصانع الحلويات المنزلي. حوّلي مطبخك إلى معمل حلويات عالمي.
                </p>
                <div class="flex flex-wrap gap-4 opacity-0-start animate-fade-up delay-300">
                    <a href="{{ route('shop') }}" class="group relative flex items-center gap-3 rounded-xl glass-premium px-8 py-4 text-base font-bold text-white transition-all hover:bg-white/20 hover:scale-105 hover:border-white/60">
                        تسوق الآن
                        <span class="material-symbols-outlined transition-transform duration-300 group-hover:-translate-x-1 rotate-180">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-white/10 w-full z-20">
            <div class="h-full bg-gradient-to-r from-gold-accent to-gold-shimmer origin-right animate-progress w-full shadow-[0_0_10px_rgba(212,175,55,0.5)]"></div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="relative z-20 -mt-12 mb-12 px-4 md:px-6">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach([
                    ['icon' => 'star', 'title' => 'جودة عالية', 'desc' => 'منتجات أصلية ومضمونة'],
                    ['icon' => 'local_shipping', 'title' => 'شحن سريع', 'desc' => 'توصيل لباب منزلك'],
                    ['icon' => 'headset_mic', 'title' => 'دعم متواصل', 'desc' => 'خدمة عملاء عبر واتساب'],
                    ['icon' => 'verified_user', 'title' => 'دفع آمن', 'desc' => 'الدفع عند الاستلام متاح'],
                ] as $feature)
                    <div class="group relative overflow-hidden rounded-2xl bg-orange-50 border border-gold-accent/10 p-6 text-center shadow-lg shadow-black/5 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/60 to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                        <div class="relative z-10 mb-4 flex justify-center text-dusty-rose transition-transform duration-500 group-hover:scale-110">
                            <span class="material-symbols-outlined text-6xl group-hover:animate-pulse">{{ $feature['icon'] }}</span>
                        </div>
                        <h3 class="relative z-10 mb-1 text-lg font-bold text-warm-brown dark:text-white group-hover:text-primary transition-colors">{{ $feature['title'] }}</h3>
                        <p class="relative z-10 text-sm font-medium text-dusty-dark dark:text-gray-400">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Categories Filter --}}
    <section class="sticky top-[85px] z-30 mx-auto max-w-7xl border-b border-[#f0ebed] bg-background-light/95 px-4 pt-2 py-4 backdrop-blur-sm md:px-6 dark:bg-background-dark/95 dark:border-[#3a2d32]">
        <div class="no-scrollbar flex gap-3 overflow-x-auto">
            <button class="shrink-0 rounded-full bg-warm-brown px-6 py-2 text-sm font-medium text-white transition-colors hover:bg-primary">الكل</button>
            @foreach(['القوالب', 'الكريمات والحشوات', 'أدوات', 'فن الطعام', 'التغليف'] as $category)
                <button class="shrink-0 rounded-full bg-white px-6 py-2 text-sm font-medium text-dusty-dark ring-1 ring-[#f0ebed] transition-colors hover:bg-primary/5 hover:text-primary hover:ring-primary/20 dark:bg-[#2f1f24] dark:ring-[#3a2d32] dark:text-gray-300">{{ $category }}</button>
            @endforeach
        </div>
    </section>

    {{-- Products Section --}}
    <section class="mx-auto max-w-7xl px-4 py-8 md:px-6">
        <div class="mb-8 flex items-end justify-between">
            <h2 class="text-2xl font-bold tracking-tight text-warm-brown dark:text-white">الأكثر مبيعاً</h2>
            <a class="text-sm font-medium text-dusty-rose hover:text-primary" href="{{ route('shop') }}">عرض الكل</a>
        </div>
        
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($products as $product)
                <x-product-card 
                    :image="$product['image']"
                    :title="$product['title']"
                    :description="$product['description']"
                    :price="$product['price']"
                    :badge="$product['badge'] ?? null"
                />
            @endforeach
            
            {{-- Featured Recipe Card --}}
            <div class="group relative col-span-1 flex min-h-[300px] flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all hover:shadow-md md:col-span-2 lg:col-span-3 lg:flex-row dark:bg-[#2a1d21]">
                <div class="relative h-64 w-full overflow-hidden md:h-auto lg:w-1/2">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU'); filter: brightness(0.9);"></div>
                    <div class="absolute top-3 right-3 rounded-full bg-primary px-3 py-1 text-xs font-bold text-white shadow-sm">وصفة الأسبوع</div>
                </div>
                <div class="flex flex-1 flex-col justify-center p-8 text-right">
                    <h3 class="mb-3 text-2xl font-bold leading-tight text-warm-brown dark:text-white">طريقة عمل تشيز كيك الفراولة</h3>
                    <p class="mb-6 text-base text-dusty-dark dark:text-gray-400 leading-relaxed">اكتشفي سر القوام الكريمي والنكهة الغنية مع وصفتنا الخاصة لتشيز كيك الفراولة البارد، باستخدام أفضل المكونات من متجرنا.</p>
                    <div class="mt-auto flex items-center gap-6">
                        <div class="flex items-center gap-2 text-sm text-dusty-dark">
                            <span class="material-symbols-outlined text-lg">schedule</span>
                            <span>45 دقيقة</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-dusty-dark">
                            <span class="material-symbols-outlined text-lg">signal_cellular_alt</span>
                            <span>متوسط</span>
                        </div>
                        <button class="mr-auto rounded-lg bg-warm-brown px-6 py-2 text-sm font-bold text-white transition-colors hover:bg-primary">عرض الوصفة</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="w-full bg-rose-50/50 py-16 dark:bg-[#2a1d21]/50">
        <div class="mx-auto max-w-7xl px-4 md:px-6">
            <div class="mb-12 text-center">
                <span class="text-sm font-bold text-primary uppercase tracking-wider">آراء العملاء</span>
                <h2 class="mt-2 text-2xl font-bold text-warm-brown dark:text-white">ماذا يقول عملاؤنا</h2>
            </div>
            <div class="grid gap-6 md:grid-cols-3">
                @foreach([
                    [
                        'stars' => 5,
                        'text' => '"أفضل متجر لمستلزمات الحلويات! الجودة ممتازة والتوصيل سريع جداً. القوالب ساعدتني كثيراً في مشروعي الخاص."',
                        'initial' => 'س',
                        'name' => 'سارة الأحمد',
                        'role' => 'صانعة كيك',
                        'color' => 'dusty-rose',
                    ],
                    [
                        'stars' => 4.5,
                        'text' => '"الشكولاتة البلجيكية طعمها لا يقاوم، وتغليف المنتجات رائع ويحافظ عليها. شكراً لكم على هذا الاهتمام بالتفاصيل."',
                        'initial' => 'خ',
                        'name' => 'خالد محمد',
                        'role' => 'شيف حلويات',
                        'color' => 'primary',
                    ],
                    [
                        'stars' => 5,
                        'text' => '"تعامل راقي وخدمة عملاء متميزة. المنتجات نادرة وما ألقاها في أي مكان ثاني بنفس الجودة والسعر."',
                        'initial' => 'م',
                        'name' => 'مريم العلي',
                        'role' => 'هاوية طبخ',
                        'color' => 'warm-brown',
                    ],
                ] as $testimonial)
                    <div class="relative overflow-hidden rounded-xl bg-white p-8 shadow-md transition-all hover:-translate-y-1 hover:shadow-lg dark:bg-[#2f1f24]">
                        <span class="material-symbols-outlined absolute top-4 left-4 text-8xl text-dusty-rose/10 pointer-events-none rotate-180 select-none">format_quote</span>
                        <div class="mb-4 flex items-center gap-1 text-gold-accent">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= floor($testimonial['stars']))
                                    <span class="material-symbols-outlined text-lg">star</span>
                                @elseif($testimonial['stars'] - floor($testimonial['stars']) >= 0.5 && $i == ceil($testimonial['stars']))
                                    <span class="material-symbols-outlined text-lg">star_half</span>
                                @else
                                    <span class="material-symbols-outlined text-lg text-gray-300">star</span>
                                @endif
                            @endfor
                        </div>
                        <p class="relative z-10 mb-6 text-base font-medium leading-relaxed text-warm-brown dark:text-gray-200">{{ $testimonial['text'] }}</p>
                        <div class="relative z-10 flex items-center justify-between border-t border-gray-100 pt-4 dark:border-gray-800">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-{{ $testimonial['color'] }}/20 flex items-center justify-center text-{{ $testimonial['color'] }} font-bold">{{ $testimonial['initial'] }}</div>
                                <div>
                                    <p class="text-sm font-bold text-warm-brown dark:text-white">{{ $testimonial['name'] }}</p>
                                    <p class="text-xs text-dusty-dark">{{ $testimonial['role'] }}</p>
                                </div>
                            </div>
                            <span class="flex items-center gap-1 rounded-full bg-green-50 px-2 py-0.5 text-[10px] font-bold text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                <span class="material-symbols-outlined text-[12px]">verified</span>
                                شراء مؤكد
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
