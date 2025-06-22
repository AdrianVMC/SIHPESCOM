<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ubicación del Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">

<div class="container">
    <a href="{{ route('form-search-teacher-alu') }}" class="btn btn-outline-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Nueva búsqueda
    </a>

    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title mb-3">
                Horario de {{ $docente->nombre }} {{ $docente->primer_apellido }} {{ $docente->segundo_apellido }}
            </h4>

            <p><strong>Día actual:</strong> {{ ucfirst($dia) }}</p>

            @if (count($horarios))
                <h5 class="mt-4">Clases programadas:</h5>
                <ul class="list-group">
                    @foreach ($horarios as $h)
                        <li class="list-group-item">
                            {{ $h['hora_inicio'] }} - {{ $h['hora_fin'] }} |
                            {{ $h['materia'] }} |
                            Aula {{ $h['aula'] }} ({{ $h['edificio'] }})
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted">No tiene clases programadas para hoy.</p>
            @endif

            @if (count($cubiculos))
                <h5 class="mt-4">Cubículo disponible:</h5>
                <ul class="list-group">
                    @foreach ($cubiculos as $c)
                        <li class="list-group-item">
                            {{ $c['hora_inicio'] }} - {{ $c['hora_fin'] }} en cubículo {{ $c['nombre_cubiculo'] }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted">Sin horario de cubículo hoy.</p>
            @endif
        </div>
    </div>
</div>

</body>
</html>
