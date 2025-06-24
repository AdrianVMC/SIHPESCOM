<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Grupo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SearchController extends Controller
{
    private function getDiaActual(): string
    {
        $diasCorrectos = [
            'monday' => 'Lunes',
            'tuesday' => 'Martes',
            'wednesday' => 'Miércoles',
            'thursday' => 'Jueves',
            'friday' => 'Viernes',
            'saturday' => 'Sábado',
            'sunday' => 'Domingo',
        ];

        $carbon = app()->environment('local')
            ? Carbon::createFromFormat('Y-m-d', '2025-06-23')
            : Carbon::now();

        return $diasCorrectos[strtolower($carbon->englishDayOfWeek)] ?? 'Lunes';
    }

    public function showSearchTeacher(Request $request)
    {
        return $this->buildTeacherView($request, 'student.results.teacher-search-info');
    }

    public function showSearchTeacherAdmin(Request $request)
    {
        return $this->buildTeacherView($request, 'admin.results.teacher-search-info-admin');
    }

    public function showSearchSubject(Request $request)
    {
        return $this->buildSubjectView($request, 'student.results.subject-search-info');
    }

    public function showSearchSubjectAdmin(Request $request)
    {
        return $this->buildSubjectView($request, 'admin.results.subject-search-info-admin');
    }

    public function showSearchGroup(Request $request)
    {
        return $this->buildGroupView($request, 'student.results.group-search-info');
    }

    public function showSearchGroupAdmin(Request $request)
    {
        return $this->buildGroupView($request, 'admin.results.group-search-info-admin');
    }

    private function buildTeacherView(Request $request, string $view)
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
        $cubiculos = [];

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

        return view($view, [
            'docente' => $docente,
            'horarios' => $horariosOrdenados,
            'cubiculos' => $cubiculosOrdenados
        ]);
    }

    private function buildSubjectView(Request $request, string $view)
    {
        $busqueda = $request->get('materia');
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

        $ordenado = [];
        foreach ($diasSemana as $dia) {
            if (isset($resultados[$dia])) {
                $ordenado[$dia] = $resultados[$dia];
            }
        }

        return view($view, [
            'resultados' => $ordenado,
            'nombre_materia' => $busqueda
        ]);
    }

    private function buildGroupView(Request $request, string $view)
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

        return view($view, [
            'resultados' => $resultados,
            'grupo' => $grupoNombre,
            'dia' => $dia
        ]);
    }

    public function redirectToTeacherPDF(Request $request)
    {
        $firstName = $request->get('nombre');
        $lastName = $request->get('apellidos');

        $teacher = Docente::where('nombre', 'like', "%$firstName%")
            ->whereRaw("CONCAT_WS(' ', primer_apellido, segundo_apellido) LIKE ?", ["%$lastName%"])
            ->first();

        if (!$teacher) {
            return back()->with('error', 'Profesor no encontrado.');
        }

        return redirect()->route('docente.pdf', ['id' => $teacher->id]);
    }
}
