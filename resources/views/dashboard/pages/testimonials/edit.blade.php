@extends('dashboard.layouts.app')
@section('title', isset($testimonial->id) ? 'تعديل تقييم' : 'إضافة تقييم')
@section('Breadcrumb', isset($testimonial->id) ? 'تعديل تقييم' : 'إضافة تقييم')

@section('content')
    <div
        class="overflow-hidden bg-white rounded-2xl border shadow-sm border-gray-200/60 dark:bg-gray-900 dark:border-gray-800">
        {{-- Header --}}
        <div
            class="px-6 py-5 bg-gradient-to-l to-white border-b border-gray-100 from-brand-50/50 dark:border-gray-800 dark:from-brand-500/5 dark:to-gray-900">
            <div class="flex gap-3 items-center">
                <div class="flex justify-center items-center w-11 h-11 rounded-xl bg-brand-500/10 dark:bg-brand-500/15">
                    <svg class="w-5 h-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ isset($testimonial->id) ? 'تعديل التقييم' : 'إضافة تقييم جديد' }}
                    </h3>
                    <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">إدارة آراء وتقييمات العملاء</p>
                </div>
            </div>
        </div>

        <form
            action="{{ isset($testimonial->id) ? route('dashboard.testimonials.update', $testimonial->id) : route('dashboard.testimonials.store') }}"
            method="POST">
            @csrf
            @if (isset($testimonial->id))
                @method('PUT')
            @endif

            <div class="px-6 py-6 space-y-5">
                <div class="grid gap-5 md:grid-cols-2">

                    {{-- Name --}}
                    <div class="my-6 space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            اسم العميل <span class="text-brand-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 right-0 items-center pr-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}"
                                required
                                class="py-3 pr-10 pl-4 w-full text-right text-gray-900 bg-gray-50 rounded-xl border border-gray-200 transition-all focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white placeholder:text-gray-400"
                                placeholder="أدخل اسم العميل">
                        </div>
                    </div>

                    {{-- Role --}}
                    <div class="my-6 space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            الدور / المسمى الوظيفي <span class="text-brand-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 right-0 items-center pr-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="text" name="role" value="{{ old('role', $testimonial->role ?? '') }}"
                                required
                                class="py-3 pr-10 pl-4 w-full text-right text-gray-900 bg-gray-50 rounded-xl border border-gray-200 transition-all focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white placeholder:text-gray-400"
                                placeholder="مثال: صانعة كيك">
                        </div>
                    </div>

                    {{-- Stars --}}
                    <div class="my-6 space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">عدد النجوم</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 right-0 items-center pr-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-24 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-239-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.8288-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <input type="number" name="stars" step="0.5" min="1" max="5"
                                value="{{ old('stars', $testimonial->stars ?? 5) }}" required
                                class="py-3 pr-10 pl-4 w-full text-right text-gray-900 bg-gray-50 rounded-xl border border-gray-200 transition-all focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white">
                        </div>
                    </div>

                    {{-- Color --}}
                    <div class="my-6 space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">سمة اللون</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 right-0 items-center pr-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <select name="color"
                                class="py-3 pr-10 pl-4 w-full text-right bg-gray-50 rounded-xl border border-gray-200 transition-all appearance-none cursor-pointer focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white">
                                @php
                                    $colors = [
                                        'primary' => 'اللون الأساسي',
                                        'dusty-rose' => 'وردي ترابي',
                                        'warm-brown' => 'بني دافئ',
                                        'blue-500' => 'أزرق',
                                        'green-500' => 'أخضر',
                                    ];
                                @endphp
                                @foreach ($colors as $value => $label)
                                    <option value="{{ $value }}"
                                        {{ old('color', $testimonial->color ?? 'primary') == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    {{-- Text --}}
                    <div class="space-y-2 md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            رسالة التقييم <span class="text-brand-500">*</span>
                        </label>
                        <textarea name="text" rows="4" required
                            class="px-4 py-3 w-full text-right text-gray-900 bg-gray-50 rounded-xl border border-gray-200 transition-all resize-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 dark:bg-gray-800/50 dark:border-gray-700 dark:text-white placeholder:text-gray-400"
                            placeholder="ماذا قال العميل عن تجربته؟">{{ old('text', $testimonial->text ?? '') }}</textarea>
                    </div>

                    {{-- Active Toggle --}}
                    <div class="md:col-span-2">
                        <div
                            class="flex justify-between items-center p-4 bg-gray-50 rounded-xl border border-gray-100 dark:bg-gray-800/50 dark:border-gray-700/50">
                            <div class="flex gap-3 items-center">
                                <div
                                    class="flex justify-center items-center w-9 h-9 rounded-lg bg-brand-500/10 dark:bg-brand-500/15">
                                    <svg class="w-4 h-4 text-brand-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-sm font-medium text-gray-900 dark:text-white">تفعيل
                                        النشر</span>
                                    <p class="mt-0.5 text-xs text-gray-500 dark:text-gray-400">عرض هذا الرأي في الواجهة
                                        الأمامية</p>
                                </div>
                            </div>
                            <label class="inline-flex relative items-center cursor-pointer">
                                <input type="checkbox" name="active" value="1"
                                    {{ old('active', $testimonial->active ?? true) ? 'checked' : '' }}
                                    class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:right-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-500 peer-focus:ring-2 peer-focus:ring-brand-500/20">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <div
                class="flex gap-3 justify-end px-6 py-4 border-t border-gray-100 bg-gray-50/50 dark:border-gray-800 dark:bg-gray-900/50">
                <a href="{{ route('dashboard.testimonials.index') }}"
                    class="px-5 py-2.5 text-sm font-medium text-gray-600 rounded-lg transition-colors hover:text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:bg-gray-800">
                    إلغاء
                </a>
                <button type="submit"
                    class="px-6 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-600 focus:ring-2 focus:ring-brand-500/50 transition-all shadow-sm hover:shadow-md active:scale-[0.98]">
                    <span class="flex gap-2 items-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        {{ isset($testimonial->id) ? 'تحديث التقييم' : 'حفظ التقييم' }}
                    </span>
                </button>
            </div>
        </form>
    </div>
@endsection
