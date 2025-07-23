
## 1. Pré-requisitos

Verifique se o seu computador possui os seguintes programas instalados: sgbd mysql/mariadb, php 8.2 ou acima e composer.

## 2. Criando e Executando o Projeto

Siga estes passos para clonar, configurar e executar o projeto SIGEST-backend localmente:

### Clonar o Repositório
Abra seu terminal (ex: Git Bash, Prompt de Comando ou Terminal do VS Code) e clone o repositório da API:
```bash
git clone https://github.com/Pedro-g2/dw.git
```

### Configurar o Arquivo .env
O arquivo .env contém as variáveis de ambiente do seu projeto, incluindo as credenciais do banco de dados.

Abra o arquivo .env e localize as informações de conexão do banco de dados. Preencha-as de acordo com o seu banco de dados, por exemplo:
* DB_CONNECTION=mariadb
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=sigest
* DB_USERNAME=root
* DB_PASSWORD=

### Instalar Dependências
Navegue até a pasta raiz do seu projeto Laravel no terminal e execute o Composer para baixar todas as dependências restantes do projeto:
```bash
composer install
```

### Executar Migrations
As Migrations do Laravel são responsáveis por criar a estrutura das tabelas no seu banco de dados.
```bash
php artisan migrate
```

Após a execução, verifique seu banco de dados para confirmar que as tabelas foram criadas corretamente.

### Iniciar o Servidor
Para a maioria dos cenários de desenvolvimento, é mais simples usar o servidor embutido do Laravel:
```bash
php artisan serve
```

O servidor será iniciado normalmente em http://127.0.0.1:8000.
