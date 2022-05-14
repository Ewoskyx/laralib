<?php

namespace App\Providers;

use App\Repositories\Contracts\IAuthor;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\AuthorRepository;

class RepositoryServiceProvider extends ServiceProvider
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
    public function boot()
    {
        $this->app->bind(IAuthor::class , AuthorRepository::class);
    }
}
