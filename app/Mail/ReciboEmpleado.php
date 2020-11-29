<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReciboEmpleado extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public
        $empleado,
        $link_empleado;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($empleado, $link_empleado)
    {
        $this->empleado = $empleado;
        $this->link_empleado = $link_empleado;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.recibo_empleado')
                    ->with(['empleado' => $this->empleado, 'link_empleado' => $this->link_empleado]);
    }
}
