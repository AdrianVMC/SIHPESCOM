<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agregar Horario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #0d1117;
            color: #f0f0f0;
        }

        .form-label {
            color: #c9d1d9;
        }

        .form-control,
        .form-select,
        .form-control:focus,
        .form-select:focus {
            background-color: #21262d;
            color: #e6edf3;
            border: 1px solid #30363d;
        }

        .btn-primary {
            background-color: #238636;
            border-color: #2ea043;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #2ea043;
            border-color: #238636;
        }

        .btn-cancel {
            background-color: #0d1117;
            color: white;
            border: 1px solid white;
        }

        .btn-cancel:hover {
            background-color: #21262d;
        }

        .return-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }

        .day-button {
            background-color: #161b22;
            color: #c9d1d9;
            border: 1px solid #30363d;
            margin-right: 4px;
            border-radius: 6px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .day-button.active {
            background-color: #238636;
            color: white;
        }
    </style>
</head>
<body class="position-relative">

<!-- Botón de regreso -->
<a href="{{ route('panel-admin') }}" class="btn btn-outline-light return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="container py-5">
    <h2 class="text-center mb-5">Agregar horario</h2>

    <form action="{{ route('registerschedule') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <!-- Columna izquierda -->
            <div class="col-md-5">
                <div class="mb-3">
                    <label class="form-label">Profesor(a)</label>
                    <input type="text" class="form-control" name="profesor" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Materia</label>
                    <input type="text" class="form-control" name="materia" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Grupo</label>
                    <select class="form-select" name="grupo" required>
                        <option value="">Seleccionar grupo</option>
                        <option value="1A">1A</option>
                        <option value="2B">2B</option>
                        <!-- Más grupos si es necesario -->
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Aula</label>
                    <select class="form-select" name="aula" required>
                        <option value="">Seleccionar aula</option>
                        <option value="101">101</option>
                        <option value="Lab">Laboratorio</option>
                    </select>
                </div>
            </div>

            <!-- Columna derecha -->
            <div class="col-md-5">
                <div class="mb-3">
                    <label class="form-label d-block">Días</label>
                    <div id="days">
                        <span class="day-button" onclick="toggleDay(this)">L</span>
                        <span class="day-button" onclick="toggleDay(this)">M</span>
                        <span class="day-button" onclick="toggleDay(this)">M</span>
                        <span class="day-button" onclick="toggleDay(this)">J</span>
                        <span class="day-button" onclick="toggleDay(this)">V</span>
                        <span class="day-button" onclick="toggleDay(this)">S</span>
                        <span class="day-button" onclick="toggleDay(this)">D</span>
                    </div>
                    <input type="hidden" name="dias" id="diasSeleccionados">
                </div>

                <div class="mb-3">
                    <label class="form-label">Horas</label>
                    <select class="form-select" name="horario" required>
                        <option value="">Seleccionar horario</option>
                        <option value="7-9">7:00 - 9:00</option>
                        <option value="9-11">9:00 - 11:00</option>
                        <option value="11-13">11:00 - 13:00</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-4">Registrar información</button>
            </div>
        </div>
    </form>
</div>

<script>
    function toggleDay(element) {
        element.classList.toggle("active");

        const selected = Array.from(document.querySelectorAll(".day-button.active"))
            .map(el => el.textContent.trim())
            .join(",");

        document.getElementById("diasSeleccionados").value = selected;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
