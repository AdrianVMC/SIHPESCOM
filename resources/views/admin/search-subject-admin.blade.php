<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Buscar por Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #0d1117;
            color: #f0f0f0;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
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
        .btn-outline-secondary {
            color: #e6edf3;
            border-color: #30363d;
        }
        .btn-outline-secondary:hover {
            background-color: #30363d;
            border-color: #2ea043;
        }
        .return-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body>

<a href="{{ route('panel-admin') }}" class="btn btn-outline-secondary return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="form-box text-center">
    <h4 class="mb-4">Buscar por Materia</h4>

    <form action="{{ route('search-subject-admin') }}" method="GET">
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
