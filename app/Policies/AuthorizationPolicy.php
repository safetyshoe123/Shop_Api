<?php

namespace App\Policies;

use App\Models\Shop;
use App\Models\User;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Auth\Access\Response;

class AuthorizationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    // public function viewAny(Admin $admin): bool
    // {
    //     //
    // }
    public function getUser(User $user)
    {
        return $user->role == 'superAdmin';
    }

    /**
     * Determine whether the user can view the model.
     */
    // public function view(Admin $admin, Shop $shop): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // if (Gate::allow($user))
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    //if manager
    public function update(User $user, Shop $shop): bool
    {
        return $user->shop_id === $shop->shop_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    // public function delete(Admin $admin, Shop $shop): bool
    // {
    //     
    // }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(Admin $admin, Shop $shop): bool
    // {
    //
    // }

    /**
     * Determine whether the user can permanently delete the model.
     */
    // public function forceDelete(User $user, Shop $shop): bool
    // {
    //     return true;
    //     //
    // }
}
