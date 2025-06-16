<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('materia')->insert([
            ['clave' => 'FP', 'nombre_materia' => 'Fundamentos de Programación', 'semestre' => 1, 'academia' => 'Profesional'],
            ['clave' => 'MD', 'nombre_materia' => 'Matemáticas Discretas', 'semestre' => 1, 'academia' => 'Científica Básica'],
            ['clave' => 'CAL', 'nombre_materia' => 'Cálculo', 'semestre' => 1, 'academia' => 'Científica Básica'],
            ['clave' => 'ANV', 'nombre_materia' => 'Análisis Vectorial', 'semestre' => 1, 'academia' => 'Científica Básica'],
            ['clave' => 'COE', 'nombre_materia' => 'Comunicación oral y escrita', 'semestre' => 1, 'academia' => 'Institucional'],
            ['clave' => 'AGL', 'nombre_materia' => 'Álgebra Lineal', 'semestre' => 2, 'academia' => 'Científica Básica'],
            ['clave' => 'CALP', 'nombre_materia' => 'Cálculo Aplicado', 'semestre' => 2, 'academia' => 'Científica Básica'],
            ['clave' => 'MYE', 'nombre_materia' => 'Mecánica y Electromagnetismo', 'semestre' => 2, 'academia' => 'Científica Básica'],
            ['clave' => 'IES', 'nombre_materia' => 'Ingeniería, Ética y Sociedad', 'semestre' => 2, 'academia' => 'Institucional'],
            ['clave' => 'FDE', 'nombre_materia' => 'Fundamentos Económicos', 'semestre' => 2, 'academia' => 'Profesional'],
            ['clave' => 'ALGED', 'nombre_materia' => 'Algoritmos y Estructuras de Datos', 'semestre' => 2, 'academia' => 'Profesional'],
            ['clave' => 'EC', 'nombre_materia' => 'Ecuaciones Diferenciales', 'semestre' => 3, 'academia' => 'Científica Básica'],
            ['clave' => 'CRE', 'nombre_materia' => 'Circuitos Eléctricos', 'semestre' => 3, 'academia' => 'Profesional'],
            ['clave' => 'FDD', 'nombre_materia' => 'Fundamentos de Diseño Digital', 'semestre' => 3, 'academia' => 'Profesional'],
            ['clave' => 'DB', 'nombre_materia' => 'Bases de Datos', 'semestre' => 3, 'academia' => 'Profesional'],
            ['clave' => 'FEM', 'nombre_materia' => 'Finanzas Empresariales', 'semestre' => 3, 'academia' => 'Profesional'],
            ['clave' => 'PDP', 'nombre_materia' => 'Paradigmas de Programación', 'semestre' => 3, 'academia' => 'Profesional'],
            ['clave' => 'ANDSA', 'nombre_materia' => 'Análisis y Diseño de Algoritmos', 'semestre' => 3, 'academia' => 'Profesional'],
            ['clave' => 'PROYEST', 'nombre_materia' => 'Probabilidad y Estadística', 'semestre' => 4, 'academia' => 'Científica Básica'],
            ['clave' => 'MAVI', 'nombre_materia' => 'Matemáticas Avanzadas para la Ingeniería', 'semestre' => 4, 'academia' => 'Científica Básica'],
            ['clave' => 'ELAN', 'nombre_materia' => 'Electrónica Analógica', 'semestre' => 4, 'academia' => 'Profesional'],
            ['clave' => 'DSD', 'nombre_materia' => 'Diseño de Sistemas Digitales', 'semestre' => 4, 'academia' => 'Profesional'],
            ['clave' => 'TDAW', 'nombre_materia' => 'Tecnologías para el Desarrollo de Aplicaciones Web', 'semestre' => 4, 'academia' => 'Profesional'],
            ['clave' => 'SO', 'nombre_materia' => 'Sistemas Operativos', 'semestre' => 4, 'academia' => 'Profesional'],
            ['clave' => 'TOC', 'nombre_materia' => 'Teoría de la Computación', 'semestre' => 4, 'academia' => 'Científica Básica'],
            ['clave' => 'PDS', 'nombre_materia' => 'Procesamiento Digital de Señales', 'semestre' => 5, 'academia' => 'Profesional'],
            ['clave' => 'ISYC', 'nombre_materia' => 'Instrumentación y Control', 'semestre' => 5, 'academia' => 'Profesional'],
            ['clave' => 'ARQC', 'nombre_materia' => 'Arquitectura de Computadoras', 'semestre' => 5, 'academia' => 'Profesional'],
            ['clave' => 'ANDSE', 'nombre_materia' => 'Análisis y Diseño de Sistemas', 'semestre' => 5, 'academia' => 'Profesional'],
            ['clave' => 'FEPI', 'nombre_materia' => 'Formulación y Evaluación de Proyectos Informáticos', 'semestre' => 5, 'academia' => 'Profesional'],
            ['clave' => 'COMP', 'nombre_materia' => 'Compiladores', 'semestre' => 5, 'academia' => 'Profesional'],
            ['clave' => 'RDC', 'nombre_materia' => 'Redes de Computadoras', 'semestre' => 5, 'academia' => 'Profesional'],
            ['clave' => 'SISC', 'nombre_materia' => 'Sistemas en Chip', 'semestre' => 6, 'academia' => 'Profesional'],
            ['clave' => 'WCBDF', 'nombre_materia' => 'Web client and backend development frameworks', 'semestre' => 6, 'academia' => 'Profesional'],
            ['clave' => 'IDS', 'nombre_materia' => 'Ingeniería de Software', 'semestre' => 6, 'academia' => 'Profesional'],
            ['clave' => 'IA', 'nombre_materia' => 'Inteligencia Artificial', 'semestre' => 6, 'academia' => 'Profesional'],
            ['clave' => 'ACR', 'nombre_materia' => 'Aplicaciones para Comunicaciones en Red', 'semestre' => 6, 'academia' => 'Profesional'],
            ['clave' => 'DAMN', 'nombre_materia' => 'Desarrollo de Aplicaciones Móviles Nativas', 'semestre' => 7, 'academia' => 'Profesional'],
            ['clave' => 'TTI', 'nombre_materia' => 'Trabajo Terminal I', 'semestre' => 7, 'academia' => 'Profesional'],
            ['clave' => 'SISDI', 'nombre_materia' => 'Sistemas Distribuidos', 'semestre' => 7, 'academia' => 'Profesional'],
            ['clave' => 'ASRE', 'nombre_materia' => 'Administración de Servicios en Red', 'semestre' => 7, 'academia' => 'Profesional'],
            ['clave' => 'TTII', 'nombre_materia' => 'Trabajo Terminal II', 'semestre' => 8, 'academia' => 'Profesional'],
            ['clave' => 'GEM', 'nombre_materia' => 'Gestión Empresarial', 'semestre' => 8, 'academia' => 'Profesional'],
            ['clave' => 'LPR', 'nombre_materia' => 'Liderazgo Personal', 'semestre' => 8, 'academia' => 'Institucional']
        ]);
    }
}
