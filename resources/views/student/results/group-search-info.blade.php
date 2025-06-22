<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados por Grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            color: #0d3b66;
        }
        .container {
            margin-top: 3rem;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(13, 59, 102, 0.1);
        }
        .card-header {
            background-color: #1677ff;
            color: white;
            font-weight: bold;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .btn-back {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body>
<a href="{{ route('panel-alu') }}" class="btn btn-outline-secondary btn-back">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="container">
    <h3 class="text-center mb-4">Horario del grupo {{ $grupo }} - {{ ucfirst($dia) }}</h3>

    @if (count($resultados) === 0)
        <div class="alert alert-warning text-center">
            No hay clases programadas para este grupo el día {{ ucfirst($dia) }}.
        </div>
    @else
        @foreach ($resultados as $resultado)
            <div class="card mb-3">
                <div class="card-header">{{ $resultado['materia'] }}</div>
                <div class="card-body">
                    <p><strong>Horario:</strong> {{ $resultado['hora_inicio'] }} - {{ $resultado['hora_fin'] }}</p>
                    <p><strong>Aula:</strong> {{ $resultado['aula'] }} - {{ $resultado['edificio'] }}</p>
                    <p><strong>Profesor:</strong> {{ $resultado['profesor'] }}</p>
                </div>
            </div>
        @endforeach
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
