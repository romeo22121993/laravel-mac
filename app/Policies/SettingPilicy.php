<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SettingPilicy
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
        return $user->isSuperAdmin() || $user->isSupport();
    }

    public function viewAny(User $user)
    {
        return $user->isSuperAdmin() || $user->isSupport();
    }

    public function create(User $user)
    {
        return $user->isSuperAdmin() || $user->isSupport();
    }

    public function update(User $user)
    {
        return $user->isSuperAdmin() || $user->isSupport();
    }

    public function delete(User $user)
    {
        return $user->isSuperAdmin();
    }
}
