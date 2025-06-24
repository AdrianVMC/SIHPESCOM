<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 12px;
        }
        h1, h2 {
            text-align: center;
            color: #0000c6;
            font-size: 35px
        }
        .titulo {
            font-size: 18px;
            font-weight: bold;
            color: #d90000;
        }
        .subtitulo {
            font-size: 14px;
            margin-top: 20px;
            font-weight: bold;
            color:#d90000;
        }
        .bloque {
            margin-bottom: 15px;
        }
        .bloque p {
            margin: 5px 0;
        }
        .dia {
            font-weight: bold;
            color: #003366;
            margin-top: 10px;
        }
        .detalle {
            padding-left: 10px;
        }
        .marca-agua {
            position: fixed;
            top: 35%;
            left: 20%;
            transform: rotate(-45deg);
            font-size: 59px;
            color: #d0d0d0;
            z-index: -4;
            opacity: 0.9;
        }
    </style>
</head>
<body>
<div class="marca-agua">ESCOM-SEM20252</div>

<h1>Instituto Politécnico Nacional</h1>
<h2>Escuela Superior de Cómputo</h2>

<br><br>
<div class="bloque">
    <p class="titulo">Horario semanal de {{ $docente->nombre }} {{ $docente->primer_apellido }} {{ $docente->segundo_apellido }}</p>
</div>
<br>

<div class="bloque">
    <p class="subtitulo">Clases programadas:</p>
    @foreach ($horarios as $dia => $items)
        <p class="dia">{{ $dia }}</p>
        @foreach ($items as $item)
            <p class="detalle">{{ $item['hora_inicio'] }} - {{ $item['hora_fin'] }} | {{ $item['materia'] }} | Aula {{ $item['aula'] }} ({{ $item['edificio'] }})</p>
        @endforeach
    @endforeach
</div>

<div class="bloque">
    <p class="subtitulo">Cubículos disponibles:</p>
    @foreach ($cubiculos as $dia => $items)
        <p class="dia">{{ $dia }}</p>
        @foreach ($items as $item)
            <p class="detalle">{{ $item['hora_inicio'] }} - {{ $item['hora_fin'] }} en cubículo {{ $item['nombre_cubiculo'] }}</p>
        @endforeach
    @endforeach
</div>
<!--Para el correo-->
<center>
    <br><br><p><strong>Correo de contacto:</strong> {{ $correo_contacto }}</p>
</center>

</body>
</html>
