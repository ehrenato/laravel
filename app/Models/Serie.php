<?php

namespace App\Models;

//Ferramenta ORM de mapeamento de moledo OO para o modelo relacional.
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //O laravel adiciona um 's' ao final do nome da classe (coincidencia ja tem o 's' no final). Então, nem precisaria declarar a tabela...
    protected $table = 'series';
}