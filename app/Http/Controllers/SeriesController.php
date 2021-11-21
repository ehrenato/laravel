<?php


//namespace representando a árvore de diretórios

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\Temporada;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Episodio;
use App\Services\CriadorDeSerie;

//herda da classe Controller
class SeriesController extends Controller
{
    //faz uma requisição
    public function index(Request $request)
    {

        $series = Serie::query()->orderBy('nome')->get();

        //request para pegar os dados da mensagem na sessão
        $mensagem = $request->session()->get('mensagem');
        //remover alerta após atualizar a página
        $request->session()->remove('mensagem');

        //retorna uma resposta. 1º parâmetro caminho / 2º o que a view renderiza (compact é a chave buscar a variável de mesmo nome)
        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    //faz uma requisição com os dados do formulário.
    public function store(SeriesFormRequest $request, CriadorDeSerie $criadorDeSerie)
    {
        //dados para a criação da serie. Método criarSerie irá executar no CriadorDeSerie
        $serie = $criadorDeSerie->criarSerie($request->nome, $request->num_temporadas, $request->epi_temporada);

        //o flash faz durar o alerta na tela apenas uma requisição
        $request->session()->flash('mensagem', "Série {$serie->nome} criada!");

        //retorna um redirecionamento para uma view
        return redirect()->route('listar_series');
    }

    //função para remover um dado da tabela, pelo campo id. também tem a função de deleção em cascata
    public function destroy(Request $request)
    {
        //busca a serie pelo id
        $serie = Serie::find($request->id);
        //armazena o nome da série em questão
        $nomeSerie = $serie->nome;
        //pra cada temporada será executada uma função (pelo método) de acordo com o parametro
        $serie->temporadas->each(function (Temporada $temporada) {
            $temporada->episodios()->each(function (Episodio $episodio) {
                $episodio->delete();
            });
            $temporada->delete();
        });
        $serie->delete();

        $request->session()->flash('mensagem', "Série $nomeSerie removida!");

        return redirect()->route('listar_series');
    }
}
