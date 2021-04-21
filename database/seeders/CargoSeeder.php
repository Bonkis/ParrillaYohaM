<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Empleado\Cargo;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cargo')->insert([
            'nombre'=>'Administrador',
        ]);
        DB::table('cargo')->insert([
            'nombre'=>'Domiciliario',
        ]);
        DB::table('cargo')->insert([
            'nombre'=>'Caja',
        ]);
        DB::table('cargo')->insert([
            'nombre'=>'mesero',
        ]);
    }
}
