<p align="center"><img src="https://www.supero.com.br/wp-content/themes/Supero2019_fast/imagens/supero_cor.svg" width="400"></p>


## Todo List

O usuário deve poder:
• Adicionar novas tarefas;
• Marcar e desmarcar o status de concluído;
• Editar o conteúdo da task;
• Deletar uma task;
Obs.: uma task deve conter ao menos: título e status, podendo conter adicionalmente descrição, datas de
criação, edição, remoção e conclusão.


## Requisitos

- PHP >= 7.1.3
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Composer
- NPM
- NodeJs
- MySQL

## Instalação

PAra instalar clonar o repositório, entrar na pasta e digitar os comandos:
- composer install
- npm install
- Criar um arquivo .env (pode ser duplicado do .env.example) e setar as configurações de banco de dados e url;
- php artisan key:generate
- php artisan migrate
- php artisan serve

## Detalhes

Você primeiramente deve criar um usuário.
Depois deve-se efetuar o login e teremos 2 menus
- Todo List - Responsável por todo gerenciamento das tarefas
- EndPoints - Tem os endpoints para acesso da API