<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TareaEnvioMasivo extends Mailable
{
    use Queueable, SerializesModels;

    public
        $title,
        $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $message)
    {
       $this->title = $title;
       $this->message = $message;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.outcome_recibo')
                    ->with(['title' => $this->title, 'message' => $this->message]);
    }

}
