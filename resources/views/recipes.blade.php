@extends('layouts.app')

@section('title', 'وصفات حصرية - سويت سبلايز')

@section('content')
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
            <div
                class="glass-premium rounded-2xl p-2 md:p-3 flex items-center max-w-2xl mx-auto shadow-2xl transition-all focus-within:bg-white/20 focus-within:border-white/50">
                <button class="p-3 text-white/70 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">search</span>
                </button>
                <input
                    class="w-full bg-transparent border-none text-white placeholder-white/70 focus:ring-0 text-lg font-medium h-10 px-2"
                    placeholder="ابحثي عن وصفة (مثال: تشيز كيك، كوكيز...)" type="text" />
            </div>
            <div class="mt-6 flex flex-wrap justify-center items-center gap-3">
                <span class="text-white/80 text-sm font-bold">الأكثر طلباً:</span>
                <a class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50"
                    href="#">كيك</a>
                <a class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50"
                    href="#">تارت</a>
                <a class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50"
                    href="#">ماكرون</a>
                <a class="px-4 py-1.5 rounded-full bg-white/10 text-white text-sm hover:bg-white/25 transition-all backdrop-blur-sm border border-white/10 hover:border-gold-accent/50"
                    href="#">خبز</a>
            </div>
        </div>
    </section>

    <section
        class="sticky top-[73px] z-30 w-full bg-white/95 backdrop-blur-md border-b border-[#f0ebed] shadow-sm dark:bg-[#1a0f12]/95 dark:border-[#3a2d32]">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2 overflow-x-auto no-scrollbar w-full md:w-auto pb-1 md:pb-0">
                <button
                    class="flex shrink-0 items-center gap-2 px-5 py-2 rounded-lg bg-warm-brown text-white text-sm font-bold shadow-md hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-lg">grid_view</span>
                    الكل
                </button>
                <div class="h-6 w-px bg-gray-200 dark:bg-gray-700 mx-1"></div>
                <div class="relative group shrink-0">
                    <button
                        class="flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white hover:border-primary/30 text-dusty-dark hover:text-primary text-sm font-bold transition-all dark:bg-[#2f1f24] dark:border-[#3a2d32] dark:text-gray-300">
                        <span class="material-symbols-outlined text-lg">signal_cellular_alt</span>
                        <span>الصعوبة</span>
                        <span class="material-symbols-outlined text-sm opacity-50">expand_more</span>
                    </button>
                </div>
                <div class="relative group shrink-0">
                    <button
                        class="flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white hover:border-primary/30 text-dusty-dark hover:text-primary text-sm font-bold transition-all dark:bg-[#2f1f24] dark:border-[#3a2d32] dark:text-gray-300">
                        <span class="material-symbols-outlined text-lg">schedule</span>
                        <span>وقت التحضير</span>
                        <span class="material-symbols-outlined text-sm opacity-50">expand_more</span>
                    </button>
                </div>
                <div class="relative group shrink-0">
                    <button
                        class="flex items-center gap-2 px-4 py-2 rounded-lg border border-gray-200 bg-white hover:border-primary/30 text-dusty-dark hover:text-primary text-sm font-bold transition-all dark:bg-[#2f1f24] dark:border-[#3a2d32] dark:text-gray-300">
                        <span class="material-symbols-outlined text-lg">category</span>
                        <span>التصنيف</span>
                        <span class="material-symbols-outlined text-sm opacity-50">expand_more</span>
                    </button>
                </div>
            </div>
            <div class="text-sm text-dusty-dark font-medium hidden md:flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                عرض 24 وصفة
            </div>
        </div>
    </section>

    <section class="py-12 px-4 md:px-6 max-w-7xl mx-auto bg-background-light dark:bg-background-dark">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <article
                class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                <div class="relative h-64 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                    <span
                        class="absolute top-4 right-4 bg-white/90 backdrop-blur text-warm-brown px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-100">
                        <span class="material-symbols-outlined text-gold-accent text-sm">signal_cellular_alt_2_bar</span>
                        متوسط
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3
                        class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                        تشيز كيك الفراولة البارد</h3>
                    <div
                        class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                        <div class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span>
                            45 دقيقة</div>
                        <div class="flex items-center gap-1"><span
                                class="material-symbols-outlined text-sm">restaurant</span> 8 أشخاص</div>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">وصفة كلاسيكية بقوام كريمي ناعم
                        وطبقة بسكويت مقرمشة، مزينة بصلصة الفراولة الطازجة.</p>
                    <div class="mt-auto pt-4 border-t border-dashed border-gray-200 dark:border-gray-800">
                        <a class="flex items-center justify-between text-sm font-bold text-dusty-rose group-hover:text-primary transition-colors"
                            href="#">
                            <span>الأدوات المستخدمة</span>
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-[-4px]">arrow_back</span>
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                <div class="relative h-64 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDii73SFJez4obkgSgJT_6a38v900GUS7JS1pyAAC5LR4uyrWlLV3iOi6vkr6FJfExOKS3Cjc-AY66O872Kl24Wn79Vci7SSy_y0iblaNWkCXlBPH0SfKdtwh_C1MPAMkKOaEoqCm09f8U7C99OSdoh3gbhPZUhwfKt_FzD9VP4u9qtcEI7PepKwNd2Q8bLdTIcR1QvFM7kYlNn66RijKSsnbum97sLR7uRFZJI-Dn6xsalQ98E1CZHBILPVCpHQLYBaSyV0-oX67FK');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                    <span
                        class="absolute top-4 right-4 bg-warm-brown/90 backdrop-blur text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-600">
                        <span class="material-symbols-outlined text-gold-accent text-sm">military_tech</span> احترافي
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3
                        class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                        الماكرون الفرنسي المثالي</h3>
                    <div
                        class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                        <div class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span>
                            90 دقيقة</div>
                        <div class="flex items-center gap-1"><span
                                class="material-symbols-outlined text-sm">restaurant</span> 24 قطعة</div>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">تعلمي أسرار الماكرون الناجح، من
                        الميرانج المتماسك إلى الحشوة الغنية (الغناش).</p>
                    <div class="mt-auto pt-4 border-t border-dashed border-gray-200 dark:border-gray-800">
                        <a class="flex items-center justify-between text-sm font-bold text-dusty-rose group-hover:text-primary transition-colors"
                            href="#">
                            <span>الأدوات المستخدمة</span>
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-[-4px]">arrow_back</span>
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                <div class="relative h-64 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                    <span
                        class="absolute top-4 right-4 bg-green-50/90 backdrop-blur text-green-800 px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-green-100">
                        <span class="material-symbols-outlined text-green-600 text-sm">sentiment_satisfied</span> سهل
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3
                        class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                        ترافل الشوكولاتة الداكنة</h3>
                    <div
                        class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                        <div class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span>
                            30 دقيقة</div>
                        <div class="flex items-center gap-1"><span
                                class="material-symbols-outlined text-sm">restaurant</span> 15 قطعة</div>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">حلوى فاخرة وسريعة التحضير باستخدام
                        حبيبات الشوكولاتة البلجيكية عالية الجودة.</p>
                    <div class="mt-auto pt-4 border-t border-dashed border-gray-200 dark:border-gray-800">
                        <a class="flex items-center justify-between text-sm font-bold text-dusty-rose group-hover:text-primary transition-colors"
                            href="#">
                            <span>الأدوات المستخدمة</span>
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-[-4px]">arrow_back</span>
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                <div class="relative h-64 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                    <span
                        class="absolute top-4 right-4 bg-white/90 backdrop-blur text-warm-brown px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-100">
                        <span class="material-symbols-outlined text-gold-accent text-sm">signal_cellular_alt_2_bar</span>
                        متوسط
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3
                        class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                        كيك الموس الهندسي</h3>
                    <div
                        class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                        <div class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span>
                            3 ساعات</div>
                        <div class="flex items-center gap-1"><span
                                class="material-symbols-outlined text-sm">restaurant</span> 10 أشخاص</div>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">استخدمي قوالب السيليكون الحديثة
                        لصنع كيكة موس فانيليا مذهلة بشكل هندسي.</p>
                    <div class="mt-auto pt-4 border-t border-dashed border-gray-200 dark:border-gray-800">
                        <a class="flex items-center justify-between text-sm font-bold text-dusty-rose group-hover:text-primary transition-colors"
                            href="#">
                            <span>الأدوات المستخدمة</span>
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-[-4px]">arrow_back</span>
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                <div class="relative h-64 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                    <span
                        class="absolute top-4 right-4 bg-warm-brown/90 backdrop-blur text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-600">
                        <span class="material-symbols-outlined text-gold-accent text-sm">military_tech</span> احترافي
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3
                        class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                        تزيين الحلويات بالذهب</h3>
                    <div
                        class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                        <div class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span>
                            15 دقيقة</div>
                        <div class="flex items-center gap-1"><span
                                class="material-symbols-outlined text-sm">restaurant</span> تزيين</div>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">طريقة التعامل مع رقائق الذهب عيار
                        24 الصالحة للأكل لإضافة لمسة فخامة لمنتجاتك.</p>
                    <div class="mt-auto pt-4 border-t border-dashed border-gray-200 dark:border-gray-800">
                        <a class="flex items-center justify-between text-sm font-bold text-dusty-rose group-hover:text-primary transition-colors"
                            href="#">
                            <span>الأدوات المستخدمة</span>
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-[-4px]">arrow_back</span>
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2 border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                <div class="relative h-64 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
                    <span
                        class="absolute top-4 right-4 bg-green-50/90 backdrop-blur text-green-800 px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-green-100">
                        <span class="material-symbols-outlined text-green-600 text-sm">sentiment_satisfied</span> سهل
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3
                        class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                        دليل استخدام أقماع التزيين</h3>
                    <div
                        class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                        <div class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span>
                            60 دقيقة</div>
                        <div class="flex items-center gap-1"><span
                                class="material-symbols-outlined text-sm">restaurant</span> تعليمي</div>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">تعرفي على أشكال الأقماع المختلفة
                        وكيفية صنع ورود وكشكشة مثالية بالكريمة.</p>
                    <div class="mt-auto pt-4 border-t border-dashed border-gray-200 dark:border-gray-800">
                        <a class="flex items-center justify-between text-sm font-bold text-dusty-rose group-hover:text-primary transition-colors"
                            href="#">
                            <span>الأدوات المستخدمة</span>
                            <span
                                class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-[-4px]">arrow_back</span>
                        </a>
                    </div>
                </div>
            </article>
        </div>
        <div class="mt-12 text-center">
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
@endsection