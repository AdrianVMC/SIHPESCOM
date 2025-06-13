<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .full-height {
            min-height: calc(100vh - 56px);
        }
        .search-button {
            font-size: 1.5rem;
            padding: 2rem;
        }
        .icon-large {
            font-size: 2.5rem;
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo o título clickeable -->
        <a href="{{ route('panel-alu') }}" class="navbar-brand m-0">
            SIHP - Alumno
        </a>

        <!-- Botón de cerrar sesión -->
        <a href="#" class="btn btn-outline-light">
            <i class="bi bi-box-arrow-right me-1"></i> Cerrar sesión
        </a>
    </div>
</nav>

<!-- Contenido -->
<div class="container d-flex flex-column justify-content-center align-items-center full-height text-center">
    <h2 class="mb-5">Búsqueda</h2>

    <div class="w-100" style="max-width: 600px;">
        <a href="{{ route('searchteacher') }}" class="btn btn-primary w-100 mb-4 search-button">
            <i class="bi bi-person-lines-fill d-block mb-2 icon-large"></i>
            Buscar por Profesor
        </a>

        <a href="{{ route('search-assignament') }}" class="btn btn-primary w-100 mb-4 search-button">
            <i class="bi bi-journal-text d-block mb-2 icon-large"></i>
            Buscar por Materia
        </a>

        <a href="{{ route('search-group') }}" class="btn btn-primary w-100 search-button">
            <i class="bi bi-people-fill d-block mb-2 icon-large"></i>
            Buscar por Grupo
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
