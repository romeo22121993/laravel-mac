<?php

namespace App\Observers;

use App\Jobs\PostObserverJob;
use App\Models\Post;

class PostObserver
{

    /**
     * Run events after transaction
     *
     * @var bool
     */
    public $afterCommit = true;


    /**
     * Handle the Product "created" event.
     *
     */
    public function creating()
    {
        // $product->slug = \Str::slug($product->name);
    }

    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        dispatch( new PostObserverJob( $post, 'created' ) )->onQueue('emails'); // set email in background, via job

    }

    public function updating(Post $post)
    {

    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
