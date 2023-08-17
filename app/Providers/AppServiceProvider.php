<?php

namespace App\Providers;

use App\Models\AuthGroupUser;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('active', function (string $path) {
            return "<?php echo Request::is($path) ? 'active' : ''; ?>";
        });

        Blade::directive('is_invalid', function (string $errorName) {
            return "<?php echo \$errors->has($errorName) ? 'is-invalid' : ''; ?>";
        });

        View::composer(['layouts.layout-vertical.navbar', 'index'], function ($view) {
            $name = auth()->user()->name ?? 'Guest';
            $view->with('name', $name);
        });

        View::composer('layouts.layout-vertical.navbar', function ($view) {
            $role = AuthGroupUser::with(['authGroup' => function ($query) {
                $query->select('id', 'name');
            }])->where('user_id', auth()->user()->id ?? null)->first('auth_group_id');

            $view->with('role', $role->authGroup->name ?? 'Guest');
        });
    }
}
