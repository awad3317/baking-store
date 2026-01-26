@props([
    'image',
    'title',
    'price',
    'category' => null,
    'description' => null,
    'oldPrice' => null,
    'badge' => null,
    'isSoldOut' => false,
    'imageFilter' => null,
])

<div @click="$dispatch('open-product-modal', { 
        title: '{{ $title }}', 
        price: '{{ $price }}', 
        image: '{{ $image }}',
        category: '{{ $category ?? 'منتج' }}'
    })" 
    class="cursor-pointer group flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-lg ring-1 ring-gray-100/50">
    {{-- Product Image --}}
    <div class="relative aspect-square w-full overflow-hidden bg-gray-50">
        <div 
            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" 
            style="background-image: url('{{ $image }}');{{ $imageFilter ? ' filter: ' . $imageFilter . ';' : '' }}"
        ></div>
        
        {{-- Favorite Button (shows on hover) --}}
        <div class="absolute top-3 right-3 rounded-full bg-white px-2 py-1 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity">
            <button class="flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors">
                <span class="material-symbols-outlined text-[20px]">favorite</span>
            </button>
        </div>
        
        {{-- Discount/Custom Badge --}}
        @if($badge && !$isSoldOut)
            <div class="absolute top-3 left-3 rounded-md bg-accent-highlight px-2 py-1 text-[10px] font-bold text-white shadow-sm">
                {{ $badge }}
            </div>
        @endif
        
        {{-- Sold Out Badge --}}
        @if($isSoldOut)
            <div class="absolute top-3 left-3 rounded-md bg-stone-800 px-2 py-1 text-[10px] font-bold text-white shadow-sm">
                نفذت الكمية
            </div>
        @endif
    </div>
    
    {{-- Product Info --}}
    <div class="flex flex-1 flex-col p-3">
        {{-- Category --}}
        @if($category)
            <span class="mb-1 text-[10px] font-medium text-gray-500">{{ $category }}</span>
        @endif
        
        {{-- Title --}}
        <h3 class="mb-2 text-sm font-bold text-warm-brown group-hover:text-dusty-rose transition-colors">{{ $title }}</h3>
        
        {{-- Description (for home page) --}}
        @if($description)
            <p class="mb-4 text-sm text-dusty-dark dark:text-gray-400">{{ $description }}</p>
        @endif
        
        {{-- Price & Add to Cart --}}
        <div class="mt-auto flex items-end justify-between">
            <div class="flex flex-col">
                @if($oldPrice)
                    <span class="text-xs text-gray-400 line-through">{{ $oldPrice }}</span>
                @endif
                <span class="text-base font-bold {{ $isSoldOut ? 'text-gray-400' : 'text-dusty-rose' }}">{{ $price }}</span>
            </div>
            
            @if($isSoldOut)
                <button class="flex h-8 w-8 items-center justify-center rounded-lg bg-gray-100 text-gray-400 cursor-not-allowed" disabled>
                    <span class="material-symbols-outlined text-[20px]">block</span>
                </button>
            @else
                <button class="flex h-8 w-8 items-center justify-center rounded-lg bg-stone-100 text-dusty-rose transition-all hover:bg-dusty-rose hover:text-white">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                </button>
            @endif
        </div>
    </div>
</div>