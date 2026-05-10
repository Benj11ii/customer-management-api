# Fintech API

API RESTful desarrollada con Laravel para la gestión de clientes de Fintech Solutions S.A.

## Integrantes

- Benjamín Alonso Carmona Vega

## Repositorio GitHub

https://github.com/Benj11ii/Evaluacion_unidad2_Backend_IPSS

## Stack Técnico

- PHP 8.2
- Laravel 12
- MySQL 8.4 (via Docker)
- Laravel Sail (Docker)
- Postman

## Requisitos

- Docker Desktop
- WSL2 con Ubuntu

## Instalación

```bash
# 1. Levantar contenedores Docker
./vendor/bin/sail up -d

# 2. Ejecutar migraciones
./vendor/bin/sail artisan migrate

# 3. La API estará disponible en http://localhost
```

## Endpoints

| Método | Endpoint | Descripción | Código |
|--------|----------|-------------|--------|
| GET | /api/v1/clientes | Listar todos los clientes | 200 OK |
| POST | /api/v1/clientes | Registrar un nuevo cliente | 201 Created |
| GET | /api/v1/clientes/{id} | Consultar un cliente específico | 200 OK |

## Validaciones

- `rut`: requerido y único
- `nombre`: requerido
- `apellido`: requerido
- `email`: requerido, formato válido y único
- `telefono`: requerido
- Error de validación retorna código **422 Unprocessable Entity**

## Estructura del Proyecto

- `app/Models/Cliente.php` — Modelo Eloquent
- `app/Http/Controllers/ClienteController.php` — Controlador API
- `database/migrations/` — Migraciones de base de datos
- `routes/api.php` — Definición de rutas
- `EVA2_CarmonaVega.postman_collection.json` — Colección Postman
