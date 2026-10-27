@extends('layouts.app')

@section('title', 'Kebijakan & Syarat Ketentuan - GearHub Perbanas Institute')

@section('content')
<div class="bg-slate-50/60 min-h-screen py-10 md:py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6" aria-label="Breadcrumb">
            <a href="{{ route('beranda') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold">Kebijakan & Ketentuan</span>
        </nav>

        <!-- Header -->
        <div class="mb-10">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200/80 px-4 py-1.5 rounded-full text-xs font-semibold text-blue-700 shadow-sm mb-3">
                Transparansi & Keamanan Bersama
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                Kebijakan Sewa & Ketentuan Layanan
            </h1>
            <p class="text-slate-500 text-sm sm:text-base mt-2">
                Pedoman resmi pemakaian fasilitas peralatan kampus untuk menjamin ketersediaan, perawatan, dan keselamatan seluruh unit GearHub.
            </p>
        </div>

        <!-- Policy Cards Section -->
        <div class="space-y-6">
            
            <!-- Section 1: Durasi & Waktu Sewa -->
            <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <h2 class="text-lg font-bold text-slate-900 font-['Space_Grotesk'] mb-3 flex items-center gap-2.5">
                    <span class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center text-sm font-bold">1</span>
                    Perhitungan Durasi Sewa
                </h2>
                <div class="text-sm text-slate-600 space-y-2 leading-relaxed">
                    <p>• Hitungan 1 hari sewa berlaku untuk periode 24 jam terhitung sejak jam penandatanganan berita acara serah terima.</p>
                    <p>• Toleransi waktu pengembalian diberikan maksimal 60 menit (1 jam) dari jadwal kesepakatan.</p>
                    <p>• Keterlambatan pengembalian yang melebihi batas toleransi tanpa perpanjangan konfirmasi akan dikenakan denda proporsional per jam atau tarif hari penuh berikutnya.</p>
                </div>
            </div>

            <!-- Section 2: Jaminan & Verifikasi -->
            <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <h2 class="text-lg font-bold text-slate-900 font-['Space_Grotesk'] mb-3 flex items-center gap-2.5">
                    <span class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center text-sm font-bold">2</span>
                    Identitas & Jaminan Peminjaman
                </h2>
                <div class="text-sm text-slate-600 space-y-2 leading-relaxed">
                    <p>• Peminjam perseorangan wajib meninggalkan Kartu Tanda Mahasiswa (KTM) asli yang masih aktif selama masa peminjaman.</p>
                    <p>• Bagi peminjaman atas nama kepanitiaan ormawa resmi (BEM/HIMA/UKM), cukup melampirkan surat tugas yang ditandatangani ketua panitia/pembina organisasi.</p>
                    <p>• KTM akan diserahkan kembali secara utuh saat unit dikembalikan dalam kondisi baik dan lengkap.</p>
                </div>
            </div>

            <!-- Section 3: Cek Fisik & Tanggung Jawab Kerusakan -->
            <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <h2 class="text-lg font-bold text-slate-900 font-['Space_Grotesk'] mb-3 flex items-center gap-2.5">
                    <span class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center text-sm font-bold">3</span>
                    Uji Fungsi & Tanggung Jawab Pemakaian
                </h2>
                <div class="text-sm text-slate-600 space-y-2 leading-relaxed">
                    <p>• Seluruh peralatan wajib dicek dan diuji fungsi bersama (kondisi bodi, sensor, lensa, port, kabel, baterai) saat pengambilan di Hub.</p>
                    <p>• Kerusakan yang terjadi akibat kelalaian pemakaian (terjatuh, terkena cairan, hilang kelengkapan) menjadi tanggung jawab penyewa untuk perbaikan resmi atau penggantian part yang setara.</p>
                    <p>• Keausan normal akibat pemakaian wajar (normal wear and tear) tidak dikenakan biaya tambahan.</p>
                </div>
            </div>

            <!-- Section 4: Pembatalan & Perpanjangan -->
            <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <h2 class="text-lg font-bold text-slate-900 font-['Space_Grotesk'] mb-3 flex items-center gap-2.5">
                    <span class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center text-sm font-bold">4</span>
                    Pembatalan & Perpanjangan Jadwal
                </h2>
                <div class="text-sm text-slate-600 space-y-2 leading-relaxed">
                    <p>• Pembatalan pemesanan dapat dilakukan maksimal H-1 sebelum tanggal pengambilan tanpa biaya penalti.</p>
                    <p>• Perpanjangan durasi sewa dapat diajukan minimal 6 jam sebelum waktu sewa berakhir, dengan catatan unit belum di-booking oleh mahasiswa lain.</p>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
