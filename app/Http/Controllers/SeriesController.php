<?php


//namespace representando a árvore de diretórios
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;



//herda da classe Controller
class SeriesController extends Controller
{
    //faz uma requisição
    public function index(Request $request)
    {

        $series = Serie::all();

        //retorna uma resposta. 1º parâmetro caminho / 2º o que a view renderiza (compact pq a chave busca a variável de mesmo nome)
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    //faz uma requisição como os dados do formulário.
    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = new Serie();
        //passa pra variavel serie o nome recebido no form
        $serie->nome = $nome;
        $serie->save();
    }
}
