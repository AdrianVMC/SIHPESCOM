<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Buscar por Grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body { background-color: #f8f9fa; color: #0d3b66; }
        .form-box { background-color: #ffffff; border-radius: 12px; padding: 2rem; box-shadow: 0 0 10px rgba(13, 59, 102, 0.2); max-width: 450px; width: 100%; }
        .form-label { color: #0d3b66; font-weight: 600; }
        .form-control, .form-control:focus { border: 1.5px solid #0d3b66; box-shadow: none; }
        .btn-primary { background-color: #1677ff; border-color: #1677ff; font-weight: 600; }
        .btn-primary:hover { background-color: #145da0; border-color: #145da0; }
        .return-button { position: absolute; top: 1rem; left: 1rem; }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 position-relative flex-column">

<a href="{{ route('panel-alu') }}" class="btn btn-outline-secondary return-button"><i class="bi bi-arrow-left"></i> Regresar</a>

<div class="form-box text-center">
    <h4 class="mb-4">Buscar por Grupo</h4>

    @if(session('error'))
        <div class="alert alert-danger text-start">{{ session('error') }}</div>
    @endif

    <form method="GET" action="{{ route('search-group-alu') }}">
        <div class="mb-3 text-start">
            <label for="grupo" class="form-label">Grupo</label>
            <input type="text" name="grupo" id="grupo" class="form-control" placeholder="Ej. 3CV1, 6CM7, 8AV2" required value="{{ old('grupo') }}">
            <small class="form-text text-muted">
                Formato: [Semestre][Carrera][Turno][Número] (ej. 3CV1 = 3er semestre, Computación, Vespertino, Grupo 1)
            </small>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-3">Buscar</button>
    </form>
</div>

@if(isset($horarios))
    <div class="container mt-5">
        <h5>Horario del grupo {{ $grupo }} ({{ ucfirst($dia) }})</h5>
        @if(count($horarios))
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th>Materia</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                    <th>Aula</th>
                    <th>Edificio</th>
                    <th>Profesor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($horarios as $h)
                    <tr>
                        <td>{{ $h['materia'] }}</td>
                        <td>{{ $h['hora_inicio'] }}</td>
                        <td>{{ $h['hora_fin'] }}</td>
                        <td>{{ $h['aula'] }}</td>
                        <td>{{ $h['edificio'] }}</td>
                        <td>{{ $h['profesor'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="mt-3">No se encontraron clases para este grupo hoy.</p>
        @endif
    </div>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
