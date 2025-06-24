<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d1117;
            color: #f0f0f0;
        }
        .section-title {
            color: #ffffff;
            margin-bottom: 2rem;
        }
        .btn-custom {
            font-size: 1.25rem;
            padding: 2rem;
            border-radius: 10px;
        }
        .icon-large {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        .card-section {
            background-color: #161b22;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 3rem;
        }
        .btn-primary {
            background-color: #238636;
            border-color: #2ea043;
        }
        .btn-primary:hover {
            background-color: #2ea043;
            border-color: #238636;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ route('panel-admin') }}" class="navbar-brand">SIHP - Admin</a>
        @auth
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="btn btn-outline-light d-flex align-items-center">
                    <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
                </button>
            </form>
        @endauth
    </div>
</nav>

<div class="container py-5">

    <div class="card-section text-center">
        <h2 class="section-title">Búsqueda</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <a href="{{ route('form-search-teacher-admin') }}" class="btn btn-primary w-100 btn-custom">
                    <i class="bi bi-person-lines-fill icon-large"></i>
                    Buscar por Profesor
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('form-search-subject-admin') }}" class="btn btn-primary w-100 btn-custom">
                    <i class="bi bi-journal-text icon-large"></i>
                    Buscar por Materia
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('form-search-group-admin') }}" class="btn btn-primary w-100 btn-custom">
                    <i class="bi bi-people-fill icon-large"></i>
                    Buscar por Grupo
                </a>
            </div>
        </div>
    </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
