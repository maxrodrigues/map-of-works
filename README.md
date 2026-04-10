# Teste CEFAZ

### Gerenciamento e analise de obras

Aplicacao web para ingestao, visualizacao e acompanhamento de obras, com upload de arquivo CSV, dashboard de metricas, listagem paginada e mapa interativo com geolocalizacao.

## Visao geral

O sistema permite:

- importar obras em lote por arquivo CSV;
- validar o arquivo de entrada antes do processamento;
- exibir total de obras e grafico por municipio;
- consultar obras em tabela paginada;
- visualizar obras em mapa interativo (Google Maps).

## Funcionalidades principais

### 1) Upload e processamento de arquivo

- Tela dedicada para envio de arquivo CSV.
- Validacao via `FormRequest` (`ProcessUploadRequest`).
- Processamento do arquivo com `spatie/simple-excel`.
- Persistencia dos dados na tabela `works`.

Campos importados:

- `IDOBRA` -> `number`
- `OBRA` -> `description`
- `ENDERECO` -> `location`
- `MUNICIPIO` -> `municipality`
- `IBGE` -> `ibge_code`
- `LATITUDE` -> `latitude`
- `LONGITUDE` -> `longitude`

### 2) Dashboard

- Exibe o total de obras cadastradas.
- Renderiza grafico de obras por municipio.
- Usa `consoletvs/charts` + `Chart.js`.

### 3) Listagem de obras

- Tabela com descricao, municipio, latitude e longitude.
- Paginacao de 10 registros por pagina.

### 4) Mapa de obras

- Renderizacao de marcadores usando Google Maps JavaScript API.
- Exibicao de informacoes da obra ao clicar no marcador.
- Apenas registros com latitude e longitude sao exibidos.

## Rotas web

- `GET /` -> dashboard (`DashboardController`)
- `GET /upload` -> formulario de upload (`UploadController`)
- `POST /process-upload` -> processamento do arquivo (`ProcessUploadController`)
- `GET /works` -> listagem de obras (`WorksController`)
- `GET /works-map` -> mapa de obras (`WorkMapController`)

## Arquitetura resumida

- `app/Http/Controllers` concentra os endpoints web.
- `app/Services/WorkService.php` concentra consultas e agregacoes de obras.
- `app/Http/Requests/ProcessUploadRequest.php` aplica regras de validacao do upload.
- `database/migrations/2026_04_09_194351_create_works_table.php` define a estrutura da tabela de obras.
- `resources/views` contem as telas (`dashboard`, `upload`, `works`, `work-map`).

## Stack tecnologica

- PHP `^8.3`
- Laravel `^13.0`
- MySQL
- Redis
- Vite
- Tailwind CSS 4
- Pest
- Spatie Simple Excel
- ConsoleTVs Charts

## Requisitos

- PHP 8.3+
- Composer
- Node.js e npm
- MySQL
- Redis (opcional para filas/cache local, conforme configuracao)

Ou, alternativamente:

- Docker e Docker Compose

## Configuracao local (sem Docker)

1. Copie o arquivo de ambiente:

```bash
cp .env.example .env
```

2. Instale dependencias:

```bash
composer install
npm install
```

3. Configure banco e variaveis no `.env` (incluindo `GOOGLE_MAPS_API_KEY` para o mapa).

4. Gere chave e rode migracoes:

```bash
php artisan key:generate
php artisan migrate
```

5. Suba a aplicacao:

```bash
php artisan serve
npm run dev
```

## Configuracao com Docker

1. Copie o ambiente:

```bash
cp .env.example .env
```

2. Suba os containers:

```bash
docker-compose up -d
```

3. Instale dependencias no container:

```bash
docker-compose exec app composer install
```

4. Gere chave e migracoes:

```bash
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
```

5. Acesse:

- Aplicacao: [http://localhost:8989](http://localhost:8989)
- phpMyAdmin: [http://localhost:8080](http://localhost:8080)

## Comandos uteis

```bash
# executar testes
composer test

# formatar codigo
./vendor/bin/pint

# build de producao do frontend
npm run build
```
