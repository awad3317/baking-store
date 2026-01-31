<header x-data="{ mobileMenuOpen: false }" @click.outside="mobileMenuOpen = false"
    class="sticky top-0 z-40 w-full border-b border-[#f0ebed] bg-white/95 px-6 py-4 backdrop-blur-md dark:bg-[#1a0f12]/95 dark:border-[#3a2d32]">
    <div class="flex justify-between items-center mx-auto max-w-7xl">
        {{-- Logo --}}
        <div class="flex gap-3 items-center text-warm-brown dark:text-white">
            <div class="flex justify-center items-center w-10 h-10 rounded-xl bg-primary/10 text-primary">
                <span class="material-symbols-outlined">bakery_dining</span>
            </div>
            <h1 class="text-xl font-bold tracking-tight">سويت سبلايز</h1>
        </div>

        {{-- Navigation --}}
        <nav class="hidden gap-8 items-center md:flex">
            <a class="text-sm font-medium {{ request()->routeIs('home') ? 'text-dusty-rose font-bold' : 'text-warm-brown hover:text-dusty-rose transition-colors' }} dark:text-gray-200"
                href="{{ route('home') }}">الرئيسية</a>
            <a class="text-sm font-medium {{ request()->routeIs('shop') ? 'text-dusty-rose font-bold' : 'text-warm-brown' }} hover:text-primary dark:text-gray-200"
                href="{{ route('shop') }}">المتجر</a>
            <a class="text-sm font-medium {{ request()->routeIs('recipes') ? 'text-dusty-rose font-bold' : 'text-warm-brown' }} hover:text-primary dark:text-gray-200"
                href="{{ route('recipes.index') }}">الوصفات</a>

            <a class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-dusty-rose font-bold' : 'text-warm-brown hover:text-primary' }} dark:text-gray-200"
                href="{{ route('contact') }}">تواصل معنا</a>
        </nav>

        {{-- Actions --}}
        <div class="flex gap-4 items-center">


            {{-- Mobile Menu Button --}}
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="flex h-10 w-10 items-center justify-center rounded-lg bg-background-light text-warm-brown transition-colors hover:bg-primary/10 hover:text-primary md:hidden dark:bg-[#2f1f24] dark:text-white">
                <span x-show="!mobileMenuOpen" class="material-symbols-outlined">menu</span>
                <span x-show="mobileMenuOpen" x-cloak class="material-symbols-outlined">close</span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Drawer --}}
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 top-full z-50 flex w-full flex-col gap-4 border-b border-gray-100 bg-white/95 px-6 py-4 shadow-lg backdrop-blur-md md:hidden dark:bg-[#1a0f12]/95 dark:border-[#3a2d32]"
        style="display: none;">
        <a class="text-sm font-medium {{ request()->routeIs('home') ? 'text-dusty-rose font-bold' : 'text-warm-brown' }} hover:text-primary dark:text-gray-200"
            href="{{ route('home') }}">الرئيسية</a>
        <a class="text-sm font-medium {{ request()->routeIs('shop') ? 'text-dusty-rose font-bold' : 'text-warm-brown' }} hover:text-primary dark:text-gray-200"
            href="{{ route('shop') }}">المتجر</a>
        <a class="text-sm font-medium {{ request()->routeIs('recipes') ? 'text-dusty-rose font-bold' : 'text-warm-brown' }} hover:text-primary dark:text-gray-200"
            href="{{ route('recipes.index') }}">الوصفات</a>
        <a class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-dusty-rose font-bold' : 'text-warm-brown hover:text-primary' }} dark:text-gray-200"
            href="{{ route('contact') }}">تواصل معنا</a>
    </div>
</header>