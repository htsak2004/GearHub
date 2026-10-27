<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/90 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <!-- Brand Logo -->
        <a href="{{ route('beranda') }}" class="flex items-center gap-3 group focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg py-1" aria-label="GearHub Perbanas Institute">
            <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white shadow-md shadow-blue-500/20 group-hover:scale-105 transition-transform">
                <!-- Hexagon Gear SVG -->
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2l7.5 4.33v8.66L12 22l-7.5-4.33V6.33L12 2z"/>
                    <circle cx="12" cy="12" r="3.2"/>
                    <path d="M12 6.5v2m0 7v2m4.76-7.24l-1.42 1.42m-4.94 4.94l-1.42 1.42m7.78 0l-1.42-1.42m-4.94-4.94l-1.42-1.42"/>
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-extrabold tracking-tight text-slate-900 font-['Space_Grotesk'] leading-tight">
                    Gear<span class="text-blue-600">Hub</span>
                </span>
                <span class="text-[9px] uppercase tracking-widest font-bold text-slate-500">
                    PERBANAS INSTITUTE
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center gap-7" aria-label="Menu Utama">
            <a href="{{ route('beranda') }}" 
               class="text-sm transition-colors py-1 relative {{ request()->routeIs('beranda') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                Beranda
            </a>
            <a href="{{ route('katalog') }}" 
               class="text-sm transition-colors py-1 relative {{ request()->routeIs('katalog*') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                Katalog
            </a>
            <a href="{{ route('cara-menyewa') }}" 
               class="text-sm transition-colors py-1 relative {{ request()->routeIs('cara-menyewa') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                Cara Menyewa
            </a>
            <a href="{{ route('kebijakan') }}" 
               class="text-sm transition-colors py-1 relative {{ request()->routeIs('kebijakan') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                Kebijakan
            </a>
            <a href="{{ route('faq') }}" 
               class="text-sm transition-colors py-1 relative {{ request()->routeIs('faq') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                FAQ
            </a>
            <a href="{{ route('kontak') }}" 
               class="text-sm transition-colors py-1 relative {{ request()->routeIs('kontak') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                Kontak
            </a>
        </nav>

        <!-- Right Action Items (Search + Auth Buttons) -->
        <div class="hidden sm:flex items-center gap-3">
            <!-- Search Button -->
            <button id="open-search-modal-btn" type="button" class="p-2 text-slate-500 hover:text-blue-600 hover:bg-slate-100 rounded-lg transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600" aria-label="Buka Pencarian Alat">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>

            <!-- Masuk Button (Ghost / Outline) -->
            <a href="{{ route('login') }}" class="px-4 py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg text-sm transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                Masuk
            </a>

            <!-- Daftar Button (Solid Blue) -->
            <a href="{{ route('register') }}" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg text-sm transition-colors shadow-sm shadow-blue-500/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                Daftar
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="flex items-center gap-2 lg:hidden">
            <button id="mobile-search-btn" class="p-2 text-slate-600 hover:text-blue-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-label="Cari Peralatan">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </button>
            <button id="mobile-menu-toggle" type="button" class="p-2 text-slate-700 hover:text-blue-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false" aria-controls="mobile-menu-drawer" aria-label="Toggle navigasi menu">
                <svg id="hamburger-open-icon" class="w-6 h-6 block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="hamburger-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-menu-drawer" class="hidden lg:hidden bg-white border-b border-slate-200 px-6 py-5 space-y-3 shadow-lg">
        <a href="{{ route('beranda') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('beranda') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
            Beranda
        </a>
        <a href="{{ route('katalog') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('katalog*') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
            Katalog
        </a>
        <a href="{{ route('cara-menyewa') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('cara-menyewa') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
            Cara Menyewa
        </a>
        <a href="{{ route('kebijakan') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('kebijakan') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
            Kebijakan
        </a>
        <a href="{{ route('faq') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('faq') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
            FAQ
        </a>
        <a href="{{ route('kontak') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('kontak') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
            Kontak
        </a>

        <div class="pt-4 border-t border-slate-100 flex flex-col gap-2.5">
            <a href="{{ route('login') }}" class="text-center w-full py-2.5 border border-blue-600 text-blue-600 font-semibold rounded-lg text-sm">
                Masuk
            </a>
            <a href="{{ route('register') }}" class="text-center w-full py-2.5 bg-blue-600 text-white font-semibold rounded-lg text-sm">
                Daftar Akun Baru
            </a>
        </div>
    </div>
</header>
