<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
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
            margin: 0 auto;
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

        .cancel-button {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
        }
    </style>
</head>
<body class="position-relative d-flex justify-content-center align-items-center min-vh-100">

<!-- Botón de regreso -->
<a href="{{ route('panel-admin') }}" class="btn btn-outline-light return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="container text-center">
    <h2 class="mb-4">Registrar grupo</h2>

    <form action="{{ route('registergroup') }}" method="POST" class="form-box">
        @csrf
        <div class="mb-3 text-start">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label for="semestre" class="form-label">Semestre</label>
            <input type="text" id="semestre" name="semestre" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label for="turno" class="form-label">Turno</label>
            <input type="text" id="turno" name="turno" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label for="area" class="form-label">Área académica</label>
            <textarea id="area" name="area" class="form-control" rows="2" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Registrar información</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
