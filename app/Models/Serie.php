<?php

namespace App\Models;

//Ferramenta ORM de mapeamento de moledo OO para o modelo relacional.
use Illuminate\Database\Eloquent\Model;
use App\Models\Temporada;
use App\Models\Episodio;

class Serie extends Model
{
    //O laravel adiciona um 's' ao final do nome da classe (coincidencia ja tem o 's' no final). Então, nem precisaria declarar a tabela...
    protected $table = 'series';
    //campos q serão informados de uma vez só
    protected $fillable = ['nome'];

    //Serie tem muitas temporadas e informa-se o relacionamento hasMany
    public function temporadas(){
        return $this->hasMany(Temporada::class);
    }


}

