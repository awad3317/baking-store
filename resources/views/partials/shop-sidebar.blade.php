{{-- Shop Sidebar Filters --}}
{{-- Mobile Filter Button (visible only on mobile) --}}
<button @click="sidebarOpen = true"
    class="fixed bottom-24 left-8 z-40 flex h-12 w-12 items-center justify-center rounded-full bg-dusty-rose text-white shadow-lg lg:hidden">
    <span class="material-symbols-outlined">tune</span>
</button>

{{-- Sidebar Backdrop (mobile only) --}}
<div x-cloak x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" @click="sidebarOpen = false" class="fixed inset-0 z-40 bg-black/50 lg:hidden">
</div>

{{-- Sidebar Container --}}
<aside x-cloak :class="sidebarOpen ? 'translate-x-0' : 'translate-x-full'"
    class="fixed top-0 right-0 z-50 h-full w-80 overflow-y-auto bg-white shadow-xl transition-transform duration-300 lg:static lg:z-auto lg:h-auto lg:w-72 lg:translate-x-0 lg:shadow-none lg:bg-transparent">
    {{-- Mobile Close Button --}}
    <div class="flex items-center justify-between border-b border-gray-100 p-4 lg:hidden">
        <h3 class="text-lg font-bold text-warm-brown">تصفية المنتجات</h3>
        <button @click="sidebarOpen = false" class="text-gray-400 hover:text-gray-600">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>

    <div class="space-y-6 p-4 lg:p-0">
        {{-- Filter Card --}}
        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-100/50">
            <div class="mb-6 flex items-center justify-between">
                <h3 class="text-lg font-bold text-warm-brown">تصفية المنتجات</h3>
                <button class="text-xs font-medium text-dusty-rose hover:underline">مسح الكل</button>
            </div>

            {{-- Categories --}}
            <div class="mb-6 border-b border-gray-100 pb-6">
                <h4 class="mb-4 text-sm font-bold text-warm-brown">الأقسام</h4>
                <div class="space-y-3">
                    <label class="flex items-center gap-3 group cursor-pointer">
                        <input class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose"
                            type="checkbox" />
                        <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">قوالب
                            سيليكون</span>
                        <span
                            class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">42</span>
                    </label>
                    <label class="flex items-center gap-3 group cursor-pointer">
                        <input checked class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose"
                            type="checkbox" />
                        <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">أدوات
                            تزيين</span>
                        <span
                            class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">18</span>
                    </label>
                    <label class="flex items-center gap-3 group cursor-pointer">
                        <input class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose"
                            type="checkbox" />
                        <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">مكونات
                            خام</span>
                        <span
                            class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">25</span>
                    </label>
                    <label class="flex items-center gap-3 group cursor-pointer">
                        <input class="h-4 w-4 rounded border-gray-300 text-dusty-rose focus:ring-dusty-rose"
                            type="checkbox" />
                        <span class="text-sm text-gray-600 group-hover:text-dusty-rose transition-colors">علب
                            وتغليف</span>
                        <span
                            class="mr-auto text-xs text-gray-400 font-medium bg-gray-50 px-2 py-0.5 rounded-full">30</span>
                    </label>
                </div>
            </div>

            {{-- Price Range --}}
            <div class="mb-6 border-b border-gray-100 pb-6">
                <h4 class="mb-4 text-sm font-bold text-warm-brown">السعر (ر.س)</h4>
                <div class="flex items-center gap-2">
                    <input
                        class="w-full rounded-lg border-gray-200 bg-stone-50 py-2 text-center text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                        placeholder="من" type="number" />
                    <span class="text-gray-400">-</span>
                    <input
                        class="w-full rounded-lg border-gray-200 bg-stone-50 py-2 text-center text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                        placeholder="إلى" type="number" />
                </div>
            </div>

            {{-- Rating --}}
            <div>
                <h4 class="mb-4 text-sm font-bold text-warm-brown">التقييم</h4>
                <div class="space-y-2">
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input class="h-4 w-4 border-gray-300 text-dusty-rose focus:ring-dusty-rose" name="rating"
                            type="radio" />
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
                        <input class="h-4 w-4 border-gray-300 text-dusty-rose focus:ring-dusty-rose" name="rating"
                            type="radio" />
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
        <div class="rounded-2xl bg-amber-50 p-6 shadow-sm border border-amber-100">
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
    </div>
</aside>