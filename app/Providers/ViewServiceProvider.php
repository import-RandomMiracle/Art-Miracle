<?php

namespace App\Providers;

use App\Http\Controllers\ResourceController;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Guard;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Guard $auth) {
        view()->composer('*', function($view) use ($auth) {
            // get the current user
            $currentUser = ResourceController::getJson('user/current');

            // do stuff with the current user
            // ...

            // pass the data to the view
            $view->with('currentUser', $currentUser);
        });
    }
}
