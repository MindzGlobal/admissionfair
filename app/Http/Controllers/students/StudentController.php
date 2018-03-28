<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
       // $this->middleware('auth:student');
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

    

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [  
    //         'email' => [ 'required', 'string', 'email', 'max:255', 'unique:user,usrEmail'],   
    //     ]);
    // }


    public function insert_student(Request $request)
    {
    $student = new Student;
    $student->first_name = Input::get("first_name");
    $student->last_name = Input::get("last_name");
    $student->email = Input::get("email");
    $student->mobile = Input::get("mobile");
    $student->date_of_birth = Input::get("date_of_birth");
    $student->gender = Input::get("gender");
    $student->country = Input::get("country");
    $student->state = Input::get("state");
    $student->city = Input::get("city");
    $student->pincode = Input::get("pincode");  
    $student->address = Input::get("address");    
    $student->about_you = Input::get("about_you");    
    $student->save();

    $education=new Student_Education_Details;
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
    $education->save();  

    $graduation=new Student_Graduation__Details;
    $graduation->university_name = Input::get("university_name");
    $graduation->college_name = Input::get("college_name");
    $graduation->course= Input::get("course");
    $graduation->department = Input::get("department");
    $graduation->college_yop= Input::get("college_yop");
    $graduation->marks = Input::get("marks");
    $graduation->percentage = Input::get("percentage");  
    $graduation->save();
//dd($student);
return redirect('student/student_dashboard');
}

public function fetch_student()
{
  $student=DB::table('students')->where('id','=',10)->first();
  $education=DB::table('student__education__details')->where('id','=',10)->get();
  $graduation=DB::table('student__graduation___details')->where('id','=',10)->get();
  //dd($student);
  return view('student.pages.student_dashboard',['students'=>$student,'education'=>$education,'graduation'=>$graduation]);
}

public function edit_student()
{
    $student =student::where('id', '=',10)->first();
    $education =Student_Education_Details::where('id', '=',10)->first();
    $graduation =Student_Graduation__Details::where('id', '=',10)->first();
    // $education=DB::table('student__education__details')->where('id','=',6)->get();
    // $graduation=DB::table('student__graduation___details')->where('id','=',4)->get();
    //$student=student::find(4)->where('id', '=', 4);
    return view('student.pages.edit_student',['students'=>$student,'education'=>$education,'graduation'=>$graduation]);
}
public function update_student(Request $request)
    {

    	$student = student::find(10);
        $student->first_name =  $request-> Input("first_name");
        $student->last_name =  $request-> Input("last_name");
        $student->email =  $request-> Input("email");
        $student->mobile =  $request-> Input("mobile");
        $student->date_of_birth =  $request-> Input("date_of_birth");
        $student->gender =  $request-> Input("gender");
        $student->country =  $request-> Input("country");
        $student->state =  $request-> Input("state");
        $student->city = $request-> Input("city");
        $student->pincode =  $request-> Input("pincode"); 
        $student->address =  $request-> Input("address"); 
        $student->about_you =  $request-> Input("about_you");       
        $student->save();
    
        $education=Student_Education_Details::find(10);
        $education->ssc_board =  $request-> Input("ssc_board");
        $education->ssc_medium =  $request-> Input("ssc_medium");
        $education->ssc_yop=  $request-> Input("ssc_yop");
        $education->ssc_marks =  $request-> Input("ssc_marks");
        $education->ssc_perc=  $request-> Input("ssc_perc");
        $education->hsc_board =  $request-> Input("hsc_board");
        $education->hsc_medium =  $request-> Input("hsc_medium");
        $education->hsc_yop = $request-> Input("hsc_yop");
        $education->hsc_marks= $request-> Input("hsc_marks");
        $education->hsc_perc =  $request-> Input("hsc_perc");  
        $education->save();  
    
        $graduation=Student_Graduation__Details::find(10);
        $graduation->university_name =  $request-> Input("university_name");
        $graduation->college_name =  $request-> Input("college_name");
        $graduation->course=  $request-> Input("course");
        $graduation->department =  $request-> Input("department");
        $graduation->college_yop=  $request-> Input("college_yop");
        $graduation->marks =  $request-> Input("marks");
        $graduation->percentage =  $request-> Input("percentage");  
        $graduation->save();
    	return redirect('student/student_dashboard');
    }
    public function uploadprofile_image(Request $request){
       // $regid = Auth::user()->id;
       // $user = User::find($regid);
        $student = student::find(10);
        if(Input::hasFile('image'))
       {
           $file=Input::file('image');
           $name = str_random(6) . '_' . $file->getClientOriginalName();
           $file->move(public_path().'/student/images/profile_images',  $name);
           $student->profile_image = 'student/images/profile_images/'. $name;
       }
        $student->update();
        return redirect("student/student_dashboard");
      }

      
      public function deleteprofile_image(Request $request)
      {
        $student = student::find(10);
        //File::delete();
        File::delete(public_path().'\student\images\profile_images'. $student->profile_image);
         $student->profile_image = 'student/images/profile_images/Penguins.jpg';   
         $student->save();
        return redirect('student/student_dashboard');
      }
}