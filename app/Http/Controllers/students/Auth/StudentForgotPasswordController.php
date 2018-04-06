<?php

namespace App\Http\Controllers\students\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
 use Illuminate\Http\Request;
use App\Model\students\Student;
use Illuminate\Notifications\Notifiable;
use Notification;
use App\Notifications\StudentResetpasswordNotification;

class StudentForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    
    use Notifiable;
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest:student'])->except('logout');
    }


    public function showLinkRequestForm()
    {
        return view('student.auth.passwords.email');
    }


    public function sendResetLinkEmail(Request $request)
    {
       // $this->validateEmail($request);

        $student=Student::where('email', $request->emailOrMobile)
                         ->orWhere('mobile', $request->emailOrMobile)
                         ->first(['id','student_id','first_name','last_name','mobile','email']);

        if(!is_null($student)){
            $newPassword =self::random();bcrypt($request->get('password'));
            
            if((Student::where('student_id',$student->student_id)->update(["password"=>bcrypt($newPassword)]))>0){
                $this->sendPasswordResetNotification($student,$newPassword);

                return redirect('student/login')->with('success','Check Your Mobile/Email and Login with the New Password');
            }
            return redirect()->back()->withErrors(['status'=>'danger','message'=>'Oops,Something went wrong ,Please try again later']);
        }     
        return redirect()->back()->withErrors(['status'=>'danger','message'=>'Sorry,Please Enter the Registered Mobile Number OR Email']);
    }

    public function sendPasswordResetNotification(Student $student,$newPassword)
    {

        $number = $student->mobile;
        $name = $student->first_name;
        // $message = "Dear ".ucwords($name)." 
        // Please verify your Account with OTP NO-".$OTP."
        // To become a part the Great Admission Fair ";
        $message = "Dear $newPassword 

        MoneyMindz wishes you Happy B'Day
        
        Click here to become Smart Investor/Earner 08049202111";

        $this->sendSMS($number, $message); 

       //Notification::send($student, new StudentResetpasswordNotification($student));
       //OR
       $this->notify(new StudentResetpasswordNotification($student,$newPassword));
    }


    public function random()
    {
        $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $clen   = strlen( $chars )-1;
        $id  = '';
        $length = 10;
        for ($i = 0; $i < $length; $i++) {
            $id .= $chars[mt_rand(0,$clen)];
        }
        return ($id);
    }



        /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    // public function broker()
    // {
    //     return Password::broker('student');
    // }

}
