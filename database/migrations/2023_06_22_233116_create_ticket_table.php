<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id('id_ticket');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_prioridad');
            $table->string('titulo');
            $table->string('descripcion');

            $table->foreign('id_usuario')->references('id_usuario')->on('users');
            $table->foreign('id_estado')->references('id_estado')->on('estado');
            $table->foreign('id_prioridad')->references('id_prioridad')->on('prioridad');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
