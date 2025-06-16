<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar por Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d1117;
            color: #f0f0f0;
        }
        .form-box {
            background-color: #161b22;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
            max-width: 500px;
            width: 100%;
        }
        .form-label {
            color: #c9d1d9;
        }
        .form-control,
        .form-control:focus {
            background-color: #21262d;
            color: #e6edf3;
            border: 1px solid #30363d;
        }
        .btn-primary {
            background-color: #238636;
            border-color: #2ea043;
        }
        .btn-primary:hover {
            background-color: #2ea043;
            border-color: #238636;
        }
        .btn-outline-light {
            border-color: #30363d;
            color: #e6edf3;
        }
        .btn-outline-light:hover {
            background-color: #30363d;
        }
        .return-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100 position-relative">

<!-- Botón de regreso -->
<a href="{{ route('panel-admin') }}" class="btn btn-outline-secondary return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<!-- Contenedor del formulario -->
<div class="form-box text-center">
    <h4 class="mb-4">Buscar por Profesor</h4>

    <form action="{{ route('main') }}" method="GET">
        <div class="mb-3 text-start">
            <label for="nombre" class="form-label">Nombre del profesor</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">Buscar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
