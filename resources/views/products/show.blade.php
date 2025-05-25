@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-purple-900 via-indigo-900 to-black py-12 text-white">
    <!-- Zpět na produkty -->
    <div class="fixed top-10 left-6 z-50">
        <a href="{{ route('products.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition">
            ← Zpět
        </a>
    </div>

    <div class="container mx-auto px-6 mt-24 max-w-6xl bg-gray-900 rounded-xl shadow-2xl p-8 flex flex-col lg:flex-row gap-8">
        <!-- Obrázky -->
        <div class="lg:w-1/2">
            @if (!empty($product->images) && is_iterable($product->images))
                <img id="main-image" src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}" class="rounded-lg shadow-lg w-full object-cover max-h-[500px]">

                <!-- Carousel -->
                <div class="flex justify-between mt-4 relative">
                    <button id="prev-image" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 p-2 rounded-full text-white z-10">&lt;</button>
                    <div class="overflow-hidden w-full px-10">
                        <div class="flex transition-transform duration-300 space-x-4" id="image-carousel">
                            @foreach ($product->images as $index => $image)
                                <img src="{{ asset('storage/' . $image) }}"
                                     alt="{{ $product->name }}"
                                     class="rounded-lg cursor-pointer image-thumbnail"
                                     data-index="{{ $index }}"
                                     style="width: 80px; height: 80px; object-fit: cover;">
                            @endforeach
                        </div>
                    </div>
                    <button id="next-image" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 p-2 rounded-full text-white z-10">&gt;</button>
                </div>
            @else
                <div class="w-full h-64 bg-gray-700 flex items-center justify-center text-gray-400 italic rounded-lg">Obrázek není k dispozici</div>
            @endif
        </div>

        <!-- Informace o produktu -->
        <div class="lg:w-1/2 text-white flex flex-col justify-between">
            <h1 class="text-4xl font-extrabold mb-6 text-indigo-400">{{ $product->name }}</h1>
            <p class="text-gray-300 mb-6">{{ $product->description }}</p>

            <table class="w-full text-gray-300 mb-6 border-collapse border border-gray-700 rounded-lg overflow-hidden">
                <tbody>
                    <tr>
                        <th class="text-left py-3 px-4 bg-indigo-800">Cena</th>
                        <td class="py-3 px-4 font-semibold text-white">{{ number_format($product->price, 2) }} Kč</td>
                    </tr>
                    <tr>
                        <th class="text-left py-3 px-4 bg-indigo-800">Sklad</th>
                        <td class="py-3 px-4">{{ $product->in_stock }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Podobné produkty -->
    <div class="container mx-auto px-6 mt-16 max-w-6xl">
        <x-infinite_slider :products="$relatedProducts" />
    </div>
</div>

<!-- Carousel JS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const thumbnails = document.querySelectorAll('.image-thumbnail');
        const mainImage = document.getElementById('main-image');
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                mainImage.src = thumb.src;
            });
        });

        const carousel = document.getElementById('image-carousel');
        const prev = document.getElementById('prev-image');
        const next = document.getElementById('next-image');

        let scrollAmount = 0;
        const scrollStep = 100;

        next.addEventListener('click', () => {
            scrollAmount += scrollStep;
            carousel.scrollTo({ left: scrollAmount, behavior: 'smooth' });
        });

        prev.addEventListener('click', () => {
            scrollAmount -= scrollStep;
            if (scrollAmount < 0) scrollAmount = 0;
            carousel.scrollTo({ left: scrollAmount, behavior: 'smooth' });
        });
    });
</script>
@endsection
