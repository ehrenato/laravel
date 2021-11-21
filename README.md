Instalação e configuração do PHP
https://www.php.net/downloads

Instalar composer
https://getcomposer.org/download/

Instalando Laravel:<br>

//instala o framework e cria a pasta e o nome do projeto<br>
composer create-project laravel/laravel tutorial-app<br>

//ir para a pasta do projeto<br>
cd tutorial-app<br>

//inicia servidor de desenvolvimento<br>
php artisan serve<br>

//caso o servidor não esteja rodando<br>
php artisan key:generate<br>

//migrations para o banco de dados<br>
php artisan make:migration criar_tabela_nome<br>
php artisan migrate

//já cria o model e a migration<br>
php artisan make:model Exemplo -m<br>

limpar arquivos nao rastreaveis do git -> git clean  -d  -f .
