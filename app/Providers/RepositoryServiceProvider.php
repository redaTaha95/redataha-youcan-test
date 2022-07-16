<?php

namespace App\Providers;

use App\repositories\BaseRepository;
use App\repositories\CategoryRepository;
use App\repositories\interfaces\BaseRepositoryInterface;
use App\repositories\interfaces\CategoryRepositoryInterface;
use App\repositories\interfaces\ProductRepositoryInterface;
use App\repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
