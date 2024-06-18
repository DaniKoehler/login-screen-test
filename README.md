# Tela de login responsiva com tema claro e escuro

### Esse é o teste realizado para a vaga de desenvolvedor.

## Tecnologias utilizadas
- Laravel
- JQuery
- HTML
- CSS
- Docker

## Como rodar o projeto
1. Clone o repositório
2. Na raiz do projeto, entre no diretorio do Docker: ```cd docker_conf```
3. Execute o comando: ```docker network create --subnet=172.18.0.0/16 php-apache``` para criar a rede do docker
4. Execute o comando: ```docker-compose up -d --build``` para subir o container
5. Acesse o container: ```docker exec -it docker_conf-php81-1 bash```
6. Execute o comando: ```composer install``` para instalar as dependências do Laravel
7. Copie o arquivo .env.example para .env
8. Execute o comando: ```php artisan key:generate``` para gerar a chave do Laravel
9. Execute o comando: ```npm install``` para instalar as dependências do projeto
10. Execute o comando: ```php artisan migrate``` para criar as tabelas no banco de dados

## Acesso
- Acesse o projeto em: http://localhost:80
- Acesse a base de dados em: http://localhost:8080, as credenciais estão em .env.example
