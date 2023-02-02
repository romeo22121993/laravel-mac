<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerDataRequestGdprMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.customer_data_request_gdpr')
            ->from(config('mail.honey_apps_newsletter_email'))
            ->to(config('mail.support_email'))
            ->subject('The customer requested their own details from the store owner')
            ->with(['data' => $this->data]);
    }
}
