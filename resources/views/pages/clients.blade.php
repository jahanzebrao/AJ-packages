@extends('layouts.app')
@section('title', 'Our Clients — AJ Packages Trusted Partners')
@section('meta_desc', 'AJ Packages proudly serves Gul Ahmed Textile, Mustaqim Dyeing and 14+ valued clients across Pakistan. Trusted corrugated packaging supplier since 2014.')
@section('meta_keywords', 'AJ Packages clients, corrugated box supplier karachi clients, Gul Ahmed packaging, packaging company partners pakistan')

@section('content')

<div class="bg-brand-dark pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-30"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="inline-flex items-center gap-3 mb-5">
            <span class="w-8 h-px bg-brand-gold"></span>
            <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">Our Partners</span>
        </div>
        <h1 class="font-display text-white leading-none" style="font-size:clamp(56px,7vw,100px)">VALUED<br><span class="text-brand-gold">CLIENTELE</span></h1>
    </div>
</div>

<section class="py-28 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <p class="text-brand-mid/70 max-w-2xl leading-relaxed mb-16 reveal font-light">
            Our prestigious clientele is the major backbone of the company, evident of our clients' trust in meeting their requirements by delivering quality corrugated boxes in the markets.
        </p>

        <!-- Featured -->
        <h3 class="text-[10px] tracking-[0.2em] uppercase text-brand-gold mb-5 reveal flex items-center gap-3">
            <span class="w-8 h-px bg-brand-gold"></span> Premium Partners
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
            @foreach(array_filter($clients, fn($c) => $c['featured']) as $c)
            <div class="bg-brand-dark border border-brand-gold/40 px-8 py-7 flex items-center gap-4 reveal hover:border-brand-gold transition-colors">
                <span class="text-brand-gold text-xl">★</span>
                <div>
                    <p class="text-white font-medium text-lg">{{ $c['name'] }}</p>
                    <p class="text-brand-gold/50 text-[10px] tracking-[0.15em] uppercase mt-1">Premium Partner</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- All clients -->
        <h3 class="text-[10px] tracking-[0.2em] uppercase text-brand-mid/50 mb-5 reveal flex items-center gap-3">
            <span class="w-8 h-px bg-brand-mid/30"></span> All Clients
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            @foreach(array_filter($clients, fn($c) => !$c['featured']) as $c)
            <div class="border border-brand-gold/12 px-6 py-5 text-brand-dark/70 hover:border-brand-gold/50 hover:text-brand-dark transition-all reveal flex items-center gap-3 group">
                <div class="w-1.5 h-1.5 rounded-full bg-brand-gold/30 group-hover:bg-brand-gold transition-colors"></div>
                {{ $c['name'] }}
            </div>
            @endforeach
        </div>

        <!-- Trust badge -->
        <div class="mt-16 bg-brand-dark p-10 flex flex-col md:flex-row items-center gap-8 reveal">
            <div class="font-display text-brand-gold text-7xl">14<sup class="text-4xl">+</sup></div>
            <div>
                <p class="text-white text-xl font-serif italic mb-2">Valued Clients Across Pakistan</p>
                <p class="text-white/40 leading-relaxed max-w-xl">From garment factories to Pakistan's leading textile giants — A.J Packages proudly serves Gul Ahmed Textile and Mustaqim Dyeing &amp; Printing alongside our long-standing industry partners.</p>
            </div>
        </div>
    </div>
</section>

@endsection
