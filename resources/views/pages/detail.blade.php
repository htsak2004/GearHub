@extends('layouts.app')

@section('title', $item['name'] . ' - GearHub Perbanas Institute')

@section('content')
<div class="bg-slate-50/60 min-h-screen py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-8" aria-label="Breadcrumb">
            <a href="{{ route('beranda') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
            <span>/</span>
            <a href="{{ route('katalog') }}" class="hover:text-blue-600 transition-colors">Katalog</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold truncate">{{ $item['name'] }}</span>
        </nav>

        <!-- Product Detail Card -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-sm mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">
                
                <!-- Left: Big Product Image Showcase (5 cols) -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="w-full h-80 sm:h-96 rounded-2xl bg-slate-50 border border-slate-200/80 flex items-center justify-center p-6">
                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="max-h-full max-w-full object-contain">
                    </div>
                    
                    <div class="p-4 rounded-xl bg-blue-50/60 border border-blue-200/60 flex items-center gap-3 text-xs text-blue-900">
                        <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Seluruh unit dicek bersama saat serah terima di Counter Perbanas Institute.</span>
                    </div>
                </div>

                <!-- Right: Information & Booking (7 cols) -->
                <div class="lg:col-span-7 space-y-6">
                    <div>
                        <!-- Status and Category -->
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-xs font-semibold text-slate-500 bg-slate-100 px-3 py-1 rounded-md">
                                {{ $item['category'] }}
                            </span>
                            @if ($item['status_type'] === 'available')
                                <span class="bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-bold px-3 py-1 rounded-md flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    Unit Tersedia
                                </span>
                            @else
                                <span class="bg-red-50 text-red-600 border border-red-200 text-xs font-bold px-3 py-1 rounded-md flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-red-500"></span>
                                    Sedang Disewa
                                </span>
                            @endif
                        </div>

                        <!-- Title -->
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                            {{ $item['name'] }}
                        </h1>

                        <!-- Price Tag -->
                        <div class="mt-4 flex items-baseline gap-2">
                            <span class="text-3xl font-extrabold text-blue-600 font-mono">
                                Rp {{ number_format($item['price'], 0, ',', '.') }}
                            </span>
                            <span class="text-sm text-slate-500 font-medium">/ 24 jam (1 hari)</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
                        {{ $item['description'] }}
                    </p>

                    <!-- Technical Specs -->
                    <div class="space-y-2 pt-2">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Spesifikasi Utama:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-700">
                            @foreach ($item['specs'] as $spec)
                                <div class="flex items-start gap-2 bg-slate-50 p-2.5 rounded-lg border border-slate-100">
                                    <span class="text-blue-600 font-bold">✓</span>
                                    <span>{{ $spec }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Included in Package -->
                    <div class="space-y-2 pt-2">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Kelengkapan Dalam Box:</h3>
                        <ul class="space-y-1.5 text-xs text-slate-600">
                            @foreach ($item['includes'] as $inc)
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                                    <span>{{ $inc }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Action Buttons -->
                    <div class="pt-6 border-t border-slate-100 flex flex-wrap items-center gap-4">
                        @php
                            $waMessage = "Halo Admin GearHub Perbanas, saya tertarik menyewa alat: " . $item['name'] . " (Rp " . number_format($item['price'], 0, ',', '.') . "/hari). Mohon info jadwal ketersediaan unit untuk acara kampus saya. Terima kasih.";
                        @endphp
                        <a href="https://wa.me/6281234567890?text={{ urlencode($waMessage) }}" target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-sm transition-all shadow-md shadow-blue-500/20 inline-flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.81 13.47 3.81 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                            <span>Booking via WhatsApp Admin</span>
                        </a>

                        <a href="{{ route('cara-menyewa') }}" class="px-6 py-3.5 border border-slate-300 hover:bg-slate-100 text-slate-700 font-semibold rounded-xl text-sm transition-colors">
                            Lihat Panduan Menyewa
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Related Equipment -->
        @if (count($related) > 0)
            <div>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 font-['Space_Grotesk'] mb-6">
                    Peralatan Terkait Lainnya
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach ($related as $rel)
                        <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                            <div>
                                <div class="w-full h-36 flex items-center justify-center p-3 mb-2">
                                    <img src="{{ $rel['image'] }}" alt="{{ $rel['name'] }}" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform">
                                </div>
                                <h3 class="text-sm font-bold text-slate-800 group-hover:text-blue-600 transition-colors font-['Space_Grotesk']">
                                    {{ $rel['name'] }}
                                </h3>
                                <p class="text-xs text-slate-400 mt-1">{{ $rel['category'] }}</p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-sm font-bold text-blue-600 font-mono">Rp {{ number_format($rel['price'], 0, ',', '.') }}</span>
                                <a href="{{ route('katalog.detail', $rel['id']) }}" class="text-xs font-semibold text-blue-600 hover:underline">Detail →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>
@endsection
