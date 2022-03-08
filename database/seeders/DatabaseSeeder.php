<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('tipoBebidas')->insert([
            'nombre' => 'Cerveza',
        ]);
        DB::table('tipoBebidas')->insert([
            'nombre' => 'Tequila',
        ]);
        DB::table('tb_carrito')->insert([
            'codigo' => '1',
            'cantidad' => '2',
            'costo' => '60'
        ]);
        DB::table('tb_productos')->insert([
            'id_tipo'       => '1',
            'marca'         => 'Ultra',
            'precio'        => '30',
            'tamaño'        => '100',
            'cantidad'      => '3'
        ]);
    }
}
