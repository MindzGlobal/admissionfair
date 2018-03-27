<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\students\StudentEducationDetails;
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
    public function index(Request $request)
    {
        if(Auth::user()->otp_verified>0){
            return view('student.pages.student_dashboard');
        }
        return redirect()->route('student.otpform');
     // return ShowOtpForm(); Auth::user()->mobile
    }

    public function ShowOtpForm(Request $request)
    {
    
       if(Auth::user()->otp_verified==0){

        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);

       }else{ //if aldready verified redirect to profile edit page
        $eduaction_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->count();
        
        if(!is_null($eduaction_details)){
    
         return redirect('/student/profile')->with('student',$eduaction_details);
        }
        return view("retun to the edit details page ")->with(['status'=>'success','title'=> 'Already Verified','message'=>'you can Access your Account Now']);
      }
    
    }
   
    public function verifyStudentOtp(Request $request)
    {
      //  dd($request->otp_value.'--'.$request->userMobile.'-='.Input::get('userMobile'));
      // dd(Auth::user()->mobile .'-'.$request->userMobile);
        if(Auth::user()->mobile==$request->userMobile){
            if(Auth::user()->otp_verified==0){
                $verify_student=UserVerification::where(['unique_id'=>$request->otp_value])->first();
                $student_id=$thisStudent->unique_id;

               return "verify";
            }
            return redirect('/student/profile')->with('status', 'Welcome Back');
        }
        Session::flash('success', 'User was successful added!');
      return redirect()->back()->withErrors(['title'=>'Oops','error'=>'Something Went Wrong ,Please try again later']);
    }

}
