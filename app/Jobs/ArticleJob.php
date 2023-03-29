<?php

namespace App\Jobs;

use App\Mail\ArticleMail;
use App\Mail\PostMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class ArticleJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $comment;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $comment)
    {
        $this->data = $data;
        $this->comment = $comment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to(env('APP_ADMIN_EMAIL'))->send(new ArticleMail($this->data, 'send to useer'));
        Mail::to(env('APP_ADMIN_EMAIL'))->send(new ArticleMail($this->data, 'send to email'));
    }
}
