<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\students\Student;
use Illuminate\Validation\Validator; 
use App\Model\students\StudentEducationDetails;
use App\Model\students\StudentGraduationDetails;

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
    public function index(Request $request)
    {
       // $value = $request->session()->get('key');
      //  return view('home')->with(['data'=>$value]);
    //  return view('student.auth.login');
    return view('student.pages.edit_student_details');
    }

    public function about()
    {
        return view('about');
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

    $education=new StudentEducationDetails;
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

    $graduation=new StudentGraduationDetails;
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
  $student=DB::table('students')->where('id','=',16)->first();
  $education=DB::table('student_education_details')->where('id','=',16)->get();
  $graduation=DB::table('student_graduation_details')->where('id','=',16)->get();
  //dd($student);
  return view('student.pages.student_dashboard',['students'=>$student,'education'=>$education,'graduation'=>$graduation]);
}

public function edit_student()
{
    $student =student::where('id', '=',16)->first();
    //dd($student);
    $education =StudentEducationDetails::where('id', '=',16)->first();
    $graduation =StudentGraduationDetails::where('id', '=',16)->first();
    // $education=DB::table('student__education__details')->where('id','=',6)->get();
    // $graduation=DB::table('student__graduation___details')->where('id','=',4)->get();
    //$student=student::find(4)->where('id', '=', 4);
    return view('student.pages.edit_student',['students'=>$student,'education'=>$education,'graduation'=>$graduation]);
}
public function update_student(Request $request)
    {

    	$student = student::find(16);
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
    
        $education=StudentEducationDetails::find(16);
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
    
        $graduation=StudentGraduationDetails::find(16);
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
        $student = student::find(16);
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
        $student = student::find(16);
        //File::delete();
        File::delete(public_path().'/student/images/profile_images'. $student->profile_image);
         $student->profile_image = 'student/images/profile_images/default.png';   
         $student->save();
        return redirect('student/student_dashboard');
      }
}