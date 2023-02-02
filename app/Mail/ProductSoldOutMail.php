<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductSoldOutMail extends Mailable
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
        return $this->view('emails.product_sold_out')
            ->from(config('mail.honey_apps_newsletter_email'))
            ->to($this->data['email'])
            ->subject('Offer suspended')
            ->with(['offers' => $this->data['offers']]);
    }
}
