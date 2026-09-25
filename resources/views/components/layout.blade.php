<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Livros - Início</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('books.index') }}">
                <i class="bi bi-book me-2 fs-4"></i>
                Painel de Livros
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('index') ]) href="{{ route('index') }}">Início</a></li>
                    <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('books.*') ])  href="{{ route('books.index') }}">Livros</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @if (session('success'))
    <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
        </div>
    </div>
    @endif


    {{ $slot }}

</body>
</html>
