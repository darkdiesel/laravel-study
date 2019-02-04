# Laravel Study Help List

## Install 
* Install laravel globally via composer: `composer global require "laravel/installer"`
* Create new project: 'laravel new blog'
* For starting project - create copy of `.env.example` with file name `.env` and update data.
* Setup app key via command `php artisan key:generate`


## Controllers

* Create controller: `php artisan make:controller UserController`

## Views 

* Add new view in `resources/views`

## Routes

* Add new route in `routes/web.php`


## Debugger

* Install [debugger-panel for laravel](https://github.com/barryvdh/laravel-debugbar): `composer require barryvdh/laravel-debugbar --dev`


## Cache
* Clear cache: `php artisan cache:clear`

## Database

### Migration ###

* Create migration: `php artisan make:migration create_posts_table`.

* Create migration for new table: `php artisan make:migration create_posts_table --create=posts`.

* Create migration for existing: `php artisan make:migration create_posts_table --table=posts`.

* Run migration: `php artisan migrate`

* Remove all migration and run again: `php artisan migrate:fresh`

* Roll back migration (batch column in db table used): `php artisan migrate:rollback`

* Roll back migration to some (ex: to 2 steps) steps back: `php artisan migrate:rollback --step=2`

### Seeders ###

* Create seeder: `php artisan make:seeder UserTableSeeder`

* Register seeders in file `database/seeds/DatabaseSeeder.php` in method `run()` for example li `$this->call(UsersTableSeeder::class)`

* Run seeders: `php artisan db:seed`

### Models ###
* Create model: `php artisan make:model`

* Create model with migration: `php artisan make:model -m`


## Storage

* Link storage to public: `php artisan storage:link`
* Check `config/filesystems.php` for storage configs.
* Use helper `url()` for building urls.
* Get url by facade `Storage::disk('public')->url('file.txt')`

## Composer

* Reset composer autoload file: `composer dump-autoload`

* Clear composer cache: `composer clearcache`
