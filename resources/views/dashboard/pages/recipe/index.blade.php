@extends('dashboard.layouts.app')
@section('title', 'الوصفات')
@section('Breadcrumb', 'الوصفات')
@section('addButton')
    <x-modals.success-modal />
    <x-modals.error-modal />
    <button
        class="flex items-center gap-2 px-4 py-2 text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">
        <i class="fas fa-plus"></i>
        <span>إضافة وصفة</span>
    </button>
@endsection
@section('style')

@endsection
@section('script')

@endsection