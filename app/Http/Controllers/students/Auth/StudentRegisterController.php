<?php

namespace App\Http\Controllers\students\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\students\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Exception;


use Mail;
use App\Model\UserVerification;
use App\Mail\StudentVerifyEmail;
use Session;

class StudentRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'student/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }

    public function signupform()
    {
    	return view('student.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function createStudent(Request $request)
    {
    	Session::flash('status','Check your email to verify your accouunt.');
    	// return view('jobseeker.auth.register');

        $this->validate($request,[
            'first_name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
            'mobile' => 'required|numeric|digits:10|unique:students',
            'email' => 'required|string|email|max:255|unique:students',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
    	$student = new Student;
    	$student->first_name = strtolower($request->get('first_name'));
        $student->last_name = strtolower($request->get('last_name'));
        $student->student_id = 'STD'.self::random();
    	$student->mobile = $request->get('mobile');
    	$student->email = $request->get('email');
    	$student->password = bcrypt($request->get('password'));
    	$student->remember_token = $request->get('_token');
       // $student->email_token =  $email_token;
        if($student->save()){

            $thisStudent = Student::findOrfail($student->id);
            $email_token = Str::random(40);
            $OTP= mt_rand(100000,(int)999999);//dd($OTP);


            $studentVerfify = new UserVerification;
            $studentVerfify->unique_id = $thisStudent->student_id;
            $studentVerfify->email_token= $email_token;
            $studentVerfify->mobile_token =$OTP;
            //dd($OTP);
            if($studentVerfify->save()){
              //if($this->sendStudentVerificationEmail_And_Otp($thisStudent,$email_token,$OTP)>0) {
               $this->sendStudentVerificationEmail_And_Otp($thisStudent,$email_token,$OTP);
               return redirect('student/login')->with('success','Enter OTP to verify your Account.');
              //}
               //unable to save the data
               return "Send verifaction mail OR OTP failed";//->action(); 
            }
            // return redirect()->action('student/login')->with('success','Check your email to verify your accouunt.');
         //Token Not Generated
          return "Token Not Generated";
        }//unable to save the data
        return redirect()->back()->with('errors','$exception');
    }


    public function random()
    {
        $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@&%!";
        $clen   = strlen( $chars )-1;
        $id  = '';
        $length = 10;
        for ($i = 0; $i < $length; $i++) {
            $id .= $chars[mt_rand(0,$clen)];
        }
        return ($id);
    }


    public function sendStudentVerificationEmail_And_Otp($thisStudent,$email_token,$OTP)
    {

        $number = $thisStudent->mobile;
        $name = $thisStudent->first_name;
        // $message = "Dear ".ucwords($name)." 
        // Please verify your Account with OTP NO-".$OTP."
        // To become a part the Great Admission Fair ";
        $message = "Dear $OTP 

        MoneyMindz wishes you Happy B'Day
        
        Click here to become Smart Investor/Earner 08049202111";

        $this->sendSMS($number, $message);
        
        Mail::to($thisStudent['email'])->send(new StudentVerifyEmail($thisStudent,$email_token));
    }

    public function authenticateStudentEmail( $hashed_studentId,$email_token)
    {
       // 
        $thisStudent=UserVerification::where(['email_token'=>$email_token])->first();
        $student_id=$thisStudent->unique_id;
        if(Hash::check($student_id,$hashed_studentId)){

          $unVerifiedStudent=Student::where(['student_id'=>$student_id , 'email_verified'=>0]);
                //Mail::to($thisStudent['student_id'])->send(new jwelcomeEmail($thisJobseeker));
            if(!empty($unVerifiedStudent)){
                if(Student::where(['student_id'=>$student_id,'email_verified'=>0])->update(['email_verified'=>1])>0){

                    Session::flash('status','Verified your account successfully. Please login.');
                    return redirect('student/login')->with('success','Your e-mail is verified. You can login now.');
                   // return 'true';
                }
                return redirect('student/login')->with('errors','Something Went Wrong Please try Again Later.');
            }
         return redirect('student/login')->with('Warning','your email has verified Already,You can login Now.');
        }
        else{
            return redirect('student/login')->with('errors','Sorry your email cannot be identified.');
        }
    }
}
