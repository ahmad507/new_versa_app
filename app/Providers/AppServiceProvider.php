<?php

namespace App\Providers;


use App\Repositories\Partials\FooterRepository;
use App\Repositories\Partials\NavigationRepository;
use App\Services\Partials\FooterInterface;
use App\Services\Partials\NavigationInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(NavigationInterface::class, NavigationRepository::class);
        $this->app->singleton(FooterInterface::class, FooterRepository::class);
    }

    public function boot()
    {

    }
}
