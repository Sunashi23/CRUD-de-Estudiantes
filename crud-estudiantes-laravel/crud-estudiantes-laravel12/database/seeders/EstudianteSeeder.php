<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;
use App\Models\Carrera;

class EstudianteSeeder extends Seeder
{
    public function run(): void
    {
        if (Carrera::count() == 0) {
            $this->call(CarreraSeeder::class);
        }

        $estudiantes = [
            ['nombre' => 'Ana López', 'correo' => 'ana@example.com', 'carrera_id' => 1, 'semestre' => 3],
            ['nombre' => 'Carlos Pérez', 'correo' => 'carlos@example.com', 'carrera_id' => 2, 'semestre' => 5],
            ['nombre' => 'María Torres', 'correo' => 'maria@example.com', 'carrera_id' => 1, 'semestre' => 2],
            ['nombre' => 'Jorge Ramírez', 'correo' => 'jorge@example.com', 'carrera_id' => 4, 'semestre' => 6],
            ['nombre' => 'Lucía Gómez', 'correo' => 'lucia@example.com', 'carrera_id' => 3, 'semestre' => 8],
        ];

        foreach ($estudiantes as $e) {
            Estudiante::create($e);
        }
    }
}
