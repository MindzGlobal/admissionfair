<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\students\Student;

class StudentVerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $student;
    public $email_token;

    public function __construct(Student $student,$emailToken)
    {

     $this->student=$student;
     $this->email_token=$emailToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.verifymailtemplate')->with(['user'=>$this->student,'studentId'=>bcrypt($this->student->student_id),'token'=>$this->email_token,'type'=>'STUDENT']);
    }
}
