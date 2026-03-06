@extends('layouts.app')
@section('title', 'Machinery & Infrastructure — AJ Packages Karachi')
@section('meta_desc', 'AJ Packages operates a 15,000 sq ft facility with 11+ industrial machines in Karachi. 180 tons monthly corrugated packaging capacity with GSM and moisture testing.')
@section('meta_keywords', 'corrugated box machinery karachi, packaging factory karachi, AJ Packages infrastructure, corrugated manufacturing equipment')

@section('content')

<div class="bg-brand-dark pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-30"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="inline-flex items-center gap-3 mb-5">
            <span class="w-8 h-px bg-brand-gold"></span>
            <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">Our Capabilities</span>
        </div>
        <h1 class="font-display text-white leading-none mb-4" style="font-size:clamp(48px,6vw,90px)">INFRASTRUCTURE<br><span class="text-brand-gold">&amp; MACHINERY</span></h1>
        <div class="flex gap-12 mt-10">
            @foreach([['15K','Sq. Ft. Facility'],['11+','Machines'],['180T','Monthly Capacity']] as $s)
            <div>
                <div class="font-display text-brand-gold text-4xl">{{ $s[0] }}</div>
                <p class="text-white/35 text-[10px] tracking-[0.15em] uppercase mt-1">{{ $s[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

<section class="py-24 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <h2 class="font-display text-brand-dark text-4xl mb-10 reveal">MACHINERY <span class="text-brand-mid">LIST</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            @foreach($machines as $i => $m)
            <div class="bg-white border border-brand-gold/12 hover:border-brand-gold/50 p-7 transition-all group reveal hover:shadow-lg" style="animation-delay:{{ $i * 0.05 }}s">
                <div class="flex items-start justify-between mb-3">
                    <span class="font-display text-brand-gold/25 text-4xl">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
                    <div class="w-2 h-2 rounded-full bg-brand-gold/30 group-hover:bg-brand-gold transition-colors mt-2"></div>
                </div>
                <h3 class="font-display text-brand-dark text-xl mb-1 group-hover:text-brand-gold transition-colors">{{ strtoupper($m['name']) }}</h3>
                <p class="text-brand-mid/50 text-sm">{{ $m['spec'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testing Facilities -->
<section class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <h2 class="font-display text-white text-4xl mb-10 reveal">QUALITY <span class="text-brand-gold">TESTING</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            @foreach([
                ['icon'=>'⚖️','name'=>'GSM Testing','desc'=>'Paper weight and board quality verified at every production run to ensure consistent strength.'],
                ['icon'=>'💧','name'=>'Moisture Testing','desc'=>'Optimal moisture content maintained ensuring corrugation strength and long-term durability.'],
            ] as $t)
            <div class="border border-brand-gold/20 p-8 hover:border-brand-gold/50 hover:bg-brand-gold/5 transition-all reveal">
                <div class="text-4xl mb-5">{{ $t['icon'] }}</div>
                <h3 class="font-display text-brand-gold text-2xl mb-3">{{ strtoupper($t['name']) }}</h3>
                <p class="text-white/40 leading-relaxed">{{ $t['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
