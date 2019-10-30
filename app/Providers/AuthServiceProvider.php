<?php

namespace App\Providers;

use App\Model\Post;
use App\Model\Role;
use App\Model\User;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */


    public function boot()
    {
        Gate::before(function ($user, $ability) {
            if ($user->superAdmin()) {
                return true;
            }
        });
        Gate::resource('post', PostPolicy::class);

    }

}
