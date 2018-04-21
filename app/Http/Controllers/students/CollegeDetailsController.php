<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\College\courseOffers;
use App\Model\College\College_media;
use Auth;
use Session;

class CollegeDetailsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth:student'])->except('logout');
    }

    public function showBooth(Request $request)
    {
        if(Auth::user()->otp_verified>0){

          $college= User::where('mobile_verification','Yes')->orderBy('id','asc') ->get();
         // dd($college);
      
             return view('student.pages.booth',['college'=>$college]);
        }
    }

    public function showSinglebooth(Request $request)
    {
        if(Auth::user()->otp_verified>0){
            if(!is_null($request->reg_id)){
                $college= User::where('reg_id',$request->reg_id)->first();
                $courseDetail = courseOffers::where('reg_id',$request->reg_id)
                                ->orderBy('course_department', 'ASC')
                                ->groupBy('course_offer')
                                ->get(['course_offer AS course',"course_department AS departments"]);
                        
                       foreach ($courseDetail as $arrayData){
                        
                        $departments= courseOffers::where(['reg_id'=>$request->reg_id,'course_offer'=>$arrayData['course']])
                                                      ->get(['course_department AS Dept','id']);
                       
                        $arrayData['departments']=$departments;
                       }    
                     
                return view('student.pages.singlebooth',['college'=>$college,'courseDetail'=> $courseDetail]);
            }
            return redirect('student/booth')->with('danger', 'Something Went Wrong Please try again Later');
        }
    }
    

    public function coursedepartments(Request $request)
    {

        if(Auth::user()->otp_verified>0){
            if(!is_null($request->reg_id) && !is_null($request->dept_id)){
               
               $college= User::where('reg_id',$request->reg_id)->first();
               $course = courseOffers::find($request->dept_id);
            //    $course111 =$course->faculties;
            //   dd($course111[0]->faculty_name);
               $alldept = courseOffers::where(['reg_id'=>$request->reg_id,'course_offer'=>$course->course_offer])->orderBy('course_department', 'ASC')
                                                ->get(["course_department AS departments",'id']);
                              
                return view('student.pages.course_department',['college'=>$college,'faculties'=>$course->faculties,'courseGallery'=>$course->courseGallery,'course'=>$course ,'alldept'=> $alldept,'selected'=>$request->dept_id]);
            }
            return redirect('student/booth')->with('danger', 'Something Went Wrong Please try again Later');
        }
        return redirect()->back()->with('danger', 'Something Went Wrong Please try again Later');

    }

    public function showSelectedDepartment(Request $request)
    {
        if(Auth::user()->otp_verified>0){
           
            if(!is_null($request->reg_id) && !is_null($request->DeptId)){
               $college= User::where('reg_id',$request->reg_id)->first();
               $course = courseOffers::find($request->DeptId);
               
               $alldept = courseOffers::where(['reg_id'=>$request->reg_id,'course_offer'=>$course->course_offer])
                                                ->orderBy('course_department', 'ASC')
                                                ->get(["course_department AS departments",'id']);
                              
                     
                return view('student.pages.course_department',['college'=>$college,'course'=>$course ,'alldept'=> $alldept,'selected'=>$request->DeptId]);
            }
            return redirect('student/booth')->with('danger', 'Something Went Wrong Please try again Later');
        }
        return redirect()->back()->with('danger', 'Something Went Wrong Please try again Later');

    }

    public function collegeImageGallery(Request $request)
    {
        
        if(Auth::user()->otp_verified>0){
            
            if(!is_null($request->clg) ){
           
                $college= User::where('reg_id',$request->clg)->first();
                $media = College_media::where(['reg_id'=>$request->clg,'file_type'=>"Image"])->paginate(6);
                   // dd($media);
                return view('student.pages.Gallery',['college'=>$college ,'media'=>$media]);
            }
            return redirect('student/booth')->with('danger', 'Something Went Wrong Please try again Later');
        }
        return redirect()->back()->with('danger', 'Something Went Wrong Please try again Later');

    }

    
    public function collegevideoGallery(Request $request)
    {
        if(Auth::user()->otp_verified>0){
            
            if(!is_null($request->clg) ){
           
                $college= User::where('reg_id',$request->clg)->first();
                $media = College_media::where(['reg_id'=>$request->clg,'file_type'=>"Video"])->paginate(6);  
                    
                return view('student.pages.video_gallery',['college'=>$college ,'media'=>$media]);
            }
            return redirect('student/booth')->with('danger', 'Something Went Wrong Please try again Later');
        }
        return redirect()->back()->with('danger', 'Something Went Wrong Please try again Later');

    }


}
