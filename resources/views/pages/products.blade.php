@extends('layouts.app')
@section('title', 'Corrugated Packaging Products — AJ Packages Karachi')
@section('meta_desc', 'Browse AJ Packages full range of corrugated packaging products including corrugated liner, die-cut boxes, display cartons, master cartons and corrugated sheets.')
@section('meta_keywords', 'corrugated boxes karachi, die cut boxes pakistan, display cartons karachi, master cartons, corrugated liner, AJ Packages products')

@section('content')

<!-- Page Header -->
<div class="bg-brand-dark pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-40"></div>
    <div class="absolute inset-0" style="background:radial-gradient(ellipse 60% 80% at 80% 50%, rgba(92,42,0,0.4) 0%, transparent 60%)"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="inline-flex items-center gap-3 mb-5">
            <span class="w-8 h-px bg-brand-gold"></span>
            <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">What We Make</span>
        </div>
        <h1 class="font-display text-white leading-none mb-4" style="font-size:clamp(56px,7vw,96px)">OUR<br><span class="text-brand-gold">PRODUCT RANGE</span></h1>
        <p class="font-serif italic text-white/40 text-lg max-w-xl">Premium corrugated packaging engineered for every industry — from pharma to garments to bulk export.</p>
    </div>
</div>

<!-- Products Grid -->
<section class="py-24 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $i => $product)
            <a href="{{ route('products.show', $product['slug']) }}"
               class="group bg-white border border-brand-gold/10 hover:border-brand-gold/50 hover:shadow-xl transition-all duration-400 overflow-hidden reveal">

                <!-- Image area -->
                <div class="relative h-52 bg-brand-cream overflow-hidden">
                    @if(file_exists(public_path('images/'.$product['image'])))
                        <img src="{{ asset('images/'.$product['image']) }}" alt="{{ $product['name'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    @else
                        <!-- Placeholder with icon -->
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-brand-cream to-brand-gold/10">
                            <span class="text-7xl opacity-40 group-hover:scale-110 transition-transform duration-500">{{ $product['icon'] }}</span>
                        </div>
                    @endif
                    <!-- Upload hint (remove in production) -->
                    <div class="absolute bottom-3 right-3 bg-brand-dark/70 text-white/50 text-[9px] tracking-wider px-2 py-1 hidden">
                        Add photo to: public/images/{{ $product['image'] }}
                    </div>
                    <!-- Number badge -->
                    <div class="absolute top-3 left-3 bg-brand-dark/80 backdrop-blur-sm text-brand-gold font-display text-sm px-3 py-1">
                        0{{ $i+1 }}
                    </div>
                </div>

                <div class="p-7">
                    <h3 class="font-display text-brand-dark text-2xl mb-2 group-hover:text-brand-gold transition-colors">{{ $product['name'] }}</h3>
                    <p class="text-brand-mid/60 text-sm leading-relaxed mb-5 font-light">{{ $product['description'] }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] tracking-[0.15em] uppercase text-brand-gold border border-brand-gold/30 px-3 py-1">{{ $product['plies'] ?? '3–7 Ply' }}</span>
                        <span class="text-brand-gold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">Details <span>→</span></span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Ply Range Table -->
<section class="py-24 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="text-center mb-14 reveal">
            <h2 class="font-display text-white text-5xl mb-3">BOX RANGE <span class="text-brand-gold">BY PLY</span></h2>
            <p class="text-white/40 font-serif italic">Choose the right strength for your application</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 reveal">
            @foreach($plyTypes as $ply)
            <div class="border border-brand-gold/20 hover:border-brand-gold/50 p-8 transition-all group">
                <div class="font-display text-brand-gold text-5xl mb-4">{{ $ply['type'] }}</div>
                <p class="text-white/50 text-sm mb-3">{{ $ply['layers'] }}</p>
                <span class="inline-block text-[10px] tracking-[0.12em] uppercase px-3 py-1.5 border mb-4
                    {{ $ply['color']==='green' ? 'border-green-500/40 text-green-400' : ($ply['color']==='yellow' ? 'border-yellow-500/40 text-yellow-400' : 'border-red-500/40 text-red-400') }}">
                    {{ $ply['strength'] }}
                </span>
                <p class="text-white/35 text-sm border-t border-white/8 pt-4 mt-2">{{ $ply['uses'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-brand-gold text-center">
    <div class="max-w-2xl mx-auto px-6 reveal">
        <h2 class="font-display text-brand-dark text-5xl mb-4">NEED CUSTOM SIZES?</h2>
        <p class="text-brand-dark/60 font-serif italic text-lg mb-8">All our products are available in tailor-made sizes to match your exact requirements.</p>
        <a href="{{ route('quote') }}" class="bg-brand-dark text-brand-gold text-[11px] tracking-[0.15em] uppercase px-10 py-4 hover:bg-brand-rich transition-all inline-block">
            Request a Custom Quote →
        </a>
    </div>
</section>

@endsection
