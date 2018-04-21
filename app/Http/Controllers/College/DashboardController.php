<?php

namespace App\Http\Controllers\College;
use App\Model\College\CollegeDetail;
use App\Model\College\courseOffers;
use App\Model\StudentAppliedHistory;
use App\Model\students\Student;
use App\Model\students\Student_Graduation__Details;
use App\Model\students\Student_Education_Details;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Auth;



class DashboardController extends Controller
{
    protected $search;
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $mobileVerificationStatus = Auth::user()->mobile_verification;
            if($mobileVerificationStatus == 'No'){
                return redirect()->route('otpverification');
            }
            else if(Auth::user()->compilation_status!='Done') {
                if(!in_array(Route::currentRouteName(), array('createprofile','insertprofile'))){
                  return redirect()->route('createprofile');
                }
            }
            return $next($request);
        });
    }

    public function dashboard(Request $request){
    $this->search = $request->search;    
    $reg_id = Auth::user()->reg_id;
      $user = DB::table('student_applied_histories')
            ->where('student_applied_histories.college_id',$reg_id)
            ->join('students', 'student_applied_histories.student_id', '=', 'students.student_id')
            ->select('student_applied_histories.*', 'students.first_name', 'students.email','students.mobile','students.last_name','students.profile_image')
            ->paginate(3);
      $courseCount =  courseOffers::where('reg_id',$reg_id)->distinct('course_offer')->count(); 
      $departmentCount =  courseOffers::where('reg_id',$reg_id)->distinct('course_department')->count();       
      return view("college.dashboard",['users' => $user,'courseCount'=>$courseCount, 'departmentCount'=>$departmentCount,'search'=>$this->search]);
    }

    public function dashboardsearch(Request $request){
        $this->search = $request->search;
        $reg_id = Auth::user()->reg_id;
          $user = DB::table('student_applied_histories')
                ->where('student_applied_histories.college_id',$reg_id)
                ->where(function($query)
                    {
                        $query->where('students.first_name','like','%'.$this->search.'%');
                        $query->orwhere('students.email','like','%'.$this->search.'%');
                        $query->orwhere('students.mobile','like','%'.$this->search.'%');
                        $query->orwhere('students.last_name','like','%'.$this->search.'%');
                        $query->orwhere('course','like','%'.$this->search.'%');
                        $query->orwhere('pay_status','like','%'.$this->search.'%');
                    })
                ->join('students', 'student_applied_histories.student_id', '=', 'students.student_id')
                ->select('student_applied_histories.*', 'students.first_name', 'students.email','students.mobile','students.last_name','students.profile_image')
                ->paginate();
                //->toSql();
         //dd($user);   
          $courseCount =  courseOffers::where('reg_id',$reg_id)->distinct('course_offer')->count(); 
          $departmentCount =  courseOffers::where('reg_id',$reg_id)->distinct('course_department')->count();       
          return view("college.dashboard",['users' => $user,'courseCount'=>$courseCount, 'departmentCount'=>$departmentCount,'search'=>$this->search]);
        }
}
