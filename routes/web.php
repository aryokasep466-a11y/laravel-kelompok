<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TugasController;
use App\Models\Tugas;
use App\Http\Controllers\RegisterMahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

  Route::get('/register-mahasiswa', [RegisterMahasiswaController::class, 'create']);
  Route::post('/register-mahasiswa', [RegisterMahasiswaController::class, 'store']);

 Route::get('/login/dosen', function () {
        return view('auth.login', ['role' => 'dosen']);
    })->name('login.dosen');

    // Login Mahasiswa
    Route::get('/login/mahasiswa', function () {
        return view('auth.login', ['role' => 'mahasiswa']);
    })->name('login.mahasiswa');
    
    // Login Admin
    Route::get('/login/admin', function () {
        return view('auth.login', ['role' => 'admin']);
    })->name('login.admin');


Route::middleware(['auth'])->group(function () {

    // Proses login
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->name('login');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    Route::get('/dosen/dashboard', [DosenController::class, 'dashboard']);

    Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'dashboard']);

    Route::get('/mahasiswa/tugas', function () {
    $tugas = Tugas::all();
    return view('mahasiswa.tugas', compact('tugas'));
    });

    Route::get('/mahasiswa/nilai', function () {
        return view('mahasiswa.nilai');
    });

    Route::get('/dosen/tugas', [TugasController::class, 'index']);
    Route::post('/dosen/tugas', [TugasController::class, 'store']);
    Route::post('/mahasiswa/upload-tugas', [TugasController::class, 'upload'])
    ->name('mahasiswa.uploadTugas');

    Route::get('/dosen/pengumpulan', [TugasController::class, 'lihatPengumpulan'])
    ->name('dosen.pengumpulan');

    Route::get('/dosen/tugas', [TugasController::class, 'index']);
    Route::post('/dosen/tugas', [TugasController::class, 'store']);

    Route::get('/dosen/tugas/{id}/edit', [TugasController::class, 'edit']);
    Route::put('/dosen/tugas/{id}', [TugasController::class, 'update']);

    Route::delete('/dosen/tugas/{id}', [TugasController::class, 'destroy']);
});
require __DIR__.'/auth.php';