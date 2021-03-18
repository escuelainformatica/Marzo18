En la linea de comando, en la carpeta de trabajo ejecutar

```php
composer create-project laravel/laravel Marzo18
```

* modifique el archivo .env con los datos de la base de datos.

Crear tabla de usuarios

```
php artisan session:table
php artisan migrate
```

Crear un usuario

```php
php artisan tinker

DB::table('users')->insert(['name'=>'admin','email'=>'thisis@myemail.com','password'=>Hash::make('123456')])
```



Checklist

- [ ]  Modelo
- [x] Controller
- [x] Vistas
- [x] Web
- [x] .env

