<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\RolesModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        Gate::define('admUser', function(){
            return Auth::user()->is_admin === 1;
        });

        Gate::define('user', function(){
            return Auth::user()->role == RolesModel::USR;
        });

        Gate::define('editor', function(){
            return Auth::user()->role == RolesModel::EDITOR;
        });

    }
}
