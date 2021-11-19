<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaSeries extends Migration
{
    // Roda o equema de criação da tabela.
     
    public function up()
    //Schema trata das informações pertinentes a cada tipo de BD's. Um termo é branco é preenchido pelo schema.
    //Blueprint é a 'planta' da tabela
    {   
        Schema::create('series', function (Blueprint $table){
            $table->string('nome');
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
