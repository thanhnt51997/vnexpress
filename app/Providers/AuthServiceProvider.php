<?php

namespace App\Providers;

use App\Model\Post;
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
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */


    public function boot()
    {
        $this->registerPolicies();

//        Gate::allows('admin', function ($user){
//           return $user->role_id === 1;
//        });
    }
}
