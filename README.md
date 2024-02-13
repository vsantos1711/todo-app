<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# A basic to-do app

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Running the app

## Docker

```bash
# Rename .env.example to .env
# Run the following command in the project root

$ docker-compose up -d
```

## PHP Server

```bash
# Rename .env.example to .env
# Run the following commands in the project root
# Remember to configure the database and edit .env

$ composer install

$ php artisan migrate

$ php artisan serve
```

## Vite

```bash
# In another terminal run the following command in the project root

$ npm run dev
```
