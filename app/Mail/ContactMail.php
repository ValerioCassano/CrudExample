<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $user_name;
    public $user_mail;
    public $user_message;
    /**
    * Create a new message instance.
    */
    public function __construct($nome, $email, $messaggio)
    {
        $this->user_name = $nome;
        $this->user_mail = $email;
        $this->user_message = $messaggio;
    }
    
    /**
    * Get the message envelope.
    */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail inviata',
        );
    }
    
    /**
    * Get the message content definition.
    */
    public function content(): Content
    {
        return new Content(
            view: 'mail.submit',
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
