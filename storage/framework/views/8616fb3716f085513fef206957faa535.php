<aside :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : 'translate-x-full'"
    class="sidebar fixed right-0 top-0 z-40 flex h-screen w-[290px] flex-col overflow-y-hidden border-l border-gray-200 bg-white px-5 dark:border-gray-800 dark:bg-black duration-300 ease-in-out transition-transform lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">


    <!-- SIDEBAR HEADER -->
    <div :class="sidebarToggle ? 'justify-center' : 'justify-between'"
        class="flex items-center gap-2 pt-8 sidebar-header pb-3">
        <a href="#">
            <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
                <img class="dark:hidden w-12 h-12" src="<?php echo e(asset('tailadmin/build/src/images/user/Busat.png')); ?>"
                    alt="Logo" />
                
                <img class="hidden dark:block w-12 h-12" src="<?php echo e(asset('tailadmin/build/src/images/user/Busat.png')); ?>"
                    alt="Logo" />
            </span>

            <img class="logo-icon w-12 h-12" :class="sidebarToggle ? 'lg:block' : 'hidden'"
                src="<?php echo e(asset('tailadmin/build/src/images/user/Busat.png')); ?>" alt="Logo" />
        </a>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <!-- Sidebar Menu -->
        <nav x-data="{ selected: $persist('Dashboard') }">
            <!-- Menu Group -->
            <div>
                
                <ul class="flex flex-col gap-4 mb-6">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a href="<?php echo e(route('dashboard')); ?>"
                            class="menu-item group <?php echo e(request()->routeIs('dashboard') ? 'menu-item-active' : 'menu-item-inactive'); ?>">
                            <svg class="<?php echo e(request()->routeIs('dashboard') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'); ?>"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V8.99998C9.75 9.41419 9.41421 9.74998 9 9.74998H5.5C5.08579 9.74998 4.75 9.41419 4.75 8.99998V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7427 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V8.99998C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 8.99998V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V8.99998C14.25 9.41419 14.5858 9.74998 15 9.74998H18.5C18.9142 9.74998 19.25 9.41419 19.25 8.99998V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7427 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z"
                                    fill="" />
                            </svg>

                            <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                الصفحة الرئيسية
                            </span>
                        </a>

                        <!-- Dropdown Menu Start -->
                        
                        <!-- Dropdown Menu End -->

                    </li>

                    <!-- Menu Item users -->
                    <li>
                        <a href="<?php echo e(route('dashboard.products.index')); ?>"
                            @click="selected = (selected === 'products' ? '':'products')" class="menu-item group"
                            :class="window.location.href.includes('<?php echo e(route('dashboard.products.index')); ?>') ? 'menu-item-active' :
                                'menu-item-inactive'">
                            <svg :class="window.location.href.includes('<?php echo e(route('dashboard.products.index')); ?>') ? 'menu-item-icon-active' :
                                'menu-item-icon-inactive'" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
                                    stroke="currentColor" />
                            </svg>
                            <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                ادارة المنتجات
                            </span>
                        </a>
                    </li>

                    <!-- Menu Item recipes -->
                    <li>
                        <a href="<?php echo e(route('dashboard.recipes.index')); ?>"
                            @click="selected = (selected === 'recipes' ? '':'recipes')" class="menu-item group" :class="window.location.href.includes('<?php echo e(route('dashboard.recipes.index')); ?>') ? 'menu-item-active' :
                                'menu-item-inactive'">
                            <svg :class="window.location.href.includes('<?php echo e(route('dashboard.recipes.index')); ?>') ? 'menu-item-icon-active' :
                                'menu-item-icon-inactive'" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                    stroke="currentColor" />
                            </svg>
                            <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                ادارة الوصفات
                            </span>
                        </a>
                    </li>

                    <!-- Menu Item testimonials -->
                    <li>
                        <a href="<?php echo e(route('dashboard.testimonials.index')); ?>"
                            @click="selected = (selected === 'testimonials' ? '':'testimonials')"
                            class="menu-item group" :class="window.location.href.includes('<?php echo e(route('dashboard.testimonials.index')); ?>') ? 'menu-item-active' :
                            'menu-item-inactive'">
                            <svg :class="window.location.href.includes('<?php echo e(route('dashboard.testimonials.index')); ?>') ? 'menu-item-icon-active' :
                                'menu-item-icon-inactive'" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
                                    stroke="currentColor" />
                            </svg>
                            <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                الآراء والتقييمات
                            </span>
                        </a>
                    </li>

                    <!-- Menu Item drivers -->
                    <li>
                        
                    </li>

                    <!-- Menu Item Requests -->
                    <li>
                        
                        <!-- Dropdown Menu Start -->
                        
                        <!-- Dropdown Menu End -->
                    </li>

                    <!-- Menu Item Coupon -->
                    <li>
                        
                    </li>

                    <!-- Menu Item Vehicle -->
                    <li>
                        
                    </li>

                    <!-- Menu Item setting -->

                    <li>
                        
                    </li>


                    <!-- Menu Item Pages -->
                </ul>
            </div>

            <!-- Others Group -->
            
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside><?php /**PATH E:\projects_2026\baking-store\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>