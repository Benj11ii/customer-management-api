# Fintech API

API RESTful desarrollada con Laravel para la gestión de clientes de Fintech Solutions S.A.

## Integrantes

- Benjamín Alonso Carmona Vega

## Requisitos

- Docker Desktop
- Laravel Sail

## Instalación

```bash
./vendor/bin/sail up -d
```

## Ejecutar migraciones

```bash
./vendor/bin/sail artisan migrate
```

## Endpoints

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | /api/v1/clientes | Listar todos los clientes |
| POST | /api/v1/clientes | Registrar un nuevo cliente |
| GET | /api/v1/clientes/{id} | Consultar un cliente específico |