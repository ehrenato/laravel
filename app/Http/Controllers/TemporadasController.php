<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class TemporadasController extends Controller
{
    //
    public function index(int $serieId)
    {
        //recebe as temporadas dessa serie. Busca pelo id na model Serie as suas temporadas
        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;
        //retorna os valores na view index da série e da temporada
        return view('temporadas.index', compact('serie', 'temporadas'));
    }
}
