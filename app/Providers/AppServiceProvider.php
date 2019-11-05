<?php

namespace App\Providers;

use App\Model\Category;
use App\Repository\Comment\CommentRepository;
use App\Repository\Comment\CommentRepositoryInterface;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Category\CategoryRepository;
use App\Repository\Frontend\FrontendRepositoryInterface;
use App\Repository\Frontend\FrontendRepository;
use App\Repository\Post\PostRepositoryInterface;
use App\Repository\Post\PostRepository;
use App\Repository\Role\RoleRepository;
use App\Repository\Role\RoleRepositoryInterface;
use App\Repository\User\UserRepository;
use App\Repository\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\Post;
use Illuminate\Support\Carbon;

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
        $this->app->singleton(FrontendRepositoryInterface::class, FrontendRepository::class);
        $this->app->singleton(CommentRepositoryInterface::class, CommentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {
        $category_desktop = Category::where('id', '<', '8')->get();
//        $category_desktop = $this->categoryRepo->getMenuCategory(7);
//        $category_mobile = $this->categoryRepo->getMenuCategory(8);
        $category_mobile = Category::where('id', '>=', '8')->get();
        $time_now = Carbon::now();
        View::share('time_now', $time_now);
        View::share('category_desktop', $category_desktop);
        View::share('category_mobile', $category_mobile);
    }
}
