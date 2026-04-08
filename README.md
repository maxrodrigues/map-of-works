# Default Laravel App

Projeto base em Laravel 13 para iniciar novas funcionalidades com ambiente local via Docker ou execução nativa.

## Visão geral

- Framework principal: Laravel `^13.0`
- PHP requerido: `^8.3`
- Frontend: Vite + Tailwind CSS 4
- Infra Docker: PHP-FPM, Nginx, MySQL 8, Redis e phpMyAdmin
- Estado atual: projeto template (sem regras de negócio implementadas)

## Stack tecnológica

### Backend

- PHP `^8.3`
- `laravel/framework` `^13.0`
- `laravel/tinker` `^3.0`

### Frontend e build

- Vite `^6.2.4`
- Tailwind CSS `^4.0.0`
- `laravel-vite-plugin` `^1.2.0`
- Axios `^1.8.2`

### Qualidade e testes

- Pest `^4.4`
- `pest-plugin-laravel` `^4.1`
- `pest-plugin-faker` `^4.0`
- Laravel Pint

## Pré-requisitos

Escolha um dos fluxos:

- Docker: Docker + Docker Compose
- Local sem Docker:
  - PHP 8.3+
  - Composer
  - Node.js + npm
  - Banco MySQL e Redis configurados no `.env`

## Setup rápido com Docker

1. Crie o arquivo de ambiente:

```bash
cp .env.example .env
```

2. Suba os serviços:

```bash
docker-compose up -d
```

3. Instale dependências PHP no container:

```bash
docker-compose exec app composer install
```

4. Gere chave da aplicação e rode migrações:

```bash
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
```

5. Acesse a aplicação:

- App: [http://localhost:8989](http://localhost:8989)
- phpMyAdmin: [http://localhost:8080](http://localhost:8080)

## Setup local (sem Docker)

1. Ambiente:

```bash
cp .env.example .env
```

2. Dependências:

```bash
composer install
npm install
```

3. Inicialização:

```bash
php artisan key:generate
php artisan migrate
```

## Comandos úteis

### Build frontend

```bash
npm run build
```

### Testes

```bash
composer test
```

### Banco de dados

```bash
php artisan migrate
php artisan db:seed
```

## Portas e serviços Docker

- `8989` -> Nginx (aplicação)
- `3388` -> MySQL 8
- `8080` -> phpMyAdmin
- Redis está apenas na rede interna do Docker (sem porta publicada para host)

## Estrutura inicial do projeto

- `app/` -> código da aplicação (atualmente base Laravel)
- `routes/web.php` -> rota `GET /` com `welcome`
- `routes/console.php` -> comando de console `inspire`
- `database/migrations/` -> migrações padrão (`users`, `cache`, `jobs`)
- `tests/` -> testes de exemplo com Pest

## Estado atual e próximos passos

Este repositório está pronto para começar a implementação de funcionalidades reais.

Próximos passos recomendados:

1. Definir o domínio de negócio e primeiros casos de uso.
2. Criar rotas e endpoints iniciais (web e/ou API).
3. Implementar testes de feature para os fluxos principais.
4. Adicionar serviços de domínio e recursos de resposta conforme arquitetura desejada.
