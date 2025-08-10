<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExhibitionRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    // Properti untuk menyimpan data dari form
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        // Terima data dari controller dan simpan di properti publik
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Exhibition Registration Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // Tentukan view Blade yang akan menjadi body email
            view: 'user.emails.exhibition-registration-form',
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
