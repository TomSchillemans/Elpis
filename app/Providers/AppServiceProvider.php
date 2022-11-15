<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        // We know what we are doing, no need to guard things
        Model::unguard();

        // Set some stricter checks on models
        Model::preventLazyLoading();
        Model::preventAccessingMissingAttributes();
    }
}
