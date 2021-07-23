# Ping CRM (Vue & Vite)

A demo application to illustrate how [Inertia.js](https://inertiajs.com/) works together with [Vue JS](https://vuejs.org/) and [Vite](https://vitejs.dev/), instead of the default [Webpack](https://webpack.js.org) and [Laravel Mix](https://laravel-mix.com) setup.

A huge **Thank You!** goes out to [Sebastian De Deyne](https://github.com/sebastiandedeyne) because most of these changes are based upon his presentation [Laravel Worldwide Meetup #8: Using Vite in Laravel &hellip;](https://www.youtube.com/watch?v=wLwVr9ToNIs) hosted by [Freek Van der Herten](https://www.youtube.com/c/FreekVanderHerten/).

I have created this version purely as an example for others to hopefully find through their search engine, so that they too can enjoy the development speed of this setup.

<br>


![](https://raw.githubusercontent.com/inertiajs/pingcrm/master/screenshot.png)

## Installation

Clone the repo locally:

```sh
git clone https://github.com/kematzy/pingcrm-vue-vite.git pingcrm-vue-vite
cd pingcrm-vue-vite
```

and switch to the `convert-to-vite` branch for the code changes.

```sh
git checkout convert-to-vite
```


Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm ci
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit Ping CRM in your browser, and login with:

- **Username:** johndoe@example.com
- **Password:** secret

## Running tests

To run the Ping CRM tests, run:

```
phpunit
```
