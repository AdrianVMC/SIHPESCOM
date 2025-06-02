<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIHP - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center min-vh-100">

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="mb-5">
                <h1 class="display-4 fw-bold">SIHP</h1>
                <p class="fs-4 text-muted">ESCOM</p>
            </div>

            <div class="d-grid gap-3 mb-4">
                <a href="{{ route('login-alu') }}" class="btn btn-primary btn-lg">Iniciar sesión como Alumno</a>
                <a href="{{ route('login-admin') }}" class="btn btn-secondary btn-lg">Iniciar sesión como Administrador</a>
            </div>

            <p class="text-body-secondary">&copy; {{ date('Y') }} SIHP - ESCOM</p>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
