@extends('layouts.app')
@section('title', 'About AJ Packages — Corrugated Box Manufacturers Since 2014')
@section('meta_desc', 'Learn about AJ Packages — leading corrugated box manufacturers in Karachi, Pakistan since 2014. Meet our owner Jahangir Akhtar and our commitment to quality packaging.')
@section('meta_keywords', 'about AJ Packages, corrugated packaging company karachi, Jahangir Akhtar AJ Packages, packaging manufacturer since 2014')

@section('content')

<!-- ══ PAGE HEADER ══ -->
<div class="bg-brand-dark pt-32 pb-20 relative overflow-hidden" role="banner">
    <div class="absolute inset-0 grid-bg opacity-30" aria-hidden="true"></div>
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true"
         style="background:radial-gradient(ellipse 55% 70% at 75% 50%, rgba(74,32,0,0.5) 0%, transparent 60%)"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">
        <div class="inline-flex items-center gap-3 mb-5">
            <span class="w-8 h-px bg-brand-gold" aria-hidden="true"></span>
            <span class="text-brand-gold text-[10px] tracking-[0.22em] uppercase font-semibold">Who We Are</span>
        </div>
        <h1 class="font-display text-white leading-[0.92]" style="font-size:clamp(52px,7vw,96px)">
            ABOUT<br><span class="text-brand-gold">A.J PACKAGES</span>
        </h1>
        <p class="font-serif italic text-white/50 mt-5 max-w-lg" style="font-size:clamp(16px,2vw,20px)">
            Ten years of crafting packaging that protects, performs and represents your brand.
        </p>
    </div>
</div>

<!-- ══ STORY ══ -->
<section class="py-28 bg-brand-cream relative overflow-hidden" aria-labelledby="story-heading">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">

        <!-- Story text -->
        <div class="reveal-up">
            <div class="inline-flex items-center gap-3 mb-6">
                <span class="w-8 h-px bg-brand-gold" aria-hidden="true"></span>
                <span class="text-brand-gold text-[10px] tracking-[0.22em] uppercase font-semibold">Our Story</span>
            </div>
            <h2 id="story-heading" class="font-display text-brand-dark leading-[0.95] mb-8" style="font-size:clamp(38px,4.5vw,62px)">
                BUILT ON<br><span class="text-brand-brown">QUALITY &amp;<br>DEDICATION</span>
            </h2>
            <div class="space-y-5 text-brand-mid/75 leading-relaxed text-base">
                <p>
                    <strong class="text-brand-dark font-semibold">A.J Packages</strong> is a leading firm engaged in the manufacturing of superior quality corrugated boxes, specializing in producing corrugated boxes, die-cut boxes and display cartons. A.J Packages has been delivering quality since 2014.
                </p>
                <p>
                    The rich experience blended with incessant efforts has earned the company a reputed name. Our corrugated boxes are obtainable in a variety of sizes — and tailor-made sizes are always welcome.
                </p>
                <p>
                    Corrugated paperboard containers are extensively used in the packaging of industrial as well as consumer goods — garments, flexi tubes, yarn, edible oils, pharmaceuticals, soaps, cosmetics and toiletries.
                </p>
            </div>

            <!-- Stats row -->
            <div class="stagger-grid grid grid-cols-3 gap-4 mt-10">
                @foreach([['10+','Years Experience'],['180T','Monthly Output'],['14+','Valued Clients']] as $s)
                <div class="text-center border border-brand-gold/25 py-5 hover:border-brand-gold transition-colors">
                    <div class="font-display text-brand-gold text-3xl mb-1">{{ $s[0] }}</div>
                    <p class="text-[10px] tracking-[0.12em] uppercase text-brand-mid/55">{{ $s[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Owner card — JAHANGIR AKHTAR -->
        <div class="reveal-left">
            <div class="bg-brand-dark p-10 border border-brand-gold/20 relative overflow-hidden">
                <!-- Corner accents -->
                <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-brand-gold/35" aria-hidden="true"></div>
                <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-brand-gold/35" aria-hidden="true"></div>

                <div class="w-16 h-16 bg-brand-gold/12 border-2 border-brand-gold/40 rounded-full flex items-center justify-center text-brand-gold font-display text-xl mb-6 flex-shrink-0">
                    JA
                </div>

                <h3 class="font-display text-white text-3xl mb-1 tracking-wide">Jahangir Akhtar</h3>
                <p class="text-brand-gold text-[10px] tracking-[0.22em] uppercase mb-6 font-semibold">Owner, AJ Packages</p>

                <figure>
                    <blockquote class="font-serif italic text-white/65 text-lg leading-relaxed border-l-2 border-brand-gold pl-5 mb-5">
                        "We are committed to delivering packaging solutions that protect your products and strengthen your brand — with quality, precision and dedication at every step."
                    </blockquote>
                </figure>

                <p class="text-white/40 text-sm leading-relaxed">
                    With extensive experience in corrugated packaging, his vision and leadership have guided A.J Packages to adopt ethical business practices and transparent dealings with every client.
                </p>

                <div class="mt-8 pt-6 border-t border-brand-gold/15 flex flex-wrap gap-4">
                    @foreach([['📍','F.B Industrial Area, Karachi'],['📞','0306-2464800'],['✉️','ajpackages10@gmail.com']] as $d)
                    <div class="flex items-center gap-2">
                        <span class="text-brand-gold text-sm" aria-hidden="true">{{ $d[0] }}</span>
                        <span class="text-white/45 text-xs">{{ $d[1] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ VALUES ══ -->
<section class="py-24 bg-brand-dark relative overflow-hidden" aria-labelledby="values-heading">
    <div class="absolute inset-0 grid-bg opacity-20" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">
        <div class="text-center mb-16 reveal-up">
            <div class="inline-flex items-center gap-3 mb-4 justify-center">
                <span class="w-8 h-px bg-brand-gold" aria-hidden="true"></span>
                <span class="text-brand-gold text-[10px] tracking-[0.22em] uppercase font-semibold">What Drives Us</span>
                <span class="w-8 h-px bg-brand-gold" aria-hidden="true"></span>
            </div>
            <h2 id="values-heading" class="font-display text-white" style="font-size:clamp(38px,5vw,64px)">
                OUR CORE <span class="text-brand-gold">VALUES</span>
            </h2>
        </div>

        <div class="stagger-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['🎯','Quality First','Every box passes rigorous GSM and moisture testing before leaving our facility.'],
                ['⚡','Precision','From die-cutting to flexo printing — accuracy built into every production step.'],
                ['🤝','Integrity','Transparent dealings and ethical business practices with every client, every time.'],
                ['🔧','Reliability','180 tons monthly output with backup power — we never miss your deadline.'],
            ] as $v)
            <div class="hover-line border border-brand-gold/15 p-8 hover:border-brand-gold/50 hover:bg-brand-gold/5 transition-all group">
                <div class="text-4xl mb-5" aria-hidden="true">{{ $v[0] }}</div>
                <h3 class="font-display text-brand-gold text-2xl mb-3 tracking-wide">{{ strtoupper($v[1]) }}</h3>
                <p class="text-white/50 text-sm leading-relaxed">{{ $v[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══ TIMELINE ══ -->
<section class="py-24 bg-brand-cream relative" aria-labelledby="timeline-heading">
    <div class="max-w-4xl mx-auto px-6 lg:px-10">
        <div class="text-center mb-14 reveal-up">
            <h2 id="timeline-heading" class="font-display text-brand-dark" style="font-size:clamp(38px,5vw,62px)">
                OUR <span class="text-brand-brown">JOURNEY</span>
            </h2>
        </div>
        <div class="relative">
            <!-- Vertical line -->
            <div class="absolute left-4 lg:left-1/2 top-0 bottom-0 w-px bg-brand-gold/25 -translate-x-1/2" aria-hidden="true"></div>

            <div class="space-y-10">
                @foreach([
                    ['2014','Foundation','A.J Packages was established in F.B Industrial Area, Karachi with a vision to deliver premium corrugated packaging.'],
                    ['2016','Expansion','Upgraded machinery fleet to 11+ industrial machines, increasing production capacity significantly.'],
                    ['2018','Major Clients','Secured partnerships with Gul Ahmed Textile Mills and Mustaqim Dyeing — Pakistan\'s leading industry names.'],
                    ['2020','Capacity Growth','Reached 180 tons monthly output with a skilled team of 45+ packaging professionals.'],
                    ['2024','10 Years Strong','Celebrating a decade of quality packaging with 14+ valued clients across multiple industries.'],
                ] as $i => $event)
                <div class="relative flex items-start gap-8 {{ $i%2===0 ? 'lg:flex-row' : 'lg:flex-row-reverse' }} reveal-up" data-delay="{{ $i * 0.1 }}">
                    <!-- Dot -->
                    <div class="absolute left-4 lg:left-1/2 w-3 h-3 bg-brand-gold rounded-full -translate-x-1/2 mt-1.5 flex-shrink-0 z-10" aria-hidden="true"></div>

                    <div class="pl-12 lg:pl-0 lg:w-1/2 {{ $i%2===0 ? 'lg:pr-12 lg:text-right' : 'lg:pl-12' }}">
                        <span class="font-display text-brand-gold text-3xl">{{ $event[0] }}</span>
                        <h3 class="font-display text-brand-dark text-xl mt-1 mb-2">{{ strtoupper($event[1]) }}</h3>
                        <p class="text-brand-mid/65 text-sm leading-relaxed">{{ $event[2] }}</p>
                    </div>
                    <div class="hidden lg:block lg:w-1/2"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ══ CTA ══ -->
<section class="py-20 bg-brand-gold text-center" aria-labelledby="about-cta">
    <div class="max-w-2xl mx-auto px-6 reveal-up">
        <h2 id="about-cta" class="font-display text-brand-dark text-5xl mb-4">WORK WITH US</h2>
        <p class="text-brand-dark/65 font-serif italic text-lg mb-8">
            Get a custom quote for your packaging needs — we respond within 24 hours.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('quote') }}" class="btn-shimmer bg-brand-dark text-brand-gold text-[11px] tracking-[0.15em] uppercase px-10 py-4 hover:bg-brand-rich transition-all font-bold inline-flex items-center gap-2 group">
                Request a Quote <span class="group-hover:translate-x-1 transition-transform" aria-hidden="true">→</span>
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-brand-dark text-brand-dark text-[11px] tracking-[0.15em] uppercase px-10 py-4 hover:bg-brand-dark hover:text-brand-gold transition-all font-semibold">
                Contact Us
            </a>
        </div>
    </div>
</section>

@endsection
