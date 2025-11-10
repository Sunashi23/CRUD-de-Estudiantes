<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoResetCommand extends Command
{
    protected $signature = 'demo:reset';
    protected $description = 'Reinicia la base de datos y vuelve a ejecutar los seeders de ejemplo';

    public function handle()
    {
        $this->info('🧹 Reiniciando base de datos...');
        $this->call('migrate:fresh');
        $this->info('🌱 Ejecutando seeders...');
        $this->call('db:seed');
        $this->info('✅ Base de datos reiniciada y datos de ejemplo cargados correctamente.');
    }
}
