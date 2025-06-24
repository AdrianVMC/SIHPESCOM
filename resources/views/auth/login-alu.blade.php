<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .return-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style></head>
<body class="bg-white">

<a href="{{ route('main') }}" class="btn btn-outline-secondary return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4 w-100" style="max-width: 400px; position: relative;">

        <h4 class="text-center mb-4 mt-2">Inicio de sesión - Alumno</h4>

        <form method="POST" action="{{ route('loginAlu') }}">
            @csrf

            <div class="mb-3">
                <label for="boleta" class="form-label">Número de boleta</label>
                <input
                    type="text"
                    name="boleta"
                    class="form-control"
                    id="boleta"
                    maxlength="10"
                    pattern="\d{10}"
                    required
                    value="{{ old('boleta') }}"
                >
                @error('boleta')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 position-relative">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input
                        type="password"
                        name="contrasena"
                        class="form-control"
                        id="password"
                        required
                    >
                    <button type="button" class="btn btn-outline-secondary" id="togglePassword" tabindex="-1">
                        <i class="bi bi-eye" id="toggleIcon"></i>
                    </button>
                </div>
                @error('contrasena')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Ingresar</button>

            <div class="text-center mt-3">
                <span>¿No tienes cuenta?</span>
                <a href="{{ route('show.register-alu') }}" class="text-primary text-decoration-none fw-semibold">
                    Regístrate aquí
                </a>
            </div>
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

@if(session('boleta_generada'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: '¡Registro exitoso!',
                text: 'Tu boleta es: {{ session("boleta_generada") }}.\nGuárdala para iniciar sesión.',
                icon: 'success',
                confirmButtonText: 'Entendido'
            });
        });
    </script>
@endif


</body>
</html>
