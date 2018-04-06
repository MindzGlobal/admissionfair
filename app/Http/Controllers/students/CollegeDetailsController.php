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

        return view('student.pages.course_department');

    }


}
