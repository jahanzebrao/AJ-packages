@extends('layouts.app')
@section('title', $product['name'].' — Corrugated Packaging — AJ Packages Karachi')
@section('meta_desc', $product['description'].' Order custom '.$product['name'].' from AJ Packages, Karachi. Call 0306-2464800 for a free quote.')
@section('meta_keywords', $product['name'].', corrugated boxes karachi, packaging company pakistan, AJ Packages')

@section('content')

<!-- Hero -->
<div class="bg-brand-dark pt-32 pb-0 relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-30"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-white/30 text-[11px] tracking-wider uppercase mb-10">
            <a href="{{ route('home') }}" class="hover:text-brand-gold transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('products.index') }}" class="hover:text-brand-gold transition-colors">Products</a>
            <span>/</span>
            <span class="text-brand-gold">{{ $product['name'] }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-end pb-0">
            <div class="pb-16">
                <div class="text-5xl mb-6">{{ $product['icon'] }}</div>
                <p class="text-brand-gold text-[10px] tracking-[0.25em] uppercase mb-3">{{ $product['tagline'] }}</p>
                <h1 class="font-display text-white leading-none mb-6" style="font-size:clamp(48px,5.5vw,80px)">{{ strtoupper($product['name']) }}</h1>
                <p class="text-white/50 font-serif italic text-lg leading-relaxed mb-8 max-w-lg">{{ $product['description'] }}</p>
                <div class="flex gap-4">
                    <a href="{{ route('quote') }}" class="bg-brand-gold text-brand-dark text-[11px] tracking-[0.15em] uppercase px-8 py-4 hover:bg-brand-light transition-all font-semibold">
                        Get a Quote
                    </a>
                    <a href="{{ route('contact') }}" class="border border-white/25 text-white/70 text-[11px] tracking-[0.15em] uppercase px-8 py-4 hover:border-brand-gold hover:text-brand-gold transition-all">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- Product Image -->
            <div class="relative">
                <div class="relative h-72 lg:h-80 overflow-hidden">
                    @if(file_exists(public_path('images/'.$product['image'])))
                        <img src="{{ asset('images/'.$product['image']) }}" alt="{{ $product['name'] }}"
                             class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-brand-rich to-brand-mid flex items-center justify-center border border-brand-gold/20">
                            <div class="text-center">
                                <div class="text-8xl mb-4 opacity-30">{{ $product['icon'] }}</div>
                                <p class="text-brand-gold/40 text-[10px] tracking-[0.2em] uppercase">Product Image</p>
                                <p class="text-white/20 text-xs mt-1">Upload to: public/images/{{ $product['image'] }}</p>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Gold accent -->
                <div class="absolute -bottom-4 -right-4 w-32 h-32 border border-brand-gold/20 -z-0"></div>
            </div>
        </div>
    </div>
</div>

<!-- Details -->
<section class="py-24 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <!-- Features -->
        <div class="reveal">
            <h3 class="font-display text-brand-dark text-3xl mb-6">KEY FEATURES</h3>
            <ul class="space-y-3">
                @foreach($product['features'] as $f)
                <li class="flex items-start gap-3">
                    <span class="text-brand-gold mt-1">◆</span>
                    <span class="text-brand-mid/80 text-sm leading-relaxed">{{ $f }}</span>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Uses -->
        <div class="reveal">
            <h3 class="font-display text-brand-dark text-3xl mb-6">COMMON USES</h3>
            <div class="space-y-2">
                @foreach($product['uses'] as $u)
                <div class="border border-brand-gold/15 hover:border-brand-gold/40 px-5 py-3 text-brand-mid/70 text-sm transition-colors hover:text-brand-dark">
                    {{ $u }}
                </div>
                @endforeach
            </div>
        </div>

        <!-- Specs -->
        <div class="reveal">
            <h3 class="font-display text-brand-dark text-3xl mb-6">SPECIFICATIONS</h3>
            <div class="space-y-4">
                <div class="border-b border-brand-gold/15 pb-4">
                    <p class="text-[10px] tracking-[0.15em] uppercase text-brand-gold mb-1">Available Ply</p>
                    <p class="text-brand-dark font-medium">{{ $product['plies'] }}</p>
                </div>
                <div class="border-b border-brand-gold/15 pb-4">
                    <p class="text-[10px] tracking-[0.15em] uppercase text-brand-gold mb-1">Sizes</p>
                    <p class="text-brand-dark font-medium">Standard + Tailor-Made Available</p>
                </div>
                <div class="border-b border-brand-gold/15 pb-4">
                    <p class="text-[10px] tracking-[0.15em] uppercase text-brand-gold mb-1">Minimum Order</p>
                    <p class="text-brand-dark font-medium">Contact for MOQ Details</p>
                </div>
                <div>
                    <p class="text-[10px] tracking-[0.15em] uppercase text-brand-gold mb-1">Finish Options</p>
                    <p class="text-brand-dark font-medium">Brown Kraft / White Board</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
@if(count($related))
<section class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <h2 class="font-display text-white text-4xl mb-10">OTHER <span class="text-brand-gold">PRODUCTS</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($related as $r)
            <a href="{{ route('products.show', $r['slug']) }}" class="group border border-brand-gold/15 hover:border-brand-gold/50 p-7 transition-all hover:bg-brand-gold/5">
                <div class="text-3xl mb-4">{{ $r['icon'] }}</div>
                <h3 class="font-display text-white text-xl mb-2 group-hover:text-brand-gold transition-colors">{{ $r['name'] }}</h3>
                <p class="text-white/35 text-sm">{{ Str::limit($r['description'], 70) }}</p>
                <p class="text-brand-gold text-sm mt-4 group-hover:translate-x-1 transition-transform inline-block">View Details →</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
