<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InstallAppStoreOwnerMail extends Mailable
{
    use Queueable, SerializesModels;

    private $userMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userMail)
    {
        $this->userMail = $userMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.install_app_store_owner_mail')
            ->from(config('mail.support_email'))
            ->to($this->userMail)
            ->subject('App installed');
    }
}
