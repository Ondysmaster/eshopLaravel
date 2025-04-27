@extends('layouts.app')

@section('content')
<div class="h-20"> </div>
<div class="container mx-auto py-10 relative">

    <!-- Tady přidáme obrázek jako pozadí s blur efektem -->
    <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-0" style="background-image: url('path-to-your-image.jpg'); filter: blur(8px);"></div>

    <div class="space-y-6 relative z-10">

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Jaké informace musím poskytnout při nákupu auta?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Při nákupu auta potřebujeme vaše osobní údaje, kontaktní informace, případně číslo občanského průkazu pro ověření totožnosti. Pokud se rozhodnete pro financování, budou potřebné také informace o vašem příjmu.
            </div>
        </div>

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Jak mohu změnit objednávku po jejím potvrzení?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Jakmile je objednávka potvrzena, změny mohou být provedeny pouze do okamžiku, než bude auto odesláno. Kontaktujte nás co nejdříve a my se pokusíme upravit objednávku podle vašich požadavků.
            </div>
        </div>

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Mohu si auto vyzkoušet před zakoupením?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Ano, pokud se jedná o auto, které je skladem, je možné si jej osobně prohlédnout a vyzkoušet v naší provozovně. Kontaktujte nás, abychom domluvili termín zkušební jízdy.
            </div>
        </div>

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Je možné auto převzít osobně, nebo je doručeno?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Pokud preferujete osobní odběr, rádi vám auto připravíme k vyzvednutí na našem showroomu. Můžeme také zajistit dopravu k vám domů, a to v závislosti na vzdálenosti a dohodnutých podmínkách.
            </div>
        </div>

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Jaké možnosti financování nabízíte?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Nabízíme financování prostřednictvím splátkových plánů s nízkými úrokovými sazbami. Můžete si vybrat mezi krátkodobým a dlouhodobým financováním. Podrobnosti vám rádi vysvětlíme na osobní konzultaci.
            </div>
        </div>

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Co se stane, když auto, které chci, není skladem?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Pokud auto, které chcete, není skladem, rádi vám nabídneme podobný model nebo vás zařadíme do čekacího seznamu. O přesném termínu dostupnosti vás budeme informovat.
            </div>
        </div>

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Jaké jsou náklady na doručení?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Cena doručení závisí na vzdálenosti mezi naším showroomem a vaším místem. Naší standardní službou je doručení do 100 km zdarma. Pro delší vzdálenosti vám poskytneme individuální cenovou nabídku.
            </div>
        </div>

        <div class="space-y-4">
            <button class="w-full text-left text-xl font-medium text-white bg-gray-800 px-6 py-4 rounded-lg flex justify-between items-center transform transition duration-300 ease-in-out hover:scale-105 hover:bg-gray-700"
                    onclick="toggleAnswer(this)">
                    Jak dlouho trvá doručení auta?
                <span class="ml-4">+</span>
            </button>
            <div class="hidden mt-2 text-gray-700 px-6 transition-all duration-500 ease-in-out transform opacity-0 max-h-0 overflow-hidden">
                Doručení auta obvykle trvá 5–10 pracovních dní, v závislosti na vzdálenosti a dostupnosti vozu. Pokud jde o speciální objednávky, může se doba dodání prodloužit.
            </div>
        </div>
    </div>
</div>

<script>
function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    const isHidden = answer.classList.contains('hidden');
    answer.classList.toggle('hidden');
    answer.classList.toggle('opacity-0');
    answer.classList.toggle('max-h-0');
    answer.classList.toggle('opacity-100');
    answer.classList.toggle('max-h-screen');
    button.querySelector('span').textContent = isHidden ? '−' : '+';
}
</script>
@endsection
