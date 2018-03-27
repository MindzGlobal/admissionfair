<?php

namespace App\Http\Controllers\students\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Model\students\StudentEducationDetails;
class StudentLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'student/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }

    public function showLoginForm()
    {
        return view('student.auth.login');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        // dd($this->guard('student')->attempt($this->credentials($request), $request->filled('remember')));//'email_verification'=>'verified'
         $validStudent = Auth::guard('student')->attempt(['email'=>$request->email , 'password'=>$request->password ]); 
     
         return $validStudent;
    //    if($validStudent)
    //     {
    //        // dd(Auth::user()->password);
    //        // return redirect('/student/profile')->with('status', 'Welcome Back');
    //        return $validStudent;
    //     }
    //     else{
    //         return $validStudent;
    //     }
        // return $this->guard('jobseeker')->attempt(
        //     $this->credentials($request), $request->filled('remember'));
    }
     
    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $student)
    {
        //
      //  dd($user);
        if($student->otp_verified>0){
           $eduaction_details=StudentEducationDetails::where('student_id',$student->student_id);
           // return "login";
           if(!is_null($eduaction_details)){

            return redirect('/student/profile')->with('status', 'Welcome Back');
           }
           return "retun to the edit details page ";
        }
        return redirect()->route('student.otpform');//->with('mobile', $user->mobile)
      //  return view('student.pages.otp_form')->with('mobile', $user->mobile);
    }


      /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    public function guard()
    {
        return Auth::guard('student');
    }

       /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        Session::flush();

        $request->session()->invalidate();

        return redirect('/student/login');
    }
}
