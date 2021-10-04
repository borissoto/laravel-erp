<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Antes
- Instalar composer
- Instalar NodeJs
- Instalar Xampp 7.4 que tenga php 7


En Xampp - phpmyadmin
- Crear base de datos: safci_web_db

## Instalacion

Ir a la carpeta C:\xampp\htdocs y abrir la termial

En la terminal(cmd)
```bash
git clone git@github.com:Safci/safci-web-backend.git
```
```bash
cd safci-web-backend
```

Para que funcione la plantilla se debe:

Descargar el template 3.1 de [AdminLte](https://adminlte.io/) 
La plantilla(Template) version 3.1 de AdminLte se encuentra en https://github.com/ColorlibHQ/AdminLTE/releases

Descomprimir el SourceCode ZIP 
Copiar las carpetas /dist y /plugins a la carpeta /public del proyecto safci-web-backend 

En la terminal, ingresar a la carpeta C:\xampp\htdocs\safci-web-backend

```bash
composer install
```
```bash
npm install
```
```bash
copy .env.example .env
```
```bash
php artisan key:generate
```
```bash
php artisan migrate
```
```bash
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
