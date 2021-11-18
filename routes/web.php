<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
//Registrar rotas para a aplicação. Definir o caminho e o que será exibido.

Route::get('/', function () {
    return view('welcome');
});

//Rota para series, chama o controller e executa o método @...
Route::get('/series', [SeriesController::class, 'listarSeries']);

Route::get('/series/criar', [SeriesController::class, 'create']);




//O controle de rotas recebe a requisição do servidor web e direciona de acordo com a URL chamada.
//O Model executa a regra de negócios (como acesso ao BD) e retorna o resultado para o Controller.
//O Controller envia os dados pra VIEW, que irá dizer como renderizar a página, monta a aplicação e envia de volta pro servidor WEB e exibe no browser do cliente.