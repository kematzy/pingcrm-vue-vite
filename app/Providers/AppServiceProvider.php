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
        Model::unguard();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::if('viteserver', function () {
            if (app()->environment('production')) {
                return false;
            }

            try {
                Http::get('http://localhost:3000');  // TODO: convert to customisable ENV variable
                return true;
            } catch (ConnectionException $exception) {
                return false;
            }
        });
    }
}
