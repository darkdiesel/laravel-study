# Laravel Study Help List

## Table of content
- [Install](#install)
- [Controllers](#controllers)
- [Views](#views)
- [Authorisation](#authorisation)
- [Sessions](#sessions)
- [Composer](#composer)

## Install 
* Install laravel globally via composer: `composer global require "laravel/installer"`
* Create new project: 'laravel new blog'
* For starting project - create copy of `.env.example` with file name `.env` and update data.
* Setup app key via command `php artisan key:generate`


## Controllers

* Create controller: `php artisan make:controller UserController`

* Create resource controller: `php artisan make:controller UserController --resource`

* Create resource controller and assign to model: `php artisan make:controller UserController --resource  --model=\App\Models\User`

* Add new resource methods before resource route.

## Views 

* Add new view in `resources/views`

## Routes

* Add new route in `routes/web.php`

* Display list of routes `php artisan route:list`

* Check route by name in Controller `$request->route()->named('route_name)`

## Response 

* Send response with json and status: `response()->json($data, 201)`

* Send response with view and status: `response(view('post.store', 'post'), 201)`

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

* Solve problem n+1 request `$model::with()`. Eager Loads

* Load items where you need `$model->load()`. Lazy Eager Loading

* Polymorphic relationships. `$model->morphMany(); $model->morphTo()`

### Middleware ###

* Create middleware `php artisan make:middleware MyMiddleware`

## Storage

* Link storage to public: `php artisan storage:link`

* Check `config/filesystems.php` for storage configs.

* Use helper `url()` for building urls.

* Get url by facade `Storage::disk('public')->url('file.txt')`

## Localisation

* Setup default locale in `config/app.php` (_locale_, _fallback_locale_)

## Authorisation 
* Add default laravel authorisation: `php artisan make:auth`

* Check if authorised `Auth::check()`

* Login by credentials `Auth::attempt(['name' => 'vasya', 'password' => '123'])`

* Login using id: `Auth::loginUsingId(1)` 

* Logout user: `Auth::logout()`

## Sessions

* Save value to session `session()->put('key', 'value')` or with helper `session(['key' => 'value'])`

* Get all session values `$request->session()->all();` or `session()->all();`

* Delete session value `session()->forget('key')`

* Delete all session values `session()->flush()`

* Add flash to session `session()->flash('success', 'Message text')`

* Increase all flashes live `session()->reflash()`

* Keep some session value `$request->session()->keep(['username', 'email']);`

* Get session value `session()->get();`

## Composer

* Reset composer autoload file: `composer dump-autoload`

* Clear composer cache: `composer clearcache`
