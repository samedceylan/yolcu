<?php

namespace Tkaratug\Yolcu;

use Illuminate\Support\ServiceProvider;

class YolcuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'yolcu');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    public function register()
    {

    }
}
