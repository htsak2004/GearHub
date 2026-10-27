<!-- QUICK SEARCH MODAL -->
<div id="search-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/60 backdrop-blur-sm p-4" role="dialog" aria-modal="true" aria-labelledby="search-modal-title">
    <div class="bg-white border border-slate-200 rounded-2xl w-full max-w-xl shadow-2xl overflow-hidden animate-in fade-in zoom-in-95 duration-200">
        <!-- Search Input Header -->
        <div class="p-4 border-b border-slate-100 flex items-center gap-3">
            <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="text" id="modal-search-input" placeholder="Cari peralatan (Canon, Epson, JBL, ThinkPad)..." class="w-full text-base text-slate-800 placeholder-slate-400 focus:outline-none bg-transparent">
            <button id="close-search-modal-btn" type="button" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100 transition-colors" aria-label="Tutup pencarian">
                <kbd class="text-xs font-mono bg-slate-100 px-1.5 py-0.5 rounded border border-slate-200">ESC</kbd>
            </button>
        </div>

        <!-- Quick Links / Results Preview -->
        <div class="p-4 max-h-80 overflow-y-auto space-y-2">
            <p class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Paling Sering Dicari Mahasiswa</p>
            
            <a href="{{ url('/katalog/canon-90d') }}" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                <div class="flex items-center gap-3">
                    <img src="/images/canon-90d.jpg" alt="Canon EOS 90D" class="w-10 h-10 object-contain rounded-lg border border-slate-100 p-1">
                    <div>
                        <p class="text-sm font-semibold text-slate-800 group-hover:text-blue-600">Canon EOS 90D</p>
                        <p class="text-xs text-slate-400">Kamera & Fotografi</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-blue-600">Rp 75.000/hari</span>
            </a>

            <a href="{{ url('/katalog/epson-e500') }}" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                <div class="flex items-center gap-3">
                    <img src="/images/epson-e500.jpg" alt="Epson EB-E500" class="w-10 h-10 object-contain rounded-lg border border-slate-100 p-1">
                    <div>
                        <p class="text-sm font-semibold text-slate-800 group-hover:text-blue-600">Epson EB-E500</p>
                        <p class="text-xs text-slate-400">Multimedia & Presentasi</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-blue-600">Rp 50.000/hari</span>
            </a>

            <a href="{{ url('/katalog/jbl-eon-615') }}" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                <div class="flex items-center gap-3">
                    <img src="/images/jbl-eon.jpg" alt="JBL EON 615" class="w-10 h-10 object-contain rounded-lg border border-slate-100 p-1">
                    <div>
                        <p class="text-sm font-semibold text-slate-800 group-hover:text-blue-600">JBL EON 615</p>
                        <p class="text-xs text-slate-400">Audio & Sound System</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-blue-600">Rp 60.000/hari</span>
            </a>

            <a href="{{ url('/katalog/thinkpad-t14') }}" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-50 transition-colors group">
                <div class="flex items-center gap-3">
                    <img src="/images/thinkpad-t14.jpg" alt="Lenovo ThinkPad T14" class="w-10 h-10 object-contain rounded-lg border border-slate-100 p-1">
                    <div>
                        <p class="text-sm font-semibold text-slate-800 group-hover:text-blue-600">Lenovo ThinkPad T14</p>
                        <p class="text-xs text-slate-400">Komputer & IT</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-blue-600">Rp 90.000/hari</span>
            </a>
        </div>

        <!-- Footer Modal -->
        <div class="p-3 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
            <span>Tekan <kbd class="font-mono bg-white px-1.5 py-0.5 rounded border border-slate-200">ESC</kbd> untuk menutup</span>
            <a href="{{ route('katalog') }}" class="text-blue-600 font-semibold hover:underline">Buka Katalog Lengkap →</a>
        </div>
    </div>
</div>
