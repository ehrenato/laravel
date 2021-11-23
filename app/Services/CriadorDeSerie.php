<?php

namespace App\Services;

use App\Models\Episodio;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;


class CriadorDeSerie
{
    //Método que capta o que será gravado no banco
    public function criarSerie(string $nomeSerie, int $numTemporadas, int $epiTemporada):Serie
    {

        $serie = Serie::create(['nome' => $nomeSerie]);

        //recebe do form o numero. o For valida e incrementa e cria a variável com o numero do incremento. o 2º For faz o mesmo para os episódios
        for ($i = 1; $i <= $numTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            for ($j = 1; $j  <= $epiTemporada; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }
    }
}
