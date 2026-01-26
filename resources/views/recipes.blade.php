<!DOCTYPE html>
<html class="light" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>وصفات حصرية - سويت سبلايز</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#e6195d",
                        "background-light": "#f8f6f6",
                        "background-dark": "#211116",
                        "dusty-rose": "#b5838d",
                        "dusty-dark": "#88636f",
                        "pale-rose": "#fdf2f4",
                        "warm-brown": "#181113",
                        "gold-shimmer": "#F3E5AB",
                        "gold-accent": "#D4AF37",
                        "whatsapp": "#25D366",
                        "whatsapp-dark": "#128C7E",
                    },
                    fontFamily: {
                        "display": ["Cairo", "sans-serif"],
                        "body": ["Cairo", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                    animation: {
                        'shimmer': 'shimmer 2s infinite linear',
                        'ken-burns': 'ken-burns 20s ease-out infinite alternate',
                        'fade-up': 'fade-up 1s ease-out forwards',
                        'pulse-scale': 'pulse-scale 2s ease-in-out infinite',
                        'progress': 'progress 10s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                },
            },
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .gold-badge {
            background: linear-gradient(90deg, #D4AF37 0%, #F3E5AB 50%, #D4AF37 100%);
            background-size: 200% auto;
            animation: shimmer 3s infinite linear;
        }

        .glass-premium {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .card-lift:hover {
            transform: translateY(-8px);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-warm-brown font-display antialiased">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <div class="fixed bottom-8 left-8 z-50 group">
            <button
                class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-white shadow-xl transition-transform hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-primary/30">
                <span class="material-symbols-outlined text-3xl">shopping_cart</span>
                <span
                    class="absolute -top-1 -left-1 flex h-6 w-6 items-center justify-center rounded-full bg-white text-xs font-bold text-primary ring-2 ring-background-light">3</span>
            </button>
        </div>
        <header
            class="sticky top-0 z-40 w-full border-b border-[#f0ebed] bg-white/95 px-6 py-4 backdrop-blur-md dark:bg-[#1a0f12]/95 dark:border-[#3a2d32]">
            <div class="mx-auto flex max-w-7xl items-center justify-between">
                <div class="flex items-center gap-3 text-warm-brown dark:text-white">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <span class="material-symbols-outlined">bakery_dining</span>
                    </div>
                    <h1 class="text-xl font-bold tracking-tight">سويت سبلايز</h1>
                </div>
                <nav class="hidden items-center gap-8 md:flex">
                    <a class="text-sm font-medium text-warm-brown hover:text-primary dark:text-gray-200"
                        href="#">الرئيسية</a>
                    <a class="text-sm font-medium text-warm-brown hover:text-primary dark:text-gray-200"
                        href="#">المتجر</a>
                    <a class="text-sm font-medium text-primary dark:text-primary" href="#">الوصفات</a>
                    <a class="text-sm font-medium text-warm-brown hover:text-primary dark:text-gray-200" href="#">تواصل
                        معنا</a>
                </nav>
                <div class="flex items-center gap-4">
                    <div class="hidden md:flex">
                        <label
                            class="relative flex h-10 w-64 items-center overflow-hidden rounded-lg bg-background-light dark:bg-[#2f1f24]">
                            <span
                                class="material-symbols-outlined absolute right-3 text-[20px] text-dusty-dark">search</span>
                            <input
                                class="h-full w-full border-none bg-transparent pr-10 pl-4 text-sm text-warm-brown placeholder-dusty-dark focus:ring-0 dark:text-white"
                                placeholder="بحث عن منتج..." type="text" />
                        </label>
                    </div>
                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-lg bg-background-light text-warm-brown md:hidden dark:bg-[#2f1f24] dark:text-white">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-lg bg-background-light text-warm-brown transition-colors hover:bg-primary/10 hover:text-primary dark:bg-[#2f1f24] dark:text-white">
                        <span class="material-symbols-outlined">person</span>
                    </button>
                </div>
            </div>
        </header>
        <main class="flex-1">
            <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden flex items-center justify-center">
                <div class="absolute inset-0">
                    <div class="h-full w-full bg-cover bg-center animate-ken-burns"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU');">
                    </div>
                    <div class="absolute inset-0 bg-[#211116]/60 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/90 via-warm-brown/40 to-transparent">
                    </div>
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
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 card-lift border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        <div class="relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATySq5W8srPLoXBxWHWHwxS6Rse3NBixmzBs58Y_ZoMnawaSsGyrFEK7masw4nZr7I5m4VFWgol9oGC5WmRTHTZNEIjlTC8izxCbfHclaZikIyBYejFD0BdIcq1CrD-damvGm68f7_3MunTkShxkz9tJqU8bjaey6044zL4qMOWcHguPE96IWfnl3rgBowECazZQ-Ghtc29kQNMMC8DzU3F86tKlwifmHoEtCYE4tJdQuNntDY8PYcJwvyGRKMNweQtB30QbkjO9ZU');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60">
                            </div>
                            <span
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-warm-brown px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-100">
                                <span
                                    class="material-symbols-outlined text-gold-accent text-sm">signal_cellular_alt_2_bar</span>
                                متوسط
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3
                                class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                                تشيز كيك الفراولة البارد</h3>
                            <div
                                class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">schedule</span> 45 دقيقة</div>
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">restaurant</span> 8 أشخاص</div>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">وصفة كلاسيكية بقوام
                                كريمي ناعم وطبقة بسكويت مقرمشة، مزينة بصلصة الفراولة الطازجة.</p>
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
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 card-lift border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        <div class="relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDii73SFJez4obkgSgJT_6a38v900GUS7JS1pyAAC5LR4uyrWlLV3iOi6vkr6FJfExOKS3Cjc-AY66O872Kl24Wn79Vci7SSy_y0iblaNWkCXlBPH0SfKdtwh_C1MPAMkKOaEoqCm09f8U7C99OSdoh3gbhPZUhwfKt_FzD9VP4u9qtcEI7PepKwNd2Q8bLdTIcR1QvFM7kYlNn66RijKSsnbum97sLR7uRFZJI-Dn6xsalQ98E1CZHBILPVCpHQLYBaSyV0-oX67FK');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60">
                            </div>
                            <span
                                class="absolute top-4 right-4 bg-warm-brown/90 backdrop-blur text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-600">
                                <span class="material-symbols-outlined text-gold-accent text-sm">military_tech</span>
                                احترافي
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3
                                class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                                الماكرون الفرنسي المثالي</h3>
                            <div
                                class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">schedule</span> 90 دقيقة</div>
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">restaurant</span> 24 قطعة</div>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">تعلمي أسرار الماكرون
                                الناجح، من الميرانج المتماسك إلى الحشوة الغنية (الغناش).</p>
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
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 card-lift border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        <div class="relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60">
                            </div>
                            <span
                                class="absolute top-4 right-4 bg-green-50/90 backdrop-blur text-green-800 px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-green-100">
                                <span
                                    class="material-symbols-outlined text-green-600 text-sm">sentiment_satisfied</span>
                                سهل
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3
                                class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                                ترافل الشوكولاتة الداكنة</h3>
                            <div
                                class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">schedule</span> 30 دقيقة</div>
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">restaurant</span> 15 قطعة</div>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">حلوى فاخرة وسريعة
                                التحضير باستخدام حبيبات الشوكولاتة البلجيكية عالية الجودة.</p>
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
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 card-lift border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        <div class="relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60">
                            </div>
                            <span
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-warm-brown px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-100">
                                <span
                                    class="material-symbols-outlined text-gold-accent text-sm">signal_cellular_alt_2_bar</span>
                                متوسط
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3
                                class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                                كيك الموس الهندسي</h3>
                            <div
                                class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">schedule</span> 3 ساعات</div>
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">restaurant</span> 10 أشخاص</div>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">استخدمي قوالب
                                السيليكون الحديثة لصنع كيكة موس فانيليا مذهلة بشكل هندسي.</p>
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
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 card-lift border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        <div class="relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60">
                            </div>
                            <span
                                class="absolute top-4 right-4 bg-warm-brown/90 backdrop-blur text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-gray-600">
                                <span class="material-symbols-outlined text-gold-accent text-sm">military_tech</span>
                                احترافي
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3
                                class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                                تزيين الحلويات بالذهب</h3>
                            <div
                                class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">schedule</span> 15 دقيقة</div>
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">restaurant</span> تزيين</div>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">طريقة التعامل مع رقائق
                                الذهب عيار 24 الصالحة للأكل لإضافة لمسة فخامة لمنتجاتك.</p>
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
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 card-lift border border-[#f0ebed] flex flex-col h-full dark:bg-[#2a1d21] dark:border-[#3a2d32]">
                        <div class="relative h-64 overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60">
                            </div>
                            <span
                                class="absolute top-4 right-4 bg-green-50/90 backdrop-blur text-green-800 px-3 py-1 rounded-full text-xs font-bold shadow-sm flex items-center gap-1 border border-green-100">
                                <span
                                    class="material-symbols-outlined text-green-600 text-sm">sentiment_satisfied</span>
                                سهل
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3
                                class="text-xl font-bold text-warm-brown mb-2 group-hover:text-primary transition-colors dark:text-white">
                                دليل استخدام أقماع التزيين</h3>
                            <div
                                class="flex items-center gap-4 text-xs text-dusty-dark mb-4 border-b border-gray-100 dark:border-gray-800 pb-4">
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">schedule</span> 60 دقيقة</div>
                                <div class="flex items-center gap-1"><span
                                        class="material-symbols-outlined text-sm">restaurant</span> تعليمي</div>
                            </div>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 dark:text-gray-400">تعرفي على أشكال
                                الأقماع المختلفة وكيفية صنع ورود وكشكشة مثالية بالكريمة.</p>
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
                        <p class="text-dusty-dark font-medium dark:text-gray-400">– الشيف منال، خبيرة حلويات سويت سبلايز
                        </p>
                    </div>
                </div>
            </section>
        </main>
        <footer class="relative overflow-hidden bg-background-light pt-16 pb-8 dark:bg-[#1a0f12]">
            <div class="absolute inset-0 opacity-[0.04] pointer-events-none select-none overflow-hidden">
                <span
                    class="material-symbols-outlined absolute top-10 left-[10%] text-7xl text-dusty-dark rotate-12">bakery_dining</span>
                <span
                    class="material-symbols-outlined absolute top-1/4 right-[5%] text-6xl text-dusty-dark -rotate-12">cake</span>
                <span
                    class="material-symbols-outlined absolute bottom-10 left-[20%] text-8xl text-dusty-dark rotate-45">cookie</span>
                <span
                    class="material-symbols-outlined absolute top-20 right-[25%] text-5xl text-dusty-dark rotate-6">icecream</span>
                <span
                    class="material-symbols-outlined absolute bottom-[20%] right-[15%] text-7xl text-dusty-dark -rotate-6">restaurant_menu</span>
                <span
                    class="material-symbols-outlined absolute top-[60%] left-[5%] text-5xl text-dusty-dark rotate-12">kitchen</span>
                <span
                    class="material-symbols-outlined absolute top-10 right-[40%] text-4xl text-dusty-dark -rotate-45">egg</span>
                <span
                    class="material-symbols-outlined absolute bottom-[10%] left-[45%] text-6xl text-dusty-dark rotate-180">local_cafe</span>
            </div>
            <div class="absolute inset-0 bg-[#FFF8F0]/90 dark:bg-[#1a0f12]/95 mix-blend-overlay z-0"></div>
            <div class="relative z-10 mx-auto max-w-7xl px-6">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 text-right mb-12">
                    <div class="max-w-xs">
                        <div class="mb-6 flex items-center gap-2 text-warm-brown dark:text-white">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">bakery_dining</span>
                            </div>
                            <span class="text-xl font-bold">سويت سبلايز</span>
                        </div>
                        <p class="text-sm leading-relaxed text-dusty-dark dark:text-gray-400">مستلزمات حلويات فاخرة
                            للمبدعين، المحترفين، والحالمين. نجعل العالم مكاناً أشهى، قطعة تلو الأخرى.</p>
                    </div>
                    <div class="flex flex-col items-start gap-4">
                        <h4 class="mb-2 text-lg font-bold text-warm-brown dark:text-white">روابط هامة</h4>
                        <ul class="flex flex-col gap-3 text-sm text-dusty-dark dark:text-gray-400 font-medium w-full">
                            <li><a class="flex items-center gap-2 hover:text-primary transition-colors" href="#"><span
                                        class="material-symbols-outlined text-base">chevron_left</span> سياسة
                                    الاستبدال</a></li>
                            <li><a class="flex items-center gap-2 hover:text-primary transition-colors" href="#"><span
                                        class="material-symbols-outlined text-base">chevron_left</span> الشروط
                                    والأحكام</a></li>
                            <li><a class="flex items-center gap-2 hover:text-primary transition-colors" href="#"><span
                                        class="material-symbols-outlined text-base">chevron_left</span> تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div
                            class="relative overflow-hidden rounded-xl border border-gold-accent/20 bg-white p-6 shadow-sm dark:bg-[#2f1f24] dark:border-[#3a2d32]">
                            <div class="relative z-10">
                                <span
                                    class="mb-3 inline-block rounded-full bg-primary/10 px-3 py-1 text-[10px] font-bold text-primary">
                                    دعوة خاصة VIP
                                </span>
                                <h4 class="mb-2 text-lg font-bold text-warm-brown dark:text-white">انضم لمجتمع مبدعي
                                    الحلويات</h4>
                                <p class="mb-4 text-xs leading-relaxed text-dusty-dark dark:text-gray-400">احصل على كود
                                    خصم فوري، وصفات حصرية أسبوعية، وتنبيهات بجديد المنتجات.</p>
                                <button
                                    class="flex w-full items-center justify-center gap-2 rounded-full bg-whatsapp py-3 text-sm font-bold text-white shadow-lg shadow-whatsapp/20 transition-all hover:bg-whatsapp-dark hover:shadow-xl hover:-translate-y-0.5">
                                    <span class="material-symbols-outlined text-lg">chat</span>
                                    انضم للمجموعة الآن
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 mr-2">
                            <a class="group text-dusty-rose transition-all duration-300 hover:text-primary hover:scale-110"
                                href="#">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                    </path>
                                </svg>
                            </a>
                            <a class="group text-dusty-rose transition-all duration-300 hover:text-primary hover:scale-110"
                                href="#">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036c-2.148 0-2.797 1.603-2.797 2.898v1.072h4.508l-.435 3.667h-4.073v7.98h-5.016z">
                                    </path>
                                </svg>
                            </a>
                            <a class="group text-dusty-rose transition-all duration-300 hover:text-primary hover:scale-110"
                                href="#">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="mx-auto mt-6 max-w-7xl border-t border-[#e0d8db] px-6 pt-8 text-center text-xs text-dusty-dark md:text-right dark:border-[#3a2d32] dark:text-gray-500 relative z-10">
                    © 2024 سويت سبلايز. جميع الحقوق محفوظة.
                </div>
            </div>
        </footer>
    </div>

</body>

</html>