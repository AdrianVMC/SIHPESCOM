<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil del Profesor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-3">

<div class="container">
    <!-- Nombre del profesor -->
    <h2 class="mb-4 text-center">{{ $docente->nombre }} {{ $docente->primer_apellido }} {{ $docente->segundo_apellido }}</h2>

    <!-- Horarios de clase -->
    <div class="card mb-4">
        <div class="card-header fw-bold">Horarios de clase</div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Materia</th>
                        <th>Día</th>
                        <th>Horario</th>
                        <th>Aula</th>
                        <th>Edificio</th>
                        <th>Grupo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($horarios as $h)
                    <tr>
                        <td>{{ $h['materia'] }}</td>
                        <td>{{ $h['dia'] }}</td>
                        <td>{{ $h['hora_inicio'] }} – {{ $h['hora_fin'] }}</td>
                        <td>{{ $h['aula'] }}</td>
                        <td>{{ $h['edificio'] }}</td>
                        <td>{{ $h['grupo'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Horario de cubículo -->
    <div class="card">
        <div class="card-header fw-bold">Horario de cubículo</div>
        <div class="card-body p-0 table-responsive">
            @if(count($cubiculos) > 0)
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Día</th>
                            <th>Horario</th>
                            <th>Cubículo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cubiculos as $cub)
                        <tr>
                            <td>{{ $cub['dia'] }}</td>
                            <td>{{ $cub['hora_inicio'] }} – {{ $cub['hora_fin'] }}</td>
                            <td>{{ $cub['nombre_cubiculo'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-3">No hay horario de cubículo registrado.</div>
            @endif
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('panel-alu') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Regresar
        </a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
