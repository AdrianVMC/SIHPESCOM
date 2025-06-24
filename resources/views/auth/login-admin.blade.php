<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #0d1117;
            color: #f0f0f0;
        }
        .card {
            background-color: #161b22;
            border: none;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
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
        .btn-outline-secondary {
            color: #e6edf3;
            border-color: #30363d;
        }
        .btn-outline-secondary:hover {
            background-color: #30363d;
            border-color: #2ea043;
        }
        .error-list {
            background-color: #da3633;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            margin-top: 1rem;
            color: #fff;
            list-style-type: disc;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-start gap-2 mb-4">
        <a href="{{ route('main') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Regresar
        </a>
    </div>

    <div class="card mx-auto shadow p-4" style="max-width: 420px;">
        <h3 class="text-center mb-4 mt-2 text-white">Inicio de sesión - Administrador</h3>

        <form method="POST" action="{{ route('loginAdmin') }}">
            @csrf
            <div class="mb-3">
                <label for="admin_id" class="form-label">ID de trabajador</label>
                <input type="text" name="no_trabajador" class="form-control" id="admin_id" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" name="contrasena" class="form-control" id="password" required>
                    <button type="button" class="btn btn-outline-secondary" id="togglePassword" tabindex="-1">
                        <i class="bi bi-eye" id="toggleIcon"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Ingresar</button>
            @if ($errors->any())
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>}<a href="{{ route('panel-admin') }}" class="btn btn-secondary btn">Visitar Panel Administrador</a>
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
