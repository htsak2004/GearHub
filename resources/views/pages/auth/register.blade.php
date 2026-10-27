@extends('layouts.app')

@section('title', 'Daftar Akun Mahasiswa - GearHub Perbanas Institute')

@section('content')
<div class="bg-slate-50/60 min-h-screen py-12 md:py-20 flex items-center justify-center">
    <div class="max-w-md w-full mx-auto px-4 sm:px-6">
        
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-sm">
            <!-- Header Brand -->
            <div class="text-center mb-8">
                <a href="{{ route('beranda') }}" class="inline-flex items-center gap-2.5 mb-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white shadow-md shadow-blue-500/20">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M12 2l7.5 4.33v8.66L12 22l-7.5-4.33V6.33L12 2z"/>
                            <circle cx="12" cy="12" r="3.2"/>
                        </svg>
                    </div>
                    <span class="text-xl font-extrabold text-slate-900 font-['Space_Grotesk']">Gear<span class="text-blue-600">Hub</span></span>
                </a>
                <h1 class="text-2xl font-bold text-slate-900 font-['Space_Grotesk']">Daftar Akun Mahasiswa</h1>
                <p class="text-xs text-slate-500 mt-1">Daftarkan diri Anda untuk kemudahan sewa peralatan kampus</p>
            </div>

            <!-- Register Form -->
            <form id="register-form" class="space-y-4">
                <div>
                    <label for="reg-name" class="block text-xs font-semibold text-slate-700 mb-1.5">Nama Lengkap</label>
                    <input type="text" id="reg-name" required placeholder="Nama sesuai KTM" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                </div>

                <div>
                    <label for="reg-nim" class="block text-xs font-semibold text-slate-700 mb-1.5">Nomor Induk Mahasiswa (NIM)</label>
                    <input type="text" id="reg-nim" required placeholder="Contoh: 2112000123" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                </div>

                <div>
                    <label for="reg-email" class="block text-xs font-semibold text-slate-700 mb-1.5">Email Mahasiswa / Kampus</label>
                    <input type="email" id="reg-email" required placeholder="nama@perbanas.ac.id" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                </div>

                <div>
                    <label for="reg-wa" class="block text-xs font-semibold text-slate-700 mb-1.5">Nomor WhatsApp Aktif</label>
                    <input type="tel" id="reg-wa" required placeholder="081234567890" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                </div>

                <div>
                    <label for="reg-password" class="block text-xs font-semibold text-slate-700 mb-1.5">Kata Sandi</label>
                    <input type="password" id="reg-password" required placeholder="Minimal 8 karakter" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-sm transition-all shadow-md shadow-blue-500/20">
                        Buat Akun Sekarang
                    </button>
                </div>
            </form>

            <!-- Bottom Redirect -->
            <div class="mt-6 pt-6 border-t border-slate-100 text-center text-xs text-slate-500">
                Sudah memiliki akun? 
                <a href="{{ route('login') }}" class="font-bold text-blue-600 hover:underline">Masuk ke Akun Anda</a>
            </div>
        </div>

    </div>
</div>
@endsection
