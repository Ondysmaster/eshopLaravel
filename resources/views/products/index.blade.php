@extends('layouts.app')

@section('content')
    <!-- Celá stránka bude mít flexbox pro centrování -->
    <div class="relative flex items-center justify-center min-h-screen bg-gray-800">
        <!-- Text o vývoji stránky -->
        <div class="absolute text-center z-10">
            <h1 class="text-4xl font-bold text-white">
                <span class="blinking-text">
                    Nefunguje
                </span>
            </h1>
        </div>
    </div>

    <!-- Produkty - Grid -->
    <div class="container py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8 text-white p-10">Naše Produkty</h1>

        <!-- CSS pro Grid -->
        <style>
            .product-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            .product-card {
                background-color: white;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .product-card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .product-card .product-description {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .btn-primary {
                display: block;
                text-align: center;
                padding: 10px;
                background-color: #007bff;
                color: white;
                border-radius: 4px;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #0099b3;
            }

            /* Animace pro blikání písmenek a jejich pohyb nahoru a dolů */
            .blinking-text {
                display: inline-block;
                font-size: 4rem;
                font-weight: bold;
                white-space: nowrap; /* Aby se text nevešel na více řádků */
            }

            .blinking-text span {
                display: inline-block;
                animation: colorBlink 2s infinite alternate, moveUpDown 2s ease-in-out infinite;
            }

            /* Animace pro změnu barev */
            @keyframes colorBlink {
                0% {
                    color: #ff0000; /* Červená */
                }
                25% {
                    color: #ff9900; /* Oranžová */
                }
                50% {
                    color: #33cc33; /* Zelená */
                }
                75% {
                    color: #3399ff; /* Modrá */
                }
                100% {
                    color: #9900cc; /* Fialová */
                }
            }

            /* Animace pro pohyb písmenek nahoru a dolů */
            @keyframes moveUpDown {
                0% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-10px); /* Posun nahoru */
                }
                100% {
                    transform: translateY(0); /* Návrat zpět */
                }
            }
        </style>

        <!-- Skript pro rozdělení textu na písmena s různými zpožděními animace -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const textElement = document.querySelector('.blinking-text');
                const text = textElement.textContent;
                textElement.innerHTML = ''; // Clear original text

                // Rozdělí text na písmena a obalí každé písmeno do <span>, zachová mezery
                text.split('').forEach((char, index) => {
                    const span = document.createElement('span');
                    span.textContent = char === ' ' ? '\u00A0' : char; // Pokud je mezera, použije non-breaking space
                    span.style.animationDelay = `${index * 0.1}s`; // Každé písmeno má vlastní zpoždění
                    textElement.appendChild(span);
                });
            });
        </script>
    </div>
@endsection
