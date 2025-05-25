@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-purple-900 via-indigo-900 to-black py-12">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-extrabold text-center text-white mb-12 tracking-wide">
            Objevte naše produkty
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            @forelse($products as $product)
                <div class="bg-gray-900 rounded-xl shadow-2xl overflow-hidden flex flex-col hover:scale-105 transform transition-transform duration-300">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->fwe) }}" alt="{{ $product->fwe }}" class="w-full h-56 object-cover">
                    @else
                        <div class="w-full h-56 bg-gray-700 flex items-center justify-center text-gray-400 text-lg italic">
                            Obrázek není k dispozici
                        </div>
                    @endif
                    <div class="p-6 flex flex-col flex-grow">
                        <h2 class="text-2xl font-semibold text-indigo-400 mb-3 truncate">{{ $product->name }}</h2>
                        <p class="text-gray-300 flex-grow mb-4 line-clamp-4">{{ $product->description }}</p>
                        <div class="mt-auto">
                            <p class="text-xl font-bold text-white mb-4">{{ number_format($product->price, 2) }} Kč</p>
                            <a href="{{ route('products.show', $product->id) }}" class="block bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg text-center font-semibold transition">
                                Více info
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-400 col-span-full">Žádné produkty k zobrazení.</p>
            @endforelse
        </div>
    </div>
</div>

<!-- Pro lepší truncation na popisku použij tailwind plugin line-clamp nebo fallback: -->
<style>
.line-clamp-4 {
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;  
  overflow: hidden;
}
</style>
@endsection
