<?php

namespace Database\Seeders;

use App\Models\categoria;
use App\Models\estado;
use App\Models\etiqueta;
use App\Models\rol;
use App\Models\user;
use App\Models\prioridad;
use Illuminate\Support\Facades\Hash;
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

       prioridad::create([
        'Nombre'=> 'Alta'
       ]);
       prioridad::create([
        'Nombre'=> 'baja'
       ]);
       prioridad::create([
        'Nombre'=> 'Muy alta'
       ]); 

       estado::create([
        'Nombre'=> 'Abierto'
       ]); 
       
       estado::create([
        'Nombre'=> 'Cerrado'
       ]); 

       rol::create([
        'Nombre'=> 'Admin'
       ]); 

       user::create([
        'id_rol' => 1,
        'Nombre' => 'Pedro',
        'Apellido' => 'Joaquin',
        'usuario' => 'admin',
        'contraseña'=> hash::make('12345'),
        'Direccion' => '100 mts norte de la UCR'
       ]);

    }
}
