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
use Auth;



class DashboardController extends Controller
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

    public function dashboard(Request $request){
      $reg_id = Auth::user()->reg_id;
      $user = DB::table('student_applied_histories')
            ->where('student_applied_histories.college_id',$reg_id)
            ->join('students', 'student_applied_histories.student_id', '=', 'students.student_id')           
            ->select('student_applied_histories.*', 'students.first_name', 'students.email','students.mobile','students.last_name','students.profile_image')
           ->paginate(3);
    //   $user = DB::table('student_applied_histories')->paginate(3);
      return view("college.dashboard",['users' => $user]);
    }
}
