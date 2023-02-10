<?php

namespace App\Observers;

use App\Jobs\OrderObserverJob;
use App\Models\Order;

class OrderObserver
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
     * Handle the Order "created" event.
     *
     * @param  \App\Models\Order  $user
     * @return void
     */
    public function created( Order $order )
    {
        dispatch( new OrderObserverJob( $order, 'created' ) ); // set email in background, via job
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\Order  $user
     * @return void
     */
    public function updated( Order $user)
    {
        // dispatch( new OrderObserverJob( $user, 'updated' ) );
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted( Order $user )
    {
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored( Order $user)
    {
        //
    }

}
