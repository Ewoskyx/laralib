<?php

namespace App\Providers;

use App\Repositories\Contracts\IBook;
use App\Repositories\Contracts\IUser;
use App\Repositories\Contracts\IAuthor;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\IStudent;
use App\Repositories\Eloquent\BookRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Eloquent\AuthorRepository;
use App\Repositories\Eloquent\StudentRepository;

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
        $this->app->bind(IBook::class , BookRepository::class);
        $this->app->bind(IUser::class , UserRepository::class);
        $this->app->bind(IStudent::class , StudentRepository::class);
    }
}
