@extends('layouts.app')

@section('content')
<div class="container py-4">

    <!-- Header -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="bg-warning text-dark rounded-4 p-4 shadow">
                <h2 class="fw-bold mb-2">
                    🎓 Dashboard Mahasiswa
                </h2>

                <p class="mb-0">
                    Selamat datang, <strong>{{ Auth::user()->name }}</strong>
                </p>
            </div>
        </div>
    </div>

    <!-- Statistik -->

    <div class="card mt-4">
    <div class="card-header bg-primary text-white">
        Daftar Tugas
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Deadline</th>
                </tr>
            </thead>

            <tbody>
                @foreach($tugas as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->deadline }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    <div class="row mb-4">

        <div class="col-md-6 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body text-center">

                    <div class="display-5 text-primary mb-2">
                        📚
                    </div>

                    <h5>Tugas Aktif</h5>

                    <h2 class="fw-bold text-primary">
                        5
                    </h2>

                    <small class="text-muted">
                        Tugas yang harus dikumpulkan
                    </small>

                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body text-center">

                    <div class="display-5 text-success mb-2">
                        📝
                    </div>

                    <h5>Rata-rata Nilai</h5>

                    <h2 class="fw-bold text-success">
                        88
                    </h2>

                    <small class="text-muted">
                        Nilai akademik sementara
                    </small>

                </div>
            </div>
        </div>

    </div>

    <!-- Fitur Utama -->
    <h3 class="fw-bold mb-3">
        Fitur Utama
    </h3>

    <div class="row">

        <!-- Tugas -->
        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow h-100">

                <div class="card-body text-center">

                    <div class="display-4 text-primary">
                        📂
                    </div>

                    <h3 class="mt-3">
                        Tugas Saya
                    </h3>

                    <p class="text-muted">
                        Lihat tugas yang diberikan dosen dan upload jawaban tugas.
                    </p>

                    <div class="d-grid">
                        <a href="{{ url('/mahasiswa/tugas') }}"
                           class="btn btn-primary btn-lg">
                            Lihat Tugas
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <!-- Nilai -->
        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow h-100">

                <div class="card-body text-center">

                    <div class="display-4 text-success">
                        📊
                    </div>

                    <h3 class="mt-3">
                        Nilai Saya
                    </h3>

                    <p class="text-muted">
                        Melihat nilai tugas, UTS, UAS, dan nilai akhir.
                    </p>

                    <div class="d-grid">
                        <a href="{{ url('/mahasiswa/nilai') }}"
                           class="btn btn-success btn-lg">
                            Lihat Nilai
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Informasi -->
    <div class="card border-0 shadow mt-3">

        <div class="card-header bg-dark text-white">
            Informasi Akademik
        </div>

        <div class="card-body">

            <ul class="list-group">

                <li class="list-group-item">
                    📌 Tugas Pemrograman Web deadline 20 Juni 2026
                </li>

                <li class="list-group-item">
                    📌 Nilai Basis Data telah diperbarui
                </li>

                <li class="list-group-item">
                    📌 Ujian Tengah Semester dimulai minggu depan
                </li>

            </ul>

        </div>

    </div>

</div>
@endsection