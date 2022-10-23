# Course Notes
## #6) Configuration
    Creating database and configuration
### Learned
* Migration
* Seeding
### Commands
```
php artisan migrate:fresh --seed
```
    Drop all tables and remigrate all migration files and seed

## #7) 
    Learning how to communciate database
### Learned
* how to write raw sql query
* how to write query builder
* how to use model
* how to debug laravel debugger
### Library
* Laravel Debugger
### Commands
```
composer require barryvdh/laravel-debugbar --dev
```
    Installing Laravel Debugger
```
php artisan tinker
```
    Running raw queries and model