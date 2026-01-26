{{-- Floating Cart Button & Drawer with Alpine.js --}}
<div class="fixed bottom-8 left-8 z-50" x-data="{ open: false }">
    {{-- Cart Button --}}
    <button @click="open = !open"
        class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-white shadow-xl transition-transform hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-primary/30">
        <span class="material-symbols-outlined text-3xl">shopping_cart</span>
        <span
            class="absolute -top-1 -left-1 flex h-6 w-6 items-center justify-center rounded-full bg-white text-xs font-bold text-primary ring-2 ring-background-light">3</span>
    </button>

    {{-- Cart Drawer --}}
    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2" @click.outside="open = false"
        class="absolute bottom-full left-0 mb-4 w-64 rounded-xl bg-white p-4 shadow-xl dark:bg-[#2a1d21]">
        <p class="mb-2 text-sm font-bold text-warm-brown dark:text-white">سلة المشتريات (3 منتجات)</p>
        <p class="mb-3 text-xs text-dusty-dark dark:text-gray-400">الإجمالي: 55.50 ر.س</p>
        <button
            class="flex w-full items-center justify-center gap-2 rounded-lg bg-[#25D366] py-2 text-xs font-bold text-white transition-colors hover:bg-[#128C7E]">
            <span class="material-symbols-outlined text-sm">chat</span>
            إتمام الطلب عبر واتساب
        </button>
    </div>
</div>