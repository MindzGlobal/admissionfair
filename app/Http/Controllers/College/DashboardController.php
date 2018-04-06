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
      $user = DB::table('student_applied_histories')
            ->join('students', 'student_applied_histories.student_id', '=', 'students.student_id')
            ->join('users', 'student_applied_histories.college_id', '=', 'users.reg_id')
            ->select('student_applied_histories.*', 'students.first_name', 'students.email','students.mobile','students.last_name','students.profile_image')
            ->get();    
      return view("college.dashboard",['users' => $user]);
    }
}
