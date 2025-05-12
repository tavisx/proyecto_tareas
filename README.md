# Tareas API

Este proyecto es una API para la gestión de tareas.

##  Funciones

- Crear tareas
- Ver lista de tareas
- Completar tareas
- Eliminar tareas

## El proyecto se compone de

- PHP 8+
- Laravel 12
- MySQL (u otra base de datos compatible)

##  Instalación

1. Clona el repositorio:

git clone https://github.com/tuusuario/task-api-laravel.git
cd task-api-laravel

2. Instala dependencias:

composer install

3. Copia el archivo `.env`:

cp .env.example .env


4. Configura la base de datos en `.env` y ejecuta:

php artisan key:generate
php artisan migrate

5. Corre el servidor:

php artisan serve

La API estará disponible en: `http://localhost:8000/api/tasks`

## Endpoints

- `GET /api/tasks` → Obtiene el listado de todas las tareas
- `POST /api/tasks` → Crear tarea (`title`, `description`)
- `PUT /api/tasks/{id}` → Completar una tarea (`title`, `description`, `completed`)
- `DELETE /api/tasks/{id}` → Eliminar tarea

## Sistema desplegado

Frontend:  
Backend (API):

##  Credenciales de prueba

_No se requieren credenciales para esta API._

## Autor

Octavio Tlapa Perez