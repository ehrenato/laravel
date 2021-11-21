<?php


//namespace representando a árvore de diretórios

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Serie;
use App\Http\Requests\SeriesFormRequest;



//herda da classe Controller
class SeriesController extends Controller
{
    //faz uma requisição
    public function index(Request $request){

        $series = Serie::query()->orderBy('nome')->get();

        //request para pegar os dados da mensagem na sessão
        $mensagem = $request->session()->get('mensagem');
        //remover alerta após atualizar a página
        $request->session()->remove('mensagem');

        //retorna uma resposta. 1º parâmetro caminho / 2º o que a view renderiza (compact pq a chave busca a variável de mesmo nome)
        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    //faz uma requisição como os dados do formulário.
    public function store(SeriesFormRequest $request)
    {
        
        $serie = Serie::create($request->all());
        //o flash faz durar o alerta na tela apenas uma requisição
        $request->session()->flash('mensagem', "Série {$serie->nome} criada!");

        //retorna um redirecionamento para uma view
        return redirect()->route('listar_series');
        
    }

    //função para remover um dado da tabela, pelo campo id
    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()->flash('mensagem', "Série removida!");

        return redirect()->route('listar_series');
    }
}
