@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex items-center justify-center">
    <div class="container mx-auto py-16 px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-800 mb-6 animate__animated animate__fadeIn animate__delay-1s">
            Kontaktujte nás
        </h1>
        <p class="text-lg sm:text-xl text-gray-600 mb-12 animate__animated animate__fadeIn animate__delay-2s">
            Máte otázky nebo potřebujete pomoc? Vyplňte formulář níže a náš tým se vám co nejdříve ozve!
        </p>
        <div class="bg-white p-10 rounded-3xl shadow-xl max-w-lg mx-auto transform transition-all duration-300 hover:scale-105 hover:shadow-2xl animate__animated animate__zoomIn animate__delay-3s">
            <form class="space-y-6">
                <div>
                    <label for="name" class="block text-gray-700 text-lg font-semibold">Vaše jméno</label>
                    <input type="text" id="name" class="w-full p-4 mt-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Zadejte vaše jméno" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 text-lg font-semibold">Váš e-mail</label>
                    <input type="email" id="email" class="w-full p-4 mt-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Zadejte váš e-mail" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700 text-lg font-semibold">Zpráva</label>
                    <textarea id="message" class="w-full p-4 mt-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" rows="4" placeholder="Napište nám zprávu" required></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
                        Odeslat zprávu
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
