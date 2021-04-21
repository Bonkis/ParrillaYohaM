<?php

namespace Database\Seeders;

use App\Models\Empleado\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleado::factory()->times(20)->create();

    }
}
