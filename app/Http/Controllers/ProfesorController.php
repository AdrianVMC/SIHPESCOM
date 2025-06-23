<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Materia;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function mostrar($id)
    {
        $docente = Docente::with([
            'grupos.materia',
            'grupos.horarios.aula',
            'cubiculo' 
        ])->findOrFail($id);

        $horarios = [];

        foreach ($docente->grupos as $grupo) {
            foreach ($grupo->horarios as $horario) {
                $horarios[] = [
                    'materia' => $grupo->materia->nombre_materia,
                    'dia' => $horario->dia_semana,
                    'hora_inicio' => $horario->hora_inicio,
                    'hora_fin' => $horario->hora_fin,
                    'aula' => $horario->aula->nombre_aula,
                    'grupo' => $grupo->grupo,
                    'edificio' => $horario->aula->edificio
                ];
            }
        }

        $cubiculos = $docente->cubiculo->map(function ($cub) {
            return [
                'dia' => $cub->dia_semana,
                'hora_inicio' => $cub->hora_inicio,
                'hora_fin' => $cub->hora_fin,
                'nombre_cubiculo' => $cub->nombre_cubiculo
            ];
        });

        return view('student.perfil-docente', [
            'docente' => $docente,
            'horarios' => $horarios,
            'cubiculos' => $cubiculos
        ]);
    }

    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');

        $profesor = Docente::where('nombre', 'like', "%$nombre%")
            ->whereRaw("CONCAT(primer_apellido, ' ', segundo_apellido) like ?", ["%$apellidos%"])
            ->first();

        if ($profesor) {
            return redirect()->route('mostrar.profesor', ['id' => $profesor->id_docente]);
        } else {
            return redirect()->back()->with('error', 'Profesor no encontrado.');
        }
    }

    public function vistaPorMateria()
    {
        $materias = Materia::all();
        return view('alumnos.buscar-por-materia', compact('materias'));
    }

    public function profesoresPorMateria($id_materia)
    {
        $materia = Materia::with('grupos.docente')->findOrFail($id_materia);

        $profesores = $materia->grupos
            ->map(fn($grupo) => $grupo->docente)
            ->unique('id_docente')
            ->values();

        return response()->json([
            'materia' => $materia->nombre_materia,
            'profesores' => $profesores->map(function ($profesor) {
                return [
                    'id' => $profesor->id_docente,
                    'nombre' => "{$profesor->nombre} {$profesor->primer_apellido} {$profesor->segundo_apellido}",
                ];
            })
        ]);
    }
}
