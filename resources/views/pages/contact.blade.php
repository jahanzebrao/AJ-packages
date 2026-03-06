@extends('layouts.app')
@section('title', 'Contact AJ Packages — Karachi Corrugated Box Manufacturer')
@section('meta_desc', 'Contact AJ Packages for corrugated box orders and packaging quotes. Call 0306-2464800 or 0312-2775872. Located in F.B Industrial Area, Karachi.')
@section('meta_keywords', 'contact AJ Packages, corrugated boxes karachi contact, packaging quote karachi, AJ Packages phone number')

@section('content')

<!-- PAGE HEADER -->
<div class="bg-brand-dark pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-30"></div>
    <div class="absolute inset-0" style="background:radial-gradient(ellipse 50% 70% at 75% 50%, rgba(74,32,0,0.5) 0%, transparent 60%)"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">
        <div class="inline-flex items-center gap-3 mb-5">
            <span class="w-8 h-px bg-brand-gold"></span>
            <span class="text-brand-gold text-[10px] tracking-[0.22em] uppercase font-semibold">Get In Touch</span>
        </div>
        <h1 class="font-display text-white leading-none mb-4" style="font-size:clamp(52px,7vw,96px)">
            CONTACT<br><span class="text-brand-gold">US</span>
        </h1>
        <p class="font-serif italic text-white/50 max-w-lg" style="font-size:clamp(15px,2vw,19px)">
            We respond within 24 hours. For urgent orders, call us directly.
        </p>
    </div>
</div>

<!-- CONTACT BODY -->
<section class="py-24 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid grid-cols-1 lg:grid-cols-2 gap-16">

        <!-- LEFT: Info -->
        <div class="gsap-reveal">
            <h2 class="font-display text-brand-dark text-4xl mb-10 tracking-wide">
                DIRECT <span class="text-brand-mid">CONTACT</span>
            </h2>

            <div class="space-y-3 mb-10">
                @foreach([
                    ['📍', 'Address',    'F.B Industrial Area, Karachi, Pakistan', null, false],
                    ['👤', 'Owner',      'Jahangir Akhtar', null, false],
                    ['📞', 'Phone 1',    '0306-2464800', 'tel:+923062464800', false],
                    ['📞', 'Phone 2',    '0312-2775872', 'tel:+923122775872', false],
                    ['✉️', 'Email',      'ajpackages10@gmail.com', 'mailto:ajpackages10@gmail.com', false],
                    ['✉️', 'Email 2',    'jahangirrao46@gmail.com', 'mailto:jahangirrao46@gmail.com', false],
                    ['💬', 'WhatsApp',   'Chat on WhatsApp', 'https://wa.me/923062464800', true],
                    ['🏛️', 'NTN Number', 'A240441-6', null, false],
                ] as $info)
                <div class="flex gap-4 border border-brand-gold/15 hover:border-brand-gold/50 p-5 transition-all group bg-white hover:bg-brand-gold/3">
                    <span class="text-xl mt-0.5 flex-shrink-0">{{ $info[0] }}</span>
                    <div class="min-w-0">
                        <p class="text-brand-gold text-[10px] tracking-[0.15em] uppercase font-semibold mb-1">{{ $info[1] }}</p>
                        @if($info[3])
                            <a href="{{ $info[3] }}" {{ $info[4] ? 'target=_blank rel=noopener' : '' }}
                               class="text-brand-dark font-medium hover:text-brand-gold transition-colors text-sm break-all">
                                {{ $info[2] }}
                            </a>
                        @else
                            <p class="text-brand-dark font-medium text-sm">{{ $info[2] }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Registration card -->
            <div class="bg-brand-dark p-8 border border-brand-gold/20 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 border-t-2 border-r-2 border-brand-gold/30"></div>
                <div class="absolute bottom-0 left-0 w-16 h-16 border-b-2 border-l-2 border-brand-gold/30"></div>
                <h3 class="font-display text-brand-gold text-2xl mb-5 tracking-wide">REGISTRATION DETAILS</h3>
                <div class="grid grid-cols-2 gap-5">
                    @foreach([
                        ['Industry',     'Corrugated Packaging Mfg.'],
                        ['Established',  '2014'],
                        ['Location',     'Karachi, Pakistan'],
                        ['NTN',          'A240441-6'],
                    ] as $r)
                    <div>
                        <p class="text-white/35 text-[10px] tracking-[0.15em] uppercase mb-1">{{ $r[0] }}</p>
                        <p class="text-white font-medium text-sm">{{ $r[1] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- RIGHT: Form -->
        <div class="gsap-reveal">
            <h2 class="font-display text-brand-dark text-4xl mb-10 tracking-wide">
                SEND A <span class="text-brand-mid">MESSAGE</span>
            </h2>

            @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-400/50 text-emerald-700 px-5 py-4 mb-7 text-sm flex items-start gap-3">
                <span class="text-emerald-500 mt-0.5">✅</span>
                <span>{{ session('success') }}</span>
            </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Row 1: Name + Email -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="c_name" class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/70 mb-2 font-semibold">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="c_name" name="name"
                               value="{{ old('name') }}" required autocomplete="name"
                               placeholder="Your full name"
                               class="w-full border border-brand-gold/25 bg-white focus:border-brand-gold focus:outline-none focus:ring-1 focus:ring-brand-gold/30 px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition-all @error('name') border-red-400 @enderror">
                        @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="c_email" class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/70 mb-2 font-semibold">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="c_email" name="email"
                               value="{{ old('email') }}" required autocomplete="email"
                               placeholder="your@email.com"
                               class="w-full border border-brand-gold/25 bg-white focus:border-brand-gold focus:outline-none focus:ring-1 focus:ring-brand-gold/30 px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition-all @error('email') border-red-400 @enderror">
                        @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>

                <!-- Row 2: Phone + Subject -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="c_phone" class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/70 mb-2 font-semibold">
                            Phone Number
                        </label>
                        <input type="tel" id="c_phone" name="phone"
                               value="{{ old('phone') }}" autocomplete="tel"
                               placeholder="03xx-xxxxxxx"
                               class="w-full border border-brand-gold/25 bg-white focus:border-brand-gold focus:outline-none focus:ring-1 focus:ring-brand-gold/30 px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition-all">
                    </div>
                    <div>
                        <label for="c_subject" class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/70 mb-2 font-semibold">
                            Subject <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="c_subject" name="subject"
                               value="{{ old('subject') }}" required
                               placeholder="How can we help?"
                               class="w-full border border-brand-gold/25 bg-white focus:border-brand-gold focus:outline-none focus:ring-1 focus:ring-brand-gold/30 px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition-all @error('subject') border-red-400 @enderror">
                        @error('subject')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>

                <!-- Row 3: Message -->
                <div>
                    <label for="c_message" class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/70 mb-2 font-semibold">
                        Message <span class="text-red-500">*</span>
                    </label>
                    <textarea id="c_message" name="message" rows="6" required
                              placeholder="Describe your packaging requirements..."
                              class="w-full border border-brand-gold/25 bg-white focus:border-brand-gold focus:outline-none focus:ring-1 focus:ring-brand-gold/30 px-4 py-3 text-sm text-brand-dark placeholder-brand-dark/30 transition-all resize-none @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                    @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Honeypot -->
                <div class="hidden" aria-hidden="true">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full bg-brand-gold text-brand-dark py-4 text-[12px] tracking-[0.2em] uppercase font-bold hover:bg-brand-light transition-all duration-300 hover:-translate-y-0.5 shadow-md shadow-brand-gold/20 hover:shadow-brand-gold/40">
                    Send Message →
                </button>

                <p class="text-brand-mid/50 text-xs text-center">
                    We respond within 24 hours. For urgent inquiries call
                    <a href="tel:+923062464800" class="text-brand-gold hover:underline font-medium">0306-2464800</a>.
                </p>
            </form>
        </div>
    </div>
</section>

<!-- BOTTOM CTA -->
<section class="py-16 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <p class="text-white/40 text-[10px] tracking-[0.2em] uppercase mb-1">Prefer to talk?</p>
            <p class="font-display text-white text-3xl">CALL US DIRECTLY</p>
        </div>
        <div class="flex flex-wrap gap-4">
            <a href="tel:+923062464800" class="bg-brand-gold text-brand-dark px-8 py-3 font-bold text-[11px] tracking-[0.15em] uppercase hover:bg-brand-light transition-all">
                📞 0306-2464800
            </a>
            <a href="tel:+923122775872" class="border border-brand-gold/40 text-brand-gold px-8 py-3 text-[11px] tracking-[0.15em] uppercase hover:bg-brand-gold hover:text-brand-dark transition-all">
                📞 0312-2775872
            </a>
            <a href="https://wa.me/923062464800" target="_blank" rel="noopener" class="border border-green-500/40 text-green-400 px-8 py-3 text-[11px] tracking-[0.15em] uppercase hover:bg-green-500 hover:text-white transition-all">
                💬 WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection
