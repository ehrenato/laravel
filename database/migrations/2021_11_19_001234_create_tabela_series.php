<?php

//Manter o uso de migrations diminui a verbosidade do código e facilita a partilha do código fonte entre a equipe.

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaSeries extends Migration
{
    // Roda o equema de criação da tabela.

    public function up()
    //Schema trata das informações pertinentes a cada tipo de BD's. Um termo é branco é preenchido pelo schema.
    //Blueprint é a 'planta' da tabela
    //Increments = campo auto incremento
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
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
        Schema::drop('series');
    }
}
