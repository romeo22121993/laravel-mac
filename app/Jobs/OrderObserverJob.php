<?php

namespace App\Jobs;

use App\Mail\OrderMail;
use App\Mail\UserMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class OrderObserverJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $typeAction;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( $data, $typeAction )
    {
        $this->data = $data;
        $this->typeAction = $typeAction;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to( env('APP_ADMIN_EMAIL') )->send( new OrderMail( $this->data, $this->typeAction ) );
    }
}
