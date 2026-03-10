# Projeto Pessoal

Este é um projeto pessoal desenvolvido em PHP, utilizando uma arquitetura MVC (Model-View-Controller) básica. O projeto está containerizado com Docker para facilitar o desenvolvimento e a execução.

## Descrição

O projeto visa criar uma aplicação web simples em PHP, com integração a um banco de dados MySQL. Atualmente, inclui:
- Uma página de teste (`index.php`) que verifica a conexão com o banco de dados.
- Estrutura MVC preparada para expansão (Controller, Model e View).
- Configuração de banco de dados via PDO.

## Pré-requisitos

Antes de executar o projeto, certifique-se de ter instalado:
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Instalação

1. **Clone ou baixe o repositório**:
   ```
   git clone <url-do-repositorio>
   cd personal-project
   ```

2. **Construa e inicie os containers**:
   ```
   docker compose up -d --build
   ```

   - Isso irá:
     - Construir a imagem customizada do PHP com a extensão PDO MySQL.
     - Iniciar o container web (Apache + PHP) na porta 8080.
     - Iniciar o container db (MySQL) com o banco "Apostas".

3. **Verifique se os containers estão rodando**:
   ```
   docker compose ps
   ```

## Uso

- **Acesse a aplicação**: Abra o navegador e vá para `http://localhost:8080`.
  - Você verá "Hello, World!" e o status da conexão com o banco de dados.

- **Parar os containers**:
  ```
  docker compose down
  ```

- **Logs dos containers**:
  ```
  docker compose logs
  ```

## Estrutura do Projeto

```
personal-project/
├── docker-compose.yml    # Configuração dos containers Docker
├── Dockerfile            # Imagem customizada do PHP
├── config/
│   └── database.php      # Configuração da conexão com o banco de dados
├── src/
│   ├── index.php         # Página principal de teste
│   ├── controller/
│   │   └── contoler.php  # Controlador (atualmente vazio)
│   ├── model/
│   │   └── model.php     # Modelo (atualmente vazio)
│   └── view/             # Views (atualmente vazia)
├── index.html            # Arquivo HTML básico (raiz)
└── README.md             # Este arquivo
```

### Detalhes dos Arquivos

- **docker-compose.yml**: Define dois serviços:
  - `web`: Container PHP com Apache, volumes para `src` e `config`.
  - `db`: Container MySQL com banco "Apostas" e usuário root.

- **Dockerfile**: Extende `php:8.1-apache` e instala `pdo_mysql`.

- **config/database.php**: Conecta ao MySQL usando PDO. Host: "db" (container interno), porta: 3306, usuário: root, senha: 1234.

- **src/index.php**: Página de entrada que testa a conexão com o DB.

## Tecnologias Utilizadas

- **PHP 8.1**: Linguagem principal.
- **MySQL 8.0**: Banco de dados.
- **Apache**: Servidor web.
- **Docker & Docker Compose**: Containerização.
- **PDO**: Extensão para conexão com banco de dados.

## Desenvolvimento

- Para adicionar funcionalidades, edite os arquivos em `src/` seguindo o padrão MVC.
- O banco de dados persiste em um volume Docker (`db_data`), então os dados sobrevivem aos restarts.

## Contribuição

Sinta-se à vontade para contribuir! Abra issues ou pull requests.

## Licença

Este projeto é pessoal e não possui licença específica.