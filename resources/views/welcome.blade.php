<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            background: #f8f9fa;
        }

        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        .role-card{
            border: none;
            border-radius: 15px;
            transition: .3s;
        }

        .role-card:hover{
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,.15);
        }

        .icon-box{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            font-size: 35px;
        }

        .stats-card{
            border-radius: 15px;
            border: none;
        }

        footer{
            background: #212529;
            color: white;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-mortarboard-fill"></i>
            Portal Akademik
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#fitur" class="nav-link">Fitur</a>
                </li>
                <li class="nav-item">
                    <a href="#akses" class="nav-link">Akses</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-light ms-2">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h1 class="display-4 fw-bold">
                    Sistem Informasi Akademik
                </h1>

                <p class="lead mt-3">
                    Platform terintegrasi untuk mengelola data mahasiswa,
                    dosen, jadwal kuliah, nilai, dan administrasi akademik.
                </p>

                <a href="{{ route('login') }}" class="btn btn-warning btn-lg mt-3">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Masuk Sekarang
                </a>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                     class="img-fluid"
                     width="350"
                     alt="Akademik">
            </div>

        </div>
    </div>
</section>

<!-- Statistik -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card stats-card shadow-sm text-center p-4">
                    <h2 class="text-primary fw-bold">500+</h2>
                    <p class="mb-0">Mahasiswa Aktif</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stats-card shadow-sm text-center p-4">
                    <h2 class="text-success fw-bold">50+</h2>
                    <p class="mb-0">Dosen</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stats-card shadow-sm text-center p-4">
                    <h2 class="text-danger fw-bold">20+</h2>
                    <p class="mb-0">Program Studi</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Fitur -->
<section id="fitur" class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Fitur Utama</h2>
            <p class="text-muted">
                Memudahkan pengelolaan kegiatan akademik kampus
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card role-card shadow-sm h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-calendar-week fs-1 text-primary"></i>
                        <h5 class="mt-3">Jadwal Kuliah</h5>
                        <p class="text-muted">
                            Informasi jadwal kuliah yang terstruktur.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card role-card shadow-sm h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-journal-check fs-1 text-success"></i>
                        <h5 class="mt-3">Penilaian</h5>
                        <p class="text-muted">
                            Input dan monitoring nilai mahasiswa.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card role-card shadow-sm h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-file-earmark-text fs-1 text-danger"></i>
                        <h5 class="mt-3">KRS & KHS</h5>
                        <p class="text-muted">
                            Pengelolaan KRS dan hasil studi mahasiswa.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Akses -->
<section id="akses" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Akses Sistem</h2>
            <p class="text-muted">
                Pilih akses sesuai peran pengguna
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card role-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-primary text-white">
                            <i class="bi bi-person-gear"></i>
                        </div>

                        <h4 class="mt-3">Admin</h4>

                        <p class="text-muted">
                            Kelola data master dan sistem.
                        </p>

                       <a href="{{ route('login.admin') }}" class="btn btn-primary">
                          Login Admin
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card role-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-success text-white">
                            <i class="bi bi-person-workspace"></i>
                        </div>

                        <h4 class="mt-3">Dosen</h4>

                        <p class="text-muted">
                            Input nilai dan absensi mahasiswa.
                        </p>

                        <a href="{{ route('login.dosen') }}" class="btn btn-success">
                         Login Dosen
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card role-card shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning text-white">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <h4 class="mt-3">Mahasiswa</h4>

                        <p class="text-muted">
                            Akses KRS, KHS, dan jadwal kuliah.
                        </p>

                        <a href="{{ route('login.mahasiswa') }}" class="btn btn-warning">
                          Login Mahasiswa
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<footer class="py-3 text-center">
    <div class="container">
        <small>
            © {{ date('Y') }} Portal Akademik | Sistem Informasi Akademik
        </small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>