@extends('layouts.app')

@section('content')
<div class="container py-4">

    <!-- Header -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="bg-success text-white rounded-4 p-4 shadow">
                <h2 class="fw-bold mb-2">
                    <i class="bi bi-person-workspace"></i> Dashboard Dosen
                </h2>
                <p class="mb-0">
                    Selamat datang, <strong>{{ Auth::user()->name }}</strong>
                </p>
            </div>
        </div>
    </div>

    <!-- Statistik -->
    <div class="row mb-4">

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill text-primary fs-1"></i>
                    <h5 class="mt-3">Mahasiswa</h5>
                    <h3 class="fw-bold text-primary">120</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                    <i class="bi bi-journal-bookmark-fill text-success fs-1"></i>
                    <h5 class="mt-3">Mata Kuliah</h5>
                    <h3 class="fw-bold text-success">5</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                    <i class="bi bi-file-earmark-text-fill text-warning fs-1"></i>
                    <h5 class="mt-3">Tugas Aktif</h5>
                    <h3 class="fw-bold text-warning">8</h3>
                </div>
            </div>
        </div>

    </div>

    <!-- Fitur Utama -->
    <h3 class="fw-bold mb-3">Fitur Utama</h3>

    <div class="row">

        <!-- Absensi -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-check text-primary fs-1"></i>
                    <h4 class="mt-3">Absensi</h4>
                    <p class="text-muted">
                        Kelola kehadiran mahasiswa setiap pertemuan.
                    </p>

                    <a href="/dosen/absensi" class="btn btn-primary">
                        Kelola Absensi
                       </a>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
    <div class="card shadow text-center p-4">
        <h2>📂</h2>
        <h3>Lihat Pengumpulan</h3>
        <p>Lihat tugas yang sudah dikumpulkan mahasiswa.</p>

        <a href="{{ route('dosen.pengumpulan') }}"
           class="btn btn-warning">
            Lihat Pengumpulan
        </a>
    </div>
</div>

        <!-- Kirim Tugas -->
    
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                    <i class="bi bi-upload text-success fs-1"></i>
                    <h4 class="mt-3">Kirim Tugas</h4>
                    <p class="text-muted">
                        Buat dan bagikan tugas kepada mahasiswa.
                    </p>

                    <a href="/dosen/tugas" class="btn btn-success">
                      Kelola Tugas

                    </a>
                </div>
            </div>
        </div>
           
        <!-- Input Nilai -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                    <i class="bi bi-pencil-square text-danger fs-1"></i>
                    <h4 class="mt-3">Input Nilai</h4>
                    <p class="text-muted">
                        Input dan monitoring nilai mahasiswa.
                    </p>

                    <a href="/dosen/nilai" class="btn btn-danger">
                      Input Nilai

                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Aktivitas -->
    <div class="card border-0 shadow mt-4">
        <div class="card-header bg-dark text-white">
            Aktivitas Terbaru
        </div>

        <div class="card-body">

            <ul class="list-group">

                <li class="list-group-item">
                    ✔ Tugas Pemrograman Web berhasil dibuat
                </li>

                <li class="list-group-item">
                    ✔ Nilai UTS kelas TI-3A telah diperbarui
                </li>

                <li class="list-group-item">
                    ✔ Absensi Pertemuan 10 telah disimpan
                </li>

            </ul>

        </div>
    </div>

</div>
@endsection