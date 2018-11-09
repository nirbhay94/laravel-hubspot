<?php

namespace Nirbhay\Hubspot;

use Illuminate\Support\ServiceProvider;

class HubspotServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->mergeConfigFrom(__DIR__.'/config/hubspot.php','hubspot');
        $this->publishes([__DIR__.'/config/hubspot.php' => config_path('hubspot.php')]);
    }

    public function register()
    {

    }
}