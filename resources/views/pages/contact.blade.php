@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16 max-w-lg">
    <h2 class="text-4xl font-bold mb-8 text-center uppercase accent">Inicia tu Proyecto</h2>
    <form class="space-y-6">
        <div>
            <label class="block text-sm uppercase mb-2">Nombre completo</label>
            <input type="text" class="w-full bg-transparent border border-gray-700 p-3 text-white focus:border-[#d4af37] outline-none">
        </div>
        <div>
            <label class="block text-sm uppercase mb-2">Modelo de Vehículo / Motocicleta</label>
            <input type="text" class="w-full bg-transparent border border-gray-700 p-3 text-white focus:border-[#d4af37] outline-none" placeholder="Ej. Urus Performante / Ducati Panigale V4">
        </div>
        <div>
            <label class="block text-sm uppercase mb-2">Visión del proyecto</label>
            <textarea class="w-full bg-transparent border border-gray-700 p-3 text-white focus:border-[#d4af37] outline-none h-32"></textarea>
        </div>
        <button type="button" class="w-full bg-[#d4af37] text-black font-bold uppercase py-4 hover:bg-white transition">
            Solicitar Consulta Privada
        </button>
    </form>
</div>
@endsection