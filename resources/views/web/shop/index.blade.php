@extends('web.layouts.app')

@section('title', 'المتجر - سويت سبلايز')

@section('content')
    <div x-data="{ mobileFiltersOpen: false }">
        {{-- Hero Section --}}
        <div
            class="relative mb-10 overflow-hidden rounded-2xl bg-[#fdf2f4] text-warm-brown border border-dusty-rose/10 mx-4 md:mx-6 mt-8">
            {{-- Pattern Background --}}
            <div class="absolute inset-0 opacity-[0.05] pointer-events-none">
                <span
                    class="material-symbols-outlined absolute top-4 left-10 text-6xl rotate-12 text-dusty-dark">blender</span>
                <span
                    class="material-symbols-outlined absolute top-10 right-20 text-5xl -rotate-12 text-dusty-dark">kitchen</span>
                <span
                    class="material-symbols-outlined absolute bottom-4 left-1/4 text-6xl rotate-45 text-dusty-dark">cookie</span>
                <span
                    class="material-symbols-outlined absolute top-1/2 right-1/3 text-4xl -rotate-6 text-dusty-dark">egg</span>
                <span
                    class="material-symbols-outlined absolute bottom-8 right-10 text-7xl rotate-6 text-dusty-dark">cake</span>
                <span
                    class="material-symbols-outlined absolute top-6 left-1/2 text-5xl rotate-90 text-dusty-dark">flatware</span>
            </div>

            <div class="relative z-10 flex flex-col items-start justify-center p-10 md:p-14">
                {{-- Breadcrumb --}}
                <nav class="mb-5 flex items-center gap-2 text-xs text-dusty-dark/60">
                    <a class="hover:text-dusty-rose transition-colors" href="/">الرئيسية</a>
                    <span class="material-symbols-outlined text-[10px] rotate-180">chevron_right</span>
                    <span class="font-bold text-dusty-rose">المتجر</span>
                </nav>

                <h1 class="text-4xl md:text-6xl font-black tracking-tight text-warm-brown leading-relaxed">تصفح جميع
                    منتجاتنا</h1>

                <div class="flex items-center gap-4 my-5">
                    <div class="flex items-center gap-2 text-gold-accent">
                        <span class="material-symbols-outlined text-2xl fill-current">favorite</span>
                        <span class="material-symbols-outlined text-2xl">blender</span>
                    </div>
                    <div class="h-[2px] w-20 bg-gradient-to-l from-gold-accent/60 to-transparent rounded-full"></div>
                </div>

                <p class="text-2xl md:text-3xl font-bold text-dusty-rose leading-tight">اصنعي السعادة في كل وصفة</p>
                <p class="mt-4 text-dusty-dark/80 text-sm max-w-md font-medium leading-relaxed">أدوات ومكونات عالية الجودة
                    لتصنعي أشهى الحلويات بكل حب وإتقان.</p>
            </div>
        </div>

        {{-- Sort & Count Bar with Mobile Filter Button --}}
        <div class="mx-4 md:mx-6 mb-8 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div class="flex items-center justify-between gap-4">
                <div class="text-sm text-gray-500">
                    عرض 1-9 من 45 منتج
                </div>

                {{-- Mobile Filter Button --}}
                <button @click="mobileFiltersOpen = true"
                    class="flex items-center gap-2 rounded-lg bg-dusty-rose px-4 py-2 text-sm font-bold text-white shadow-sm lg:hidden">
                    <span class="material-symbols-outlined text-lg">tune</span>
                    تصفية
                </button>
            </div>

            <div class="flex items-center gap-3">
                <span class="text-sm text-gray-500">ترتيب حسب:</span>
                <select
                    class="rounded-lg border-none bg-white py-2 pl-10 pr-4 text-sm font-medium shadow-sm ring-1 ring-gray-200 focus:ring-dusty-rose text-warm-brown cursor-pointer">
                    <option>الأكثر مبيعاً</option>
                    <option>السعر: من الأقل للأعلى</option>
                    <option>السعر: من الأعلى للأقل</option>
                    <option>الأحدث</option>
                </select>
            </div>
        </div>

        {{-- Mobile Filter Drawer (Slide from Right) --}}
        {{-- Backdrop --}}
        <div x-cloak x-show="mobileFiltersOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click="mobileFiltersOpen = false"
            class="fixed inset-0 z-50 bg-black/50 lg:hidden"></div>

        {{-- Drawer Panel --}}
        <div x-cloak x-show="mobileFiltersOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed top-0 right-0 z-50 h-full w-80 max-w-[85vw] overflow-y-auto bg-white shadow-xl lg:hidden">
            {{-- Drawer Header --}}
            <div class="sticky top-0 flex items-center justify-between border-b border-gray-100 bg-white p-4">
                <h3 class="text-lg font-bold text-warm-brown">تصفية المنتجات</h3>
                <button @click="mobileFiltersOpen = false"
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-gray-500 hover:bg-gray-200 hover:text-gray-700">
                    <span class="material-symbols-outlined text-xl">close</span>
                </button>
            </div>

            {{-- Drawer Content (Sidebar Filters) --}}
            <div class="p-4">
                @include('web.partials.shop-sidebar-content')
            </div>

            {{-- Drawer Footer with Apply Button --}}
            <div class="sticky bottom-0 border-t border-gray-100 bg-white p-4">
                <button @click="mobileFiltersOpen = false"
                    class="w-full rounded-lg bg-dusty-rose py-3 text-sm font-bold text-white shadow-sm hover:bg-dusty-dark transition-colors">
                    عرض النتائج
                </button>
            </div>
        </div>

        {{-- Main Content: Sidebar + Products Grid --}}
        <div class="mx-4 md:mx-6 flex flex-col gap-8 lg:flex-row">
            {{-- Desktop Sidebar (hidden on mobile) --}}
            <aside class="hidden lg:block w-72 shrink-0 space-y-6">
                @include('web.partials.shop-sidebar-content')
            </aside>

            {{-- Products Grid --}}
            <div class="flex-1">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                    {{-- Product 1: On Sale --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd"
                        title="مجموعة قوالب هندسية" category="قوالب سيليكون" price="22,000 ر.ي" oldPrice="26,000 ر.ي"
                        badge="خصم 10%" />

                    {{-- Product 2: Standard --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw"
                        title="رقائق الذهب عيار 24" category="زينة الكيك" price="32,800 ر.ي" />

                    {{-- Product 3: Standard --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof"
                        title="شوكولاتة بلجيكية داكنة" category="مكونات خام" price="27,200 ر.ي" />

                    {{-- Product 4: Standard --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y"
                        title="طقم أقماع احترافي 24 قطعة" category="أدوات تزيين" price="48,000 ر.ي" />

                    {{-- Product 5: Standard --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuDii73SFJez4obkgSgJT_6a38v900GUS7JS1pyAAC5LR4uyrWlLV3iOi6vkr6FJfExOKS3Cjc-AY66O872Kl24Wn79Vci7SSy_y0iblaNWkCXlBPH0SfKdtwh_C1MPAMkKOaEoqCm09f8U7C99OSdoh3gbhPZUhwfKt_FzD9VP4u9qtcEI7PepKwNd2Q8bLdTIcR1QvFM7kYlNn66RijKSsnbum97sLR7uRFZJI-Dn6xsalQ98E1CZHBILPVCpHQLYBaSyV0-oX67FK"
                        title="علب ماكرون فاخرة" category="علب وتغليف" price="18,000 ر.ي" />

                    {{-- Product 6: Sold Out --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU"
                        title="كتاب وصفات سويت سبلايز" category="أدوات تزيين" price="48,000 ر.ي" :isSoldOut="true" />

                    {{-- Product 7: With Filter --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd"
                        title="عجينة سكر فوندان أبيض" category="مكونات خام" price="14,000 ر.ي"
                        imageFilter="hue-rotate(45deg)" />

                    {{-- Product 8: With Filter --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw"
                        title="أشرطة تزيين ساتان" category="علب وتغليف" price="4,800 ر.ي" imageFilter="sepia(0.3)" />

                    {{-- Product 9: With Filter --}}
                    <x-product-card
                        image="https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof"
                        title="ملعقة سباتولا معدنية" category="أدوات تزيين" price="11,200 ر.ي"
                        imageFilter="brightness(1.1)" />
                </div>

                {{-- Load More Button --}}
                <div class="mt-12 mb-16 flex justify-center">
                    <button
                        class="flex items-center gap-3 rounded-full bg-white px-6 py-3 text-sm font-bold text-dusty-rose shadow-sm ring-1 ring-dusty-rose hover:bg-dusty-rose hover:text-white transition-all hover:shadow-md">
                        <span class="material-symbols-outlined animate-spin-slow text-lg">blender</span>
                        عرض المزيد من المنتجات
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
    </style>
@endpush
