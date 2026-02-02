@extends('dashboard.layouts.app')
@section('title', 'الآراء والتقييمات')
@section('Breadcrumb', 'الآراء والتقييمات')
@section('addButton')
    {{-- Modern Add Button with Modal Trigger --}}
    <button @click="$dispatch('open-modal', 'createTestimonialModal')"
        class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-xl shadow-sm hover:bg-brand-600 hover:shadow-md focus:ring-2 focus:ring-brand-500/50 transition-all active:scale-[0.98]">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
        <span>إضافة تقييم</span>
    </button>
@endsection

@section('content')
    <div
        class="overflow-hidden bg-white rounded-xl border shadow-sm border-gray-200/60 dark:bg-gray-900 dark:border-gray-800">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-right">
                <thead class="text-gray-600 bg-gray-50 dark:bg-gray-800/50 dark:text-gray-400">
                    <tr>
                        <th class="px-5 py-4 font-medium">الاسم</th>
                        <th class="px-5 py-4 font-medium">الدور</th>
                        <th class="px-5 py-4 font-medium">التقييم</th>
                        <th class="px-5 py-4 font-medium">الحالة</th>
                        <th class="px-5 py-4 font-medium">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    @foreach ($testimonials as $testimonial)
                        <tr class="transition-colors hover:bg-gray-50/50 dark:hover:bg-gray-800/30">
                            <td class="px-5 py-4">
                                <div class="flex gap-3 items-center">
                                    <div
                                        class="flex flex-shrink-0 justify-center items-center w-10 h-10 text-sm font-semibold rounded-full ring-2 bg-brand-500/10 text-brand-500 ring-brand-500/20">
                                        {{ $testimonial->initial }}
                                    </div>
                                    <span
                                        class="font-medium text-gray-900 dark:text-gray-100">{{ $testimonial->name }}</span>
                                </div>
                            </td>
                            <td class="px-5 py-4 text-gray-600 dark:text-gray-400">{{ $testimonial->role }}</td>
                            <td class="px-5 py-4">
                                <div
                                    class="inline-flex gap-1.5 items-center px-2.5 py-1 text-yellow-600 bg-yellow-50 rounded-lg dark:bg-yellow-400/10 dark:text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm font-semibold">{{ $testimonial->stars }}</span>
                                </div>
                            </td>
                            <td class="px-5 py-4">
                                @if ($testimonial->active)
                                    <span
                                        class="inline-flex gap-1.5 items-center px-2.5 py-1 text-xs font-medium text-green-600 bg-green-50 rounded-lg dark:bg-green-400/10 dark:text-green-400">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                        نشط
                                    </span>
                                @else
                                    <span
                                        class="inline-flex gap-1.5 items-center px-2.5 py-1 text-xs font-medium text-red-600 bg-red-50 rounded-lg dark:bg-red-400/10 dark:text-red-400">
                                        <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                                        غير نشط
                                    </span>
                                @endif
                            </td>
                            <td class="px-5 py-4">
                                <div class="flex gap-1 items-center">
                                    {{-- Edit Button --}}
                                    <button @click="$dispatch('open-modal', 'editTestimonialModal{{ $testimonial->id }}')"
                                        class="p-2 text-gray-500 rounded-lg transition-all hover:text-brand-500 hover:bg-brand-50 dark:hover:bg-brand-500/10"
                                        title="تعديل">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>

                                    {{-- Delete Button --}}
                                    <form action="{{ route('dashboard.testimonials.destroy', $testimonial->id) }}"
                                        method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا التقييم؟');"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
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

                        {{-- Edit Modal for each testimonial --}}
                        @include('dashboard.components.testimonial-modal', [
                            'modalId' => 'editTestimonialModal' . $testimonial->id,
                            'title' => 'تعديل التقييم',
                            'action' => route('dashboard.testimonials.update', $testimonial->id),
                            'method' => 'PUT',
                            'testimonial' => $testimonial,
                        ])
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if ($testimonials->hasPages())
            <div class="px-5 py-4 border-t border-gray-100 dark:border-gray-800">
                {{ $testimonials->links() }}
            </div>
        @endif
    </div>

    {{-- Create Modal --}}
    @include('dashboard.components.testimonial-modal', [
        'modalId' => 'createTestimonialModal',
        'title' => 'إضافة تقييم جديد',
        'action' => route('dashboard.testimonials.store'),
        'method' => 'POST',
        'testimonial' => null,
    ])
@endsection
