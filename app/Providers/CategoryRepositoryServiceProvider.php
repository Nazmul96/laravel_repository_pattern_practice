<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class CategoryRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Interfaces\CategoryIterface', 'App\Repositories\CategoryRepository');
    }

}