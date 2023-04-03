# Plantilla Laravel Blade

Plantilla web de tipo Landing Page desarrollado con Laravel Blade, Laravel Livewire, Bootstrap y JQuery.

## ¿Que puedes hacer con la plantilla?
- Con la plantilla se puede enviar mensajes desde el formulario de contacto

## Dependencias
- [PHP v8.0^](https://getcomposer.org/download/)
- [Composer v2.4.1^](https://getcomposer.org/download/)
- [Laravel v9.x](https://laravel.com/docs/9.x)
- [Laravel Livewire v2.12^](https://laravel.com/docs/9.x)
- [Bootstap v3.3.6](https://getbootstrap.com/docs/3.3/getting-started/)
- [jQuery v1.11.1](https://releases.jquery.com/)
- [Owl Carousel v1.3.3](https://owlcarousel2.github.io/OwlCarousel2/)
- [NProgress v0.2.0](https://rstacruz.github.io/nprogress/)
- [iziToast v1.4.0](https://izitoast.marcelodolza.com/)

## Requerimientos

Necesitas tener instalado lo siguiente:
- [PHP v8.0^](https://getcomposer.org/download/)
- [Composer v2.4.1^](https://getcomposer.org/download/)
- [Laragon](https://laragon.org/download/index.html)
- [Git](https://git-scm.com/downloads)

## Pasos de instalación
### Clone el repositorio de GitHub
1. Abrir CMD en el directorio donde desea instalar el proyecto
2. Escriba el siguiente comando
```bash
git clone https://github.com/Azcorra/plantilla-laravel-blade.git
```
3. Acceda al directorio clonado usando el siguiente comando
```bash
cd plantilla-laravel-blade
```
### Instalar todas las dependencias de Composer
1. Use el siguiente comando para instalar todas las dependencias
```bash
composer install
```
### Crear el archivo .env
1. Duplicar el archivo *.env.example* por *.env*
2. Configure las credenciales para la conexión a la Base de Datos y la configuración para su servidor de correo

### Crear clave de la aplicación
1. Puede generar una clave con el siguiente comando
```bash
php artisan key:generate
```
### Crear base de datos
1. Crear base de datos a traves del gestor de base de datos proporcionado por su servidor web
> Nota: El nombre de la base de datos debe coincidir con el configurado en el archivo *.env*

### Estructura de la base de datos
> Se recomienda usar el método `php artisan` para importar la estructura de la base de datos, pero si cuenta con un archivo *.sql* de respaldo puede importarlo.
1. Para generar las migraciones de la base de datos y crear las tablas ejecute el siguiente comando
```bash
php artisan migrate
```

### Ejecutar proyecto
1. Inicie el proyecto ejecutando el comando `serve` de Laravel's Artisan CLI
```bash
php artisan serve
```