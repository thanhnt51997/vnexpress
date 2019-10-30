<?php

namespace App\Providers;

use App\Model\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
