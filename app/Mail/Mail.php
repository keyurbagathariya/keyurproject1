<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $details;

    public function __construct($details)
    {
        $this->details=$details;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $k=$this->details;
         return $this->view('Mail/sendingmail',compact('k'));
                

        // return $this->subject('Laravel Basic Testing Mail')->view('userside.sendingmail',$this->$p);
    }
}
