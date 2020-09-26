<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewMessageNotification extends Mailable
{
    use Queueable, SerializesModels;


    protected $request;
    /**
     * Create a new message instance.
     *
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mail@example.com', 'Mailtrap')
            ->subject('Nieuw bericht van ' . $this->request['firstname'])
            ->markdown('mails.exmpl')
            ->with([
                'firstname' => $this->request['firstname'],
                'lastname' => $this->request['lastname'],
                'email' => $this->request['email'],
                'reason' => $this->request['reason'],
                'message' => $this->request['message'],
            ]);
    }
}
