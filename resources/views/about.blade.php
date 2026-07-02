@extends('layouts.app')

@section('content')
<div class="container py-5">

    <!-- Hero -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Portal Akademik</h1>
        <p class="lead text-muted">
            Sistem Informasi Akademik untuk mempermudah pengelolaan tugas
            antara dosen dan mahasiswa.
        </p>
    </div>

    <!-- Tentang -->
    <div class="card shadow border-0 mb-4">
        <div class="card-body p-4">
            <h3 class="mb-3">📖 Tentang Aplikasi</h3>
            <p>
                Portal Akademik adalah aplikasi berbasis web yang dirancang untuk
                membantu proses pembelajaran digital. Melalui sistem ini dosen
                dapat memberikan tugas, memantau pengumpulan tugas, serta memberikan
                penilaian kepada mahasiswa secara lebih efektif.
            </p>
        </div>
    </div>

    <!-- Fitur -->
    <h3 class="text-center mb-4">✨ Fitur Utama</h3>

    <div class="row g-4 mb-5">

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <h1>👨‍🎓</h1>
                    <h5>Manajemen Mahasiswa</h5>
                    <p class="text-muted">
                        Mengelola data mahasiswa secara terstruktur.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <h1>📝</h1>
                    <h5>Manajemen Tugas</h5>
                    <p class="text-muted">
                        Dosen dapat membuat dan mengelola tugas kuliah.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <h1>📂</h1>
                    <h5>Upload Tugas</h5>
                    <p class="text-muted">
                        Mahasiswa dapat mengumpulkan tugas secara online.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Teknologi -->
    <div class="card shadow border-0 mb-5">
        <div class="card-body">
            <h3>💻 Teknologi yang Digunakan</h3>

            <div class="row text-center mt-4">

                <div class="col-md-3">
                    <h4>Laravel 12</h4>
                </div>

                <div class="col-md-3">
                    <h4>PHP 8</h4>
                </div>

                <div class="col-md-3">
                    <h4>MySQL</h4>
                </div>

                <div class="col-md-3">
                    <h4>Bootstrap 5</h4>
                </div>

            </div>
        </div>
    </div>

    <!-- Tim -->
    <h3 class="text-center mb-4">👥 Tim Pengembang</h3>

    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/120"
                         class="rounded-circle mb-3">

                    <h5>Aryo Dwi P</h5>
                    <p class="text-muted">F1A250017</p>
                    <span class="badge bg-primary">
                        Anggota

                    <h5>Naufal Tsabita</h5>
                    <p class="text-muted">F1A250000</p>
                    <span class="badge bg-primary">
                        Anggota

                    <h5>Iqna</h5>
                    <p class="text-muted">F1A250000</p>
                    <span class="badge bg-primary">
                        Anggota

                    </span>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection