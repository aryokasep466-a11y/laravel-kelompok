<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAryoController extends Controller
{
    public function index()
    {
        // Data tiruan berupa daftar tugas kuliah (array multidimensi)
        $daftarTugas = [
            [
                'matkul' => 'Pemrograman Web',
                'tugas' => 'Membuat CRUD Laravel dengan MySQL',
                'deadline' => '05 Juni 2026',
                'status' => 'Belum Selesai',
                'badge_color' => 'danger'
            ],
            [
                'matkul' => 'Basis Data',
                'tugas' => 'Normalisasi Database (1NF sampai 3NF)',
                'deadline' => '08 Juni 2026',
                'status' => 'Sedang Dikerjakan',
                'badge_color' => 'warning'
            ],
            [
                'matkul' => 'Kecerdasan Buatan',
                'tugas' => 'Implementasi Algoritma Naive Bayes',
                'deadline' => '12 Juni 2026',
                'status' => 'Selesai',
                'badge_color' => 'success'
            ]
        ];

        // Mengirim data ke view bernama aryo.blade.php
        return view('aryo', compact('daftarTugas'));
    }
}