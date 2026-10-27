<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes - GearHub Perbanas Institute
|--------------------------------------------------------------------------
*/

// Halaman Utama / Landing Page
Route::get('/', [PageController::class, 'beranda'])->name('beranda');

// Halaman Katalog Peralatan & Detail
Route::get('/katalog', [PageController::class, 'katalog'])->name('katalog');
Route::get('/katalog/{id}', [PageController::class, 'katalogDetail'])->name('katalog.detail');

// Halaman Menu Navigasi Lainnya (Slicing Pages)
Route::get('/cara-menyewa', [PageController::class, 'caraMenyewa'])->name('cara-menyewa');
Route::get('/kebijakan', [PageController::class, 'kebijakan'])->name('kebijakan');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Halaman Autentikasi Mahasiswa
Route::get('/masuk', [PageController::class, 'login'])->name('login');
Route::get('/daftar', [PageController::class, 'register'])->name('register');
