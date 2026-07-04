<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApiMail extends Mailable
{
    use Queueable, SerializesModels;

   public $data;

    public function __construct($data)
    {
        $this->data = $data;}

    public function build()
    {
        return $this->subject('New Greeting Message')
                    ->view('greeting')
                    ->with('data', $this->data);
    }
 
}
