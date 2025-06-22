<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Buscar por Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            color: #0d3b66;
        }
        .form-box {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(13, 59, 102, 0.2);
            max-width: 450px;
            width: 100%;
        }
        .form-label {
            color: black;
            font-weight: 600;
        }
        .form-control,
        .form-control:focus {
            border: 1.5px solid grey;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #1677ff;
            border-color: #1677ff;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #145da0;
            border-color: #145da0;
        }
        .return-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 position-relative">

<!-- Botón de regreso -->
<a href="{{ route('panel-alu') }}" class="btn btn-outline-secondary return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<!-- Contenedor del formulario -->
<div class="form-box text-center">
    <h4 class="mb-4">Buscar por Materia</h4>

    <form action="{{ route('search-subject-alu') }}" method="GET">
        <div class="mb-3 text-start">
            <label for="materia" class="form-label">Nombre o clave de la materia</label>
            <input type="text" id="materia" name="materia" class="form-control" required />
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">Buscar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
