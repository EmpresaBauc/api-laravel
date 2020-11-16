<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosPinturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos_pinturas', function (Blueprint $table) {
            $table->id();
            $table->integer('idUsuario');
            $table->string('ladoX');
            $table->string('ladoY');
            $table->string('area');
            $table->integer('tipoPintura');
            $table->string('qtdLitros');
            $table->string('tempoPintor');
            $table->string('tempoAjudPintor');
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
        Schema::dropIfExists('orcamentos_pinturas');
    }
}
