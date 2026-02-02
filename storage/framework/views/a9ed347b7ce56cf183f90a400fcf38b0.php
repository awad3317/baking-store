<div x-data="{ open: false }" @open-modal.window="if ($event.detail === '<?php echo e($modalId); ?>') open = true"
    @keydown.escape.window="open = false" class="relative z-99999" dir="rtl">

    
    <div x-show="open" x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 backdrop-blur-sm bg-gray-900/60" style="display: none;"></div>

    
    <div x-show="open" x-transition:enter="transition-all duration-300 ease-out"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 w-full h-full bg-gray-400/50 backdrop-blur-[32px]" style="display: none;">
        <div class="flex justify-center items-center p-4 min-h-screen">

            <div @click.away="open = false"
                class="relative w-full max-w-md text-right bg-white rounded-xl border shadow-2xl dark:bg-gray-900 border-gray-200/50 dark:border-gray-700/50">

                
                <div
                    class="relative px-5 py-4 bg-gradient-to-l to-white border-b border-gray-100 from-brand-50/50 dark:border-gray-800 dark:from-brand-500/5 dark:to-gray-900">
                    <div class="flex gap-3 items-center">
                        <div
                            class="flex justify-center items-center w-9 h-9 rounded-lg bg-brand-500/10 dark:bg-brand-500/15">
                            <svg class="w-4 h-4 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                <?php echo e($title ?? 'إضافة تقييم جديد'); ?>

                            </h3>
                        </div>
                    </div>

                    
                    <button @click="open = false" type="button"
                        class="absolute top-1/2 p-1.5 text-gray-400 rounded-lg transition-colors -translate-y-1/2 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-300"
                        style="left: 1rem; right: auto;">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="<?php echo e($action); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php if(isset($method) && $method !== 'POST'): ?>
                        <?php echo method_field($method); ?>
                    <?php endif; ?>

                    <div class="px-5 py-4 space-y-4">
                        
                        <div class="my-2 space-y-2">
                            <label class="block text-xs font-medium text-gray-700 dark:text-gray-300">
                                اسم العميل <span class="text-brand-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="name" required value="<?php echo e($testimonial->name ?? ''); ?>"
                                    class="py-2 pr-3 pl-9 w-full text-sm text-right text-gray-900 bg-gray-50 rounded-lg border border-gray-200 transition-all focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white placeholder:text-gray-400"
                                    placeholder="أدخل اسم العميل">
                            </div>
                        </div>

                        
                        <div class="my-2 space-y-1">
                            <label class="block text-xs font-medium text-gray-700 dark:text-gray-300">
                                الدور الوظيفي <span class="text-brand-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <input type="text" name="role" required value="<?php echo e($testimonial->role ?? ''); ?>"
                                    class="py-2 pr-3 pl-9 w-full text-sm text-right text-gray-900 bg-gray-50 rounded-lg border border-gray-200 transition-all focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white placeholder:text-gray-400"
                                    placeholder="مثال: صانعة كيك">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            
                            <div class="my-2 space-y-1">
                                <label class="block text-xs font-medium text-gray-700 dark:text-gray-300">عدد
                                    النجوم</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <input type="number" name="stars" step="0.5" min="1" max="5"
                                        value="<?php echo e($testimonial->stars ?? 5); ?>"
                                        class="py-2 pr-3 pl-9 w-full text-sm text-right text-gray-900 bg-gray-50 rounded-lg border border-gray-200 transition-all focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white">
                                </div>
                            </div>

                            
                            <div class="my-2 space-y-1">
                                <label class="block text-xs font-medium text-gray-700 dark:text-gray-300">سمة
                                    اللون</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                        </svg>
                                    </div>
                                    <select name="color"
                                        class="py-2 pr-3 pl-9 w-full text-sm text-right bg-gray-50 rounded-lg border border-gray-200 transition-all appearance-none cursor-pointer focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white">
                                        <option value="primary"
                                            <?php echo e(($testimonial->color ?? 'primary') == 'primary' ? 'selected' : ''); ?>>
                                            الأساسي</option>
                                        <option value="green-500"
                                            <?php echo e(($testimonial->color ?? '') == 'green-500' ? 'selected' : ''); ?>>أخضر
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        
                        <div class="my-2 space-y-1">
                            <label class="block text-xs font-medium text-gray-700 dark:text-gray-300">
                                رسالة التقييم <span class="text-brand-500">*</span>
                            </label>
                            <textarea name="text" rows="3" required
                                class="px-3 py-2 w-full text-sm text-right text-gray-900 bg-gray-50 rounded-lg border border-gray-200 transition-all resize-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white placeholder:text-gray-400"
                                placeholder="ماذا قال العميل عن تجربته؟"><?php echo e($testimonial->text ?? ''); ?></textarea>
                        </div>

                        
                        <div x-data="{ active: <?php echo e($testimonial->active ?? true ? 'true' : 'false'); ?> }"
                            class="flex justify-between items-center p-3 bg-gray-50 rounded-lg border border-gray-100 dark:bg-gray-800/50 dark:border-gray-700/50">
                            <div class="flex gap-2 items-center">
                                <div
                                    class="flex justify-center items-center w-7 h-7 rounded-md bg-brand-500/10 dark:bg-brand-500/15">
                                    <svg class="w-3.5 h-3.5 text-brand-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <span class="text-xs font-medium text-gray-900 dark:text-white">تفعيل النشر</span>
                            </div>
                            <button type="button" @click="active = !active"
                                :class="active ? 'bg-brand-500' : 'bg-gray-300 dark:bg-gray-600'"
                                class="relative w-11 h-6 rounded-full transition-colors duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-brand-500/30">
                                <span :style="active ? 'left: 2px; right: auto;' : 'right: 2px; left: auto;'"
                                    class="absolute top-0.5 w-5 h-5 bg-white rounded-full shadow-md transition-all duration-300 ease-in-out"></span>
                            </button>
                            <input type="hidden" name="active" :value="active ? '1' : '0'">
                        </div>
                    </div>

                    
                    <div
                        class="flex gap-2 justify-end px-5 py-3 border-t border-gray-100 bg-gray-50/50 dark:border-gray-800 dark:bg-gray-900/50">
                        <button @click="open = false" type="button"
                            class="px-4 py-2 text-xs font-medium text-gray-600 rounded-lg transition-colors hover:text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:bg-gray-800">
                            إلغاء
                        </button>
                        <button type="submit"
                            class="inline-flex gap-1.5 items-center px-4 py-2 text-xs font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-600 focus:ring-2 focus:ring-brand-500/50 transition-all shadow-sm hover:shadow-md active:scale-[0.98]">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            حفظ التقييم
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\projects_2026\baking-store\resources\views/dashboard/components/testimonial-modal.blade.php ENDPATH**/ ?>