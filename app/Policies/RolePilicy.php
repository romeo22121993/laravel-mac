<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePilicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(User $user)
    {
        return $user->isSuperAdmin();
    }

    public function viewAny(User $user)
    {
        return $user->isSuperAdmin();
    }

    public function update(User $user)
    {
        return $user->isSuperAdmin();
    }

    public function delete(User $user)
    {
        return $user->isSuperAdmin();
    }

    public function forceDelete(User $user)
    {
        return $user->isSuperAdmin();
    }

    public function create(User $user)
    {
        return $user->isSuperAdmin();
    }
}
