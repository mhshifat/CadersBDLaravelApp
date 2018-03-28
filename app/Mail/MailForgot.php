<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailForgot extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

		private $username;

		private $email;

		private $server;

    public function __construct($username, $email, $server)
    {
			$this->username = $username;

			$this->email = $email;

			$this->server = $server;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
				$username = $this->username;

				$email = $this->email;

				$server = $this->server;

				return $this->view('mail.mailForgot', compact('username', 'email', 'server'));
    }
}
