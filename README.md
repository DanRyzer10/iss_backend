# Proyecto iss - backend 🔶
proyecto backend desarrollado en laravel 10 aplicando el patron de diseño MVC

## indice 
- [Instalacion](#instalacion)
- [Uso](#uso)
- [Tests](#tests)


## Instalacion

### clonar repositorio
```bash
git clone 
```
### instalar dependencias
```bash
composer install
```
### configurar archivo .env
```bash
cp .env.example .env 
```
### generar key
```bash
php artisan key:generate
```
### configurar base de datos
```bash
DB_CONNECTION=mysql
DB_DATABASE=iss # nombre de la base de datos
DB_USERNAME=your user # usuario de la base de datos
DB_PASSWORD=your password # contraseña de la base de datos
```
```bash
php artisan migrate # ejecuta las migraciones
```
### ejecutar servidor
```bash
php artisan serve #inicio el servidor en http://localhost:8000
```
## Uso
### crear cuenta desde consola
```bash
php artisan account:create # agrega los datos manualmente por consola
php artisan account: create --factory=10 # agrega 10 cuentas con datos aleatorios
```

## run tests feature endpoint
```bash
php artisan test --filter AccountTest::test # ejecuta el test de la feature account

```

