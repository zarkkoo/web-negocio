@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <a href="/services" class="text-gray-500 hover:text-white mb-8 inline-block uppercase text-sm">&larr; Volver a Servicios</a>
    
    <h2 class="text-4xl font-bold mb-12 uppercase accent">Mejoras de Rendimiento</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="bg-[#111] p-8 border border-gray-800">
            <h3 class="text-2xl font-bold mb-4 uppercase text-[#d4af37]">Stage 3: 900+ HP V8 BiTurbo</h3>
            <p class="text-gray-400 mb-6">Llevamos los motores V8 de Mercedes-AMG y Audi RS al límite absoluto. Reemplazamos los turbos originales por unidades de rodamiento de bolas de mayor tamaño, mejoramos la refrigeración y reprogramamos la ECU a medida.</p>
            <div class="bg-black p-4 text-sm font-mono text-gray-300">
                Potencia base: 600 HP<br>
                Potencia Obsidian: 912 HP<br>
                0-100 km/h: 2.8s
            </div>
        </div>

        <div class="bg-[#111] p-8 border border-gray-800">
            <h3 class="text-2xl font-bold mb-4 uppercase text-[#d4af37]">Sistemas de Escape Obsidian-F1</h3>
            <p class="text-gray-400 mb-6">Sistemas completos (Cat-back y Downpipes) fabricados en titanio de grado aeroespacial. Diseño de flujo libre para maximizar la potencia y generar un sonido agudo y exótico.</p>
            <ul class="text-gray-400 space-y-2">
                <li>&bull; Válvulas controladas por mando a distancia</li>
                <li>&bull; Puntas de escape en carbono forjado</li>
            </ul>
        </div>
    </div>
</div>
@endsection