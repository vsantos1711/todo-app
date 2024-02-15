<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# A basic to-do app

This is a simple to-do app created to improve my skills using Laravel as a full-stack framework, along with Tailwind CSS for styling. With this project, I aim to gain hands-on experience in building a web application from scratch, implementing basic CRUD operations, user authentication, and responsive design. By working on this project, I hope to enhance my understanding of Laravel's capabilities and best practices in web development.

# Technologies

[<img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white" />](https://laravel.com/)
[<img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" />](https://tailwindcss.com/)
[<img src="https://img.shields.io/badge/JWT-black?style=for-the-badge&logo=JSON%20web%20tokens"/>](https://jwt.io/)
[<img src="https://img.shields.io/badge/vite-%23646CFF.svg?style=for-the-badge&logo=vite&logoColor=white"/>](https://vitejs.dev/)

# Running the app

## Docker

```bash
# Rename .env.example to .env
# Run the following command in the project root

$ docker-compose up -d
```

## PHP Server

```bash
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
