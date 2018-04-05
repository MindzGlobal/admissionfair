<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\students\Student;
use App\Model\UserVerification;
use Session;

class OtpVerificationController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }

    public function ShowOtpForm(Request $request)
    {
       // dd(Session::get('mobile'));
       if(Session::has('mobile')){
         Session::keep(['mobile', Session::get('mobile')]);
       }
        return view('student.pages.otp_form');
    
    }

    
    public function verifyStudentOtp(Request $request)
    {
        $student_verify=UserVerification::where(['mobile_token'=>$request->otp_value])->first();
        
        if(!is_null($student_verify)){
            if((Student::where('student_id',$student_verify->unique_id)->update(['otp_verified'=>1]))>0){

                UserVerification::where(['unique_id'=>$student_verify->unique_id])->update(['mobile_token'=>Null]);
                 
                return redirect('student/login')->with('success','successfully Verified ,You can Login and Access your Account Now');
            }
            return redirect()->back()->withErrors(['status'=>'danger','message'=>' Sorry ,Something Went Wrong ,Please try again later']);
        }
        if(!is_null($request->userMobile)){
            Session::keep(['mobile', $request->userMobile]);
        }
        return redirect()->back()->withErrors(['status'=>'danger','message'=>' Sorry ,Please Enter the Correct OTP']);
    }


    
    protected function resendStudentOtp(Request $request)
    {
       if(!is_null($request->mobile)){
           
            $mobile = $request->mobile;
            $OTP = mt_rand(100000,(int)999999);
            $message = "Dear $OTP 

            MoneyMindz wishes you Happy B'Day
            
            Click here to become Smart Investor/Earner 08049202111";

            $student=Student::where('mobile',$mobile)->value('student_id');
            $UserVerification=UserVerification::firstOrNew(['unique_id'=>$student->student_id]);
            
            $UserVerification->unique_id = $student->student_id;
            $UserVerification->mobile_token = $OTP;
            if($UserVerification->save()){
                $this->sendSMS($mobile, $message);
                return redirect()->back()->withErrors(['status'=>'success','message'=>'Success ,New Otp has sent to your Registered Mobile Number']);
            }
            return redirect()->back()->withErrors(['status'=>'danger','message'=>'Oops ,Something Went Wrong ,Please try again later']);
        }
        return redirect('student/login')->with(['status'=>'waring','message'=>'Login to activate your Account']);

    }





}
