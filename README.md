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

En la terminal(cmd)
```bash
git clone git@github.com:Safci/safci-web-backend.git
```
```bash
cd safci-web-backend
```
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
