{{-- Product Details Modal (Final Optimized Version) --}}
<div x-data="{ 
        open: false, 
        product: { 
            title: '', 
            price: '', 
            image: '', 
            category: 'أدوات الخبز',
            description: 'منتج عالي الجودة مصنوع بعناية فائقة لتلبية احتياجاتك في صناعة الحلويات.'
        },
        trigger(detail) {
            this.product = { ...this.product, ...detail };
            this.open = true;
        }
     }" @open-product-modal.window="trigger($event.detail)" @keydown.window.escape="open = false" x-show="open" x-cloak
    style="display: none;" class="fixed inset-0 z-[70] flex items-center justify-center p-4 sm:p-6 overflow-hidden">

    {{-- 1. الخلفية (سريعة جداً - بدون Blur) --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="open = false"
        class="absolute inset-0 bg-black/60">
    </div>

    {{-- 2. نافذة المودال --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95 translate-y-4"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-95 translate-y-4" @click.stop
        class="relative w-full max-w-5xl bg-white rounded-2xl shadow-2xl flex flex-col md:flex-row overflow-hidden max-h-[90vh] md:h-[650px]">

        {{-- زر الإغلاق --}}
        <button @click="open = false" aria-label="إغلاق"
            class="absolute top-4 left-4 z-20 flex h-10 w-10 items-center justify-center rounded-full bg-white/80 text-warm-brown shadow-md hover:bg-primary hover:text-white transition-all duration-200 group">
            <span class="material-symbols-outlined text-xl transition-transform group-hover:rotate-90">close</span>
        </button>

        {{-- 3. الصورة (مكبرة للجوال h-80) --}}
        <div class="w-full md:w-[55%] relative h-96 md:h-auto bg-gray-100 group">
            <img :src="product.image" alt="Product Image" loading="lazy"
                class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
        </div>

        {{-- 4. التفاصيل --}}
        <div class="w-full md:w-[45%] flex flex-col bg-white relative">

            {{-- منطقة المحتوى القابلة للتمرير --}}
            <div class="flex-1 overflow-y-auto p-6 md:p-8">

                {{-- التصنيف --}}
                <div
                    class="flex items-center gap-2 text-[10px] font-bold tracking-widest text-dusty-rose uppercase mb-4">
                    <span x-text="product.category"></span>
                </div>

                {{-- العنوان --}}
                <h2 class="text-2xl md:text-3xl font-bold text-warm-brown mb-4 leading-tight" x-text="product.title">
                </h2>

                {{-- السعر والحالة --}}
                <div class="flex items-center justify-between mb-6 pb-5 border-b border-gray-100">
                    <span class="text-2xl font-bold text-primary" x-text="product.price"></span>
                    <div
                        class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-bold">متوفر</span>
                    </div>
                </div>

                {{-- الوصف --}}
                <p class="text-dusty-dark text-base leading-relaxed mb-6" x-text="product.description"></p>

                {{-- جدول المواصفات --}}
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between items-center py-2.5 border-b border-gray-50">
                        <span class="text-sm text-gray-400 font-medium">الجودة</span>
                        <span class="text-sm text-warm-brown font-semibold">ممتازة</span>
                    </div>
                    <div class="flex justify-between items-center py-2.5 border-b border-gray-50">
                        <span class="text-sm text-gray-400 font-medium">الشحن</span>
                        <span class="text-sm text-warm-brown font-semibold">متاح لجميع المناطق</span>
                    </div>
                </div>
            </div>

            {{-- 5. الفوتر (الكمية والإضافة للسلة) --}}
            <div class="p-5 md:p-6 bg-gray-50/50 border-t border-gray-100">
                <div class="flex flex-col gap-3">
                    <div class="flex gap-3 h-12">
                        {{-- عداد الكمية --}}
                        <div
                            class="flex items-center justify-between bg-white rounded-xl px-2 w-28 shrink-0 border border-gray-100">
                            <button
                                class="w-8 h-8 flex items-center justify-center rounded-lg text-dusty-dark hover:text-primary hover:bg-gray-50 transition-colors">
                                <span class="material-symbols-outlined text-lg">add</span>
                            </button>
                            <span class="font-bold text-lg text-warm-brown">1</span>
                            <button
                                class="w-8 h-8 flex items-center justify-center rounded-lg text-dusty-dark hover:text-primary hover:bg-gray-50 transition-colors">
                                <span class="material-symbols-outlined text-lg">remove</span>
                            </button>
                        </div>

                        {{-- زر الإضافة للسلة --}}
                        <button
                            class="flex-1 bg-primary hover:bg-[#c9124e] text-white font-bold rounded-xl shadow-md transition-all hover:shadow-lg active:scale-[0.98] flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-xl">shopping_bag</span>
                            <span>أضف للسلة</span>
                        </button>
                    </div>

                    {{-- زر الواتساب --}}
                    <a href="#"
                        class="flex items-center justify-center gap-2 text-sm font-bold text-[#25D366] hover:text-[#128C7E] transition-colors py-2 rounded-lg hover:bg-green-50">
                        <span class="material-symbols-outlined text-lg">chat</span>
                        الطلب السريع عبر واتساب
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>