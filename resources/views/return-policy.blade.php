@extends('layouts.app')

@push('styles')
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endpush

@section('content')
    <section
        class="relative h-72 w-full overflow-hidden bg-pale-rose flex flex-col items-center justify-center text-center">
        <div class="absolute inset-0 opacity-[0.05] pointer-events-none">
            <span
                class="material-symbols-outlined absolute top-4 left-10 text-6xl rotate-12 text-dusty-dark">bakery_dining</span>
            <span class="material-symbols-outlined absolute bottom-4 right-10 text-7xl rotate-6 text-dusty-dark">cake</span>
        </div>
        <div class="relative z-10 px-6">
            <nav class="mb-4 flex items-center justify-center gap-2 text-xs text-dusty-dark/60">
                <a class="hover:text-dusty-rose transition-colors" href="{{ route('home') }}">الرئيسية</a>
                <span class="material-symbols-outlined text-[10px] rotate-180">chevron_right</span>
                <span class="font-bold text-dusty-rose">سياسة الاستبدال والاسترجاع</span>
            </nav>
            <h1 class="text-3xl md:text-5xl font-black text-warm-brown mb-3">سياسة الاستبدال والاسترجاع</h1>
            <p class="text-dusty-dark max-w-lg mx-auto font-medium">رضاكم هو هدفنا، وهذه شروطنا لضمان جودة خدماتنا</p>
        </div>
    </section>

    <section class="py-12 -mt-10 px-6 z-20 relative">
        <div class="mx-auto max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-6">
            <div
                class="flex items-center gap-6 bg-white dark:bg-[#2a1d21] p-8 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32] ring-1 ring-black/5">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gold-shimmer/40 text-gold-accent">
                    <span class="material-symbols-outlined text-4xl">history</span>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-warm-brown dark:text-white">3 أيام</h3>
                    <p class="text-dusty-dark dark:text-gray-400 font-medium">فترة الاسترجاع المسموحة</p>
                </div>
            </div>
            <div
                class="flex items-center gap-6 bg-white dark:bg-[#2a1d21] p-8 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32] ring-1 ring-black/5">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gold-shimmer/40 text-gold-accent">
                    <span class="material-symbols-outlined text-4xl">published_with_changes</span>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-warm-brown dark:text-white">7 أيام</h3>
                    <p class="text-dusty-dark dark:text-gray-400 font-medium">فترة الاستبدال المسموحة</p>
                </div>
            </div>
        </div>
    </section>

    <main class="mx-auto max-w-5xl px-6 py-8">
        <div
            class="mb-10 overflow-hidden rounded-2xl bg-red-50/50 dark:bg-red-900/10 border-r-4 border-accent-highlight p-8 flex items-start gap-5">
            <div class="text-accent-highlight">
                <span class="material-symbols-outlined text-4xl">warning</span>
            </div>
            <div>
                <h4 class="text-lg font-bold text-accent-highlight mb-2">تنبيه هام للمنتجات الغذائية</h4>
                <p class="text-sm text-warm-brown dark:text-gray-200 leading-relaxed opacity-90">
                    لحماية الصحة العامة، نعتذر عن استرجاع أو استبدال جميع المواد الغذائية والمواد الخام المفتوحة أو غير
                    المفتوحة (مثل الدقيق، الشوكولاتة، الألوان، وغيرها) ما لم يكن هناك تلف واضح أو عيب مصنعي في المنتج عند
                    الاستلام.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <div class="lg:col-span-2">
                <div
                    class="rounded-2xl bg-white dark:bg-[#2a1d21] p-10 shadow-sm border border-stone-100 dark:border-[#3a2d32]">
                    <h2 class="text-2xl font-bold text-warm-brown dark:text-white mb-8 flex items-center gap-3">
                        <span class="material-symbols-outlined text-dusty-rose">verified_user</span>
                        شروط قبول الطلب
                    </h2>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-gold-accent mt-0.5">check_circle</span>
                            <span class="text-dusty-dark dark:text-gray-400 leading-relaxed">أن يكون المنتج في عبوته الأصلية
                                وبنفس الحالة التي تم
                                استلامه بها.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-gold-accent mt-0.5">check_circle</span>
                            <span class="text-dusty-dark dark:text-gray-400 leading-relaxed">وجود الفاتورة الأصلية أو إثبات
                                الشراء من المتجر
                                الإلكتروني.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-gold-accent mt-0.5">check_circle</span>
                            <span class="text-dusty-dark dark:text-gray-400 leading-relaxed">الأدوات والقوالب يجب أن تكون
                                غير مستخدمة تماماً
                                وخالية من أي خدوش.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-gold-accent mt-0.5">check_circle</span>
                            <span class="text-dusty-dark dark:text-gray-400 leading-relaxed">تتحمل الشركة تكاليف الشحن في
                                حال وجود عيب مصنعي
                                فقط.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="space-y-6">
                <h3 class="text-xl font-bold text-warm-brown dark:text-white pr-2">خطوات الاسترجاع</h3>
                <div
                    class="relative space-y-6 before:absolute before:right-6 before:top-4 before:h-full before:w-0.5 before:bg-stone-100 dark:before:bg-[#3a2d32]">
                    <div class="relative flex items-center gap-6 group">
                        <div
                            class="z-10 flex h-12 w-12 flex-none items-center justify-center rounded-full bg-dusty-rose text-white font-bold ring-4 ring-white dark:ring-[#1a0f12] shadow-sm">
                            1</div>
                        <div
                            class="bg-white dark:bg-[#2a1d21] p-5 rounded-xl border border-stone-100 dark:border-[#3a2d32] shadow-sm w-full">
                            <h4 class="font-bold text-sm text-warm-brown dark:text-white mb-1">تواصل معنا</h4>
                            <p class="text-xs text-dusty-dark dark:text-gray-400">عبر واتساب خدمة العملاء</p>
                        </div>
                    </div>
                    <div class="relative flex items-center gap-6 group">
                        <div
                            class="z-10 flex h-12 w-12 flex-none items-center justify-center rounded-full bg-dusty-rose text-white font-bold ring-4 ring-white dark:ring-[#1a0f12] shadow-sm">
                            2</div>
                        <div
                            class="bg-white dark:bg-[#2a1d21] p-5 rounded-xl border border-stone-100 dark:border-[#3a2d32] shadow-sm w-full">
                            <h4 class="font-bold text-sm text-warm-brown dark:text-white mb-1">إرسال الصور</h4>
                            <p class="text-xs text-dusty-dark dark:text-gray-400">أرفق صور المنتج وحالته والفاتورة</p>
                        </div>
                    </div>
                    <div class="relative flex items-center gap-6 group">
                        <div
                            class="z-10 flex h-12 w-12 flex-none items-center justify-center rounded-full bg-dusty-rose text-white font-bold ring-4 ring-white dark:ring-[#1a0f12] shadow-sm">
                            3</div>
                        <div
                            class="bg-white dark:bg-[#2a1d21] p-5 rounded-xl border border-stone-100 dark:border-[#3a2d32] shadow-sm w-full">
                            <h4 class="font-bold text-sm text-warm-brown dark:text-white mb-1">الاستلام والاسترداد</h4>
                            <p class="text-xs text-dusty-dark dark:text-gray-400">سيتم استلام المنتج وإعادة المبلغ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 text-center bg-warm-brown dark:bg-[#2f1f24] text-white p-12 rounded-3xl relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <span class="material-symbols-outlined absolute top-0 left-0 text-9xl">shopping_cart_checkout</span>
            </div>
            <h2 class="text-2xl font-bold mb-4 relative z-10">هل لديك استفسار آخر؟</h2>
            <p class="text-white/70 mb-8 max-w-md mx-auto relative z-10">فريق الدعم الفني متواجد لمساعدتك في أي وقت خلال
                ساعات العمل الرسمية.</p>
            <a class="inline-flex items-center gap-3 bg-whatsapp px-8 py-4 rounded-full font-bold text-lg hover:bg-whatsapp-dark transition-all transform hover:scale-105 shadow-xl relative z-10"
                href="#">
                <span class="material-symbols-outlined">chat</span>
                تواصل مع الدعم الفني
            </a>
        </div>
    </main>
@endsection