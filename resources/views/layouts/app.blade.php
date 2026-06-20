<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Akademik</title>
    
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">

        <span class="navbar-brand">
            Portal Akademik
        </span>

        <div>

           {{ auth()->user()?->name }}

            <form action="{{ route('logout') }}"
                  method="POST"
                  class="d-inline">

                @csrf

                <button class="btn btn-light btn-sm">
                    Logout
                </button>

            </form>

        </div>

    </div>
</nav>

<div class="container py-4">

    @yield('content')

</div>

</body>
</html>