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
        $this->middleware('auth:student')->except('logout');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Showprofile(Request $request)
    {
       
      $education_details=null;
      $graduation_details=null;
        if(Auth::user()->otp_verified>0){
            
         $education_details=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
        
         if(!is_null($education_details)){
            $graduation_details=StudentGraduationDetails::firstOrNew(['student_id'=>Auth::user()->student_id]);
           
            return view('student.pages.student_dashboard',['students'=>Auth::user(),'education'=>$education_details,'graduation'=>$graduation_details]);
         }
         return redirect('student/addprofile')
                ->with('success','Login Successfull ,Complete the form to proceed further');
    
        }
        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);

    }

    public function addEducationdetails(Request $request)
    {
        
     return view('student.pages.add_student_details');

    }

    public function addOrupdateStudentDetails(Request $request){

    
        $student = Student::find(Auth::user()->id);
        if(!is_null($student)){
            $student->first_name = Input::get("first_name");
            $student->last_name = Input::get("last_name");
            //$student->email = Input::get("email");
            //$student->mobile = Input::get("mobile");
            $student->date_of_birth = Input::get("date_of_birth");
            $student->gender = Input::get("gender");
            $student->fatherName = Input::get("father_name");
            $student->fatherEmail = Input::get("father_email");
            $student->fatherMobile = Input::get("father_mobile");
            $student->country = Input::get("country");
            $student->state = Input::get("state");
            $student->city = Input::get("city");
            $student->pincode = Input::get("pincode");  
            $student->address = Input::get("address");    
            $student->about_you = Input::get("about_you");    

            if($student->update()) {
            
                $education=StudentEducationDetails::firstOrNew(['student_id'=>Auth::user()->student_id]);

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
                $education->save();  
                
                if(Input::get("university_name")!=null && Input::get("university_name")!=""){
                
                    $graduation=StudentGraduationDetails::firstOrNew(['student_id'=>Auth::user()->student_id]);

                    $graduation->student_id = Auth::user()->student_id;
                    $graduation->university_name = Input::get("university_name");
                    $graduation->college_name = Input::get("college_name");
                    $graduation->graduation_type = Input::get("graduation_type");
                    $graduation->course= Input::get("course");
                    $graduation->department = Input::get("department");
                    $graduation->college_yop= Input::get("college_yop");
                    $graduation->marks = Input::get("marks");
                    $graduation->percentage = Input::get("percentage");  
                    $graduation->save();
                }
            return redirect('student/profile')->with('success','Profile Updated Successfully');
            }
        return redirect()->back()->withErrors(['status'=>'danger','message'=>'Oops ,Something Went Wrong ,Please try again later']);
        }
        return redirect()->back()->withErrors(['status'=>'danger','message'=>'Something Went Wrong ,Please try again later']);

    }

    public function showEditForm(Request $request){
     
        if(Auth::user()->otp_verified){
         
            $student = Student::find(Auth::user()->id);
            $education=StudentEducationDetails::where('student_id',Auth::user()->student_id)->first();
            $graduation=StudentGraduationDetails::firstOrNew(['student_id'=>Auth::user()->student_id]);
                
            return view('student.pages.edit_student',
            ['students'=>$student,'education'=>$education,'graduation'=>$graduation]);
        }
        return view('student.pages.otp_form')->with('mobile', Auth::user()->mobile);
    }

    public function uploadprofileImage(Request $request){
       

        if($request->hasFile('profileimage')){
            $profile_imagePath = Student::where('student_id',Auth::user()->student_id)->value('profile_image');

            if(File::exists(public_path().'/'.$profile_imagePath)) {
                
                File::delete(public_path().'/'.$profile_imagePath);
            }
            
            $file=$request->file('profileimage');
            $fileName = Auth::user()->student_id. '_' . $file->getClientOriginalName();
            $filePath = 'student/images/profile_images/'.$fileName;
        
           $file->move(public_path('/student/images/profile_images'),$fileName);

            if( $student=Student::where('student_id',
               Auth::user()->student_id)->update(['profile_image'=>$filePath])>0){

               return redirect('student/profile')->with('success', 'Profile picture uploaded Successfully!');
            }
          return redirect()->back()
          ->withErrors(['status'=>'danger','message'=>'Unable to upload Picture,Please try again later']);
        }
        return redirect()->back()
          ->withErrors(['status'=>'danger','message'=>'Something Went Wrong ,Please try again later']);

    }


    public function deleteprofileImage(Request $request){

        $profile_imagePath = Student::where('student_id',Auth::user()->student_id)->value('profile_image');
           
        if(File::exists(public_path().'/'.$profile_imagePath)) {
                
            File::delete(public_path().'/'.$profile_imagePath);
            if( $student=Student::where('student_id',
               Auth::user()->student_id)->update(['profile_image'=>null])>0){

                return redirect('student/profile')->with('success', 'Profile picture Deleted Successfully!');
            }
          return redirect()->back()
            ->withErrors(['status'=>'danger','message'=>'Unable to Delete Picture,Please try again later']);
        }
        return redirect()->back()
        ->withErrors(['status'=>'danger','message'=>'Something Went Wrong ,Please try again later']);
    }

}