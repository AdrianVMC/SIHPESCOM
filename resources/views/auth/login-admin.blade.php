<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d1117;
            color: #f0f0f0;
        }
        .card {
            background-color: #161b22;
            border: none;
            border-radius: 12px;
        }
        .form-control,
        .form-control:focus {
            background-color: #21262d;
            color: #e6edf3;
            border: 1px solid #30363d;
        }
        .form-label {
            color: #c9d1d9;
        }
        .btn-primary {
            background-color: #238636;
            border-color: #2ea043;
        }
        .btn-primary:hover {
            background-color: #2ea043;
            border-color: #238636;
        }
        .btn-outline-light {
            border-color: #30363d;
            color: #e6edf3;
        }
        .btn-outline-light:hover {
            background-color: #30363d;
        }
        .return-icon {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4 w-100" style="max-width: 420px; position: relative;">

        <!-- Icono de regreso -->
        <div class="return-icon">
            <a href="{{ route('main') }}" class="text-decoration-none text-light">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>
        </div>

        <h3 class="text-center mb-4 mt-4 text-white">Inicio de sesión - Administrador</h3>

        <form method="POST" action="{{ route('login') }}">
            <div class="mb-3">
                <label for="admin_id" class="form-label">ID de trabajador</label>
                <input type="text" name="admin_id" class="form-control" id="admin_id" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" name="contrasena" class="form-control" id="password" required>
                    <button type="button" class="btn btn-outline-light" id="togglePassword" tabindex="-1">
                        <i class="bi bi-eye" id="toggleIcon"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Ingresar</button>
            @if ($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                    @foreach ($errors->all() as $error)
                        <li class="my-2 text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        toggleIcon.classList.toggle('bi-eye');
        toggleIcon.classList.toggle('bi-eye-slash');
    });
</script>

</body>
</html>
