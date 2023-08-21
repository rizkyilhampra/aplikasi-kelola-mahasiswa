<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\AuthGroupUser;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function ($user) {
            return $user->authGroup->auth_group_id === 1;
        });

        // Gate::define('user', function ($user) {
        //     return $user->authGroup->auth_group_id === 2;
        // });
    }
}
