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

<hr>

## #10) Factory and Seeder - Adding Fake data
Adding initial or dummy data to the database.

### Learned
* Factory
* Seeding

<hr>

## #11) Factory and Seeder - Adding Fake data
Adding initial or dummy data to the database. #10 and #11 are same

### Learned
* Factory
* Seeding


<hr><hr>

## #12) Fetching Data form Database - SELECT
How to fetch data from database.

### Learned
* Pluck
* Where
* Select
* First
* Find
* Value
* select as
* min, max, sum and avg
* exists and doesntExist

## #13) WHERE sql clause - part1
How to fetch data with condition.

### Learned
* where
* where =, >, >=, <, <=
* multiple where []
* orWhere
* multiple orWhere function($query)

## #14) WHERE sql clause - part2
How to fetch data with condition.

### Learned
* whereBetween([])
* whereNotBetween([])
* whereNotIn([])
* whereIn([])
* whereNull('column')
* whereNotNull('column')
* whereDate('created_at', '2022-05-23')
* whereDay('created_at', '23')
* whereMonth('created_at', '05')
* whereYear('created_at', '2022')
* whereTime('created_at', '02:33:12')
* whereColumn('column1', '>', 'column2')
* whereColumn(['column1', '>', 'column2'], ['column3', '>', 'column2'])
* whereExists(function($query))

## #15) WHERE sql clause - part3
How to fetch data with condition.

### Learned
* whereJsonContains('meta->skills', 'Laravel')

## #16) Pagination
How to fetch data in pagination - DOUBT: it's take only first page but how did we use next pages.

### Learned
* paginate(3)
* simplePaginate(3)