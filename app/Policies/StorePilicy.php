<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StorePilicy
{
    use HandlesAuthorization;

    public static $key = 'stores';

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


//    public static function authorizable()
//    {
//        return true;
//    }
}
