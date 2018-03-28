<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\students\Student;
use App\Model\students\StudentEducationDetails;
use App\Model\students\StudentGraduationDetails;
use App\Model\UserVerification;
use Auth;
use Session;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Showprofile(Request $request)
    {
      //  dd(Auth::user());
        if(Auth::user()->otp_verified>0){
            
         $education_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
        
         if(!is_null($education_details)){
            $graduation_details=StudentGraduationDetails::where('student_id',Auth::user()->student_id)->first();
    
         return view('student.pages.student_dashboard')->with('student',$education_details,'graduation',$graduation_details);
         }
         return view("retun to the edit details page ")->with(['status'=>'success','message'=>'Already Verified ,you can Access your Account Now']);
       
        }
        //return redirect()->route('student.otpform');
        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);

    }

    public function ShowOtpForm(Request $request)
    {
    
       if(Auth::user()->otp_verified==0){

        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);

        }else{ //if aldready verified redirect to profile edit page
         $education_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
        
         if(!is_null($education_details)){
            $graduation_details=StudentGraduationDetails::where('student_id',Auth::user()->student_id)->first();
    
         return view('student.pages.student_dashboard')->with('student',$education_details);
         }
         return view("retun to the edit details page ")->with(['status'=>'success','message'=>'Already Verified ,you can Access your Account Now']);
       }
    
    }
   
    public function verifyStudentOtp(Request $request)
    {
        //dd($request->userMobile);
        if(Auth::user()->mobile==$request->userMobile){
            if(Auth::user()->otp_verified==0){
                $student_verify=UserVerification::where(['mobile_token'=>$request->otp_value])->first();
                $education_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
                      
                if(!is_null($student_verify)){
                    if((Student::where('student_id',$student_verify->unique_id)->update(['otp_verified' =>1]))>0){
                         UserVerification::where(['unique_id'=>$student_verify->unique_id])->update(['mobile_token'=>Null]);
                        
                         if(!is_null($education_details)){
                             
                            Session::reflash('success','successfully Verified ,You can Access your Account Now.');
                           // return view('student.pages.student_dashboard')->with(['student'=>$education_details,'status'=>'success','message'=>'successfully Verified ,You can Access your Account Now']);
                           return redirect()->route('student/profile');
                        }
                        return view("retun to the edit details page ")->with(['status'=>'success','message'=>'Already Verified ,you can Access your Account Now']);
                    }
                    return redirect()->back()->withErrors(['status'=>'danger','message'=>' Sorry ,Something Went Wrong ,Please try again later']);
                 }
               return redirect()->back()->withErrors(['status'=>'danger','message'=>' Sorry ,Please Enter the Correct OTP']);
            }else{
                 //if aldready verified redirect to profile edit page AND it is used for reset and forgot password verification
              if(Auth::user()->otp_verified==1){
                  
                if(!is_null($education_details)){
                    return redirect()->route('student/profile');
                  //return view('student.pages.student_dashboard')->with('student',$education_details);
                }
                return view("retun to the edit details page ")->with(['status'=>'success','message'=>'Already Verified,you can Access your Account Now']);
              }
              return redirect()->back()->withErrors(['status'=>'warning','message'=>'Sorry ,please Verify with new OTP']);
           }
        }
        return redirect()->back()->withErrors(['status'=>'danger','message'=>'Oops Sorry,Something went wrong Please try again later']);
    }

    protected function resendStudentOtp(Request $request)
    {
            $mobile = Auth::user()->mobile;
            $OTP = mt_rand(100000,(int)999999);
            $message = "Dear $OTP 

            MoneyMindz wishes you Happy B'Day
            
            Click here to become Smart Investor/Earner 08049202111";

            
            $UserVerification = new UserVerification;
            $UserVerification->unique_id = Auth::user()->student_id;
            $UserVerification->mobile_token = $OTP;
            if($UserVerification->save()){
                $this->sendSMS($mobile, $message);
                return redirect()->back()->withErrors(['status'=>'success','message'=>'Success ,New Otp has sent to your Registered Mobile Number']);
            }
            return redirect()->back()->withErrors(['status'=>'danger','message'=>'Oops ,Something Went Wrong ,Please try again later']);
    }

}
