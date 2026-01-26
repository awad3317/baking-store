<header
    class="sticky top-0 z-40 w-full border-b border-[#f0ebed] bg-white/95 px-6 py-4 backdrop-blur-md dark:bg-[#1a0f12]/95 dark:border-[#3a2d32]">
    <div class="mx-auto flex max-w-7xl items-center justify-between">
        {{-- Logo --}}
        <div class="flex items-center gap-3 text-warm-brown dark:text-white">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                <span class="material-symbols-outlined">bakery_dining</span>
            </div>
            <h1 class="text-xl font-bold tracking-tight">سويت سبلايز</h1>
        </div>

        {{-- Navigation --}}
        <nav class="hidden items-center gap-8 md:flex">
            <a class="text-sm font-medium {{ request()->routeIs('home') ? 'text-dusty-rose font-bold' : 'text-warm-brown hover:text-dusty-rose transition-colors' }} dark:text-gray-200"
                href="{{ route('home') }}">الرئيسية</a>
            <a class="text-sm font-medium {{ request()->routeIs('shop') ? 'text-dusty-rose font-bold' : 'text-warm-brown' }} hover:text-primary dark:text-gray-200"
                href="{{ route('shop') }}">المتجر</a>
            <a class="text-sm font-medium text-warm-brown hover:text-primary dark:text-gray-200" href="#">من نحن</a>
            <a class="text-sm font-medium text-warm-brown hover:text-primary dark:text-gray-200" href="#">تواصل معنا</a>
        </nav>

        {{-- Actions --}}
        <div class="flex items-center gap-4">
            {{-- Search (Desktop) --}}
            <div class="hidden md:flex">
                <label
                    class="relative flex h-10 w-64 items-center overflow-hidden rounded-lg bg-background-light dark:bg-[#2f1f24]">
                    <span class="material-symbols-outlined absolute right-3 text-[20px] text-dusty-dark">search</span>
                    <input
                        class="h-full w-full border-none bg-transparent pr-10 pl-4 text-sm text-warm-brown placeholder-dusty-dark focus:ring-0 dark:text-white"
                        placeholder="بحث عن منتج..." type="text" />
                </label>
            </div>

            {{-- Search (Mobile) --}}
            <button
                class="flex h-10 w-10 items-center justify-center rounded-lg bg-background-light text-warm-brown md:hidden dark:bg-[#2f1f24] dark:text-white">
                <span class="material-symbols-outlined">search</span>
            </button>

            {{-- User Profile --}}
            <button
                class="flex h-10 w-10 items-center justify-center rounded-lg bg-background-light text-warm-brown transition-colors hover:bg-primary/10 hover:text-primary dark:bg-[#2f1f24] dark:text-white">
                <span class="material-symbols-outlined">person</span>
            </button>
        </div>
    </div>
</header>