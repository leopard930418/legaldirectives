![README](https://img.shields.io/badge/README_is_not_finalized-red)

# Legal Directives
Basic Laravel 9 boilerplate application with [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze) is a minimal,
Starter Kit with Vue.

-----
<a name="item1"></a>
## Features:

[Laravel Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze) is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. Laravel Breeze's default view layer is made up of simple Blade templates styled with Tailwind CSS. Or, Breeze can scaffold your application using Vue or React and Inertia.

Laravel Breeze also offers [Vue](https://laravel.com/docs/9.x/starter-kits#breeze-and-inertia)  scaffolding via an Inertia frontend implementation. Inertia allows you to build modern, single-page Vue applications using classic server-side routing and controllers. Inertia lets you enjoy the frontend power of React and Vue combined with the incredible backend productivity of Laravel and lightning-fast Vite compilation. To use an Inertia stack, specify vue or react as your desired stack when executing the breeze:install Artisan command. After Breeze's scaffolding is installed, you should also compile your application's frontend assets:

-----

# Production Site


### Database

- **PMA URL:**   

- **DB Username:**   

- **DB Password Location:**  

### SSH & SFTP

- **Host:**   

- **Port:**   

- **Username:**   

- **Password:**   

```shell
```

---

# Development Site


### Database

- **PMA URL:**   

- **DB Username:**   

- **DB Password Location:**   

### SSH & SFTP

- **Host:**   

- **Port:**   

- **Username:** 

- **Password:**   

```shell
```

---

# Local Development

## System requirements

* **PHP:** ^8.1
```
❯ php -v
PHP 8.1.11
``` 
* **Node:** ^18.1  
```
❯ node --version
v12.22.12

❯ nvm use 18.7.0
Now using node v18.7.0 (npm v8.15.0)
 ```
* **Database** `Server version: 10.8.3-MariaDB Homebrew`

## Generate your local .env file

Create a duplicate of the provided `.env.example` using the following terminal command

```shell
cp .env.example .env
```

### Configure .env

#### Local DB

In your new `.env`, add the appropriate DB connection settings needed by Laravel

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=legaldirectives
DB_USERNAME={your_username}
DB_PASSWORD={your_password}
```

#### Generate App Key

Making sure you are within the `legaldirectives` project directory, run the following to generate your app key

```shell
php artisan key:generate
```

### Install Dependencies

```shell
(composer install)

php artisan migrate
npm install
npm run dev
```

-----




