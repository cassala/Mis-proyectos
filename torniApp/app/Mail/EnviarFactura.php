<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnviarFactura extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;
    
    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            to: [$this->datos['to']],
            from: new Address("castro-1594@hotmail.com"),
            subject: 'Factura TorniMotos',
        );
    }

    public function content(): Content
    {
        return new Content(
            view:  "correoFactura",
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [$this->datos['pdf']];
    }
}