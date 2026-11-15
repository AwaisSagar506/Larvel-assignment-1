# Student Records — Laravel MVC Project

Laravel MVC learning project for creating, listing and viewing student records with Blade templates and Eloquent persistence.

**Stack:** PHP, Laravel, Blade, Eloquent

## What it demonstrates

- Student list and individual record pages.
- Student creation form for name, email and age.
- Controller/model/view separation with an Eloquent student model and migration.

## Run locally

```bash
git clone https://github.com/AwaisSagar506/Larvel-assignment-1.git
cd Larvel-assignment-1
composer install
```

Copy `.env.example` to `.env`, configure a local database and run:

```bash
php artisan key:generate
php artisan migrate
php artisan serve
```

Open `/students` to list records or `/students/create` to add a record. Check `composer.json` for the PHP version supported by this project.

## Project status

Personal learning / portfolio project. Features above were checked against repository source; a complete runtime or production-readiness assessment has not been performed.
