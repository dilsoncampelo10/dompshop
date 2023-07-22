# DOMPSHOP
<p>
    DompShop é um sistema de cadastro de produtos de fácil acesso, possuindo uma home com algumas informações e as funcionalidades de cadastrar, atualizar, deletar e visualizar os pordutos.
</p>

## Instruções
<p> 
    O projeto está realizado em Laravel 10, após clonar o projeto é necessário baixar as dependências com:

    composer install --no-scripts 
</p>
<p>
    É necessário fazer a cópia do arquivo .env.example para um chamado .env.
    Após feito basta gerar uma nova chave da aplicação:

    php artisan key:generate
</p>
<p>
    E depois de configurado o .env, é necessário rodar as migrates

    php artisan migrate
</p>

## Tecnologias:

O projeto usa:

* Laravel 10
* Bootstrap
* MySQL