<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AJ Packages — Corrugated Box Manufacturers Karachi')</title>
    <meta name="description" content="@yield('meta_desc', 'AJ Packages manufactures premium corrugated boxes, die-cut boxes and display cartons in Karachi, Pakistan. 10+ years experience.')">
    <meta name="keywords" content="@yield('meta_keywords', 'corrugated boxes karachi, packaging company pakistan, AJ Packages')">
    <meta name="author" content="AJ Packages">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'AJ Packages')">
    <meta property="og:description" content="@yield('meta_desc', 'Premium corrugated packaging manufacturers in Karachi.')">
    <meta property="og:site_name" content="AJ Packages">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'AJ Packages')">
    <meta name="twitter:description" content="@yield('meta_desc', 'Premium corrugated packaging manufacturers in Karachi.')">
    <meta name="description" content="@yield('meta_description', 'AJ Packages — Leading corrugated box manufacturers in Karachi, Pakistan. Supplying premium packaging since 2014.')">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark:  '#150800',
                            rich:  '#2a1000',
                            mid:   '#5c2a00',
                            gold:  '#c9920a',
                            light: '#f0b429',
                            pale:  '#f7d98b',
                            cream: '#fdf6e3',
                        }
                    },
                    fontFamily: {
                        display: ['"Bebas Neue"', 'sans-serif'],
                        serif:   ['"Cormorant Garamond"', 'serif'],
                        body:    ['"DM Sans"', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- GSAP + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family:'DM Sans',sans-serif;
            background:#fdf6e3;
            color:#150800;
            overflow-x:hidden;
            cursor: auto; /* NORMAL ARROW CURSOR */
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width:4px; }
        ::-webkit-scrollbar-track { background:#150800; }
        ::-webkit-scrollbar-thumb { background:#c9920a; border-radius:2px; }

        /* Grid background */
        .grid-bg {
            background-image:
                linear-gradient(rgba(201,146,10,.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(201,146,10,.05) 1px, transparent 1px);
            background-size:60px 60px;
        }

        /* Nav links */
        .nav-link {
            position:relative;
            padding-bottom:4px;
        }
        .nav-link::after {
            content:'';
            position:absolute;
            bottom:0; left:50%;
            width:0; height:1.5px;
            background:linear-gradient(90deg, #c9920a, #f0b429);
            transition:width .35s ease, left .35s ease;
            border-radius:2px;
        }
        .nav-link:hover::after {
            width:100%; left:0;
        }
        .nav-link.active::after {
            width:100%; left:0;
        }
        .nav-link:hover {
            text-shadow: 0 0 20px rgba(201,146,10,0.4);
        }
        .nav-link.active {
            text-shadow: 0 0 20px rgba(201,146,10,0.5);
        }

        /* Particle canvas */
        #particles-canvas {
            position:absolute;
            inset:0;
            pointer-events:none;
            z-index:1;
        }

        /* Animated gradient border */
        .gold-border-animated {
            position:relative;
            overflow:hidden;
        }
        .gold-border-animated::before {
            content:'';
            position:absolute;
            inset:-2px;
            background: linear-gradient(90deg, #c9920a, #f0b429, #c9920a, #f0b429);
            background-size:300% 100%;
            animation: borderMove 3s linear infinite;
            z-index:-1;
        }
        @keyframes borderMove {
            0%   { background-position:0% 50%; }
            100% { background-position:300% 50%; }
        }

        /* Shimmer effect */
        .shimmer {
            position:relative;
            overflow:hidden;
        }
        .shimmer::after {
            content:'';
            position:absolute;
            top:0; left:-100%;
            width:60%; height:100%;
            background:linear-gradient(90deg, transparent, rgba(255,255,255,0.08), transparent);
            animation: shimmer 2.5s infinite;
        }
        @keyframes shimmer {
            0%   { left:-100%; }
            100% { left:200%; }
        }

        /* Marquee */
        .marquee-wrap { overflow:hidden; }
        .marquee-track {
            display:flex;
            width:max-content;
            animation: marquee 30s linear infinite;
        }
        .marquee-track:hover { animation-play-state:paused; }
        @keyframes marquee {
            from { transform:translateX(0); }
            to   { transform:translateX(-50%); }
        }

        /* Counter */
        .counter { font-family:'Bebas Neue',sans-serif; }

        /* Mobile menu */
        .mobile-nav {
            transform:translateX(100%);
            transition:transform .4s cubic-bezier(.4,0,.2,1);
        }
        .mobile-nav.open { transform:translateX(0); }

        /* Box 3D hover */
        .box-3d {
            transform-style:preserve-3d;
            transition:transform .4s ease, box-shadow .4s ease;
        }
        .box-3d:hover {
            transform:translateY(-8px) rotateX(3deg);
            box-shadow:0 24px 48px rgba(0,0,0,0.3), 0 0 0 1px rgba(201,146,10,0.3);
        }

        /* Typewriter cursor */
        .typewriter-cursor {
            display:inline-block;
            width:3px;
            height:1em;
            background:#c9920a;
            margin-left:4px;
            animation:blink .7s step-end infinite;
            vertical-align:middle;
        }
        @keyframes blink { 50% { opacity:0; } }

        /* Floating badge */
        @keyframes floatBadge {
            0%,100% { transform:translateY(0) rotate(-2deg); }
            50%      { transform:translateY(-10px) rotate(2deg); }
        }
        .float-badge { animation:floatBadge 4s ease-in-out infinite; }

        /* Page loader */
        #page-loader {
            position:fixed;
            inset:0;
            background:#150800;
            z-index:9999;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            gap:16px;
        }
        .loader-bar {
            width:200px; height:2px;
            background:rgba(201,146,10,0.2);
            overflow:hidden;
        }
        .loader-fill {
            height:100%;
            background:#c9920a;
            animation:load 1.2s ease forwards;
        }
        @keyframes load {
            from { width:0; }
            to   { width:100%; }
        }

        /* Reveal animations */
        .gsap-reveal { opacity:0; }

        /* Stats card glow */
        .stat-card:hover {
            box-shadow:0 0 30px rgba(201,146,10,0.15);
        }

        /* Product card */
        .product-card {
            transition:all .4s cubic-bezier(.4,0,.2,1);
        }
        .product-card:hover {
            transform:translateY(-6px);
            box-shadow:0 20px 60px rgba(0,0,0,0.2);
        }
        .product-card .card-line {
            position:absolute;
            bottom:0; left:0;
            height:2px; width:0;
            background:linear-gradient(90deg, #c9920a, #f0b429);
            transition:width .5s ease;
        }
        .product-card:hover .card-line { width:100%; }

        /* Section number watermark */
        .section-num {
            position:absolute;
            font-family:'Bebas Neue',sans-serif;
            font-size:200px;
            line-height:1;
            color:rgba(201,146,10,0.04);
            pointer-events:none;
            user-select:none;
            top:-20px;
            right:-20px;
        }

        /* Diagonal divider */
        .diagonal-divider {
            clip-path:polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        .diagonal-divider-reverse {
            clip-path:polygon(0 0, 100% 8%, 100% 100%, 0 100%);
        }

        /* Packaging process steps */
        .process-line {
            position:absolute;
            top:50%; left:0; right:0;
            height:1px;
            background:linear-gradient(90deg, transparent, rgba(201,146,10,0.3), transparent);
        }
    </style>

    @stack('styles')
</head>
<body x-data="{ mobileOpen: false }" class="font-body">

<!-- ══ PAGE LOADER ══ -->
<div id="page-loader">
    <div class="text-center">
        <div class="w-14 h-14 rounded-full border-2 border-brand-gold flex items-center justify-center text-brand-gold font-display text-lg mx-auto mb-4">AJ</div>
        <p class="text-brand-gold/60 text-[10px] tracking-[0.3em] uppercase mb-4">Loading</p>
        <div class="loader-bar"><div class="loader-fill"></div></div>
    </div>
</div>

<!-- ══ NAVBAR ══ -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-brand-dark/98 backdrop-blur-xl border-b border-brand-gold/15 shadow-lg shadow-black/20" id="navbar">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 flex items-center justify-between h-[72px] transition-all duration-300">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div class="w-11 h-11 rounded-full border-2 border-brand-gold flex items-center justify-center text-brand-gold font-display text-sm tracking-widest group-hover:bg-brand-gold group-hover:text-brand-dark transition-all duration-300">AJ</div>
            <div>
                <span class="font-serif font-semibold text-white text-lg tracking-wide">A.J <span class="text-brand-gold">Packages</span></span>
                <p class="text-brand-gold/60 text-[9px] tracking-[0.2em] uppercase -mt-0.5">The Packaging Professionals</p>
            </div>
        </a>

        <!-- Desktop Links -->
        <ul class="hidden lg:flex items-center gap-8">
            @php
                $navLinks = [
                    ['route'=>'home',           'label'=>'Home'],
                    ['route'=>'about',          'label'=>'About'],
                    ['route'=>'products.index', 'label'=>'Products'],
                    ['route'=>'infrastructure', 'label'=>'Machinery'],
                    ['route'=>'clients',        'label'=>'Clients'],
                    ['route'=>'contact',        'label'=>'Contact'],
                ];
            @endphp
            @foreach($navLinks as $link)
            <li>
                <a href="{{ route($link['route']) }}"
                   class="nav-link text-[11px] tracking-[0.15em] uppercase font-medium transition-colors duration-200
                          {{ request()->routeIs($link['route']) ? 'text-brand-gold active' : 'text-white/90 hover:text-brand-gold' }}">
                    {{ $link['label'] }}
                </a>
            </li>
            @endforeach
        </ul>

        <div class="flex items-center gap-4">
            <a href="{{ route('quote') }}" class="hidden lg:inline-flex items-center gap-2 bg-brand-gold text-brand-dark text-[11px] tracking-[0.15em] uppercase px-6 py-2.5 hover:bg-brand-light transition-all duration-300 font-bold shadow-md shadow-brand-gold/20 hover:shadow-brand-gold/40">
                Get a Quote →
            </a>
            <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 flex flex-col gap-1.5">
                <span class="w-6 h-0.5 bg-brand-gold transition-all duration-300" :class="mobileOpen ? 'rotate-45 translate-y-2' : ''"></span>
                <span class="w-6 h-0.5 bg-brand-gold transition-all duration-300" :class="mobileOpen ? 'opacity-0' : ''"></span>
                <span class="w-6 h-0.5 bg-brand-gold transition-all duration-300" :class="mobileOpen ? '-rotate-45 -translate-y-2' : ''"></span>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-nav fixed top-0 right-0 h-full w-72 bg-brand-rich z-40 flex flex-col pt-24 px-8 shadow-2xl lg:hidden"
     :class="mobileOpen ? 'open' : ''">
    <p class="text-brand-gold/40 text-[10px] tracking-[0.2em] uppercase mb-5">Navigation</p>
    <ul class="space-y-4 border-b border-brand-gold/15 pb-6 mb-6">
        @foreach($navLinks as $link)
        <li>
            <a href="{{ route($link['route']) }}" @click="mobileOpen=false"
               class="text-white/90 hover:text-brand-gold text-base tracking-wide transition-colors block py-1 font-medium {{ request()->routeIs($link['route']) ? 'text-brand-gold' : '' }}">
                {{ $link['label'] }}
            </a>
        </li>
        @endforeach
    </ul>
    <a href="{{ route('quote') }}" class="border border-brand-gold text-brand-gold text-center text-[11px] tracking-[0.15em] uppercase px-5 py-3 hover:bg-brand-gold hover:text-brand-dark transition-all">
        Get a Quote
    </a>
    <div class="mt-auto pb-10 space-y-2">
        <p class="text-white/60 text-xs">📞 0306-2464800</p>
        <p class="text-white/60 text-xs">📞 0312-2775872</p>
        <p class="text-white/60 text-xs">✉️ ajpackages10@gmail.com</p>
    </div>
</div>
<div @click="mobileOpen=false" x-show="mobileOpen" class="fixed inset-0 bg-black/50 z-30 lg:hidden" x-transition></div>

<!-- ══ MAIN ══ -->
<main>
    @yield('content')
</main>

<!-- ══ FOOTER ══ -->
<footer class="bg-brand-dark relative overflow-hidden">
    <div class="h-px bg-gradient-to-r from-transparent via-brand-gold to-transparent"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-10 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-full border-2 border-brand-gold flex items-center justify-center text-brand-gold font-display text-sm">AJ</div>
                    <div>
                        <p class="font-serif font-semibold text-white text-lg">A.J <span class="text-brand-gold">Packages</span></p>
                        <p class="text-brand-gold/40 text-[9px] tracking-[0.2em] uppercase">Est. 2014</p>
                    </div>
                </div>
                <p class="text-white/40 text-sm leading-relaxed font-light">
                    Manufacturing superior corrugated packaging solutions since 2014 — quality, precision, and dedication at every step.
                </p>
            </div>

            <div>
                <h4 class="text-[10px] tracking-[0.2em] uppercase text-brand-gold mb-5">Products</h4>
                <ul class="space-y-3">
                    @foreach(['corrugated-liner'=>'Corrugated Liner','brown-white-cartons'=>'Brown & White Cartons','die-cut-boxes'=>'Die-Cut Boxes','display-cartons'=>'Display Cartons','master-cartons'=>'Master Cartons','corrugated-sheets'=>'Corrugated Sheets'] as $slug => $name)
                    <li><a href="{{ route('products.show', $slug) }}" class="text-white/40 hover:text-brand-gold text-sm transition-colors">{{ $name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-[10px] tracking-[0.2em] uppercase text-brand-gold mb-5">Company</h4>
                <ul class="space-y-3">
                    @foreach(['about'=>'About Us','infrastructure'=>'Machinery & Infra','clients'=>'Our Clients','contact'=>'Contact','quote'=>'Request a Quote'] as $route => $label)
                    <li><a href="{{ route($route) }}" class="text-white/40 hover:text-brand-gold text-sm transition-colors">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-[10px] tracking-[0.2em] uppercase text-brand-gold mb-5">Get In Touch</h4>
                <ul class="space-y-4">
                    <li class="flex gap-3"><span class="text-brand-gold mt-0.5">📍</span><span class="text-white/40 text-sm leading-relaxed">F.B Industrial Area,<br>Karachi, Pakistan</span></li>
                    <li class="flex gap-3"><span class="text-brand-gold">📞</span><div><a href="tel:+923062464800" class="text-white/40 hover:text-brand-gold text-sm transition-colors block">0306-2464800</a><a href="tel:+923122775872" class="text-white/40 hover:text-brand-gold text-sm transition-colors block">0312-2775872</a></div></li>
                    <li class="flex gap-3"><span class="text-brand-gold">✉️</span><div><a href="mailto:ajpackages10@gmail.com" class="text-white/40 hover:text-brand-gold text-sm transition-colors block">ajpackages10@gmail.com</a><a href="mailto:jahangirrao46@gmail.com" class="text-white/40 hover:text-brand-gold text-sm transition-colors block">jahangirrao46@gmail.com</a></div></li>
                    <li class="flex gap-3"><span class="text-brand-gold">🏛️</span><span class="text-white/40 text-sm">NTN: A240441-6</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-6 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-white/25 text-xs">© {{ date('Y') }} A.J Packages. All rights reserved. Karachi, Pakistan.</p>
            <p class="text-white/20 text-xs">Corrugated Packaging Mfg. · Est. 2014</p>
        </div>
    </div>
</footer>

<!-- ══ GLOBAL SCRIPTS ══ -->
<script>
    // Page loader
    window.addEventListener('load', () => {
        setTimeout(() => {
            gsap.to('#page-loader', {
                opacity: 0,
                duration: 0.6,
                ease: 'power2.inOut',
                onComplete: () => {
                    document.getElementById('page-loader').style.display = 'none';
                    initAnimations();
                }
            });
        }, 1200);
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        var nav = document.getElementById('navbar');
        var inner = nav.querySelector('.max-w-7xl');
        if (window.scrollY > 60) {
            nav.style.borderBottomColor = 'rgba(201,146,10,0.30)';
            nav.style.background = 'rgba(21,8,0,0.99)';
            nav.style.boxShadow = '0 4px 30px rgba(0,0,0,0.4)';
            if (inner) inner.style.height = '60px';
        } else {
            nav.style.borderBottomColor = 'rgba(201,146,10,0.15)';
            nav.style.background = 'rgba(21,8,0,0.98)';
            nav.style.boxShadow = 'none';
            if (inner) inner.style.height = '72px';
        }
    });

    // Init GSAP animations
    function initAnimations() {
        gsap.registerPlugin(ScrollTrigger);

        // Scroll reveal - fade up
        gsap.utils.toArray('.gsap-reveal').forEach((el, i) => {
            gsap.fromTo(el,
                { opacity: 0, y: 40 },
                {
                    opacity: 1, y: 0,
                    duration: 0.9,
                    ease: 'power3.out',
                    delay: el.dataset.delay || 0,
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 88%',
                        once: true
                    }
                }
            );
        });

        // Scroll reveal - fade left
        gsap.utils.toArray('.gsap-left').forEach(el => {
            gsap.fromTo(el,
                { opacity: 0, x: 50 },
                {
                    opacity: 1, x: 0,
                    duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 88%',
                        once: true
                    }
                }
            );
        });

        // Stagger children
        gsap.utils.toArray('.gsap-stagger').forEach(parent => {
            const children = parent.children;
            gsap.fromTo(children,
                { opacity: 0, y: 30 },
                {
                    opacity: 1, y: 0,
                    duration: 0.7,
                    stagger: 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: parent,
                        start: 'top 85%',
                        once: true
                    }
                }
            );
        });

        // Animated counters
        document.querySelectorAll('[data-target]').forEach(el => {
            const raw    = el.dataset.target;
            const suffix = raw.replace(/[\d.]/g, '');
            const num    = parseFloat(raw);

            ScrollTrigger.create({
                trigger: el,
                start: 'top 85%',
                once: true,
                onEnter: () => {
                    gsap.to({ val: 0 }, {
                        val: num,
                        duration: 2,
                        ease: 'power2.out',
                        onUpdate: function() {
                            el.textContent = (Number.isInteger(num)
                                ? Math.floor(this.targets()[0].val)
                                : this.targets()[0].val.toFixed(1)) + suffix;
                        }
                    });
                }
            });
        });

        // Parallax on hero
        const heroText = document.querySelector('.hero-parallax');
        if (heroText) {
            gsap.to(heroText, {
                y: -80,
                ease: 'none',
                scrollTrigger: {
                    trigger: heroText,
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                }
            });
        }
    }
</script>

@stack('scripts')
</body>
</html>
