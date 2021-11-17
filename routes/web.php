<?php

use Illuminate\Support\Facades\Route;

//Registrar rotas para a aplicação. Definir o caminho e o que será exibido.

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hello World!";
});

//O controle de rotas recebe a requisição do servidor web e direciona de acordo com a URL chamada.
//O Model executa a regra de negócios (como acesso ao BD) e retorna o resultado para o Controller.
//O Controller envia os dados pra VIEW, que irá dizer como renderizar a página, monta a aplicação e envia de volta pro servidor WEB e exibe no browser do cliente.