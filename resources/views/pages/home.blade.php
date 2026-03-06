@extends('layouts.app')
@section('title', 'AJ Packages — Premium Corrugated Packaging Karachi')
@section('meta_desc', 'AJ Packages manufactures premium corrugated boxes, die-cut packaging and display cartons in Karachi. 10+ years experience, 180T monthly output. Call 0306-2464800.')
@section('meta_keywords', 'corrugated boxes karachi, packaging company pakistan, die cut boxes karachi, display cartons, master cartons, AJ Packages')

@section('content')

<!-- HERO -->
<section class="min-h-screen bg-brand-dark relative flex items-center overflow-hidden pt-20">
    <div class="absolute inset-0 grid-bg"></div>
    <div class="absolute inset-0" style="background:radial-gradient(ellipse 65% 70% at 70% 50%, rgba(92,42,0,0.6) 0%, transparent 60%), radial-gradient(ellipse 40% 50% at 5% 95%, rgba(201,146,10,0.06) 0%, transparent 50%)"></div>
    <canvas id="particles-canvas"></canvas>

    <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full py-20 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10">
        <div class="hero-parallax">
            <div class="hero-tag inline-flex items-center gap-3 border border-brand-gold/35 px-4 py-2 mb-8 opacity-0">
                <span class="w-5 h-px bg-brand-gold"></span>
                <span class="text-brand-gold text-[10px] tracking-[0.25em] uppercase font-medium">Est. 2014 · Karachi, Pakistan</span>
            </div>
            <h1 class="hero-title font-display text-white leading-none mb-6 opacity-0" style="font-size:clamp(64px,9vw,118px)">
                THE<br>
                <span class="text-brand-gold" id="typewriter-word">PACKAGING</span><br>
                PROFESSIONALS
            </h1>
            <p class="hero-sub font-serif italic text-white/50 text-xl leading-relaxed mb-10 max-w-lg opacity-0">
                Manufacturing superior corrugated boxes, die-cut packaging &amp; display cartons — protecting your products since 2014.
            </p>
            <div class="hero-btns flex flex-wrap gap-4 opacity-0">
                <a href="{{ route('products.index') }}" class="relative overflow-hidden bg-brand-gold text-brand-dark px-8 py-4 text-[11px] tracking-[0.15em] uppercase font-bold hover:bg-brand-light transition-all duration-300 shimmer group">
                    <span class="relative z-10 flex items-center gap-2">Explore Products <span class="group-hover:translate-x-1 transition-transform inline-block">→</span></span>
                </a>
                <a href="{{ route('quote') }}" class="border border-white/25 text-white/70 px-8 py-4 text-[11px] tracking-[0.15em] uppercase font-medium hover:border-brand-gold hover:text-brand-gold transition-all duration-300">
                    Request a Quote
                </a>
            </div>
            <div class="hero-scroll mt-16 flex items-center gap-4 opacity-0">
                <div class="w-px h-12 bg-gradient-to-b from-brand-gold/50 to-transparent"></div>
                <p class="text-[9px] tracking-[0.3em] uppercase text-white/25">Scroll to explore</p>
            </div>
        </div>

        <div class="hero-stats grid grid-cols-2 gap-0.5 opacity-0">
            @foreach($stats as $i => $stat)
            <div class="stat-card bg-white/[0.03] border border-brand-gold/12 p-8 hover:bg-brand-gold/8 hover:border-brand-gold/40 transition-all duration-400 cursor-default relative overflow-hidden shimmer">
                <div class="font-display text-brand-gold leading-none mb-3" style="font-size:clamp(44px,4.5vw,68px)">
                    <span class="counter" data-target="{{ $stat['number'] }}">0</span>
                </div>
                <p class="text-[10px] tracking-[0.2em] uppercase text-white/35">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- MARQUEE -->
<div class="bg-brand-gold py-4 overflow-hidden relative">
    <div class="marquee-wrap">
        <div class="marquee-track">
            @foreach(range(1,2) as $r)
            @foreach(['Corrugated Boxes','◆','Die-Cut Packaging','◆','Display Cartons','◆','Master Cartons','◆','Corrugated Liner','◆','Custom Sizes Available','◆','Brown & White Cartons','◆','Corrugated Sheets','◆','Est. 2014 — Karachi','◆'] as $item)
            <span class="font-display text-brand-dark text-base tracking-[0.15em] px-8">{{ $item }}</span>
            @endforeach
            @endforeach
        </div>
    </div>
</div>

<!-- ABOUT INTRO -->
<section class="py-32 bg-brand-cream relative overflow-hidden diagonal-divider">
    <span class="section-num">01</span>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        <div class="gsap-reveal">
            <div class="inline-flex items-center gap-3 mb-6">
                <span class="w-8 h-px bg-brand-gold"></span>
                <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">Who We Are</span>
            </div>
            <h2 class="font-display text-brand-dark leading-none mb-8" style="font-size:clamp(44px,5vw,70px)">
                A DECADE OF<br><span class="text-brand-mid">PACKAGING<br>EXCELLENCE</span>
            </h2>
            <p class="text-brand-mid/70 leading-relaxed mb-5 font-light text-base">
                A.J Packages is a leading firm in the manufacturing of superior quality corrugated boxes — specializing in corrugated boxes, die-cut boxes and display cartons since 2014.
            </p>
            <p class="text-brand-mid/70 leading-relaxed mb-8 font-light text-base">
                Our packaging serves garments, edible oils, pharmaceuticals, cosmetics, textiles and industrial goods across Pakistan's top companies.
            </p>
            <blockquote class="border-l-2 border-brand-gold pl-6 py-1">
                <p class="font-serif italic text-brand-dark/75 text-lg leading-relaxed mb-3">
                    "Committed to delivering packaging solutions that protect your products and strengthen your brand — with quality, precision and dedication at every step."
                </p>
                <div class="flex items-center gap-3">
                    <span class="w-6 h-px bg-brand-gold"></span>
                    <div>
                        <p class="text-[11px] tracking-[0.1em] uppercase font-semibold text-brand-gold">Jahangir Akhtar</p>
                        <p class="text-[10px] text-brand-mid/50 tracking-wider">Owner, AJ Packages</p>
                    </div>
                </div>
            </blockquote>
        </div>
        <div class="gsap-stagger grid grid-cols-2 gap-4">
            @foreach([
                ['🏭','15K','Sq. Ft. Facility'],
                ['⚙️','11+','Machines'],
                ['👥','45+','Employees'],
                ['📦','180T','Monthly Output'],
            ] as $c)
            <div class="box-3d bg-white border border-brand-gold/15 p-7 hover:border-brand-gold/50 transition-all">
                <div class="text-3xl mb-4">{{ $c[0] }}</div>
                <div class="font-display text-brand-gold text-4xl mb-1">{{ $c[1] }}</div>
                <p class="text-brand-dark text-sm font-medium leading-tight">{{ $c[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- PACKAGING PROCESS -->
<section class="py-28 bg-brand-dark relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-25"></div>
    <span class="section-num">02</span>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="text-center mb-16 gsap-reveal">
            <div class="inline-flex items-center gap-3 mb-4 justify-center">
                <span class="w-8 h-px bg-brand-gold"></span>
                <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">How We Work</span>
                <span class="w-8 h-px bg-brand-gold"></span>
            </div>
            <h2 class="font-display text-white" style="font-size:clamp(40px,5vw,66px)">OUR <span class="text-brand-gold">PRODUCTION PROCESS</span></h2>
        </div>
        <div class="relative gsap-stagger">
            <div class="process-line hidden lg:block"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['01','📋','Order & Design','Custom dimensions confirmed, GSM specs locked in.'],
                    ['02','🏗️','Raw Material','Premium kraft and white board sourced and tested.'],
                    ['03','⚙️','Production','Corrugation, die-cutting, printing — precision at every step.'],
                    ['04','✅','Quality & Dispatch','GSM + moisture tested, packed and dispatched on time.'],
                ] as $step)
                <div class="relative bg-white/[0.04] border border-brand-gold/15 p-8 hover:border-brand-gold/50 hover:bg-brand-gold/6 transition-all duration-400 group">
                    <div class="font-display text-brand-gold/20 text-6xl mb-4 group-hover:text-brand-gold/40 transition-colors">{{ $step[0] }}</div>
                    <div class="text-3xl mb-4">{{ $step[1] }}</div>
                    <h3 class="font-display text-white text-xl mb-3 group-hover:text-brand-gold transition-colors">{{ strtoupper($step[2]) }}</h3>
                    <p class="text-white/35 text-sm leading-relaxed">{{ $step[3] }}</p>
                    <div class="absolute bottom-0 left-0 h-0.5 w-0 bg-brand-gold group-hover:w-full transition-all duration-500"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="py-32 bg-brand-cream relative overflow-hidden">
    <span class="section-num" style="color:rgba(92,42,0,0.05)">03</span>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14 gsap-reveal">
            <div>
                <div class="inline-flex items-center gap-3 mb-4">
                    <span class="w-8 h-px bg-brand-gold"></span>
                    <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">What We Make</span>
                </div>
                <h2 class="font-display text-brand-dark leading-none" style="font-size:clamp(44px,5vw,70px)">OUR<br><span class="text-brand-mid">PRODUCT RANGE</span></h2>
            </div>
            <a href="{{ route('products.index') }}" class="self-start border border-brand-gold/40 text-brand-gold text-[11px] tracking-[0.15em] uppercase px-6 py-3 hover:bg-brand-gold hover:text-brand-dark transition-all">View All →</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 gsap-stagger">
            @foreach($products as $i => $product)
            <a href="{{ route('products.show', $product['slug'] ?? str_replace([' ','&','/'],'-',strtolower($product['name']))) }}" class="product-card group relative bg-white border border-brand-gold/12 overflow-hidden block">
                <div class="card-line"></div>
                <div class="h-48 bg-gradient-to-br from-brand-cream to-brand-gold/8 flex items-center justify-center relative overflow-hidden">
                    @if(file_exists(public_path('images/'.$product['image'])))
                    <img src="{{ asset('images/'.$product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    @else
                    <span class="text-7xl opacity-25 group-hover:scale-110 group-hover:opacity-40 transition-all duration-500">{{ $product['icon'] }}</span>
                    @endif
                    <div class="absolute top-3 left-3 bg-brand-dark/80 text-brand-gold font-display text-xs px-3 py-1">0{{ $i+1 }}</div>
                </div>
                <div class="p-7">
                    <h3 class="font-display text-brand-dark text-2xl mb-2 group-hover:text-brand-gold transition-colors">{{ $product['name'] }}</h3>
                    <p class="text-brand-mid/55 text-sm leading-relaxed mb-5">{{ $product['description'] }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] tracking-[0.12em] uppercase border border-brand-gold/25 text-brand-gold px-3 py-1">{{ $product['plies'] ?? '3-7 Ply' }}</span>
                        <span class="text-brand-gold text-sm font-medium flex items-center gap-1 group-hover:gap-2 transition-all">Details →</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-20 gsap-reveal">
            <h3 class="font-display text-brand-dark text-3xl mb-8">BOX RANGE <span class="text-brand-mid">BY PLY</span></h3>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-brand-dark">
                            <th class="text-left text-[10px] tracking-[0.2em] uppercase text-brand-gold py-4 px-6 font-medium">Type</th>
                            <th class="text-left text-[10px] tracking-[0.2em] uppercase text-brand-gold py-4 px-6 font-medium">Layers</th>
                            <th class="text-left text-[10px] tracking-[0.2em] uppercase text-brand-gold py-4 px-6 font-medium">Strength</th>
                            <th class="text-left text-[10px] tracking-[0.2em] uppercase text-brand-gold py-4 px-6 font-medium">Common Uses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                            ['3 Ply','1 flute + 2 liners','Light Duty','green','Pharma, bakery, e-commerce'],
                            ['5 Ply','2 flutes + 3 liners','Medium Duty','yellow','Food, beverages, electronics'],
                            ['7 Ply','3 flutes + 4 liners','Heavy Duty','red','Bulk, machinery, oil drums, exports'],
                        ] as $row)
                        <tr class="border border-brand-gold/10 hover:bg-brand-gold/4 transition-colors">
                            <td class="py-5 px-6 font-display text-brand-dark text-xl">{{ $row[0] }}</td>
                            <td class="py-5 px-6 text-brand-mid/60 text-sm">{{ $row[1] }}</td>
                            <td class="py-5 px-6"><span class="text-[10px] tracking-[0.1em] uppercase px-3 py-1 border {{ $row[3]==='green' ? 'border-green-500/40 text-green-600' : ($row[3]==='yellow' ? 'border-yellow-600/40 text-yellow-600' : 'border-red-500/40 text-red-600') }}">{{ $row[2] }}</span></td>
                            <td class="py-5 px-6 text-brand-mid/60 text-sm">{{ $row[4] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-28 bg-brand-dark relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-20"></div>
    <span class="section-num">04</span>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="text-center mb-14 gsap-reveal">
            <div class="inline-flex items-center gap-3 mb-4 justify-center">
                <span class="w-8 h-px bg-brand-gold"></span>
                <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">Why Choose Us</span>
                <span class="w-8 h-px bg-brand-gold"></span>
            </div>
            <h2 class="font-display text-white" style="font-size:clamp(40px,5vw,66px)">THE <span class="text-brand-gold">AJ PACKAGES</span> ADVANTAGE</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 gsap-stagger">
            @foreach([
                ['🎯','Precision Manufacturing','Every box is cut, folded and finished with industrial-grade machinery ensuring dimensional accuracy.'],
                ['🔬','Quality Testing','GSM paper weight and moisture content tested at every production run — no compromises.'],
                ['📐','Custom Sizes','Standard or tailor-made — we match your exact dimensions. No order too specific.'],
                ['⚡','Fast Turnaround','180 tons monthly capacity backed by diesel generator power — we never miss a deadline.'],
                ['🌿','Durable Materials','Premium kraft and white board sourced for maximum strength, moisture resistance and printability.'],
                ['🤝','Trusted Partners','Proudly serving Gul Ahmed Textile, Mustaqim Dyeing and 14+ valued clients across Pakistan.'],
            ] as $w)
            <div class="border border-brand-gold/12 p-8 hover:border-brand-gold/45 hover:bg-brand-gold/5 transition-all duration-400 group">
                <div class="text-4xl mb-5">{{ $w[0] }}</div>
                <h3 class="font-display text-brand-gold text-xl mb-3">{{ strtoupper($w[1]) }}</h3>
                <p class="text-white/40 text-sm leading-relaxed">{{ $w[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CLIENTS -->
<section class="py-28 bg-brand-rich relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-15"></div>
    <span class="section-num">05</span>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="text-center mb-14 gsap-reveal">
            <div class="inline-flex items-center gap-3 mb-4 justify-center">
                <span class="w-8 h-px bg-brand-gold"></span>
                <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">Our Partners</span>
                <span class="w-8 h-px bg-brand-gold"></span>
            </div>
            <h2 class="font-display text-white" style="font-size:clamp(40px,5vw,66px)">VALUED <span class="text-brand-gold">CLIENTELE</span></h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 gsap-stagger">
            @foreach(['Gul Ahmed Textile Mills Ltd','Mustaqim Dyeing & Printing Industries (Pvt) Ltd'] as $fc)
            <div class="gold-border-animated bg-brand-dark p-1">
                <div class="bg-brand-dark px-7 py-5 flex items-center gap-3">
                    <span class="text-brand-gold text-xl">★</span>
                    <div>
                        <p class="text-white font-medium text-base">{{ $fc }}</p>
                        <p class="text-brand-gold/40 text-[10px] tracking-[0.15em] uppercase mt-0.5">Premium Partner</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 gsap-stagger">
            @foreach(array_slice($clients, 2) as $client)
            <div class="border border-white/8 px-4 py-4 text-white/40 text-sm hover:border-brand-gold/40 hover:text-white/70 transition-all text-center hover:bg-brand-gold/5">{{ $client }}</div>
            @endforeach
        </div>
        <div class="text-center mt-12 gsap-reveal">
            <a href="{{ route('clients') }}" class="border border-brand-gold/40 text-brand-gold text-[11px] tracking-[0.15em] uppercase px-8 py-3 hover:bg-brand-gold hover:text-brand-dark transition-all inline-block">View All Clients →</a>
        </div>
    </div>
</section>

<!-- CTA BANNER -->
<section class="py-28 bg-brand-gold relative overflow-hidden">
    <div class="absolute inset-0" style="background:linear-gradient(135deg, rgba(0,0,0,0.1) 0%, transparent 50%, rgba(0,0,0,0.05) 100%)"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative gsap-reveal">
        <div class="float-badge inline-flex items-center gap-2 bg-brand-dark/15 border border-brand-dark/20 px-5 py-2 mb-8">
            <span class="text-brand-dark text-[10px] tracking-[0.2em] uppercase font-medium">Free Custom Quote</span>
        </div>
        <h2 class="font-display text-brand-dark leading-none mb-6" style="font-size:clamp(48px,6vw,82px)">READY TO PACKAGE<br>YOUR PRODUCTS?</h2>
        <p class="text-brand-dark/60 text-lg font-serif italic mb-10 max-w-xl mx-auto">Get a custom quote tailored to your exact dimensions, ply requirement, and quantity.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('quote') }}" class="bg-brand-dark text-brand-gold text-[11px] tracking-[0.15em] uppercase px-10 py-4 hover:bg-brand-rich transition-all font-semibold shimmer">Request a Free Quote →</a>
            <a href="tel:+923062464800" class="border-2 border-brand-dark text-brand-dark text-[11px] tracking-[0.15em] uppercase px-10 py-4 hover:bg-brand-dark hover:text-brand-gold transition-all font-medium">Call: 0306-2464800</a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
(function() {
    // Hero entrance — NO arrow functions, NO backticks, NO const/let
    gsap.timeline({ delay: 1.3 })
        .to('.hero-tag',   { opacity:1, y:0, duration:0.7, ease:'power3.out' }, 0)
        .fromTo('.hero-title', { opacity:0, y:50 }, { opacity:1, y:0, duration:0.9, ease:'power3.out' }, 0.2)
        .fromTo('.hero-sub',   { opacity:0, y:30 }, { opacity:1, y:0, duration:0.8, ease:'power3.out' }, 0.45)
        .fromTo('.hero-btns',  { opacity:0, y:20 }, { opacity:1, y:0, duration:0.7, ease:'power3.out' }, 0.65)
        .fromTo('.hero-scroll',{ opacity:0 },        { opacity:1, duration:0.7 }, 0.9)
        .fromTo('.hero-stats', { opacity:0, x:40 },  { opacity:1, x:0, duration:0.9, ease:'power3.out' }, 0.4);

    // Typewriter
    var words = ['PACKAGING', 'CORRUGATED', 'DIE-CUT', 'DISPLAY', 'CUSTOM'];
    var wi = 0;
    var twEl = document.getElementById('typewriter-word');
    if (twEl) {
        function typeWord(word, cb) {
            twEl.textContent = '';
            var i = 0;
            var t = setInterval(function() {
                twEl.textContent += word[i++];
                if (i >= word.length) { clearInterval(t); setTimeout(cb, 2200); }
            }, 60);
        }
        function eraseWord(cb) {
            var t = setInterval(function() {
                twEl.textContent = twEl.textContent.slice(0,-1);
                if (!twEl.textContent) { clearInterval(t); cb(); }
            }, 40);
        }
        function cycle() {
            wi = (wi + 1) % words.length;
            eraseWord(function() { typeWord(words[wi], cycle); });
        }
        setTimeout(function() { typeWord(words[0], cycle); }, 3000);
    }

    // Particle canvas
    var canvas = document.getElementById('particles-canvas');
    if (!canvas) return;
    var ctx = canvas.getContext('2d');
    var W, H;
    var particles = [];

    function resize() {
        W = canvas.width  = canvas.offsetWidth;
        H = canvas.height = canvas.offsetHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    for (var i = 0; i < 55; i++) {
        particles.push({
            x:  Math.random() * 1920,
            y:  Math.random() * 900,
            r:  Math.random() * 1.8 + 0.3,
            vx: (Math.random() - 0.5) * 0.4,
            vy: (Math.random() - 0.5) * 0.4,
            o:  Math.random() * 0.25 + 0.05
        });
    }

    function drawParticles() {
        ctx.clearRect(0, 0, W, H);
        for (var pi = 0; pi < particles.length; pi++) {
            var p = particles[pi];
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(201,146,10,' + p.o + ')';
            ctx.fill();
            p.x += p.vx; p.y += p.vy;
            if (p.x < 0) p.x = W; if (p.x > W) p.x = 0;
            if (p.y < 0) p.y = H; if (p.y > H) p.y = 0;
        }
        for (var ai = 0; ai < particles.length; ai++) {
            for (var bi = ai + 1; bi < particles.length; bi++) {
                var dx = particles[ai].x - particles[bi].x;
                var dy = particles[ai].y - particles[bi].y;
                var d  = Math.sqrt(dx * dx + dy * dy);
                if (d < 120) {
                    ctx.beginPath();
                    ctx.moveTo(particles[ai].x, particles[ai].y);
                    ctx.lineTo(particles[bi].x, particles[bi].y);
                    ctx.strokeStyle = 'rgba(201,146,10,' + (0.06 * (1 - d / 120)) + ')';
                    ctx.lineWidth = 0.5;
                    ctx.stroke();
                }
            }
        }
        requestAnimationFrame(drawParticles);
    }
    drawParticles();
})();
</script>
@endpush
