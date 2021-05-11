<?php

namespace Phantomdev\Contact;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $name;

    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    public function build(): ContactMailable
    {
        return $this->markdown('contact::contact.email')
            ->with(
                [
                    'message' => $this->message,
                    'name' => $this->name
                ]
            );
    }
}
