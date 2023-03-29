<?php

namespace App\Listeners;

use App\Events\ArticleCreated;
use App\Jobs\ArticleJob;
use App\Mail\ArticleMail;
use App\Mail\PostMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class ArticleEmailUser implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ArticleCreated $event)
    {
        Mail::to(env('APP_ADMIN_EMAIL'))->send(new ArticleMail($event->article, 'send to useer'));

    }
}
