@extends('layouts.app')

@section('title', 'FAQ - Pertanyaan Umum GearHub Perbanas Institute')

@section('content')
<div class="bg-slate-50/60 min-h-screen py-10 md:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6" aria-label="Breadcrumb">
            <a href="{{ route('beranda') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold">FAQ</span>
        </nav>

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200/80 px-4 py-1.5 rounded-full text-xs font-semibold text-blue-700 shadow-sm mb-3">
                Pusat Bantuan & Tanya Jawab
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                Pertanyaan yang Sering Diajukan
            </h1>
            <p class="text-slate-500 text-sm sm:text-base mt-2">
                Temukan jawaban lengkap seputar prosedur penyewaan, pembayaran, pengambilan, dan ketentuan di GearHub.
            </p>
        </div>

        <!-- FAQ Accordion List -->
        <div class="space-y-4 mb-16">
            
            <div class="faq-item bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                    <span class="text-base font-bold text-slate-900">
                        Siapa saja yang dapat menyewa peralatan di GearHub?
                    </span>
                    <span class="faq-icon text-slate-400 font-bold text-2xl shrink-0 transition-transform duration-200">+</span>
                </button>
                <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
                    Seluruh mahasiswa aktif, perwakilan organisasi mahasiswa (BEM, HIMA, UKM), serta dosen dan staf Perbanas Institute yang memiliki Kartu Tanda Mahasiswa (KTM) aktif atau surat tugas kegiatan resmi kampus.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                    <span class="text-base font-bold text-slate-900">
                        Bagaimana cara melakukan pemesanan peralatan?
                    </span>
                    <span class="faq-icon text-slate-400 font-bold text-2xl shrink-0 transition-transform duration-200">+</span>
                </button>
                <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
                    Pilih unit yang Anda butuhkan melalui halaman Katalog, pilih durasi sewa, ajukan pemesanan secara online, lalu lakukan konfirmasi jadwal serah terima via WhatsApp admin atau datang langsung ke Counter kampus.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                    <span class="text-base font-bold text-slate-900">
                        Metode pembayaran apa saja yang diterima?
                    </span>
                    <span class="faq-icon text-slate-400 font-bold text-2xl shrink-0 transition-transform duration-200">+</span>
                </button>
                <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
                    Pembayaran dapat dilakukan melalui Transfer Bank Virtual Account (BCA, Mandiri, BRI, BNI), QRIS dari seluruh aplikasi e-wallet & mobile banking, serta pembayaran tunai/debit di Counter Hub.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                    <span class="text-base font-bold text-slate-900">
                        Di mana lokasi pengambilan dan pengembalian barang?
                    </span>
                    <span class="faq-icon text-slate-400 font-bold text-2xl shrink-0 transition-transform duration-200">+</span>
                </button>
                <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
                    Pengambilan dan pengembalian dilakukan di Counter Operasional GearHub di area kampus Perbanas Institute, Jl. Perbanas, Karet Kuningan, Jakarta Selatan.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                    <span class="text-base font-bold text-slate-900">
                        Bagaimana jika terjadi kerusakan atau kehilangan kelengkapan?
                    </span>
                    <span class="faq-icon text-slate-400 font-bold text-2xl shrink-0 transition-transform duration-200">+</span>
                </button>
                <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
                    Setiap unit melalui pemeriksaan bersama sebelum dan sesudah peminjaman. Apabila terjadi kerusakan akibat kelalaian atau kehilangan aksesoris (misalnya kabel, baterai, tutup lensa), penyewa bertanggung jawab atas biaya penggantian sesuai harga resmi.
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <button type="button" class="faq-question w-full flex items-center justify-between text-left gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false">
                    <span class="text-base font-bold text-slate-900">
                        Apakah ada diskon khusus untuk kepanitiaan ormawa?
                    </span>
                    <span class="faq-icon text-slate-400 font-bold text-2xl shrink-0 transition-transform duration-200">+</span>
                </button>
                <div class="faq-answer hidden mt-3 pt-3 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
                    Ya, kepanitiaan resmi HIMA, BEM, dan UKM yang terdaftar di Perbanas Institute mendapatkan potongan harga khusus dan kemudahan koordinasi gladi resik.
                </div>
            </div>

        </div>

        <!-- Help Box -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 text-center shadow-sm">
            <h3 class="text-xl font-bold text-slate-900 font-['Space_Grotesk'] mb-2">
                Punya Pertanyaan Lain yang Belum Terjawab?
            </h3>
            <p class="text-slate-500 text-sm mb-6">
                Tim layanan GearHub Perbanas Institute siap membantu Anda setiap hari kerja.
            </p>
            <a href="{{ route('kontak') }}" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl text-sm transition-colors inline-block shadow-sm">
                Hubungi Kami Sekarang
            </a>
        </div>

    </div>
</div>
@endsection
