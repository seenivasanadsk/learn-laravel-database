<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // DB::listen(function ($query) {
        //     dump('SQL', $query->sql);
        //     dump('Bindings', $query->bindings ?? 'No binding');
        //     dump('time', $query->time);
        //     dump('query', $query);
        // });

    }
}
