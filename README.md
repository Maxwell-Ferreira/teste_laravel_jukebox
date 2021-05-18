# Teste de proficiência Laravel para JUKEBOX

Teste realizado na segunda fase do processo seletivo para a vaga de desenvolvedor Back-end na Jukebox.


## Para iniciar o projeto:

1. Clone este repositório;
2. Execute os seguintes comandos: 
 - <i>composer update</i>
 - <i>php artisan migrate</i>
 - <i>php artisan db:seed</i>
 - <i>php artisan key:generate</i>
3. Execute o comando <i>php artisan serve</i> para executar o projeto na porta 8000

Pronto, agora é só utilizar as seguintes rotas para resgatar os registros:

http://localhost:8000/api/pessoas - retorna todas as pessoas

http://localhost:8000/api/{id} - retorna os dados de uma pessoa específica
