<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $enquiry;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->enquiry = $data['message'];
        Log::debug("Name: $this->name, Email: $this->email, Message: $this->enquiry");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact');
    }
}
