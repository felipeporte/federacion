# Federacion

Este proyecto es un punto de partida para administrar una federación de patinaje utilizando un entorno **AMP** (Apache, MySQL y PHP).

## Estructura

- **public/**: Archivos públicos que serán servidos por Apache. El archivo principal es `index.php`.
- **src/**: Código fuente de apoyo. Incluye la conexión a la base de datos (`db.php`).

## Configuración

1. Cree una base de datos MySQL llamada `federacion` y una tabla `disciplinas` con al menos una columna `nombre`.
2. Ajuste las variables de entorno `DB_HOST`, `DB_USER`, `DB_PASS` y `DB_NAME` si es necesario.
3. Configure Apache para que el directorio `public/` sea el DocumentRoot del sitio.

Con esto podrá acceder a `index.php` para listar las disciplinas registradas.
