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

<hr>

## #7) Database execution
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

<hr>

## #8) Listeners and Transactions
learning how to call event in each queries, and how to use db transcation for set of queries exctution, when some execution running if any errors occues in one execution others execution will not working.

### Learned
* DB Listeners or Event
* DB Transactions

<hr>

## #9) Database Migrations
Learning about how to create migration file and migrate it.

### Learned
* Vite
* Migration

### Commends
```
php artisan make:migration create_comments_table
```
Create migration file
```
php artisan migrate:fresh --seed
```
Drop all tables then re migrate and seed
```
npm run dev
```
Run Vite local server to js build tool - alternatives of mix.