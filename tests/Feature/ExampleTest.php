<?php

namespace Tests\Feature;

use App\Http\Controllers\TicketController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testStoreSuccess()
    {
        // Crea un objeto de prueba para simular el request
        $requestData = [
            'titulo' => 'Mi ticket',
            'descripcion' => 'Descripción del ticket',
            'etiqueta' => 1,
            'categoria' => 2,
            'prioridad' => 1,
        ];
        $request = $this->post('/store', $requestData);

        // Verifica que el ticket se haya creado en la base de datos
        $this->assertDatabaseHas('ticket', [
            'titulo' => 'Mi ticket',
            'descripcion' => 'Descripción del ticket',
        ]);
    }
}