<?php

use App\Http\Controllers\HalamanAryoController;
use Illuminate\Support\Facades\Route;

// Halaman 1: Daftar Semua Tugas
Route::get('/halaman-aryo', [HalamanAryoController::class, 'index'])->name('tugas.index');

// Halaman 2: Form Tambah Tugas Baru
Route::get('/halaman-aryo/tambah', [HalamanAryoController::class, 'tambahTugas'])->name('tugas.create');

// Halaman 3: Info Tambahan / Detail
Route::get('/halaman-aryo/info', [HalamanAryoController::class, 'infoTambahan'])->name('tugas.info');