<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Shop;
use App\Models\Branch;

class BranchPolicy
{
    /**
     * Create a new policy instance.
     */

    public function create(User $user): bool
    {
        // if (Gate::allow($user))
        return true;
    }

    public function update(User $user, Shop $shop): bool
    {
        return $user->shop_id === $shop->shop_id;
    }
}
