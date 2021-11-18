<?php


//namespace representando a árvore de diretórios
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//herda da classe Controller
class SeriesController extends Controller
{
    //faz uma requisição
    public function listarSeries(Request $request)
    {

        $series = [
            'Game of Thrones',
            'Breaking Bad',
            'For Life'
        ];

        //retorna uma resposta. 1º parâmetro caminho / 2º o que a view renderiza (compact pq a chave busca a variável de mesmo nome)
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
}
