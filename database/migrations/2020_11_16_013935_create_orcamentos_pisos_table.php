<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosPisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos_pisos', function (Blueprint $table) {
            $table->id();
            $table->integer('idUsuario');
            $table->string('ladoX');
            $table->string('ladoY');
            $table->string('area');
            $table->integer('tipoPiso');
            $table->string('qtdPecas');
            $table->string('qtdArgamassa');
            $table->string('tempoPedreiro');
            $table->string('tempoAjudante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamentos_pisos');
    }
}
