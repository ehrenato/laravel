<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

//Registrar rotas para a aplicação. Definir o caminho e o que será exibido.

Route::get('/', function () {
    return view('welcome');
});

//Requisição HTTP, rota para series, chama o controller e executa o método / name = alias
Route::get('/series', [SeriesController::class, 'index'])->name('listar_series');
Route::get('/series/criar', [SeriesController::class, 'create'])->name('criar_serie');
Route::post('/series/criar', [SeriesController::class, 'store'])->name('gravar_serie');
Route::post('/series/remover/{id}', [SeriesController::class, 'destroy'])->name('deletar_serie');



//O controle de rotas recebe a requisição do servidor web e direciona de acordo com a URL chamada.
//O Model executa a regra de negócios (como acesso ao BD) e retorna o resultado para o Controller.
//O Controller envia os dados pra VIEW, que irá dizer como renderizar a página, monta a aplicação e envia de volta pro servidor WEB e exibe no browser do cliente.