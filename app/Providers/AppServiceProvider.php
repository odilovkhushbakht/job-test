<?php

namespace App\Providers;

use App\Services\Blog\BlogAction;
use App\Services\Blog\AuthorAction;
use App\Contracts\Blog\DetailAction;
use App\Services\Blog\CategoryAction;
use App\Services\Blog\BlogDetailAction;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Blog\BlogRepository;
use App\Contracts\Blog\BlogActionInterface;
use App\Contracts\Blog\AuthorActionInterface;
use App\Repositories\Blog\BlogAuthorRepository;
use App\Repositories\Blog\BlogDetailRepository;
use App\Repositories\Blog\BlogFilterRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlogActionInterface::class, function ($app) {
            return new BlogAction(new BlogRepository(), new BlogFilterRepository());
        });
        $this->app->bind(DetailAction::class, function ($app) {
            return new BlogDetailAction(new BlogDetailRepository());
        });
        $this->app->bind(CategoryActionInterface::class, function ($app) {
            return new CategoryAction();
        });
        $this->app->bind(AuthorActionInterface::class, function ($app) {
            return new AuthorAction(new BlogAuthorRepository());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
