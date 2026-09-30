@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <a href="/services" class="text-gray-500 hover:text-white mb-8 inline-block uppercase text-sm">&larr; Volver a Servicios</a>
    
    <h2 class="text-4xl font-bold mb-12 uppercase accent">Proyectos Aerodinámicos</h2>
    
    <div class="space-y-16">
        
        <div class="flex flex-col md:flex-row gap-8 items-center border-b border-gray-800 pb-12">
            <div class="md:w-1/2">
                <img 
                    src="{{ asset('urus.jpg') }}" 
                    alt="Lamborghini Urus Widebody Obsidian Werks" 
                    class="w-full h-auto max-h-80 object-cover border border-gray-800 shadow-lg"
                >
            </div>
            <div class="md:w-1/2">
                <h3 class="text-3xl font-bold mb-4 uppercase">Proyecto Veneno (Basado en Urus)</h3>
                <p class="text-gray-400 mb-4">Kit de ensanche extremo (Widebody) compuesto por 34 piezas de fibra de carbono forjada. Incluye capó rediseñado con extractores de calor, alerón trasero doble y difusor agresivo.</p>
                <ul class="list-disc list-inside text-[#d4af37]">
                    <li>Reducción de peso: -45 kg</li>
                    <li>Fibra de carbono expuesta acabado mate</li>
                </ul>
            </div>
        </div>

        
        <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
            <div class="md:w-1/2">
                <img 
                    src="{{ asset('cullinan.jpg') }}" 
                    alt="Rolls-Royce Cullinan Obsidian Werks" 
                    class="w-full h-auto max-h-80 object-cover border border-gray-800 shadow-lg"
                >
            </div>
            <div class="md:w-1/2">
                <h3 class="text-3xl font-bold mb-4 uppercase">Proyecto Emperador (Basado en Cullinan)</h3>
                <p class="text-gray-400 mb-4">Redefiniendo la elegancia con un toque brutalista. Parachoques delantero rediseñado con luces diurnas LED integradas, faldones laterales extendidos y detalles en carbono expuesto en patrón de espiga.</p>
            </div>
        </div>
    </div>
</div>
@endsection