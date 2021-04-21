<?php

namespace Database\Seeders;

use App\Models\Insumo\Insumo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insumo')->insert([
            'nombre'=>'pan perro',
            'estado' => 'activo',
            'medida'=> 'kg',
            'stock_minimo'=> 6,
        ]);
        DB::table('insumo')->insert([
            'nombre'=>'pan hamburguesa',
            'estado' => 'activo',
            'medida'=> 'kg',
            'stock_minimo'=> 6,

        ]);

    }
}
