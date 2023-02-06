<?php

namespace App\Observers;

use App\Jobs\UserObserverJob;
use App\Models\User;

class UserObserver
{

    public $data;
    public $typeAction;

    /**
     * Run events after transaction
     *
     * @var bool
     */
    public $afterCommit = true;

    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created( User $user )
    {
        dispatch( new UserObserverJob( $user, 'created' ) )->onQueue('emails'); // set email in background, via job
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        dispatch( new UserObserverJob( $user, 'updated' ) )->onQueue('emails');
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        dispatch( new UserObserverJob( $user, 'deleted' ) )->onQueue('emails');
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

}
