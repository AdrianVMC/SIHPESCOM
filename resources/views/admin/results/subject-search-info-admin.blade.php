<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados por Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #0d1117;
            color: #f0f0f0;
        }
        .container {
            padding-top: 2rem;
        }
        .card {
            background-color: #161b22;
            border: none;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
        }
        .card-title {
            color: #e6edf3;
        }
        .list-group-item {
            background-color: #21262d;
            border: 1px solid #30363d;
            color: #e6edf3;
        }
        .list-group-item strong {
            color: #58a6ff;
        }
        .text-muted {
            color: #8b949e !important;
        }
        .btn-outline-secondary {
            color: #e6edf3;
            border-color: #30363d;
        }
        .btn-outline-secondary:hover {
            background-color: #30363d;
            border-color: #2ea043;
        }
        .alert-warning {
            background-color: #f0ad4e;
            color: #0d1117;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="d-flex gap-2 mb-3">
        <a href="{{ route('form-search-subject-admin') }}" class="btn btn-outline-secondary">
            <i class="bi bi-search"></i> Nueva búsqueda
        </a>
        <a href="{{ route('panel-admin') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Regresar
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">
                Resultados para: <strong>{{ $nombre_materia }}</strong>
            </h4>

            @if (count($resultados))
                @foreach ($resultados as $dia => $clases)
                    <h5 class="text-primary">{{ $dia }}</h5>
                    <ul class="list-group mb-4">
                        @foreach ($clases as $r)
                            <li class="list-group-item">
                                <strong>{{ $r['materia'] }}</strong><br>
                                <span class="text-muted">Grupo:</span> {{ $r['grupo'] }}<br>
                                <span class="text-muted">Horario:</span> {{ $r['hora_inicio'] }} - {{ $r['hora_fin'] }}<br>
                                <span class="text-muted">Ubicación:</span> Aula {{ $r['aula'] }} ({{ $r['edificio'] }})<br>
                                <span class="text-muted">Profesor:</span> {{ $r['profesor'] }}
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            @else
                <div class="alert alert-warning mt-3">
                    No se encontraron clases para esta materia durante la semana.
                </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>
