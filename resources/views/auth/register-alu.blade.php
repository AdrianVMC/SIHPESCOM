<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registrar alumno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #0d1117;
      color: #f0f0f0;
    }
    .form-box {
      background-color: #161b22;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
      max-width: 600px;
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
    .return-button {
      position: absolute;
      top: 1rem;
      left: 1rem;
    }
  </style>
</head>
<body class="position-relative d-flex justify-content-center align-items-center min-vh-100">

  <!-- Botón de regreso -->
  <a href="{{ route('panel-admin') }}" class="btn btn-outline-light return-button">
    <i class="bi bi-arrow-left"></i> Regresar
  </a>

  <div class="form-box">
    <h3 class="text-center mb-4">Registrar alumno</h3>

    {{-- Mensajes de éxito --}}
    @if(session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

    {{-- Errores de validación --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('register-alu') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nombre(s)</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Primer Apellido</label>
        <input type="text" name="primer_apellido" class="form-control" value="{{ old('primer_apellido') }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Segundo Apellido</label>
        <input type="text" name="segundo_apellido" class="form-control" value="{{ old('segundo_apellido') }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Correo electrónico</label>
        <input type="email" name="correo" class="form-control" value="{{ old('correo') }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Contraseña</label>
        <div class="input-group">
          <input type="password" name="contrasena" id="contrasena" class="form-control" required>
          <button type="button" class="btn btn-outline-light" onclick="togglePassword('contrasena', 'icon1')">
            <i class="bi bi-eye" id="icon1"></i>
          </button>
        </div>
      </div>

      <div class="mb-4">
        <label class="form-label">Confirmar contraseña</label>
        <div class="input-group">
          <input type="password" name="contrasena_confirmation" id="contrasena_confirmation" class="form-control" required>
          <button type="button" class="btn btn-outline-light" onclick="togglePassword('contrasena_confirmation', 'icon2')">
            <i class="bi bi-eye" id="icon2"></i>
          </button>
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100">Registrar y obtener mi boleta</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function togglePassword(inputId, iconId) {
      const input = document.getElementById(inputId);
      const icon = document.getElementById(iconId);
      const isPassword = input.type === "password";
      input.type = isPassword ? "text" : "password";
      icon.classList.toggle("bi-eye");
      icon.classList.toggle("bi-eye-slash");
    }
  </script>
</body>
</html>
