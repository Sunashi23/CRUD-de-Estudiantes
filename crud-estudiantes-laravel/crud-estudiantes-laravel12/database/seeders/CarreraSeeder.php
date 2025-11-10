<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraSeeder extends Seeder
{
    public function run(): void
    {
        $carreras = [
            'Ingeniería en Sistemas Computacionales',
            'Administración de Empresas',
            'Derecho',
            'Arquitectura',
            'Medicina',
            'Contaduría Pública',
            'Diseño Gráfico'
        ];

        foreach ($carreras as $nombre) {
            Carrera::create(['nombre' => $nombre]);
        }
    }
}
