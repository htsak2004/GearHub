@extends('layouts.app')

@section('title', 'GearHub - Platform Penyewaan Peralatan Kampus Perbanas Institute')

@section('content')
    <!-- 1. HERO SECTION -->
    <section class="relative pt-8 pb-16 md:pt-14 md:pb-24 overflow-hidden bg-gradient-to-b from-blue-50/40 via-white to-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Left Content (7 Cols) -->
                <div class="lg:col-span-7 space-y-6">
                    <!-- Eyebrow Badge -->
                    <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200/80 px-4 py-1.5 rounded-full text-xs font-semibold text-blue-700 shadow-sm">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <span>Platform Penyewaan Peralatan Kampus Perbanas</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-5xl lg:text-[54px] font-extrabold text-slate-900 tracking-tight leading-[1.12] font-['Space_Grotesk']">
                        Dukung Setiap Kegiatan Kampusmu Bersama <span class="text-blue-600">GearHub</span>
                    </h1>

                    <!-- Description -->
                    <p class="text-base sm:text-lg text-slate-600 max-w-2xl leading-relaxed">
                        Sewa berbagai peralatan kampus dengan mudah, cepat, dan terpercaya untuk mendukung kegiatan akademik, organisasi, penelitian, maupun acara di Perbanas Institute.
                    </p>

                    <!-- CTA Actions -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('katalog') }}" class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-7 py-3.5 rounded-xl text-base transition-all shadow-lg shadow-blue-500/25 hover:translate-y-[-1px] focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                            <span>Lihat Katalog</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center gap-2 border-2 border-blue-600 hover:bg-blue-50 text-blue-600 font-bold px-7 py-3.5 rounded-xl text-base transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                            <span>Daftar</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>

                    <!-- 3 Trust Badges -->
                    <div class="flex flex-wrap items-center gap-6 pt-4 text-xs sm:text-sm font-semibold text-slate-700">
                        <div class="flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Proses mudah</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Peralatan terawat</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Transparan & terpercaya</span>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Composition (5 Cols) -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200/80 bg-white group">
                        <!-- Main Campus Building Image with Equipment -->
                        <img src="/images/hero-campus.jpg" alt="Perbanas Institute Campus & Rental Equipment" class="w-full h-[400px] sm:h-[480px] object-cover group-hover:scale-[1.02] transition-transform duration-500">
                        
                        <!-- Floating Badge Top Right -->
                        <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-md border border-blue-200/90 shadow-lg px-4 py-2 rounded-2xl flex items-center gap-2.5">
                            <div class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-pulse"></div>
                            <span class="text-xs font-bold text-blue-900 font-['Space_Grotesk'] tracking-tight">
                                Fasilitas untuk Mahasiswa Perbanas
                            </span>
                        </div>

                        <!-- Bottom Tag Overlay -->
                        <div class="absolute bottom-4 left-4 right-4 bg-slate-900/85 backdrop-blur-md text-white p-3.5 rounded-2xl flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                <span class="font-medium text-slate-200">Katalog Lengkap Siap Pakai di Kampus</span>
                            </div>
                            <a href="{{ route('katalog') }}" class="font-bold text-blue-400 hover:text-blue-300 transition-colors">
                                Cek Stok →
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. FOUR VALUE PILLARS -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Pillar 1: Box / 3D Cube -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Katalog Lengkap</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Berbagai peralatan untuk kebutuhan akademik dan non-akademik.
                    </p>
                </div>

                <!-- Pillar 2: Calendar -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Cek Ketersediaan</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Lihat ketersediaan peralatan secara real-time.
                    </p>
                </div>

                <!-- Pillar 3: Shield -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Harga Transparan</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Tarif jelas tanpa biaya tersembunyi.
                    </p>
                </div>

                <!-- Pillar 4: Headset -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-blue-300 transition-all">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 100-6 3 3 0 000 6z"/>
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Dukungan Tim</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Siap membantu jika ada pertanyaan atau kendala.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. KATEGORI PERALATAN -->
    <section class="py-14 bg-slate-50/70 border-t border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                        Kategori Peralatan
                    </h2>
                    <p class="text-sm sm:text-base text-slate-500 mt-1">
                        Temukan berbagai peralatan sesuai kebutuhan kegiatanmu.
                    </p>
                </div>
                <a href="{{ route('katalog') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors inline-flex items-center gap-1.5 group">
                    <span>Lihat semua kategori</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>

            <!-- 6 Category Cards -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
                @foreach ($categories as $cat)
                    <a href="{{ url('/katalog?kategori=' . $cat['slug']) }}" class="bg-white border border-slate-200 hover:border-blue-400 rounded-2xl p-4 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg group flex flex-col items-center justify-between focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                        <div class="w-full text-left">
                            <h3 class="text-sm font-bold text-slate-800 group-hover:text-blue-600 transition-colors line-clamp-2 h-10">
                                {{ $cat['name'] }}
                            </h3>
                        </div>
                        <div class="w-24 h-24 my-3 flex items-center justify-center p-2">
                            <img src="{{ $cat['image'] }}" alt="{{ $cat['name'] }}" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform">
                        </div>
                        <span class="text-xs text-slate-400 font-medium">
                            {{ $cat['count'] }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4. CARA MENYEWA DI GEARHUB -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                    Cara Menyewa di GearHub
                </h2>
                <p class="text-slate-500 text-sm sm:text-base mt-2">
                    Proses penyewaan yang mudah dan transparan.
                </p>
            </div>

            <!-- 4 Steps with Connecting Arrows -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                
                <!-- Step 01 -->
                <div class="relative bg-slate-50/60 border border-slate-100 rounded-2xl p-6 text-center group hover:bg-white hover:shadow-md transition-all">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span class="text-xs font-bold text-blue-600 font-mono">01</span>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 bg-white group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2 font-['Space_Grotesk']">Pilih Peralatan</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Jelajahi katalog dan pilih peralatan yang kamu butuhkan.
                    </p>
                </div>

                <!-- Step 02 -->
                <div class="relative bg-slate-50/60 border border-slate-100 rounded-2xl p-6 text-center group hover:bg-white hover:shadow-md transition-all">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span class="text-xs font-bold text-blue-600 font-mono">02</span>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 bg-white group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2 font-['Space_Grotesk']">Ajukan Booking</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Tentukan tanggal sewa dan ajukan pemesanan.
                    </p>
                </div>

                <!-- Step 03 -->
                <div class="relative bg-slate-50/60 border border-slate-100 rounded-2xl p-6 text-center group hover:bg-white hover:shadow-md transition-all">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span class="text-xs font-bold text-blue-600 font-mono">03</span>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 bg-white group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        </div>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2 font-['Space_Grotesk']">Lakukan Pembayaran</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Selesaikan pembayaran sesuai metode yang tersedia.
                    </p>
                </div>

                <!-- Step 04 -->
                <div class="relative bg-slate-50/60 border border-slate-100 rounded-2xl p-6 text-center group hover:bg-white hover:shadow-md transition-all">
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span class="text-xs font-bold text-blue-600 font-mono">04</span>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 bg-white group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2 font-['Space_Grotesk']">Ambil & Gunakan</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Ambil peralatan di lokasi dan gunakan sesuai kebutuhan.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. PERALATAN UNGGULAN -->
    <section class="py-16 md:py-20 bg-slate-50/60 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                        Peralatan Unggulan
                    </h2>
                    <p class="text-sm sm:text-base text-slate-500 mt-1">
                        Beberapa peralatan yang paling sering disewa oleh mahasiswa.
                    </p>
                </div>
                <a href="{{ route('katalog') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors inline-flex items-center gap-1.5 group">
                    <span>Lihat semua peralatan</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>

            <!-- 4 Featured Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($featured as $item)
                    <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between group">
                        <div>
                            <!-- Status Badge -->
                            <div class="flex items-center justify-between mb-3">
                                @if ($item['status_type'] === 'available')
                                    <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/80 text-[11px] font-bold px-2.5 py-0.5 rounded-md">
                                        Tersedia
                                    </span>
                                @else
                                    <span class="bg-red-50 text-red-600 border border-red-200/80 text-[11px] font-bold px-2.5 py-0.5 rounded-md">
                                        Sedang Disewa
                                    </span>
                                @endif
                            </div>

                            <!-- Product Image -->
                            <div class="w-full h-44 flex items-center justify-center p-3 mb-3">
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                            </div>

                            <!-- Title & Category -->
                            <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-600 transition-colors font-['Space_Grotesk']">
                                {{ $item['name'] }}
                            </h3>
                            <p class="text-xs text-slate-500 mt-0.5">
                                {{ $item['category'] }}
                            </p>
                        </div>

                        <!-- Price & Detail Button -->
                        <div class="pt-4 mt-4 border-t border-slate-100">
                            <div class="mb-3">
                                <span class="text-base font-extrabold text-blue-600 font-mono">
                                    Rp {{ number_format($item['price'], 0, ',', '.') }}
                                </span>
                                <span class="text-xs text-slate-400 font-normal"> / hari</span>
                            </div>

                            <a href="{{ route('katalog.detail', $item['id']) }}" class="w-full py-2.5 px-4 bg-white hover:bg-blue-50 border border-blue-600 text-blue-600 font-semibold rounded-xl text-xs transition-colors flex items-center justify-center focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 6. BANNER STATS (Dark Slate/Navy Theme) -->
    <section class="bg-[#0f172a] text-white py-16 md:py-24 relative overflow-hidden">
        <!-- Subtle Background Glow -->
        <div class="absolute -right-20 -bottom-20 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Left Text Content (6 cols) -->
                <div class="lg:col-span-6 space-y-5">
                    <div class="inline-flex items-center gap-2 bg-blue-600/20 border border-blue-500/30 text-blue-300 text-xs font-semibold px-3.5 py-1.5 rounded-full">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a10.99 10.99 0 011.603 5.417c0 .35.03.695.088 1.032l.044.24a1 1 0 00.97.82h4.09a1 1 0 00.97-.82l.044-.24a10.99 10.99 0 011.691-6.449l2.64-1.131a1 1 0 000-1.84l-7-3zM7 14.5a1 1 0 01-1-1 9 9 0 012-5.73l.63.27A7.002 7.002 0 007 14.5zm6 0a7.002 7.002 0 00-1.63-6.46l.63-.27A9 9 0 0114 13.5a1 1 0 01-1 1z"/>
                        </svg>
                        <span>Dipercaya oleh Mahasiswa Perbanas</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight font-['Space_Grotesk']">
                        Mendukung Berbagai Kegiatan Kampus
                    </h2>

                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                        GearHub hadir untuk memudahkan mahasiswa Perbanas dalam mengakses peralatan yang dibutuhkan untuk kegiatan akademik, organisasi, dan acara kampus.
                    </p>
                </div>

                <!-- Right 2x2 Stats Grid (6 cols) -->
                <div class="lg:col-span-6">
                    <div class="grid grid-cols-2 gap-4 sm:gap-6">
                        <!-- Stat 1: Mahasiswa -->
                        <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 text-center backdrop-blur-sm">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-extrabold text-white font-['Space_Grotesk'] block">
                                1.250+
                            </span>
                            <span class="text-xs text-slate-400 mt-1 block">
                                Mahasiswa Terdaftar
                            </span>
                        </div>

                        <!-- Stat 2: Peralatan -->
                        <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 text-center backdrop-blur-sm">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-extrabold text-white font-['Space_Grotesk'] block">
                                80+
                            </span>
                            <span class="text-xs text-slate-400 mt-1 block">
                                Peralatan Tersedia
                            </span>
                        </div>

                        <!-- Stat 3: Transaksi -->
                        <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 text-center backdrop-blur-sm">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-extrabold text-white font-['Space_Grotesk'] block">
                                3.500+
                            </span>
                            <span class="text-xs text-slate-400 mt-1 block">
                                Transaksi Berhasil
                            </span>
                        </div>

                        <!-- Stat 4: Kepuasan -->
                        <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 text-center backdrop-blur-sm">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-extrabold text-white font-['Space_Grotesk'] block">
                                98%
                            </span>
                            <span class="text-xs text-slate-400 mt-1 block">
                                Tingkat Kepuasan
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. TENTANG GEARHUB / SOLUSI PENYEWAAN -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">
                
                <!-- Left Side: Indonesian Students Photo with Floating Testimonial Quote -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl border border-slate-200">
                        <img src="/images/students.jpg" alt="Mahasiswa Perbanas Institute" class="w-full h-[380px] sm:h-[440px] object-cover">
                        
                        <!-- Floating Testimonial Card Overlay -->
                        <div class="absolute bottom-5 left-5 right-5 sm:right-auto sm:max-w-sm bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-2xl p-4 shadow-xl">
                            <div class="flex items-start gap-3">
                                <span class="text-blue-600 text-2xl font-serif leading-none">“</span>
                                <div>
                                    <p class="text-xs sm:text-sm font-semibold text-slate-800 leading-snug">
                                        GearHub sangat membantu kegiatan organisasi kami!
                                    </p>
                                    <span class="text-xs text-slate-500 font-medium mt-1 block">
                                        - Mahasiswa Perbanas
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Explanation & CTA -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 text-blue-700 text-xs font-semibold px-3.5 py-1.5 rounded-full">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                        <span>Tentang GearHub</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight font-['Space_Grotesk']">
                        Solusi Penyewaan Peralatan untuk Mahasiswa Perbanas
                    </h2>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        GearHub adalah platform penyewaan peralatan kampus yang dikelola untuk mendukung kegiatan mahasiswa Perbanas Institute, mulai dari kegiatan akademik, organisasi, penelitian, hingga acara kampus. Kami berkomitmen menyediakan peralatan yang terawat dan layanan yang terpercaya.
                    </p>

                    <div>
                        <a href="{{ route('cara-menyewa') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-7 py-3.5 rounded-xl text-sm transition-all shadow-md shadow-blue-500/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. PERTANYAAN YANG SERING DIAJUKAN (FAQ) -->
    <section class="py-16 md:py-20 bg-slate-50/60 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                    <p class="text-sm sm:text-base text-slate-500 mt-1">
                        Temukan jawaban untuk pertanyaan umum seputar GearHub.
                    </p>
                </div>
                <a href="{{ route('faq') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors inline-flex items-center gap-1.5 group">
                    <span>Lihat semua pertanyaan</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>

            <!-- 2-Column Accordion Cards (3 items per col, Total 6) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Col 1 -->
                <div class="space-y-4">
                    <!-- Q1 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-2xl p-5 shadow-sm transition-all">
                        <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                            <span class="text-sm sm:text-base font-bold text-slate-900">
                                Siapa saja yang dapat menyewa peralatan di GearHub?
                            </span>
                            <span class="faq-icon text-slate-400 font-bold text-xl shrink-0 transition-transform duration-200">+</span>
                        </button>
                        <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Seluruh mahasiswa aktif, perwakilan organisasi mahasiswa (BEM, HIMA, UKM), serta dosen dan staf Perbanas Institute yang memiliki Kartu Tanda Mahasiswa (KTM) aktif atau surat tugas kegiatan.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-2xl p-5 shadow-sm transition-all">
                        <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                            <span class="text-sm sm:text-base font-bold text-slate-900">
                                Bagaimana cara melakukan pemesanan?
                            </span>
                            <span class="faq-icon text-slate-400 font-bold text-xl shrink-0 transition-transform duration-200">+</span>
                        </button>
                        <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pilih peralatan yang dibutuhkan di halaman Katalog, tentukan tanggal serta durasi sewa, ajukan pemesanan secara online, dan selesaikan konfirmasi sebelum pengambilan unit di Hub.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-2xl p-5 shadow-sm transition-all">
                        <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                            <span class="text-sm sm:text-base font-bold text-slate-900">
                                Metode pembayaran apa saja yang tersedia?
                            </span>
                            <span class="faq-icon text-slate-400 font-bold text-xl shrink-0 transition-transform duration-200">+</span>
                        </button>
                        <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Kami menerima Transfer Bank (Virtual Account), QRIS instan dari semua e-wallet / mobile banking, serta pembayaran langsung di tempat saat serah terima peralatan.
                        </div>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="space-y-4">
                    <!-- Q4 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-2xl p-5 shadow-sm transition-all">
                        <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                            <span class="text-sm sm:text-base font-bold text-slate-900">
                                Di mana lokasi pengambilan dan pengembalian peralatan?
                            </span>
                            <span class="faq-icon text-slate-400 font-bold text-xl shrink-0 transition-transform duration-200">+</span>
                        </button>
                        <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pengambilan dan pengembalian dilakukan di Counter Operasional GearHub Perbanas Institute, Kampus Perbanas Jakarta Selatan. Tim kami akan melakukan pengecekan fungsional bersama saat serah terima.
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-2xl p-5 shadow-sm transition-all">
                        <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                            <span class="text-sm sm:text-base font-bold text-slate-900">
                                Apa yang terjadi jika terjadi kerusakan atau kehilangan?
                            </span>
                            <span class="faq-icon text-slate-400 font-bold text-xl shrink-0 transition-transform duration-200">+</span>
                        </button>
                        <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Sebelum dibawa, kondisi fisik dan fungsi unit dicatat bersama dalam formulir serah terima. Apabila terjadi kerusakan akibat kelalaian pemakaian, penyewa bertanggung jawab atas biaya reparasi resmi atau penggantian unit yang setara.
                        </div>
                    </div>

                    <!-- Q6 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-2xl p-5 shadow-sm transition-all">
                        <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                            <span class="text-sm sm:text-base font-bold text-slate-900">
                                Apakah ada denda jika terlambat mengembalikan?
                            </span>
                            <span class="faq-icon text-slate-400 font-bold text-xl shrink-0 transition-transform duration-200">+</span>
                        </button>
                        <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Terdapat batas toleransi keterlambatan selama 1 jam. Keterlambatan melebihi batas waktu tanpa konfirmasi perpanjangan sebelumnya akan dikenakan denda proporsional per jam demi menjaga komitmen jadwal mahasiswa lainnya.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
