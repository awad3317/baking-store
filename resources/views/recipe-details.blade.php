@extends('layouts.app')

@section('content')
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

        .custom-checkbox input:checked+div {
            background-color: #b5838d;
            border-color: #b5838d;
            color: white;
        }

        .custom-checkbox input:checked+div span {
            opacity: 1;
        }

        .custom-checkbox:hover div {
            border-color: #e6195d;
        }
    </style>

    <main class="flex-1">
        <section
            class="relative h-[75vh] min-h-[500px] w-full overflow-hidden flex items-end pb-12 md:items-center md:pb-0">
            <div class="absolute inset-0">
                <div class="h-full w-full bg-cover bg-center animate-ken-burns"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5bp7F2WFWSSoT12FFVu7Yiw1y8D96emqChjbq-vzeitJrIfbzWPn90zFsUCy9dysc-N_FkH5BmbzrLxCvcbAkrtOYGFTWttn626LT6g6AVZVFvNwerYkH8em7aIrLx7alGPbZVnhv3D9cNX0E2EcJ65p-5oM8bQh5cCiVc1UtAwSiCe8EbwwjR5JGNEPI4eWWcH09UpslXt3HD5dHfWVf_fFduhFQmjQXdUhNMa-8DB5orkVgnYvO6rbi45g1iFLbT0mhmO1OnVd');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#211116] via-[#211116]/40 to-transparent opacity-90">
                </div>
            </div>
            <div class="relative z-10 w-full max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-end pb-8">
                <div class="text-white fade-up">
                    <div class="flex flex-wrap items-center gap-3 mb-6">
                        <span
                            class="bg-gold-accent text-warm-brown text-xs font-extrabold px-3 py-1 rounded-full flex items-center gap-1 shadow-lg shadow-gold-accent/20">
                            <span class="material-symbols-outlined text-sm">military_tech</span>
                            احترافي
                        </span>
                        <span
                            class="flex items-center gap-1 text-sm bg-white/10 backdrop-blur-md border border-white/20 px-3 py-1 rounded-full text-white/90">
                            <span class="material-symbols-outlined text-base">schedule</span> 3 ساعات
                        </span>
                        <span
                            class="flex items-center gap-1 text-sm bg-white/10 backdrop-blur-md border border-white/20 px-3 py-1 rounded-full text-white/90">
                            <span class="material-symbols-outlined text-base">restaurant</span> 8 أشخاص
                        </span>
                    </div>
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-tight drop-shadow-xl">
                        كيكة الموس <br /><span class="text-gold-shimmer">الهندسية</span>
                    </h1>
                    <div
                        class="flex items-center gap-4 mb-8 bg-white/5 p-3 rounded-xl backdrop-blur-sm w-fit border border-white/10">
                        <div class="relative">
                            <div
                                class="w-12 h-12 rounded-full bg-dusty-rose flex items-center justify-center text-white border-2 border-gold-accent overflow-hidden">
                                <span class="material-symbols-outlined text-3xl">face_3</span>
                            </div>
                            <div
                                class="absolute -bottom-1 -left-1 bg-green-500 w-3 h-3 rounded-full border-2 border-[#211116]">
                            </div>
                        </div>
                        <div>
                            <p class="text-xs text-gray-300 mb-0.5">وصفة حصرية من إعداد</p>
                            <p class="font-bold text-lg text-white flex items-center gap-1">
                                الشيف منال
                                <span class="material-symbols-outlined text-gold-accent text-sm">verified</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-start md:justify-end mb-4 md:mb-0">
                    <button
                        class="group flex items-center gap-4 bg-white/5 hover:bg-white/15 backdrop-blur-md border border-white/20 rounded-full pl-6 pr-2 py-2 transition-all hover:scale-105">
                        <div class="text-right">
                            <span class="block text-xs text-white/60 font-medium">فيديو تعليمي</span>
                            <span class="block font-bold text-white text-lg">شاهد الطريقة</span>
                        </div>
                        <span
                            class="flex items-center justify-center w-14 h-14 bg-primary rounded-full shadow-lg shadow-primary/40 group-hover:bg-white group-hover:text-primary transition-colors text-white">
                            <span class="material-symbols-outlined text-3xl">play_arrow</span>
                        </span>
                    </button>
                </div>
            </div>
        </section>
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-8 order-2 lg:order-1">
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold text-warm-brown dark:text-white mb-4 relative inline-block">
                            عن الوصفة
                            <span class="absolute bottom-1 right-0 w-full h-2 bg-dusty-rose/20 -z-10 rounded-full"></span>
                        </h2>
                        <p class="text-dusty-dark dark:text-gray-300 leading-relaxed text-lg text-justify">
                            هذه الكيكة ليست مجرد حلوى، بل هي تحفة فنية هندسية تجمع بين قوام الموس الناعم كالحرير وقلب الجيلي
                            المنعش، مغلفة بطبقة مخملية باستخدام تقنية الرش. مثالية للمناسبات الخاصة التي تتطلب إبهاراً
                            بصرياً ومذاقاً لا ينسى. في هذا الدرس، سنتعلم كيفية استخدام قوالب السيليكون الهندسية للحصول على
                            حواف حادة ومثالية، وكيفية موازنة النكهات بين حلاوة الشوكولاتة البيضاء وحموضة التوت.
                        </p>
                    </div>
                    <div
                        class="mb-12 bg-white dark:bg-[#2a1d21] rounded-2xl p-8 border border-gray-100 dark:border-[#3a2d32] shadow-sm relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-dusty-rose/5 rounded-bl-full -z-0"></div>
                        <div class="flex items-center justify-between mb-8 relative z-10">
                            <h3 class="text-xl font-bold text-warm-brown dark:text-white flex items-center gap-2">
                                <span
                                    class="flex items-center justify-center w-8 h-8 rounded-full bg-dusty-rose/10 text-dusty-rose">
                                    <span class="material-symbols-outlined text-lg">grocery</span>
                                </span>
                                المكونات
                            </h3>
                            <div
                                class="flex items-center gap-2 text-sm font-bold text-primary bg-primary/5 px-3 py-1 rounded-lg cursor-pointer hover:bg-primary/10 transition-colors">
                                <span class="material-symbols-outlined text-lg">shopping_basket</span>
                                إضافة الكل للسلة
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 relative z-10">
                            <label class="custom-checkbox flex items-center gap-3 cursor-pointer group">
                                <input class="hidden" type="checkbox" />
                                <div
                                    class="w-6 h-6 rounded border-2 border-gray-300 bg-white flex items-center justify-center transition-all duration-200 dark:bg-white/5 dark:border-gray-600">
                                    <span class="material-symbols-outlined text-sm opacity-0">check</span>
                                </div>
                                <span
                                    class="text-warm-brown dark:text-gray-300 group-hover:text-primary transition-colors">500
                                    جرام شوكولاتة بيضاء</span>
                            </label>
                            <label class="custom-checkbox flex items-center gap-3 cursor-pointer group">
                                <input class="hidden" type="checkbox" />
                                <div
                                    class="w-6 h-6 rounded border-2 border-gray-300 bg-white flex items-center justify-center transition-all duration-200 dark:bg-white/5 dark:border-gray-600">
                                    <span class="material-symbols-outlined text-sm opacity-0">check</span>
                                </div>
                                <span
                                    class="text-warm-brown dark:text-gray-300 group-hover:text-primary transition-colors">200
                                    مل كريمة خفق (35% دسم)</span>
                            </label>
                            <label class="custom-checkbox flex items-center gap-3 cursor-pointer group">
                                <input class="hidden" type="checkbox" />
                                <div
                                    class="w-6 h-6 rounded border-2 border-gray-300 bg-white flex items-center justify-center transition-all duration-200 dark:bg-white/5 dark:border-gray-600">
                                    <span class="material-symbols-outlined text-sm opacity-0">check</span>
                                </div>
                                <span
                                    class="text-warm-brown dark:text-gray-300 group-hover:text-primary transition-colors">3
                                    أوراق جيلاتين (النوع الذهبي)</span>
                            </label>
                            <label class="custom-checkbox flex items-center gap-3 cursor-pointer group">
                                <input class="hidden" type="checkbox" />
                                <div
                                    class="w-6 h-6 rounded border-2 border-gray-300 bg-white flex items-center justify-center transition-all duration-200 dark:bg-white/5 dark:border-gray-600">
                                    <span class="material-symbols-outlined text-sm opacity-0">check</span>
                                </div>
                                <span
                                    class="text-warm-brown dark:text-gray-300 group-hover:text-primary transition-colors">150
                                    جرام هريس الفراولة</span>
                            </label>
                            <label class="custom-checkbox flex items-center gap-3 cursor-pointer group">
                                <input class="hidden" type="checkbox" />
                                <div
                                    class="w-6 h-6 rounded border-2 border-gray-300 bg-white flex items-center justify-center transition-all duration-200 dark:bg-white/5 dark:border-gray-600">
                                    <span class="material-symbols-outlined text-sm opacity-0">check</span>
                                </div>
                                <span
                                    class="text-warm-brown dark:text-gray-300 group-hover:text-primary transition-colors">بخاخ
                                    مخملي أبيض للتزيين</span>
                            </label>
                            <label class="custom-checkbox flex items-center gap-3 cursor-pointer group">
                                <input class="hidden" type="checkbox" />
                                <div
                                    class="w-6 h-6 rounded border-2 border-gray-300 bg-white flex items-center justify-center transition-all duration-200 dark:bg-white/5 dark:border-gray-600">
                                    <span class="material-symbols-outlined text-sm opacity-0">check</span>
                                </div>
                                <span
                                    class="text-warm-brown dark:text-gray-300 group-hover:text-primary transition-colors">رقائق
                                    ذهب قابلة للأكل</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-warm-brown dark:text-white mb-8 flex items-center gap-2">
                            <span
                                class="flex items-center justify-center w-8 h-8 rounded-full bg-dusty-rose/10 text-dusty-rose">
                                <span class="material-symbols-outlined text-lg">menu_book</span>
                            </span>
                            طريقة التحضير
                        </h3>
                        <div class="relative border-r-2 border-dashed border-dusty-rose/30 mr-4 space-y-12 pb-4">
                            <div class="relative pr-12 group">
                                <span
                                    class="absolute -right-[19px] top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white border-2 border-dusty-rose text-dusty-rose font-bold shadow-md group-hover:bg-dusty-rose group-hover:text-white transition-colors dark:bg-[#211116] dark:border-dusty-rose/50">1</span>
                                <h4
                                    class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-dusty-rose transition-colors">
                                    تحضير قلب الجيلي (الحشوة)</h4>
                                <div class="flex items-start gap-4">
                                    <p class="text-dusty-dark dark:text-gray-400 leading-relaxed text-sm flex-1">
                                        نقوم بخلط هريس الفراولة مع الجيلاتين المذاب (بعد نقعه في ماء بارد)، ونسكبه في قالب
                                        سيليكون أصغر من القالب الرئيسي بـ 2 سم، ثم نضعه في الفريزر لمدة 4 ساعات على الأقل
                                        حتى يتجمد تماماً ويصبح صلب القوام.
                                    </p>
                                    <div
                                        class="hidden sm:block w-16 h-16 bg-gray-100 rounded-lg flex-shrink-0 flex items-center justify-center text-gray-300 dark:bg-white/5">
                                        <span class="material-symbols-outlined">ac_unit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative pr-12 group">
                                <span
                                    class="absolute -right-[19px] top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white border-2 border-dusty-rose text-dusty-rose font-bold shadow-md group-hover:bg-dusty-rose group-hover:text-white transition-colors dark:bg-[#211116] dark:border-dusty-rose/50">2</span>
                                <h4
                                    class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-dusty-rose transition-colors">
                                    إعداد موس الفانيليا</h4>
                                <div class="flex items-start gap-4">
                                    <p class="text-dusty-dark dark:text-gray-400 leading-relaxed text-sm flex-1">
                                        نخفق الكريمة حتى تصل لدرجة تماسك متوسطة (Soft Peaks). في وعاء آخر، نذوب الشوكولاتة
                                        البيضاء ونخلطها مع الكريمة الإنجليزية الساخنة. نبرد الخليط إلى 35 درجة مئوية ثم
                                        نمزجه مع الكريمة المخفوقة بحركات دائرية هادئة للحفاظ على الهواء.
                                    </p>
                                    <div
                                        class="hidden sm:block w-16 h-16 bg-gray-100 rounded-lg flex-shrink-0 flex items-center justify-center text-gray-300 dark:bg-white/5">
                                        <span class="material-symbols-outlined">blender</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative pr-12 group">
                                <span
                                    class="absolute -right-[19px] top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white border-2 border-dusty-rose text-dusty-rose font-bold shadow-md group-hover:bg-dusty-rose group-hover:text-white transition-colors dark:bg-[#211116] dark:border-dusty-rose/50">3</span>
                                <h4
                                    class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-dusty-rose transition-colors">
                                    التجميع والتجميد</h4>
                                <div class="flex items-start gap-4">
                                    <p class="text-dusty-dark dark:text-gray-400 leading-relaxed text-sm flex-1">
                                        نسكب نصف كمية الموس في قالب السيليكون الهندسي. نخرج حشوة الجيلي المجمدة ونغرسها في
                                        المنتصف بدقة. نغطيها بباقي كمية الموس ونسوي السطح بملعقة مسطحة. نطرق القالب بخفة
                                        لإخراج فقاعات الهواء، ثم نجمد الكيك لمدة ليلة كاملة.
                                    </p>
                                    <div
                                        class="hidden sm:block w-16 h-16 bg-gray-100 rounded-lg flex-shrink-0 flex items-center justify-center text-gray-300 dark:bg-white/5">
                                        <span class="material-symbols-outlined">layers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative pr-12 group">
                                <span
                                    class="absolute -right-[19px] top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white border-2 border-dusty-rose text-dusty-rose font-bold shadow-md group-hover:bg-dusty-rose group-hover:text-white transition-colors dark:bg-[#211116] dark:border-dusty-rose/50">4</span>
                                <h4
                                    class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-dusty-rose transition-colors">
                                    التزيين النهائي</h4>
                                <div class="flex items-start gap-4">
                                    <p class="text-dusty-dark dark:text-gray-400 leading-relaxed text-sm flex-1">
                                        نخرج الكيكة من القالب وهي مجمدة تماماً. نرشها فوراً بالبخاخ المخملي للحصول على
                                        الملمس المطلوب. نزين السطح برقائق الذهب بحذر باستخدام ملقط دقيق. نتركها في الثلاجة
                                        لمدة 3 ساعات لتذوب ببطء قبل التقديم.
                                    </p>
                                    <div
                                        class="hidden sm:block w-16 h-16 bg-gray-100 rounded-lg flex-shrink-0 flex items-center justify-center text-gray-300 dark:bg-white/5">
                                        <span class="material-symbols-outlined">brush</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 order-1 lg:order-2">
                    <div class="sticky top-24 space-y-6">
                        <div
                            class="bg-white dark:bg-[#2a1d21] rounded-2xl shadow-xl overflow-hidden border border-gold-accent/40 relative group hover:border-gold-accent transition-colors duration-300">
                            <div
                                class="absolute top-4 right-4 z-20 bg-primary text-white text-xs font-bold px-3 py-1.5 rounded-full animate-pulse shadow-md">
                                عرض البكج -30%
                            </div>
                            <div
                                class="relative bg-gradient-to-br from-gray-50 to-gray-100 dark:from-[#211116] dark:to-[#2f1f24] p-8 text-center overflow-hidden">
                                <div
                                    class="absolute inset-0 opacity-10 bg-[radial-gradient(#b5838d_1px,transparent_1px)] [background-size:16px_16px]">
                                </div>
                                <h3 class="relative z-10 text-xl font-bold text-warm-brown dark:text-white mb-1">بكج
                                    "اصنعيها بنفسك"</h3>
                                <p class="relative z-10 text-xs text-dusty-dark font-medium mb-6">كل الأدوات الاحترافية لهذه
                                    الوصفة في صندوق واحد</p>
                                <div
                                    class="relative z-10 mb-6 group-hover:-translate-y-2 transition-transform duration-500">
                                    <img alt="Bundle Main Item"
                                        class="w-48 h-48 object-cover mx-auto rounded-xl shadow-2xl rotate-3 group-hover:rotate-6 transition-transform duration-500 border-4 border-white dark:border-[#3a2d32]"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw" />
                                    <div
                                        class="absolute -bottom-4 -right-2 w-20 h-20 rounded-lg border-2 border-white shadow-lg bg-white overflow-hidden -rotate-6 group-hover:-rotate-12 transition-transform dark:border-[#3a2d32] dark:bg-[#211116]">
                                        <img alt="Thumbnail 1" class="w-full h-full object-cover"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y" />
                                    </div>
                                    <div
                                        class="absolute -bottom-4 -left-2 w-20 h-20 rounded-lg border-2 border-white shadow-lg bg-white overflow-hidden rotate-6 group-hover:rotate-12 transition-transform dark:border-[#3a2d32] dark:bg-[#211116]">
                                        <img alt="Thumbnail 2" class="w-full h-full object-cover"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof" />
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-white dark:bg-[#2a1d21] relative z-10">
                                <div class="flex items-end justify-center gap-3 mb-6">
                                    <div class="text-center">
                                        <span class="block text-xs text-gray-400 line-through mb-0.5">285 ر.س</span>
                                        <span class="block text-3xl font-extrabold text-primary">199 ر.س</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-4 rounded-xl bg-primary text-white font-bold text-lg shadow-lg shadow-primary/30 hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/40 transition-all animate-pulse-scale flex items-center justify-center gap-2 mb-3">
                                    <span class="material-symbols-outlined">shopping_bag</span>
                                    شراء المجموعة كاملة
                                </button>
                                <p
                                    class="text-[10px] text-center text-dusty-dark flex items-center justify-center gap-1 opacity-80">
                                    <span class="material-symbols-outlined text-sm text-green-500">local_shipping</span>
                                    شحن مجاني وسريع عند طلب هذا البكج
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-white dark:bg-[#2a1d21] rounded-xl p-5 border border-gray-100 dark:border-[#3a2d32] shadow-sm">
                            <h4 class="text-sm font-bold text-warm-brown dark:text-white mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-gold-accent">inventory_2</span>
                                محتويات الصندوق:
                            </h4>
                            <ul class="text-sm space-y-3">
                                <li
                                    class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <img alt="item"
                                            class="w-8 h-8 rounded object-cover border border-gray-100 dark:border-gray-700"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw" />
                                        <span class="text-dusty-dark dark:text-gray-300 font-medium">ورق ذهب عيار 24</span>
                                    </div>
                                    <span
                                        class="text-xs font-bold text-warm-brown dark:text-white bg-gray-100 dark:bg-white/10 px-2 py-1 rounded">45
                                        ر.س</span>
                                </li>
                                <li
                                    class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded border border-gray-100 bg-gray-50 flex items-center justify-center text-gray-400 dark:border-gray-700 dark:bg-white/5">
                                            <span class="material-symbols-outlined text-base">category</span>
                                        </div>
                                        <span class="text-dusty-dark dark:text-gray-300 font-medium">قالب سيليكون
                                            هندسي</span>
                                    </div>
                                    <span
                                        class="text-xs font-bold text-warm-brown dark:text-white bg-gray-100 dark:bg-white/10 px-2 py-1 rounded">95
                                        ر.س</span>
                                </li>
                                <li
                                    class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                                    <div class="flex items-center gap-3">
                                        <img alt="item"
                                            class="w-8 h-8 rounded object-cover border border-gray-100 dark:border-gray-700"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y" />
                                        <span class="text-dusty-dark dark:text-gray-300 font-medium">أقماع تزيين
                                            دقيقة</span>
                                    </div>
                                    <span
                                        class="text-xs font-bold text-warm-brown dark:text-white bg-gray-100 dark:bg-white/10 px-2 py-1 rounded">65
                                        ر.س</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex gap-3">
                            <button
                                class="flex-1 py-3 rounded-xl border border-gray-200 dark:border-[#3a2d32] text-dusty-dark font-bold hover:bg-gray-50 dark:hover:bg-white/5 flex items-center justify-center gap-2 transition-colors text-sm">
                                <span class="material-symbols-outlined">share</span>
                                مشاركة
                            </button>
                            <button
                                class="flex-1 py-3 rounded-xl border border-gray-200 dark:border-[#3a2d32] text-dusty-dark font-bold hover:bg-gray-50 dark:hover:bg-white/5 flex items-center justify-center gap-2 transition-colors text-sm">
                                <span class="material-symbols-outlined">favorite</span>
                                حفظ الوصفة
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section
            class="border-y border-gray-100 dark:border-[#3a2d32] bg-rose-50/50 dark:bg-[#1a0f12] py-16 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-warm-brown dark:text-white">تسوق المنتجات منفردة</h2>
                    <a class="text-primary text-sm font-bold flex items-center gap-1 hover:gap-2 transition-all hover:underline"
                        href="#">
                        عرض كل منتجات الوصفة
                        <span class="material-symbols-outlined text-lg rtl:rotate-180">arrow_right_alt</span>
                    </a>
                </div>
                <div class="relative group">
                    <div class="flex gap-6 overflow-x-auto pb-8 no-scrollbar snap-x scroll-smooth">
                        <div
                            class="min-w-[220px] md:min-w-[260px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl border border-gray-100 dark:border-[#3a2d32] overflow-hidden group/card hover:shadow-lg transition-all duration-300">
                            <div class="relative h-56 bg-white dark:bg-[#2f1f24] p-6 flex items-center justify-center">
                                <img alt="Gold Leaf"
                                    class="max-h-full max-w-full object-contain group-hover/card:scale-110 transition-transform duration-500 drop-shadow-sm"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUxVDAQckC6monq5vjhglCKFfej2PZPGVPzcOSqYqMabwFdkiyaGhKjSheGfzXp_epG-YnudhOYnP6UWF-ZhCQ04sQoz5CBu_T0yje9T3vWylkL4FsJ77m8LYXgiSf6f0iIXfPdzmUu1t-_723aNyDof8sH0gfMzjx8VyM4wxmRyMFHzRHynxTQVhKKA9BLPdD4ey6mBDPyojdXsAntKqEXddWna5AH7ct73Ip3NPKs7TvwyRBAldKkwHyy5sY0jJR7F2XCMSgghPw" />
                                <button
                                    class="absolute bottom-3 right-3 w-10 h-10 bg-white dark:bg-[#2a1d21] rounded-full shadow-md flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors transform translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 duration-300 border border-gray-100 dark:border-[#3a2d32]">
                                    <span class="material-symbols-outlined text-xl">add</span>
                                </button>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base font-bold text-warm-brown dark:text-white truncate mb-1">ورق ذهب عيار
                                    24</h3>
                                <p class="text-sm text-dusty-dark dark:text-gray-400 mb-2">للتزيين الفاخر</p>
                                <p class="text-primary font-bold text-lg">45 ر.س</p>
                            </div>
                        </div>
                        <div
                            class="min-w-[220px] md:min-w-[260px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl border border-gray-100 dark:border-[#3a2d32] overflow-hidden group/card hover:shadow-lg transition-all duration-300">
                            <div class="relative h-56 bg-white dark:bg-[#2f1f24] p-6 flex items-center justify-center">
                                <img alt="Decorating Tips"
                                    class="max-h-full max-w-full object-contain group-hover/card:scale-110 transition-transform duration-500 drop-shadow-sm"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNi_th0kE3oGGi9IymwQVjDObGIIVgGyRAtLTka46fOyznMx_3NiHHd--tVzcAobzCsByB7j_Quy0bezxG3Arhea07gAfdxaFGMGAKiuoP3h52beY7cBqdE7p2AHo0n0LNCXiE_jvLvayC3MvuQ69mfhSDvZ5z8rYjjNyV7QduOVGnDyKW5MZFcQDvFXRebAshf1XJtw_gTKqS90nwm6RtCxUSq7kM3XbE8_u5xeGKfnKVzdejprEyTLDAJQKsifE1m8nEbRrFKc-y" />
                                <button
                                    class="absolute bottom-3 right-3 w-10 h-10 bg-white dark:bg-[#2a1d21] rounded-full shadow-md flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors transform translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 duration-300 border border-gray-100 dark:border-[#3a2d32]">
                                    <span class="material-symbols-outlined text-xl">add</span>
                                </button>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base font-bold text-warm-brown dark:text-white truncate mb-1">طقم أقماع
                                    تزيين</h3>
                                <p class="text-sm text-dusty-dark dark:text-gray-400 mb-2">6 رؤوس مختلفة</p>
                                <p class="text-primary font-bold text-lg">65 ر.س</p>
                            </div>
                        </div>
                        <div
                            class="min-w-[220px] md:min-w-[260px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl border border-gray-100 dark:border-[#3a2d32] overflow-hidden group/card hover:shadow-lg transition-all duration-300">
                            <div class="relative h-56 bg-white dark:bg-[#2f1f24] p-6 flex items-center justify-center">
                                <img alt="Ingredients"
                                    class="max-h-full max-w-full object-contain group-hover/card:scale-110 transition-transform duration-500 drop-shadow-sm"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhmZYfFBBoOuWtpe23v0HXCFN_1qGKrKAh4sYaB-8OPcnPUiq5GcamG9p5B8ndW9fvcvbaydKxjqTGaYOMoxtf0gB3Db3LKGSJNbjMHuCaF-H-DzFSuz8n22ht0Cxjd02KO-BtddNuKj46xpKsFqFV00fslJwyNjZ03cXL4TCHyhwaQ19iikepTh2SrlUV7rjJ-7pRs7uOfV_WVXEjHaqEC7rJPEPDniHY33oKnWCg3HPGARYyI-yI6Om7kgZ_qpnCWTmpY8-Ircof" />
                                <button
                                    class="absolute bottom-3 right-3 w-10 h-10 bg-white dark:bg-[#2a1d21] rounded-full shadow-md flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors transform translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 duration-300 border border-gray-100 dark:border-[#3a2d32]">
                                    <span class="material-symbols-outlined text-xl">add</span>
                                </button>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base font-bold text-warm-brown dark:text-white truncate mb-1">شوكولاتة خام
                                </h3>
                                <p class="text-sm text-dusty-dark dark:text-gray-400 mb-2">بلجيكية فاخرة 1 كيلو</p>
                                <p class="text-primary font-bold text-lg">85 ر.س</p>
                            </div>
                        </div>
                        <div
                            class="min-w-[220px] md:min-w-[260px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl border border-gray-100 dark:border-[#3a2d32] overflow-hidden group/card hover:shadow-lg transition-all duration-300">
                            <div class="relative h-56 bg-white dark:bg-[#2f1f24] p-6 flex items-center justify-center">
                                <span class="material-symbols-outlined text-8xl text-gray-200">category</span>
                                <button
                                    class="absolute bottom-3 right-3 w-10 h-10 bg-white dark:bg-[#2a1d21] rounded-full shadow-md flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors transform translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 duration-300 border border-gray-100 dark:border-[#3a2d32]">
                                    <span class="material-symbols-outlined text-xl">add</span>
                                </button>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base font-bold text-warm-brown dark:text-white truncate mb-1">قالب سيليكون
                                    هندسي</h3>
                                <p class="text-sm text-dusty-dark dark:text-gray-400 mb-2">أصلي ومقاوم للحرارة</p>
                                <p class="text-primary font-bold text-lg">95 ر.س</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white dark:bg-[#211116] py-16">
            <div class="max-w-4xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-2xl font-bold text-warm-brown dark:text-white mb-2">تجارب المبدعات</h2>
                    <p class="text-dusty-dark dark:text-gray-400">شاهدي ماذا قالوا عن هذه الوصفة والبكج</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div
                        class="bg-background-light dark:bg-[#2f1f24] p-8 rounded-3xl border border-transparent hover:border-gold-accent/20 transition-colors">
                        <div class="flex items-center gap-1 text-gold-accent mb-4">
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                        </div>
                        <p class="text-warm-brown dark:text-gray-200 text-lg font-medium mb-6 leading-relaxed">"أول مرة أجرب
                            قوالب السيليكون الهندسية، النتيجة كانت مبهرة! البكج وفر علي وقت البحث عن الأدوات، والذهب عطى
                            الكيكة فخامة مو طبيعية."</p>
                        <div class="flex items-center gap-4 border-t border-gray-200 dark:border-gray-700 pt-4">
                            <div
                                class="w-10 h-10 rounded-full bg-dusty-rose text-white flex items-center justify-center font-bold shadow-md">
                                ن</div>
                            <div>
                                <p class="text-sm font-bold text-warm-brown dark:text-white">نورة العبدالله</p>
                                <p class="text-xs text-dusty-dark dark:text-gray-400">قامت بشراء "بكج اصنعيها بنفسك"</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-background-light dark:bg-[#2f1f24] p-8 rounded-3xl border border-transparent hover:border-gold-accent/20 transition-colors">
                        <div class="flex items-center gap-1 text-gold-accent mb-4">
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star</span>
                            <span class="material-symbols-outlined text-lg fill-current">star_half</span>
                        </div>
                        <p class="text-warm-brown dark:text-gray-200 text-lg font-medium mb-6 leading-relaxed">"الوصفة دقيقة
                            جداً، والموس طلع متماسك وطعمه غني. أنصح بشراء البخاخ المخملي يعطي شكل احترافي كأنه من محل
                            مشهور."</p>
                        <div class="flex items-center gap-4 border-t border-gray-200 dark:border-gray-700 pt-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold shadow-sm">
                                س</div>
                            <div>
                                <p class="text-sm font-bold text-warm-brown dark:text-white">سارة محمد</p>
                                <p class="text-xs text-dusty-dark dark:text-gray-400">مشتركة في دورة الشيف منال</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-[#fcf8f9] dark:bg-[#1f1517] py-16 border-t border-[#f0ebed] dark:border-[#3a2d32]" x-data>
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-warm-brown dark:text-white relative inline-block">
                        وصفات مشابهة قد تعجبك
                        <span class="absolute bottom-1 right-0 w-2/3 h-2 bg-dusty-rose/20 -z-10 rounded-full"></span>
                    </h2>
                    <div class="flex gap-2" x-data>
                        <button @click="$refs.slider.scrollBy({ left: 320, behavior: 'smooth' })"
                            class="w-10 h-10 rounded-full bg-white dark:bg-[#2a1d21] border border-gray-200 dark:border-[#3a2d32] flex items-center justify-center text-dusty-dark hover:bg-dusty-rose hover:text-white hover:border-dusty-rose transition-all shadow-sm group">
                            <span
                                class="material-symbols-outlined text-xl group-hover:scale-110 transition-transform">arrow_right_alt</span>
                        </button>

                        <button @click="$refs.slider.scrollBy({ left: -320, behavior: 'smooth' })"
                            class="w-10 h-10 rounded-full bg-white dark:bg-[#2a1d21] border border-gray-200 dark:border-[#3a2d32] flex items-center justify-center text-dusty-dark hover:bg-dusty-rose hover:text-white hover:border-dusty-rose transition-all shadow-sm group">
                            <span
                                class="material-symbols-outlined text-xl group-hover:scale-110 transition-transform rotate-180">arrow_right_alt</span>
                        </button>
                    </div>
                </div>
                <div class="flex gap-6 overflow-x-auto pb-8 no-scrollbar snap-x scroll-smooth" x-ref="slider">
                    <div
                        class="min-w-[280px] md:min-w-[320px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100 dark:border-[#3a2d32]">
                        <div class="relative h-48 overflow-hidden">
                            <img alt="Rose Macarons"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4cf0wfuP4w34PpzOx5GKaLCrOFPFaXrbd4xf4Rgzjw7Cyf5JWx5C_PNU-Y0bp3bYoXEaKQm_c1RZM9Ycqm2Q9Dgyq2ORYbmtzm3N9euzX6DovqicI2Vc2hr01Wgm-T0YgKg5bglpgKW1tW2oEh0zD4lCtwQDlvj9Kl5t6CGeDon-tZkTdogad_GpPp5HzSof5GxdBkID9QDBZF8bUJHSErtoxwaS9MDg9Cpfe7BJ51904-niEaXIIkeuNDa6rMuzhmBQZeTy3A3J4" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white/90 dark:bg-[#211116]/90 backdrop-blur-sm text-xs font-bold px-2 py-1 rounded text-warm-brown dark:text-white shadow-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm text-gold-accent">star</span>
                                4.9
                            </span>
                        </div>
                        <div class="p-5">
                            <div
                                class="flex items-center gap-2 mb-2 text-xs font-medium text-dusty-dark dark:text-gray-400">
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 45 دقيقة
                                </span>
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">signal_cellular_alt</span> متوسط
                                </span>
                            </div>
                            <h3
                                class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-primary transition-colors">
                                ماكارون الورد الفرنسي</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4">تعلمي أسرار الماكارون
                                الناجح بحشوة كريمة الورد واللوز المقرمش.</p>
                            <button class="text-sm font-bold text-primary flex items-center gap-1 group/btn">
                                عرض الوصفة
                                <span
                                    class="material-symbols-outlined text-lg group-hover/btn:-translate-x-1 transition-transform rtl:rotate-180">arrow_right_alt</span>
                            </button>
                        </div>
                    </div>
                    <div
                        class="min-w-[280px] md:min-w-[320px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100 dark:border-[#3a2d32]">
                        <div class="relative h-48 overflow-hidden">
                            <img alt="Chocolate Tart"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJxOAvR6UtVyFx_ELn725ShhrWYSNN7Z3p7EZGP04KxrCozWjxxCzfOfOQl1it1OS6MoxDT20NMlHc_K5QdJCKFTCRpD4L9gSrFzxVV7Suw4XhUiNAXJN4JP9LTs6zG4tF-TARWkBlkQywlk_M2CtD4daZVHGekHaUJNzJfpVqRPNLkaDbnxKrF67WpS0QC0TUjNaYXPVYV6WRery89SVS9yCZDpbSjmu91s-HZhIWnd9VTvW6icRDupXNvcmbN-3NLJzuBRBL_hya" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white/90 dark:bg-[#211116]/90 backdrop-blur-sm text-xs font-bold px-2 py-1 rounded text-warm-brown dark:text-white shadow-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm text-gold-accent">star</span>
                                4.8
                            </span>
                        </div>
                        <div class="p-5">
                            <div
                                class="flex items-center gap-2 mb-2 text-xs font-medium text-dusty-dark dark:text-gray-400">
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 60 دقيقة
                                </span>
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">signal_cellular_alt</span> متقدم
                                </span>
                            </div>
                            <h3
                                class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-primary transition-colors">
                                تارت الشوكولاتة والكراميل</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4">تارت فاخر بطبقات من كراميل
                                المملح وجناش الشوكولاتة الداكنة.</p>
                            <button class="text-sm font-bold text-primary flex items-center gap-1 group/btn">
                                عرض الوصفة
                                <span
                                    class="material-symbols-outlined text-lg group-hover/btn:-translate-x-1 transition-transform rtl:rotate-180">arrow_right_alt</span>
                            </button>
                        </div>
                    </div>
                    <div
                        class="min-w-[280px] md:min-w-[320px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100 dark:border-[#3a2d32]">
                        <div class="relative h-48 overflow-hidden">
                            <img alt="Strawberry Cheesecake"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQNVLpgz4fRN474Q3E9Zcfs4kyp1rFv3xbaseUkRwPChyLFoE7zGutzBsLH6AjGh87DipBf3gfvCYTqGEG_1ed0Mzo1RNb2zzCq6Ik8hFkSIROaW22M7bk7Wsf11niQya-K6fYXJkd5n5nFMb_bxkfeJWp9Anjh7jdXjkjMebPtqS0PBmbIkJWwt9ujc__i4Ms5ByQFKtlu7o6HcKzXDIKSagS3eROipIZO3b07kR8nfTEWHXhsaW1Jj47XNl54-1m-GQclyrHMZU2" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white/90 dark:bg-[#211116]/90 backdrop-blur-sm text-xs font-bold px-2 py-1 rounded text-warm-brown dark:text-white shadow-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm text-gold-accent">star</span>
                                5.0
                            </span>
                        </div>
                        <div class="p-5">
                            <div
                                class="flex items-center gap-2 mb-2 text-xs font-medium text-dusty-dark dark:text-gray-400">
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 5 ساعات
                                </span>
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">signal_cellular_alt</span> سهل
                                </span>
                            </div>
                            <h3
                                class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-primary transition-colors">
                                تشيز كيك الفراولة البارد</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4">وصفة منعشة وسهلة التحضير
                                بدون فرن، مثالية لفصل الصيف.</p>
                            <button class="text-sm font-bold text-primary flex items-center gap-1 group/btn">
                                عرض الوصفة
                                <span
                                    class="material-symbols-outlined text-lg group-hover/btn:-translate-x-1 transition-transform rtl:rotate-180">arrow_right_alt</span>
                            </button>
                        </div>
                    </div>
                    <div
                        class="min-w-[280px] md:min-w-[320px] snap-center bg-white dark:bg-[#2a1d21] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-gray-100 dark:border-[#3a2d32]">
                        <div class="relative h-48 overflow-hidden">
                            <img alt="Pistachio Eclair"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNhwlD3v3LtagsPNSzY7ep7YHFKkNBy62D-xah0EWlSyRe04fJy17ZqQ2Ym413uj31aB9-pf4k1wvOK3KrN40Hajk6GT7CZ17SzizIkRnhOXThTjPXz96PSSkYRn82IzGnZH119f70P1OqGR2hILthFJv8HWqH4W0IV-4Oavo2YiVQSks2hIyLwoXrmPNI86BqQ8MqDXQ4pg5qMKAPMB63_qO8SjFnsrNdsQ_6XxJ2QAoEccWjGSR4k9jUsLRv74fcLdUOy96H_N9v" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white/90 dark:bg-[#211116]/90 backdrop-blur-sm text-xs font-bold px-2 py-1 rounded text-warm-brown dark:text-white shadow-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm text-gold-accent">star</span>
                                4.7
                            </span>
                        </div>
                        <div class="p-5">
                            <div
                                class="flex items-center gap-2 mb-2 text-xs font-medium text-dusty-dark dark:text-gray-400">
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 90 دقيقة
                                </span>
                                <span class="flex items-center gap-1 bg-gray-50 dark:bg-white/5 px-2 py-0.5 rounded">
                                    <span class="material-symbols-outlined text-sm">signal_cellular_alt</span> محترف
                                </span>
                            </div>
                            <h3
                                class="text-lg font-bold text-warm-brown dark:text-white mb-2 group-hover:text-primary transition-colors">
                                إكلير الفستق والورد</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2 mb-4">عجينة شو كلاسيكية محشوة
                                بكريم باتسيير الفستق الغني ومغطاة بالجليز.</p>
                            <button class="text-sm font-bold text-primary flex items-center gap-1 group/btn">
                                عرض الوصفة
                                <span
                                    class="material-symbols-outlined text-lg group-hover/btn:-translate-x-1 transition-transform rtl:rotate-180">arrow_right_alt</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection