<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Buscar por Grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
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
<body class="d-flex justify-content-center align-items-center min-vh-100 position-relative">

<!-- Botón de regreso -->
<a href="{{ route('panel-admin') }}" class="btn btn-outline-secondary return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<!-- Contenedor del formulario -->
<div class="form-box text-center">
    <h4 class="mb-4">Buscar por Grupo</h4>

    <form action="{{ route('search-group-admin') }}" method="GET">
        <div class="mb-3 text-start">
            <label for="semestre" class="form-label">Semestre</label>
            <select id="semestre" name="semestre" class="form-select" required>
                <option value="" disabled selected>Selecciona un semestre</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
                <option value="3">3º Semestre</option>
                <option value="4">4º Semestre</option>
                <option value="5">5º Semestre</option>
                <option value="6">6º Semestre</option>
                <option value="7">7º Semestre</option>
                <option value="8">8º Semestre</option>
                <option value="9">9º Semestre</option>
                <option value="10">10º Semestre</option>
            </select>
        </div>

        <div class="mb-3 text-start">
            <label for="grupo" class="form-label">Grupo</label>
            <select id="grupo" name="grupo" class="form-select" required>
                <option value="" disabled selected>Selecciona un grupo</option>
                <option value="A">Grupo A</option>
                <option value="B">Grupo B</option>
                <option value="C">Grupo C</option>
                <option value="D">Grupo D</option>
                <option value="E">Grupo E</option>
                <!-- Añade más grupos según sea necesario -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">Buscar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
