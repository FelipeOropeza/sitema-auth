# Sistema de Autenticação - PHP MVC

Este é um sistema de autenticação robusto e moderno, construído com um Framework MVC customizado em PHP Puro. O projeto demonstra a implementação de um fluxo completo de autenticação, desde o registro do usuário até o controle de acesso a páginas protegidas usando Middlewares.

## 🚀 Funcionalidades

- **Registro de Usuários:** Cadastro completo com validação de campos.
- **Login:** Sistema de login seguro com gerenciamento de sessão.
- **Proteção de Rotas:** Middleware de autenticação para proteger áreas restritas.
- **Validação com Attributes:** Uso de Attributes do PHP 8.1+ para validações de modelos (Required, Email, MinLength).
- **Arquitetura MVC:** Separação clara entre Modelo, Visão e Controlador.
- **CLI Forge:** Ferramenta de linha de comando para acelerar o desenvolvimento local.

## 🛠️ Tecnologias Utilizadas

- **Linguagem:** PHP 8.1+
- **Database:** MySQL
- **Dependências:** Composer (phpdotenv)
- **Frontend:** HTML5, Bootstrap 5
- **Servidor:** Servidor embutido do PHP ou Apache (.htaccess incluso)

## 📁 Estrutura do Projeto

```text
├── app/
│   ├── Controllers/   # Lógica das rotas
│   ├── Models/        # Entidades e Banco de Dados
│   ├── Views/         # Templates PHP (HTML/CSS)
│   └── Middleware/    # Filtros de acesso (Auth)
├── core/              # O "Motor" do Framework (Router, Database, etc)
├── config/            # Configurações globais
├── database/          # Migrations e Schema
├── public/            # Ponto de entrada (index.php) e Assets
├── routes/            # Definição das rotas (web.php)
└── forge              # CLI do framework
```

## 🏁 Começando

### Pré-requisitos

- PHP 8.1 ou superior
- MySQL
- Composer

### Instalação

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/FelipeOropeza/sitema-auth.git
    cd sitema-auth
    ```

2.  **Instale as dependências:**
    ```bash
    composer install
    ```

3.  **Configuração do Ambiente:**
    Copie o arquivo `.env.example` para `.env` e configure suas credenciais de banco de dados:
    ```bash
    copy .env.example .env
    ```

4.  **Banco de Dados:**
    Crie o banco de dados e execute as migrations (caso disponível via forge) ou importe o script SQL.
    ```bash
    php forge migrate
    ```

5.  **Inicie o servidor:**
    ```bash
    composer start
    ```
    O sistema estará disponível em `http://localhost:8000`.

## 🛠️ Comandos Forge

O `forge` é o seu assistente no terminal:

- **Criar Controller:** `php forge make:controller NomeController`
- **Criar Model:** `php forge make:model NomeModel`
- **Executar Migrations:** `php forge migrate`

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---
Desenvolvido por **[Felipe](https://github.com/FelipeOropeza)**
