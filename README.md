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
2. Copie o arquivo .env.example para .env
3. Na raiz do projeto, entre no diretorio do Docker: ```cd docker_conf```
4. Execute o comando: ```docker network create --subnet=172.18.0.0/16 php-apache``` para criar a rede do docker
5. Execute o comando: ```docker-compose up -d --build``` para subir o container
6. Acesse o container: ```docker exec -it docker_conf-php81-1 bash```
7. Execute o comando: ```php artisan key:generate``` para gerar a chave do Laravel
8. Execute o comando: ```composer install``` para instalar as dependências do Laravel
9. Execute o comando: ```npm install``` para instalar as dependências do projeto
10. Execute o comando: ```php artisan migrate``` para criar as tabelas no banco de dados

## Acesso
- Acesse o projeto em: http://localhost:80
- Acesse a base de dados em: http://localhost:8080, as credenciais estão em .env.example

## Possiveis problemas
- Caso ao tentar acessar o site aparecer uma mensagem de erro "Forbidden - You don't have permission to access this resource.", execute os seguintes comandos:
- ```docker exec -it docker_conf-php81-1 bash``` para acessar o container
- ```cd /etc/apache2/sites-available``` para acessar o diretorio de configuração do apache
- ```nano 000-default.conf``` para editar o arquivo de configuração
- Apague todas as linhas e cole o seguinte código (obs: caso a configuração já seja essa, apenas pule para o próximo passo):
```
<VirtualHost *:80>
    ServerName develop.loginscreen.com.br
    ServerAlias develop.loginscreen.com.br

    DocumentRoot /var/www/html/public
    <Directory /var/www/html/public>
        AllowOverride All
        Order Allow,Deny
        Allow from All

        FallbackResource /index.php
    </Directory>

    ErrorLog /var/log/apache2/local.host.log
    CustomLog /var/log/apache2/local.host.log combined
</VirtualHost>
```
- Salve o arquivo e aplique a configuração com o comando: ```a2ensite 000-default.conf```
- Reinicie o apache com o comando: ```service apache2 restart```
