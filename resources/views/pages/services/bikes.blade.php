@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <a href="/services" class="text-gray-500 hover:text-white mb-8 inline-block uppercase text-sm">&larr; Volver a Servicios</a>
    
    <h2 class="text-4xl font-bold mb-12 uppercase accent">Bikes</h2>
    
    <div class="space-y-16">
       
        <div class="flex flex-col md:flex-row gap-8 items-center border-b border-gray-800 pb-12">
            <div class="md:w-1/2">
                <img 
                    src="{{ asset('moto-ducati.jpg') }}" 
                    alt="Ducati Panigale V4 Obsidian Carbon Edition" 
                    class="w-full h-auto max-h-80 object-cover border border-gray-800 shadow-lg"
                >
            </div>
            <div class="md:w-1/2">
                <h3 class="text-3xl font-bold mb-4 uppercase">Proyecto Stealth (Basado en Ducati Panigale V4)</h3>
                <p class="text-gray-400 mb-4">Carenado completo en fibra de carbono forjada con alerones aerodinámicos de doble plano inspirados en MotoGP. Sistema de escape completo de titanio con salidas bajo el colín y llantas de carbono ultraligeras.</p>
                <ul class="list-disc list-inside text-[#d4af37]">
                    <li>Reducción de peso total: -18 kg</li>
                    <li>Asiento tapizado en Alcántara antideslizante con costuras doradas</li>
                    <li>Potencia ajustada a 228 HP</li>
                </ul>
            </div>
        </div>

        
        <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
            <div class="md:w-1/2">
                <img 
                    src="{{ asset('moto-custom.jpg') }}" 
                    alt="Custom Bike Obsidian Werks" 
                    class="w-full h-auto max-h-80 object-cover border border-gray-800 shadow-lg"
                >
            </div>
            <div class="md:w-1/2">
                <h3 class="text-3xl font-bold mb-4 uppercase">Proyecto Apex (Custom Hyper-Naked)</h3>
                <p class="text-gray-400 mb-4">Construcción radical Naked con chasis multitubular expuesto en acabado titanio quemado, basculante monobrazo extendido y detalles en carbono mate. Iluminación LED personalizada e instrumentación digital integrada.</p>
            </div>
        </div>
    </div>
</div>
@endsection