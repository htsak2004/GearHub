@extends('layouts.app')

@section('title', 'Kontak & Lokasi Hub - GearHub Perbanas Institute')

@section('content')
<div class="bg-slate-50/60 min-h-screen py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6" aria-label="Breadcrumb">
            <a href="{{ route('beranda') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold">Kontak</span>
        </nav>

        <!-- Header -->
        <div class="mb-12">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200/80 px-4 py-1.5 rounded-full text-xs font-semibold text-blue-700 shadow-sm mb-3">
                Layanan & Bantuan Kampus
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                Hubungi GearHub Perbanas
            </h1>
            <p class="text-slate-500 text-sm sm:text-base mt-2 max-w-2xl">
                Ada pertanyaan seputar ketersediaan unit, kerjasama kepanitiaan ormawa, atau konsultasi kebutuhan teknis? Kami siap membantu.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left: Contact Details & Info (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                <!-- Location Box -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-slate-900 mb-1 font-['Space_Grotesk']">Lokasi Counter Kampus</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Perbanas Institute<br>
                                Jl. Perbanas, Karet Kuningan, Setiabudi, Jakarta Selatan 12940
                            </p>
                            <span class="text-xs text-blue-600 font-semibold mt-2 inline-block">Gedung Unit VI Lt. 1 (Area Kemahasiswaan)</span>
                        </div>
                    </div>
                </div>

                <!-- Contact Channels -->
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 block">Email Resmi:</span>
                            <a href="mailto:gearhub@perbanas.ac.id" class="text-sm font-bold text-slate-900 hover:text-blue-600 transition-colors">gearhub@perbanas.ac.id</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-3 border-t border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.81 13.47 3.81 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 block">WhatsApp Hotline:</span>
                            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-slate-900 hover:text-emerald-600 transition-colors">+62 812-3456-7890</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-3 border-t border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 block">Jam Operasional:</span>
                            <span class="text-sm font-semibold text-slate-900">Senin - Jumat: 08.00 - 17.00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Interactive Contact / Message Form (7 cols) -->
            <div class="lg:col-span-7 bg-white border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-sm">
                <h2 class="text-xl font-bold text-slate-900 font-['Space_Grotesk'] mb-2">
                    Kirim Pesan / Pengajuan Sewa Khusus
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mb-6">
                    Isi formulir berikut dan tim kami akan segera menghubungi Anda melalui nomor WhatsApp atau email.
                </p>

                <form id="contact-page-form" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="contact-name" class="block text-xs font-semibold text-slate-700 mb-1.5">Nama Lengkap</label>
                            <input type="text" id="contact-name" required placeholder="Contoh: Budi Santoso" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div>
                            <label for="contact-nim" class="block text-xs font-semibold text-slate-700 mb-1.5">NIM Mahasiswa</label>
                            <input type="text" id="contact-nim" required placeholder="Contoh: 211200123" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="contact-wa" class="block text-xs font-semibold text-slate-700 mb-1.5">No. WhatsApp</label>
                            <input type="tel" id="contact-wa" required placeholder="Contoh: 081234567890" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div>
                            <label for="contact-org" class="block text-xs font-semibold text-slate-700 mb-1.5">Organisasi / Kepanitiaan (Opsional)</label>
                            <input type="text" id="contact-org" placeholder="Contoh: BEM Perbanas / HIMA Akuntansi" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                        </div>
                    </div>

                    <div>
                        <label for="contact-message" class="block text-xs font-semibold text-slate-700 mb-1.5">Pesan / Kebutuhan Alat</label>
                        <textarea id="contact-message" rows="4" required placeholder="Jelaskan jenis alat yang dibutuhkan, tanggal acara, serta estimasi durasi..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-sm transition-all shadow-md shadow-blue-500/20 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        <span>Kirim Pesan ke Admin</span>
                    </button>
                </form>

                <div id="contact-success-msg" class="hidden mt-4 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold">
                    ✓ Pesan Anda berhasil dikirim! Admin GearHub akan segera menghubungi Anda melalui nomor WhatsApp yang terdaftar.
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
