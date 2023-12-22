<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $emailAddress;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $emailAddress = $this->emailAddress;
        // dd('asda');
        return $this->view('emailVerification.send-email')
                    ->subject('Subject of the Email')
                    ->with(['emailAddress' => $emailAddress]);
    }
}
