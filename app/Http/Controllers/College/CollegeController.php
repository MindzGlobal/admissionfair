<?php

namespace App\Http\Controllers\College;
use App\Model\College\CollegeDetail;
use App\Model\College\courseOffers;
// use App\Model\students\Student;
// use App\Model\students\Student_Graduation__Details;
// use App\Model\students\Student_Education_Details;
// use App\Model\StudentAppliedHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use File;
use App\Model\UserVerification;
use Illuminate\Support\Str;



class CollegeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $mobileVerificationStatus = Auth::user()->mobile_verification;
            if($mobileVerificationStatus == 'No'){
                return redirect()->route('otpverification');
            } 
            // else if(Auth::user()->compilation_status!='Done') {
            //   if(!in_array(Route::currentRouteName(), array('createprofile','insertprofile'))){
            //     return redirect()->route('createprofile');
            //   }
            // }
            return $next($request);
        });
    }

    protected function createprofile()
    {
        return view('college.create_profile');
    }

    // Insert profile details of college
      
    public function select_booth()
    {
      return view('college.select_booth');
    }

    public function packegeview()
    {
      return view('college.subscribe_price');
    }

    public function insertProfile(Request $request)
      {
        $res = 'success';
        $msg = "Done";
        $id = Auth::user()->id;

        $str_clgDetais = implode (",", $request->get('college_category'));

        $clgDetais = CollegeDetail::find($id);
        $clgDetais->college_name = Input::get('name');
        $clgDetais->college_email = Input::get('email');
        $clgDetais->college_number_1 = Input::get('mobile');
        $clgDetais->college_number_2 = Input::get('college_number_1');
        $clgDetais->state = Input::get('state');
        $clgDetais->pincode = Input::get('pincode');
        $clgDetais->city = Input::get('city');
        $clgDetais->website = Input::get('website');
        $clgDetais->university_name = Input::get('university_name');
        $clgDetais->college_type = Input::get('college_type');
        $clgDetais->college_category = $str_clgDetais;
        $clgDetais->college_address = Input::get('college_address');
        $img = Input::file('college_img');
        $video = Input::file('college_video');
        $brochure = Input::file('college_brochure');
  
        if($img=$request->file('college_img')){
  
          $name = str_random(6) . '_' . $img->getClientOriginalName();
          $destination_path = '/college/images/clg_images';
          $img->move(public_path().$destination_path, $name);
          $file_url = 'college/images/clg_images/'.$name;
          $clgDetais->college_img = $file_url;
  
          // $file = Input::file('college_img');
          // $file->move(public_path().'/college/images/clg_images', $file->getClientOriginalName());
          // $clgDetais->college_img = $file->getClientOriginalName();
  
        }
  
        if($video=$request->file('college_video')){
  
          $name = str_random(6) . '_' . $video->getClientOriginalName();
          $destination_path = '/college/images/clg_videos';
          $video->move(public_path().$destination_path, $name);
          $file_url = 'college/images/clg_videos/'.$name;
          $clgDetais->college_video = $file_url;
          
          // $file = Input::file('college_video');
          // $file->move(public_path().'/college/images/clg_videos', $file->getClientOriginalName());
          // $clgDetais->college_video = $file->getClientOriginalName();
  
        }
  
          if($brochure=$request->file('college_brochure')){
  
            $name = str_random(6) . '_' . $brochure->getClientOriginalName();
            $destination_path = '/college/images/clg_brochure';
            $brochure->move(public_path().$destination_path, $name);
            $file_url = 'college/images/clg_brochure/'.$name;
            $clgDetais->college_brochure = $file_url;
  
          // $file = Input::file('college_brochure');
          // $file->move(public_path().'/college/images/clg_brochure', $file->getClientOriginalName());
          // $clgDetais->college_brochure = $file->getClientOriginalName();
  
          }
        
        if(!$clgDetais->update())
        {
          $res = 'Error';
          $msg = "Some Error Occurred!";
        }
        
        
        $course_offer = Input::get('course_offer');
        $course_duration = Input::get('course_duration');
        $course_total_fee = Input::get('course_total_fee');
        $fee_structure_file_name = Input::get('fee_structure_file_name');
        $course_department = Input::get('course_department');
        $files = Input::file('fee_structure_file_name');
        //dd($files);
  
  
        $insertData = array();
        for($i=0; $i<count($course_offer);$i++)
        {
  
          $file_url='';
          $name = '';
          if($files[$i]!='')
          {
            $name = str_random(6) . '_' . $files[$i]->getClientOriginalName();
            $destination_path = '/college/images/docs';
            $files[$i]->move(public_path().$destination_path, $name);
            $file_url = 'college/images/docs/'.$name;
          }
  
          $insertData[] = [
            'course_offer'  => $course_offer[$i],
            'course_duration'   => $course_duration[$i],
            'course_total_fee'  => $course_total_fee[$i],
            'fee_structure_file_name'  => $name,
            'fee_structure_file_url' => $file_url,
            'course_department'  => $course_department[$i],
            ];
        }
        $news = new courseOffers();
        $news->insert($insertData);
  
        // for($i=0; $i<=count($course_offer);$i++)
        // {
        //     $news = new courseOffers();
        //     $news->course_offer = $course_offer[$i];
        //     $news->course_duration = $course_duration[$i]; 
        //     $news->course_total_fee = $course_total_fee[$i];  
        //     $news->fee_structure_file_name = $fee_structure_file_name[$i];
        //     $news->course_department = $course_department[$i];   // here add [$i]
        // }
  
        if(!$news)
        {
          $res = 'Error';
          $msg = "Some Error Occurred!";
        }
        return $this->Result($res,$msg);
      }
  
    // Update profile details  
    
    public function updateformprofile(Request $request){ //To show view
      $id = Auth::user()->id;
      $reg_id = Auth::user()->reg_id;
      $user = CollegeDetail::find($id);
      $course = courseOffers::where('reg_id',$reg_id)->get();
      return view('college.update_profile',['user' => $user,'courseoffer'=>$course]);
  }

  public function updatecollegedetails(Request $request){
      $id = Auth::user()->id;
      $user = CollegeDetail::find($id);
      $user->college_name = $request->Input('name');
      $user->college_email = $request->Input('email');
      $user->college_number_1 = $request->Input('mobile');
      $user->college_number_2 = $request->Input('college_number_1');

      $user->state = $request->Input('state');
      $user->city = $request->Input('city');
      $user->pincode = $request->Input('pincode');

      $user->college_state = Input::get('state');
      $user->college_city = Input::get('city');
      $user->college_pincode = Input::get('pincode');

      $user->website = $request->Input('website');
      $user->college_address = $request->Input('college_address');
      $user->save();
      return redirect("college/update_profile");       
  }

  public function updatecollegecourse(Request $request){
    $id = Auth::user()->id;
    $reg_id = Auth::user()->reg_id;

    $user = CollegeDetail::find($id);
    $user->university_name = $request->Input('university_name');
    $user->college_type = $request->Input('college_type');
    // $user->$str_clgDetais = explode(",", $model->college_category);
   

    courseOffers::where('reg_id',$reg_id)->delete();
    $course_offer = Input::get('course_offer');
    $course_duration = Input::get('course_duration');
    $course_total_fee = Input::get('course_total_fee');
    $fee_structure_file_name = Input::get('fee_structure_file_name');
    $course_department = Input::get('course_department');
    $course_description = Input::get('course_description');
    $files = Input::file('fee_structure_file_name');

    $insertData = array();
    for($i=0; $i<count($course_offer);$i++)
    {

      $file_url='';
      $name = '';
      if($files[$i]!='')
      {
        $name = str_random(6) . '_' . $files[$i]->getClientOriginalName();
        $destination_path = '/college/images/docs';
        $files[$i]->move(public_path().$destination_path, $name);
        $file_url = 'college/images/docs/'.$name;
      }

      $insertData[] = [
        'reg_id'  => $reg_id,
        'course_offer'  => $course_offer[$i],
        'course_duration'   => $course_duration[$i],
        'course_description'  => $course_description[$i],
        'course_total_fee'  => $course_total_fee[$i],
        'fee_structure_file_name'  => $name,
        'fee_structure_file_url' => $file_url,
        'course_department'  => $course_department[$i],
        ];
    }
    // dd($insertData);
    $user->save();
    $news = new courseOffers();
    $news->insert($insertData);

    return redirect("college/update_profile"); 
    }

  public function updatecollegemedia(Request $request){
    $id = Auth::user()->id;
    $clgDetais = CollegeDetail::find($id);
    
      if($img=$request->file('college_img'))
      {
        echo $name = str_random(6) . '_' . $img->getClientOriginalName();
        $destination_path = '/college/images/clg_images';
        $img->move(public_path().$destination_path, $name);
        $file_url = 'college/images/clg_images/'.$name;
        $clgDetais->college_img = $file_url;
      }

        if($video=$request->file('college_video'))
        {
          $name = str_random(6) . '_' . $video->getClientOriginalName();
          $destination_path = '/college/images/clg_videos';
          $video->move(public_path().$destination_path, $name);
          $file_url = 'college/images/clg_videos/'.$name;
          $clgDetais->college_video = $file_url;
        }
  
        if($brochure=$request->file('college_brochure'))
        {
          $name = str_random(6) . '_' . $brochure->getClientOriginalName();
          $destination_path = '/college/images/clg_brochure';
          $brochure->move(public_path().$destination_path, $name);
          $file_url = 'college/images/clg_brochure/'.$name;
          $clgDetais->college_brochure = $file_url;
        }
               
      $clgDetais->update();
     
      return redirect("college/update_profile");
  }
   
    //Select booth for the college
      
    public function insertBooth(Request $request)
      {
        
        $res = 'success';
        $msg = "Done";
        $id = Auth::user()->id;
        $clgname= Auth::user()->college_name;
        $clgDetais = CollegeDetail::find($id);
        $old = Input::get('college_booth'); 
        $new ='/college/images/selected_booth/'.$clgname.'.png';
        $new1 = File::copy($old, public_path().$new);
        $clgDetais->college_booth = $new;
        if(!$clgDetais->update())
        {
          $res = 'Error';
          $msg = "Some Error Occurred!";
        }

       // $news = new courseOffers();

        return $this->Result($res,$msg);
      }

    //To display student profile details

    public function std_profile(Request $request){ //To show view
      // $student = Student::where('student_id','STDvn3t7KIvxL')->get();
      // return view('college.std_profile',['student' => $student]);
      $student_id = $request->student_id;
      $student = DB::table('students')->where('student_id',$student_id)->first();
      $student_education = DB::table('student_education_details')->where('student_id',$student_id)->first();
      $student_graduation = DB::table('student_graduation_details')->where('student_id',$student_id)->first();
      $student_applied = DB::table('student_applied_histories')->where('student_id',$student_id)->first();
      return view("college.std_profile",['students' => $student,'student_educations' => $student_education,'student_graduations' => $student_graduation,
      'student_applied' => $student_applied]);
    }
   

}
