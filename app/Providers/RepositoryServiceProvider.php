<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
          'App\Repositories\CategoryRepository',
          'App\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
          'App\Repositories\PhotoRepository',
          'App\Repositories\PhotoRepositoryEloquent'
        );

        $this->app->bind(
          'App\Repositories\ProductRepository',
          'App\Repositories\ProductRepositoryEloquent'
        );

        $this->app->bind(
          'App\Repositories\SellerRepository',
          'App\Repositories\SellerRepositoryEloquent'
        );

        $this->app->bind(
          'App\Repositories\UserRepository',
          'App\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
          'App\Repositories\StatusRepository',
          'App\Repositories\StatusRepositoryEloquent'
        );
    }
}
