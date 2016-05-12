<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MultiPlanServiceProvider extends ServiceProvider {
    public function register(){
        $this->app->bind('App\Interfaces\IDbRepository',                                    'App\Repositories\DBRepository');
    }
}
