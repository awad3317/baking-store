<div x-data="{ open: false }" @keydown.window.escape="open = false" x-on:open-cart.window="open = true"
    class="relative z-50">

    {{-- 1. زر السلة العائم (Trigger Button) --}}
    <div class="fixed bottom-8 left-8 z-40 group">
        <button @click="open = true"
            class="flex h-16 w-16 items-center justify-center rounded-full bg-dusty-rose text-white shadow-xl hover:scale-105 hover:shadow-2xl transition-transform duration-200 focus:outline-none">
            <span class="material-symbols-outlined text-3xl">shopping_cart</span>
            {{-- عداد المنتجات --}}
            <span
                class="absolute -top-1 -left-1 flex h-6 w-6 items-center justify-center rounded-full bg-white text-xs font-bold text-dusty-rose ring-2 ring-background-light">3</span>
        </button>
    </div>

    {{-- 2. حاوية السلة (Dialog Container) --}}
    <div x-show="open" style="display: none;" class="fixed inset-0 z-[60] overflow-hidden"
        aria-labelledby="slide-over-title" role="dialog" aria-modal="true">

        <div class="absolute inset-0 overflow-hidden">

            {{-- أ. الخلفية المعتمة (بدون Blur لسرعة قصوى) --}}
            <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="open = false"
                class="absolute inset-0 bg-black/40 transition-opacity">
            </div>

            {{-- ب. السلة المنزلقة --}}
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-0 sm:pl-10">

                <div x-show="open" x-transition:enter="transform transition ease-in-out duration-300"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-300"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="pointer-events-auto w-screen max-w-md">

                    <div class="flex h-full flex-col bg-white shadow-2xl">

                        {{-- Header --}}
                        <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100 bg-white z-10">
                            <h2 class="text-xl font-bold text-warm-brown flex items-center gap-2">
                                <span class="material-symbols-outlined text-dusty-rose">shopping_bag</span>
                                سلة مشترياتك
                            </h2>
                            <button @click="open = false"
                                class="flex h-8 w-8 items-center justify-center rounded-full text-dusty-dark hover:bg-stone-50 hover:text-dusty-rose transition-colors">
                                <span class="material-symbols-outlined">close</span>
                            </button>
                        </div>

                        {{-- Body: قائمة المنتجات --}}
                        <div
                            class="flex-1 overflow-y-auto p-6 space-y-6 scrollbar-thin scrollbar-thumb-gray-200 scrollbar-track-transparent">

                            {{-- منتج 1 --}}
                            <div class="flex gap-4 group">
                                <div
                                    class="h-20 w-20 shrink-0 overflow-hidden rounded-xl border border-gray-100 bg-gray-50">
                                    <img loading="lazy" alt="Product"
                                        class="h-full w-full object-cover transition-transform group-hover:scale-105"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd" />
                                </div>
                                <div class="flex flex-1 flex-col justify-between py-0.5">
                                    <div>
                                        <div class="flex justify-between items-start gap-2">
                                            <h3 class="font-bold text-warm-brown text-sm line-clamp-2 leading-snug">
                                                مجموعة قوالب هندسية</h3>
                                            <button
                                                class="text-red-300 hover:text-red-500 transition-colors p-1 -mt-1 -ml-1">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </div>
                                        <p class="text-[10px] font-medium text-gray-400 mt-1">قوالب سيليكون</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-gold-accent font-bold text-sm">22,000 ر.ي</span>
                                        <div
                                            class="flex items-center gap-1 rounded-full border border-gray-100 px-2 py-0.5 bg-stone-50">
                                            <button
                                                class="flex h-5 w-5 items-center justify-center rounded-full text-gray-400 hover:text-dusty-rose hover:bg-white text-xs transition-colors">-</button>
                                            <span class="text-xs font-bold w-4 text-center text-warm-brown">1</span>
                                            <button
                                                class="flex h-5 w-5 items-center justify-center rounded-full text-gray-400 hover:text-dusty-rose hover:bg-white text-xs transition-colors">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- منتج 2 --}}
                            <div class="flex gap-4 group">
                                <div
                                    class="h-20 w-20 shrink-0 overflow-hidden rounded-xl border border-gray-100 bg-gray-50">
                                    <img loading="lazy" alt="Product"
                                        class="h-full w-full object-cover transition-transform group-hover:scale-105"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw" />
                                </div>
                                <div class="flex flex-1 flex-col justify-between py-0.5">
                                    <div>
                                        <div class="flex justify-between items-start gap-2">
                                            <h3 class="font-bold text-warm-brown text-sm line-clamp-2 leading-snug">
                                                رقائق الذهب عيار 24</h3>
                                            <button
                                                class="text-red-300 hover:text-red-500 transition-colors p-1 -mt-1 -ml-1">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </div>
                                        <p class="text-[10px] font-medium text-gray-400 mt-1">زينة الكيك</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-gold-accent font-bold text-sm">65,600 ر.ي</span>
                                        <div
                                            class="flex items-center gap-1 rounded-full border border-gray-100 px-2 py-0.5 bg-stone-50">
                                            <button
                                                class="flex h-5 w-5 items-center justify-center rounded-full text-gray-400 hover:text-dusty-rose hover:bg-white text-xs transition-colors">-</button>
                                            <span class="text-xs font-bold w-4 text-center text-warm-brown">2</span>
                                            <button
                                                class="flex h-5 w-5 items-center justify-center rounded-full text-gray-400 hover:text-dusty-rose hover:bg-white text-xs transition-colors">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- منتج 3 --}}
                            <div class="flex gap-4 group">
                                <div
                                    class="h-20 w-20 shrink-0 overflow-hidden rounded-xl border border-gray-100 bg-gray-50">
                                    <img loading="lazy" alt="Product"
                                        class="h-full w-full object-cover transition-transform group-hover:scale-105"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof" />
                                </div>
                                <div class="flex flex-1 flex-col justify-between py-0.5">
                                    <div>
                                        <div class="flex justify-between items-start gap-2">
                                            <h3 class="font-bold text-warm-brown text-sm line-clamp-2 leading-snug">
                                                شوكولاتة بلجيكية داكنة</h3>
                                            <button
                                                class="text-red-300 hover:text-red-500 transition-colors p-1 -mt-1 -ml-1">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </div>
                                        <p class="text-[10px] font-medium text-gray-400 mt-1">مكونات خام</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-gold-accent font-bold text-sm">27,200 ر.ي</span>
                                        <div
                                            class="flex items-center gap-1 rounded-full border border-gray-100 px-2 py-0.5 bg-stone-50">
                                            <button
                                                class="flex h-5 w-5 items-center justify-center rounded-full text-gray-400 hover:text-dusty-rose hover:bg-white text-xs transition-colors">-</button>
                                            <span class="text-xs font-bold w-4 text-center text-warm-brown">1</span>
                                            <button
                                                class="flex h-5 w-5 items-center justify-center rounded-full text-gray-400 hover:text-dusty-rose hover:bg-white text-xs transition-colors">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Footer: ملخص الطلب والواتساب --}}
                        <div class="border-t border-gray-100 bg-[#fdfafb] p-6 z-10">
                            <div class="flex items-center justify-between mb-3 text-sm">
                                <span class="text-warm-brown font-medium">المجموع الفرعي</span>
                                <span class="font-bold text-warm-brown">114,800 ر.ي</span>
                            </div>
                            <div class="flex items-center justify-between mb-6">
                                <span class="text-lg font-bold text-warm-brown">الإجمالي</span>
                                <span class="text-2xl font-bold text-dusty-rose">114,800 ر.ي</span>
                            </div>
                            <div
                                class="bg-blue-50/50 border border-blue-100 rounded-lg p-3 mb-4 flex items-start gap-2">
                                <span class="material-symbols-outlined text-blue-400 text-sm mt-0.5">info</span>
                                <p class="text-[11px] text-blue-900/70 leading-relaxed font-medium">
                                    الدفع والشحن يتم الاتفاق عليهما مباشرة مع خدمة العملاء عبر واتساب.
                                </p>
                            </div>
                            <button
                                class="group w-full flex items-center justify-center gap-3 bg-gradient-to-l from-[#25D366] to-[#128C7E] text-white py-4 rounded-xl font-bold shadow-lg shadow-green-200 hover:shadow-xl hover:translate-y-[-2px] transition-all">
                                <span class="material-symbols-outlined text-2xl group-hover:animate-bounce">chat</span>
                                <span class="text-base">إتمام الطلب عبر واتساب</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>