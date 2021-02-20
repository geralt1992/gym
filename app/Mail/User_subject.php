<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class User_subject extends Mailable
{
    use Queueable, SerializesModels;
    public $user_name;
    public $user_mail;
    public $user_subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name , $user_mail , $user_subject)
    {
        $this->user_name = $user_name;
        $this->user_mail = $user_mail;
        $this->user_subject = $user_subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.User_subject');
    }
}
