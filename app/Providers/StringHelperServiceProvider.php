<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\StringHelper;

class StringHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('stringHelper', function(){
            return new StringHelper();
        });
    }
}
