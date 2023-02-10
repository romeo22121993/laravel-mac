<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $typeAction;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $data, $typeAction )
    {
        $this->data = $data;
        $this->typeAction = $typeAction;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address(env('APP_REPLY_EMAIL'), env('APP_ADMIN_NAME') ),
            replyTo: [
                new Address( env('APP_REPLY_EMAIL'), env('APP_REPLY_NAME')),
            ],
            subject: 'Order - action ' . $this->typeAction,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {

        return new Content(
            view: 'emails.order',
            with: [
                'action' => $this->typeAction,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

}
