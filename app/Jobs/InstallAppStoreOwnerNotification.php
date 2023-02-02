<?php

namespace App\Jobs;

use App\Mail\InstallAppStoreOwnerMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class InstallAppStoreOwnerNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $userMail;
    private $domain;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($domain, $userMail)
    {
        $this->domain = $domain;
        $this->userMail = $userMail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        Mail::to(config('mail.support_email'))
//            ->send(new InstallAppStoreOwnerMail($this->userMail));
    }
}
