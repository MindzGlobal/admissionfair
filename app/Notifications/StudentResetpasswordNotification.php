<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


class StudentResetpasswordNotification extends Notification
{
    use Queueable;

    public $studentvalue;
    protected $newpassword;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($student,$newPassword)
    {
        $this->studentvalue=$student;
        $this->newpassword=$newPassword; 
       
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        
        $notifiable->email = $this->studentvalue->email;
    
        return (new MailMessage)
                  ->subject("Forgot Password Request")
                  ->view('email.forgotPasswordMailTemplete',['student'=>$this->studentvalue,'newpassword'=>$this->newpassword,]);
                
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            
        ];
    }   
    
}
