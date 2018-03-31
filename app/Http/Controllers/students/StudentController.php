<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator; 
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
    //dd(Auth::user()->student_id);
    //    if ($request->session()->flash()){
    //      dd(session()->all());
    //    }
   // dd($request->all());
      $education_details=null;
      $graduation_details=null;
        if(Auth::user()->otp_verified>0){
            //dd('1.1----'.Auth::user()->otp_verified);
            
         $education_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
         //dd('2----'.$education_details);
         if(!is_null($education_details)){
            $graduation_details=StudentGraduationDetails::where('student_id',Auth::user()->student_id)->first();
           // dd('3----'.$education_details);
            //dd($graduation_details);
            return view('student.pages.student_dashboard',['students'=>Auth::user(),'education'=>$education_details,'graduation'=>$graduation_details]);
         //return view('student.pages.student_dashboard')->with('student',$education_details,'graduation',$graduation_details);
         }
         return view('student.pages.add_student_details')
                ->with(['status'=>'success','message'=>'Already Verified,you can Access your Account Now']);
    
        }
        //return redirect()->route('student.otpform');
        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);

    }

    public function ShowOtpForm(Request $request)
    {

        // if ($request->session(any())){
        //     dd(session()->all());
        //   }
        $education_details=null;
        $graduation_details=null;
       if(Auth::user()->otp_verified==0){

        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);

        }else{ //if aldready verified redirect to profile edit page
         $education_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
        
         if(!is_null($education_details)){
            $graduation_details=StudentGraduationDetails::where('student_id',Auth::user()->student_id)->first();
           
            return view('student.pages.student_dashboard',['students'=>Auth::user(),'education'=>$education_details,'graduation'=>$graduation_details]);
        // return view('student.pages.student_dashboard')->with('student',$education_details);
         }
         return view('student.pages.add_student_details')
                ->with(['status'=>'success','message'=>'Already Verified,you can Access your Account Now']);
    
        }
    
    }
   
    public function verifyStudentOtp(Request $request)
    {
        //dd($request->userMobile);
        $education_details=null;
        $graduation_details=null;

        if(Auth::user()->mobile==$request->userMobile){
            if(Auth::user()->otp_verified==0){
                $student_verify=UserVerification::where(['mobile_token'=>$request->otp_value])->first();
                
                if(!is_null($student_verify)){
                    if((Student::where('student_id',$student_verify->unique_id)->update(['otp_verified' =>1]))>0){

                         UserVerification::where(['unique_id'=>$student_verify->unique_id])->update(['mobile_token'=>Null]);
                         $education_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
                       
                         if(!is_null($education_details)){
                            $graduation_details=StudentGraduationDetails::where('student_id',Auth::user()->student_id)->first();

                            return view('student.pages.student_dashboard',
                                   ['students'=>Auth::user(),'education'=>$education_details,'graduation'=>$graduation_details])
                                   ->with(['status'=>'success','message'=>'successfully Verified ,You can Access your Account Now']);

                           // Session::reflash('success','successfully Verified ,You can Access your Account Now.');
                           // return view('student.pages.student_dashboard')->with(['student'=>$education_details,'status'=>'success','message'=>'successfully Verified ,You can Access your Account Now']);
                          // return redirect()->route('student/profile');
                        }
                        return view('student.pages.add_student_details')
                              ->with(['status'=>'success','message'=>'Already Verified,you can Access your Account Now']);
                    }
                    return redirect()->back()->withErrors(['status'=>'danger','message'=>' Sorry ,Something Went Wrong ,Please try again later']);
                 }
               return redirect()->back()->withErrors(['status'=>'danger','message'=>' Sorry ,Please Enter the Correct OTP']);
            }else{
                 //if aldready verified redirect to profile edit page AND it is used for reset and forgot password verification
              if(Auth::user()->otp_verified==1){
                  
                if(!is_null($education_details)){
                    return view('student.pages.student_dashboard',
                    ['students'=>Auth::user(),'education'=>$education_details,'graduation'=>$graduation_details]);
          
                    //return redirect()->route('student/profile');
                  //return view('student.pages.student_dashboard')->with('student',$education_details);
                }
                return view('student.pages.add_student_details')
                            ->with(['status'=>'success','message'=>'Already Verified,you can Access your Account Now']);
               // return view("retun to the edit details page ")->with(['status'=>'success','message'=>'Already Verified,you can Access your Account Now']);
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


    public function addOrupdateStudentDetails(Request $request){

    
        $student = Student::find(Auth::user()->id);
        //dd('1----'.$student);
        if(!is_null($student)){
            $student->first_name = Input::get("first_name");
            $student->last_name = Input::get("last_name");
            //$student->email = Input::get("email");
            //$student->mobile = Input::get("mobile");
            $student->date_of_birth = Input::get("date_of_birth");
            $student->gender = Input::get("gender");
            $student->country = Input::get("country");
            $student->state = Input::get("state");
            $student->city = Input::get("city");
            $student->pincode = Input::get("pincode");  
            $student->address = Input::get("address");    
            $student->about_you = Input::get("about_you");    

            if($student->update()) {
            
                $education=StudentEducationDetails::firstOrNew(['student_id'=>Auth::user()->student_id]);

            //  dd('1$education----'.$education);
                $education->student_id = Auth::user()->student_id;
                $education->ssc_board = Input::get("ssc_board");
                $education->ssc_medium = Input::get("ssc_medium");
                $education->ssc_yop= Input::get("ssc_yop");
                $education->ssc_marks = Input::get("ssc_marks");
                $education->ssc_perc= Input::get("ssc_perc");
                $education->hsc_board = Input::get("hsc_board");
                $education->hsc_medium = Input::get("hsc_medium");
                $education->hsc_yop = Input::get("hsc_yop");
                $education->hsc_marks= Input::get("hsc_marks");
                $education->hsc_perc = Input::get("hsc_perc");  
                $education->update();  
                
                if(Input::get("university_name")!=null && Input::get("university_name")!=""){
                
                    $graduation=StudentGraduationDetails::firstOrNew(['student_id'=>Auth::user()->student_id]);
                // dd('1$graduation----'.$graduation);
                    $graduation->student_id = Auth::user()->student_id;
                    $graduation->university_name = Input::get("university_name");
                    $graduation->college_name = Input::get("college_name");
                    $graduation->course= Input::get("course");
                    $graduation->department = Input::get("department");
                    $graduation->college_yop= Input::get("college_yop");
                    $graduation->marks = Input::get("marks");
                    $graduation->percentage = Input::get("percentage");  
                    $graduation->update();
                // dd('1$graduation save----'.$graduation);

                }
            return redirect('student/profile')->withErrors(['status'=>'success','message'=>'Profile Updated Successfully ']);
            }
        return redirect()->back()->withErrors(['status'=>'danger','message'=>'Oops ,Something Went Wrong ,Please try again later']);
        }
        return redirect()->back()->withErrors(['status'=>'danger','message'=>'Something Went Wrong ,Please try again later']);

    }

    public function showEditForm(Request $request){
        if(Auth::user()->otp_verified){
        
            $student = Student::find(Auth::user()->id);
            $education=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
            $graduation=StudentGraduationDetails::where('student_id',Auth::user()->student_id)->first();
                
            return view('student.pages.edit_student',
            ['students'=>$student,'education'=>$education,'graduation'=>$graduation]);
        }
        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);
    }

    public function uploadprofileImage(Request $request){
        // $regid = Auth::user()->id;
        // $user = User::find($regid);
            $student = student::find(16);
            if(Input::hasFile('image')){
            $file=Input::file('image');
            $name = str_random(6) . '_' . $file->getClientOriginalName();
            $file->move(public_path().'/student/images/profile_images',  Auth::user()->student_id);
            $student->profile_image = 'student/images/profile_images/'. Auth::user()->student_id;
        }
            $student->update();
            return redirect("student/student_dashboard");
        }


    public function deleteprofileImage(Request $request){

            $student = student::find(Auth::user()->student_id);
            //File::delete();
            File::delete(public_path().'/'.$student->profile_image);
            $student->profile_image = 'student/images/profile_images/default.png';   
            $student->update();
            return redirect('student/student_dashboard');
        }
    }