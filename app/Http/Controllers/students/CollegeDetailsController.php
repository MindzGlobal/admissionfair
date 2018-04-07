<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\College\courseOffers;
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
      
             return view('student.pages.booth',['college'=>$college]);
        }
    }

    public function showSinglebooth(Request $request)
    {
        if(Auth::user()->otp_verified>0){
            if(!is_null($request->reg_id)){
               // StudentGraduationDetails::firstOrNew(['student_id'=>Auth::user()->student_id]);
                $college= User::where('reg_id',$request->reg_id)->first();
                $courseDetail = courseOffers::where('reg_id',$request->reg_id)
                                ->orderBy('course_department', 'ASC')
                                ->groupBy('course_offer')
                                //->having('count', '>', 100)
                                ->get(['course_offer AS course',"course_department AS departments"]);
                      // dd($courseDetail[0]['course_department']);     
                       foreach ($courseDetail as $arrayData){
              
                        //print($arrayData['course']).'</br>';
                        $departments= courseOffers::where(['reg_id'=>$request->reg_id,'course_offer'=>$arrayData['course']])
                                                      ->get(['course_department AS Dept','id']);
                       // print($departments).'</br>';
                        $arrayData['departments']=$departments;
                       }    
                      // print($courseDetail).'</br>';
                      // dd($college);  
                return view('student.pages.singlebooth',['college'=>$college,'courseDetail'=> $courseDetail]);
            }
            return redirect('student/booth')->with('danger', 'Something Went Wrong Please try again Later');
        }
    }
    

    public function coursedepartments(Request $request)
    {

        if(Auth::user()->otp_verified>0){
            if(!is_null($request->reg_id) && !is_null($request->dept_id)){
               // $college= User::where('reg_id',$request->reg_id)->first();
               // $courseDetail = courseOffers::find($request->reg_id);
               $college= User::where('reg_id',$request->reg_id)->first();
             //  $course = courseOffers::where('id',$request->dept_id)->value('course_offer');
               $course = courseOffers::find($request->dept_id);
               $alldept = courseOffers::where(['reg_id'=>$request->reg_id,'course_offer'=>$course->course_offer])->orderBy('course_department', 'ASC')
                                                ->get(["course_department AS departments",'id']);
                              
                                                //dd($course->);
                      //  $departments=null;
                    //     foreach ($courseDetail as $arrayData){
             
                    //    $departments= courseOffers::where(['reg_id'=>$request->reg_id,'course_offer'=>$arrayData['course']])
                    //                                  ->get(['course_department AS Dept','id']);
                    //    $arrayData['departments']=$departments;
                    //   }    
                return view('student.pages.course_department',['college'=>$college,'course'=>$course ,'alldept'=> $alldept]);
            }
            return redirect('student/booth')->with('danger', 'Something Went Wrong Please try again Later');
        }
        return redirect()->back()->with('danger', 'Something Went Wrong Please try again Later');

    }

    public function downloadDocuments(Request $request)
    {
        //dd($request->id);
        $file_path = courseOffers::find($request->id)->value('fee_structure_file_url');
        $headers = array(
            'Content-Type: application/pdf',
          );
        
        return response()->download(public_path().'/'.$file_path,'filename.pdf',$headers);
    }

    public function collegeGallery(Request $request)
    {
    
    
    return view('student.pages.Gallery');

    }
    
    // public function getDownload()
    // {
    //     //PDF file is stored under project/public/download/info.pdf
    //     $file= public_path(). "/download/info.pdf";
    
    //     $headers = array(
    //               'Content-Type: application/pdf',
    //             );
    
    //     return Response::download($file, 'filename.pdf', );
    // }    

}
