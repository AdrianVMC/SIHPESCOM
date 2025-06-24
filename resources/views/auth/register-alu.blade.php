<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Registrar alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
    <style>
        .return-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body class="bg-white">

<a href="{{ route('show.login-alu') }}" class="btn btn-outline-secondary return-button">
    <i class="bi bi-arrow-left"></i> Regresar
</a>

<div class="container d-flex justify-content-center align-items-center min-vh-100 position-relative">
    <div class="card shadow p-4 w-100" style="max-width: 600px;">
        <h4 class="text-center mb-4 mt-2">Registrar alumno</h4>

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            @php
                $traducciones = [
                    'The nombre field is required.' => 'El nombre es obligatorio.',
                    'The primer apellido field is required.' => 'El primer apellido es obligatorio.',
                    'The segundo apellido field is required.' => 'El segundo apellido es obligatorio.',
                    'The correo field is required.' => 'El correo electrónico es obligatorio.',
                    'The correo field must be a valid email address.' => 'El correo electrónico debe ser válido.',
                    'The contrasena field is required.' => 'La contraseña es obligatoria.',
                    'The contrasena field must be at least 5 characters.' => 'La contraseña debe tener al menos 5 caracteres.',
                    'The contrasena field confirmation does not match.' => 'Las contraseñas no coinciden.',
                ];
            @endphp
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $traducciones[$error] ?? $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="registerForm" action="{{ route('register-alu') }}" method="POST" novalidate>
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre(s)</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre') }}" required>
                <div class="invalid-feedback">El nombre es obligatorio.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Primer Apellido</label>
                <input type="text" name="primer_apellido" class="form-control" id="primer_apellido" value="{{ old('primer_apellido') }}" required>
                <div class="invalid-feedback">El primer apellido es obligatorio.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Segundo Apellido</label>
                <input type="text" name="segundo_apellido" class="form-control" id="segundo_apellido" value="{{ old('segundo_apellido') }}" required>
                <div class="invalid-feedback">El segundo apellido es obligatorio.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" name="correo" class="form-control" id="correo" value="{{ old('correo') }}" required>
                <div class="invalid-feedback">Ingresa un correo válido.</div>
            </div>

            <div class="mb-3 position-relative">
                <label class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" name="contrasena" id="contrasena" class="form-control"
                           required data-bs-toggle="tooltip" data-bs-placement="right"
                           title="La contraseña debe tener al menos 5 caracteres.">
                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('contrasena', 'icon1')">
                        <i class="bi bi-eye" id="icon1"></i>
                    </button>
                </div>
                <div class="invalid-feedback">La contraseña debe tener al menos 5 caracteres.</div>
            </div>

            <div class="mb-4 position-relative">
                <label class="form-label">Confirmar contraseña</label>
                <div class="input-group">
                    <input type="password" name="contrasena_confirmation" id="contrasena_confirmation" class="form-control"
                           required data-bs-toggle="tooltip" data-bs-placement="right" title="">
                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('contrasena_confirmation', 'icon2')">
                        <i class="bi bi-eye" id="icon2"></i>
                    </button>
                </div>
                <div class="invalid-feedback">Las contraseñas no coinciden.</div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function togglePassword(inputId, iconId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(iconId);
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Inicializar tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(el => new bootstrap.Tooltip(el));
        const passwordInput = document.getElementById('contrasena');
        const confirmInput = document.getElementById('contrasena_confirmation');
        const confirmTooltip = bootstrap.Tooltip.getInstance(confirmInput);

        confirmInput.addEventListener('input', () => {
            if (passwordInput.value !== confirmInput.value) {
                confirmInput.setAttribute('title', 'Las contraseñas no coinciden.');
                confirmTooltip.setContent({ '.tooltip-inner': 'Las contraseñas no coinciden.' });
                confirmTooltip.show();
            } else {
                confirmInput.setAttribute('title', '');
                confirmTooltip.hide();
            }
        });

        document.getElementById('registerForm').addEventListener('submit', function (event) {
            let valid = true;

            const nombre = document.getElementById('nombre');
            const primerApellido = document.getElementById('primer_apellido');
            const segundoApellido = document.getElementById('segundo_apellido');
            const correo = document.getElementById('correo');

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (nombre.value.trim() === '') {
                nombre.classList.add('is-invalid');
                valid = false;
            } else {
                nombre.classList.remove('is-invalid');
            }

            if (primerApellido.value.trim() === '') {
                primerApellido.classList.add('is-invalid');
                valid = false;
            } else {
                primerApellido.classList.remove('is-invalid');
            }

            if (segundoApellido.value.trim() === '') {
                segundoApellido.classList.add('is-invalid');
                valid = false;
            } else {
                segundoApellido.classList.remove('is-invalid');
            }

            if (!emailRegex.test(correo.value)) {
                correo.classList.add('is-invalid');
                valid = false;
            } else {
                correo.classList.remove('is-invalid');
            }

            if (passwordInput.value.length < 5) {
                passwordInput.classList.add('is-invalid');
                valid = false;
            } else {
                passwordInput.classList.remove('is-invalid');
            }

            if (passwordInput.value !== confirmInput.value) {
                confirmInput.classList.add('is-invalid');
                valid = false;
            } else {
                confirmInput.classList.remove('is-invalid');
            }

            if (!valid) {
                event.preventDefault();
            }
        });
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
