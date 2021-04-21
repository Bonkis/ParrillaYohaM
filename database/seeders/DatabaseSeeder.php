<?php

namespace Database\Seeders;



use App\Models\Empleado\Cargo;
use App\Models\Empleado\Empleado;
use App\Models\Insumo\Insumo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        Cargo::truncate();
        Insumo::truncate();
        Empleado::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $this->call(RoleSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(InsumoSeeder::class);


    }
}
