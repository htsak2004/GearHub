@extends('layouts.app')

@section('title', 'Katalog Peralatan Kampus - GearHub Perbanas Institute')

@section('content')
<!-- 1. DARK BLUE HERO BANNER WITH CAMPUS BACKDROP -->
<section class="relative bg-[#0c1e3d] text-white py-12 md:py-16 overflow-hidden">
    <!-- Campus Building Watermark Background -->
    <div class="absolute inset-0 bg-cover bg-center opacity-20 mix-blend-luminosity pointer-events-none" style="background-image: url('/images/hero-campus.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#0c1e3d] via-[#0c1e3d]/90 to-[#0c1e3d]/70 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Info (7 cols) -->
            <div class="lg:col-span-7 space-y-4">
                <!-- Breadcrumbs -->
                <nav class="flex items-center gap-2 text-xs text-blue-200/80" aria-label="Breadcrumb">
                    <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                    <span>&gt;</span>
                    <span class="text-white font-semibold">Katalog</span>
                </nav>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight font-['Space_Grotesk']">
                    Katalog Peralatan
                </h1>

                <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                    Temukan berbagai peralatan kampus yang tersedia untuk mendukung kegiatan akademik, organisasi, penelitian, dan acara mahasiswa.
                </p>
            </div>

            <!-- Right Search Bar & Quick Tags (5 cols) -->
            <div class="lg:col-span-5 space-y-3">
                <form action="{{ route('katalog') }}" method="GET" class="relative">
                    @if(request('kategori') && request('kategori') !== 'all')
                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                    @endif
                    @if(request('status'))
                        <input type="hidden" name="status" value="{{ request('status') }}">
                    @endif
                    @if(request('sort'))
                        <input type="hidden" name="sort" value="{{ request('sort') }}">
                    @endif

                    <div class="flex items-center bg-white rounded-2xl p-1.5 shadow-xl border border-white/20">
                        <div class="pl-3.5 pr-2 text-slate-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text" name="cari" value="{{ $searchQuery ?? '' }}" placeholder="Cari nama peralatan, kategori, atau deskripsi..." class="w-full text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none bg-transparent">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2.5 rounded-xl text-xs sm:text-sm transition-colors shrink-0 shadow-md shadow-blue-500/20">
                            Cari
                        </button>
                    </div>
                </form>

                <!-- Quick Filter Tag Pills -->
                <div class="flex flex-wrap items-center gap-2 pt-1 text-xs">
                    <a href="{{ url('/katalog?cari=Kamera') }}" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-slate-200 transition-colors">
                        Kamera
                    </a>
                    <a href="{{ url('/katalog?cari=Proyektor') }}" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-slate-200 transition-colors">
                        Proyektor
                    </a>
                    <a href="{{ url('/katalog?cari=Laptop') }}" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-slate-200 transition-colors">
                        Laptop
                    </a>
                    <a href="{{ url('/katalog?cari=Sound') }}" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-slate-200 transition-colors">
                        Sound System
                    </a>
                    <a href="{{ url('/katalog?cari=Tenda') }}" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-slate-200 transition-colors">
                        Tenda
                    </a>
                    <a href="{{ url('/katalog?cari=Lighting') }}" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-slate-200 transition-colors">
                        Lighting
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 2. MAIN CATALOG BODY (SIDEBAR FILTERS + PRODUCT GRID) -->
<div class="bg-slate-50/60 min-h-screen py-8 md:py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT SIDEBAR FILTERS (3 Cols) -->
            <aside class="lg:col-span-3 space-y-5">
                
                <!-- Filter Box: Kategori -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <h2 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">Kategori</h2>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                    </div>

                    <div class="space-y-1">
                        @foreach ($sidebarCategories as $cat)
                            @php
                                $isActive = ($currentCategory === $cat['slug']) || (empty($currentCategory) && $cat['slug'] === 'all');
                            @endphp
                            <a href="{{ url('/katalog?kategori=' . $cat['slug'] . ($searchQuery ? '&cari=' . urlencode($searchQuery) : '') . ($currentStatus ? '&status=' . $currentStatus : '')) }}" 
                               class="flex items-center justify-between p-2.5 rounded-xl text-xs font-semibold transition-colors group {{ $isActive ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                                <div class="flex items-center gap-2.5">
                                    @if ($cat['slug'] === 'all')
                                        <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                                    @elseif ($cat['slug'] === 'kamera')
                                        <svg class="w-4 h-4 {{ $isActive ? 'text-blue-600' : 'text-slate-400 group-hover:text-slate-600' }} shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    @elseif ($cat['slug'] === 'audio')
                                        <svg class="w-4 h-4 {{ $isActive ? 'text-blue-600' : 'text-slate-400 group-hover:text-slate-600' }} shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/></svg>
                                    @elseif ($cat['slug'] === 'multimedia')
                                        <svg class="w-4 h-4 {{ $isActive ? 'text-blue-600' : 'text-slate-400 group-hover:text-slate-600' }} shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    @elseif ($cat['slug'] === 'komputer')
                                        <svg class="w-4 h-4 {{ $isActive ? 'text-blue-600' : 'text-slate-400 group-hover:text-slate-600' }} shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    @elseif ($cat['slug'] === 'event')
                                        <svg class="w-4 h-4 {{ $isActive ? 'text-blue-600' : 'text-slate-400 group-hover:text-slate-600' }} shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                    @else
                                        <svg class="w-4 h-4 {{ $isActive ? 'text-blue-600' : 'text-slate-400 group-hover:text-slate-600' }} shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                                    @endif
                                    <span>{{ $cat['name'] }}</span>
                                </div>
                                <span class="text-[11px] font-bold px-2 py-0.5 rounded-full {{ $isActive ? 'bg-blue-100 text-blue-700' : 'bg-slate-100 text-slate-500' }}">
                                    {{ $cat['count'] }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Filter Box: Rentang Harga (per hari) -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-4">
                        <h2 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">Rentang Harga (per hari)</h2>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                    </div>

                    <!-- Slider Bar -->
                    <div class="px-1">
                        <input type="range" id="price-slider" min="0" max="500000" step="10000" value="500000" class="w-full accent-blue-600 cursor-pointer">
                        <div class="flex items-center justify-between text-xs font-semibold text-slate-600 mt-2">
                            <span>Rp 0</span>
                            <span id="price-max-label" class="text-blue-600 font-mono font-bold">Rp 500.000</span>
                        </div>
                    </div>
                </div>

                <!-- Filter Box: Status Ketersediaan -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <h2 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">Status Ketersediaan</h2>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                    </div>

                    <div class="space-y-2.5 text-xs">
                        <label class="flex items-center justify-between cursor-pointer group">
                            <div class="flex items-center gap-2.5">
                                <input type="checkbox" name="status_available" value="available" checked class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500 border-slate-300">
                                <span class="font-semibold text-slate-700 group-hover:text-slate-900">Tersedia</span>
                            </div>
                            <span class="text-slate-400 font-bold bg-slate-100 px-2 py-0.5 rounded-full">68</span>
                        </label>

                        <label class="flex items-center justify-between cursor-pointer group">
                            <div class="flex items-center gap-2.5">
                                <input type="checkbox" name="status_rented" value="rented" class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500 border-slate-300">
                                <span class="font-semibold text-slate-700 group-hover:text-slate-900">Sedang Disewa</span>
                            </div>
                            <span class="text-slate-400 font-bold bg-slate-100 px-2 py-0.5 rounded-full">12</span>
                        </label>

                        <label class="flex items-center justify-between cursor-pointer group">
                            <div class="flex items-center gap-2.5">
                                <input type="checkbox" name="status_maintenance" value="maintenance" class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500 border-slate-300">
                                <span class="font-semibold text-slate-700 group-hover:text-slate-900">Dalam Perawatan</span>
                            </div>
                            <span class="text-slate-400 font-bold bg-slate-100 px-2 py-0.5 rounded-full">6</span>
                        </label>
                    </div>
                </div>

                <!-- Filter Box: Urutkan -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <h2 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">Urutkan</h2>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                    </div>

                    <div>
                        <select id="sort-select" onchange="location = this.value;" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3.5 py-2 text-xs font-semibold text-slate-700 focus:bg-white focus:outline-none focus:border-blue-600">
                            <option value="{{ url('/katalog?sort=terbaru' . ($currentCategory ? '&kategori=' . $currentCategory : '') . ($searchQuery ? '&cari=' . urlencode($searchQuery) : '')) }}" {{ ($currentSort ?? '') === 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                            <option value="{{ url('/katalog?sort=termurah' . ($currentCategory ? '&kategori=' . $currentCategory : '') . ($searchQuery ? '&cari=' . urlencode($searchQuery) : '')) }}" {{ ($currentSort ?? '') === 'termurah' ? 'selected' : '' }}>Harga Terendah</option>
                            <option value="{{ url('/katalog?sort=termahal' . ($currentCategory ? '&kategori=' . $currentCategory : '') . ($searchQuery ? '&cari=' . urlencode($searchQuery) : '')) }}" {{ ($currentSort ?? '') === 'termahal' ? 'selected' : '' }}>Harga Tertinggi</option>
                            <option value="{{ url('/katalog?sort=a-z' . ($currentCategory ? '&kategori=' . $currentCategory : '') . ($searchQuery ? '&cari=' . urlencode($searchQuery) : '')) }}" {{ ($currentSort ?? '') === 'a-z' ? 'selected' : '' }}>Nama A-Z</option>
                        </select>
                    </div>
                </div>

            </aside>

            <!-- RIGHT MAIN PRODUCT AREA (9 Cols) -->
            <main class="lg:col-span-9 space-y-6">
                
                <!-- Top Status Bar: Count + View Mode Switcher -->
                <div class="flex items-center justify-between pb-2">
                    <p class="text-xs sm:text-sm text-slate-500 font-medium">
                        Menampilkan <span class="font-bold text-slate-800">1-{{ count($inventory) }}</span> dari <span class="font-bold text-slate-800">86</span> peralatan
                    </p>

                    <!-- View Mode Grid/List Buttons -->
                    <div class="flex items-center gap-1.5">
                        <button type="button" id="grid-view-btn" class="p-2 rounded-lg bg-blue-600 text-white shadow-sm transition-colors" aria-label="Tampilan Grid">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>
                        </button>
                        <button type="button" id="list-view-btn" class="p-2 rounded-lg bg-white border border-slate-200 text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors" aria-label="Tampilan List">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- 4-Column Product Grid (12 Items) -->
                @if (count($inventory) > 0)
                    <div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-5">
                        @foreach ($inventory as $item)
                            <div class="product-item bg-white border border-slate-200 rounded-2xl p-4 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between group relative" data-price="{{ $item['price'] }}" data-status="{{ $item['status_type'] }}">
                                <div>
                                    <!-- Top Row: Badge Status + Favorite Heart -->
                                    <div class="flex items-center justify-between mb-3">
                                        @if ($item['status_type'] === 'available')
                                            <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/80 text-[10px] font-bold px-2 py-0.5 rounded-md">
                                                Tersedia
                                            </span>
                                        @elseif ($item['status_type'] === 'rented')
                                            <span class="bg-red-50 text-red-600 border border-red-200/80 text-[10px] font-bold px-2 py-0.5 rounded-md">
                                                Sedang Disewa
                                            </span>
                                        @else
                                            <span class="bg-sky-50 text-sky-700 border border-sky-200/80 text-[10px] font-bold px-2 py-0.5 rounded-md">
                                                Dalam Perawatan
                                            </span>
                                        @endif

                                        <!-- Favorite Button -->
                                        <button type="button" class="favorite-toggle text-slate-400 hover:text-rose-500 transition-colors p-1" aria-label="Favoritkan {{ $item['name'] }}">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                                        </button>
                                    </div>

                                    <!-- Product Image Showcase -->
                                    <div class="w-full h-36 flex items-center justify-center p-2 mb-3 bg-white">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                                    </div>

                                    <!-- Category Subtext -->
                                    <span class="text-[11px] text-slate-400 block font-medium">
                                        {{ $item['category'] }}
                                    </span>

                                    <!-- Product Name -->
                                    <h3 class="text-sm font-bold text-slate-900 group-hover:text-blue-600 transition-colors font-['Space_Grotesk'] leading-tight mt-0.5">
                                        {{ $item['name'] }}
                                    </h3>

                                    <!-- Short Description -->
                                    <p class="text-xs text-slate-500 mt-1 line-clamp-2 leading-relaxed min-h-[32px]">
                                        {{ $item['description'] }}
                                    </p>
                                </div>

                                <!-- Price & Action Button -->
                                <div class="mt-4 pt-3 border-t border-slate-100">
                                    <div class="mb-2.5">
                                        <span class="text-sm font-extrabold text-blue-600 font-mono">
                                            Rp {{ number_format($item['price'], 0, ',', '.') }}
                                        </span>
                                        <span class="text-[11px] text-slate-400 font-normal"> / hari</span>
                                    </div>

                                    <a href="{{ route('katalog.detail', $item['id']) }}" class="w-full py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-xl text-xs transition-colors flex items-center justify-center focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Bottom Pagination Bar -->
                    <div class="pt-8 pb-4 flex items-center justify-center gap-1.5 text-xs font-semibold">
                        <button type="button" class="w-8 h-8 rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-100 flex items-center justify-center transition-colors" aria-label="Halaman Sebelumnya">
                            &lt;
                        </button>
                        <a href="#" class="w-8 h-8 rounded-lg bg-blue-600 text-white flex items-center justify-center font-bold shadow-sm">
                            1
                        </a>
                        <a href="#" class="w-8 h-8 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-100 flex items-center justify-center transition-colors">
                            2
                        </a>
                        <a href="#" class="w-8 h-8 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-100 flex items-center justify-center transition-colors">
                            3
                        </a>
                        <a href="#" class="w-8 h-8 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-100 flex items-center justify-center transition-colors">
                            4
                        </a>
                        <a href="#" class="w-8 h-8 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-100 flex items-center justify-center transition-colors">
                            5
                        </a>
                        <span class="w-6 text-center text-slate-400">...</span>
                        <a href="#" class="w-8 h-8 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-100 flex items-center justify-center transition-colors">
                            8
                        </a>
                        <button type="button" class="w-8 h-8 rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-100 flex items-center justify-center transition-colors" aria-label="Halaman Selanjutnya">
                            &gt;
                        </button>
                    </div>

                @else
                    <!-- Empty State -->
                    <div class="text-center py-16 bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                        <div class="w-16 h-16 rounded-full bg-slate-100 flex items-center justify-center mx-auto text-slate-400 mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Peralatan Tidak Ditemukan</h3>
                        <p class="text-xs text-slate-500 mt-1 max-w-sm mx-auto">Tidak ada peralatan yang sesuai dengan kriteria pencarian atau filter yang Anda pilih.</p>
                        <a href="{{ route('katalog') }}" class="mt-4 inline-block px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl text-xs transition-colors shadow-sm">
                            Reset Semua Filter
                        </a>
                    </div>
                @endif

            </main>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Price slider live filter
    const priceSlider = document.getElementById('price-slider');
    const priceLabel = document.getElementById('price-max-label');
    const products = document.querySelectorAll('.product-item');

    if (priceSlider && priceLabel) {
        priceSlider.addEventListener('input', (e) => {
            const val = parseInt(e.target.value, 10);
            priceLabel.textContent = 'Rp ' + Number(val).toLocaleString('id-ID');

            products.forEach(p => {
                const price = parseInt(p.getAttribute('data-price'), 10);
                if (price <= val) {
                    p.classList.remove('hidden');
                } else {
                    p.classList.add('hidden');
                }
            });
        });
    }

    // 2. Favorite Heart button toggle
    document.querySelectorAll('.favorite-toggle').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const svg = btn.querySelector('svg');
            const isFav = svg.getAttribute('fill') === 'currentColor';
            if (isFav) {
                svg.setAttribute('fill', 'none');
                btn.classList.remove('text-rose-500');
                btn.classList.add('text-slate-400');
            } else {
                svg.setAttribute('fill', 'currentColor');
                btn.classList.remove('text-slate-400');
                btn.classList.add('text-rose-500');
            }
        });
    });

    // 3. Grid / List View Toggle
    const gridBtn = document.getElementById('grid-view-btn');
    const listBtn = document.getElementById('list-view-btn');
    const container = document.getElementById('product-container');

    if (gridBtn && listBtn && container) {
        listBtn.addEventListener('click', () => {
            listBtn.classList.remove('bg-white', 'text-slate-500');
            listBtn.classList.add('bg-blue-600', 'text-white');
            gridBtn.classList.remove('bg-blue-600', 'text-white');
            gridBtn.classList.add('bg-white', 'text-slate-500', 'border', 'border-slate-200');

            container.classList.remove('grid-cols-1', 'sm:grid-cols-2', 'xl:grid-cols-4');
            container.classList.add('grid-cols-1');
        });

        gridBtn.addEventListener('click', () => {
            gridBtn.classList.remove('bg-white', 'text-slate-500', 'border');
            gridBtn.classList.add('bg-blue-600', 'text-white');
            listBtn.classList.remove('bg-blue-600', 'text-white');
            listBtn.classList.add('bg-white', 'text-slate-500', 'border', 'border-slate-200');

            container.classList.remove('grid-cols-1');
            container.classList.add('grid-cols-1', 'sm:grid-cols-2', 'xl:grid-cols-4');
        });
    }
});
</script>
@endpush
