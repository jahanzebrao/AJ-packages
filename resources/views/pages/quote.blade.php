@extends('layouts.app')
@section('title', 'Request a Packaging Quote — AJ Packages Karachi')
@section('meta_desc', 'Request a free custom packaging quote from AJ Packages. Corrugated boxes, die-cut boxes and display cartons. Custom sizes available. Based in Karachi, Pakistan.')
@section('meta_keywords', 'packaging quote karachi, corrugated box quote pakistan, custom box quote, AJ Packages quote')

@section('content')

<div class="bg-brand-dark pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 grid-bg opacity-30"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative">
        <div class="inline-flex items-center gap-3 mb-5">
            <span class="w-8 h-px bg-brand-gold"></span>
            <span class="text-brand-gold text-[10px] tracking-[0.2em] uppercase">Free Quote</span>
        </div>
        <h1 class="font-display text-white leading-none mb-4" style="font-size:clamp(56px,7vw,100px)">REQUEST<br><span class="text-brand-gold">A QUOTE</span></h1>
        <p class="font-serif italic text-white/40 text-lg">Tell us your requirements and we'll prepare a custom quote within 24 hours.</p>
    </div>
</div>

<section class="py-24 bg-brand-cream">
    <div class="max-w-3xl mx-auto px-6">

        @if(session('success'))
        <div class="bg-green-50 border border-green-400/40 text-green-700 px-5 py-4 mb-8 text-sm">
            ✅ {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('quote.send') }}" method="POST" class="space-y-6 reveal">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Full Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                           class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark @error('name') border-red-400 @enderror">
                    @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Company Name *</label>
                    <input type="text" name="company" value="{{ old('company') }}" required
                           class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark @error('company') border-red-400 @enderror">
                    @error('company')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Email Address *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark @error('email') border-red-400 @enderror">
                    @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Phone Number *</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" required
                           class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark @error('phone') border-red-400 @enderror">
                    @error('phone')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Product Type *</label>
                    <select name="product_type" required
                            class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark @error('product_type') border-red-400 @enderror">
                        <option value="">Select a product...</option>
                        @foreach(['Corrugated Liner','Brown & White Cartons','Die-Cut Boxes','Display Cartons','Master Cartons','Corrugated Sheets','Custom / Multiple Products'] as $p)
                        <option value="{{ $p }}" {{ old('product_type')===$p ? 'selected' : '' }}>{{ $p }}</option>
                        @endforeach
                    </select>
                    @error('product_type')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Ply Requirement *</label>
                    <select name="ply" required
                            class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark @error('ply') border-red-400 @enderror">
                        <option value="">Select ply...</option>
                        @foreach(['3 Ply (Light Duty)','5 Ply (Medium Duty)','7 Ply (Heavy Duty)','Not Sure'] as $ply)
                        <option value="{{ $ply }}" {{ old('ply')===$ply ? 'selected' : '' }}>{{ $ply }}</option>
                        @endforeach
                    </select>
                    @error('ply')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Estimated Quantity *</label>
                    <input type="text" name="quantity" value="{{ old('quantity') }}" required placeholder="e.g. 500 pieces / month"
                           class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark @error('quantity') border-red-400 @enderror">
                    @error('quantity')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Dimensions (if known)</label>
                    <input type="text" name="dimensions" value="{{ old('dimensions') }}" placeholder="e.g. 24 x 18 x 12 inches"
                           class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark">
                </div>
            </div>

            <div>
                <label class="block text-[10px] tracking-[0.15em] uppercase text-brand-mid/60 mb-2">Additional Requirements</label>
                <textarea name="message" rows="4" placeholder="Describe your specific needs — print requirements, colour, special finishes, delivery timeline..."
                          class="w-full border border-brand-gold/20 bg-white focus:border-brand-gold outline-none px-4 py-3 text-sm text-brand-dark resize-none">{{ old('message') }}</textarea>
            </div>

            <button type="submit"
                    class="w-full bg-brand-gold text-brand-dark py-5 text-[12px] tracking-[0.2em] uppercase font-bold hover:bg-brand-light transition-all duration-300 hover:-translate-y-0.5">
                Submit Quote Request →
            </button>

            <p class="text-brand-mid/40 text-xs text-center">We respond within 24 hours. You can also call us directly at <a href="tel:+923018250025" class="text-brand-gold hover:underline">03062464800</a>.</p>
        </form>
    </div>
</section>

@endsection
