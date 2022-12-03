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
        view()->share('global', '用Provider傳入全域變數');

        view()->composer('example.*', function ($view) {
            $view->with('multi', '傳入多視圖變數');
        });
    }
}