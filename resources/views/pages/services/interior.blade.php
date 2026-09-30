@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <a href="/services" class="text-gray-500 hover:text-white mb-8 inline-block uppercase text-sm">&larr; Volver a Servicios</a>
    
    <h2 class="text-4xl font-bold mb-12 uppercase accent">Interiores Bespoke</h2>
    
    <div class="space-y-12">
        
        <div class="border border-gray-800 p-8 flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/3">
                <img 
                    src="{{ asset('interior.jpg') }}" 
                    alt="Interior Bespoke Obsidian Werks" 
                    class="w-full h-auto max-h-64 object-cover border border-gray-800 shadow-lg"
                >
            </div>
            <div class="md:w-2/3">
                <h3 class="text-2xl font-bold mb-3 uppercase text-[#d4af37]">Cuero Nappa "Hermès" y Alcántara</h3>
                <p class="text-gray-400">Retapizamos por completo el habitáculo. Desde los paneles de las puertas hasta el techo. Usamos cuero europeo libre de imperfecciones con patrones de costura de diamante o hexagonales personalizados según el gusto del cliente. Colores vibrantes como el Naranja Mandarina, Azul Tiffany o Rojo Sangre.</p>
            </div>
        </div>

        
        <div class="border border-gray-800 p-8 flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/3">
                <img 
                    src="{{ asset('volante.jpg') }}" 
                    alt="Volante en Fibra de Carbono Forjada Cullinan Obsidian Werks" 
                    class="w-full h-auto max-h-64 object-cover border border-gray-800 shadow-lg"
                >
            </div>
            <div class="md:w-2/3">
                <h3 class="text-2xl font-bold mb-3 uppercase text-[#d4af37]">Volante de Carbono y Techo Estrellado</h3>
                <p class="text-gray-400">Reemplazamos los plásticos y maderas de fábrica por piezas auténticas de fibra de carbono forjada. Diseñamos volantes deportivos a medida con insertos de cuero Nappa y empuñaduras ergonómicas. Además, instalamos nuestro "Techo Estelar Obsidian" con más de 1,500 luces LED de fibra óptica configurables.</p>
            </div>
        </div>
    </div>
</div>
@endsection