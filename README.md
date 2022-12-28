# Prueba Remoters

Desarrollo de la prueba para postular a la vacante de Desarrollador Laravel


## Requerimientos
- Laravel 9
- PHP 8.0
- Mysql o MariaDB
- Composer
- Git
## Descarga

Clonar el repositorio en la carpeta que desee

```bash
  git clone https://github.com/aryeling/prueba_remoters.git
```
    
## Variables de Entorno

Para correr el proyecto es necesario en caso de la base de datos:

- Crear base de datos con nombre: `prueba_remoters` o el de su preferencia.
En el archivo .env configurar:

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=prueba_remoters`

`DB_USERNAME=root`

`DB_PASSWORD=`

Estos datos son de prueba y van acuerdo a la configuración de su equipo

## Paquetes y dependencias de Instalación
- Desde la carpeta del proyecto prueba_remoters
- Ejecute:

```bash
  composer install 
```
- Luego ejecute las migraciones y seeder de la siguiente manera:

```bash
  php artisan migrate --seed
```

- Y por último ejecute:
```bash
  php artisan serve
```

## Pruebas
Para la ejecucion de las Prueba unitarias es necesario configurar el ambiente de prueba:
- Crear base de datos con nombre: `prueba_remoters_test` .
En el archivo .env configurar:

`DB_CONNECTION=mysql`

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=prueba_remoters_test`

`DB_USERNAME=root`

`DB_PASSWORD=`

Estos datos son de prueba y van acuerdo a la configuración de su equipo

- Y por último ejecute:
```bash
  php artisan test
```
