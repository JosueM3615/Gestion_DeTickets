<?php

namespace Tests\Unit;

use App\Models\categoria;
use App\Models\etiqueta;
use App\Models\ticket;
use App\Models\ticket;
use PHPUnit\Framework\TestCase;
use App\Models\User;

class TicketTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_crear_ticket()
    {
        $user = User::factory()->create();
        $categoria = new categoria();
        $categoria->Nombre = 'category1';
        $categoria->save();

        $etiqueta = new etiqueta();
        $etiqueta->Nombre = 'etiqueta2';
        $etiqueta->save();


        $ticket = new ticket();
        $ticket->id_estado = 



    }
}