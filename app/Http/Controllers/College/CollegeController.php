<?php

namespace App\Http\Controllers\College;
use App\Model\College\CollegeDetail;
use App\Model\College\courseOffers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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
            return $next($request);
        });
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
     
      public function insertBooth(Request $request)
      {
        
        $res = 'success';
        $msg = "Done";
        $id = Auth::user()->id;
        $clgname= Auth::user()->college_name;
        $clgDetais = CollegeDetail::find($id);
        $old = Input::get('college_booth'); 
        $new ='/college/images/selected_booth/'.$clgname.'.jpg';
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

    protected function dashboard()
    {
        return view('college/dashboard');
    }

    protected function createprofile()
    {
        return view('college.create_profile');
    }

   

}
