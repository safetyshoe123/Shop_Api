<?php

namespace App\Providers;

use App\Policies\AuthorizationPolicy;
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

        // Gate::define('isSuperAdmin', function ($user) {
        //     return $user->role == 'superAdmin';
        // });
        // Gate::define('isAdmin', function ($user) {
        //     return $user->role == 'admin';
        // });

        // Gate::define('isManager', function ($user) {
        //     return $user->role == 'manager';
        // });
        // Gate::define('update-shop', [AuthorizationPolicy::class, 'update']);
        // Gate::define('getUser', [AuthorizationPolicy::class, 'getUser']);


        //gate for creating employees in branches
        // Gate::define('createEmployee', function ($user, $branch) {
        //     return $user->restriction == $branch->branchId;
        // });
        //gate for viewing branches
        // Gate::define('viewBranch', function ($user, $branch) {
        //     return $user->restriction == $branch->branchId;
        // });
    }
}
