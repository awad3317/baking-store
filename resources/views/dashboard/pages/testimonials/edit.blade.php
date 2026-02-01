@extends('dashboard.layouts.app')
@section('title', isset($testimonial->id) ? 'تعديل تقييم' : 'إضافة تقييم')
@section('Breadcrumb', isset($testimonial->id) ? 'تعديل تقييم' : 'إضافة تقييم')

@section('content')
    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 dark:bg-gray-800 dark:border-gray-700">
        <form
            action="{{ isset($testimonial->id) ? route('dashboard.testimonials.update', $testimonial->id) : route('dashboard.testimonials.store') }}"
            method="POST">
            @csrf
            @if (isset($testimonial->id))
                @method('PUT')
            @endif

            <div class="grid gap-6 md:grid-cols-2">
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">الاسم</label>
                    <input type="text" name="name" value="{{ old('name', $testimonial->name) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary dark:bg-gray-700 dark:border-gray-600">
                </div>

                <!-- Role -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">الدور (مثلاً: صانعة
                        كيك)</label>
                    <input type="text" name="role" value="{{ old('role', $testimonial->role) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary dark:bg-gray-700 dark:border-gray-600">
                </div>

                <!-- Stars -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">التقييم (1-5)</label>
                    <input type="number" name="stars" step="0.5" min="1" max="5"
                        value="{{ old('stars', $testimonial->stars ?? 5) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary dark:bg-gray-700 dark:border-gray-600">
                </div>

                <!-- Color -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">اللون</label>
                    <select name="color"
                        class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary dark:bg-gray-700 dark:border-gray-600">
                        @foreach (['primary', 'dusty-rose', 'warm-brown', 'blue-500', 'green-500'] as $color)
                            <option value="{{ $color }}"
                                {{ old('color', $testimonial->color) == $color ? 'selected' : '' }}>{{ $color }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Text -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">نص التقييم</label>
                    <textarea name="text" rows="4" required
                        class="w-full rounded-lg border-gray-300 focus:border-primary focus:ring-primary dark:bg-gray-700 dark:border-gray-600">{{ old('text', $testimonial->text) }}</textarea>
                </div>

                <!-- Active -->
                <div class="md:col-span-2">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="active" value="1"
                            {{ old('active', $testimonial->active ?? true) ? 'checked' : '' }}
                            class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">نشط (يظهر في الموقع)</span>
                    </label>
                </div>
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <a href="{{ route('dashboard.testimonials.index') }}"
                    class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">إلغاء</a>
                <button type="submit"
                    class="px-4 py-2 text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">حفظ</button>
            </div>
        </form>
    </div>
@endsection
