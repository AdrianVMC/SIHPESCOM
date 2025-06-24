<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Buscar por Grupo</title>
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
            flex-direction: column;
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
        .form-text {
            color: #8b949e;
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
        .alert-danger {
            background-color: #da3633;
            border: none;
            color: #fff;
        }
        table {
            color: #e6edf3;
        }
        thead {
            background-color: #21262d;
        }
        tbody tr {
            background-color: #161b22;
        }
        tbody tr:nth-child(even) {
            background-color: #1c2128;
        }
    </style>
</head>
<body>

<a href="{{ route('panel-admin') }}" class="btn btn-outline-secondary return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="form-box text-center">
    <h4 class="mb-4">Buscar por Grupo</h4>

    @if(session('error'))
        <div class="alert alert-danger text-start">{{ session('error') }}</div>
    @endif

    <form method="GET" action="{{ route('search-group-admin') }}">
        <div class="mb-3 text-start">
            <label for="grupo" class="form-label">Grupo</label>
            <input type="text" name="grupo" id="grupo" class="form-control" placeholder="Ej. 3CV1, 6CM7, 8AV2" required value="{{ old('grupo') }}">
            <small class="form-text">
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
            <table class="table mt-3">
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
