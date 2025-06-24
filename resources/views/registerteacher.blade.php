<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registrar Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            background-color: #0d1117;
            color: #f0f0f0;
        }

        .form-section {
            background-color: #161b22;
            border-radius: 12px;
            padding: 2rem;
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
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #2ea043;
            border-color: #238636;
        }

        .btn-cancel {
            background-color: #0d1117;
            color: white;
            border: 1px solid #f0f0f0;
        }

        .btn-cancel:hover {
            background-color: #21262d;
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #d8b4fe20;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: #a78bfa;
            margin: 0 auto;
        }

        .return-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body class="position-relative">

<!-- Botón de regreso -->
<a href="{{ route('panel-admin') }}" class="btn btn-outline-light return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="container py-5">
    <h2 class="text-center mb-5">Registrar profesor</h2>

    <div class="row justify-content-center align-items-start">
        <!-- Formulario -->
        <div class="col-md-6">
            <form action="{{ route('registerteacher') }}" method="POST" class="form-section">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required />
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" required />
                </div>

                <div class="mb-3">
                    <label for="clave" class="form-label">Clave interna</label>
                    <input type="text" class="form-control" id="clave" name="clave" required />
                </div>

                <div class="mb-3">
                    <label for="contacto" class="form-label">Datos de contacto</label>
                    <textarea class="form-control" id="contacto" name="contacto" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Registrar información</button>
            </form>
        </div>

        <!-- Imagen -->
        <div class="text-center mb-4">
            <label for="imageInput" class="form-label d-block">Imagen</label>
            <div class="avatar" onclick="document.getElementById('imageInput').click();">
                <i class="bi bi-person-circle"></i>
            </div>
            <input type="file" name="imagen" id="imageInput" accept="image/*" />
            <p class="mt-2 text-muted">Haz clic para subir una imagen</p>
        </div>

        <button type="submit" class="btn btn-primary w-100">Registrar información</button>
        </form>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
