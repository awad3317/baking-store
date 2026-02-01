@extends('dashboard.layouts.app')
@section('title', 'الآراء والتقييمات')
@section('Breadcrumb', 'الآراء والتقييمات')
@section('addButton')
    <a href="{{ route('dashboard.testimonials.create') }}"
        class="flex items-center gap-2 px-4 py-2 text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">
        <i class="fas fa-plus"></i>
        <span>إضافة تقييم</span>
    </a>
@endsection

@section('content')
    <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden dark:bg-gray-800 dark:border-gray-700">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-right">
                <thead class="bg-gray-50 text-gray-600 font-medium dark:bg-gray-700 dark:text-gray-300">
                    <tr>
                        <th class="px-6 py-4">الاسم</th>
                        <th class="px-6 py-4">الدور</th>
                        <th class="px-6 py-4">التقييم</th>
                        <th class="px-6 py-4">الحالة</th>
                        <th class="px-6 py-4">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    @foreach ($testimonials as $testimonial)
                        <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-700/50">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-gray-100 flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold bg-{{ $testimonial->color }}/10 text-{{ $testimonial->color }}">
                                    {{ $testimonial->initial }}
                                </div>
                                {{ $testimonial->name }}
                            </td>
                            <td class="px-6 py-4 text-gray-600 dark:text-gray-400">{{ $testimonial->role }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1 text-yellow-400">
                                    <span>{{ $testimonial->stars }}</span>
                                    <i class="fas fa-star text-xs"></i>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $testimonial->active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $testimonial->active ? 'نشط' : 'غير نشط' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('dashboard.testimonials.edit', $testimonial->id) }}"
                                        class="p-2 text-gray-500 hover:text-primary transition-colors">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('dashboard.testimonials.destroy', $testimonial->id) }}" method="POST"
                                        onsubmit="return confirm('هل أنت متأكد؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-gray-500 hover:text-red-500 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-100 dark:border-gray-700">
            {{ $testimonials->links() }}
        </div>
    </div>
@endsection