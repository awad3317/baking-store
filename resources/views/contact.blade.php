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

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }

        details[open] summary .expand-icon {
            transform: rotate(180deg);
        }
    </style>

    <section
        class="relative h-64 w-full overflow-hidden bg-[#fdf2f4] flex flex-col items-center justify-center text-center">
        <div class="absolute inset-0 opacity-[0.05] pointer-events-none">
            <span class="material-symbols-outlined absolute top-4 left-10 text-6xl rotate-12 text-dusty-dark">blender</span>
            <span
                class="material-symbols-outlined absolute top-10 right-20 text-5xl -rotate-12 text-dusty-dark">kitchen</span>
            <span
                class="material-symbols-outlined absolute bottom-4 left-1/4 text-6xl rotate-45 text-dusty-dark">cookie</span>
            <span class="material-symbols-outlined absolute top-1/2 right-1/3 text-4xl -rotate-6 text-dusty-dark">egg</span>
            <span class="material-symbols-outlined absolute bottom-8 right-10 text-7xl rotate-6 text-dusty-dark">cake</span>
        </div>
        <div class="relative z-10 px-6">
            <nav class="mb-4 flex items-center justify-center gap-2 text-xs text-dusty-dark/60">
                <a class="hover:text-dusty-rose transition-colors" href="{{ route('home') }}">الرئيسية</a>
                <span class="material-symbols-outlined text-[10px] rotate-180">chevron_right</span>
                <span class="font-bold text-dusty-rose">تواصل معنا</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-black text-warm-brown">نحن هنا لمساعدتك</h1>
        </div>
    </section>

    <main class="mx-auto max-w-7xl px-6 py-16 w-full">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
            <div class="lg:col-span-4 space-y-6">
                <div class="group rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-100 transition-all hover:shadow-md">
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-gold-shimmer/30 text-gold-accent transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-3xl">local_mall</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-warm-brown">المبيعات والاستفسارات</h3>
                    <p class="text-sm text-dusty-dark leading-relaxed">لديك استفسار عن منتج معين أو ترغب في تقديم طلب خاص؟
                        فريق المبيعات جاهز لخدمتك.</p>
                    <a class="mt-4 inline-block font-bold text-dusty-rose hover:text-primary-dark transition-colors"
                        href="mailto:sales@sweetsupplies.com">sales@sweetsupplies.com</a>
                </div>
                <div class="group rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-100 transition-all hover:shadow-md">
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-gold-shimmer/30 text-gold-accent transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-3xl">support_agent</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-warm-brown">الدعم الفني</h3>
                    <p class="text-sm text-dusty-dark leading-relaxed">نحن هنا لمساعدتك في أي مشكلة تواجهك أثناء التسوق أو
                        بعد استلام الطلب.</p>
                    <p class="mt-4 font-bold text-dusty-rose">+967 77 000 0000</p>
                </div>
                <div class="group rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-100 transition-all hover:shadow-md">
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-gold-shimmer/30 text-gold-accent transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-3xl">location_on</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-warm-brown">تفضل بزيارتنا</h3>
                    <p class="text-sm text-dusty-dark leading-relaxed">عدن، خورمكسر، الشارع الرئيسي. نسعد باستقبالكم
                        يومياً من 9ص حتى 9م.</p>
                </div>
            </div>
            <div class="lg:col-span-8">
                <div class="rounded-2xl bg-white p-8 md:p-10 shadow-sm ring-1 ring-gray-100">
                    <h2 class="mb-8 text-2xl font-bold text-warm-brown">أرسل لنا رسالة</h2>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-dusty-dark">الاسم الكامل</label>
                                <input
                                    class="w-full rounded-xl border-gray-100 bg-stone-50 px-4 py-3 text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                                    placeholder="مثال: سارة محمد" type="text" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-dusty-dark">البريد الإلكتروني</label>
                                <input
                                    class="w-full rounded-xl border-gray-100 bg-stone-50 px-4 py-3 text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                                    placeholder="email@example.com" type="email" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-bold text-dusty-dark">رقم الجوال</label>
                                <input
                                    class="w-full rounded-xl border-gray-100 bg-stone-50 px-4 py-3 text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                                    placeholder="+967" type="tel" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-bold text-dusty-dark">الموضوع</label>
                                <select
                                    class="w-full rounded-xl border-gray-100 bg-stone-50 px-4 py-3 text-sm focus:border-dusty-rose focus:ring-dusty-rose">
                                    <option>استفسار عام</option>
                                    <option>مشكلة في الطلب</option>
                                    <option>بيع الجملة</option>
                                    <option>اقتراحات</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-bold text-dusty-dark">الرسالة</label>
                            <textarea
                                class="w-full rounded-xl border-gray-100 bg-stone-50 px-4 py-3 text-sm focus:border-dusty-rose focus:ring-dusty-rose"
                                placeholder="اكتب استفسارك هنا..." rows="5"></textarea>
                        </div>
                        <button
                            class="w-full rounded-xl bg-dusty-rose py-4 text-sm font-bold text-white shadow-lg transition-all hover:bg-primary-dark hover:shadow-xl hover:-translate-y-0.5"
                            type="submit">
                            إرسال الرسالة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <section class="bg-white py-20">
        <div class="mx-auto max-w-4xl px-6">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-warm-brown">الأسئلة الشائعة</h2>
                <div class="mx-auto mt-4 h-1 w-20 bg-gold-accent rounded-full"></div>
            </div>
            <div class="space-y-4">
                <details class="group overflow-hidden rounded-xl border border-gray-100 bg-stone-50 transition-all">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 text-lg font-bold text-warm-brown outline-none">
                        <span>كم يستغرق الشحن؟</span>
                        <span
                            class="material-symbols-outlined expand-icon transition-transform duration-300">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-sm leading-relaxed text-dusty-dark">
                        نحن نوفر شحناً سريعاً لجميع محافظات اليمن. يستغرق التوصيل داخل عدن 24 ساعة، وباقي المحافظات (صنعاء،
                        تعز، حضرموت) من 3-5 أيام عمل عبر شركات النقل المحلية.
                    </div>
                </details>
                <details class="group overflow-hidden rounded-xl border border-gray-100 bg-stone-50 transition-all">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 text-lg font-bold text-warm-brown outline-none">
                        <span>هل توفرون بيع الجملة؟</span>
                        <span
                            class="material-symbols-outlined expand-icon transition-transform duration-300">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-sm leading-relaxed text-dusty-dark">
                        نعم، نوفر أسعاراً خاصة لأصحاب المشاريع والمخابز والكميات الكبيرة. يمكنك التواصل معنا عبر قسم الجملة
                        في نموذج التواصل أعلاه.
                    </div>
                </details>
                <details class="group overflow-hidden rounded-xl border border-gray-100 bg-stone-50 transition-all">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 text-lg font-bold text-warm-brown outline-none">
                        <span>ما هي طرق الدفع المتاحة؟</span>
                        <span
                            class="material-symbols-outlined expand-icon transition-transform duration-300">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-sm leading-relaxed text-dusty-dark">
                        نقبل التحويل البنكي (الكريمي، بنك التضامن)، المحافظ الإلكترونية (جوالي، كاش)، والدفع عند الاستلام في
                        عدن وصنعاء.
                    </div>
                </details>
                <details class="group overflow-hidden rounded-xl border border-gray-100 bg-stone-50 transition-all">
                    <summary
                        class="flex cursor-pointer items-center justify-between p-6 text-lg font-bold text-warm-brown outline-none">
                        <span>هل المنتجات مضمونة؟</span>
                        <span
                            class="material-symbols-outlined expand-icon transition-transform duration-300">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-sm leading-relaxed text-dusty-dark">
                        جميع أدواتنا وموادنا الخام مستوردة من أفضل المصادر العالمية ومعتمدة من هيئة الغذاء والدواء، ونحن
                        نضمن جودتها بنسبة 100%.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <section class="h-96 w-full bg-stone-100 relative">
        <div class="absolute inset-0 grayscale opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0xL2Ax5ElvcYuudp21W3KMJW6eHvBlURiDpk3R1FqBPE3jb1o9ODWEy9rWnyRmfbYbcKBTfiGfv2C_7u6_vJx8XMdHqvjIj47HfmJeO9FLXEU5AvSdt9cNvNYL64_PEBLaCmmBn5xlDIWOscGfDyvItcsYwhZqXnOMAzFc8Jw8giDdmdLhCrul7QF2ufMzNmgiyWgvOKg-zofmool21la0QmxDvDB3nVV2bOjPv9QGfNn-utppcDqMsi3_T3Y0RJCrKBElfIVf3Bg'); background-size: cover; background-position: center;">
        </div>
        <div class="relative z-10 flex h-full items-center justify-center">
            <div class="rounded-xl bg-white/80 p-6 shadow-xl backdrop-blur-sm text-center">
                <span class="material-symbols-outlined text-dusty-rose text-4xl mb-2">location_on</span>
                <p class="font-bold text-warm-brown">تفضل بزيارة معرضنا الرئيسي في عدن</p>
                <button class="mt-3 text-sm font-bold text-dusty-rose underline">افتح في خرائط جوجل</button>
            </div>
        </div>
    </section>
@endsection