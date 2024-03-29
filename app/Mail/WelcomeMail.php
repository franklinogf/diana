<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $payer;
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payer,$token)
    {
        //
        $this->payer = $payer;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome')
                    ->subject('Manifestando tus sueños');
    }
}
