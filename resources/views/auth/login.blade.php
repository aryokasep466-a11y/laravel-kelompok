<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg,#2563eb,#7c3aed);
            min-height:100vh;
        }

        .login-card{
            border:none;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        .logo{
            font-size:60px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-md-5">

            <div class="card login-card">
                <div class="card-body p-5">

                    <div class="text-center mb-4">
                        <div class="logo">🎓</div>
                        <h2 class="fw-bold">Portal Akademik</h2>
                        <p class="text-muted">
                            Silakan login untuk melanjutkan
                        </p>
                    </div>

                    {{-- Error Login --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    {{-- Status Session --}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <input type="hidden" name="role" value="{{ $role }}">

                        <div class="mb-3">
                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email') }}"
                                required
                                autofocus
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required
                            >
                        </div>

                        <div class="form-check mb-3">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember"
                            >

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>

                    <hr>

                    <div class="text-center mt-3">
                      <a href="{{ url('/register-mahasiswa') }}" class="btn btn-success">
                         Register Mahasiswa
                      </a>
                    </div>

                    <div class="text-center">
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary">
                            Kembali ke Beranda
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>