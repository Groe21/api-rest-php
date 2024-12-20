# API REST para Gestión de Estudiantes

Este proyecto es una API REST desarrollada en PHP para gestionar estudiantes en una base de datos PostgreSQL. A continuación se detallan las instrucciones para instalar y ejecutar la API.

## Requisitos

- PHP 7.4 o superior
- Composer
- PostgreSQL

## Instalación

1. Clona el repositorio en tu máquina local:
   ```
   git clone <URL_DEL_REPOSITORIO>
   ```

2. Navega al directorio del proyecto:
   ```
   cd api-rest-php
   ```

3. Instala las dependencias utilizando Composer:
   ```
   composer install
   ```

4. Configura las credenciales de la base de datos en el archivo `config/config.json`:
   ```json
   {
       "host": "localhost",
       "user": "tu_usuario",
       "password": "tu_contraseña",
       "database": "tu_base_de_datos",
       "port": 5432
   }
   ```

5. (Opcional) Configura las variables de entorno en el archivo `.env`.

## Ejecución

Para ejecutar la API, utiliza un servidor local como Apache o Nginx, o puedes usar el servidor embebido de PHP:

```
php -S localhost:8000 -t public
```

Accede a la API en `http://localhost:8000`.

## Rutas

Las siguientes rutas están disponibles para interactuar con los estudiantes:

- `GET /estudiantes` - Obtener todos los estudiantes
- `GET /estudiantes/{id}` - Obtener un estudiante por ID
- `POST /estudiantes` - Agregar un nuevo estudiante
- `PUT /estudiantes/{id}` - Actualizar un estudiante existente
- `DELETE /estudiantes/{id}` - Eliminar un estudiante

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir, por favor abre un issue o envía un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT.