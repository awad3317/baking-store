<!DOCTYPE html>
<html class="light" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>تفاصيل المنتج - باتيسري لوكس</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#e6195d",
                        "background-light": "#f8f6f6",
                        "background-dark": "#211116",
                        "warm-text": "#88636f",
                        "dark-text": "#181113",
                        "accent-bg": "#f4f0f2"
                    },
                    fontFamily: {
                        "display": ["Cairo", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                    animation: {
                        'bounce-subtle': 'bounce-subtle 0.3s ease-in-out',
                        'fade-in-up': 'fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                    },
                    keyframes: {
                        'bounce-subtle': {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' },
                        },
                        fadeInUp: {
                            'from': { opacity: '0', transform: 'translateY(20px)' },
                            'to': { opacity: '1', transform: 'translateY(0)' }
                        }
                    }
                },
            },
        }
    </script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: rgba(136, 99, 111, 0.2);
            border-radius: 20px;
        }

        .custom-scrollbar:hover::-webkit-scrollbar-thumb {
            background-color: rgba(136, 99, 111, 0.5);
        }
    </style>
</head>

<body x-data="{
    isModalOpen: false,
    currentProduct: {
        title: '',
        price: '',
        image: '',
        category: 'أدوات الخبز',
        description: 'ارفعي مستوى تقديم حلوياتك مع هذا المنتج المميز. مصنوع بجودة عالية ومتانة فائقة.'
    },
    openProduct(title, price, image) {
        this.currentProduct.title = title;
        this.currentProduct.price = price;
        this.currentProduct.image = image;
        this.isModalOpen = true;
    }
}" class="bg-background-light dark:bg-background-dark font-display text-dark-text relative min-h-screen flex flex-col">

    {{-- Main Content (blurs when modal is open) --}}
    <div :class="isModalOpen ? 'filter blur-[3px] opacity-40 pointer-events-none select-none' : ''"
        class="flex-1 flex flex-col transition-all duration-300">

        {{-- Header --}}
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4f0f2] px-10 py-3 bg-white">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-4 text-[#181113]">
                    <div class="size-8 text-primary">
                        <span class="material-symbols-outlined !text-[32px]">bakery_dining</span>
                    </div>
                    <h2 class="text-[#181113] text-lg font-bold leading-tight tracking-[-0.015em]">باتيسري لوكس</h2>
                </div>
                <div class="flex items-center gap-9 hidden lg:flex">
                    <a class="text-[#181113] text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">تسوق</a>
                    <a class="text-[#181113] text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">مجموعات</a>
                    <a class="text-[#181113] text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">من نحن</a>
                    <a class="text-[#181113] text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">اتصل بنا</a>
                </div>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <label class="flex flex-col min-w-40 !h-10 max-w-64 hidden sm:flex">
                    <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                        <div
                            class="text-[#88636f] flex border-none bg-[#f4f0f2] items-center justify-center pr-4 pl-0 rounded-r-lg border-l-0">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181113] focus:outline-0 focus:ring-0 border-none bg-[#f4f0f2] focus:border-none h-full placeholder:text-[#88636f] px-4 rounded-r-none border-r-0 pr-2 text-base font-normal leading-normal"
                            placeholder="بحث" value="" />
                    </div>
                </label>
                <div class="flex gap-2">
                    <button
                        class="flex items-center justify-center overflow-hidden rounded-lg size-10 bg-[#f4f0f2] text-[#181113] hover:bg-gray-200 transition-colors">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </button>
                    <button
                        class="flex items-center justify-center overflow-hidden rounded-lg size-10 bg-[#f4f0f2] text-[#181113] hover:bg-gray-200 transition-colors">
                        <span class="material-symbols-outlined">person</span>
                    </button>
                </div>
            </div>
        </header>

        {{-- Product Grid --}}
        <main class="layout-container flex h-full grow flex-col py-10 px-6 md:px-20 lg:px-40">
            <h1 class="text-3xl font-bold mb-8 text-dark-text">تشكيلات مميزة</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Product 1 --}}
                <div @click="openProduct('قوالب سيليكون', '٢٥.٠٠ ر.س', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtaYETpEMbp9naFjogRCaFDQSFjM0TRd2_3vEvatFJSgA8Z1dl7THB203flW31J_b9zzLetkwiTZ8mCgWUorP_Lvzr7WU4r9TPeqAWs99J3wFRNhKXKuGqCUJH1Uobkg48f4dcG1SiRENFp7LAvlW3nA8qVdTYDOUtCB5HhBjARViyHcXDjUM0Kg9pQnurmcs0bGYLc2tpgTTxHUda91LJxPg0oD_yb-PvD4gjkOMHvZHyAiOE9Kg4uWDvfeMqxedG7f6T4reZbWuA')"
                    class="flex flex-col gap-4 rounded-lg bg-white p-4 shadow-sm cursor-pointer hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCtaYETpEMbp9naFjogRCaFDQSFjM0TRd2_3vEvatFJSgA8Z1dl7THB203flW31J_b9zzLetkwiTZ8mCgWUorP_Lvzr7WU4r9TPeqAWs99J3wFRNhKXKuGqCUJH1Uobkg48f4dcG1SiRENFp7LAvlW3nA8qVdTYDOUtCB5HhBjARViyHcXDjUM0Kg9pQnurmcs0bGYLc2tpgTTxHUda91LJxPg0oD_yb-PvD4gjkOMHvZHyAiOE9Kg4uWDvfeMqxedG7f6T4reZbWuA");'>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-dark-text font-bold">قوالب سيليكون</p>
                        <p class="text-warm-text">٢٥.٠٠ ر.س</p>
                    </div>
                </div>

                {{-- Product 2 --}}
                <div @click="openProduct('طقم خفاقات', '٣٢.٠٠ ر.س', 'https://lh3.googleusercontent.com/aida-public/AB6AXuA3GZFjHjza8PcD1FToGPSLYcK5cHprBfTuu7dEsPw09OtJaHmv1yZVoDVS05JwVeDGx41e-VKvS0NU4sqOfjrNnNYyzvL-pw7WyrwOmd6szz8Lu27W-3SNzpaOvdULn8j9RqiPV4XNMDkZZflOSJp_G7fG3JrrDGhtdLPWfgNzDuxzqRAtozeyUdw8op4WJ5BKjzrMal0HUl2nfJYcdg3rpV_R8mhyYogOgKu4N8QXg3Iq1fWk72URNgaIPWGnfeH7pVMpBZUf6oTV')"
                    class="flex flex-col gap-4 rounded-lg bg-white p-4 shadow-sm cursor-pointer hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA3GZFjHjza8PcD1FToGPSLYcK5cHprBfTuu7dEsPw09OtJaHmv1yZVoDVS05JwVeDGx41e-VKvS0NU4sqOfjrNnNYyzvL-pw7WyrwOmd6szz8Lu27W-3SNzpaOvdULn8j9RqiPV4XNMDkZZflOSJp_G7fG3JrrDGhtdLPWfgNzDuxzqRAtozeyUdw8op4WJ5BKjzrMal0HUl2nfJYcdg3rpV_R8mhyYogOgKu4N8QXg3Iq1fWk72URNgaIPWGnfeH7pVMpBZUf6oTV");'>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-dark-text font-bold">طقم خفاقات</p>
                        <p class="text-warm-text">٣٢.٠٠ ر.س</p>
                    </div>
                </div>

                {{-- Product 3 --}}
                <div @click="openProduct('شوبك رخامي', '٥٥.٠٠ ر.س', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAqavA86IB5Ts8o-TfGRZ-JP82S905Yjldh_CG7FvHIT82p8wv-CoHW2qVswUtTYwwWyfyho0kmYYphd2dlrewmL-omp2nm-_OqRm3E10wjbGRNeU5DfRIE-ThakSZ_JKc9AWWgdqg9Y-rbg4hTPqjMYOIGrJ0MptA5uj_AlMrtZeLII-zKRWdep_yOJO5hctIwYKN_s3Tte-M0Rck04uByL5ErtdLZSFzXpWqoK-p0TOl3YbAUYuUClEPLib9adP2YAbIM9_mNPGVA')"
                    class="flex flex-col gap-4 rounded-lg bg-white p-4 shadow-sm cursor-pointer hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAqavA86IB5Ts8o-TfGRZ-JP82S905Yjldh_CG7FvHIT82p8wv-CoHW2qVswUtTYwwWyfyho0kmYYphd2dlrewmL-omp2nm-_OqRm3E10wjbGRNeU5DfRIE-ThakSZ_JKc9AWWgdqg9Y-rbg4hTPqjMYOIGrJ0MptA5uj_AlMrtZeLII-zKRWdep_yOJO5hctIwYKN_s3Tte-M0Rck04uByL5ErtdLZSFzXpWqoK-p0TOl3YbAUYuUClEPLib9adP2YAbIM9_mNPGVA");'>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-dark-text font-bold">شوبك رخامي</p>
                        <p class="text-warm-text">٥٥.٠٠ ر.س</p>
                    </div>
                </div>

            </div>
        </main>
    </div>

    {{-- Product Modal --}}
    <div x-cloak x-show="isModalOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" @keydown.window.escape="isModalOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 overflow-hidden">

        {{-- Backdrop (Transparent with blur) --}}
        <div @click="isModalOpen = false"
            class="absolute inset-0 bg-warm-brown/30 backdrop-blur-sm transition-all duration-300"></div>

        {{-- Modal Content --}}
        <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4" @click.stop
            class="relative w-full max-w-6xl bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl flex flex-col md:flex-row overflow-hidden max-h-[90vh] md:h-[700px] border border-white/20">

            {{-- Close Button --}}
            <button @click="isModalOpen = false" aria-label="Close modal"
                class="absolute top-5 left-5 z-20 flex h-10 w-10 items-center justify-center rounded-full bg-white/50 text-dark-text shadow-sm backdrop-blur-md hover:bg-primary hover:text-white transition-all duration-300 group">
                <span class="material-symbols-outlined text-xl transition-transform group-hover:rotate-90">close</span>
            </button>

            {{-- Product Image --}}
            <div class="w-full md:w-[60%] relative h-72 md:h-auto overflow-hidden bg-accent-bg group">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-[2s] group-hover:scale-110 ease-out"
                    :style="'background-image: url(' + currentProduct.image + ')'">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-80">
                </div>
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-3 z-10">
                    <div
                        class="w-2.5 h-2.5 rounded-full bg-white shadow-lg cursor-pointer ring-2 ring-white/50 ring-offset-2 ring-offset-transparent">
                    </div>
                    <div
                        class="w-2.5 h-2.5 rounded-full bg-white/30 backdrop-blur-sm shadow-sm cursor-pointer hover:bg-white transition-all">
                    </div>
                    <div
                        class="w-2.5 h-2.5 rounded-full bg-white/30 backdrop-blur-sm shadow-sm cursor-pointer hover:bg-white transition-all">
                    </div>
                </div>
            </div>

            {{-- Product Details --}}
            <div class="w-full md:w-[40%] flex flex-col bg-white/95 backdrop-blur-sm relative z-10">
                <div class="flex-1 overflow-y-auto custom-scrollbar p-8 md:p-10">
                    <div
                        class="flex items-center gap-2 text-[10px] font-bold tracking-widest text-primary uppercase mb-5 opacity-90">
                        <span x-text="currentProduct.category">أدوات الخبز</span>
                        <span>•</span>
                        <span>حوامل العرض</span>
                    </div>
                    <h1 class="text-3xl md:text-[2.5rem] font-bold text-dark-text mb-4 leading-tight"
                        x-text="currentProduct.title"></h1>
                    <div class="flex items-center justify-between mb-8 pb-6 border-b border-gray-100">
                        <span class="text-3xl font-bold text-primary" x-text="currentProduct.price"></span>
                        <div
                            class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            <span class="text-xs font-bold mr-1">متوفر</span>
                        </div>
                    </div>
                    <p class="text-warm-text text-lg leading-relaxed mb-8 font-medium"
                        x-text="currentProduct.description"></p>
                    <div class="space-y-4 mb-8">
                        <div
                            class="flex justify-between items-center py-3 border-b border-gray-50 hover:bg-gray-50/50 transition-colors px-2 -mx-2 rounded-lg">
                            <span class="text-sm text-gray-400 font-bold">المادة</span>
                            <span class="text-sm text-dark-text font-semibold">سبيكة ذهبية مصقولة</span>
                        </div>
                        <div
                            class="flex justify-between items-center py-3 border-b border-gray-50 hover:bg-gray-50/50 transition-colors px-2 -mx-2 rounded-lg">
                            <span class="text-sm text-gray-400 font-bold">الأبعاد</span>
                            <span class="text-sm text-dark-text font-semibold">١٢ بوصة قطر × ٥ بوصة ارتفاع</span>
                        </div>
                        <div
                            class="flex justify-between items-center py-3 border-b border-gray-50 hover:bg-gray-50/50 transition-colors px-2 -mx-2 rounded-lg">
                            <span class="text-sm text-gray-400 font-bold">العناية</span>
                            <span class="text-sm text-dark-text font-semibold">غسيل يدوي فقط</span>
                        </div>
                    </div>
                </div>

                {{-- Footer Actions --}}
                <div
                    class="p-6 md:p-8 bg-white border-t border-gray-100 shadow-[0_-10px_40px_-15px_rgba(0,0,0,0.05)] z-20">
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-4 h-14">
                            <div class="flex items-center justify-between bg-accent-bg rounded-xl p-1.5 w-36 shrink-0">
                                <button
                                    class="w-10 h-full flex items-center justify-center rounded-lg bg-white text-dark-text shadow-sm hover:text-primary transition-colors hover:shadow-md">
                                    <span class="material-symbols-outlined text-base font-bold">add</span>
                                </button>
                                <span class="font-bold text-xl text-dark-text">١</span>
                                <button
                                    class="w-10 h-full flex items-center justify-center rounded-lg bg-white text-dark-text shadow-sm hover:text-primary transition-colors hover:shadow-md">
                                    <span class="material-symbols-outlined text-base font-bold">remove</span>
                                </button>
                            </div>
                            <button
                                class="flex-1 bg-primary hover:bg-[#c9124e] text-white font-bold text-lg rounded-xl shadow-lg shadow-primary/20 transition-all hover:shadow-primary/40 active:scale-[0.98] flex items-center justify-center gap-2 group">
                                <span
                                    class="material-symbols-outlined text-[22px] group-hover:animate-bounce-subtle">shopping_bag</span>
                                <span>أضف للسلة</span>
                            </button>
                        </div>
                        <a class="flex items-center justify-center gap-2 text-sm font-bold text-warm-text hover:text-primary transition-colors mt-1 py-2 rounded-lg hover:bg-accent-bg/50"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            الطلب السريع عبر واتساب
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>