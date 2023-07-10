<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        
       $this->info = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->info['subject'];
        $nombreContacto = $this->info['nombreContacto'];
        $apellidosContacto = $this->info['apellidosContacto'];
        $numeroContacto = $this->info['numeroContacto'];
        

        return $this->subject($subject)
            ->view('mails.notificationEmail',$this->info)
            ->with([
                    'subject' => $subject,
                    'nombreContacto' => $nombreContacto,
                    'apellidosContacto' =>$apellidosContacto,
                    'numeroContacto' => $numeroContacto
                ]);
        // return $this->view('mails.notificationEmail');
    }
}
