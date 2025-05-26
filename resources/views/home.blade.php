@extends('layouts.app')

@section('content')
    <!-- Hero Section with Image and Gradient -->
    <div class="relative h-screen hero-image">
        <img src="{{ asset('/storage/automore.jpg') }}" alt="Vítejte" class="object-cover w-full h-full z-10 filter brightness-90 hover:brightness-110 transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-transparent opacity-60"></div>
        <div class="absolute inset-0 flex items-center justify-between px-4">
            <!-- Left side: Title -->
            <div class="flex flex-col items-start justify-center w-1/2">
                <h1 class="text-5xl sm:text-7xl font-extrabold text-center z-10 animate__animated animate__fadeIn animate__delay-1s">
                    <span class="rainbow-text">
                        <span class="letter">C</span>
                        <span class="letter">a</span>
                        <span class="letter">r</span>
                        <span class="letter">G</span>
                        <span class="letter">a</span>
                        <span class="letter">l</span>
                        <span class="letter">a</span>
                        <span class="letter">x</span>
                        <span class="letter">y</span>
                    </span>
                </h1>

                <style>
                    .rainbow-text .letter {
                        display: inline-block;
                        animation: colorChange 5s infinite;
                        font-size: 6rem;
                    }

                    @keyframes colorChange {
                        0% { color: #ff0000; }
                        20% { color: #ff9900; }
                        40% { color: #33cc33; }
                        60% { color: #3399ff; }
                        80% { color: #9900cc; }
                        100% { color: #ff0000; }
                    }

                    .rainbow-text .letter:nth-child(1) { animation-delay: 0s; }
                    .rainbow-text .letter:nth-child(2) { animation-delay: 0.5s; }
                    .rainbow-text .letter:nth-child(3) { animation-delay: 1s; }
                    .rainbow-text .letter:nth-child(4) { animation-delay: 1.5s; }
                    .rainbow-text .letter:nth-child(5) { animation-delay: 2s; }
                    .rainbow-text .letter:nth-child(6) { animation-delay: 2.5s; }
                    .rainbow-text .letter:nth-child(7) { animation-delay: 3s; }
                    .rainbow-text .letter:nth-child(8) { animation-delay: 3.5s; }
                    .rainbow-text .letter:nth-child(9) { animation-delay: 4s; }
                </style>
            </div>

            <!-- Right side: Description -->
            <div class="flex flex-col items-end justify-center w-1/2 text-right">
                <p class="text-3xl sm:text-4xl font-extrabold text-center mt-4 text-white">
                    Objevte svět aut v nové dimenzi! 
                    <br> CarGalaxy je váš vesmír plný těch nejlepších vozů.
                </p>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
<div class="py-16 text-center bg-white">
    <h2 class="text-4xl font-extrabold mb-4 animate__animated animate__fadeInUp animate__delay-1s text-gray-900">Proč si vybrat právě nás?</h2>
    <p class="text-lg mb-10 animate__animated animate__fadeInUp animate__delay-1.2s text-gray-700">Spojujeme špičkovou kvalitu, rychlost a profesionální péči o zákazníky za bezkonkurenční ceny.</p>
    <div class="mt-6 flex flex-wrap justify-center gap-8">
        
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-xs hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate__animated animate__fadeInLeft animate__delay-1.4s">
            <div class="flex justify-center mb-4">
                <x-heroicon-o-truck class="h-16 w-16 text-blue-500 transform transition duration-500 hover:rotate-180" />
            </div>
            <h3 class="text-2xl font-bold mb-2 text-gray-900">Expresní Logistika</h3>
            <p class="text-gray-700">Garantujeme efektivní a bezpečné doručení v nejkratších možných lhůtách.</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-xs hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate__animated animate__fadeInUp animate__delay-1.6s">
            <div class="flex justify-center mb-4">
                <x-iconsax-bro-sidebar-right class="h-16 w-16 text-purple-500 transform transition duration-500 hover:rotate-180" />
            </div>
            <h3 class="text-2xl font-bold mb-2 text-gray-900">Prémiová Kvalita</h3>
            <p class="text-gray-700">Každý vůz prochází přísným výběrovým procesem a splňuje nejvyšší standardy kvality.</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-xs hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate__animated animate__fadeInRight animate__delay-1.8s">
            <div class="flex justify-center mb-4">
                <x-gmdi-support-agent-o class="h-16 w-16 text-green-500 transform transition duration-500 hover:rotate-180" />
            </div>
            <h3 class="text-2xl font-bold mb-2 text-gray-900">Komplexní Podpora</h3>
            <p class="text-gray-700">Náš tým odborníků je připraven poskytnout vám individuální asistenci a odpovědět na veškeré dotazy.</p>
        </div>

    </div>
</div>


    <!-- Reviews Section -->
<div class="py-16 bg-gray-100 text-center">
    <h2 class="text-4xl font-extrabold mb-4 text-gray-900 animate__animated animate__fadeInUp animate__delay-1s">Co o nás říkají zákazníci?</h2>
    <p class="text-lg mb-10 text-gray-700 animate__animated animate__fadeInUp animate__delay-1.2s">Vaše spokojenost je pro nás na prvním místě.</p>
    <div class="flex flex-wrap justify-center gap-8">
        
        <!-- Review 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 max-w-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate__animated animate__fadeInLeft animate__delay-1.4s">
            <div class="text-yellow-400 text-xl mb-2">
                ★★★★★
            </div>
            <p class="text-gray-700 italic">"CarGalaxy přetvořil zážitek z nákupu vozu na skutečné umění. Elegantní, rychlé a absolutně bezchybné."</p>
            <div class="mt-4 font-bold text-gray-900">- Maximilian DeLacroix</div>
        </div>

        <!-- Review 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 max-w-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate__animated animate__fadeInUp animate__delay-1.6s">
            <div class="text-yellow-400 text-xl mb-2">
                ★★★★☆
            </div>
            <p class="text-gray-700 italic">"Profesionalita a exkluzivní přístup jsou zde standardem. Výběr aut uspokojí i ty nejnáročnější znalce."</p>
            <div class="mt-4 font-bold text-gray-900">- Isabella Moretti</div>
        </div>

        <!-- Review 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 max-w-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate__animated animate__fadeInRight animate__delay-1.8s">
            <div class="text-yellow-400 text-xl mb-2">
                ★★★★★
            </div>
            <p class="text-gray-700 italic">"Každý detail byl dotažen k dokonalosti. Luxusní servis pro ty, kdo chtějí jen to nejlepší."</p>
            <div class="mt-4 font-bold text-gray-900">- Sebastian Van der Rohe</div>
        </div>

    </div>
</div>


    <!-- Products Horizontal Scroll Section -->
    @include('components.product-slider')

    <!-- Map Section -->
    <div class="py-16">
        <h2 class="text-4xl font-extrabold mb-4 text-center text-gray-900">Naše Lokace - Zlín</h2>
        <div class="w-full h-96">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.560216599735!2d17.66764507694606!3d49.223622471388994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47130dba2e0618c3%3A0x400af0f66142d10!2sZl%C3%ADn!5e0!3m2!1scs!2scz!4v1714237200000!5m2!1scs!2scz" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
            },
            loop: true,
        });
    </script>
@endpush

@push('styles')
    <style>
        .hero-image {
            position: relative;
            background-image: url('{{ asset('fotky/automore.jpg') }}');
            background-size: cover;
            background-position: center;
            animation: parallax 10s linear infinite;
        }

        @keyframes parallax {
            from { background-position: 0 0; }
            to { background-position: 0 100%; }
        }

        .hero-image img:hover {
            filter: blur(4px);
        }

        .hero-image img {
            transition: all 0.3s ease;
        }
    </style>
@endpush
