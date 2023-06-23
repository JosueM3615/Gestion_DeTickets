<?php

namespace Database\Seeders;

use App\Models\categoria;
use App\Models\etiqueta;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       categoria::create([
        'Nombre' => 'Software'
       ]);

       categoria::create([
        'Nombre' => 'Soporte'
       ]);

       categoria::create([
        'Nombre' => 'Hardware'
       ]);

       categoria::create([
        'Nombre' => 'Bloqueo'
       ]);

       etiqueta::create([
        'Nombre'=> 'Problemas'
       ]);

       etiqueta::create([
        'Nombre'=> 'Urgentes'
       ]);

       etiqueta::create([
        'Nombre'=> 'Ayuda'
       ]);
       etiqueta::create([
        'Nombre'=> 'Arreglo'
       ]);

    }
}
