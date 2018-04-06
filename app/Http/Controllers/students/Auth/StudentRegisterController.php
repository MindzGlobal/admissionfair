<?php

namespace App\Http\Controllers\students\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\students\Student;
use App\Model\students\StudentEducationDetails;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Exception;

use Auth;
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
    protected $redirectTo = 'student/profile';

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

    protected function guard()
    {
        return Auth::guard('student');
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
        if($student->save()){

            $email_token = Str::random(40);
            $OTP= mt_rand(100000,(int)999999);

            $studentVerfify = new UserVerification;
            $studentVerfify->unique_id = $student->student_id;
            $studentVerfify->email_token= $email_token;
            $studentVerfify->mobile_token =$OTP;
           
            if($studentVerfify->save()){
               $this->sendStudentVerificationEmail_And_Otp($student,$email_token,$OTP);
                 
              // $this->guard('student')->login($student);//update
              // Session::flash('success','Success ,verify your account through Email Or OTP.');
              // return view('student.pages.otp_form'); //redirect()->route('student.otpform');//->with(['status'=>'success','message'=>'Success ,verify your account through Email Or OTP.']);
              //  return view('student.pages.otp_form')->with('mobile',$student->mobile);
              //    ->withErrors(['status'=>'success','message'=>'Success ,verify your account through Email Or OTP.']);
               return redirect('student/otp')->with('mobile',$student->mobile)
                      ->with('success','Registration Successfull ,verify your account through Email Or OTP.');

            }
          //Token Not Generated
          return redirect()->back()
                 ->withErrors(['status'=>'danger','message'=>'Sorry ,Something went wrong please try again later.']);
        }//unable to save the data
        return redirect()->back()->withErrors('errors',$exception);
    }

    // return $this->registered($request, $user)
    // ?: redirect($this->redirectPath());

    public function random()
    {
        $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@&!";
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
        
      //  Mail::to($thisStudent['email'])->send(new StudentVerifyEmail($thisStudent,$email_token));
    }

    public function authenticateStudentEmail($hashed_studentId,$email_token)
    {
        $thisStudent=UserVerification::where(['email_token'=>$email_token])->first();
        $student_id=$thisStudent->unique_id;
        $education_details=StudentEducationDetails::where('student_id',$student_id)->first();

        //if(Hash::check($student_id,$hashed_studentId)){
         if(password_verify($student_id,$hashed_studentId)){

          $unVerifiedStudent=Student::where(['student_id'=>$student_id , 'email_verified'=>0])->first();
                
            if(!empty($unVerifiedStudent)){
                if((Student::where(['student_id'=>$student_id,'email_verified'=>0])->update(['email_verified'=>1]))>0){
                      UserVerification::where(['unique_id'=>$student_verify->unique_id])->update(['email_token'=>Null]);
                   
                    return view('student.auth.login')->with('success','Your e-mail is verified successfully ,You can login now.');
                }
                return view('student.auth.login')->with('danger','Sorry ,Something Went Wrong Please try Again Later.');
            }//here we can resend if route need
         return view('student.auth.login')->with('warning','Already verified ,your email has been verified Already,You can login Now.');
        }
        else{
            return view('student.auth.login')->with('danger','Sorry , your email cannot be identified.');
        }
    }
}
