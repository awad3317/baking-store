{{-- Shop Sidebar Filter Content (reusable in both desktop and mobile drawer) --}}
{{-- Uses Alpine.js state from parent x-data in shop.blade.php --}}

{{-- Filter Card --}}
<div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-100/50"
    x-data="{ categories: ['tools'], priceMin: '', priceMax: '', rating: null }">
    <div class="mb-6 flex items-center justify-between">
        <h3 class="text-lg font-bold text-warm-brown">تصفية المنتجات</h3>
        <button x-show="categories.length > 0 || priceMin || priceMax || rating" x-transition
            @click="categories = []; priceMin = ''; priceMax = ''; rating = null"
            class="text-xs font-medium text-dusty-rose hover:underline">مسح الكل</button>
    </div>

    {{-- Categories --}}
    <div class="mb-6 border-b border-gray-100 pb-6">
        <h4 class="mb-4 text-sm font-bold text-warm-brown">الأقسام</h4>
        <div class="space-y-3">
            <label class="flex items-center gap-3 group cursor-pointer">
                <input type="checkbox" value="molds" x-model="categories"
                    class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose" />
                <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">قوالب سيليكون</span>
                <span class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">42</span>
            </label>
            <label class="flex items-center gap-3 group cursor-pointer">
                <input type="checkbox" value="tools" x-model="categories"
                    class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose" />
                <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">أدوات تزيين</span>
                <span class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">18</span>
            </label>
            <label class="flex items-center gap-3 group cursor-pointer">
                <input type="checkbox" value="ingredients" x-model="categories"
                    class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose" />
                <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">مكونات خام</span>
                <span class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">25</span>
            </label>
            <label class="flex items-center gap-3 group cursor-pointer">
                <input type="checkbox" value="packaging" x-model="categories"
                    class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose" />
                <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">علب وتغليف</span>
                <span class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">30</span>
            </label>
        </div>
    </div>

    {{-- Price Range --}}
    <div class="mb-6 border-b border-gray-100 pb-6">
        <h4 class="mb-4 text-sm font-bold text-warm-brown">السعر (ر.ي)</h4>
        <div class="flex items-center gap-2">
            <input type="number" x-model="priceMin"
                class="w-full rounded-lg border-gray-200 bg-stone-50 py-2 text-center text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                placeholder="من" />
            <span class="text-gray-400">-</span>
            <input type="number" x-model="priceMax"
                class="w-full rounded-lg border-gray-200 bg-stone-50 py-2 text-center text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                placeholder="إلى" />
        </div>
    </div>

    {{-- Rating --}}
    <div>
        <h4 class="mb-4 text-sm font-bold text-warm-brown">التقييم</h4>
        <div class="space-y-2">
            <label class="flex items-center gap-2 cursor-pointer group">
                <input type="radio" value="5" x-model="rating"
                    class="h-4 w-4 border-gray-300 text-dusty-rose focus:ring-dusty-rose" />
                <div class="flex text-gold-accent gap-0.5">
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                </div>
                <span class="text-xs text-gray-500">أو أكثر</span>
            </label>
            <label class="flex items-center gap-2 cursor-pointer group">
                <input type="radio" value="4" x-model="rating"
                    class="h-4 w-4 border-gray-300 text-dusty-rose focus:ring-dusty-rose" />
                <div class="flex text-gold-accent gap-0.5">
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                    <span class="material-symbols-outlined text-[16px] text-gray-300">star</span>
                </div>
                <span class="text-xs text-gray-500">أو أكثر</span>
            </label>
        </div>
    </div>
</div>

{{-- Special Offer Card --}}
<div class="mt-6 rounded-2xl bg-amber-50 p-6 shadow-sm border border-amber-100">
    <div class="flex items-center gap-2 mb-3 text-amber-600">
        <span class="material-symbols-outlined fill-current text-xl">star</span>
        <h4 class="text-sm font-bold uppercase tracking-wider">عرض خاص!</h4>
    </div>
    <p class="text-warm-brown font-bold mb-4 leading-relaxed">
        احصل على خصم 15% عند شراء مجموعة التزيين الكاملة
    </p>
    <button
        class="w-full rounded-lg bg-warm-brown text-white py-2.5 text-sm font-bold hover:bg-dusty-rose transition-colors">
        تصفح العرض
    </button>
</div>