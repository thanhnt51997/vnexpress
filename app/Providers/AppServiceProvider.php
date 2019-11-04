<?php

namespace App\Providers;

use App\Model\Category;
use App\Repository\Category\CategoryRepository;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Post\PostRepositoryInterface;
use App\Repository\Post\PostRepository;
use App\Repository\Role\RoleRepository;
use App\Repository\Role\UserRepository;
use App\Repository\Role\RoleRepositoryInterface;
use App\Repository\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostRepositoryInterface::class, PostRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category_desktop = Category::where('id', '<', '8')->get();
        $category_mobile = Category::where('id', '>=', '8')->get();
        View::share('category_desktop', $category_desktop);
        View::share('category_mobile', $category_mobile);
    }
}
