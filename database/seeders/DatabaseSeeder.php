<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
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
        DB::table('usuarios')->insert([
            'nombreCompleto'       => 'Roberto Cuz',
            'telefono'             => '729 116 6400',
            'correo'               => 'roberto@gmail.com',
            'password'             => Crypt::encrypt('12345'),
            'estatus'              => '0',
            'id_tipo'              => '1',
            'aviso'                => 'aceptado'
        ]);
        DB::table('usuarios')->insert([
            'nombreCompleto'       => 'Miguel Cuz',
            'telefono'             => '729 116 6400',
            'correo'               => 'miguel@gmail.com',
            'password'             => Crypt::encrypt('12345'),
            'estatus'              => '1',
            'id_tipo'              => '1',
            'aviso'                => 'aceptado'
        ]);
    }
}
