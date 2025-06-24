<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Barryvdh\DomPDF\Facade\Pdf;

class DomPdfController extends Controller
{
    public function GeneratePDF($id)
    {
        $docente = Docente::with([
            'grupos.horarios.aula',
            'grupos.materia',
            'cubiculo'
        ])->findOrFail($id);

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

        $pdf = Pdf::loadView('student.pdf.Pdf-Doc', [
            'docente' => $docente,
            'horarios' => $horarios,
            'cubiculos' => $cubiculos,
            'correo_contacto' => $docente->correo_contacto,//obtener el correo
        ])->setPaper('letter');

        return $pdf->stream("Horario_{$docente->nombre}.pdf");
    }
}
