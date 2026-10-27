@extends('layouts.app')

@section('title', 'Masuk Akun Mahasiswa - GearHub Perbanas Institute')

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
                <h1 class="text-2xl font-bold text-slate-900 font-['Space_Grotesk']">Masuk ke GearHub</h1>
                <p class="text-xs text-slate-500 mt-1">Gunakan akun mahasiswa atau email @perbanas.ac.id</p>
            </div>

            <!-- Login Form -->
            <form id="login-form" class="space-y-4">
                <div>
                    <label for="login-email" class="block text-xs font-semibold text-slate-700 mb-1.5">NIM atau Email Kampus</label>
                    <input type="text" id="login-email" required placeholder="NIM / nama@perbanas.ac.id" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="login-password" class="block text-xs font-semibold text-slate-700">Kata Sandi</label>
                        <a href="#" class="text-xs text-blue-600 hover:underline">Lupa sandi?</a>
                    </div>
                    <input type="password" id="login-password" required placeholder="••••••••" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500 border-slate-300">
                    <label for="remember" class="text-xs text-slate-600 cursor-pointer">Ingat saya di perangkat ini</label>
                </div>

                <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-sm transition-all shadow-md shadow-blue-500/20">
                    Masuk Sekarang
                </button>
            </form>

            <!-- Bottom Redirect -->
            <div class="mt-6 pt-6 border-t border-slate-100 text-center text-xs text-slate-500">
                Belum punya akun peminjam? 
                <a href="{{ route('register') }}" class="font-bold text-blue-600 hover:underline">Daftar Akun Mahasiswa</a>
            </div>
        </div>

    </div>
</div>
@endsection
