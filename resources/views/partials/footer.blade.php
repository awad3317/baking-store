<footer class="relative overflow-hidden bg-background-light pt-16 pb-8 dark:bg-[#1a0f12]">
    {{-- Decorative Background Icons --}}
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
            {{-- Brand Info --}}
            <div class="max-w-xs">
                <div class="mb-6 flex items-center gap-2 text-warm-brown dark:text-white">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                        <span class="material-symbols-outlined">bakery_dining</span>
                    </div>
                    <span class="text-xl font-bold">سويت سبلايز</span>
                </div>
                <p class="text-sm leading-relaxed text-dusty-dark dark:text-gray-400">مستلزمات حلويات فاخرة للمبدعين،
                    المحترفين، والحالمين. نجعل العالم مكاناً أشهى، قطعة تلو الأخرى.</p>
            </div>

            {{-- Important Links --}}
            <div class="flex flex-col items-start gap-4">
                <h4 class="mb-2 text-lg font-bold text-warm-brown dark:text-white">روابط هامة</h4>
                <ul class="flex flex-col gap-3 text-sm text-dusty-dark dark:text-gray-400 font-medium w-full">
                    <li><a class="flex items-center gap-2 hover:text-primary transition-colors" href="#"><span
                                class="material-symbols-outlined text-base">chevron_left</span> سياسة الاستبدال</a></li>
                    <li><a class="flex items-center gap-2 hover:text-primary transition-colors" href="#"><span
                                class="material-symbols-outlined text-base">chevron_left</span> الشروط والأحكام</a></li>
                    <li><a class="flex items-center gap-2 hover:text-primary transition-colors" href="#"><span
                                class="material-symbols-outlined text-base">chevron_left</span> تواصل معنا</a></li>
                </ul>
            </div>

            {{-- WhatsApp Community CTA --}}
            <div class="flex flex-col gap-6">
                <div
                    class="relative overflow-hidden rounded-xl border border-gold-accent/20 bg-white p-6 shadow-sm dark:bg-[#2f1f24] dark:border-[#3a2d32]">
                    <div class="relative z-10">
                        <span
                            class="mb-3 inline-block rounded-full bg-primary/10 px-3 py-1 text-[10px] font-bold text-primary">
                            دعوة خاصة VIP
                        </span>
                        <h4 class="mb-2 text-lg font-bold text-warm-brown dark:text-white">انضم لمجتمع مبدعي الحلويات
                        </h4>
                        <p class="mb-4 text-xs leading-relaxed text-dusty-dark dark:text-gray-400">احصل على كود خصم
                            فوري، وصفات حصرية أسبوعية، وتنبيهات بجديد المنتجات.</p>
                        <button
                            class="flex w-full items-center justify-center gap-2 rounded-full bg-whatsapp py-3 text-sm font-bold text-white shadow-lg shadow-whatsapp/20 transition-all hover:bg-whatsapp-dark hover:shadow-xl hover:-translate-y-0.5">
                            <span class="material-symbols-outlined text-lg">chat</span>
                            انضم للمجموعة الآن
                        </button>
                    </div>
                </div>

                {{-- Social Links --}}
                <div class="flex items-center gap-4 mr-2">
                    <a class="group text-dusty-rose transition-all duration-300 hover:text-primary hover:scale-110"
                        href="#">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                            </path>
                        </svg>
                    </a>
                    <a class="group text-dusty-rose transition-all duration-300 hover:text-primary hover:scale-110"
                        href="#">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036c-2.148 0-2.797 1.603-2.797 2.898v1.072h4.508l-.435 3.667h-4.073v7.98h-5.016z">
                            </path>
                        </svg>
                    </a>
                    <a class="group text-dusty-rose transition-all duration-300 hover:text-primary hover:scale-110"
                        href="#">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Copyright --}}
    <div
        class="mx-auto mt-6 max-w-7xl border-t border-[#e0d8db] px-6 pt-8 text-center text-xs text-dusty-dark md:text-right dark:border-[#3a2d32] dark:text-gray-500 relative z-10">
        © {{ date('Y') }} سويت سبلايز. جميع الحقوق محفوظة.
    </div>
</footer>