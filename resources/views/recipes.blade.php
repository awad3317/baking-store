@extends('layouts.app')

@section('title', 'وصفات حصرية - سويت سبلايز')

@section('content')
    <main class="flex-1" x-data="recipesManager()">
        {{-- Hero Section --}}
        <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden flex items-center justify-center">
            <div class="absolute inset-0">
                <div class="h-full w-full bg-cover bg-center animate-ken-burns"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU');">
                </div>
                <div class="absolute inset-0 bg-[#211116]/60 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/90 via-warm-brown/40 to-transparent"></div>
            </div>
            <div class="relative z-10 w-full max-w-4xl px-6 text-center pt-10">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 leading-tight drop-shadow-lg">
                    اصنعي <span class="text-gold-shimmer">السعادة</span> بيدك
                </h1>
                <p class="text-lg md:text-xl text-pale-rose mb-10 font-medium drop-shadow-md">
                    مجموعة مختارة من الوصفات الاحترافية، مصممة خصيصاً لتناسب منتجاتنا الفاخرة
                </p>

                {{-- Search Bar --}}
                <div
                    class="glass-premium rounded-2xl p-2 md:p-3 flex items-center max-w-2xl mx-auto shadow-2xl transition-all focus-within:bg-white/20 focus-within:border-white/50">
                    <button class="p-3 text-white/70 hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">search</span>
                    </button>
                    <input x-model="search"
                        class="w-full bg-transparent border-none text-white placeholder-white/70 focus:ring-0 text-lg font-medium h-10 px-2"
                        placeholder="ابحثي عن وصفة (مثال: تشيز كيك، كوكيز...)" type="text" />
                </div>

                <div class="mt-6 flex flex-wrap justify-center items-center gap-3">
                    <span class="text-white/80 text-sm font-bold">الأكثر طلباً:</span>
                    <button @click="search = 'كيك'"
                        class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50 cursor-pointer">كيك</button>
                    <button @click="search = 'تارت'"
                        class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50 cursor-pointer">تارت</button>
                    <button @click="search = 'ماكرون'"
                        class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50 cursor-pointer">ماكرون</button>
                    <button @click="search = 'شوكولاتة'"
                        class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50 cursor-pointer">شوكولاتة</button>
                </div>
            </div>
        </section>

        {{-- Filter Bar --}}
        <section
            class="sticky top-[73px] z-30 w-full bg-white/95 backdrop-blur-md border-b border-[#f0ebed] shadow-sm dark:bg-[#1a0f12]/95 dark:border-[#3a2d32]">
            <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2 overflow-x-auto no-scrollbar w-full md:w-auto pb-1 md:pb-0">
                    {{-- Reset Filter --}}
                    <button @click="resetFilters()"
                        class="flex shrink-0 items-center gap-2 px-5 py-2 rounded-lg text-sm font-bold shadow-md transition-colors"
                        :class="hasActiveFilters() ? 'bg-white text-dusty-dark hover:bg-gray-50 border border-gray-200' : 'bg-warm-brown text-white hover:bg-primary border-transparent'">
                        <span class="material-symbols-outlined text-lg">grid_view</span>
                        الكل
                    </button>

                    <div class="h-6 w-px bg-gray-200 dark:bg-gray-700 mx-1"></div>

                    {{-- Difficulty Dropdown --}}
                    <div class="relative group shrink-0" x-data="{ open: false }" @click.outside="open = false">
                        <button @click="open = !open"
                            class="flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white hover:border-primary/30 text-dusty-dark hover:text-primary text-sm font-bold transition-all dark:bg-[#2f1f24] dark:border-[#3a2d32] dark:text-gray-300"
                            :class="filters.difficulty ? 'border-primary/50 text-primary bg-primary/5' : ''">
                            <span class="material-symbols-outlined text-lg">signal_cellular_alt</span>
                            <span x-text="filters.difficulty ? getDifficultyLabel(filters.difficulty) : 'الصعوبة'"></span>
                            <span class="material-symbols-outlined text-sm opacity-50 transition-transform duration-200"
                                :class="open ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        {{-- Dropdown Menu --}}
                        <div x-show="open" x-transition.origin.top.right
                            class="absolute top-full right-0 mt-2 w-48 rounded-xl bg-white shadow-xl border border-gray-100 py-1 z-50 dark:bg-[#2f1f24] dark:border-[#3a2d32]">
                            <template x-for="level in ['easy', 'medium', 'pro']">
                                <button
                                    @click="filters.difficulty = filters.difficulty === level ? '' : level; open = false"
                                    class="flex w-full items-center justify-between px-4 py-2 text-sm text-warm-brown hover:bg-rose-50 hover:text-primary text-right transition-colors"
                                    :class="filters.difficulty === level ? 'bg-rose-50 text-primary font-bold' : ''">
                                    <span x-text="getDifficultyLabel(level)"></span>
                                    <span x-show="filters.difficulty === level"
                                        class="material-symbols-outlined text-sm">check</span>
                                </button>
                            </template>
                        </div>
                    </div>

                    {{-- Time Dropdown --}}
                    <div class="relative group shrink-0" x-data="{ open: false }" @click.outside="open = false">
                        <button @click="open = !open"
                            class="flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white hover:border-primary/30 text-dusty-dark hover:text-primary text-sm font-bold transition-all dark:bg-[#2f1f24] dark:border-[#3a2d32] dark:text-gray-300"
                            :class="filters.time ? 'border-primary/50 text-primary bg-primary/5' : ''">
                            <span class="material-symbols-outlined text-lg">schedule</span>
                            <span x-text="filters.time ? filters.time : 'وقت التحضير'"></span>
                            <span class="material-symbols-outlined text-sm opacity-50 transition-transform duration-200"
                                :class="open ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <div x-show="open" x-transition.origin.top.right
                            class="absolute top-full right-0 mt-2 w-48 rounded-xl bg-white shadow-xl border border-gray-100 py-1 z-50 dark:bg-[#2f1f24] dark:border-[#3a2d32]">
                            <template x-for="time in ['أقل من 30 دقيقة', '30-60 دقيقة', 'أكثر من ساعة']">
                                <button @click="filters.time = filters.time === time ? '' : time; open = false"
                                    class="flex w-full items-center justify-between px-4 py-2 text-sm text-warm-brown hover:bg-rose-50 hover:text-primary text-right transition-colors"
                                    :class="filters.time === time ? 'bg-rose-50 text-primary font-bold' : ''">
                                    <span x-text="time"></span>
                                    <span x-show="filters.time === time"
                                        class="material-symbols-outlined text-sm">check</span>
                                </button>
                            </template>
                        </div>
                    </div>

                    {{-- Category Dropdown --}}
                    <div class="relative group shrink-0" x-data="{ open: false }" @click.outside="open = false">
                        <button @click="open = !open"
                            class="flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white hover:border-primary/30 text-dusty-dark hover:text-primary text-sm font-bold transition-all dark:bg-[#2f1f24] dark:border-[#3a2d32] dark:text-gray-300"
                            :class="filters.category ? 'border-primary/50 text-primary bg-primary/5' : ''">
                            <span class="material-symbols-outlined text-lg">category</span>
                            <span x-text="filters.category ? getCategoryLabel(filters.category) : 'التصنيف'"></span>
                            <span class="material-symbols-outlined text-sm opacity-50 transition-transform duration-200"
                                :class="open ? 'rotate-180' : ''">expand_more</span>
                        </button>
                        <div x-show="open" x-transition.origin.top.right
                            class="absolute top-full right-0 mt-2 w-48 rounded-xl bg-white shadow-xl border border-gray-100 py-1 z-50 dark:bg-[#2f1f24] dark:border-[#3a2d32]">
                            <template x-for="cat in ['cakes', 'pastries', 'decoration', 'cold_desserts']">
                                <button @click="filters.category = filters.category === cat ? '' : cat; open = false"
                                    class="flex w-full items-center justify-between px-4 py-2 text-sm text-warm-brown hover:bg-rose-50 hover:text-primary text-right transition-colors"
                                    :class="filters.category === cat ? 'bg-rose-50 text-primary font-bold' : ''">
                                    <span x-text="getCategoryLabel(cat)"></span>
                                    <span x-show="filters.category === cat"
                                        class="material-symbols-outlined text-sm">check</span>
                                </button>
                            </template>
                        </div>
                    </div>
                </div>

                <div class="text-sm text-dusty-dark font-medium hidden md:flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    <span x-text="`عرض ${filteredRecipes.length} وصفة`"></span>
                </div>
            </div>
        </section>

        {{-- Recipes Grid --}}
        <section class="py-12 px-4 md:px-6 max-w-7xl mx-auto bg-background-light dark:bg-background-dark min-h-[400px]">
            {{-- Empty State --}}
            <div x-show="filteredRecipes.length === 0" x-transition
                class="flex flex-col items-center justify-center py-20 text-center">
                <div class="bg-rose-50 rounded-full p-6 mb-4">
                    <span class="material-symbols-outlined text-6xl text-dusty-rose/50">search_off</span>
                </div>
                <h3 class="text-xl font-bold text-warm-brown mb-2">لا توجد وصفات تطابق بحثك</h3>
                <p class="text-dusty-dark">جربي تغيير كلمات البحث أو إزالة بعض الفلاتر</p>
                <button @click="resetFilters()"
                    class="mt-6 px-6 py-2 bg-primary text-white rounded-lg hover:bg-[#c9124e] transition-colors font-bold">
                    عرض كل الوصفات
                </button>
            </div>

            {{-- Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-show="filteredRecipes.length > 0">
                <template x-for="recipe in filteredRecipes" :key="recipe.id">
                    <article
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        {{-- Image --}}
                        <a :href="'{{ route('recipe.details') }}?id=' + recipe.id"
                            class="block relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                                :style="`background-image: url('${recipe.image}')`"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>

                            {{-- Badge based on difficulty --}}
                            <span
                                class="absolute top-4 right-4 backdrop-blur px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border"
                                :class="{
                                                    'bg-green-50/90 text-green-800 border-green-100': recipe.difficulty === 'easy',
                                                    'bg-white/90 text-warm-brown border-gray-100': recipe.difficulty === 'medium',
                                                    'bg-warm-brown/90 text-white border-gray-600': recipe.difficulty === 'pro'
                                                  }">
                                <span class="material-symbols-outlined text-sm" :class="{
                                                        'text-green-600': recipe.difficulty === 'easy',
                                                        'text-gold-accent': recipe.difficulty === 'medium' || recipe.difficulty === 'pro'
                                                      }" x-text="getDifficultyIcon(recipe.difficulty)"></span>
                                <span x-text="getDifficultyLabel(recipe.difficulty)"></span>
                            </span>
                        </a>

                        {{-- Content --}}
                        <div class="p-6 flex flex-col flex-1">
                            <a :href="'{{ route('recipe.details') }}?id=' + recipe.id">
                                <h3 class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white"
                                    x-text="recipe.title"></h3>
                            </a>

                            <div
                                class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span>
                                    <span x-text="recipe.time + ' دقيقة'"></span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">restaurant</span>
                                    <span x-text="recipe.servings"></span>
                                </div>
                            </div>

                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400"
                                x-text="recipe.description"></p>

                            <div class="mt-auto pt-4 border-t border-dashed border-gray-200 dark:border-gray-800">
                                <a class="flex items-center justify-between text-sm font-bold text-dusty-rose group-hover:text-primary transition-colors"
                                    :href="'{{ route('recipe.details') }}?id=' + recipe.id">
                                    <span>الأدوات المستخدمة</span>
                                    <span
                                        class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-[-4px]">arrow_back</span>
                                </a>
                            </div>
                        </div>
                    </article>
                </template>
            </div>

            <div class="mt-12 text-center" x-show="filteredRecipes.length > 0 && filteredRecipes.length < recipes.length">
                <button
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-white border border-gray-200 px-8 py-3 text-sm font-bold text-warm-brown shadow-sm transition-all hover:border-primary hover:text-primary hover:shadow-md dark:bg-[#2f1f24] dark:border-[#3a2d32] dark:text-white dark:hover:border-primary">
                    تحميل المزيد من الوصفات
                    <span class="material-symbols-outlined text-lg">expand_more</span>
                </button>
            </div>
        </section>

        <section class="bg-rose-50 py-16 dark:bg-[#2a1d21]/50 border-y border-rose-100 dark:border-[#3a2d32]">
            <div
                class="max-w-5xl mx-auto px-6 flex flex-col md:flex-row items-center gap-8 md:gap-12 text-center md:text-right">
                <div class="relative shrink-0 group">
                    <div
                        class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-white shadow-xl overflow-hidden bg-pale-rose flex items-center justify-center transition-transform duration-500 group-hover:rotate-6">
                        <span class="material-symbols-outlined text-7xl text-dusty-rose/40">face_3</span>
                    </div>
                    <div
                        class="absolute -bottom-2 -left-2 bg-gold-accent text-white h-10 w-10 flex items-center justify-center rounded-full shadow-lg animate-bounce">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                </div>
                <div>
                    <h3
                        class="text-primary font-bold text-sm tracking-widest uppercase mb-3 flex items-center justify-center md:justify-start gap-2">
                        <span class="h-px w-8 bg-primary"></span>
                        نصيحة الشيف
                    </h3>
                    <blockquote
                        class="text-xl md:text-3xl font-bold text-warm-brown leading-relaxed mb-4 relative dark:text-white">
                        <span class="text-4xl text-dusty-rose/20 absolute -top-4 -right-6 select-none">"</span>
                        نخل الدقيق مع البيكنج بودر ثلاث مرات هو السر الخفي للحصول على كيكة إسفنجية خفيفة كالغيمة.
                        <span class="text-4xl text-dusty-rose/20 absolute -bottom-4 -left-6 select-none">"</span>
                    </blockquote>
                    <p class="text-dusty-dark font-medium dark:text-gray-400">– الشيف منال، خبيرة حلويات سويت سبلايز</p>
                </div>
            </div>
        </section>

        {{-- Script for Data Logic --}}
        <script>
            function recipesManager() {
                return {
                    search: '',
                    filters: {
                        difficulty: '',
                        time: '',
                        category: ''
                    },
                    recipes: [
                        {
                            id: 1,
                            title: 'تشيز كيك الفراولة البارد',
                            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU',
                            difficulty: 'medium',
                            time: 45,
                            servings: '8 أشخاص',
                            category: 'cold_desserts',
                            description: 'وصفة كلاسيكية بقوام كريمي ناعم وطبقة بسكويت مقرمشة، مزينة بصلصة الفراولة الطازجة.'
                        },
                        {
                            id: 2,
                            title: 'الماكرون الفرنسي المثالي',
                            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDii73SFJez4obkgSgJT_6a38v900GUS7JS1pyAAC5LR4uyrWlLV3iOi6vkr6FJfExOKS3Cjc-AY66O872Kl24Wn79Vci7SSy_y0iblaNWkCXlBPH0SfKdtwh_C1MPAMkKOaEoqCm09f8U7C99OSdoh3gbhPZUhwfKt_FzD9VP4u9qtcEI7PepKwNd2Q8bLdTIcR1QvFM7kYlNn66RijKSsnbum97sLR7uRFZJI-Dn6xsalQ98E1CZHBILPVCpHQLYBaSyV0-oX67FK',
                            difficulty: 'pro',
                            time: 90,
                            servings: '24 قطعة',
                            category: 'pastries',
                            description: 'تعلمي أسرار الماكرون الناجح، من الميرانج المتماسك إلى الحشوة الغنية (الغناش).'
                        },
                        {
                            id: 3,
                            title: 'ترافل الشوكولاتة الداكنة',
                            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof',
                            difficulty: 'easy',
                            time: 30,
                            servings: '15 قطعة',
                            category: 'cakes',
                            description: 'حلوى فاخرة وسريعة التحضير باستخدام حبيبات الشوكولاتة البلجيكية عالية الجودة.'
                        },
                        {
                            id: 4,
                            title: 'كيك الموس الهندسي',
                            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd',
                            difficulty: 'medium',
                            time: 180,
                            servings: '10 أشخاص',
                            category: 'cakes',
                            description: 'استخدمي قوالب السيليكون الحديثة لصنع كيكة موس فانيليا مذهلة بشكل هندسي.'
                        },
                        {
                            id: 5,
                            title: 'تزيين الحلويات بالذهب',
                            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw',
                            difficulty: 'pro',
                            time: 15,
                            servings: 'تزيين',
                            category: 'decoration',
                            description: 'طريقة التعامل مع رقائق الذهب عيار 24 الصالحة للأكل لإضافة لمسة فخامة لمنتجاتك.'
                        },
                        {
                            id: 6,
                            title: 'دليل استخدام أقماع التزيين',
                            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y',
                            difficulty: 'easy',
                            time: 60,
                            servings: 'تعليمي',
                            category: 'decoration',
                            description: 'تعرفي على أشكال الأقماع المختلفة وكيفية صنع ورود وكشكشة مثالية بالكريمة.'
                        }
                    ],
                    get filteredRecipes() {
                        return this.recipes.filter(recipe => {
                            // Title/Desc Search
                            const matchesSearch = recipe.title.toLowerCase().includes(this.search.toLowerCase()) ||
                                recipe.description.toLowerCase().includes(this.search.toLowerCase());

                            // Difficulty Filter
                            const matchesDiff = this.filters.difficulty === '' || recipe.difficulty === this.filters.difficulty;

                            // Category Filter
                            const matchesCat = this.filters.category === '' || recipe.category === this.filters.category;

                            // Time Filter
                            let matchesTime = true;
                            if (this.filters.time === 'أقل من 30 دقيقة') matchesTime = recipe.time < 30;
                            else if (this.filters.time === '30-60 دقيقة') matchesTime = recipe.time >= 30 && recipe.time <= 60;
                            else if (this.filters.time === 'أكثر من ساعة') matchesTime = recipe.time > 60;

                            return matchesSearch && matchesDiff && matchesCat && matchesTime;
                        });
                    },
                    resetFilters() {
                        this.search = '';
                        this.filters = { difficulty: '', time: '', category: '' };
                    },
                    hasActiveFilters() {
                        return this.search !== '' || this.filters.difficulty !== '' || this.filters.time !== '' || this.filters.category !== '';
                    },
                    getDifficultyLabel(level) {
                        const labels = { 'easy': 'سهل', 'medium': 'متوسط', 'pro': 'احترافي' };
                        return labels[level] || level;
                    },
                    getDifficultyIcon(level) {
                        const icons = { 'easy': 'sentiment_satisfied', 'medium': 'signal_cellular_alt_2_bar', 'pro': 'military_tech' };
                        return icons[level] || 'help';
                    },
                    getCategoryLabel(cat) {
                        const labels = {
                            'cakes': 'كيك وتارت',
                            'pastries': 'معجنات',
                            'decoration': 'تزيين',
                            'cold_desserts': 'حلويات باردة'
                        };
                        return labels[cat] || cat;
                    }
                }
            }
        </script>
    </main>
@endsection