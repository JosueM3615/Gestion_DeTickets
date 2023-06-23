<?php

namespace Tests\Unit;

use App\Models\categoria;
use App\Models\estado;
use App\Models\etiqueta;
use App\Models\prioridad;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TicketTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     use RefreshDatabase;
    public function test_crear_ticket()
    {

        $categoria = new categoria();
        $categoria->Nombre = 'category1';
        $categoria->save();

        $etiqueta = new etiqueta();
        $etiqueta->Nombre = 'etiqueta2';
        $etiqueta->save();

        $estado = new estado();
        $estado->Nombre = 'estado1';
        $estado->save();

        $prioridad = new prioridad();
        $prioridad->Nombre = 'prioridad1';

        $ticket = [
            "id_usuario" => 1,
            "id_categoria"=>$categoria->id_categoria,
            "id_etiqueta" => $etiqueta->id_etiqueta,
            "id_prioridad" => $prioridad->id_prioridad,
    
            "titulo" =>"Titulo de ticket",
            "descripcion" =>"Descripcion de ticket",
        ];
        
        $response = $this->post(route("ticket.store"), $ticket);
        
        $response->assertDatabaseHas('ticket',[
            'titulo' => 'Titulo de ticket'
        ]);

    }

    public function testCrearCategoria()
    {
        // Crea una nueva instancia de la clase categoria
        $categoria = new categoria();

        // Establece los valores de los atributos
        $categoria->Nombre = 'Software';

        // Guarda el registro en la base de datos
        $categoria->save();

        // Verifica que se haya guardado correctamente
        $this->assertDatabaseHas('categoria', ['Nombre' => 'Software']);
    }

}