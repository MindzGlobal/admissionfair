<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class CollegeVerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $college_user;
    public $email_token;

    public function __construct(User $college,$emailToken)
    {
        $this->college_user=$college;
        $this->email_token=$emailToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.verifymailtemplate')->with(['user'=>$this->college_user,'unique_id'=>bcrypt($this->college_user->reg_id),'token'=>$this->email_token]);
    }
}
