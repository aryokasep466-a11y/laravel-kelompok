<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tugas Kuliah</title>
    <!-- Bootstrap 5 CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">🎓 MahasiswaTask</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col">
                <h2 class="fw-bold text-dark">Daftar Tugas Kuliah - Aryo</h2>
                <p class="text-muted">Pantau status pengerjaan tugas akademik Anda di sini.</p>
            </div>
        </div>

        <!-- Tabel Tugas Dinamis -->
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 5%">#</th>
                                <th scope="col" style="width: 25%">Mata Kuliah</th>
                                <th scope="col" style="width: 40%">Detail Tugas</th>
                                <th scope="col" style="width: 15%">Deadline</th>
                                <th scope="col" style="width: 15%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop Data Menggunakan Blade Engine Laravel -->
                            @foreach($daftarTugas as $index => $tugas)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td class="fw-semibold text-primary">{{ $tugas['matkul'] }}</td>
                                <td>{{ $tugas['tugas'] }}</td>
                                <td><span class="text-secondary">{{ $tugas['deadline'] }}</span></td>
                                <td>
                                    <!-- Warna badge diambil dinamis dari controller -->
                                    <span class="badge bg-{{ $tugas['badge_color'] }} px-3 py-2 fs-7 rounded-pill">
                                        {{ $tugas['status'] }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>