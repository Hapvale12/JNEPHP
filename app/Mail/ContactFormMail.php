<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData; // Cambiado de '$data' a '$formData' para evitar conflictos con 'data' en vista blade

    /**
     * Create a new message instance.
     */
    public function __construct($formData) // Recibe los datos del formulario
    {
        $this->formData = $formData; // Asigna los datos a la propiedad pública
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // setFrom('portalDNE@jne.gob.pe', 'Portal DNE'); -> Esto se configura en .env (MAIL_FROM_ADDRESS, MAIL_FROM_NAME)
        // addAddress('voluntariado@jne.gob.pe', 'Voluntariado JNE'); -> Aquí definimos el 'to'
        // Subject = 'Inscripción al programa de voluntariado'; -> Aquí definimos el 'subject'

        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')), // Remitente desde .env
            to: [
                new Address('dnef@jne.gob.pe', 'DNEF JNE'),
            ],
            subject: 'Inscripción al programa de voluntariado',
            replyTo: [
                new Address($this->formData['email'], $this->formData['nombre'] . ' ' . $this->formData['apellidos']), // El correo del remitente del formulario para 'responder a'
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact', // La vista Blade que contendrá el cuerpo del correo
            with: [
                'data' => $this->formData, // Pasamos los datos del formulario a la vista como '$data'
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}