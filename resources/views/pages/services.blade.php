
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <h2 class="text-4xl font-bold mb-12 text-center uppercase accent">Nuestro Catálogo</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
        
        
        <a href="/services/aero" class="block border border-gray-800 p-8 hover:border-[#d4af37] transition group cursor-pointer">
            <h3 class="text-2xl font-bold mb-4 uppercase group-hover:text-[#d4af37] transition">Kits Aerodinámicos</h3>
            <p class="text-gray-400 mb-6">Diseños agresivos en fibra de carbono seca y forjada.</p>
            <span class="text-sm uppercase tracking-widest text-white group-hover:text-[#d4af37]">Ver proyectos &rarr;</span>
        </a>

        
        <a href="/services/performance" class="block border border-gray-800 p-8 hover:border-[#d4af37] transition group cursor-pointer">
            <h3 class="text-2xl font-bold mb-4 uppercase group-hover:text-[#d4af37] transition">Rendimiento</h3>
            <p class="text-gray-400 mb-6">Reprogramación, escapes de titanio y turbos de alto flujo.</p>
            <span class="text-sm uppercase tracking-widest text-white group-hover:text-[#d4af37]">Ver proyectos &rarr;</span>
        </a>

        
        <a href="/services/interior" class="block border border-gray-800 p-8 hover:border-[#d4af37] transition group cursor-pointer">
            <h3 class="text-2xl font-bold mb-4 uppercase group-hover:text-[#d4af37] transition">Interiores Bespoke</h3>
            <p class="text-gray-400 mb-6">Cuero de primera calidad, Alcántara y carbono a medida.</p>
            <span class="text-sm uppercase tracking-widest text-white group-hover:text-[#d4af37]">Ver proyectos &rarr;</span>
        </a>

        
        <a href="/services/bikes" class="block border border-gray-800 p-8 hover:border-[#d4af37] transition group cursor-pointer">
            <h3 class="text-2xl font-bold mb-4 uppercase group-hover:text-[#d4af37] transition">Bikes</h3>
            <p class="text-gray-400 mb-6">Kits de carbono, llantas ultra ligeras y asientos artesanales para motos exóticas.</p>
            <span class="text-sm uppercase tracking-widest text-white group-hover:text-[#d4af37]">Ver proyectos &rarr;</span>
        </a>

    </div>
</div>
@endsection