@extends('dashboard.layouts.app')
@section('title', 'المنتجات')
@section('Breadcrumb', 'المنتجات')
@section('addButton')
    <x-modals.success-modal />
    <x-modals.error-modal />
    <button
        class="flex items-center gap-2 px-4 py-2 text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">
        <i class="fas fa-plus"></i>
        <span>إضافة منتج</span>
    </button>
@endsection
@section('style')

@endsection
@section('script')

@endsection