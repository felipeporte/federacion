# Federacion

Este proyecto es un punto de partida para administrar una federación de patinaje utilizando un entorno **AMP** (Apache, MySQL y PHP).

## Estructura

- **public/**: Archivos públicos que serán servidos por Apache. El archivo principal es `index.php`.
- **src/**: Código fuente de apoyo. Incluye la conexión a la base de datos (`db.php`).
- **templates/**: Plantillas reutilizables de cabecera y pie de página.

## Configuración

1. Cree una base de datos MySQL llamada `federacion` y una tabla `disciplinas` con al menos una columna `nombre`.
2. Copie el archivo `.env.example` a `.env` y ajuste `DB_HOST`, `DB_USER`, `DB_PASS` y `DB_NAME` según su entorno.
3. Ejecute `composer install` para instalar las dependencias PHP.
4. Configure Apache para que el directorio `public/` sea el *DocumentRoot* del sitio.

Con esto podrá acceder a `index.php` para listar las disciplinas registradas. Las páginas incluyen las plantillas `templates/header.php` y `templates/footer.php` para reutilizar la misma cabecera y scripts.
