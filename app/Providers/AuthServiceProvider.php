<?php

namespace App\Providers;

use App\Policies\AuthorizationPolicy;
use App\Models\User;
use Illuminate\Auth\Access\Response;
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
        // User::class => AuthorizationPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */

    public function boot(): void
    {
        // $this->registerPolicies();
        //
        Gate::define('isSuperAdmin', function (User $user) {
            return $user->status == 'superAdmin';
            // ? Response::allow()
            // : Response::deny('You are not authorized');
        });
        // Gate::define('update-shop', [AuthorizationPolicy::class, 'update']);
        // Gate::define('getUser', [AuthorizationPolicy::class, 'getUser']);

        Gate::define('isAdmin', function ($user) {
            return $user->status == 'admin';
        });

        Gate::define('isManager', function ($user) {
            return $user->status == 'manager';
        });

        // Gate::define('isEmployee', function ($user) {
        //     return $user->status == 'employee';
        // });
    }
}
