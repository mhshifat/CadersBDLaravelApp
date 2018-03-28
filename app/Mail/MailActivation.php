<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailActivation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

		private $user_id;

		private $user_name;

		private $user_email;

		private $user_mailToken;

    public function __construct($id, $username, $email, $mailToken)
    {
			$this->user_id = $id;

			$this->user_name = $username;

			$this->user_email = $email;

			$this->user_mailToken = $mailToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
				$id = $this->user_id;

				$name = $this->user_name;

				$email = $this->user_email;

				$mailToken = $this->user_mailToken;

        return $this->view('mail.mailToken', compact('id', 'name', 'email', 'mailToken'));
    }
}
