En la linea de comando, en la carpeta de trabajo ejecutar

```php
composer create-project laravel/laravel Marzo18
```

* modifique el archivo .env con los datos de la base de datos.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=marzo18
DB_USERNAME=web
DB_PASSWORD=abc.123
```

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
  - [ ] Crear un controller con el comando **php artisan make:controller IngresoController**
  - [ ] Crear una funcion llamada LoginGet(),LoginPost(),Logout(),PaginaPrivada()
- [x] Vistas
  - [ ] Crear una vista para el formulario de inicio de sesión
  - [ ] Crear una vista para la pagina después de iniciar sesión
  - [ ] Crear una vista para una pagina indicando que no tiene permisos.
- [x] Web
  - [ ] Modificar los routes para que apunten a las funciones en el controlador
- [x] .env

## Auth

| Función                         | Descripción                                             |
| ------------------------------- | ------------------------------------------------------- |
| Auth::check()                   | Regresa true si el usuario esta validado                |
| Auth::logout()                  | Cierra sesión                                           |
| Auth::attempt($usrArreglo,true) | Valida un usuario, en caso correo crea una sesión nueva |
| Auth::user()                    | Obtiene los datos del usuario actual                    |