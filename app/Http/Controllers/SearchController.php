<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Grupo;
use App\Models\Materia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SearchController extends Controller
{
    private function getDiaActual(): string
    {
        $diasCorrectos = [
            'monday'    => 'Lunes',
            'tuesday'   => 'Martes',
            'wednesday' => 'Miércoles',
            'thursday'  => 'Jueves',
            'friday'    => 'Viernes',
            'saturday'  => 'Sábado',
            'sunday'    => 'Domingo',
        ];

        $carbon = app()->environment('local')
            ? Carbon::createFromFormat('Y-m-d', '2025-06-23') // Día fijo para pruebas locales
            : Carbon::now();

        $diaIngles = strtolower($carbon->englishDayOfWeek);
        return $diasCorrectos[$diaIngles] ?? 'Lunes';
    }

    public function show($id)
    {
        $teacher = Docente::with([
            'grupos.materia',
            'grupos.horarios.aula',
            'cubiculo'
        ])->findOrFail($id);

        $classSchedules = [];

        foreach ($teacher->grupos as $group) {
            foreach ($group->horarios as $schedule) {
                $classSchedules[] = [
                    'subject' => $group->materia->nombre_materia,
                    'day' => $schedule->dia_semana,
                    'start_time' => $schedule->hora_inicio,
                    'end_time' => $schedule->hora_fin,
                    'classroom' => $schedule->aula->nombre_aula,
                    'group' => $group->grupo,
                    'building' => $schedule->aula->edificio
                ];
            }
        }

        return response()->json([
            'full_name' => "{$teacher->nombre} {$teacher->primer_apellido} {$teacher->segundo_apellido}",
            'class_schedules' => $classSchedules,
            'office_hours' => $teacher->cubiculo->map(function ($office) {
                return [
                    'day' => $office->dia_semana,
                    'start_time' => $office->hora_inicio,
                    'end_time' => $office->hora_fin,
                    'office_name' => $office->nombre_cubiculo
                ];
            })
        ]);
    }

    public function showSearchTeacher(Request $request)
    {
        $nombre = $request->get('nombre');
        $apellidos = $request->get('apellidos');

        $docente = Docente::with(['grupos.horarios.aula', 'grupos.materia', 'cubiculo'])
            ->where('nombre', 'like', "%$nombre%")
            ->whereRaw("CONCAT_WS(' ', primer_apellido, segundo_apellido) LIKE ?", ["%$apellidos%"])
            ->first();

        if (!$docente) {
            return back()->with('error', 'Profesor no encontrado');
        }

        $diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
        $horarios = [];

        foreach ($docente->grupos as $grupo) {
            foreach ($grupo->horarios as $h) {
                $dia = $h->dia_semana;
                if (in_array($dia, $diasSemana)) {
                    $horarios[$dia][] = [
                        'materia' => $grupo->materia->nombre_materia ?? 'Sin materia',
                        'hora_inicio' => $h->hora_inicio,
                        'hora_fin' => $h->hora_fin,
                        'aula' => $h->aula->nombre_aula ?? 'Sin aula',
                        'edificio' => $h->aula->edificio ?? 'Sin edificio',
                    ];
                }
            }
        }

        $cubiculos = [];
        foreach ($docente->cubiculo as $cub) {
            $dia = $cub->dia_semana;
            if (in_array($dia, $diasSemana)) {
                $cubiculos[$dia][] = [
                    'hora_inicio' => $cub->hora_inicio,
                    'hora_fin' => $cub->hora_fin,
                    'nombre_cubiculo' => $cub->nombre_cubiculo ?? 'Sin cubículo',
                ];
            }
        }

        $horariosOrdenados = [];
        $cubiculosOrdenados = [];

        foreach ($diasSemana as $dia) {
            if (isset($horarios[$dia])) {
                $horariosOrdenados[$dia] = $horarios[$dia];
            }
            if (isset($cubiculos[$dia])) {
                $cubiculosOrdenados[$dia] = $cubiculos[$dia];
            }
        }

        return view('student.results.teacher-search-info', [
            'docente' => $docente,
            'horarios' => $horariosOrdenados,
            'cubiculos' => $cubiculosOrdenados
        ]);
    }

    public function showSearchSubject(Request $request)
    {
        $busqueda = $request->get('materia'); // El name del input en el form

        $diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

        $grupos = Grupo::with(['horarios.aula', 'docente', 'materia'])
            ->whereHas('materia', function ($query) use ($busqueda) {
                $query->where('nombre_materia', 'like', "%$busqueda%");
            })
            ->get();

        $resultados = [];

        foreach ($grupos as $grupo) {
            foreach ($grupo->horarios as $horario) {
                $dia = $horario->dia_semana;
                if (in_array($dia, $diasSemana)) {
                    $resultados[$dia][] = [
                        'materia' => $grupo->materia->nombre_materia,
                        'grupo' => $grupo->grupo,
                        'hora_inicio' => $horario->hora_inicio,
                        'hora_fin' => $horario->hora_fin,
                        'aula' => $horario->aula->nombre_aula,
                        'edificio' => $horario->aula->edificio,
                        'profesor' => "{$grupo->docente->nombre} {$grupo->docente->primer_apellido} {$grupo->docente->segundo_apellido}"
                    ];
                }
            }
        }

        $resultadosOrdenados = [];
        foreach ($diasSemana as $dia) {
            if (isset($resultados[$dia])) {
                $resultadosOrdenados[$dia] = $resultados[$dia];
            }
        }

        return view('student.results.subject-search-info', [
            'resultados' => $resultadosOrdenados,
            'nombre_materia' => $busqueda
        ]);
    }

    public function showSearchGroup(Request $request)
    {
        $grupoNombre = strtoupper(trim($request->get('grupo')));

        if (!preg_match('/^\d[A-Z]{2}\d$/', $grupoNombre)) {
            return back()->with('error', 'El formato del grupo no es válido. Usa el formato como 3CV1 o 6CM7.');
        }

        $dia = $this->getDiaActual();

        $grupos = Grupo::with(['materia', 'horarios.aula', 'docente'])
            ->where('grupo', $grupoNombre)
            ->get();

        if ($grupos->isEmpty()) {
            return back()->with('error', 'No se encontró el grupo especificado.');
        }

        $resultados = [];

        foreach ($grupos as $grupo) {
            foreach ($grupo->horarios as $horario) {
                if ($horario->dia_semana === $dia) {
                    $resultados[] = [
                        'materia' => $grupo->materia->nombre_materia,
                        'hora_inicio' => $horario->hora_inicio,
                        'hora_fin' => $horario->hora_fin,
                        'aula' => $horario->aula->nombre_aula,
                        'edificio' => $horario->aula->edificio,
                        'profesor' => "{$grupo->docente->nombre} {$grupo->docente->primer_apellido} {$grupo->docente->segundo_apellido}"
                    ];
                }
            }
        }

        return view('student.results.group-search-info', [
            'resultados' => $resultados,
            'grupo' => $grupoNombre,
            'dia' => $dia
        ]);
    }
}
