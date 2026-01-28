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

        .document-watermark {
            font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 0, 'opsz' 48;
        }
    </style>
@endpush

@section('content')
    <section
        class="relative h-[250px] w-full overflow-hidden bg-white dark:bg-[#1a0f12] flex flex-col items-center justify-center text-center">
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none flex items-center justify-center overflow-hidden">
            <span
                class="material-symbols-outlined document-watermark text-[300px] rotate-12 dark:text-gray-600">description</span>
        </div>
        <div class="relative z-10 px-6">
            <div
                class="mb-4 inline-block bg-primary/10 text-primary dark:bg-primary/20 dark:text-primary-300 px-4 py-1.5 rounded-full text-xs font-bold">
                آخر تحديث: يناير 2026
            </div>
            <h1 class="text-3xl md:text-5xl font-black text-warm-brown dark:text-white mb-3">الشروط والأحكام</h1>
            <p class="text-warm-brown/60 dark:text-gray-400 max-w-lg mx-auto font-medium">اتفاقية الاستخدام لضمان حقوق
                الجميع</p>
        </div>
    </section>

    <main class="mx-auto max-w-4xl px-6 py-12">
        <div class="space-y-8">
            <div
                class="bg-white dark:bg-[#2a1d21] p-8 md:p-10 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">info</span>
                    <h2 class="text-xl font-bold text-warm-brown dark:text-white">مقدمة</h2>
                </div>
                <p class="text-warm-brown/80 dark:text-gray-300 leading-[1.8] text-base">
                    مرحباً بكم في متجر سويت سبلايز. باستخدامكم لهذا الموقع، فإنكم توافقون على الالتزام بالشروط والأحكام
                    التالية. يرجى قراءتها بعناية قبل البدء في التسوق. تحكم هذه الاتفاقية علاقتنا معكم فيما يتعلق باستخدام
                    الموقع وشراء منتجات مستلزمات الحلويات والمواد الخام.
                </p>
            </div>

            <div
                class="bg-white dark:bg-[#2a1d21] p-8 md:p-10 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">account_circle</span>
                    <h2 class="text-xl font-bold text-warm-brown dark:text-white">التسجيل والحساب</h2>
                </div>
                <div class="space-y-4 text-warm-brown/80 dark:text-gray-300 leading-[1.8]">
                    <p>عند إنشاء حساب في سويت سبلايز، فإنك مسؤول عن الحفاظ على سرية معلومات حسابك وكلمة المرور.</p>
                    <ul class="list-disc list-inside space-y-2 pr-4">
                        <li>يجب أن تكون جميع المعلومات المقدمة عند التسجيل صحيحة ومحدثة.</li>
                        <li>يمنع استخدام الحساب لأي أغراض غير قانونية أو غير مصرح بها.</li>
                        <li>يحق للمتجر تعليق أو إغلاق أي حساب في حال الاشتباه في مخالفة هذه الشروط.</li>
                    </ul>
                </div>
            </div>

            <div
                class="bg-white dark:bg-[#2a1d21] p-8 md:p-10 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">payments</span>
                    <h2 class="text-xl font-bold text-warm-brown dark:text-white">الطلبات والأسعار</h2>
                </div>
                <div class="space-y-4 text-warm-brown/80 dark:text-gray-300 leading-[1.8]">
                    <p>نحن نسعى جاهدين لتقديم أدق المعلومات حول الأسعار والمنتجات. ومع ذلك، قد تحدث أخطاء تقنية أحياناً.</p>
                    <div class="bg-background-light dark:bg-[#1a0f12] p-4 rounded-xl border-r-4 border-primary/20">
                        <p class="font-bold mb-1 dark:text-white">العملة المعتمدة:</p>
                        <p>يتم عرض كافة الأسعار في المتجر بالريال اليمني (YER).</p>
                    </div>
                    <p>يحتفظ المتجر بالحق في مراجعة وتعديل الأسعار في أي وقت دون إشعار مسبق، بما يتناسب مع تقلبات السوق
                        وتكاليف المواد الخام.</p>
                </div>
            </div>

            <div
                class="bg-white dark:bg-[#2a1d21] p-8 md:p-10 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">copyright</span>
                    <h2 class="text-xl font-bold text-warm-brown dark:text-white">الملكية الفكرية</h2>
                </div>
                <p class="text-warm-brown/80 dark:text-gray-300 leading-[1.8]">
                    جميع المحتويات الموجودة على هذا الموقع، بما في ذلك النصوص، الشعارات، الصور، الرسوم التوضيحية،
                    والبرمجيات،
                    هي ملك حصري لـ "سويت سبلايز" ومحمية بموجب قوانين الملكية الفكرية. يمنع منعاً باتاً نسخ أو توزيع أو
                    استخدام أي جزء من محتوى الموقع لأغراض تجارية دون الحصول على إذن خطي مسبق منا.
                </p>
            </div>

            <div
                class="bg-white dark:bg-[#2a1d21] p-8 md:p-10 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">error</span>
                    <h2 class="text-xl font-bold text-warm-brown dark:text-white">إخلاء المسؤولية</h2>
                </div>
                <p class="text-warm-brown/80 dark:text-gray-300 leading-[1.8]">
                    يتم توفير الموقع ومنتجاته "كما هي" دون أي ضمانات صريحة أو ضمنية. نحن لا نتحمل المسؤولية عن أي أضرار
                    ناتجة عن استخدام المنتجات بشكل خاطئ أو تخزين المواد الغذائية في ظروف غير مناسبة بعد الاستلام. كما لا
                    نتحمل مسؤولية أي تأخير ناتج عن شركات الشحن الخارجية أو ظروف القوة القاهرة.
                </p>
            </div>

            <div
                class="bg-white dark:bg-[#2a1d21] p-8 md:p-10 rounded-2xl shadow-sm border border-stone-100 dark:border-[#3a2d32]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-2xl">gavel</span>
                    <h2 class="text-xl font-bold text-warm-brown dark:text-white">القانون الواجب التطبيق</h2>
                </div>
                <p class="text-warm-brown/80 dark:text-gray-300 leading-[1.8]">
                    تخضع هذه الشروط والأحكام وتفسر وفقاً للقوانين والأنظمة المعمول بها في الجمهورية اليمنية. يتم الفصل في أي
                    نزاع قد ينشأ عن استخدام هذا الموقع أو المشتريات منه حصرياً أمام المحاكم المختصة.
                </p>
            </div>
        </div>

        <div class="mt-20 text-center bg-warm-brown dark:bg-[#2f1f24] text-white p-12 rounded-3xl relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <span class="material-symbols-outlined absolute top-0 left-0 text-9xl">help_outline</span>
            </div>
            <h2 class="text-2xl font-bold mb-4 relative z-10">هل لديك استفسار حول الشروط؟</h2>
            <p class="text-white/70 mb-8 max-w-md mx-auto relative z-10">نحن هنا لمساعدتك في فهم كافة التفاصيل لضمان تجربة
                تسوق آمنة وموثوقة.</p>
            <a class="inline-flex items-center gap-3 bg-whatsapp px-8 py-4 rounded-full font-bold text-lg hover:bg-whatsapp-dark transition-all transform hover:scale-105 shadow-xl relative z-10"
                href="#">
                <span class="material-symbols-outlined">chat</span>
                تواصل مع الفريق القانوني
            </a>
        </div>
    </main>
@endsection