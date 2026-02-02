<?php $__env->startSection('title', 'الآراء والتقييمات'); ?>
<?php $__env->startSection('Breadcrumb', 'الآراء والتقييمات'); ?>

<?php $__env->startSection('addButton'); ?>
    <button @click="$dispatch('open-modal', 'createTestimonialModal')"
        class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-xl shadow-sm hover:bg-brand-600 hover:shadow-md focus:ring-2 focus:ring-brand-500/50 transition-all active:scale-[0.98]">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
        <span>إضافة تقييم</span>
    </button>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div
        class="overflow-hidden bg-white rounded-2xl border shadow-sm border-gray-200/60 dark:bg-gray-900 dark:border-gray-800">
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-sm border-collapse" dir="rtl">
                <thead
                    class="text-gray-500 bg-gray-50 border-b border-gray-100 dark:bg-gray-800/50 dark:text-gray-400 dark:border-gray-800">
                    <tr>
                        <th class="px-5 py-4 text-xs font-medium text-right">العميل</th>
                        <th class="px-5 py-4 text-xs font-medium text-right">الدور الوظيفي</th>
                        <th class="px-5 py-4 text-xs font-medium text-center">التقييم</th>
                        <th class="px-5 py-4 text-xs font-medium text-center">الحالة</th>
                        <th class="px-5 py-4 text-xs font-medium text-center">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="transition-colors hover:bg-gray-50/50 dark:hover:bg-gray-800/30">
                            
                            <td class="px-5 py-4 text-right">
                                <div class="flex gap-3 items-center">
                                    <div
                                        class="flex flex-shrink-0 justify-center items-center w-10 h-10 text-sm font-semibold rounded-full ring-2 ring-white shadow-sm dark:ring-gray-800 bg-brand-500/10 text-brand-500">
                                        <?php echo e($testimonial->initial); ?>

                                    </div>
                                    <div class="flex flex-col">
                                        <span
                                            class="font-medium text-gray-900 dark:text-white"><?php echo e($testimonial->name); ?></span>
                                        <span
                                            class="text-xs text-gray-400 dark:text-gray-500">#<?php echo e($testimonial->id); ?></span>
                                    </div>
                                </div>
                            </td>

                            
                            <td class="px-5 py-4 text-right text-gray-600 dark:text-gray-400">
                                <?php echo e($testimonial->role); ?>

                            </td>

                            
                            <td class="px-5 py-4 text-center">
                                <div
                                    class="inline-flex gap-1.5 items-center px-2.5 py-1 rounded-lg bg-  -50 text-warning-600 dark:bg-warning-400/10 dark:text-warning-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold"><?php echo e($testimonial->stars); ?></span>
                                </div>
                            </td>

                            
                            <td class="px-5 py-4 text-center">
                                <?php if($testimonial->active): ?>
                                    <span
                                        class="inline-flex gap-1.5 items-center px-2.5 py-1 text-xs font-medium rounded-lg text-success-600 bg-success-50 dark:bg-success-400/10 dark:text-success-400">
                                        <span class="w-1.5 h-1.5 rounded-full bg-success-500"></span>
                                        نشط
                                    </span>
                                <?php else: ?>
                                    <span
                                        class="inline-flex gap-1.5 items-center px-2.5 py-1 text-xs font-medium rounded-lg text-error-600 bg-error-50 dark:bg-error-400/10 dark:text-error-400">
                                        <span class="w-1.5 h-1.5 rounded-full bg-error-500"></span>
                                        مخفي
                                    </span>
                                <?php endif; ?>
                            </td>

                            
                            <td class="px-5 py-4 text-center">
                                <div class="flex gap-1 justify-center">
                                    
                                    <button @click="$dispatch('open-modal', 'editTestimonialModal<?php echo e($testimonial->id); ?>')"
                                        class="p-2 text-gray-500 rounded-lg transition-all hover:text-brand-500 hover:bg-brand-50 dark:hover:bg-brand-500/10"
                                        title="تعديل">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>

                                    
                                    <form action="<?php echo e(route('dashboard.testimonials.destroy', $testimonial->id)); ?>"
                                        method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا التقييم؟');"
                                        class="inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                            class="p-2 text-gray-500 rounded-lg transition-all hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10"
                                            title="حذف">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        
                        <?php echo $__env->make('dashboard.components.testimonial-modal', [
                            'modalId' => 'editTestimonialModal' . $testimonial->id,
                            'title' => 'تعديل التقييم',
                            'action' => route('dashboard.testimonials.update', $testimonial->id),
                            'method' => 'PUT',
                            'testimonial' => $testimonial,
                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        
        <?php if($testimonials->hasPages()): ?>
            <div class="px-5 py-4 border-t border-gray-100 bg-gray-50/30 dark:border-gray-800 dark:bg-transparent">
                <?php echo e($testimonials->links()); ?>

            </div>
        <?php endif; ?>
    </div>

    
    <?php echo $__env->make('dashboard.components.testimonial-modal', [
        'modalId' => 'createTestimonialModal',
        'title' => 'إضافة تقييم جديد',
        'action' => route('dashboard.testimonials.store'),
        'method' => 'POST',
        'testimonial' => null,
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\projects_2026\baking-store\resources\views/dashboard/pages/testimonials/index.blade.php ENDPATH**/ ?>