<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ubicación del Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

<div class="container">

    <!-- Botones de navegación -->
    <div class="d-flex justify-content-start gap-2 mb-4">
        <a href="{{ route('form-search-teacher-alu') }}" class="btn btn-outline-secondary">
            <i class="bi bi-search"></i> Nueva búsqueda
        </a>
        <a href="{{ route('panel-alu') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Regresar
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="card-title mb-4">
                Horario semanal de {{ $docente->nombre }} {{ $docente->primer_apellido }} {{ $docente->segundo_apellido }}
            </h4>

            <!-- Clases -->
            @if (count($horarios))
                <h5 class="mb-3">Clases programadas:</h5>
                @foreach ($horarios as $dia => $clases)
                    <h6 class="text-primary">{{ $dia }}</h6>
                    <ul class="list-group mb-3">
                        @foreach ($clases as $h)
                            <li class="list-group-item">
                                {{ $h['hora_inicio'] }} - {{ $h['hora_fin'] }} |
                                {{ $h['materia'] }} |
                                Aula {{ $h['aula'] }} ({{ $h['edificio'] }})
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            @else
                <p class="text-muted mb-2">No tiene clases programadas esta semana.</p>
            @endif

            <!-- Cubículos -->
            @if (count($cubiculos))
                <h5 class="mt-4 mb-3">Cubículos disponibles:</h5>
                @foreach ($cubiculos as $dia => $cbs)
                    <h6 class="text-success">{{ $dia }}</h6>
                    <ul class="list-group mb-3">
                        @foreach ($cbs as $c)
                            <li class="list-group-item">
                                {{ $c['hora_inicio'] }} - {{ $c['hora_fin'] }} en cubículo {{ $c['nombre_cubiculo'] }}
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            @else
                <p class="text-muted">No tiene horarios de cubículo esta semana.</p>
            @endif
        </div>
    </div>
</div>

</body>
</html>
