<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HalamanAryoController extends Controller
{
    // Kita buat data tugasnya global di dalam class ini agar bisa diakses semua fungsi
    private function getDaftarTugas() {
        return [
            [
                'matkul' => 'Pemrograman Web',
                'tugas' => 'Membuat CRUD Laravel dengan MySQL',
                'deadline' => '2026-06-05',
                'status' => 'Belum Selesai',
            ],
            [
                'matkul' => 'Basis Data',
                'tugas' => 'Normalisasi Database (1NF sampai 3NF)',
                'deadline' => '2026-06-08',
                'status' => 'Sedang Dikerjakan',
            ],
            [
                'matkul' => 'Kecerdasan Buatan',
                'tugas' => 'Implementasi Algoritma Naive Bayes',
                'deadline' => '2026-06-01',
                'status' => 'Belum Selesai',
            ],
        ];
    }

    // Halaman 1: Daftar Tugas
    public function index()
    {
        $daftarTugas = $this->getDaftarTugas();
        $hariIni = Carbon::today();
        return view('aryo', compact('daftarTugas', 'hariIni'));
    }

    // Halaman 2: Form Tambah Tugas
    public function tambahTugas()
    {
        return view('aryo-tambahan'); // Mengarah ke file aryo-tambahan.blade.php
    }

    // Halaman 3: Info Tambahan
    public function infoTambahan()
    {
        $daftarTugas = $this->getDaftarTugas();
        return view('aryo-info', compact('daftarTugas')); // Mengarah ke file aryo-info.blade.php
    }
}