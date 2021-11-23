<?php

namespace App\Services;

use App\Models\Episodio;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RemovedorDeSerie
{
    public function removerSerie(int $serieId): string
    {
        //chama a variavel vazia, para ser usada fora da função
        $nomeSerie = '';
        //método recebe uma função, executa e passa na transação (ao ser interrompida a deleção os registrar voltam ao estado anterior) & é uma referência à variável
        DB::transaction(function () use ($serieId, &$nomeSerie) {
            //busca a serie pelo id e usa na function
            $serie = Serie::find($serieId);
            //armazena o nome da série em questão
            $nomeSerie = $serie->nome;
            $this->removerTemporadas($serie);
            $serie->delete();
        });

        return $nomeSerie;
    }

    private function removerTemporadas(Serie $serie): void
    {
        //pra cada série será executada uma função (pelo método) de acordo com o parametro
        $serie->temporadas->each(function (Temporada $temporada) {
            $this->removerEpisodios($temporada);
            $temporada->delete();
        });
        
    }

    private function removerEpisodios(Temporada $temporada): void
    {
        //pra cada temporada será executada uma função (pelo método) de acordo com o parametro
        $temporada->episodios()->each(function (Episodio $episodio) {
            $episodio->delete();
        });
        
    }
}
